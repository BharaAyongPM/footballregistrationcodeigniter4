<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\LolosModel;
use App\Models\PemainModel;
use App\Models\TungguModel;
class Dbadmin extends Controller
{

    public function index()
    {$currentPage = $this->request->getVar('page_table') ? $this->request->getVar('page_table') : 1;
      $model = new PemainModel();
      $keyword = $this->request->getVar('keyword');
      $table = \Config\Database::connect();
      if($keyword) {
           $table = $model->search($keyword);
        } else {
            $model = new PemainModel();
            $table = $model ;
          }
       
//   $data['table'] = $model->findAll();
$data = [
    'table' => $model->paginate(5, 'table'),
    // 'table' => $table->paginate(5, 'table'),
    'pager' => $model->pager,
    'currentPage' => $currentPage,
];
    
      return view('admin/home', $data, );
    }
   
    public function lolos()
    {
      session()->setFlashdata("success", "Input Peserta Lolos Berhasil", "silahkan cek Data Dibawah ini");

      $currentPage = $this->request->getVar('page_table') ? $this->request->getVar('page_table') : 1;
      $model = new LolosModel();
      $keyword = $this->request->getVar('keyword');
      $table = \Config\Database::connect();
      if($keyword) {
           $table = $model->search($keyword);
        } else {
            $model = new LolosModel();
            $table = $model ;
          }
       
//   $data['table'] = $model->findAll();
$data = [
    'table' => $model->paginate(5, 'table'),
    // 'table' => $table->paginate(5, 'table'),
    'pager' => $model->pager,
    'currentPage' => $currentPage,
];
      
      return view('admin/lolos', $data, );
    }
    public function tunggu()
    {
      

      $currentPage = $this->request->getVar('page_table') ? $this->request->getVar('page_table') : 1;
      $model = new TungguModel();
      $keyword = $this->request->getVar('keyword');
      $table = \Config\Database::connect();
      if($keyword) {
           $table = $model->search($keyword);
        } else {
            $model = new PemainModel();
            $table = $model ;
          }
       
//   $data['table'] = $model->findAll();
$data = [
    'table' => $model->paginate(5, 'table'),
    // 'table' => $table->paginate(5, 'table'),
    'pager' => $model->pager,
    'currentPage' => $currentPage,
];
      return view('admin/tunggu', $data, );
    }

    
}

