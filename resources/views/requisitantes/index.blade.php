<h3>Requesitantes</h3>
@foreach($requisitantes as $requisitante)
<h3>
     <a href="{{route('requisitantes.show',['id'=>$requisitante->id_requisitante])}}">
         {{$requisitante->nome}}
    </a></h3>                           
@endforeach