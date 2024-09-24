<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Esto asegura la escala en móviles -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eres mi razón para sonreír</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8c6e8; /* Fondo rosa */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            font-family: 'Cursive', sans-serif; /* Fuente bonita */
            position: relative;
        }

        /* Frase central */
        h1 {
            position: absolute;
            top: 5%;
            width: 90%;
            text-align: center;
            font-size: 2.5vw; /* Tamaño del texto relativo al ancho de la pantalla */
            color: #ffffff;
            text-shadow: 2px 2px 4px #ff69b4;
            z-index: 2;
        }

        /* Marco para la imagen */
        .flower-container {
            position: relative;
            width: 50vw; /* Ancho relativo al viewport */
            max-width: 400px; /* Máximo tamaño de la imagen */
            height: auto;
            aspect-ratio: 1; /* Mantener la proporción de la imagen */
            border: 10px solid #fff;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border-radius: 20px;
        }

        /* Imagen de las flores con efecto de zoom */
        .flower-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: zoom 2s infinite alternate ease-in-out;
        }

        /* Animación de zoom suave */
        @keyframes zoom {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }

        /* Estrellas en el fondo */
        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            background: url('https://www.transparenttextures.com/patterns/stardust.png'); /* Fondo con puntos o estrellitas */
        }

        /* Media Queries para pantallas más pequeñas */
        @media (max-width: 768px) {
            h1 {
                font-size: 4vw; /* Aumentar el tamaño del texto en pantallas más pequeñas */
            }
            
            .flower-container {
                width: 70vw; /* Aumentar el tamaño de la imagen en móviles */
            }
        }
    </style>
</head>
<body>

    <!-- Frase bonita -->
    <h1>En este día de septiembre, quiero que sepas que cada momento a tu lado hace que el mundo sea más brillante. Eres mi razón para sonreír y de ver mi celular.</h1>

    <!-- Contenedor de la imagen con marco -->
    <div class="flower-container">
        <img src="flor_amarilla.jpeg" alt="Flores amarillas">
    </div>

    <!-- Fondo de estrellitas -->
    <div class="stars"></div>

</body>
</html>
