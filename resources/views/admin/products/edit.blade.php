@extends('admin.layout')
@section('title', 'Editar producto')
@section('content')
<div class="intro"><div class="eyebrow">Catálogo / Editar registro</div><h1>Editar producto</h1><p>Actualiza los datos de <strong>{{ $product->name }}</strong>. Los cambios se reflejarán en el catálogo.</p></div>
<section class="panel form-panel"><div class="panel-head"><div><h2>Información del producto</h2><p class="sub">Referencia #{{ $product->id }} · Los campos marcados con * son obligatorios.</p></div><span class="status {{ $product->is_active ? 'active' : 'inactive' }}">{{ $product->is_active ? 'Activo' : 'Inactivo' }}</span></div><form method="POST" action="{{ route('admin.products.update', $product) }}">@method('PUT')@include('admin.products._form', ['buttonText' => 'Guardar cambios'])</form></section>
@endsection
