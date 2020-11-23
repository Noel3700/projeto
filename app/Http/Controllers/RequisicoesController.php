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
}
