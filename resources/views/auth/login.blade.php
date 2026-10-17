<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso administrativo | ATELIER</title>
    <link rel="stylesheet" href="{{ asset('admin.css') }}">

    <style>
        .login-card .register-link {
            margin-top: 18px;
            font-size: 0.92rem;
            color: #292722;
        }

        .login-card .register-link a {
            color: #76263d;
            font-weight: 700;
            text-decoration: underline;
            text-underline-offset: 4px;
            transition: color 0.2s ease;
        }

        .login-card .register-link a:hover {
            color: #51182a;
        }

        .password-input-wrap {
            position: relative;
            width: 100%;
        }

        .password-input-wrap .control {
            width: 100%;
            padding-right: 48px;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            padding: 0;
            color: #77746d;
            background: transparent;
            border: none;
            border-radius: 3px;
            transform: translateY(-50%);
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: #76263d;
        }

        .password-toggle:focus-visible {
            outline: 2px solid #76263d;
            outline-offset: 2px;
        }

        .password-toggle svg {
            display: block;
            flex-shrink: 0;
        }

        .password-toggle svg[hidden] {
            display: none;
        }
    </style>
</head>
<body>
    <div class="topline"></div>

    <main class="login-page">
        <section class="login-visual">
            <span class="login-watermark" aria-hidden="true">A</span>
            <div class="visual-content">
                <div class="eyebrow">Diseño · Esencia · Atemporalidad</div>
                <h1>El estilo está en los detalles.</h1>
            </div>
        </section>

        <section class="login-side">
            <div class="login-card">
                <a class="login-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo ATELIER">
                    <span><span class="wordmark">ATELIER</span></span>
                </a>

                <div class="eyebrow">Área privada</div>
                <h2>Te damos la bienvenida</h2>

                @if ($errors->any())
    <div style="color: #b42318; background: #fef0ef; border: 1px solid #f3b4ae; padding: 12px 16px; border-radius: 4px; margin-bottom: 18px;" role="alert">
        @foreach ($errors->all() as $error)
            <p style="margin: 0;">{{ $error }}</p>
        @endforeach
    </div>
@endif

                <form class="login-form" method="POST" action="{{ route('login.store') }}">
                    @csrf

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

                    <div class="field">
                        <label for="password">Contraseña</label>
                        <div class="password-input-wrap">
                            <input
                                class="control"
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Introduce tu contraseña"
                            >

                            <button
                                class="password-toggle"
                                type="button"
                                id="togglePassword"
                                aria-label="Mostrar contraseña"
                                aria-pressed="false"
                                title="Mostrar contraseÃ±a"
                            >
                                <svg
                                    class="eye-icon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                >
                                    <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>

                                <svg
                                    class="eye-off-icon"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                    hidden
                                >
                                    <path d="m3 3 18 18"/>
                                    <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                                    <path d="M9.9 5.2A10.8 10.8 0 0 1 12 5c6.4 0 10 7 10 7a14.5 14.5 0 0 1-3.1 3.8"/>
                                    <path d="M6.2 6.2C3.5 8 2 12 2 12s3.6 7 10 7a10.6 10.6 0 0 0 4-.8"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <button class="button primary" type="submit">Iniciar sesión</button>
                </form>

                <a class="back" href="{{ route('home') }}">← Volver a la tienda</a>

                <p class="register-link">
                    ¿No tienes una cuenta?
                    <a href="{{ route('registro') }}">Regístrate aquí</a>
                </p>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.getElementById('togglePassword');

            if (!passwordInput || !toggleButton) {
                return;
            }

            const eyeIcon = toggleButton.querySelector('.eye-icon');
            const eyeOffIcon = toggleButton.querySelector('.eye-off-icon');

            toggleButton.addEventListener('click', function () {
                const showPassword = passwordInput.type === 'password';
                passwordInput.type = showPassword ? 'text' : 'password';
                eyeIcon.hidden = showPassword;
                eyeOffIcon.hidden = !showPassword;

                const label = showPassword ? 'Ocultar contraseÃ±a' : 'Mostrar contraseÃ±a';
                toggleButton.setAttribute('aria-label', label);
                toggleButton.setAttribute('title', label);
                toggleButton.setAttribute('aria-pressed', String(showPassword));
                passwordInput.focus();
            });
        });
    </script>
</body>
</html>
