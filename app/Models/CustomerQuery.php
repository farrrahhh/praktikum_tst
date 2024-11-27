<?php
namespace App\Models;
use CodeIgniter\Model;
class CustomerQuery extends Model{
    protected $table = 'customer';

    public function getDataCustomer($searchTerm = null)
    {
        $query = "SELECT * FROM customer 
                  WHERE fname LIKE ? 
                     OR lname LIKE ? 
                     OR mi LIKE ? 
                  ORDER BY customer_id 
                  LIMIT 10";

        // Jika $searchTerm null, gunakan wildcard '%'
        $likeTerm = $searchTerm ? "%$searchTerm%" : '%';

        return $this->db->query($query, [$likeTerm, $likeTerm, $likeTerm])->getResult();
    }

    public function getCustomerData()
    {
        $result = $this->findAll();
    
        return $result;
    }
    

}
