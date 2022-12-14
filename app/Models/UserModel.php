<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'userID';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username','password','email','nama'];
}
