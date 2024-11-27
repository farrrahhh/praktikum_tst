<?php
//App/Models/user.php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password', 'name'];

    public function validateUser($username, $password, $name)
    {   
        $password = md5($password);
        $user = $this->where('username', $username)
                     ->where('password', $password)
                     ->where('name', $name)
                     ->first();

        return $user;
    }
    

} 