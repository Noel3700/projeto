<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Materiais extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_material";

    protected $table="materiais";
    
    protected $fillable=[
        'id_tipo_equipamento',
        'designacao',
        'codigo_interno',
        'observacoes'
    ];
    
    public function tipo_equipamento(){
        return $this->belongsTo(
        'App\Models\Tiposequipamentos',
        'id_tipo_equipamento'
        );
    }
        public function requisicoes(){
        return $this->belongsTo(
        'App\Models\Requisicoes',
        'id_material'
        );
    }
 }

