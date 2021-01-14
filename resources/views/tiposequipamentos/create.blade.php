<form action="{{route('tiposequipamentos.store')}}" method="post">
@csrf

    
    ID Tipo Equipamento: <input type="text" name="id_tipo_equipamento" value="{{old('id_tipo_equipamento')}}"><br><br>
    @if($errors->has('id_tipo_equipamento'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Descrição: <input type="text" name="descricao" value="{{old('descricao')}}"><br><br>
 
    <input type="submit" value="Enviar">
</form>