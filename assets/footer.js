(function() {
function pkFooterInit() {

  const sets = document.querySelectorAll('.pk-dynamic-set');
  if (sets.length > 0) {
    const randomIndex = Math.floor(Math.random() * sets.length);
    const activeSet = sets[randomIndex];
    activeSet.classList.add('is-visible');
    if(activeSet.id === 'pk-set-2') { loadLatestPosts(); }
  }

  async function loadLatestPosts() {
    const slider = document.getElementById('pk-blog-slider-container');
    if(!slider) return;

    try {
      const response = await fetch('/wp-json/wp/v2/posts?_embed&per_page=6');
      if (!response.ok) throw new Error('Netzwerkfehler');
      const posts = await response.json();

      slider.innerHTML = '';

      posts.forEach(post => {
        let imageUrl = '';
        if (post._embedded && post._embedded['wp:featuredmedia']) {
          imageUrl = post._embedded['wp:featuredmedia'][0].source_url;
        }

        let catName = 'Blog';
        if (post._embedded && post._embedded['wp:term']) {
          const categories = post._embedded['wp:term'][0];
          if(categories && categories.length > 0) catName = categories[0].name;
        }

        const dateObj = new Date(post.date);
        const formattedDate = dateObj.toLocaleDateString('de-DE', {day: '2-digit', month: 'short', year: 'numeric'});

        const cardHtml = `
          <a href="${post.link}" class="pk-blog-card">
            <div class="pk-blog-img" style="background-image: url('${imageUrl}')"></div>
            <div class="pk-blog-inner">
              <div class="pk-blog-meta">
                <span class="pk-blog-cat">${catName}</span>
                <span class="pk-blog-date"><i class="fa-regular fa-calendar"></i> ${formattedDate}</span>
              </div>
              <h4 class="pk-blog-title">${post.title.rendered}</h4>
            </div>
          </a>
        `;
        slider.insertAdjacentHTML('beforeend', cardHtml);
      });

      const btnPrev = document.getElementById('pk-blog-prev');
      const btnNext = document.getElementById('pk-blog-next');
      if(btnPrev && btnNext) {
        btnNext.addEventListener('click', () => slider.scrollBy({ left: 300, behavior: 'smooth' }));
        btnPrev.addEventListener('click', () => slider.scrollBy({ left: -300, behavior: 'smooth' }));
      }

    } catch (error) {
      slider.innerHTML = '<div style="color:var(--pk-text-muted-on-dark); font-size: 0.9rem; padding: 20px;">Blogbeiträge konnten nicht geladen werden.</div>';
    }
  }

  const yearEl = document.getElementById("pk-year-h");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const bttBtn = document.getElementById("pk-btt-h");
  if (bttBtn) {
    bttBtn.addEventListener("click", function() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  const copyBtns = document.querySelectorAll('.pk-copy-btn');
  copyBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const textToCopy = this.getAttribute('data-copy');
      navigator.clipboard.writeText(textToCopy).then(() => {
        this.classList.add('copied');
        setTimeout(() => { this.classList.remove('copied'); }, 2000);
      });
    });
  });

  /* =========================================
     ✅ MODAL LOGIK: Open/Close + ESC + Stop Audio
     ========================================= */
  const modalTriggers = document.querySelectorAll('.pk-modal-trigger');
  const overlays = document.querySelectorAll('.pk-modal-overlay');
  let lastActiveEl = null;

  function closeAllModals() {
    overlays.forEach(ov => {
      ov.classList.remove('is-open');

      // Audio stoppen / zurücksetzen
      const audios = ov.querySelectorAll('audio');
      audios.forEach(a => { try { a.pause(); a.currentTime = 0; } catch(e){} });
    });

    document.documentElement.classList.remove('pk-no-scroll');
    document.body.classList.remove('pk-no-scroll');

    if (lastActiveEl && typeof lastActiveEl.focus === 'function') {
      lastActiveEl.focus();
    }
    lastActiveEl = null;
  }

  function openModalById(id) {
    const overlay = document.getElementById(id);
    if (!overlay) return;

    closeAllModals();
    lastActiveEl = document.activeElement;

    overlay.classList.add('is-open');
    document.documentElement.classList.add('pk-no-scroll');
    document.body.classList.add('pk-no-scroll');

    // Fokus auf Close-Button (sauberer Einstieg)
    const closeBtn = overlay.querySelector('[data-pk-close]');
    if (closeBtn) closeBtn.focus();
  }

  modalTriggers.forEach(tr => {
    tr.addEventListener('click', (e) => {
      const id = tr.getAttribute('data-pk-modal');
      if (!id) return;
      e.preventDefault();
      openModalById(id);
    });
  });

  // Close via Button
  document.addEventListener('click', (e) => {
    const closeBtn = e.target.closest('[data-pk-close]');
    if (closeBtn) {
      e.preventDefault();
      closeAllModals();
      return;
    }

    // Close via Overlay-Click
    const overlay = e.target.classList && e.target.classList.contains('pk-modal-overlay') ? e.target : null;
    if (overlay) {
      closeAllModals();
    }
  });

  // ESC schließt
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      const anyOpen = document.querySelector('.pk-modal-overlay.is-open');
      if (anyOpen) closeAllModals();
    }
  });


}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", pkFooterInit);
} else {
  pkFooterInit();
}
})();
