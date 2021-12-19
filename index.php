<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login">
        <div class="login__left">
            <img src="assets/images/dF5SId3UHWd.svg" alt="" class="login__imagen">
            <p class="login__descripcion">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="login__right">
            <form class="form" method="post">
                <input type="text" name="usuario" class="form__input" placeholder="Correo electrónico o número de teléfono">
                <input type="password" name="contraseña" class="form__input" placeholder="Contraseña">
                <button type="submit" name="enviar" class="form__submit">
                    Iniciar sesión
                </button>
                <a href="/#" class="form__link">¿Olvidaste tu contraseña?</a>
                <div class="form__width">
                    <a class="form__submit form__submit--green">
                        Crear cuenta nueva
                    </a>
                </div>
            </form>
            <?php

                include('conexion-bd.php');

            ?>
            <p class="login__texto"><b>Crea una página</b> para una celebridad, una marca o un negocio.</p>
        </div>
    </div>
</body>
</html>