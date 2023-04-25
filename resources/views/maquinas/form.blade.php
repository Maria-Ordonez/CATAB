@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{$modo}} Maquina</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
@foreach($errors->all() as $error)
<li>   {{$error}} </li>
@endforeach
</ul>
</div>


 @endif

<div class="form-group">
<label for="Proveedor">Proveedor</label>
    <input type="text" class="form-control" value="{{isset($maquinas->Proveedor)?$maquinas->Proveedor:old('Proveedor')}}" name="Proveedor" id="Proveedor">
    <br>
</div>

<div class="form-group">
    <label for="Concepto">Concepto</label>
    <input type="text" class="form-control" value="{{isset($maquinas->Concepto)?$maquinas->Concepto:old('Concepto')}}" name="Concepto" id="Concepto">
    <br>
</div>

<div class="form-group">
    <label for="Importe">Importe</label>
    <input type="text" class="form-control" value="{{isset($maquinas->Importe)?$maquinas->Importe:old('Importe')}}" name="Importe" id="Importe">
    <br>
</div>

<div class="form-group">
    <label for="Moneda">Moneda</label>
    <input type="text" class="form-control" value="{{isset($maquinas->Moneda)?$maquinas->Moneda:old('Moneda')}}" name="Moneda" id="Moneda">
    <br>
</div>

<div class="form-group">
    <label for="CentrodeCosto">CentrodeCosto</label>
    <input type="text"class="form-control" value="{{isset($maquinas->CentrodeCosto)?$maquinas->CentrodeCosto:old('CentrodeCosto')}}" name="CentrodeCosto" id="CentrodeCosto">
    <br>
</div>

<div class="form-group">
    <label for="MaquinaUnidad">MaquinaUnidad</label>
    <input type="text" class="form-control" value="{{isset($maquinas->MaquinaUnidad)?$maquinas->MaquinaUnidad:old('MaquinaUnidad')}}" name="MaquinaUnidad" id="MaquinaUnidad">
    <br>
</div>

<div class="form-group">
    <label for="Factura">Factura</label>
    <input type="text"class="form-control" value="{{isset($maquinas->Factura)?$maquinas->Factura:old('Factura')}}" name="Factura" id="Factura">
    <br>
</div>

<div class="form-group">
    <label for="OrdendeCompra">OrdendeCompra</label>
    <input type="text" class="form-control" value="{{isset($maquinas->OrdendeCompra)?$maquinas->OrdendeCompra:old('OrdendeCompra')}}" name="OrdendeCompra" id="OrdendeCompra">
    <br>
</div>

<div class="form-group">
    <label for="OrdendeTrabajo">OrdendeTrabajo</label>
    <input type="text" class="form-control" value="{{isset($maquinas->OrdendeTrabajo)?$maquinas->OrdendeTrabajo:old('OrdendeTrabajo')}}" name="OrdendeTrabajo" id="OrdendeTrabajo">
    <br>
</div>

<div class="form-group">
    <label for="StatusPago">StatusPago</label>
    <input type="text" class="form-control" value="{{isset($maquinas->StatusPago)?$maquinas->StatusPago:old('StatusPago')}}" name="StatusPago" id="StatusPago">
    <br>
</div>

<div class="form-group">
    <label for="FolioPago">FolioPago</label>
    <input type="text" class="form-control" value="{{isset($maquinas->FolioPago)?$maquinas->FolioPago:old('FolioPago')}}" name="FolioPago" id="FolioPago">
    <br>
</div>
    <input class="btn btn-success" type="submit" value="{{$modo}}">

    <a class="btn btn-primary" href="{{url('maquinas/')}}">Regresar</a>
    <br>
    </div>
    @endsection