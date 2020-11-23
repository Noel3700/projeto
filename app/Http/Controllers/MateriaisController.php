<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiais;
class MateriaisController extends Controller
{
    public function index(){
        $materiais=Materiais::all();
        
        return view('materiais.index',[
           'materiais'=>$materiais
       ]);
    }
    
    public function show(Request $request){
        $idMateriais=$request->id;
       $material=Materiais::where('id_material',$idMateriais)->with(['tipo_equipamento','requisicoes'])->first();
        
        return view('materiais.show',[
            'material'=>$material
        ]);
    }
}
