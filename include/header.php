<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popi's Bread · Artesanal desde 1987</title>
  <meta name="description" content="Panadería artesanal con más de 37 años de tradición. Pan hecho a mano, sin prisas, con ingredientes naturales.">

  <!-- FIX LCP: precarga el banner antes de que el browser parsee el CSS -->
  <link rel="preload" as="image" href="assets/img/panaderia banner.webp" fetchpriority="high">

  <!-- FIX render-blocking: preconnect anticipado -->
  <link rel="preconnect" href="https://api.fontshare.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- FIX render-blocking: fuentes con media="print" no bloquean el render -->
  <link rel="stylesheet"
    href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&display=swap"
    media="print" onload="this.media='all'">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,300;0,400;1,300;1,400&display=swap"
    media="print" onload="this.media='all'">

  <!-- Fallback si JS está desactivado -->
  <noscript>
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=clash-display@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400&display=swap">
  </noscript>

  <!-- CSS propio — va aquí, en el <head> -->
  <link rel="stylesheet" href="assets/styles/index.css">
  <link rel="stylesheet" href="assets/styles/header.css">
  <link rel="stylesheet" href="assets/styles/footer.css">

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