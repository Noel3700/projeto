<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicoes extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_requisicao";

    protected $table="requisicoes";
    
    protected $fillable=[
        'data_requisicao',
        'data_prevista_entrega',
        'data_entrega',
        'data_renovacao',
        'entregue',
        'renovou',
        'hora_requisicao',
        'hora_entrega',
        'id_material',
        'id_tipo_equipamento',
        'observacoes'    
    ];
    
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