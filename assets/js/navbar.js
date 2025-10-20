// Navbar: drawer mobile (abre desde [data-drawer-open])
(() => {
    const drawer  = document.querySelector('.drawer');
    const openBtn = document.querySelector('[data-drawer-open]');
    if (!drawer || !openBtn) return;
  
    const backdrop  = drawer.querySelector('.drawer__backdrop');
    const closeBtns = drawer.querySelectorAll('[data-drawer-close]');
  
    const open  = () => drawer.classList.add('is-open');
    const close = () => drawer.classList.remove('is-open');
  
    openBtn.addEventListener('click', open);
    backdrop?.addEventListener('click', close);
    closeBtns.forEach(b => b.addEventListener('click', close));
    document.addEventListener('keydown', e => { if (e.key === 'Escape') close(); });
  })();
  