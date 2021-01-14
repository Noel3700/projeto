<form action="{{route('requisicoes.update', ['id'=>$requisicao->id_requisicao])}}"  method="post">
@csrf
 @method('patch')
    
    ID da Requesitantes: <input type="text" name="id_requesitantes" value="{{$requisicao->id_requesitantes}}"><br><br>
    @if($errors->has('id_requesitantes'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    Data Requisição: <input type="date" name="data_requisicao" value="{{$requisicao->data_requisicao}}"><br><br>
    @if($errors->has('data_requisicao'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    Data prevista da entrega: <input type="date" name="data_prevista_entrega" value="{{$requisicao->data_prevista_entrega}}"><br><br>
    @if($errors->has('data_prevista_entrega'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    Data Entrega: <input type="date" name="data_entrega" value="{{$requisicao->data_entrega}}"><br><br>
    @if($errors->has('data_entrega'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    Entrega: <input type="text" name="entregue" value="{{$requisicao->entregue}}"><br><br>
    
    
    
    Renovar: <input type="text" name="renovou" value="{{$requisicao->renovou}}"><br><br>
    
    
    
    Hora de Entrega: <input type="datetime" name="hora_entrega" value="{{$requisicao->hora_entrega}}"><br><br>
    
     Hora de Requisicao: <input type="datetime" name="hora_requisicao" value="{{$requisicao->hora_requisicao}}"><br><br>
    
    ID Material: <input type="text" name="id_material" value="{{$requisicao->id_material}}"><br><br>
    @if($errors->has('id_material'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    ID Tipo do Equipamento: <input type="text" name="id_tipo_equipamento" value="{{$requisicao->id_tipo_equipamento}}"><br><br>
    @if($errors->has('id_tipo_equipamento'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    Observações: <input type="text" name="observacoes" value="{{$requisicao->observacoes}}"><br><br>
    @if($errors->has('observacoes'))
    <b style="color:red"> Campo Obrigatório</b>
    <br><br>
    @endif
    
    
    <input type="submit" value="Enviar">
</form>