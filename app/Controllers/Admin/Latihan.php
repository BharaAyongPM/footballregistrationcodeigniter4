<?php
namespace App\Controllers\Admin;

use App\Models\LatihanModel;
use App\Models\PemainModel;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\LolosModel;
use App\Models\TeamModel;
use App\Models\TungguModel;
 
class Latihan extends Controller
{
  function __construct(){
    $this->pemain = new PemainModel();
    $this->latihan = new LatihanModel();
    $this->team = new TeamModel();
  }
	public function index()
	{
		$pemainModel = new PemainModel();
		$data['pemain'] = $pemainModel->findAll();
		return view('admin/latihan', $data);
	}

	public function save()
	{
    $pemainModel = new PemainModel();
		$latihanModel = new LatihanModel();
    $teamModel = new TeamModel();
		$request = service('request');
    // $nama_lengkap= implode(',', $request->getPost('nama_lengkap'));
    // $foto= implode(',', $request->getPost('foto'));
    // $foto_pemain = $pemainModel->where('nama_lengkap', $nama_lengkap)->first()['foto'];
		$data = [
      'kode_jadwal' => 'JWL-LTHN'.rand(100,999),
			// 'nama_lengkap' => $request->getPost('nama_lengkap'),
      // 'nama_lengkap' => implode(',', $request->getPost('nama_lengkap')),
      // 'nama_lengkap' => $nama_lengkap,
			'tempat' => $request->getPost('tempat'),
			'tanggal' => $request->getPost('tanggal'),
			'waktu' => $request->getPost('waktu'),
      'waktuend' => $request->getPost('waktuend'),
      'team' =>$request->getPost('team'),
      // 'foto' => $foto,
			
		];

		$latihanModel->insert($data);


		return redirect()->to('admin/latihan/masuktim');
	}
  public function masuktim()
	{
    $pemainModel = new PemainModel();
		$latihan = new LatihanModel();
    $teamModel = new TeamModel();
    $data['team'] = $latihan->findAll();
		$data['pemain'] = $pemainModel->findAll();
    // $teamModel->orderBy('id', 'desc');
    // $lastTeam = $teamModel->getLatestTeam();
    // $data['team'] = $teamModel->first();
    // $db = \Config\Database::connect();
    // $builder = $db->table('latihan');
    // $builder->select('latihan.id, latihan.team, pemain.nama_lengkap ');
    // $builder->join('pemain', 'pemain.id = latihan.id');
    // $query = $builder->get();
    // $data['pemain'] = $query->getResult();

		return view('admin/pemaintim', $data );
	}
//   public function get_alamat_pemain($id)
// {
//     $model_pemain = new PemainModel();
//     $pemain = $model_pemain->find($id);
//     return $pemain['foto'];
// }
public function masuk()
	{
    $request = service('request');
    // $nama = $this->request->getPost('nama_lengkap');
    $pemainModel = new PemainModel();
		// $pemain = $pemainModel->getByNama($nama);
    $teamModel = new TeamModel();
    $teama['team'] = $teamModel->findAll();
		$data['pemain'] = $pemainModel->findAll();
    // $teamModel->insert($data);
    
    // $teamModel->orderBy('id', 'desc');
    // $lastTeam = $teamModel->getLatestTeam();
    // $data['team'] = $teamModel->first();
    
      // Jika data pemain ditemukan, maka ambil data alamat dan posisi
      $data = [
          'id_latihan' => $request->getPost('id_latihan'),
          'id_pemain' => $request->getPost('id_pemain'),

      ];
  // $data = $this ->request->getPost();
  
  $teamModel->insert($data);
		return redirect()->to('admin/latihan/masuktim');
	}
  
  public function team()
    {
      $request = service('request');
        // Ambil data tim dari tabel jadwal
        $model_jadwal = new LatihanModel();
       
        
        // Ambil data pemain dari tabel pemain
        $model_pemain = new PemainModel();
        $pemain = $model_pemain->findAll();
        $teamModel = new TeamModel();
        $team = $teamModel->findAll();
        $latihanModel = new LatihanModel();
        $teama = $latihanModel->getjadwalterakhir();
        // tampilkan view untuk menambahkan pemain ke dalam tim
       
      $pemain = $model_pemain->findAll();
      $nama_lengkap=$model_pemain->getNamaLengkap();
      $foto=$model_pemain->getfoto();
      
        echo view('admin/team', [
          'team' => $team,
          
          // 'teama' => $teama,
          'pemain' => $pemain


      ]);
      $latestTeam = $teamModel->getLatestTeam();
      // $namaTim = $latestTeam['team'];
      // $uploadedFile = $this->request->getVar('foto');
      // $fileName = $uploadedFile->getName();
      $namaPemain = $this->request->getPost('daftar_pemain');
      // $newFileName = $namaPemain . '.' . $uploadedFile->getExtension();
      // $uploadedFile->move(WRITEPATH . 'uploads', $newFileName);
      // $pemain ->where('nama_lengkap', $nama_lengkap)->first();
      // $foto_pemain = $pemain['foto'];
      $nama_pemain = $this->request->getPost('nama_pemain');
      // $foto = $this->get_alamat_pemain($nama_pemain);
      $data = [
        'nama_lengkap' => $namaPemain,
    // 'foto' => $uploadedFile,
            //  'daftar_pemain' => $this->request->getPost('nama_lengkap'),
            //  'team' => $this->request->getPost('team'),
            //  'foto' => $this->request->getPost('foto'),
            'foto' => $foto,
             
              // 'daftar_nama' => $nama_lengkap,
              // 'foto' => $foto,
              'team' => $latestTeam
              // 'teama' => $teama
          
      ];
       $teamModel->saveteam($data);
      // $teamModel->insert($data);
      return redirect()->to('admin/latihan');
      
    }
    

  public function viewjadwal()
    {
        $model = new LatihanModel();
        // $data['latihan_pemain'] = $model->get_latihan_pemain();
        $data['latihan'] = $model->findAll();

        return view('admin/viewjadwal', $data);
    }
    public function viewpeserta()
    {
      $latihanModel = new LatihanModel();
      // $data['latih'] = $latihanModel->find($id);
      $teamModel = new TeamModel();
      $data1 = $teamModel->joinlatihan();
      $data2 = $teamModel->joinpemain();

      $data = array();
      foreach ($data1 as $key => $value) {
      $data[$key]['team'] = $value->team;
      

}
foreach ($data2 as $key => $value) {
  $data[$key]['kode'] = $value->kode;
  $data[$key]['nama_lengkap'] = $value->nama_lengkap;
  $data[$key]['alamat_lengkap'] = $value->alamat_lengkap;
}
        return view('admin/viewpeserta', ['data' => $data]);
    }
    
	}
