<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\CustomerQuery;
class CustomerControllerQuery extends ResourceController{

    public function searchParamAPI($searchTerm = null)
    {
        $model = new CustomerQuery();
        $data['customers'] =  $model->getDataCustomer($searchTerm);
        return $this->respond($data,200);
    }

}