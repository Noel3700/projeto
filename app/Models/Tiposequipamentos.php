<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposequipamentos extends Model
{
    use HasFactory;
    
     protected $primaryKey="id_tipo_equipamento";

    protected $table="tipos_equipamentos";
    
        public function materiais(){
        return $this->hasMany(
        'App\Models\Materiais',
        'id_tipo_equipamento'
        );
            
        
}
}
