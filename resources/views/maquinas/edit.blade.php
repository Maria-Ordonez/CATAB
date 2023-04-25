<form action="{{url('/maquinas/'.$maquinas->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('maquinas.form',['modo'=>'Editar'])
</form>
