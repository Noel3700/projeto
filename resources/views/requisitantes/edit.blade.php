<form action="{{route('requisitantes.update', ['id'=>$requisitante->id_requisitante])}}" method="post">
@csrf
 @method('patch')
    
    ID Tipo Requisitante: <input type="text" name="id_tipo_requisitante" value="{{$requisitante->id_tipo_Requisitante}}"><br><br>
    @if($errors->has('id_tipo_requisitante'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Nome: <input type="text" name="nome" value="{{$requisitante->nome}}"><br><br>
    @if($errors->has('nome'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Telefone: <input type="text" name="telefone" value="{{$requisitante->telefone}}"><br><br>
    
    Email: <input type="text" name="email" value="{{$requisitante->email}}"><br><br>
    
    Localidade: <input type="text" name="localidade" value="{{$requisitante->localidade}}"><br><br>
    
    Cartão de Cidadão: <input type="text" name="cartao_cidadao" value="{{$requisitante->cartao_cidadao}}"><br><br>
    
   
    <input type="submit" value="Enviar">
</form>