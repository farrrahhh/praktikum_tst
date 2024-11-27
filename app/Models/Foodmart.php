<?php
namespace App\Models;

use CodeIgniter\Model;

class Foodmart extends Model
{
    protected $table = 'customer';

    public function getDataFoodmart()
    {
        return $this->findAll(1000);
    }
}
