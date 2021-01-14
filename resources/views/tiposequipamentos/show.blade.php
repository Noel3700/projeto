<h3>Descrição</h3>
ID: {{$tiposequipamentos->id_tipo_equipamento}}<br>
Descrição: {{$tiposequipamentos->descricao}}<br>

<a href="{{route('tiposequipamentos.edit',['id'=>$tiposequipamentos->id_tipo_equipamento])}}">Editar</a>