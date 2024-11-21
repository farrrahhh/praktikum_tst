<?php
namespace App\Models;

use CodeIgniter\Model;

class Foodmart extends Model
{
    protected $table = 'store_foodmart';

    public function getDataFoodmart()
    {
        return $this->findAll(1000);
    }
}
