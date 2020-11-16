<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisitantes extends Model
{
    use HasFactory;
    
     protected $primaryKey="id_requisitante";

    protected $table="requisitantes";
}
