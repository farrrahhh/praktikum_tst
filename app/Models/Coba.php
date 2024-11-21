<?php
// App/Models/Coba
namespace App\Models;

use CodeIgniter\Model;

class Coba extends Model
{
    protected $table = 'Coba';
    protected $primaryKey = 'id_coba';
    protected $allowedFields = ['keterangan']; // Menentukan kolom yang bisa diinput
    protected $useTimestamps = false; // Jika Anda ingin menggunakan waktu otomatis, set true

    // Menyimpan data
    public function inputCoba($input)
    {
        // Gunakan insert untuk menyimpan data
        return $this->insert(['keterangan' => $input]);
    }

    // Mendapatkan semua data
    public function getDataCoba()
    {
        return $this->findAll();  // Mengambil semua data dari tabel
    }

    public function deleteDataCoba(array $ids){
         // Menghapus data berdasarkan beberapa ID
        return $this->delete($ids);
    }

    public function updateDataCoba(array $ids, String $value){
        return $this->whereIn('id_coba', $ids) // Menentukan kriteria ID yang akan diupdate
                    ->set(['keterangan' => $value]) // Set kolom 'keterangan' dengan nilai baru
                    ->update(); // Jalankan update
    }
}
