<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultadesModel extends Model
{
    protected $table = "facultades";
    protected $primaryKey = "codfacultad";
    public $timestamps = "true";
    
}
