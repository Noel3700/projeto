@foreach($requisitantes as $requisitante)
<h3>
     <a href="{{route('requisitantes.show',['id'=>$requisitante->id_requisitante])}}">
         {{$requisitante->id_requisitante}}
    </a></h3>                           
@endforeach