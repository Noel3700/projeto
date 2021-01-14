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
       $tiposequipamentos=tiposequipamentos::where('id_tipo_equipamento',$idTiposequipamentos)->first();
        
        return view('tiposequipamentos.show',[
            'tiposequipamentos'=>$tiposequipamentos
        ]);
    }
        
        
         public function create(){
        return view('tiposequipamentos.create');
    }
    
     public function store(Request $request){
        $novoEquipamento = $request->validate([
        
            
        'descricao'=>['required','min:1','max:150']
    
        ]);
        $tiposequipamentos=Tiposequipamentos::create($novoEquipamento);
        
        return redirect()->route('tiposequipamentos.index',[
            'id'=>$tiposequipamentos->id_tipo_equipamento
        ]);
    }
        
  public function edit (Request $request) {
        $idTiposequipamentos=$request->id;
        $tipoequipamento=Tiposequipamentos::where('id_tipo_equipamento', $idTiposequipamentos)->first();
        
        return view('tiposequipamentos.edit',[
            'tipoequipamento'=>$tipoequipamento
        ]);   
    }
    
    
    public function update (Request $request){
        $idtiposequipamentos=$request->id;
        $tipoequipamento=Tiposequipamentos::findOrFail($idtiposequipamentos);
        
         $atualizarTiposequipamentos = $request->validate([
          'descricao'=>['required','min:1','max:150']
        ]);
        
        $tipoequipamento->update($atualizarTiposequipamentos);
        
        return redirect()->route('tiposequipamentos.index',[
            'id'=>$tipoequipamento->id_tipo_equipamento
        ]);
    }
    

}
