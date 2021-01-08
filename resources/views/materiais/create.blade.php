<form action="{{route('materiais.store')}}" method="post">
@csrf
    ID Tipo Equipamento: <input type="text" name="id_tipo_equipamento" value="{{old('id_tipo_equipamento')}}"><br><br>
    @if($errors->has('id_tipo_equipamento'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Designacao: <input type="text" name="designacao" value="{{old('designacao')}}"><br><br>
    @if($errors->has('designacao'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    Codigo Interno: <input type="text" name="codigo_interno" value="{{old('codigo_interno')}}"><br><br>
    @if($errors->has('codigo_interno'))
    <b style="color:red"> Campo Obrigatório (10 Números Obrigatórios)</b>
    <br><br>
    @endif
    
    
    Observacoes: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br><br>
    @if($errors->has('observacoes'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    <input type="submit" value="Enviar">
</form>
    
    











