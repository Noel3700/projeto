<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposequipamentos extends Model
{
    use HasFactory;
    
     protected $primaryKey="id_tiposequipamentos";

    protected $table="tiposequipamentos";
}
