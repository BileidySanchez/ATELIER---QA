<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - ATELIER</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

@include('partials.header')

<main class="contenedor">
    {{-- Hero a todo el ancho --}}
    <div class="pagina-hero-pro">
        <div class="contenedor">
            <h1>Catálogo</h1>
         
        </div>
    </div>

{{-- Filtros por categoría --}}
<nav class="filtros">
    <a href="{{ route('products.index', ['genero' => request('genero')]) }}">Todos</a>
    @foreach($categorias as $categoria)
        <a href="{{ route('products.index', [
            'genero' => request('genero'),
            'categoria' => $categoria->id
        ]) }}">
            {{ $categoria->nombre }}
        </a>
    @endforeach
</nav>

    {{-- Grid de productos --}}
<div class="grid-productos">
    @forelse($productos as $producto)
    <article class="producto-card">
        <div class="producto-imagen">
            @php
                $src = Str::startsWith($producto->imagen, ['http://', 'https://'])
                    ? $producto->imagen
                    : asset('img/' . $producto->imagen);
            @endphp
            <img src="{{ $src }}" alt="{{ $producto->nombre }}">
        </div>
        <div class="producto-info">
            <h3>{{ $producto->nombre }}</h3>
            <p class="producto-precio">RD$ {{ number_format($producto->precio, 2) }}</p>
        </div>

        <div class="colores">
    @foreach(explode(',', $producto->color) as $color)
        <span style="background: {{ trim($color) }};"></span>
    @endforeach
</div>
    </article>
@empty
    <p>No hay productos disponibles.</p>
@endforelse
</div>
</main>

@include('partials.footer')

</body>
</html>