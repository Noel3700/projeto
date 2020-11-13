@foreach($requisicoes as $requisicao)
<h3>
     <a href="{{route('requisicoes.show',['id'=>$requisicao->id_requisicao])}}">
         {{$requisicao->data_requisicao}}
    </a></h3>                           
@endforeach