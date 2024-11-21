<?php
namespace App\Controllers;

use App\Models\WorldModel;

class WorldController extends BaseController
{
    public function index()
    {
        $model = new WorldModel(); // Inisialisasi model
        $data['world'] = $model->findAll(); // Mengambil semua data dari tabel

        return view('world', $data); // Mengirim data ke view
    }
}
