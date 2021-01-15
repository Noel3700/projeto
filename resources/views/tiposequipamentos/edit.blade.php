<form action="{{route('tiposequipamentos.update', ['id'=>$tipoequipamento->id_tipo_equipamento])}}" method="post">
@csrf
 @method('patch')
    
    ID Tipo Equipamento: <input type="text" name="id_tipo_equipamento" value="{{$tipoequipamento->id_tipo_equipamento}}"><br><br>
    @if($errors->has('id_tipo_equipamento'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Descrição: <input type="text" name="descricao" value="{{$tipoequipamento->descricao}}"><br><br>
 
    <input type="submit" value="Enviar">
</form>