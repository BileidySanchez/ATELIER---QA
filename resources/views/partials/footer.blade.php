</main>

<footer class="site-footer">
  <div class="contenedor footer-grid">
    <div>
      <h3>ATELIER</h3>
      <p style="color:#B9B4A9;font-size:.9rem;max-width:260px;">Ropa hecha con materiales honestos, pensada para durar más que una temporada.</p>
      <div class="redes">
        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M15 8h-2a2 2 0 0 0-2 2v10M9 13h6"/><circle cx="12" cy="12" r="10"/></svg></a>
        <a href="#" aria-label="TikTok"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 4v10.5a3.5 3.5 0 1 1-3-3.46"/><path d="M14 4c.5 2.5 2 4 5 4.2"/></svg></a>
      </div>
    </div>
    <div>
      <h3>Empresa</h3>
      <ul>
        <li><a href="{{ route('about.show') }}">Nosotros</a></li>
        <li><a href="{{ route('contact.show') }}">Contacto</a></li>
        <li><a href="#">Preguntas frecuentes</a></li>
      </ul>
    </div>
    <div>
      <h3>Políticas</h3>
      <ul>
        <li><a href="#">Envíos y devoluciones</a></li>
        <li><a href="#">Términos y condiciones</a></li>
        <li><a href="#">Privacidad</a></li>
      </ul>
    </div>
    <div>
      <h3>Boletín</h3>
      <p style="color:#B9B4A9;font-size:.9rem;">Suscríbete y recibe 10% en tu primera compra.</p>
      <form id="newsletter-form" action="#" onsubmit="return false;">
        <label for="newsletter-email" class="visually-hidden" style="position:absolute;left:-9999px;">Correo electrónico</label>
        <input type="email" id="newsletter-email" placeholder="tu@correo.com">
        <button type="submit">Unirme</button>
      </form>
      <div class="pagos">
        <span>VISA</span><span>MASTERCARD</span><span>PAYPAL</span>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

