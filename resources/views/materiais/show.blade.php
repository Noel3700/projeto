<h3>Descrição</h3>
ID: {{$material->id_material}}<br>
ID Tipo Equipamento: {{$material->id_tipo_material}}<br>
Designacao: {{$material->designacao}}<br>
Codigo Interno: {{$material->codigo_interno}}<br>
Observações: {{$material->observacoes}}<br><br>


@if(isset($material->requisicoes->data_requisicao))
Requisicao:{{$material->requisicoes->data_requisicao}}<br>
@endif

<a href="{{route('materiais.edit',['id'=>$material->id_material])}}">Editar</a>