<?php

namespace App\Controllers\Admin;
use Dompdf\Dompdf;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\PemainModel;
use App\Models\LolosModel;
use App\Helpers\Imghelp;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Lolos extends Controller
{
    protected $PemainModel;
     public function __construct()
    {
        $this->PemainModel = new PemainModel();
        $this->session = \Config\Services::session();
    }

    public function Pemainlolos($id)
    {
        $model = new LolosModel();
    
        // Mengambil data pemain berdasarkan ID-nya dari database
        $pemain = $model->find($id);
    
        // Menampilkan data pemain pada halaman pemain
        return view('admin/pemainlolos', [
            'pemain' => $pemain
        ]);
    }
    public function editlolos($id)
{
    helper(['form']);
    $model = new LolosModel();
    $data['pemain'] = $model->find($id);

    echo view('admin/editlolos', $data);
}
public function deletelolos($id)
{
$model = new LolosModel();
// panggil model untuk menghapus data

// $this->PemainModel->deletepemain($id);
$model->deletelolos($id);
// redirect ke halaman daftar user
return redirect()->to('/admin/dbadmin/lolos');
}
public function lihatlolos($id)
    {
        $pemain = new LolosModel();
        $foto = $pemain->find($id);

        if (!$foto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Foto tidak ditemukan.');
        }

        return view('fotololos', [
            'foto' => $foto,
        ]);
    }
public function updatelolos($id)
{

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
      'dokumen_ktp' => 'uploaded[dokumen_ktp]|max_size[dokumen_ktp,1024]|is_image[dokumen_ktp]',
      'surat_rekomendasi_club' => 'uploaded[surat_rekomendasi]|max_size[surat_rekomendasi,1024]|ext_in[surat_rekomendasi,pdf]',
      'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]'
];
// if($this->validate($rules)){
    $lolosModel = new LolosModel();
    $pemain = $lolosModel->find($id);
    $dokumenKtp = $this->request->getFile('dokumen_ktp');
    $suratRekomendasi = $this->request->getFile('surat_rekomendasi');
    $foto = $this->request->getFile('foto');
    // $namafoto = $this->request->getName();
    
     
        // if (file_exists('uploads/' . $pemain['foto'])) {
        //     unlink('uploads/' . $pemain['foto']);
        // }

        // $destination = 'uploads/' . $pemain['foto'];
        // $result = move_uploaded_file($pemain['foto'], $destination);
        
        // $foto->move('./uploads');
        // $suratRekomendasi->move('./uploads');
        // $dokumenKtp->move('./uploads');
       

    $data = [
      
      'nama_lengkap' => $this->request->getPost('nama_lengkap'),
      'tempat_lahir' => $this->request->getPost('tempat_lahir'),
      'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
      'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
      'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
      'kabupaten' => $this->request->getVar('kabupaten'),
      'provinsi' => $this->request->getVar('provinsi'),
      'agama' => $this->request->getPost('agama'),
      'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
      'no_posisi' => $this->request->getPost('no_posisi'),
      'kaki_terkuat' => $this->request->getPost('kaki_terkuat'),
      'tinggi_badan' => $this->request->getPost('tinggi_badan'),
      'berat_badan' => $this->request->getPost('berat_badan'),
      'klub_asal' => $this->request->getPost('klub_asal'),
      'email_pemain' => $this->request->getPost('email_pemain'),
      'no_whatsapp' => $this->request->getPost('no_whatsapp'),
    //   'foto' => $foto->getName(),
    //   'surat_rekomendasi' => $suratRekomendasi->getName(),
    //   'dokumen_ktp' =>  $dokumenKtp->getName(),
    
  ];
  $lolosModel->updatelolos($id, $data);

    return redirect()->to('admin/dbadmin/lolos');
}
public function editfotololos($id)
{
    helper(['form']);
    $model = new LolosModel();
    $data['pemain'] = $model->find($id);

    echo view('admin/gantifotololos', $data);
}
public function gantifotololos($id)
{
    helper(['form']);
    $rules = [ 'foto' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]'];
    $lolosModel = new LolosModel();
    $pemain = $lolosModel->find($id);
    $foto = $this->request->getFile('foto');
    $foto->move('./uploads');
    $data = ['foto' => $foto->getName(),];
    $LolosModel->updateLolos($id, $data);
    return redirect()->to('admin/pemain/pemainlolos/'.$pemain['id']);

}

public function editktplolos($id)
{
    helper(['form']);
    $model = new LolosModel();
    $data['pemain'] = $model->find($id);

    echo view('admin/gantiktplolos', $data);
}
public function gantiktplolos($id)
{
    helper(['form']);
    $rules = [ 'dokumen_ktp' => 'uploaded[dokumen_ktp]|max_size[dokumen_ktp,1024]|is_image[dokumen_ktp]',];
    $lolosModel = new LolosModel();
    $pemain = $lolosModel->find($id);
    $dokumenKtp = $this->request->getFile('dokumen_ktp');
    $dokumenKtp->move('./uploads');
    $data = ['dokumen_ktp' => $dokumenKtp->getName(),];
    $lolosModel->updateLolos($id, $data);
    return redirect()->to('admin/lolos/pemainlolos/'.$pemain['id']);

}
public function suratlolos($id)
{
    helper(['form']);
    $model = new LolosModel();
    $data['pemain'] = $model->find($id);

    echo view('admin/gantidokumenlolos', $data);

}

