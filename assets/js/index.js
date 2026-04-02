document.addEventListener('DOMContentLoaded', () => {

    /* ── 1. NAVBAR ───────────────────────────────────────────── */
    const nav = document.getElementById('nav');

    const updateNav = () => {
        nav.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', updateNav, { passive: true });
    updateNav();

    /* ── 3. MOBILE MENU ──────────────────────────────────────── */
    const hamburger = document.querySelector('.nav__hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            hamburger.classList.toggle('is-active');
            const isOpen = mobileMenu.classList.contains('open');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });
    }

    window.closeMobile = () => {
        if (mobileMenu) mobileMenu.classList.remove('open');
        if (hamburger) hamburger.classList.remove('is-active');
        document.body.style.overflow = '';
    };

    /* ── 4. REVEAL ON SCROLL (Intersection Observer) ─────────── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    /* ── 5. PROD-ROW ALTERNATING REVEAL ─────────────────────── */
    const prodObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('is-visible');
                }, i * 80);
                prodObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -80px 0px' });

    document.querySelectorAll('.prod-row').forEach(el => prodObserver.observe(el));

    /* ── 6. COUNTER ANIMATION ────────────────────────────────── */
    const counters = document.querySelectorAll('.stat__num[data-target]');

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const el = entry.target;
            const target = parseInt(el.dataset.target, 10);
            const duration = 1800;
            const start = performance.now();

            const easeOut = t => 1 - Math.pow(1 - t, 3);

            const step = (now) => {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                el.textContent = Math.floor(easeOut(progress) * target);
                if (progress < 1) requestAnimationFrame(step);
                else el.textContent = target;
            };

            requestAnimationFrame(step);
            counterObserver.unobserve(el);
        });
    }, { threshold: 0.5 });

    counters.forEach(c => counterObserver.observe(c));

    /* ── 7. SMOOTH ANCHOR SCROLL ─────────────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const id = link.getAttribute('href');
            if (id === '#') return;
            const target = document.querySelector(id);
            if (target) {
                e.preventDefault();
                const navH = nav ? nav.offsetHeight : 0;
                const top = target.getBoundingClientRect().top + window.scrollY - navH;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    /* ── 9. GALERÍA — lazy stagger ───────────────────────────── */
    const galeriaItems = document.querySelectorAll('.galeria__item');
    const galeriaObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, i * 80);
                galeriaObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    galeriaItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity .7s ease, transform .7s ease';
        galeriaObserver.observe(item);
    });

});