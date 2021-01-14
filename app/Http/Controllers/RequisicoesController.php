<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisicoes;

class RequisicoesController extends Controller
{
    public function index(){
        $requisicoes=Requisicoes::all();
        
        return view('requisicoes.index',[
           'requisicoes'=>$requisicoes
       ]);
    }
    
    public function show(Request $request){
        $idRequisicoes=$request->id;
       $requisicao=requisicoes::where('id_requisicao',$idRequisicoes)->with('materiais','requisitantes')->first();
        
        return view('requisicoes.show',[
            'requisicao'=>$requisicao
        ]);
    }
    
    public function create(){
        return view('requisicoes.create');
    }
    
     public function store(Request $request){
        $novoRequisicao = $request->validate([
        
            
        'id_requesitantes'=>['required','min:1','max:500'],
        'data_requisicao'=>['required','date'],
        'data_prevista_entrega'=>['required','date'],
        'data_entrega'=>['nullable','date'],
        'data_renovacao'=>['nullable','date'],
        'entregue'=>['required'],
        'renovou'=>['required'],
        'hora_requisicao'=>['nullable'],
        'hora_entrega'=>['nullable'],
        'id_material'=>['required','min:1','max:100'],
        'id_tipo_equipamento'=>['required','min:1','max:100'],
        'observacoes'  =>['nullable','min:1','max:250']
        ]);
        $requisicoes=Requisicoes::create($novoRequisicao);
        
        return redirect()->route('requisicoes.index',[
            'id'=>$requisicoes->id_requisicao
        ]);
    }
    
     public function edit (Request $request) {
        $idRequisicao=$request->id;
        $requisicao=Requisicoes::where('id_requisicao', $idRequisicao)->first();
        
        return view('requisicoes.edit',[
            'requisicao'=>$requisicao
        ]);   
    }
    
    
    public function update (Request $request){
        $idRequisicao=$request->id;
        $requisicao=Requisicoes::findOrFail($idRequisicao);
        // dd($request->all());
         $atualizarRequisicao = $request->validate([
             
        'id_requesitantes'=>['required','min:1','max:500'],
        'data_requisicao'=>['required','date'],
        'data_prevista_entrega'=>['required','date'],
        'data_entrega'=>['nullable','date'],
        'data_renovacao'=>['nullable','date'],
        'entregue'=>['required'],
        'renovou'=>['required'],
        'hora_requisicao'=>['nullable'],
        'hora_entrega'=>['nullable'],
        'id_material'=>['required','min:1','max:100'],
        'id_tipo_equipamento'=>['required','min:1','max:100'],
        'observacoes'  =>['nullable','min:1','max:250']
        ]);
       
        $requisicao->update($atualizarRequisicao);
        
        return redirect()->route('requisicoes.show',[
            'id'=>$requisicao->id_requisicao
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
}
