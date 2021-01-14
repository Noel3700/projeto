<h3>Tipos de Requisitantes</h3>
@foreach($tiposrequisitantes as $tiposrequisitante)
<h3>
     <a href="{{route('tiposrequisitantes.show',['id'=>$tiposrequisitante->id_tipo_requisitante])}}">
         {{$tiposrequisitante->tipo}}
    </a></h3>                           
@endforeach 

<a href="{{route('tiposrequisitantes.create')}}" class="btn btn-primary">Adicionar Tipo de Requisitante
</a>