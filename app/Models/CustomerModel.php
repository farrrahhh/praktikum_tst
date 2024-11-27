<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    // Tambahkan daftar kolom yang ingin diambil
    protected $allowedFields = ['customer_id', 'customer_fname', 'mi', 'customer_lname', 'fullname'];

    public function getCustomerData()
    {
        // Pastikan semua kolom dipilih
        return $this->select('customer_id, customer_fname, mi, customer_lname, fullname')->findAll();
    }
}
