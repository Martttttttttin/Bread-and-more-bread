<?php
header("Cache-Control: public, max-age=3600");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 3600) . " GMT");
include 'include/header.php';
?>

<!-- ===== HERO ===== -->
<section class="hero" id="inicio">

  <!-- picture: imagen pequeña en móvil, grande en desktop -->
  <picture>
    <source
      media="(max-width: 768px)"
      srcset="assets/img/panaderia banner-mobile.webp">
    <img
      src="assets/img/panaderia banner.webp"
      alt=""
      aria-hidden="true"
      fetchpriority="high"
      decoding="sync"
      style="position:absolute;width:1px;height:1px;opacity:0;pointer-events:none;z-index:-1;">
  </picture>

  <div class="hero__bg" style="background-image: url('assets/img/panaderia banner.webp')"></div>
  <div class="hero__overlay"></div>
  <div class="hero__content">
    <span class="hero__eyebrow">Artesanal &nbsp;·&nbsp; Tradicional &nbsp;·&nbsp; Único</span>
    <h1 class="hero__title">
      <span class="hero__title-line">La</span>
      <span class="hero__title-line hero__title-line--italic">Panadería</span>
      <span class="hero__title-line hero__title-line--sub">de siempre</span>
    </h1>
    <p class="hero__sub">Horneado con amor desde 1987. Pan artesanal que despierta los sentidos y reconforta el alma con cada mordisco.</p>
    <div class="hero__actions">
      <a href="#productos" class="btn btn--gold">Nuestros productos</a>
      <a href="#galeria" class="btn btn--outline">Ver galería</a>
    </div>
  </div>
  <div class="hero__grain"></div>
</section>

<!-- ===== BANDA DECORATIVA ===== -->
<div class="ticker-band">
  <div class="ticker-inner">
    <span>Pan artesanal</span><span class="sep">✦</span>
    <span>Masa madre</span><span class="sep">✦</span>
    <span>Horneado diario</span><span class="sep">✦</span>
    <span>Sin conservantes</span><span class="sep">✦</span>
    <span>Tradición desde 1987</span><span class="sep">✦</span>
    <span>Pan artesanal</span><span class="sep">✦</span>
    <span>Masa madre</span><span class="sep">✦</span>
    <span>Horneado diario</span><span class="sep">✦</span>
    <span>Sin conservantes</span><span class="sep">✦</span>
    <span>Tradición desde 1987</span><span class="sep">✦</span>
    <span>Pan artesanal</span><span class="sep">✦</span>
    <span>Masa madre</span><span class="sep">✦</span>
    <span>Horneado diario</span><span class="sep">✦</span>
    <span>Sin conservantes</span><span class="sep">✦</span>
    <span>Tradición desde 1987</span><span class="sep">✦</span>
  </div>
</div>

<!-- ===== NOSOTROS ===== -->
<section class="about" id="nosotros">
  <div class="about__inner">
    <div class="about__text reveal">
      <span class="section-label">Nuestra historia</span>
      <h2>Pan con alma,<br>hecho a mano</h2>
      <p>Cada pieza que sale de nuestro horno lleva décadas de tradición. Usamos harinas seleccionadas, masa madre viva y el tiempo que cada pan necesita. Sin prisas. Sin atajos. Solo el oficio de siempre.</p>
      <a href="#productos" class="btn btn--gold">Conoce nuestro proceso</a>
    </div>
    <div class="about__stats reveal">
      <div class="stat">
        <span class="stat__num" data-target="37">0</span>
        <span class="stat__unit">años</span>
        <span class="stat__lbl">de oficio artesanal</span>
      </div>
      <div class="stat">
        <span class="stat__num" data-target="50">0</span>
        <span class="stat__unit">+</span>
        <span class="stat__lbl">variedades de pan</span>
      </div>
      <div class="stat">
        <span class="stat__num" data-target="100">0</span>
        <span class="stat__unit">%</span>
        <span class="stat__lbl">ingredientes naturales</span>
      </div>
    </div>
  </div>
</section>

