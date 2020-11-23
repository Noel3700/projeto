<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicoes extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_requisicao";

    protected $table="requisicoes";
    
            public function materiais(){
        return $this->hasMany(
        'App\Models\Materiais',
        'id_material'
        );
            }
        public function requisitantes(){
        return $this->hasMany(
        'App\Models\Requisitantes',
        'id_requisitante'
        );
}
}