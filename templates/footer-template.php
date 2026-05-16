<?php
/**
 * Frontend template for PK Custom Footer.
 *
 * @var array $settings
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<footer id="pk-footer-ultimate" aria-labelledby="pk-footer-title">
  <h2 id="pk-footer-title" class="pk-sr-only">Footer Navigation</h2>

<?php if ( ! empty( $settings['prefooter_enabled'] ) && PK_Custom_Footer::has_any_prefooter_set( $settings ) ) : ?>
  <div class="pk-top-strip-textured">
    <div class="pk-container">

<?php if ( ! empty( $settings['set_1_enabled'] ) ) : ?>
      <div class="pk-dynamic-set" id="pk-set-1">
        <div class="pk-top-layout">
          <div class="pk-tools-cta">
            <span class="pk-handwritten-note">
              Schon ausprobiert..?
              <svg viewBox="0 0 100 50" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                 <path d="M5,35 Q40,45 95,10" />
                 <path d="M95,10 L80,5 M95,10 L88,22" />
              </svg>
            </span>
          </div>
          <div class="pk-tools-grid">
            <a href="/skript-analyse-fuer-sprecher-und-autoren" class="pk-tool-card">
              <span class="pk-badge">Freemium</span>
              <div class="pk-tool-icon"><i class="fa-solid fa-file-signature"></i></div>
              <div class="pk-tool-text"><h4>Skript-Analyse</h4><p>Analysiere & optimiere Deine Skripte.</p></div>
            </a>
            <a href="/gagenrechner-sprecherpreise-berechnen" class="pk-tool-card">
              <span class="pk-badge">Kostenlos</span>
              <div class="pk-tool-icon"><i class="fa-solid fa-calculator"></i></div>
              <div class="pk-tool-text"><h4>Gagen-Rechner</h4><p>Sprecherpreise fair kalkulieren.</p></div>
            </a>
            <a href="/studio-finder" class="pk-tool-card">
              <span class="pk-badge">Kostenlos</span>
              <div class="pk-tool-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="pk-tool-text"><h4>Studio-Finder</h4><p>Finde Tonstudios & Agenturen in der Nähe.</p></div>
            </a>
            <a href="/audio-converter" class="pk-tool-card">
              <span class="pk-badge">Kostenlos</span>
              <div class="pk-tool-icon"><i class="fa-solid fa-file-audio"></i></div>
              <div class="pk-tool-text"><h4>Audio-Converter</h4><p>WAV/MP3 verlustfrei umwandeln.</p></div>
            </a>
          </div>
        </div>
      </div>

<?php endif; ?>
<?php if ( ! empty( $settings['set_2_enabled'] ) ) : ?>
      <div class="pk-dynamic-set" id="pk-set-2">
        <div class="pk-top-layout">
          <div class="pk-tools-cta">
            <span class="pk-handwritten-note">
              Aus dem Blog...
              <svg viewBox="0 0 100 50" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                 <path d="M5,35 Q40,45 95,10" />
                 <path d="M95,10 L80,5 M95,10 L88,22" />
              </svg>
            </span>
            <div class="pk-slider-nav">
              <button class="pk-slider-btn" id="pk-blog-prev" aria-label="Vorherige Beiträge"><i class="fa-solid fa-chevron-left"></i></button>
              <button class="pk-slider-btn" id="pk-blog-next" aria-label="Nächste Beiträge"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
          </div>

          <div class="pk-blog-slider" id="pk-blog-slider-container">
            <div style="color:var(--pk-text-muted-on-dark); font-size: 0.9rem; padding: 20px;">Lade neueste Beiträge...</div>
          </div>

        </div>
      </div>

<?php endif; ?>
<?php if ( ! empty( $settings['set_3_enabled'] ) ) : ?>
      <div class="pk-dynamic-set" id="pk-set-3">
        <div class="pk-top-layout">
          <div class="pk-tools-cta">
            <span class="pk-handwritten-note">
              Warum Pascal..?
              <svg viewBox="0 0 100 50" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                 <path d="M5,35 Q40,45 95,10" />
                 <path d="M95,10 L80,5 M95,10 L88,22" />
              </svg>
            </span>
          </div>
          <div class="pk-tools-grid">
            <a href="/studio-finder" class="pk-tool-card">
              <div class="pk-tool-icon"><i class="fa-solid fa-microphone-lines"></i></div>
              <div class="pk-tool-text"><h4>Broadcast-Studio</h4><p>Neumann Mikro & perfekte Akustik.</p></div>
            </a>
            <a href="/kontakt" class="pk-tool-card">
              <div class="pk-tool-icon"><i class="fa-solid fa-bolt"></i></div>
              <div class="pk-tool-text"><h4>24h Express</h4><p>Schnelle Lieferung für enge Deadlines.</p></div>
            </a>
            <a href="/kontakt" class="pk-tool-card">
              <div class="pk-tool-icon"><i class="fa-solid fa-headphones"></i></div>
              <div class="pk-tool-text"><h4>Live-Regie</h4><p>SessionLink Pro, ZOOM & Teams.</p></div>
            </a>
            <a href="/gagenrechner-sprecherpreise-berechnen" class="pk-tool-card">
              <div class="pk-tool-icon"><i class="fa-solid fa-file-contract"></i></div>
              <div class="pk-tool-text"><h4>Buyout-Sicherheit</h4><p>Faire & transparente Nutzungsrechte.</p></div>
            </a>
          </div>
        </div>
      </div>

<?php endif; ?>
<?php if ( ! empty( $settings['set_4_enabled'] ) ) : ?>
      <div class="pk-dynamic-set" id="pk-set-4">
        <div class="pk-top-layout">
          <div class="pk-tools-cta">
            <span class="pk-handwritten-note">
              Hör mal rein..!
              <svg viewBox="0 0 100 50" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                 <path d="M5,35 Q40,45 95,10" />
                 <path d="M95,10 L80,5 M95,10 L88,22" />
              </svg>
            </span>
          </div>

          <div class="pk-tools-grid">
            <a href="/werbesprecher-buchen"
               class="pk-tool-card pk-modal-trigger"
               data-pk-modal="pk-modal-werbespots"
               aria-haspopup="dialog" aria-controls="pk-modal-werbespots">
              <div class="pk-tool-icon"><i class="fa-solid fa-circle-play"></i></div>
              <div class="pk-tool-text"><h4>Werbespots</h4><p>Dynamisch, frisch & auffallend.</p></div>
            </a>

            <a href="/sprecher-fuer-imagefilm"
               class="pk-tool-card pk-modal-trigger"
               data-pk-modal="pk-modal-imagefilme"
               aria-haspopup="dialog" aria-controls="pk-modal-imagefilme">
              <div class="pk-tool-icon"><i class="fa-solid fa-circle-play"></i></div>
              <div class="pk-tool-text"><h4>Imagefilme</h4><p>Vertrauensvoll & professionell.</p></div>
            </a>

            <a href="/sprecher-fuer-e-learning"
               class="pk-tool-card pk-modal-trigger"
               data-pk-modal="pk-modal-elearning"
               aria-haspopup="dialog" aria-controls="pk-modal-elearning">
              <div class="pk-tool-icon"><i class="fa-solid fa-circle-play"></i></div>
              <div class="pk-tool-text"><h4>E-Learning</h4><p>Klar, motivierend & verständlich.</p></div>
            </a>

            <a href="/telefonansagen-und-warteschleife-fuer-unternehmen"
               class="pk-tool-card pk-modal-trigger"
               data-pk-modal="pk-modal-telefonansagen"
               aria-haspopup="dialog" aria-controls="pk-modal-telefonansagen">
              <div class="pk-tool-icon"><i class="fa-solid fa-circle-play"></i></div>
              <div class="pk-tool-text"><h4>Telefonansagen</h4><p>Professionell, klar & markenkonform.</p></div>
            </a>
          </div>
        </div>
      </div>

<?php endif; ?>
    </div>
  </div>

<?php endif; ?>
  <div class="pk-footer-main-light">
    <div class="pk-container pk-main-grid">

      <div class="pk-brand-col">
        <img src="https://dev.pascal-krell.de/wp-content/uploads/2025/09/logo-dark-v3.svg" alt="Sprecher Pascal Krell" class="pk-brand-logo" width="180" height="auto" loading="lazy">
        <p class="pk-brand-desc">Sprecher Pascal Krell aus Hamburg. Profisprecher für Werbung, Imagefilm und Erklärvideo mit eigenem Studio.</p>

        <div class="pk-socials">
          <a href="https://www.tiktok.com/@sprecher_pascal" aria-label="TikTok Profil" target="_blank" rel="noopener"><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://www.instagram.com/sprecher_pascal/" aria-label="Instagram Profil" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.youtube.com/@sprecher_pascal-krell" aria-label="YouTube Kanal" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.linkedin.com/in/pascal-krell-220454138/" aria-label="LinkedIn Profil" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>

      <nav class="pk-nav-col-1" aria-label="Leistungen">
        <h3 class="pk-nav-heading">Leistungen</h3>
        <ul class="pk-nav-list">
          <?php foreach ( PK_Custom_Footer::get_nav_links( $settings, 'leistungen_links' ) as $nav_item ) : ?>
            <?php
            $nav_title = isset( $nav_item['title'] ) ? $nav_item['title'] : '';
            $nav_url   = isset( $nav_item['url'] ) ? $nav_item['url'] : '';
            if ( '' === $nav_title || '' === $nav_url ) {
                continue;
            }
            $nav_classes = ! empty( $nav_item['marker'] ) ? 'pk-nav-link pk-nav-link-marker' : 'pk-nav-link';
            ?>
            <li><a class="<?php echo esc_attr( $nav_classes ); ?>" href="<?php echo esc_url( $nav_url ); ?>"><?php echo esc_html( $nav_title ); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <nav class="pk-nav-col-2" aria-label="Für Kunden">
        <h3 class="pk-nav-heading">Service & Extras</h3>
        <ul class="pk-nav-list">
          <?php foreach ( PK_Custom_Footer::get_nav_links( $settings, 'service_links' ) as $nav_item ) : ?>
            <?php
            $nav_title = isset( $nav_item['title'] ) ? $nav_item['title'] : '';
            $nav_url   = isset( $nav_item['url'] ) ? $nav_item['url'] : '';
            if ( '' === $nav_title || '' === $nav_url ) {
                continue;
            }
            $nav_classes = ! empty( $nav_item['marker'] ) ? 'pk-nav-link pk-nav-link-marker' : 'pk-nav-link';
            ?>
            <li><a class="<?php echo esc_attr( $nav_classes ); ?>" href="<?php echo esc_url( $nav_url ); ?>"><?php echo esc_html( $nav_title ); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div class="pk-newsletter-box">
        <h3>Sprecher-Insights & Updates</h3>
        <p>Abonniere gern meinen kostenlosen Newsletter für Neuigkeiten, Updates, neue Demos & Insights.</p>
        <div class="pk-fluentform-wrapper">
          <?php
          // Shortcodes in PHP templates werden nicht automatisch ausgeführt.
          // Deshalb wird Fluent Forms hier bewusst über do_shortcode() gerendert.
          echo do_shortcode( '[fluentform id="8"]' );
          ?>
        </div>
      </div>

      <address class="pk-dark-card" style="font-style: normal;">
        <div class="pk-live-status-wrapper">
          <div class="pk-live-status">
            <span class="pk-status-dot"></span>
            24h-Lieferung verfügbar
          </div>
        </div>

        <h3>Projekt starten?</h3>
        <p>Lass uns unverbindlich über Dein nächstes Audio-Projekt sprechen. Ich antworte in der Regel binnen 24 Stunden.</p>

        <a href="/kontakt" class="pk-btn-primary">
          Direkt anfragen
          <i class="fa-solid fa-arrow-right"></i>
        </a>

        <div class="pk-contact-row">
          <a href="mailto:kontakt@sprecher-pascal.de" class="pk-dark-contact">
            <i class="fa-regular fa-envelope"></i>
            kontakt@sprecher-pascal.de
          </a>
          <button class="pk-copy-btn" aria-label="E-Mail kopieren" data-copy="kontakt@sprecher-pascal.de" title="Kopieren">
            <i class="fa-regular fa-copy"></i>
            <span class="pk-copy-feedback">Kopiert!</span>
          </button>
        </div>

        <div class="pk-contact-row">
          <a href="tel:+491603248536" class="pk-dark-contact pk-phone-link">
            <span class="pk-phone-icon-wrap">
              <i class="fa-solid fa-phone pk-pi-static"></i>
              <i class="fa-solid fa-phone-volume pk-pi-hover"></i>
            </span>
            0160 - 32 48 536
          </a>
        </div>

        <div class="pk-contact-row">
          <a href="https://wa.me/491603248536" class="pk-dark-contact" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp"></i>
            WhatsApp Chat starten
          </a>
        </div>

        <div class="pk-card-trust pk-tooltip-wrap" data-tooltip="Auf Anfrage mit Aufpreis">
           <i class="fa-solid fa-bolt"></i>
           Expresslieferung möglich
        </div>
      </address>

    </div>
  </div>

  <div class="pk-footer-bottom">
    <div class="pk-container pk-bottom-grid">
      <div class="pk-bottom-copy">
        © <span id="pk-year-h">2026</span> Sprecher Pascal Krell - Alle Rechte vorbehalten.
        <span style="opacity: 0.5; margin: 0 8px;">|</span> Aufgenommen in Hamburg ⚓️
      </div>
      <div class="pk-bottom-right">
        <nav class="pk-legal-links" aria-label="Rechtliches">
          <a href="/impressum">Impressum</a>
          <a href="/datenschutz">Datenschutz</a>
          <a href="/cookie-richtlinie-eu">Cookie-Richtlinie (EU)</a>
        </nav>
        <button id="pk-btt-h" class="pk-btt" aria-label="Nach oben" title="Nach oben scrollen">
          <i class="fa-solid fa-chevron-up"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="pk-modal-overlay" id="pk-modal-werbespots" role="dialog" aria-modal="true" aria-labelledby="pk-modal-werbespots-title">
    <div class="pk-modal" role="document">
      <div class="pk-modal-header">
        <div>
          <h3 class="pk-modal-title" id="pk-modal-werbespots-title">Werbespots – Hörbeispiele</h3>
          <p class="pk-modal-sub">Kurz, knackig, aufmerksamkeitsstark – hier sind ein paar Demos.</p>
        </div>
        <button class="pk-modal-close" type="button" data-pk-close aria-label="Modal schließen">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="pk-modal-body">
        <div class="pk-audio-list">
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 01 – Modern / Energetisch</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/werbespot-01.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 02 – Seriös / Premium</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/werbespot-02.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 03 – Freundlich / Nahbar</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/werbespot-03.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="pk-modal-footer">
        <a href="/kontakt" class="pk-modal-cta">Direkt anfragen</a>
      </div>
    </div>
  </div>

  <div class="pk-modal-overlay" id="pk-modal-imagefilme" role="dialog" aria-modal="true" aria-labelledby="pk-modal-imagefilme-title">
    <div class="pk-modal" role="document">
      <div class="pk-modal-header">
        <div>
          <h3 class="pk-modal-title" id="pk-modal-imagefilme-title">Imagefilme – Hörbeispiele</h3>
          <p class="pk-modal-sub">Vertrauen & Storytelling – natürlich, hochwertig, souverän.</p>
        </div>
        <button class="pk-modal-close" type="button" data-pk-close aria-label="Modal schließen">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="pk-modal-body">
        <div class="pk-audio-list">
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 01 – Warm / Vertrauensvoll</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/imagefilm-01.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 02 – Clean / Corporate</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/imagefilm-02.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 03 – Emotional / Story</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/imagefilm-03.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="pk-modal-footer">
        <a href="/kontakt" class="pk-modal-cta">Direkt anfragen</a>
      </div>
    </div>
  </div>

  <div class="pk-modal-overlay" id="pk-modal-elearning" role="dialog" aria-modal="true" aria-labelledby="pk-modal-elearning-title">
    <div class="pk-modal" role="document">
      <div class="pk-modal-header">
        <div>
          <h3 class="pk-modal-title" id="pk-modal-elearning-title">E-Learning – Hörbeispiele</h3>
          <p class="pk-modal-sub">Klar, verständlich, angenehmes Tempo – ideal für Lerninhalte.</p>
        </div>
        <button class="pk-modal-close" type="button" data-pk-close aria-label="Modal schließen">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="pk-modal-body">
        <div class="pk-audio-list">
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 01 – Neutral / Didaktisch</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/elearning-01.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 02 – Motivierend / Friendly</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/elearning-02.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 03 – Präzise / Technisch</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/elearning-03.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="pk-modal-footer">
        <a href="/kontakt" class="pk-modal-cta">Direkt anfragen</a>
      </div>
    </div>
  </div>

  <div class="pk-modal-overlay" id="pk-modal-telefonansagen" role="dialog" aria-modal="true" aria-labelledby="pk-modal-telefonansagen-title">
    <div class="pk-modal" role="document">
      <div class="pk-modal-header">
        <div>
          <h3 class="pk-modal-title" id="pk-modal-telefonansagen-title">Telefonansagen – Hörbeispiele</h3>
          <p class="pk-modal-sub">Ansage, Warteschleife, IVR – professionell & markenkonform umgesetzt.</p>
        </div>
        <button class="pk-modal-close" type="button" data-pk-close aria-label="Modal schließen">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="pk-modal-body">
        <div class="pk-audio-list">
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 01 – Unternehmensansage</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/telefonansage-01.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 02 – Warteschleife / Info</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/telefonansage-02.mp3"></audio>
          </div>
          <div class="pk-audio-item">
            <div class="pk-audio-label"><span class="pk-audio-dot"></span> Demo 03 – IVR / Tastenmenü</div>
            <audio controls preload="none" src="/wp-content/uploads/demos/telefonansage-03.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="pk-modal-footer">
        <a href="/kontakt" class="pk-modal-cta">Direkt anfragen</a>
      </div>
    </div>
  </div>

</footer>
