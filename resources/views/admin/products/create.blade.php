@extends('admin.layout')
@section('title', 'Crear producto')
@section('content')
<div class="intro"><div class="eyebrow">Catálogo / Nuevo registro</div><h1>Crear producto</h1><p>Agrega una nueva prenda al catálogo de ATELIER.</p></div>
<section class="panel form-panel"><div class="panel-head"><div><h2>Información del producto</h2><p class="sub">Los campos marcados con * son obligatorios.</p></div></div><form method="POST" action="{{ route('admin.products.store') }}">@include('admin.products._form', ['buttonText' => 'Guardar producto'])</form></section>
@endsection