public function gantipdflolos($id)
{
    helper(['form']);
    $rules = [ 'surat_rekomendasi_club' => 'uploaded[surat_rekomendasi]|max_size[surat_rekomendasi,1024]|ext_in[surat_rekomendasi,pdf]',];
    $lolosModel = new LolosModel();
    $pemain = $lolosModel->find($id);
    $suratRekomendasi = $this->request->getFile('surat_rekomendasi');
    
    $suratRekomendasi->move('./uploads');
    $data = ['surat_rekomendasi' => $suratRekomendasi->getName(),];
    $lolosModel->updateLolos($id, $data);
    return redirect()->to('admin/pemain/pemainlolos/'.$pemain['id']);

}
public function downloadfotololos($id)
    {
      $lolosModel = new LolosModel();
      $pemain = $lolosModel->find($id);
        if ($pemain) {
            $path = 'uploads/' . $pemain['foto'];
            if (file_exists($path)) {
                return $this->response->download($path, null);
            }
        }
        return redirect()->back();
    }

    public function downloadktplolos($id)
    {
      $lolosModel = new LolosModel();
      $pemain = $lolosModel->find($id);
        // $pemain = $this->LolosModel->find($id);
        if ($pemain) {
            $path = 'uploads/' . $pemain['dokumen_ktp'];
            if (file_exists($path)) {
                return $this->response->download($path, null);
            }
        }
        return redirect()->back();
    }
    public function downloadsuratlolos($id)
    {
        $pemain = $this->LolosModel->find($id);
        if ($pemain) {
            $path = 'uploads/' . $pemain['surat_rekomendasi'];
            if (file_exists($path)) {
                return $this->response->download($path, null);
            }
        }
        return redirect()->back();
    }
    public function exportecellolos()
    {
        $model = new LolosModel();
        $data['pemain'] = $model->findAll();
        return view('ecel', $data);
    }
    public function exportlolos()
{
    $model = new LolosModel();
    $data = $model->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'NO');
    $sheet->setCellValue('B1', 'Nama lengkap');
    $sheet->setCellValue('C1', 'Tempat Lahir');
    $sheet->setCellValue('D1', 'Tanggal Lahir');

    $sheet->setCellValue('E1', 'jenis kelamin');
    $sheet->setCellValue('F1', 'Alamat');
    $sheet->setCellValue('G1', 'Kabupaten');
    $sheet->setCellValue('H1', 'Provinsi');
    $sheet->setCellValue('I1', 'Agama');
    $sheet->setCellValue('J1', 'Kewarganegaraan');
    $sheet->setCellValue('K1', 'Posisi');
    $sheet->setCellValue('L1', 'Kaki Terkuat');
    $sheet->setCellValue('M1', 'TB');
    $sheet->setCellValue('N1', 'BB');
    $sheet->setCellValue('O1', 'Klub Asal');
    $sheet->setCellValue('P1', 'Email');
    $sheet->setCellValue('Q1', 'No Whatsapp');
    $sheet->setCellValue('R1', 'KTP');
    $sheet->setCellValue('S1', 'Surat Rekomendasi');
    $sheet->setCellValue('T1', 'Foto');

    $column =2;
    foreach ($data as $key =>$value ){
        $sheet->setCellValue('A'.$column, ($column-1));
        $sheet->setCellValue('B'.$column, $value['nama_lengkap']);
        $sheet->setCellValue('C'.$column, $value['tempat_lahir']);
        $sheet->setCellValue('D'.$column, $value['tanggal_lahir']);
        $sheet->setCellValue('E'.$column, $value['jenis_kelamin']);
        $sheet->setCellValue('F'.$column, $value['alamat_lengkap']);
        $sheet->setCellValue('G'.$column, $value['kabupaten']);
        $sheet->setCellValue('H'.$column, $value['provinsi']);
        $sheet->setCellValue('I'.$column, $value['agama']);
        $sheet->setCellValue('J'.$column, $value['kewarganegaraan']);
        $sheet->setCellValue('K'.$column, $value['no_posisi']);
        $sheet->setCellValue('L'.$column, $value['kaki_terkuat']);
        $sheet->setCellValue('M'.$column, $value['tinggi_badan']);
        $sheet->setCellValue('N'.$column, $value['berat_badan']);
        $sheet->setCellValue('O'.$column, $value['klub_asal']);
        $sheet->setCellValue('P'.$column, $value['email_pemain']);
        $sheet->setCellValue('Q'.$column, $value['no_whatsapp']);
        $sheet->setCellValue('R'.$column, $value['dokumen_ktp']);
        $sheet->setCellValue('S'.$column, $value['surat_rekomendasi']);
        $sheet->setCellValue('T'.$column, $value['foto']);
        $column++;

    }

    $sheet->getstyle('A1:T1')->getFont()->setBold(true);
    $styleArray=[
        'borders' => [
            'allBorders' =>[
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color '=> ['argb' => 'FF000000'],
            ],
        ],
    ];
      $sheet->getStyle('A1:T'.($column-1))->applyFromArray($styleArray);

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('H')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->getColumnDimension('J')->setAutoSize(true);
    $sheet->getColumnDimension('K')->setAutoSize(true);
    $sheet->getColumnDimension('L')->setAutoSize(true);
    $sheet->getColumnDimension('M')->setAutoSize(true);
    $sheet->getColumnDimension('N')->setAutoSize(true);
    $sheet->getColumnDimension('O')->setAutoSize(true);
    $sheet->getColumnDimension('P')->setAutoSize(true);
    $sheet->getColumnDimension('Q')->setAutoSize(true);
    $sheet->getColumnDimension('R')->setAutoSize(true);
    $sheet->getColumnDimension('S')->setAutoSize(true);
    $sheet->getColumnDimension('T')->setAutoSize(true);

    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=data_pemain_lolos.xlsx');
    header('Cache-Control: max-age=0');
$writer->save('php://output');
exit();
 }
  }
