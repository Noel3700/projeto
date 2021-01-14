<form action="{{route('tiposrequisitantes.store')}}" method="post">
@csrf

    
    Tipo Requisitante: <input type="text" name="id_tipo_requisitante" value="{{old('id_tipo_requisitante')}}"><br><br>
    @if($errors->has('id_tipo_requisitante'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Tipo: <input type="text" name="tipo" value="{{old('tipo')}}"><br><br>
    @if($errors->has('tipo'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
 
    
    <input type="submit" value="Enviar">
</form>