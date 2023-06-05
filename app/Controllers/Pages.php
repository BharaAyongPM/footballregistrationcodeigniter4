<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\LolosModel;
use App\Models\PemainModel;
use App\Models\LatihanModel;
use App\Models\TeamModel;
$pager = \Config\Services::pager();
class Pages extends BaseController
{
  function __construct(){
    $this->pemain = new PemainModel();
    $this->latihan = new LatihanModel();
    $this->team = new TeamModel();
  }
    public function index()
    {
        $model = new PemainModel();
        $lolos = new LolosModel();
//   $data['table'] = $model->findAll();
$data = [
    'table' => $model->paginate(5),
    'pager' => $model->pager,
    'lolos' => $lolos->paginate(5),
    'pager' => $lolos->pager,
];

  return view('home', $data, );
    }


public function peserta()
    {
      $currentPage = $this->request->getVar('page_table') ? $this->request->getVar('page_table') : 1;
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
  return view('peserta', $data, );
    }
    public function pesertalolos()
    {
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
  return view('pesertalolos', $data, );
    }
    public function beranda()
	{
		$latihanModel = new LatihanModel();
		$data['jadwal'] = $latihanModel->findAll();
		return view('beranda', $data);
	}

  public function lihattim()
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
  $data[$key]['foto'] = $value->foto;
}
        return view('lihattim', ['data' => $data]);
    }
}