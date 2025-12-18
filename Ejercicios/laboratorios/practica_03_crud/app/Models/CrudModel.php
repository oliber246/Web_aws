<?php
namespace App\Models;
use CodeIgniter\Model;

class CrudModel extends Model
{
    protected $table = 'ci_personas';
    protected $primaryKey = 'id_nombre';
    protected $allowedFields = ['nombre', 'paterno', 'materno'];
}