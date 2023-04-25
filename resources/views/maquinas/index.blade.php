@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}} 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<a href="{{url('maquinas/create')}}" class="btn btn-success">Registrar Nueva Maquina</a>
<br>
<br>
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Proveedor</th>
            <th>Concepto</th>
            <th>Importe</th>
            <th>Moneda</th>
            <th>Centro De Costo</th>
            <th>Maquina/Unidad</th>
            <th>Facruta</th>
            <th>Orden De Compra</th>
            <th>Orden De Trabajo</th>
            <th>Status Pago</th>
            <th>Folio Pago</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>
    @foreach($maquinas as $maquina)
    <tr>
        <td>{{$maquina->id}}</td>
        <td>{{$maquina->Proveedor}}</td>
        <td>{{$maquina->Concepto}}</td>
        <td>{{$maquina->Importe}}</td>
        <td>{{$maquina->Moneda}}</td>
        <td>{{$maquina->CentrodeCosto}}</td>
        <td>{{$maquina->MaquinaUnidad}}</td>
        <td>{{$maquina->Factura}}</td>
        <td>{{$maquina->OrdendeCompra}}</td>
        <td>{{$maquina->OrdendeTrabajo}}</td>
        <td>{{$maquina->StatusPago}}</td>
        <td>{{$maquina->FolioPago}}</td>
        <td>
        <a href="{{url('/maquinas/'.$maquina->id.'/edit')}}" class="btn btn-warning">
            Editar
        </a>    
        
        | 

           <form action="{{url('/maquinas/'.$maquina->id) }}" class="d-inline" method="post">
           @csrf
           {{method_field('DELETE')}}

          <input type="submit" onclick="return confirm('¿quieres eliminar?')" class="btn btn-danger" value="Borrar">

           </form>
        
        </td>
    </tr>
    @endforeach
</tbody>
</table>
    {!! $maquinas->links()!!}
</div>
@endsection