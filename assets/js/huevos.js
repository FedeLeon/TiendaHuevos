// Carrusel simple con scroll-snap. Reutilizable.
(() => {
    const carousels = document.querySelectorAll('[data-snap-carousel]');
    if (!carousels.length) return;
  
    carousels.forEach(carousel => {
      const vp   = carousel.querySelector('[data-snap-viewport]');
      const prev = carousel.querySelector('[data-snap-prev]');
      const next = carousel.querySelector('[data-snap-next]');
      if (!vp || !prev || !next) return;
  
      const card = vp.firstElementChild;
      const stepPx = () => card ? Math.max(card.clientWidth + 16, vp.clientWidth * 0.8) : vp.clientWidth * 0.8;
  
      prev.addEventListener('click', () => vp.scrollBy({ left: -stepPx(), behavior: 'smooth' }));
      next.addEventListener('click', () => vp.scrollBy({ left:  stepPx(), behavior: 'smooth' }));
    });
  })();
  