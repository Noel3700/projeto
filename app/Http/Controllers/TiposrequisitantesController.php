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
    
    
      public function create(){
        return view('tiposrequisitantes.create');
    }
    
     public function store(Request $request){
        $novoTiporequisitante = $request->validate([
        
            
        'tipo'=>['required','min:1','max:150']
    
        ]);
         
        $tiposrequisitantes=Tiposrequisitantes::create( $novoTiporequisitante);
        
        return redirect()->route('tiposrequisitantes.index',[
            'id'=>$tiposrequisitantes->id_tipo_requisitante
        ]);
    }
    
      public function edit (Request $request) {
        $idTiposrequisitantes=$request->id;
        $tiporequisitante=Tiposrequisitantes::where('id_tipo_requisitante', $idTiposrequisitantes)->first();
        
        return view('tiposrequisitantes.edit',[
            'tiporequisitante'=>$tiporequisitante
        ]);   
    }
    
    
    public function update (Request $request){
        $idTiposrequisitantes=$request->id;
        $tiporequisitante=Tiposrequisitantes::findOrFail($idTiposrequisitantes);
        
         $atualizarTiposrequisitantes = $request->validate([
          'tipo'=>['required','min:1','max:150']
        ]);
        
        $tiporequisitante->update($atualizarTiposrequisitantes);
        
        return redirect()->route('tiposrequisitantes.index',[
            'id'=>$tiporequisitante->id_tipo_requisitante
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}




























