@foreach($materiais as $material)
<h3>
     <a href="{{route('materiais.show',['id'=>$material->id_material])}}">
         {{$material->designacao}}
    </a></h3>                           
@endforeach