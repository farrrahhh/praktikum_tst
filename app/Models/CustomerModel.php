<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function getCustomerData()
    {
        return $this->findAll();
    }

    public function get_users_by_name()
    {
        $name = service('request')->getGet('name'); // Get 'name' parameter from URL
        if (!empty($name)) {
            return $this->like('fullname', $name)->findAll();
        }
    }
    public function getDataCustomer($searchTerm = null) {
        $query = "SELECT * FROM ⁠ customer ⁠ 
                  WHERE fname LIKE ? 
                     OR lname LIKE ? 
                     OR mi LIKE ? 
                  ORDER BY customer_id 
                  LIMIT 10";

        // Wrap the search term with '%' for the LIKE clause
        $likeTerm = "%$searchTerm%";

        // Execute the query with placeholders
        return $this->db->query($query, [$likeTerm, $likeTerm, $likeTerm])->getResult();
    }

}
