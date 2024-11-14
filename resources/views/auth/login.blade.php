<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/Registros.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box active">
            <h2>Iniciar Sesión</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">INGRESAR</button>
                <div class="links">
                    <a href="{{ route('register') }}">Registrarse aquí</a>
                    <a href="#">Olvidé mi contraseña</a>
                </div>
                <div class="social-login">
                    <i class="fab fa-google social-icon"></i>
                    <i class="fab fa-facebook social-icon"></i>
                    <i class="fab fa-apple social-icon"></i>
                </div>
            </form>
        </div>
    </div>
</body>
</html>