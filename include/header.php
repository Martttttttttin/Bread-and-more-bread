<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popi's Bread · Artesanal desde 1987</title>
    <meta name="description"
        content="Panadería artesanal con más de 37 años de tradición. Pan hecho a mano, sin prisas, con ingredientes naturales.">

    <!-- Clash Display via FontShare -->
    <link rel="preconnect" href="https://api.fontshare.com">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&display=swap" rel="stylesheet">
    <!-- Crimson Pro (body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,300;0,400;1,300;1,400&display=swap"
        rel="stylesheet">

    <!-- model-viewer for 3D GLB -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.3.0/model-viewer.min.js"></script>

    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/header.css">
</head>

<body>

    <!-- Navigation -->
    <nav id="nav">
        <a href="#inicio" class="nav__logo">Popi's Bread</a>
        <ul class="nav__links">
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#galeria">Galería</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <button class="nav__hamburger" aria-label="Menú">
            <span></span><span></span>
        </button>
    </nav>

    <!-- Mobile menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="#nosotros" onclick="closeMobile()">Nosotros</a></li>
            <li><a href="#productos" onclick="closeMobile()">Productos</a></li>
            <li><a href="#galeria" onclick="closeMobile()">Galería</a></li>
            <li><a href="#contacto" onclick="closeMobile()">Contacto</a></li>
        </ul>
    </div>