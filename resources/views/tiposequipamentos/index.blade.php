<h3>Tipos de Equipamento</h3>
@foreach($tiposequipamentos as $tiposequipamento)
<h3>
     <a href="{{route('tiposequipamentos.show',['id'=>$tiposequipamento->id_tipo_equipamento])}}">
         {{$tiposequipamento->descricao}}
    </a></h3>                           
@endforeach 

<a href="{{route('tiposequipamentos.create')}}" class="btn btn-primary">Adicionar Equipamento
</a>