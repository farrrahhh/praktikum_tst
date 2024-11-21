<?php
namespace App\Models;

use CodeIgniter\Model;

class WorldModel extends Model
{
    protected $table = 'view_world_summary'; // Sesuaikan dengan nama tabel yang benar
    protected $primaryKey = 'id'; // Pastikan ada primary key jika ada

    // Anda bisa mendefinisikan metode untuk mengambil data
    public function getWorldData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
    }
}