<!-- ===== PRODUCTOS 3D ===== -->
<section class="productos" id="productos">
  <div class="productos__header reveal">
    <span class="section-label">Nuestros productos</span>
    <h2>Elaborados con<br>maestría artesanal</h2>
  </div>

  <!-- 01 · Baguette — modelo izquierda -->
  <div class="prod-row" data-dir="ltr">
    <div class="prod-row__viewer">
      <div class="prod-row__viewer-inner">
        <model-viewer
          src="assets/3D/plaggy_cc0-baguette-473.glb"
          poster="assets/img/bagette.webp"
          loading="lazy"
          alt="Baguette artesanal 3D"
          auto-rotate camera-controls
          shadow-intensity="2" shadow-softness="1"
          environment-image="neutral" exposure="1.2">
        </model-viewer>
        <span class="prod-row__badge">01</span>
      </div>
    </div>
    <div class="prod-row__info">
      <span class="prod-row__num">01 / 04</span>
      <h3>Baguette<br><em>Artesanal</em></h3>
      <p>Corteza crujiente y miga aireada. Nuestra baguette se elabora con masa madre de 24 horas de fermentación en frío, logrando ese sabor inconfundible que evoca las mejores boulangeries.</p>
      <ul class="prod-row__tags">
        <li>Fermentación 24h en frío</li>
        <li>Harina T65 seleccionada</li>
        <li>Horneada en piedra volcánica</li>
      </ul>
      <div class="prod-row__line"></div>
    </div>
  </div>

  <!-- 02 · Pan de Campo — modelo derecha -->
  <div class="prod-row" data-dir="rtl">
    <div class="prod-row__viewer">
      <div class="prod-row__viewer-inner prod-row__viewer-inner--dark">
        <model-viewer
          src="assets/3D/plaggy_cc0-bread-roll-480.glb"
          poster="assets/img/pan.webp"
          loading="lazy"
          alt="Pan de campo 3D"
          auto-rotate camera-controls
          shadow-intensity="2" shadow-softness="1"
          environment-image="neutral" exposure="1.2">
        </model-viewer>
        <span class="prod-row__badge prod-row__badge--light prod-row__badge--right">02</span>
      </div>
    </div>
    <div class="prod-row__info prod-row__info--light">
      <span class="prod-row__num">02 / 04</span>
      <h3>Pan de<br><em>Campo</em></h3>
      <p>Rústico por fuera, esponjoso por dentro. Este pan de campo recoge la esencia de la panadería rural, con una corteza que suena al golpe y un interior que abraza.</p>
      <ul class="prod-row__tags">
        <li>Masa madre centenaria</li>
        <li>Mezcla de harinas integrales</li>
        <li>Sin aditivos ni conservantes</li>
      </ul>
      <div class="prod-row__line"></div>
    </div>
  </div>

  <!-- 03 · Croissant — modelo izquierda -->
  <div class="prod-row" data-dir="ltr">
    <div class="prod-row__viewer">
      <div class="prod-row__viewer-inner">
        <model-viewer
          src="assets/3D/plaggy_cc0-croissant-512.glb"
          poster="assets/img/croissant.webp"
          loading="lazy"
          alt="Croissant de mantequilla 3D"
          auto-rotate camera-controls
          shadow-intensity="2" shadow-softness="1"
          environment-image="neutral" exposure="1.2">
        </model-viewer>
        <span class="prod-row__badge">03</span>
      </div>
    </div>
    <div class="prod-row__info">
      <span class="prod-row__num">03 / 04</span>
      <h3>Croissant de<br><em>Mantequilla</em></h3>
      <p>Hojaldrado en 27 capas con mantequilla de calidad extra. Un ritual de tres días: amasado, reposo y laminado. El resultado es ese crujido perfecto al primer mordisco.</p>
      <ul class="prod-row__tags">
        <li>27 capas de hojaldrado</li>
        <li>Mantequilla AOP francesa</li>
        <li>3 días de elaboración</li>
      </ul>
      <div class="prod-row__line"></div>
    </div>
  </div>

  <!-- 04 · Pan de Molde — modelo derecha -->
  <div class="prod-row" data-dir="rtl">
    <div class="prod-row__viewer">
      <div class="prod-row__viewer-inner prod-row__viewer-inner--dark">
        <model-viewer
          src="assets/3D/plaggy_cc0-slice-of-bread-597.glb"
          poster="assets/img/pan-molde.webp"
          loading="lazy"
          alt="Pan de molde artesanal 3D"
          auto-rotate camera-controls
          shadow-intensity="2" shadow-softness="1"
          environment-image="neutral" exposure="1.2">
        </model-viewer>
        <span class="prod-row__badge prod-row__badge--light prod-row__badge--right">04</span>
      </div>
    </div>
    <div class="prod-row__info prod-row__info--light">
      <span class="prod-row__num">04 / 04</span>
      <h3>Pan de Molde<br><em>Artesanal</em></h3>
      <p>El clásico de cada mañana, elevado. Nuestra miga tierna y elástica hace que la tostada del desayuno sea el mejor momento del día. Sin azúcar añadida, siempre fresco.</p>
      <ul class="prod-row__tags">
        <li>Miga tierna y esponjosa</li>
        <li>Sin azúcar añadida</li>
        <li>Ideal para tostadas</li>
      </ul>
      <div class="prod-row__line"></div>
    </div>
  </div>
