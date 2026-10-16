<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso administrativo | ATELIER</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
</head>
<body>

    <!-- Barra decorativa superior -->
    <div class="topline"></div>

    <main class="login-page">

     
        <section class="login-visual">
            <div class="visual-content">
                <div class="eyebrow">Diseño · Esencia · Atemporalidad</div>
                <h1>El estilo está en los detalles.</h1>
            </div>
        </section>


        <section class="login-side">
            <div class="login-card">

                <!-- Logo + nombre de la marca -->
                <a class="login-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo ATELIER">
                    <span>
                        <span class="wordmark">ATELIER</span>
                    </span>
                </a>

                <!-- Título del formulario -->
                <div class="eyebrow">Área privada</div>
                <h2>Bienvenida</h2>

                <!-- Errores de validación (si los hay) -->
                @if($errors->any())
                    <div class="alert error" role="alert">
                        @foreach($errors->all() as $error)
                            <p style="margin:0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <!-- Formulario de login -->
                <form class="login-form" method="POST" action="{{ route('login.store') }}">
                    @csrf

                    <!-- Campo: email -->
                    <div class="field">
                        <label for="email">Correo electrónico</label>
                        <input
                            class="control"
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            placeholder="tu@correo.com"
                            autofocus
                        >
                    </div>

                    <!-- Campo: contraseña -->
                    <div class="field">
                        <label for="password">Contraseña</label>
                        <input
                            class="control"
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Introduce tu contraseña"
                        >
                    </div>

                    <!-- Botón de envío -->
                    <button class="button primary" type="submit">Iniciar sesión</button>
                </form>

                <a class="back" href="{{ route('home') }}">← Volver a la tienda</a>

            </div>
        </section>

    </main>
</body>
</html>
