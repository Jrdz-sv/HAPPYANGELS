<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

    //Solo para admins
    
    use HasFactory;
    protected $table = "roles"; 

    protected $primaryKey = "idRol"; 

    protected $fillable = ["rol"]; 
    
}
