@foreach($tiposequipamentos as $tiposequipamento)
<h3>
     <a href="{{route('tiposequipamentos.show',['id'=>$tiposequipamento->id_tiposequipamentos])}}">
         {{$tiposequipamentos->id_tiposequipamentos}}
    </a></h3>                           
@endforeach