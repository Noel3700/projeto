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
    
     public function create(){
        return view('requisitantes.create');
    }
    
     public function store(Request $request){
        $novoRequisitante = $request->validate([
        
            
        'nome'=>['required','min:1','max:150'],
        'telefone'=>['nullable','min:1','max:9'],
        'email'=>['nullable','min:1','max:50'],
        'localidade'=>['nullable','min:1','max:100'],
        'cartao_cidadao'=>['nullable','min:1','max:8'],
        'id_tipo_requisitante'=>['required','min:1','max:100']
    
        ]);
        $requisitantes=Requisitantes::create($novoRequisitante);
        
        return redirect()->route('requisitantes.index',[
            'id'=>$requisitantes->id_requisitantes
        ]);
    }
    
    
    public function edit (Request $request) {
        $idRequisitantes=$request->id;
        $requisitante=Requisitantes::where('id_requisitante', $idRequisitantes)->first();
        
        return view('requisitantes.edit',[
            'requisitante'=>$requisitante
        ]);   
    }
    
    
    public function update (Request $request){
        $idRequisitante=$request->id;
        $requisitante=Requisitantes::findOrFail($idRequisitante);
        
         $atualizarRequisitante = $request->validate([
        'nome'=>['required','min:1','max:150'],
        'telefone'=>['nullable','min:1','max:9'],
        'email'=>['nullable','min:1','max:50'],
        'localidade'=>['nullable','min:1','max:100'],
        'cartao_cidadao'=>['nullable','min:1','max:8'],
        'id_tipo_requisitante'=>['required','min:1','max:100']
        ]);
        
        $requisitante->update($atualizarRequisitante);
        
        return redirect()->route('requisitantes.index',[
            'id'=>$requisitante->id_requisitante
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}

    
    
    
    

