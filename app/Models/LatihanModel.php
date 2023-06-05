<?php

namespace App\Models;

use CodeIgniter\Model;

class LatihanModel extends Model
{
    protected $table = 'latihan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_jadwal', 'tempat', 'tanggal', 'waktu','waktuend','team', 'nama_lengkap','foto'];

    public function getLatihan()
    {
        return $this->findAll();
    }
    public function getjadwalterakhir()
    {
      $builder = $this->db->table('latihan');
      $builder->select('team');
      $builder->orderBy('id', 'DESC');
      $builder->limit(1);
      $query = $builder->get();
      
      $row = $query->getRow();
      return $row;
    }

    public function getLatihanById($id)
    {
        return $this->where(['id' => $id])->first();
    }
    public function getteam($id)
    {
        // return $this->where(['id' => $id])->first();
        return $this->db->table($this->table)->getWhere(['id' => $id])->getRow();
    }

    public function saveLatihan($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }

    public function updateLatihan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteLatihan($id)
    {
        return $this->delete(['id' => $id]);
    }
    public function get_latihan_pemain()
{
    $builder = $this->db->table('latihan');
    $builder->select('latihan.nama_lengkap, pemain.foto');
    $builder->join('pemain', 'pemain.nama_lengkap = latihan.nama_lengkap');
    return $builder->get()->getResultArray();
}
public function jointeam()
    {
        $builder = $this->db>table('latihan');
        $builder ->join('datateam', 'datateam.team = latihan.team');
        $query = $builder ->get();
        return $query ->getResult();

    }
}