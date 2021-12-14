<?php

namespace App\Models;

use CodeIgniter\Model;

class BajuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'baju';
    protected $primaryKey       = 'baju_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['baju_id', 'baju_title', 'baju_description', 'baju_harga'];
}
