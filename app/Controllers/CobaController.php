<?php
// App/Controllers/CobaController.php 
namespace App\Controllers;

use App\Models\Coba;

class CobaController extends BaseController
{
    // Menampilkan data
    public function index()
    {
        $model = new Coba();
        $data['coba'] = $model->getDataCoba();  // Ambil data dari model
        return view('coba', $data); // Kirim data ke view
    }

    // Menyimpan data input
    public function inputDataCoba()
    {

        // Ambil data dari form
        $keterangan = $this->request->getPost('keterangan');

        // Buat instance model Coba dan masukkan data
        $model = new Coba();
        $model->inputCoba($keterangan);

        // Redirect ke halaman utama setelah data disimpan
        return redirect()->to('/coba');
    }

    public function deleteDataCoba(){
        $model = new Coba();
        $ids = $this->request->getPost('ids');

        if ($ids) {
            // Hapus data berdasarkan ID yang dipilih
            if ($model->deleteDataCoba($ids)) {
                return redirect()->to('/coba')->with('message', 'Data berhasil dihapus.');
            } else {
                return redirect()->to('/coba')->with('error', 'Data gagal dihapus.');
            }
        } else {
            return redirect()->to('/coba')->with('error', 'Tidak ada data yang dipilih.');
        }
    }

    public function updateDataCoba(){
        $model = new Coba();
        $ids = $this->request->getPost('ids');
        $value =  $this->request->getPost('updateValue');

        if ($ids && $value) {
            // Hapus data berdasarkan ID yang dipilih
            if ($model->updateDataCoba($ids, $value)) {
                return redirect()->to('/coba')->with('message', 'Data berhasil diupdate.');
            } else {
                return redirect()->to('/coba')->with('error', 'Data gagal diupdate.');
            }
        } else {
            return redirect()->to('/coba')->with('error', 'Tidak ada data yang dipilih.');
        }
    }
}
