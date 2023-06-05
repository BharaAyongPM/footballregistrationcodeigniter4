<?php

namespace App\Controllers\Admin;
use Dompdf\Dompdf;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\PemainModel;
use App\Models\LolosModel;
use App\Models\TungguModel;
use App\Helpers\Imghelp;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Tunggu extends Controller
{
    protected $PemainModel;
     public function __construct()
    {
        $this->PemainModel = new PemainModel();
        $this->session = \Config\Services::session();
    }

public function pemaintunggu($id)
{
    $model = new TungguModel();

    // Mengambil data pemain berdasarkan ID-nya dari database
    $pemain = $model->find($id);

    // Menampilkan data pemain pada halaman pemain
    return view('admin/pemaintunggu', [
        'pemain' => $pemain
    ]);
}
public function loloskan($id)
 {
    $model = new TungguModel();
     $pemain = $model->find($id);

     $lolosModel = new LolosModel();
     $lolosModel->insert($pemain);

     $model->delete($pemain['id']);
     
     session()->setFlashdata("success", "Input Peserta Lolos Berhasil", "silahkan cek Data Dibawah ini");
     return redirect()->to('admin/dbadmin/lolos/');
 }
}