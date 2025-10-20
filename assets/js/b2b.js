// B2B: modal de planes + carrusel de clientes (fotos)
(() => {
    // ----- Modal de planes -----
    const modal   = document.getElementById('subsModal');
    const openBtn = document.getElementById('openPlans');
    const closeBtn= document.getElementById('closePlans');
  
    if (modal && openBtn && closeBtn) {
      const backdrop = modal.querySelector('[data-close-modal]');
      const open  = () => { modal.classList.add('is-open'); document.body.style.overflow = 'hidden'; closeBtn.focus(); };
      const close = () => { modal.classList.remove('is-open'); document.body.style.overflow = ''; openBtn.focus(); };
  
      openBtn.addEventListener('click', open);
      closeBtn.addEventListener('click', close);
      backdrop?.addEventListener('click', close);
      document.addEventListener('keydown', e => { if (e.key === 'Escape' && modal.classList.contains('is-open')) close(); });
    }
  
    // ----- Carrusel horizontal de clientes (fotos de negocios) -----
    const vp   = document.getElementById('brandsViewport'); // el contenedor que hace scroll
    const prev = document.querySelector('.brands__btn--prev');
    const next = document.querySelector('.brands__btn--next');
  
    if (vp && prev && next) {
      const step = () => Math.min(260, vp.clientWidth * 0.6);
      prev.addEventListener('click', () => vp.scrollBy({ left: -step(), behavior: 'smooth' }));
      next.addEventListener('click', () => vp.scrollBy({ left:  step(), behavior: 'smooth' }));
    }
  })();
  