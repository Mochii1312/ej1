<?php
$nombre = "Elena elenosa";
$edad = 22;
$ciudad = "Granada";
$fecha = date("d-m-Y");
$hora = date ("H:i:s");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ejercicio1</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
    <nav>
        <ul class="barra">
            <li>Inicio</li>
            <li>Información</li>
            <li>Sobre mi</li>
            <li>Contenido</li>
        </ul>
        <form class="buscador">
            <input class="buscar" type="search" placeholder="Search" aria-label="Search">
            <button class="boton" type="submit">Search</button>
        </form>
    </nav>

</header>

<main>
<h1>Bienvenido a mi pagina</h1>
<div class="info">
<p class = "nombre"> Nombre: <?php echo $nombre; ?> </p>
<p class = "edad"> Edad: <?php echo $edad;?> años</p>
<p class = "ciudad">Soy de: <?php echo $ciudad?></p>
<p class = "fecha">Hoy es: <?php echo $fecha?></p>
<p class = "hora">Y son las: <span id="hora"></span></p>
</div>
</main>
<script>
    function actualizarHora() {
        const ahora = new Date();
        const hora = ahora.toLocaleTimeString('es-Es');
        document.getElementById("hora").textContent = hora;
    }
    setInterval(actualizarHora, 1000);
    actualizarHora();
</script>
</body>
</html>