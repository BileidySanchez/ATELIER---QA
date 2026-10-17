@include('partials.header', ['titulo_pagina' => 'Catálogo'])

<div class="pagina-hero-pro">
    <div class="contenedor">
        <h1>
            @if(request('genero') === 'mujer')
                Catálogo — Mujer
            @elseif(request('genero') === 'hombre')
                Catálogo — Hombre
            @elseif(request('genero') === 'ninos')
                Catálogo — Niños
            @else
                Catálogo Completo
            @endif
        </h1>
        <p style="color: #666; margin-top: 8px;">Prendas confeccionadas con materiales de calidad pensadas para perdurar.</p>
    </div>
</div>

<div class="contenedor">
    {{-- Filtros por categoría --}}
    <nav class="filtros" style="display: flex; gap: 10px; margin: 24px 0 32px; flex-wrap: wrap;">
        <a href="{{ route('products.index', ['genero' => request('genero')]) }}" 
           class="{{ !request('categoria') ? 'btn btn-primario' : 'btn btn-secundario' }}"
           style="padding: 6px 14px; font-size: 0.9rem; text-decoration: none; border-radius: 4px;">
            Todos
        </a>
        @foreach($categorias as $categoria)
            <a href="{{ route('products.index', ['genero' => request('genero'), 'categoria' => $categoria->id]) }}"
               class="{{ request('categoria') == $categoria->id ? 'btn btn-primario' : 'btn btn-secundario' }}"
               style="padding: 6px 14px; font-size: 0.9rem; text-decoration: none; border-radius: 4px;">
                {{ $categoria->name }}
            </a>
        @endforeach
    </nav>

    {{-- Grid de productos --}}
    <div class="grid-productos" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 24px; margin-bottom: 48px;">
        @forelse($productos as $producto)
        <article class="producto-card">
            <div class="producto-imagen" style="position: relative; aspect-ratio: 3/4; overflow: hidden; background: #f3f2ee; border-radius: 6px;">
                @php
                    $img = $producto->image ?? $producto->imagen;
                    if ($img && Str::startsWith($img, ['http://', 'https://'])) {
                        $src = $img;
                    } elseif ($img) {
                        $src = asset('img/' . $img);
                    } else {
                        $src = asset('img/percha.jpg');
                    }
                @endphp
                <img src="{{ $src }}" alt="{{ $producto->name }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="producto-info" style="margin-top: 12px;">
                <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; color: #888; margin-bottom: 4px;">
                    {{ $producto->category->name ?? 'General' }}
                </div>
                <h3 style="font-size: 1.05rem; margin: 0 0 6px;">{{ $producto->name }}</h3>
                <p class="producto-precio" style="font-weight: 600; font-size: 1rem; color: #111;">
                    RD$ {{ number_format((float)$producto->price, 2) }}
                </p>
            </div>

            @if($producto->color)
            <div class="colores" style="display: flex; gap: 6px; margin-top: 8px;">
                @foreach(explode(',', $producto->color) as $col)
                    @php $trimmed = trim($col); @endphp
                    <span title="{{ $trimmed }}" 
                          style="display: inline-block; width: 14px; height: 14px; border-radius: 50%; border: 1px solid rgba(0,0,0,0.15); background: {{ Str::startsWith($trimmed, '#') ? $trimmed : '#888' }};"></span>
                @endforeach
            </div>
            @endif
        </article>
        @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 48px 16px; background: #faf9f6; border-radius: 8px;">
            <p style="color: #666; font-size: 1.05rem; margin-bottom: 12px;">No hay productos disponibles para este filtro.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primario" style="display: inline-block; padding: 8px 18px; text-decoration: none;">Ver todos los productos</a>
        </div>
        @endforelse
    </div>
</div>

@include('partials.footer')