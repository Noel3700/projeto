<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposrequisitantes extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_tipo_requisitante";

    protected $table="tipos_requisitantes";
    
        protected $fillable=[
        'tipo'
    ];
    
            public function requisitantes(){
        return $this->hasMany(
        'App\Models\Requisitantes',
        'id_tipo_requisitante'
        );
}
}
