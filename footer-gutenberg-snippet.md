```html
<footer id="pk-footer-2026" role="contentinfo" aria-label="Website Footer">
  <style>
    #pk-footer-2026 {
      --pk-primary: #1a93ee;
      --pk-primary-hover: #0066b3;
      --pk-bg: #0f141a;
      --pk-text: rgba(255, 255, 255, 0.88);
      --pk-muted: rgba(255, 255, 255, 0.62);
      --pk-border: rgba(255, 255, 255, 0.08);
      --pk-radius: 20px;
      --pk-shadow: 0 10px 30px rgba(0, 0, 0, 0.22), 0 0 0 1px rgba(26, 147, 238, 0.08);
      --pk-glow: 0 0 0 1px rgba(26, 147, 238, 0.24), 0 10px 28px rgba(26, 147, 238, 0.18);

      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: var(--pk-text);
      background: linear-gradient(180deg, #121922 0%, var(--pk-bg) 100%);
      border-top: 1px solid var(--pk-border);
      padding: clamp(24px, 4vw, 48px) clamp(16px, 4vw, 64px);
      box-sizing: border-box;
    }

    #pk-footer-2026 *,
    #pk-footer-2026 *::before,
    #pk-footer-2026 *::after {
      box-sizing: border-box;
    }

    #pk-footer-2026 .pk-wrap {
      max-width: 1320px;
      margin: 0 auto;
      display: grid;
      gap: clamp(24px, 3.4vw, 48px);
    }

    #pk-footer-2026 a {
      color: inherit;
      text-decoration-color: transparent;
      text-underline-offset: 0.18em;
      transition: color 180ms ease, text-decoration-color 180ms ease, border-color 180ms ease, background-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
    }

    #pk-footer-2026 a:hover {
      color: var(--pk-primary);
      text-decoration-color: rgba(26, 147, 238, 0.6);
    }

    #pk-footer-2026 a:focus-visible,
    #pk-footer-2026 button:focus-visible,
    #pk-footer-2026 input:focus-visible {
      outline: 2px solid var(--pk-primary);
      outline-offset: 2px;
    }

    #pk-footer-2026 .pk-card {
      border: 1px solid var(--pk-border);
      border-radius: var(--pk-radius);
      background: rgba(255, 255, 255, 0.02);
      box-shadow: var(--pk-shadow);
    }

    #pk-footer-2026 .pk-utility {
      padding: clamp(24px, 3vw, 36px);
      display: grid;
      gap: 24px;
    }

    #pk-footer-2026 .pk-utility-top {
      display: grid;
      gap: 24px;
      grid-template-columns: 1.5fr auto;
      align-items: center;
    }

    #pk-footer-2026 .pk-value {
      margin: 0;
      font-size: clamp(1rem, 1.5vw, 1.15rem);
      line-height: 1.6;
      max-width: 60ch;
    }

    #pk-footer-2026 .pk-cta-group {
      display: flex;
      gap: 12px;
      justify-content: flex-end;
      flex-wrap: wrap;
    }

    #pk-footer-2026 .pk-btn {
      min-height: 46px;
      padding: 10px 18px;
      border-radius: 999px;
      border: 1px solid transparent;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      letter-spacing: 0.01em;
      text-decoration: none;
      cursor: pointer;
    }

    #pk-footer-2026 .pk-btn--primary {
      background: var(--pk-primary);
      color: #fff;
      box-shadow: 0 8px 24px rgba(26, 147, 238, 0.28);
    }

    #pk-footer-2026 .pk-btn--primary:hover,
    #pk-footer-2026 .pk-btn--primary:focus-visible {
      color: #fff;
      background: var(--pk-primary-hover);
      transform: translateY(-1px);
    }

    #pk-footer-2026 .pk-btn--ghost {
      border-color: rgba(255, 255, 255, 0.14);
      background: rgba(255, 255, 255, 0.02);
      color: var(--pk-text);
    }

    #pk-footer-2026 .pk-btn--ghost:hover,
    #pk-footer-2026 .pk-btn--ghost:focus-visible {
      border-color: rgba(26, 147, 238, 0.5);
      background: rgba(26, 147, 238, 0.14);
    }

    #pk-footer-2026 .pk-trust-items {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
    }

    #pk-footer-2026 .pk-trust-items li {
      display: flex;
      gap: 10px;
      align-items: center;
      border: 1px solid var(--pk-border);
      border-radius: 999px;
      padding: 10px 14px;
      color: var(--pk-muted);
      font-size: 0.92rem;
      min-height: 44px;
    }

    #pk-footer-2026 .pk-trust-items svg {
      flex: 0 0 16px;
      width: 16px;
      height: 16px;
      fill: var(--pk-primary);
    }

    #pk-footer-2026 .pk-mega {
      display: grid;
      gap: clamp(20px, 2.4vw, 32px);
      grid-template-columns: 1.2fr repeat(3, 1fr) 1.1fr;
      align-items: start;
    }

    #pk-footer-2026 .pk-col h3,
    #pk-footer-2026 .pk-col h4 {
      margin: 0 0 14px;
      color: #fff;
      line-height: 1.25;
    }

    #pk-footer-2026 .pk-col h3 { font-size: clamp(1.1rem, 1.7vw, 1.35rem); }
    #pk-footer-2026 .pk-col h4 { font-size: 1rem; }

    #pk-footer-2026 .pk-col p {
      margin: 0 0 12px;
      color: var(--pk-muted);
      line-height: 1.65;
    }

    #pk-footer-2026 .pk-brand,
    #pk-footer-2026 .pk-contact-card {
      padding: clamp(20px, 2.5vw, 28px);
      min-height: 100%;
    }

    #pk-footer-2026 .pk-brand-name {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 12px;
      color: #fff;
      font-weight: 800;
      letter-spacing: 0.01em;
    }

    #pk-footer-2026 .pk-logo-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, #67c0ff, var(--pk-primary));
      box-shadow: 0 0 0 5px rgba(26, 147, 238, 0.12);
    }

    #pk-footer-2026 .pk-social {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin: 16px 0 12px;
      padding: 0;
      list-style: none;
    }

    #pk-footer-2026 .pk-social a {
      width: 38px;
      height: 38px;
      border-radius: 999px;
      border: 1px solid var(--pk-border);
      background: rgba(255, 255, 255, 0.02);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--pk-text);
    }

    #pk-footer-2026 .pk-social a:hover,
    #pk-footer-2026 .pk-social a:focus-visible {
      box-shadow: var(--pk-glow);
      border-color: rgba(26, 147, 238, 0.45);
      background: rgba(26, 147, 238, 0.12);
    }

    #pk-footer-2026 .pk-mini-trust {
      margin: 0;
      color: var(--pk-muted);
      font-size: 0.9rem;
    }

    #pk-footer-2026 .pk-links {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 10px;
    }

    #pk-footer-2026 .pk-links a {
      color: var(--pk-muted);
    }

    #pk-footer-2026 address {
      margin: 0;
      font-style: normal;
      color: var(--pk-muted);
      display: grid;
      gap: 10px;
    }

    #pk-footer-2026 address a {
      color: #fff;
      font-weight: 600;
      width: fit-content;
    }

    #pk-footer-2026 .pk-news {
      padding: clamp(24px, 3vw, 36px);
      display: grid;
      gap: 16px;
    }

    #pk-footer-2026 .pk-news h4 {
      margin: 0;
      font-size: clamp(1.08rem, 1.5vw, 1.25rem);
      color: #fff;
    }

    #pk-footer-2026 .pk-news p {
      margin: 0;
      color: var(--pk-muted);
      line-height: 1.6;
    }

    #pk-footer-2026 .pk-news-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
    }

    #pk-footer-2026 .pk-news-input {
      flex: 1 1 260px;
      min-height: 46px;
      border-radius: 14px;
      border: 1px solid var(--pk-border);
      background: rgba(255, 255, 255, 0.03);
      color: #fff;
      padding: 10px 14px;
    }

    #pk-footer-2026 .pk-news-input::placeholder {
      color: rgba(255, 255, 255, 0.48);
    }

    #pk-footer-2026 .pk-note {
      font-size: 0.84rem;
    }

    #pk-footer-2026 .pk-form-msg {
      min-height: 1.2em;
      font-size: 0.9rem;
      margin: 2px 0 0;
    }

    #pk-footer-2026 .pk-form-msg[data-state="success"] { color: #8fe2b2; }
    #pk-footer-2026 .pk-form-msg[data-state="error"] { color: #ff9b9b; }

    #pk-footer-2026 .pk-bottom {
      padding-top: 24px;
      border-top: 1px solid var(--pk-border);
      display: grid;
      grid-template-columns: 1fr auto auto;
      gap: 14px 24px;
      align-items: center;
    }

    #pk-footer-2026 .pk-bottom p {
      margin: 0;
      font-size: 0.94rem;
      color: var(--pk-muted);
    }

    #pk-footer-2026 .pk-legal {
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      gap: 8px 16px;
      margin: 0;
      padding: 0;
    }

    #pk-footer-2026 .pk-top-btn {
      width: 44px;
      height: 44px;
      border-radius: 999px;
      border: 1px solid var(--pk-border);
      background: rgba(255, 255, 255, 0.03);
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    #pk-footer-2026 .pk-top-btn:hover,
    #pk-footer-2026 .pk-top-btn:focus-visible {
      border-color: rgba(26, 147, 238, 0.45);
      background: rgba(26, 147, 238, 0.16);
      box-shadow: var(--pk-glow);
    }

    @media (max-width: 1100px) {
      #pk-footer-2026 .pk-mega {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      #pk-footer-2026 .pk-utility-top {
        grid-template-columns: 1fr;
      }

      #pk-footer-2026 .pk-cta-group {
        justify-content: flex-start;
      }

      #pk-footer-2026 .pk-trust-items {
        grid-template-columns: 1fr;
      }

      #pk-footer-2026 .pk-bottom {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 720px) {
      #pk-footer-2026 .pk-mega {
        grid-template-columns: 1fr;
      }

      #pk-footer-2026 .pk-cta-group {
        width: 100%;
      }

      #pk-footer-2026 .pk-btn {
        width: 100%;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      #pk-footer-2026 * {
        transition: none !important;
        animation: none !important;
        scroll-behavior: auto !important;
      }
    }
  </style>

  <div class="pk-wrap">
    <section class="pk-utility pk-card" aria-label="Schnellzugriff und Vorteile">
      <div class="pk-utility-top">
        <p class="pk-value">Professionelle Voiceovers mit Broadcast-Qualität, klaren Nutzungsrechten und planbarer Umsetzung für Marken, Agenturen und Content-Teams.</p>
        <div class="pk-cta-group">
          <a class="pk-btn pk-btn--primary" href="TODO_URL_PROJEKT">Projekt anfragen</a>
          <a class="pk-btn pk-btn--ghost" href="TODO_URL_HOERPROBEN">Hörproben</a>
        </div>
      </div>
      <ul class="pk-trust-items" aria-label="Trust-Merkmale">
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2 3 6v6c0 5.2 3.4 9.9 9 11 5.6-1.1 9-5.8 9-11V6Zm-1.1 14.6-3.8-3.8 1.4-1.4 2.4 2.4 5-5 1.4 1.4Z"/></svg>
          <span>Broadcast-Qualität</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M19 7h-2V5a5 5 0 0 0-10 0v2H5a2 2 0 0 0-2 2v8a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5V9a2 2 0 0 0-2-2ZM9 5a3 3 0 1 1 6 0v2H9Zm8 12a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V9h12Z"/></svg>
          <span>Schnelle Lieferung</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m12 2 8 4v6c0 5.3-3.4 10-8 11-4.6-1-8-5.7-8-11V6Zm-1 12-3-3-1.4 1.4L11 16.8l6.4-6.4L16 9Z"/></svg>
          <span>Klare Nutzungsrechte</span>
        </li>
      </ul>
    </section>

    <div class="pk-mega" aria-label="Main Mega Footer">
      <section class="pk-col pk-brand pk-card" aria-labelledby="pk-brand-title">
        <h3 id="pk-brand-title" class="pk-brand-name"><span class="pk-logo-dot" aria-hidden="true"></span>PK Voice Studio</h3>
        <p>Präzise Sprachproduktionen für Werbung, E-Learning, Corporate Audio und digitale Kampagnen – persönlich betreut, technisch sauber umgesetzt.</p>
        <nav aria-label="Social Media">
          <ul class="pk-social">
            <li><a href="TODO_URL_LINKEDIN" aria-label="LinkedIn">in</a></li>
            <li><a href="TODO_URL_INSTAGRAM" aria-label="Instagram">ig</a></li>
            <li><a href="TODO_URL_YOUTUBE" aria-label="YouTube">yt</a></li>
          </ul>
        </nav>
        <p class="pk-mini-trust">★★★★★ Vertrauen von Agenturen, Brands und Produktionshäusern.</p>
      </section>

      <nav class="pk-col" aria-label="Footer Navigation Leistungen">
        <h4>Leistungen</h4>
        <ul class="pk-links">
          <li><a href="TODO_URL_LEISTUNG_VOICEOVER">Voiceover Produktion</a></li>
          <li><a href="TODO_URL_LEISTUNG_WERBESPOT">Werbespots &amp; Ads</a></li>
          <li><a href="TODO_URL_LEISTUNG_IMAGEFILM">Imagefilm-Sprecher</a></li>
          <li><a href="TODO_URL_LEISTUNG_ELEARNING">E-Learning Audio</a></li>
          <li><a href="TODO_URL_LEISTUNG_PODCAST">Podcast Intros/Outros</a></li>
          <li><a href="TODO_URL_LEISTUNG_POSTPRODUCTION">Schnitt &amp; Mastering</a></li>
        </ul>
      </nav>

      <nav class="pk-col" aria-label="Footer Navigation Für Kunden">
        <h4>Für Kunden</h4>
        <ul class="pk-links">
          <li><a href="TODO_URL_ABLAUF">So läuft die Zusammenarbeit</a></li>
          <li><a href="TODO_URL_FAQ">FAQ</a></li>
          <li><a href="TODO_URL_PREISE">Preise &amp; Pakete</a></li>
          <li><a href="TODO_URL_REFERENZEN">Referenzen</a></li>
          <li><a href="TODO_URL_TOOLS">Tools für Briefing &amp; Skript</a></li>
        </ul>
      </nav>

      <nav class="pk-col" aria-label="Footer Navigation Ressourcen">
        <h4>Ressourcen</h4>
        <ul class="pk-links">
          <li><a href="TODO_URL_BLOG">Blog</a></li>
          <li><a href="TODO_URL_TIPPS">Tipps zur Sprecherbuchung</a></li>
          <li><a href="TODO_URL_DOWNLOADS">Downloads</a></li>
          <li><a href="TODO_URL_STUDIO">Studio-Einblicke</a></li>
          <li><a href="TODO_URL_TECHNIK">Technik &amp; Specs</a></li>
        </ul>
      </nav>

      <section class="pk-col pk-contact-card pk-card" aria-labelledby="pk-contact-title">
        <h4 id="pk-contact-title">Kontakt</h4>
        <address>
          <span>PK Voice Studio<br>TODO_ADDRESS_STREET<br>TODO_ADDRESS_CITY</span>
          <a href="mailto:TODO_EMAIL">TODO_EMAIL</a>
          <a href="tel:TODO_PHONE">TODO_PHONE</a>
          <span>Antwortzeit: meist innerhalb weniger Stunden.</span>
        </address>
        <p style="margin-top:14px;"><a class="pk-btn pk-btn--ghost" href="TODO_URL_RUECKRUF">Rückruf anfordern</a></p>
      </section>
    </div>

    <section class="pk-news pk-card" aria-labelledby="pk-news-title">
      <h4 id="pk-news-title">Updates zu Stimme, Produktion &amp; neuen Hörproben</h4>
      <p>Erhalte kompakte Praxis-Tipps, neue Referenzen und technische Insights direkt in dein Postfach.</p>
      <form class="pk-news-form" id="pk-news-form-2026" novalidate>
        <label for="pk-news-email-2026" class="screen-reader-text" style="position:absolute;left:-9999px;">E-Mail-Adresse</label>
        <input id="pk-news-email-2026" class="pk-news-input" name="email" type="email" inputmode="email" autocomplete="email" placeholder="deine@email.de" aria-describedby="pk-news-note-2026 pk-news-msg-2026" required>
        <button class="pk-btn pk-btn--primary" type="submit">Updates erhalten</button>
      </form>
      <p id="pk-news-note-2026" class="pk-note">Mit dem Absenden stimmst du dem Erhalt von E-Mails zu. Abmeldung jederzeit möglich. Keine Tracking-Tools in diesem Formular.</p>
      <p id="pk-news-msg-2026" class="pk-form-msg" aria-live="polite"></p>
    </section>

    <div class="pk-bottom">
      <p>© <span id="pk-year-2026">2026</span> PK Voice Studio</p>
      <nav aria-label="Rechtliches">
        <ul class="pk-legal">
          <li><a href="TODO_URL_IMPRESSUM">Impressum</a></li>
          <li><a href="TODO_URL_DATENSCHUTZ">Datenschutz</a></li>
          <li><a href="TODO_URL_AGB">AGB</a></li>
          <li><a href="TODO_URL_COOKIE">Cookie-Einstellungen</a></li>
        </ul>
      </nav>
      <button type="button" class="pk-top-btn" aria-label="Zurück nach oben">↑</button>
    </div>
  </div>

  <script>
    (function () {
      var footer = document.getElementById('pk-footer-2026');
      if (!footer) return;

      var yearNode = footer.querySelector('#pk-year-2026');
      if (yearNode) yearNode.textContent = String(new Date().getFullYear());

      var topBtn = footer.querySelector('.pk-top-btn');
      if (topBtn) {
        topBtn.addEventListener('click', function () {
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      }

      var form = footer.querySelector('#pk-news-form-2026');
      if (!form) return;

      var emailInput = form.querySelector('#pk-news-email-2026');
      var msg = footer.querySelector('#pk-news-msg-2026');
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!emailInput || !msg) return;

        var value = (emailInput.value || '').trim();
        if (!emailRegex.test(value)) {
          msg.textContent = 'Bitte gib eine gültige E-Mail-Adresse ein.';
          msg.setAttribute('data-state', 'error');
          emailInput.setAttribute('aria-invalid', 'true');
          emailInput.focus();
          return;
        }

        emailInput.setAttribute('aria-invalid', 'false');
        msg.textContent = 'Danke! Deine Anmeldung wurde lokal validiert. Verbinde das Formular jetzt mit deinem E-Mail-Tool.';
        msg.setAttribute('data-state', 'success');
        form.reset();
      });
    })();
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "TODO_NAME",
      "url": "TODO_URL_WEBSITE",
      "email": "TODO_EMAIL",
      "telephone": "TODO_PHONE",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "TODO_ADDRESS_STREET",
        "addressLocality": "TODO_ADDRESS_CITY",
        "postalCode": "TODO_ADDRESS_POSTAL",
        "addressCountry": "DE"
      }
    }
  </script>
</footer>
```
