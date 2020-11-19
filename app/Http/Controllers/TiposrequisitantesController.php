<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiposrequisitantes;
class TiposrequisitantesController extends Controller
{
   public function index(){
        $tiposrequisitantes=Tiposrequisitantes::all();
        
        return view('tiposrequisitantes.index',[
           'tiposrequisitantes'=>$tiposrequisitantes
       ]);
    }
    
    public function show(Request $request){
        $idTiposrequisitantes=$request->id;
       $tiposrequisitantes=tiposrequisitantes::where('id_tipo_requisitante',$idTiposrequisitantes)->first();
        
        return view('tiposrequisitantes.show',[
            'tiposrequisitantes'=>$tiposrequisitantes
        ]);
    }
}
