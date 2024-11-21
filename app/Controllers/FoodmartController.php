<?php
namespace App\Controllers;

use App\Models\Foodmart;

class FoodmartController extends BaseController
{
    public function index()
    {
        $model = model(Foodmart::class);
        $data['foodmart'] = $model->getDataFoodmart();
        return view('header', $data) . view('menu') . view('foodmart') . view('footer');
    }
    public function API()
    {
        $model = model(Foodmart::class);
        $data = [
            'message' => 'success',
            'store' => $model->getDataFoodmart()
        ];
        return $this->response->setJSON($data);
    }




}
