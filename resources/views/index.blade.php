
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATELIER</title>

<link rel="icon" href="data:,">
<!-- Tipografías -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600;700&family=Work+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

<!-- MÉTODO 1 CSS EXTERNO -->
<link rel="stylesheet" href="styles.css">

<!-- MÉTODO 2 CSS INTERNO -->
<style>
  #hero-inicio{
    background-image: url("https://images.pexels.com/photos/11739182/pexels-photo-11739182.jpeg");
  }
</style>
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

      <!-- Buscador dinámico: oculto hasta que se activa el modo búsqueda.
           Ya no tiene su propio ícono de lupa: el botón #btn-buscar es
           el que "viaja" visualmente hasta el borde izquierdo de este input. -->
      <div class="buscador-wrap" id="buscador-wrap">
        <input type="search" id="buscador-input" class="buscador-input" placeholder="Buscar productos..." aria-label="Buscar productos">
      </div>
    </div>

    <div class="utilidades">

          <!-- Botón de búsqueda -->
          <button id="btn-buscar" aria-label="Buscar" aria-expanded="false">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="11" cy="11" r="7"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
          </button>

          <!-- Selector de categoría -->
          <select id="filtro-categoria" aria-label="Filtrar por categoría">
            <option value="todas">Todas</option>
            <option value="Vestidos">Vestidos</option>
            <option value="Camisas">Camisas</option>
            <option value="Pantalones">Pantalones</option>
            <option value="Zapatos">Zapatos</option>
          </select>

 
<!-- Cuenta -->
@auth
    <a href="{{ route('login') }}" aria-label="Mi cuenta" class="icono-utilidad">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 20c0-4 3.5-6 8-6s8 2 8 6"/>
        </svg>
    </a>

    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="btn-cerrar-sesion">Cerrar sesión</button>
    </form>
@else
    <a href="{{ route('login') }}" aria-label="Iniciar sesión" class="icono-utilidad">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 20c0-4 3.5-6 8-6s8 2 8 6"/>
        </svg>
    </a>
@endauth

          <!-- Favoritos -->
          <button aria-label="Favoritos">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 20s-7-4.4-9.5-9C.7 7.2 2.6 4 6 4c2 0 3.5 1.1 4.5 2.7C11.5 5.1 13 4 15 4c3.4 0 5.3 3.2 3.5 7-2.5 4.6-9.5 9-9.5 9Z"/>
            </svg>
          </button>

          <!-- Carrito -->
          <button aria-label="Carrito">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 4h2l1.5 12.5A2 2 0 0 0 8.5 18h8a2 2 0 0 0 2-1.6L20 7H6"/>
              <circle cx="9" cy="21" r="1"/>
              <circle cx="17" cy="21" r="1"/>
            </svg>
            <span class="cart-count">2</span>
          </button>

   </div>
  </div>
</header>

<main>

  <!-- HERO -->
  <section id="hero-inicio" class="hero">
    <div class="contenedor">
      <div class="hero-contenido">
        <p class="hero-eyebrow">Esta temporada</p>
        <h1><span style="color:#E7C9A9;">Échale un vistazo</span></h1>
        <p>Hay más de una cosa que podría gustarte.</p>
        <a href="#coleccion" class="btn btn-primario">Ver catálogo</a>
      </div>
    </div>
  </section>

  <!-- CATEGORÍAS DESTACADAS -->
  <section id="coleccion">
    <div class="contenedor">
      <div class="section-titulo">
        <h2>Categorías destacadas</h2>
        <a href="{{ route('products.index') }}">Ver todas</a>
      </div>
      <ul class="grid-categorias">
        <li class="categoria-card">
          <img src="https://images.pexels.com/photos/34097020/pexels-photo-34097020.jpeg" alt="Vestidos de la colección">
          <span>Vestidos</span>
        </li>
        <li class="categoria-card">
          <img src="https://images.pexels.com/photos/9594940/pexels-photo-9594940.jpeg" alt="Camisas de algodón">
          <span>Camisas</span>
        </li>
        <li class="categoria-card">
          <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=600&q=80&auto=format&fit=crop" alt="Pantalones de la colección">
          <span>Pantalones</span>
        </li>
        <li class="categoria-card">
          <img src="https://images.pexels.com/photos/8093124/pexels-photo-8093124.jpeg" alt="Zapatos de la colección">
          <span>Zapatos</span>
        </li>
      </ul>
    </div>
  </section>

  <!-- PRODUCTOS DESTACADOS -->
  <section class="section-alt">
    <div class="contenedor">
      <div class="section-titulo">
        <h2>Novedades</h2>
        <a href="{{ route('products.index') }}">Ver tienda</a>
      </div>
      <ul class="grid-productos" id="productos-container">
      </ul>
    </div>
  </section>

  <hr class="costura">


  <section>
    <div class="contenedor">
      <ul class="grid-confianza">
        <li class="confianza-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="7" width="15" height="11" rx="1"/><path d="M16 10h3l3 4v4h-6"/><circle cx="6" cy="19" r="1.6"/><circle cx="17.5" cy="19" r="1.6"/></svg>
          <p>Envíos gratis en 24h</p>
        </li>
        <li class="confianza-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v6h6"/><path d="M20 20v-6h-6"/><path d="M4 10a8 8 0 0 1 14-4.9M20 14a8 8 0 0 1-14 4.9"/></svg>
          <p>Devoluciones fáciles</p>
        </li>
        <li class="confianza-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.5 9 8 11 4.5-2 8-6 8-11V5Z"/></svg>
          <p>Pago 100% seguro</p>
        </li>
        <li class="confianza-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v14H7l-3 3Z"/></svg>
          <p>Atención al cliente 24/7</p>
        </li>
      </ul>
    </div>
  </section>

</main>


@include('partials.footer')

<script src="js/utils.js"></script>
<script src="js/main.js"></script>
</body>
</html>
