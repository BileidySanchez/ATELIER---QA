<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>@yield('title', 'Administración') | ATELIER</title><link rel="stylesheet" href="{{ asset('admin.css') }}"></head>
<body><div class="topline"></div><header class="header"><div class="header-inner">
<a class="brand" href="{{ route('admin.products.index') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo ATELIER"><span><span class="wordmark">ATELIER</span><span class="caption">Administración de tienda</span></span></a>
<div class="header-actions"><a class="button secondary" href="{{ route('home') }}">Ver tienda</a><form class="inline" method="POST" action="{{ route('logout') }}">@csrf<button class="button quiet" type="submit">Cerrar sesión</button></form></div>
</div></header><main class="shell">
@if(session('success'))<div class="alert success" role="status">{{ session('success') }}</div>@endif
@if($errors->any())<div class="alert error" role="alert"><strong>Revisa la información introducida.</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
@yield('content')</main><footer class="admin-footer">ATELIER · Gestión de productos · {{ date('Y') }}</footer></body></html>
