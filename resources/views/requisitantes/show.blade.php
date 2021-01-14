<h3>Descrição</h3>
ID: {{$requisitantes->id_requisitante}}<br>
Nome: {{$requisitantes->nome}}<br>
Telefone: {{$requisitantes->telefone}}<br>
Email: {{$requisitantes->email}}<br>
Localidade: {{$requisitantes->localidade}}<br>
Cartão de Cidadão: {{$requisitantes->cartao_cidadao}}<br>
ID Requisitante: {{$requisitantes->id_tipo_requisitante}}<br>

<a href="{{route('requisitantes.edit',['id'=>$requisitantes->id_requisitante])}}">Editar</a>