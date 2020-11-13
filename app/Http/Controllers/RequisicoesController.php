<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       $requisicao=requisicoes::where('id_requisicao',$idRequisicoes)->first();
        
        return view('requisicoes.show',[
            'requisicao'=>$requisicao
        ]);
    }
}
