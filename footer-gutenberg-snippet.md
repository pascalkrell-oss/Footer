## HTML (Gutenberg Custom HTML)

```html
<footer class="pk-footer" role="contentinfo" aria-label="Footer">
  <div class="pk-footer__top" aria-label="Schnellzugriff und Vorteile">
    <p class="pk-footer__value-prop">Professionelle Sprachaufnahmen aus eigenem Studio – präzise, zuverlässig und sendefertig.</p>

    <ul class="pk-footer__trust" aria-label="Vorteile auf einen Blick">
      <li>
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm4.6 8.2-5.1 6a1 1 0 0 1-1.5.1l-2.6-2.6 1.4-1.4 1.8 1.8 4.4-5.2Z"/></svg>
        <span>24h Lieferung</span>
      </li>
      <li>
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1Z"/></svg>
        <span>Broadcast-Qualität</span>
      </li>
      <li>
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 1 3 5v6c0 5.6 3.8 10.8 9 12 5.2-1.2 9-6.4 9-12V5Zm0 10.4L8.7 8.1l1.4-1.4L12 8.6l4-4 1.4 1.4Z"/></svg>
        <span>Nutzungsrechte klar</span>
      </li>
    </ul>

    <div class="pk-footer__quick-cta">
      <a class="pk-btn pk-btn--primary" href="#">Projekt anfragen</a> <!-- TODO: Link ersetzen -->
      <a class="pk-btn pk-btn--ghost" href="#">Hörproben</a> <!-- TODO: Link ersetzen -->
    </div>
  </div>

  <div class="pk-footer__main">
    <section class="pk-footer__col" aria-labelledby="pk-footer-brand-title">
      <h3 id="pk-footer-brand-title">Sprecher Pascal Krell</h3>
      <p>Professionelle Voiceover-Produktionen für Werbung, Imagefilm, E-Learning und digitale Formate – effizient, markenkonform und mit persönlicher Betreuung.</p>
      <p class="pk-footer__microtrust" aria-label="Vertrauenshinweis">★★★★★ <strong>150+ Kunden</strong> vertrauen auf klare, hochwertige Sprachproduktionen.</p>

      <nav aria-label="Social Media">
        <ul class="pk-footer__social">
          <li><a href="#" aria-label="LinkedIn">LI</a></li> <!-- TODO: Link ersetzen -->
          <li><a href="#" aria-label="Instagram">IG</a></li> <!-- TODO: Link ersetzen -->
          <li><a href="#" aria-label="YouTube">YT</a></li> <!-- TODO: Link ersetzen -->
        </ul>
      </nav>
    </section>

    <nav class="pk-footer__col" aria-labelledby="pk-footer-services-title">
      <h4 id="pk-footer-services-title">Leistungen</h4>
      <ul class="pk-footer__links">
        <li><a href="#">Sprachaufnahmen</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Werbung / Imagefilm</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Erklärvideo</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Podcast-Service</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Audio-Schnitt</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Studio / Technik</a></li> <!-- TODO: Link ersetzen -->
      </ul>
    </nav>

    <nav class="pk-footer__col" aria-label="Footer Navigation" aria-labelledby="pk-footer-client-title">
      <h4 id="pk-footer-client-title">Für Kunden</h4>
      <ul class="pk-footer__links">
        <li><a href="#">Preise / Honorar</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Ablauf / Zusammenarbeit</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">FAQ</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Referenzen</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Kontakt</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Skript-Analyse Tool</a></li> <!-- TODO: Link ersetzen oder entfernen -->
      </ul>
    </nav>

    <section class="pk-footer__col" aria-labelledby="pk-footer-contact-title">
      <h4 id="pk-footer-contact-title">Kontakt</h4>
      <address class="pk-footer__contact">
        <a href="mailto:TODO_EMAIL">TODO_EMAIL</a>
        <a href="tel:TODO_PHONE">TODO_PHONE</a>
        <p>Antwort meist innerhalb von 24 Std.</p>
        <p>Standort: TODO_STADT / Region</p>
      </address>
      <a class="pk-footer__callback" href="#">Rückruf anfordern</a> <!-- TODO: Link ersetzen -->
    </section>
  </div>

  <div class="pk-footer__bottom">
    <p>© <span id="pk-footer-year">2026</span> Sprecher Pascal Krell</p>

    <nav aria-label="Rechtliches">
      <ul class="pk-footer__legal">
        <li><a href="#">Impressum</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">Datenschutz</a></li> <!-- TODO: Link ersetzen -->
        <li><a href="#">AGB</a></li> <!-- TODO: Link ersetzen oder entfernen -->
        <li><a href="#">Cookie-Einstellungen</a></li> <!-- TODO: Link ersetzen -->
      </ul>
    </nav>

    <button class="pk-footer__totop" type="button" aria-label="Nach oben scrollen">↑</button>
  </div>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Sprecher Pascal Krell",
    "url": "https://www.example.com",
    "email": "TODO_EMAIL",
    "telephone": "TODO_PHONE",
    "areaServed": "TODO_REGION",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "TODO_STADT",
      "addressCountry": "DE"
    }
  }
  </script>
</footer>
```

