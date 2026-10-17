<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear cuenta | ATELIER</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 18px;
            background: #f8f6f1;
            color: #191714;
            font-family: Arial, sans-serif;
        }

        .register-card {
            width: 100%;
            max-width: 480px;
            padding: 42px;
            background: #fffefa;
            border: 1px solid #e8e0d4;
            border-radius: 4px;
        }

        .brand {
            margin-bottom: 34px;
            text-align: center;
            font-family: Georgia, serif;
            font-size: 29px;
            letter-spacing: 7px;
        }

        .brand span {
            display: block;
            margin-bottom: 8px;
            color: #b43a29;
            font-size: 36px;
            letter-spacing: 0;
        }

        .eyebrow {
            margin-bottom: 10px;
            color: #b43a29;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 10px;
            font-family: Georgia, serif;
            font-size: 36px;
            font-weight: normal;
        }

        .subtitle {
            margin: 0 0 28px;
            color: #777168;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            display: block;
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #dcd3c7;
            border-radius: 4px;
            background: #fff;
            font: inherit;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #c9b78e;
            outline-offset: 1px;
        }

        .submit-button {
            width: 100%;
            min-height: 49px;
            margin-top: 5px;
            border: 0;
            border-radius: 4px;
            background: #b43828;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-button:hover {
            background: #922c20;
        }

        .errors {
            margin-bottom: 20px;
            padding: 12px 16px;
            border: 1px solid #e4b7ae;
            background: #fff0ed;
            color: #922c20;
            font-size: 14px;
        }

        .footer {
            margin-top: 24px;
            text-align: center;
            color: #716b63;
            font-size: 14px;
            line-height: 2;
        }

        a {
            color: #8f2924;
            font-weight: 600;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 28px 22px;
            }

            h1 {
                font-size: 31px;
            }
        }
    </style>
</head>

<body>
    <main class="register-card">
        <div class="brand">
            <span>A</span>
            ATELIER
        </div>

        <div class="eyebrow">Área privada</div>
        <h1>Crear cuenta</h1>
        <p class="subtitle">Únete a ATELIER y crea tu cuenta.</p>

        @if ($errors->any())
            <div class="errors" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nombre completo</label>
                <input id="name" name="name" type="text"
                       value="{{ old('name') }}" required maxlength="255"
                       autocomplete="name">
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input id="email" name="email" type="email"
                       value="{{ old('email') }}" required maxlength="255"
                       autocomplete="email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password"
                       required minlength="8" autocomplete="new-password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation"
                       name="password_confirmation" type="password"
                       required minlength="8" autocomplete="new-password">
            </div>

            <button class="submit-button" type="submit">
                Crear cuenta
            </button>
        </form>

        <div class="footer">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}">Inicia sesión</a>
            <br>
            <a href="{{ route('home') }}">Volver a la tienda</a>
        </div>
    </main>
</body>
</html>
