<footer class="section section--black footer">
  <div class="wrap footer__row">
    
    <!-- Logo -->
    <a class="brand" href="/" aria-label="Logo">
      <img src="/img/logo.svg" alt="Logo" class="footer__logo" />
    </a>

    <!-- Contacto -->
    <div class="footer__contact">
      <p style="margin:0;">
        <a href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>" class="ico" aria-label="WhatsApp" target="_blank" rel="noopener" style="margin-right:6px;">
          <svg width="22" height="22" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32
                     c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9
                     c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222
                     0-59.3-25.2-115-67.1-157z" fill="#25D366"/>
            <path d="M320.8 297.3c-5.5-2.8-32.8-16.2-37.9-18
                     -5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8
                     c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66
                     -5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7
                     -1.4-2.8-12.5-30.1-17.1-41.2
                     -4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2
                     -3.7 0-9.7 1.4-14.8 6.9
                     -5.1 5.6-19.4 19-19.4 46.3
                     0 27.3 19.9 53.7 22.6 57.4
                     2.8 3.7 39.1 59.7 94.8 83.8
                     35.2 15.2 49 16.5 66.6 13.9
                     10.7-1.6 32.8-13.4 37.4-26.4
                     4.6-13 4.6-24.1 3.2-26.4
                     -1.3-2.5-5-3.9-10.5-6.6z" fill="#fff"/>
          </svg>
        </a>
        <a href="https://wa.me/<?= urlencode($SITE['whatsapp']) ?>" target="_blank" rel="noopener" style="color:#fff; text-decoration:none;">
          +<?= htmlspecialchars($SITE['whatsapp']) ?>
        </a>
      </p>
    </div>

    <!-- Redes sociales -->
    <div class="footer__social">
      <a href="<?= htmlspecialchars($SITE['instagram']) ?>" aria-label="Instagram" target="_blank" rel="noopener">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <linearGradient id="IGgrad-footer" x1="0" y1="0" x2="24" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F58529"/>
            <stop offset="0.5" stop-color="#DD2A7B"/>
            <stop offset="1" stop-color="#515BD4"/>
          </linearGradient>
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"
                stroke="url(#IGgrad-footer)" stroke-width="2"/>
          <circle cx="12" cy="12" r="5.5"
                  stroke="url(#IGgrad-footer)" stroke-width="2"/>
          <circle cx="17.5" cy="6.5" r="1.2" fill="#DD2A7B"/>
        </svg>
      </a>
      <a href="<?= htmlspecialchars($SITE['facebook']) ?>" aria-label="Facebook" target="_blank" rel="noopener">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="#1877F2" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12
                   C2 16.9911 5.65685 21.1283 10.4375 21.8789V14.8906H7.89844V12H10.4375
                   V9.79688C10.4375 7.30078 11.9307 5.90625 14.2158 5.90625
                   C15.3066 5.90625 16.4531 6.10156 16.4531 6.10156V8.57031H15.0469
                   C13.6562 8.57031 13.3125 9.35156 13.3125 10.1562V12H16.3438L15.875
                   14.8906H13.3125V21.8789C18.0931 21.1283 22 16.9911 22 12Z"/>
        </svg>
      </a>
      <a href="<?= htmlspecialchars($SITE['tiktok']) ?>" aria-label="TikTok" target="_blank" rel="noopener">
        <svg width="22" height="22" viewBox="0 0 256 256" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M164 64.003C196.6 64.003 222 89.335 222 122.003C222 154.336 196.6 179.668 164 179.668C136.039 179.668 112.942 159.996 104 133.333V168.003C104 187.667 120 203.668 140.667 203.668C161.333 203.668 176.667 187.667 176.667 168.003V169.336C209.333 165.336 234.667 135.336 234.667 102.003C234.667 68.003 209.333 38.003 176.667 34.003V64.003H164Z" fill="#25F4EE"/>
          <path d="M104.667 133.003C114 124.336 128 116.003 144 116.003C158.667 116.003 172 123.669 179.333 133.003V64.003H164V116.003C147.333 116.003 132 124.336 124 133.003C114.667 142.336 104.667 153.336 104.667 133.003Z" fill="#FE2C55"/>
          <path d="M104.667 133.003C96 124.336 84 116.003 68 116.003C52 116.003 40 125.336 32 133.003V203.668C32 224.336 43.667 240.003 64 240.003C84.333 240.003 104 224.336 104 203.668V133.003H104.667Z" fill="#010101"/>
        </svg>
      </a>
    </div>
  </div>

  <div class="footer__bottom">
    <span>© <?= date('Y') ?> Clara &amp; Ema — Todos los derechos reservados.</span>
    <span>Hecho con ♥ en Trenque Lauquen</span>
  </div>
</footer>
