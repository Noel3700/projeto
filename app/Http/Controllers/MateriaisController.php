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
    
    public function create(){
        return view('materiais.create');
    }
    
    
    public function store(Request $request){
        $novoMaterial = $request->validate([
            'id_tipo_equipamento'=>['required','min:1','max:100'],
            'designacao'=>['required','min:1','max:50'],
            'codigo_interno'=>['required','min:10','max:10'],
            'observacoes'=>['nullable','min:1','max:255']
        ]);
        $materiais=Materiais::create($novoMaterial);
        
        return redirect()->route('materiais.index',[
            'id'=>$materiais->id_material
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
