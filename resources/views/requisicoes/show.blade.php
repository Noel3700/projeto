<h3>Descrição</h3>
ID: {{$requisicao->id_requisicao}}<br>
Data da Requisição: {{$requisicao->data_requisicao}}<br>
Data Prevista da entrega: {{$requisicao->data_prevista_entrega}}<br>
Data da Entrega: {{$requisicao->data_entrega}}<br>
Data de Renovação: {{$requisicao->data_renovocao}}<br>
Entregue: {{$requisicao->entregue}}<br>
Renovou: {{$requisicao->renovou}}<br>
Hora da Requisição: {{$requisicao->hora_requesicao}}<br>
Hora da Entrega: {{$requisicao->hora_entrega}}<br>
ID do Material: {{$requisicao->id_material}}<br>
Tipo de Equipamento: {{$requisicao->id_tipo_equipamento}}<br>
Observações: {{$requisicao->observacoes}}<br>
ID do Requesitante: {{$requisicao->id_requesitantes}}<br>

@foreach($requisicao->materiais as $material)
Material:{{$material->designacao}}<br>
@endforeach

@foreach($requisicao->requisitantes as $requisitante)
Requisitante:{{$requisitante->nome}}<br>
@endforeach

<a href="{{route('requisicoes.edit',['id'=>$requisicao->id_requisicao])}}">Editar</a>