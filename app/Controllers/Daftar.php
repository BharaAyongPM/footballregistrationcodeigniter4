<?php

namespace App\Controllers;
use App\Models\PemainModel;
use App\Models\TungguModel;
use CodeIgniter\Controller;

class Daftar extends Controller
{
    protected $PemainModel;

    public function __construct()
    {
        $this->PemainModel = new PemainModel();
        $this->session = \Config\Services::session(); 
        $email = \Config\Services::email();
    }
    public function index()
    {
      helper(['form']);
      $data = [];
      echo view('daftar', $data);
    }

public function tambahpemain()
{
  helper(['form']);
  $data = [];
  echo view('daftar', $data);
}
public function savepemain()
{
  $email = \Config\Services::email();
  helper(['form']);
  $rules = [
    'nama_lengkap'          => 'required|min_length[3]|max_length[25]',
    'tempat_lahir'      => 'required|min_length[3]|max_length[25]',
    'tanggal_lahir'      => 'required|min_length[3]|max_length[25]',
    'jenis_kelamin'      => 'required|min_length[3]|max_length[25]',
    'alamat_lengkap'      => 'required|min_length[3]|max_length[25]',
    'kabupaten'      => 'required|min_length[3]|max_length[25]',
    'provinsi'      => 'required|min_length[3]|max_length[25]',
    'agama'      => 'required|min_length[3]|max_length[25]',
    'kewarganegaraan'      => 'required|min_length[3]|max_length[25]',
    'no_posisi'      => 'required|min_length[1]|max_length[25]',
    
    'kaki_terkuat'      => 'required|min_length[3]|max_length[25]',
    'tinggi_badan'      => 'required|min_length[1]|max_length[25]',
    'berat_badan' => 'required',
      'klub_asal' => 'required',
      'email_pemain' => 'required|valid_email',
      'no_whatsapp' => 'required',
      'dokumen_ktp' => 'uploaded[dokumen_ktp]|max_size[dokumen_ktp,11024]|is_image[dokumen_ktp]',
      // 'surat_rekomendasi_club' => 'uploaded[surat_rekomendasi]|max_size[surat_rekomendasi,1024]|ext_in[surat_rekomendasi,pdf]',
      'foto' => 'uploaded[foto]|max_size[foto,11024]|is_image[foto]'
  ];
  // if (!empty($_FILES['surat_rekomendasi']['name'])) {
    // Konfigurasi upload file
    // $config['upload_path'] = './uploads/';
    // $config['allowed_types'] = 'pdf|jpg|png';
    // $config['max_size'] = 5000;

    // Load library upload
    // $pemainModel = new PemainModel();

    // Mengecek apakah proses upload berhasil atau tidak
    // if ($suratRekomendasi = $this->request->getFile('surat_rekomendasi')) {
    //   $suratRekomendasi->move('./uploads');
    //   $data=['surat_rekomendasi' => $suratRekomendasi->getName()];
       
    // } else {
    //     $error = array('error' => $this->upload->display_errors());
    //     $suratRekomendasi = '';
//     }
// } else {
    // Tidak ada file yang diunggah
//     $suratRekomendasi = '';
// }
  if($this->validate($rules)){
  $pemainModel = new PemainModel();
  $tungguModel = new TungguModel();

  // if ($suratRekomendasi = $this->request->getFile('surat_rekomendasi')) {
  //   $suratRekomendasi->move('./uploads');
  //   $data=['surat_rekomendasi' => $suratRekomendasi->getName()];
     
  // } else {
  //     $error = array('error' => $this->upload->display_errors());
  //     $suratRekomendasi = '';
  // }

      $dokumenKtp = $this->request->getFile('dokumen_ktp');
      // $suratRekomendasi = $this->request->getFile('surat_rekomendasi');
      $foto = $this->request->getFile('foto');

      $dokumenKtp->move('./uploads');
      // $suratRekomendasi->move('./uploads');
      $foto->move('./uploads');
      if (!empty($_FILES['surat_rekomendasi']['name'])) {
      if ($suratRekomendasi = $this->request->getFile('surat_rekomendasi')) {
        $suratRekomendasi->move('./uploads');
      //   $surat = ['surat_rekomendasi' => $suratRekomendasi->getName(),];
      
      // }else {
      //     $error = array('error' => $this->upload->display_errors());
      //     $suratRekomendasi = '';}
      // } else {$suratRekomendasi  = 'tidakadasurat.pdf';
      // }
      $data = [
        'kode' => '11-'.date('dmy', strtotime($this->request->getVar('tanggal_lahir'))).'-'.rand(100,999),
          'nama_lengkap' => $this->request->getVar('nama_lengkap'),
          'tempat_lahir' => $this->request->getVar('tempat_lahir'),
          'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
          'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
          'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
          'kabupaten' => $this->request->getVar('kabupaten'),
          'provinsi' => $this->request->getVar('provinsi'),
          'agama' => $this->request->getVar('agama'),
          'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
          'no_posisi' => $this->request->getVar('no_posisi'),
          'kaki_terkuat' => $this->request->getVar('kaki_terkuat'),
          'tinggi_badan' => $this->request->getVar('tinggi_badan'),
          'berat_badan' => $this->request->getVar('berat_badan'),
          'klub_asal' => $this->request->getVar('klub_asal'),
          'email_pemain' => $this->request->getVar('email_pemain'),
          'no_whatsapp' => $this->request->getVar('no_whatsapp'),
          'dokumen_ktp' => $dokumenKtp->getName(),
          'surat_rekomendasi' => $suratRekomendasi->getName(),
          
          'foto' => $foto->getName(),
          
      ]; 
      
      //   if (is_object($data)) {
      //     $data = [ 'surat_rekomendasi' => $suratRekomendasi->getName(),];
      // } else {
      //     // variabel bukan merupakan objek
      //     $suratRekomendasi = '';
      // }
      // if (!empty($_FILES['surat_rekomendasi']['name'])) {
      //   if ($suratRekomendasi = $this->request->getFile('surat_rekomendasi')) {
      //     $suratRekomendasi->move('./uploads');
          // $data = ['surat_rekomendasi' => $suratRekomendasi->getName(),];
          $pemainId = $pemainModel->savePemain($data);
          // $pemainId = $TungguModel->savePemain($data);
        }else {
            $error = array('error' => $this->move->display_errors());
            $suratRekomendasi = '';
            $data = [
              'kode' => '11-'.date('dmy', strtotime($this->request->getVar('tanggal_lahir'))).'-'.rand(100,999),
              'nama_lengkap' => $this->request->getVar('nama_lengkap'),
              'tempat_lahir' => $this->request->getVar('tempat_lahir'),
              'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
              'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
              'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
              'kabupaten' => $this->request->getVar('kabupaten'),
              'provinsi' => $this->request->getVar('provinsi'),
              'agama' => $this->request->getVar('agama'),
              'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
              'no_posisi' => $this->request->getVar('no_posisi'),
              'kaki_terkuat' => $this->request->getVar('kaki_terkuat'),
              'tinggi_badan' => $this->request->getVar('tinggi_badan'),
              'berat_badan' => $this->request->getVar('berat_badan'),
              'klub_asal' => $this->request->getVar('klub_asal'),
              'email_pemain' => $this->request->getVar('email_pemain'),
              'no_whatsapp' => $this->request->getVar('no_whatsapp'),
              'dokumen_ktp' => $dokumenKtp->getName(),
              // 'surat_rekomendasi' => $suratRekomendasi->getName(),
              
              'foto' => $foto->getName(),
              
          ]; 
            $pemainId = $pemainModel->savePemain($data);
            $pemainId = $TungguModel->savePemain($data);}
        } else {$suratRekomendasi  = 'tidakadasurat.pdf';
          $data = [
            'kode' => '11-'.date('dmy', strtotime($this->request->getVar('tanggal_lahir'))).'-'.rand(100,999),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'agama' => $this->request->getVar('agama'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'no_posisi' => $this->request->getVar('no_posisi'),
            'kaki_terkuat' => $this->request->getVar('kaki_terkuat'),
            'tinggi_badan' => $this->request->getVar('tinggi_badan'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'klub_asal' => $this->request->getVar('klub_asal'),
            'email_pemain' => $this->request->getVar('email_pemain'),
            'no_whatsapp' => $this->request->getVar('no_whatsapp'),
            'dokumen_ktp' => $dokumenKtp->getName(),
            // 'surat_rekomendasi' => $suratRekomendasi->getName(),
          
            'foto' => $foto->getName(),];
            $pemainId = $pemainModel->savePemain($data);
            $pemainId = $tungguModel->savePemain($data);}
      // $pemainId = $pemainModel->savePemain($data);
      {
        if ($this -> request->getMethod() == 'post'){
          $email_pemain = $this->request->getVar('email_pemain');
          $kode = $this->request->getVar('kode');
          $nama = $this->request->getVar('nama_lengkap');
          $pesan= "Terima kasih  ".$nama. "  telah mendaftar. Di  Jakarta League";


          $subject = "Pendaftaran kode  berhasil";
      
          $email = service('email');
          $email->setTo($email_pemain);
          $email->setFrom('bisaboll4@gmail.com');
      
          $email->setSubject($subject);
          $email->setMessage($pesan);
          if ($email->send()) {
            
        } 
        } else {
          $data = $email->printDebugger(['headers']);
            print_r($data);
           
      
      }
      session()->setFlashdata("success", "Data Berhasil Disimpan", "silahkan cek Email");
            return redirect()->to('/daftar');

    
   
    
    }
   } else {
    $data['validation'] = $this->validator;
    echo view('daftar', $data); }
  }
}



  //   session()->setFlashdata("success", "Data Berhasil Disimpan");
      
  //     return redirect()->to('/daftar');
  // } else {
  //   $data['validation'] = $this->validator;
  //   echo view('daftar', $data);
  // }





