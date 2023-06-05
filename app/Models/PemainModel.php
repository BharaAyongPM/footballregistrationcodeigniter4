<?php namespace App\Models;

use CodeIgniter\Model;

class PemainModel extends Model
{
    protected $table = 'pemain';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode','nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat_lengkap','kabupaten','provinsi', 'agama', 'kewarganegaraan', 'no_posisi', 'kaki_terkuat', 'tinggi_badan', 'berat_badan', 'klub_asal', 'email_pemain', 'no_whatsapp', 'dokumen_ktp', 'surat_rekomendasi','foto'];

    public function getLatihan()
    {
        return $this->findAll();
    }
    public function savePemain($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
    public function getNamaLengkap()
{
    return $this->select('nama_lengkap')
                ->findAll();
}
public function getfoto()
{
    return $this->select('foto')
                ->findAll();
}
    public function getPemain($id)
    {
        // return $this->where(['id' => $id])->first();
        return $this->db->table($this->table)->getWhere(['id' => $id])->getRow();
    }

    public function updatePemain($id, $data)
    {
        // return $this->update($id, $data);
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function deletepemain($id)
{
    $builder = $this->db->table('pemain');
    $builder->where('id', $id);
    $builder->delete();

    return ($this->db->affectedRows() != 0);
}
 public function getPemainById($id)
    {
        return $this->find($id);
    }

public function search($keyword)
{
    // $builder = $this->table('table');
    // $builder->like('nama_lengkap', $keyword);
    // return $builder;
    $table      = \Config\Database::connect();
    return $this->table('table')->like('nama_lengkap', $keyword);
}
public function getByNama($nama)
    {
        return $this->where('nama_lengkap', $nama)->first();
    }

}