## CSS (in Customizer/Blocksy Custom CSS oder Theme CSS)

```css
.pk-footer {
  --pk-blue: #1a93ee;
  --pk-blue-dark: #0066b3;
  --pk-bg: #0f141a;
  --pk-text: rgba(255, 255, 255, 0.85);
  --pk-muted: rgba(255, 255, 255, 0.65);
  --pk-line: rgba(255, 255, 255, 0.08);
  --pk-radius: 18px;
  --pk-shadow: 0 0 0 1px rgba(26, 147, 238, 0.07), 0 14px 36px rgba(26, 147, 238, 0.08);

  font-family: "Rubik", system-ui, -apple-system, "Segoe UI", sans-serif;
  color: var(--pk-text);
  background: linear-gradient(180deg, #111922 0%, var(--pk-bg) 100%);
  border-top: 1px solid var(--pk-line);
  padding: clamp(24px, 4vw, 48px) clamp(18px, 4vw, 56px);
  display: grid;
  gap: clamp(22px, 2.8vw, 36px);
}

.pk-footer *,
.pk-footer *::before,
.pk-footer *::after {
  box-sizing: border-box;
}

.pk-footer a {
  color: inherit;
  text-decoration-color: transparent;
  text-underline-offset: 0.18em;
  transition: color 0.2s ease, text-decoration-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
}

.pk-footer a:hover,
.pk-footer a:focus-visible {
  color: var(--pk-blue);
  text-decoration-color: rgba(26, 147, 238, 0.55);
}

.pk-footer a:focus-visible,
.pk-footer button:focus-visible {
  outline: 2px solid var(--pk-blue);
  outline-offset: 2px;
}

.pk-footer__top {
  display: grid;
  gap: 18px;
  align-items: center;
  grid-template-columns: 1.15fr auto auto;
  padding: clamp(18px, 2.4vw, 24px);
  border: 1px solid var(--pk-line);
  border-radius: var(--pk-radius);
  background: rgba(255, 255, 255, 0.02);
  box-shadow: var(--pk-shadow);
}

.pk-footer__value-prop {
  margin: 0;
  max-width: 58ch;
  line-height: 1.5;
}

.pk-footer__trust {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.pk-footer__trust li {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 12px;
  border: 1px solid var(--pk-line);
  border-radius: 999px;
  color: var(--pk-muted);
  font-size: 0.87rem;
  white-space: nowrap;
}

.pk-footer__trust svg {
  width: 14px;
  height: 14px;
  fill: var(--pk-blue);
}

.pk-footer__quick-cta {
  display: flex;
  gap: 10px;
  justify-content: flex-end;
  flex-wrap: wrap;
}

.pk-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 44px;
  padding: 10px 16px;
  border-radius: 999px;
  border: 1px solid transparent;
  font-weight: 600;
  text-decoration: none;
}

.pk-btn--primary {
  background: linear-gradient(145deg, var(--pk-blue), var(--pk-blue-dark));
  color: #fff;
  box-shadow: 0 8px 24px rgba(26, 147, 238, 0.25);
}

.pk-btn--primary:hover,
.pk-btn--primary:focus-visible {
  color: #fff;
  background: linear-gradient(145deg, #1892f4, var(--pk-blue-dark));
}

.pk-btn--ghost {
  border-color: var(--pk-line);
  background: rgba(255, 255, 255, 0.02);
}

.pk-btn--ghost:hover,
.pk-btn--ghost:focus-visible {
  background: rgba(26, 147, 238, 0.12);
  border-color: rgba(26, 147, 238, 0.45);
}

.pk-footer__main {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: clamp(20px, 2.5vw, 32px);
}

.pk-footer__col {
  min-width: 0;
}

.pk-footer h3,
.pk-footer h4 {
  margin: 0 0 12px;
  color: #fff;
  line-height: 1.2;
}

.pk-footer h3 { font-size: clamp(1.15rem, 1.3vw, 1.35rem); }
.pk-footer h4 { font-size: 1rem; }

.pk-footer p {
  margin: 0 0 12px;
  color: var(--pk-muted);
  line-height: 1.6;
}

.pk-footer__microtrust strong { color: #fff; font-weight: 600; }

.pk-footer__social,
.pk-footer__links,
.pk-footer__legal {
  margin: 0;
  padding: 0;
  list-style: none;
}

.pk-footer__social {
  display: flex;
  gap: 10px;
  padding-top: 4px;
}

.pk-footer__social a {
  width: 36px;
  height: 36px;
  border-radius: 999px;
  border: 1px solid var(--pk-line);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 0.72rem;
  letter-spacing: 0.02em;
  background: rgba(255, 255, 255, 0.015);
  color: var(--pk-text);
}

.pk-footer__social a:hover,
.pk-footer__social a:focus-visible {
  background: rgba(26, 147, 238, 0.16);
  border-color: rgba(26, 147, 238, 0.5);
  box-shadow: 0 0 0 1px rgba(26, 147, 238, 0.25), 0 8px 20px rgba(26, 147, 238, 0.2);
}

.pk-footer__links li + li,
.pk-footer__legal li + li {
  margin-top: 10px;
}

.pk-footer__links a {
  color: var(--pk-muted);
}

.pk-footer__contact {
  margin: 0;
  display: grid;
  gap: 10px;
  font-style: normal;
}

.pk-footer__contact a {
  width: fit-content;
  color: #fff;
  font-weight: 600;
}

.pk-footer__callback {
  display: inline-flex;
  align-items: center;
  margin-top: 12px;
  padding: 8px 12px;
  border-radius: 999px;
  border: 1px solid rgba(26, 147, 238, 0.35);
  background: rgba(26, 147, 238, 0.1);
  font-size: 0.88rem;
  font-weight: 600;
}

.pk-footer__bottom {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 14px 22px;
  padding-top: 18px;
  border-top: 1px solid var(--pk-line);
}

.pk-footer__bottom p {
  margin: 0;
  font-size: 0.9rem;
}

.pk-footer__legal {
  display: flex;
  flex-wrap: wrap;
  gap: 8px 16px;
}

.pk-footer__legal li + li { margin-top: 0; }

.pk-footer__totop {
  margin-left: auto;
  width: 42px;
  height: 42px;
  border-radius: 999px;
  border: 1px solid var(--pk-line);
  background: rgba(255, 255, 255, 0.03);
  color: #fff;
  cursor: pointer;
  font-size: 1.05rem;
  line-height: 1;
}

.pk-footer__totop:hover,
.pk-footer__totop:focus-visible {
  background: rgba(26, 147, 238, 0.16);
  border-color: rgba(26, 147, 238, 0.5);
}

@media (max-width: 1080px) {
  .pk-footer__top {
    grid-template-columns: 1fr;
    justify-items: start;
  }

  .pk-footer__quick-cta {
    justify-content: flex-start;
  }

  .pk-footer__main {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 640px) {
  .pk-footer {
    padding-inline: 16px;
  }

  .pk-footer__main {
    grid-template-columns: 1fr;
  }

  .pk-footer__bottom {
    align-items: flex-start;
    flex-direction: column;
  }

  .pk-footer__totop {
    margin-left: 0;
  }
}
```

## JS (optional, nur für Back-to-top)

```html
<script>
  (function () {
    const footer = document.querySelector('.pk-footer');
    if (!footer) return;

    const yearNode = footer.querySelector('#pk-footer-year');
    if (yearNode) yearNode.textContent = String(new Date().getFullYear());

    const toTopBtn = footer.querySelector('.pk-footer__totop');
    if (!toTopBtn) return;

    toTopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  })();
</script>
```
