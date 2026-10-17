
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $titulo_pagina ?? 'ATELIER' }} — ATELIER</title>
  <link rel="icon" href="data:,">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

<header class="site-header">
  <div class="contenedor">
    <a href="{{ route('home') }}">
      <img src="{{ asset('img/atelier.png') }}" alt="ATELIER" style="width: 42px; height: auto;">
    </a>

    <a href="{{ route('home') }}" id="logo">
      TELIER
    </a>

    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="nav-toggle-label" aria-label="Abrir menú">
      <span></span><span></span><span></span>
    </label>

    <div class="nav-search-zone" id="nav-search-zone">
      <nav class="main-nav" aria-label="Navegación principal">
        <ul>
          <li><a href="{{ route('products.index', ['genero' => 'mujer']) }}">Mujer</a></li>
          <li><a href="{{ route('products.index', ['genero' => 'hombre']) }}">Hombre</a></li>
          <li><a href="{{ route('products.index', ['genero' => 'ninos']) }}">Niños</a></li>
          <li><a href="{{ route('about.show') }}">Nosotros</a></li>
          <li><a href="{{ route('contact.show') }}">Contacto</a></li>
        </ul>
      </nav>
    </div>

    <div class="utilidades">
      <a href="{{ route('login') }}" class="btn btn-primario" style="padding:8px 16px; min-height:auto;">Iniciar sesión</a>
    </div>
  </div>
</header>

<main>