</section>

<!-- ===== GALERÍA ===== -->
<section class="galeria" id="galeria">
  <div class="galeria__header reveal">
    <span class="section-label">Galería</span>
    <h2>El arte de<br>nuestro horno</h2>
  </div>

  <div class="galeria__grid">
    <div class="galeria__item galeria__item--featured reveal">
      <img src="assets/img/congerdesign-bread-4642686.webp"
           alt="Pan artesanal variedad"
           loading="lazy" decoding="async"
           width="1200" height="800">
      <div class="galeria__caption"><span>Variedades artesanales</span></div>
    </div>
    <div class="galeria__item reveal">
      <img src="assets/img/couleur-bread-1281053_1920.webp"
           alt="Pan artesanal couleur"
           loading="lazy" decoding="async"
           width="800" height="600">
      <div class="galeria__caption"><span>De nuestro obrador</span></div>
    </div>
    <div class="galeria__item reveal">
      <img src="assets/img/jackmac34-bread-1761197.webp"
           alt="Pan recién horneado"
           loading="lazy" decoding="async"
           width="800" height="600">
      <div class="galeria__caption"><span>Recién horneado</span></div>
    </div>
    <div class="galeria__item reveal">
      <img src="assets/img/pexels-bread-1284438.webp"
           alt="Panes artesanales"
           loading="lazy" decoding="async"
           width="800" height="600">
      <div class="galeria__caption"><span>Artesanía panadera</span></div>
    </div>
    <div class="galeria__item galeria__item--wide reveal">
      <img src="assets/img/tiemaoanh-bread-6245204.webp"
           alt="Masa madre proceso"
           loading="lazy" decoding="async"
           width="1200" height="800">
      <div class="galeria__caption"><span>El proceso</span></div>
    </div>
    <div class="galeria__item reveal">
      <img src="assets/img/vugarahmadov-bread-6486963.webp"
           alt="Elaboración artesanal"
           loading="lazy" decoding="async"
           width="800" height="600">
      <div class="galeria__caption"><span>Manos artesanas</span></div>
    </div>
    <div class="galeria__item reveal">
      <img src="assets/img/wounds_and_cracks-bread-8364737.webp"
           alt="Corteza perfecta"
           loading="lazy" decoding="async"
           width="800" height="600">
      <div class="galeria__caption"><span>Corteza perfecta</span></div>
    </div>
  </div>
</section>

<!-- ===== CONTACTO ===== -->
<section class="contacto" id="contacto">
  <div class="contacto__inner reveal">
    <span class="section-label">Visítanos</span>
    <h2>El pan recién<br>horneado te espera</h2>
    <p>Abrimos todos los días desde las 7:00 AM. Ven a sentir el aroma que llena el barrio y llévate un poco de nuestra tradición.</p>
    <div class="contacto__info">
      <div class="info-card">
        <div class="info-card__body">
          <strong>Horario</strong>
          <span>Lun – Dom</span>
          <span>7:00 – 20:00</span>
        </div>
      </div>
      <div class="info-card">
        <div class="info-card__body">
          <strong>Ubicación</strong>
          <span>Av. Alameda 121</span>
          <span>Santiago de Surco, Perú</span>
        </div>
      </div>
      <div class="info-card">
        <div class="info-card__body">
          <strong>Teléfono</strong>
          <span>+51 945 331 391</span>
          <span>¡Reservas disponibles!</span>
        </div>
      </div>
    </div>
    <a href="#inicio" class="btn btn--gold">Volver al inicio ↑</a>
  </div>
</section>

<?php include 'include/footer.php'; ?>