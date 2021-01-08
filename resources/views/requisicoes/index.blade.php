<h3>Requisicoes</h3>
@foreach($requisicoes as $requisicao)
<h3>
     <a href="{{route('requisicoes.show',['id'=>$requisicao->id_requisicao])}}">
         {{$requisicao->id_requisicao}}
    </a></h3>                           
@endforeach

<a href="{{route('requisicoes.create')}}" class="btn btn-primary">Adicionar Requisições
</a>