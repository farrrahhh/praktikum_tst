<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\Foodmart;


class UserController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginUser()
    {
        // Mengambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $name = $this->request->getPost('name');

        // Validasi input kosong
        if (empty($username) || empty($password) || empty($name)) {
            return redirect()->to('/login')->with('error', 'Please fill in all fields.');
        }

        $model = new UserModel();

        // Validasi user
        $user = $model->validateUser($username, $password, $name);

        if ($user) {
            // Set session
            session()->set([
                'username' => $user['username'],
                'isLoggedIn' => true,
            ]);

            // Ambil data customer
            // $model = new CustomerModel();
            // $data['users'] = $model->getCustomerData();
            $model = model(Foodmart::class);
            $data['foodmart'] = $model->getDataFoodmart();
            return view('header', $data) . view('menu') . view('foodmart') . view('footer');


            // Tampilkan halaman home dan data users
            return view('home', $data);
        } else {
            // Login gagal
            return redirect()->to('/login')->with('error', 'Invalid username, password, or name.');
        }
    }
}
