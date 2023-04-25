<form action="{{url('/maquinas')}}" method="post">
@csrf
@include('maquinas.form',['modo'=>'Crear'])
</form>