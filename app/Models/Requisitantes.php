<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisitantes extends Model
{
    use HasFactory;
    
     protected $primaryKey="id_requisitante";

    protected $table="requisitantes";
    
    protected $fillable=[
        'nome',
        'telefone',
        'email',
        'localidade',
        'cartao_cidadao',
        'id_tipo_requisitante'
    ];
    
            public function requisicoes(){
        return $this->belongsTo(
        'App\Models\Requisicoes',
        'id_requisitante'
        );
            }
        public function tipos_requisitantes(){
        return $this->hasMany(
        'App\Models\Tiposrequisitantes',
        'id_tipo_requisitante'
        );
        }
}
