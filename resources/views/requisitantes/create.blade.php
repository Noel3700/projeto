<form action="{{route('requisitantes.store')}}" method="post">
@csrf

    
    ID Tipo Requisitante: <input type="text" name="id_tipo_requisitante" value="{{old('id_tipo_requisitante')}}"><br><br>
    @if($errors->has('id_tipo_requisitante'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
    @if($errors->has('nome'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Telefone: <input type="text" name="telefone" value="{{old('telefone')}}"><br><br>
    
    Email: <input type="text" name="email" value="{{old('email')}}"><br><br>
    
    Localidade: <input type="text" name="localidade" value="{{old('localidade')}}"><br><br>
    
    Cartão de Cidadão: <input type="text" name="cartao_cidadao" value="{{old('cartao_cidadao')}}"><br><br>
    
   
    
    

    
    
  
    
    
    <input type="submit" value="Enviar">
</form>