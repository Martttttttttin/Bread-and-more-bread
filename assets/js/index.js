/* ============================================================
   LA PANADERÍA — index.js (versión optimizada para performance)
   ============================================================ */

   document.addEventListener('DOMContentLoaded', () => {

    /* ── 1. NAVBAR — con RAF para no bloquear scroll ─────────── */
    const nav = document.getElementById('nav');
  
    if (nav) {
      let ticking = false;
      const updateNav = () => {
        nav.classList.toggle('scrolled', window.scrollY > 60);
        ticking = false;
      };
      window.addEventListener('scroll', () => {
        if (!ticking) {
          requestAnimationFrame(updateNav);
          ticking = true;
        }
      }, { passive: true });
      updateNav();
    }
  
    /* ── 2. MOBILE MENU ──────────────────────────────────────── */
    const hamburger  = document.querySelector('.nav__hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
  
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('open');
        hamburger.classList.toggle('is-active', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
      });
    }
  
    window.closeMobile = () => {
      mobileMenu?.classList.remove('open');
      hamburger?.classList.remove('is-active');
      document.body.style.overflow = '';
    };
  
    /* ── 3. REVEAL ON SCROLL ─────────────────────────────────── */
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
  
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
  
    /* ── 4. PROD-ROW REVEAL ──────────────────────────────────── */
    const prodObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add('is-visible'), i * 80);
          prodObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -80px 0px' });
  
    document.querySelectorAll('.prod-row').forEach(el => prodObserver.observe(el));
  
    /* ── 5. COUNTER ANIMATION ────────────────────────────────── */
    const counters = document.querySelectorAll('.stat__num[data-target]');
  
    if (counters.length) {
      const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
  
          const el       = entry.target;
          const target   = parseInt(el.dataset.target, 10);
          const duration = 1800;
          const start    = performance.now();
          const easeOut  = t => 1 - Math.pow(1 - t, 3);
  
          const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            el.textContent = Math.floor(easeOut(progress) * target);
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target;
          };
  
          requestAnimationFrame(step);
          counterObserver.unobserve(el);
        });
      }, { threshold: 0.5 });
  
      counters.forEach(c => counterObserver.observe(c));
    }
  
    /* ── 6. SMOOTH ANCHOR SCROLL ─────────────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', e => {
        const id = link.getAttribute('href');
        if (id === '#') return;
        const target = document.querySelector(id);
        if (target) {
          e.preventDefault();
          const navH = nav?.offsetHeight ?? 0;
          const top  = target.getBoundingClientRect().top + window.scrollY - navH;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      });
    });
  
    /* ── 7. GALERÍA — stagger al entrar ─────────────────────── */
    const galeriaItems = document.querySelectorAll('.galeria__item');
  
    if (galeriaItems.length) {
      const galeriaObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.style.opacity   = '1';
              entry.target.style.transform = 'translateY(0)';
            }, i * 80);
            galeriaObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });
  
      galeriaItems.forEach(item => {
        item.style.opacity    = '0';
        item.style.transform  = 'translateY(30px)';
        item.style.transition = 'opacity .7s ease, transform .7s ease';
        galeriaObserver.observe(item);
      });
    }
  
    /* ── 8. MODEL-VIEWER — carga DIFERIDA ────────────────────── */
    //
    //  CAMBIO CLAVE para el LCP de 59s:
    //  El script de model-viewer (~500 KB) NO se carga al inicio.
    //  Solo se inyecta cuando el usuario se acerca 400px a #productos.
    //  Asegúrate de que en header.php NO haya ningún:
    //  <script src="...model-viewer..."></script>
    //
    const productosSec = document.getElementById('productos');
  
    if (productosSec) {
      let modelLoaded = false;
  
      new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !modelLoaded) {
          modelLoaded = true;
          const script  = document.createElement('script');
          script.type   = 'module';
          script.src    = 'https://ajax.googleapis.com/ajax/libs/model-viewer/3.3.0/model-viewer.min.js';
          document.head.appendChild(script);
        }
      }, { rootMargin: '400px' }).observe(productosSec);
    }
  
    /* ── 9. PARALLAX HERO ────────────────────────────────────── */
    //  Solo en desktop y si el usuario no prefiere movimiento reducido.
    const heroBg         = document.querySelector('.hero__bg');
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  
    if (heroBg && !prefersReduced && window.innerWidth > 768) {
      let parallaxTicking = false;
  
      window.addEventListener('scroll', () => {
        if (!parallaxTicking) {
          requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            if (scrolled <= window.innerHeight) {
              heroBg.style.transform = `scale(1.04) translateY(${scrolled * 0.3}px)`;
            }
            parallaxTicking = false;
          });
          parallaxTicking = true;
        }
      }, { passive: true });
    }
  
  });