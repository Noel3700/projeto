<form action="{{route('tiposrequisitantes.update', ['id'=>$tiporequisitante->id_tipo_requisitante])}}" method="post">
@csrf
 @method('patch')
    
    ID Tipo Requisitante: <input type="text" name="id_tipo_requisitante" value="{{$tiporequisitante->id_tipo_requisitante}}"><br><br>
    @if($errors->has('id_tipo_requisitante'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Tipo: <input type="text" name="tipo" value="{{$tiporequisitante->tipo}}"><br><br>
 
    <input type="submit" value="Enviar">
</form>