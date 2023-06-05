<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'datateam';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','team', 'nama_lengkap','kode', 'foto', 'id_latihan','id_pemain'];

    public function getTeam()
    {
        // Ambil daftar tim dari tabel jadwal
        $db = \Config\Database::connect();
        $query = $db->query("SELECT DISTINCT team FROM latihan");
        return $query->getResultArray();
    }
    public function getLatestTeam()
    {
        
        return $this->where('id', '=', $this->selectMax('id'), false)
                    ->first();
        // $builder = $this->db->table($this->table);
        // $builder->orderBy('id', 'DESC');
        // $builder->limit(1);
        // $query = $builder->get();

        // return $query->getRow();
    }
    public function getPemain($id)
    {
        // return $this->where(['id' => $id])->first();
        return $this->db->table($this->table)->getWhere(['id' => $id])->getRow();
    }
    public function saveteam($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
    public function joinlatihan()
    {
        $builder = $this->db->table('datateam');
        $builder ->join('latihan', 'latihan.id = datateam.id_latihan');
        $query = $builder ->get();
        return $query ->getResult();

    }
    public function joinpemain()
    {
        $builder = $this->db->table('datateam');
        $builder ->join('pemain', 'pemain.id = datateam.id_pemain');
        $query = $builder ->get();
        return $query ->getResult();

    }
    
}