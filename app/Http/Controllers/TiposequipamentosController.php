<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiposequipamentos;
class TiposequipamentosController extends Controller
{
    public function index(){
        $tiposequipamentos=Tiposequipamentos::all();
        
        return view('tiposequipamentos.index',[
           'tiposequipamentos'=>$tiposequipamentos
       ]);
    }
    
    public function show(Request $request){
        $idTiposequipamentos=$request->id;
       $tiposequipamentos=tiposequipamentos::where('id_tiposequipamentos',$idTiposequipamentos)->first();
        
        return view('tiposequipamentos.show',[
            'tiposequipamentos'=>$tiposequipamentos
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
}
