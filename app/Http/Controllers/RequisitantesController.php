<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisitantes;

class RequisitantesController extends Controller
{
  public function index(){
      $requisitantes=Requisitantes::all();
        
        return view('requisitantes.index',[
           'requisitantes'=>$requisitantes
       ]);
  }
    
    public function show(Request $request){
        $idRequisitantes=$request->id;
       $requisitantes=requisitantes::where('id_requisitante',$idRequisitantes)->first();
        
        return view('requisitantes.show',[
            'requisitantes'=>$requisitantes
        ]);
    }
    
    
    
    
    
    
}
