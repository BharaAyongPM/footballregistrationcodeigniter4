<?php 
namespace App\Controllers\Admin;
 
use CodeIgniter\Controller;
use App\Models\AdminModel;
 
class Masuk extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('admin/masuk');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'nama'     => $data['nama'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dbadmin');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('admin/masuk');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('admin/masuk');
        }
    }
    
    public function register()
    {
      helper(['form']);
      $data = [];
      echo view('register', $data);
    }
    public function save()
    {
       
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[25]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }

 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/masuk');
    }
  }