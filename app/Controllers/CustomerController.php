<?php
namespace App\Controllers;

use App\Models\CustomerModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data = [
            'users' => $model->getCustomerData()
        ];
        return view('header', $data) . view('menu') . view('users') . view('footer');
    }

    public function searchAPI($name)
    {
        $model = new CustomerModel();
        $data = [
            'message' => 'success',
            'customer' => $model->get_users_by_name($name)
        ];
        return $this->response->setJSON($data);
    }

    
}