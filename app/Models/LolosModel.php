<?php namespace App\Models;

use CodeIgniter\Model;

class LolosModel extends Model
{
    protected $table = 'pemainlolos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode','nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat_lengkap','kabupaten','provinsi', 'agama', 'kewarganegaraan', 'no_posisi', 'kaki_terkuat', 'tinggi_badan', 'berat_badan', 'klub_asal', 'email_pemain', 'no_whatsapp', 'dokumen_ktp', 'surat_rekomendasi','foto'];

    public function savePemain($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
    public function getPemain($id)
    {
        // return $this->where(['id' => $id])->first();
        return $this->db->table($this->table)->getWhere(['id' => $id])->getRow();
    }

    public function updatelolos($id, $data)
    {
        // return $this->update($id, $data);
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function deletelolos($id)
{
    $builder = $this->db->table('pemainlolos');
    $builder->where('id', $id);
    $builder->delete();

    return ($this->db->affectedRows() != 0);
}
public function movePemain($id)
    {
        $PemainModel = new PemainModel();
        $pemain = $PemainModel->getPemainById($id);
        // do something with $pemain
    }
    public function search($keyword)
{
    // $builder = $this->table('table');
    // $builder->like('nama_lengkap', $keyword);
    // return $builder;
    $table      = \Config\Database::connect();
    return $this->table('table')->like('nama_lengkap', $keyword);
}
}
