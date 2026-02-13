{{-- JavaScript Logic --}}
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // --- Sticky Header Effect ---
    const header = document.querySelector('.header-sticky');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        header.classList.add('shadow-md');
      } else {
        header.classList.remove('shadow-md');
      }
    });

    // --- Search Overlay Logic ---
    const searchBtn = document.getElementById('search-btn');
    const searchOverlay = document.getElementById('search-overlay');
    const searchContainer = document.getElementById('search-container');
    const closeSearch = document.getElementById('close-search');

    function toggleSearch(show) {
      if (show) {
        searchOverlay.classList.remove('invisible', 'opacity-0');
        searchContainer.classList.remove('scale-95');
        searchContainer.classList.add('scale-100');
        setTimeout(() => searchOverlay.querySelector('input').focus(), 100);
      } else {
        searchOverlay.classList.add('invisible', 'opacity-0');
        searchContainer.classList.remove('scale-100');
        searchContainer.classList.add('scale-95');
      }
    }

    searchBtn?.addEventListener('click', () => toggleSearch(true));
    closeSearch?.addEventListener('click', () => toggleSearch(false));
    searchOverlay?.addEventListener('click', (e) => {
      if (e.target === searchOverlay) toggleSearch(false);
    });

    // --- Mobile Menu Logic ---
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const menuOverlay = document.getElementById('mobile-menu-overlay');
    const body = document.body;

    function toggleMenu(show) {
      if (show) {
        mobileMenu.classList.remove('translate-x-full');
        menuOverlay.classList.remove('hidden');
        body.style.overflow = 'hidden'; // Prevent background scrolling
      } else {
        mobileMenu.classList.add('translate-x-full');
        menuOverlay.classList.add('hidden');
        body.style.overflow = '';
      }
    }

    menuBtn?.addEventListener('click', () => toggleMenu(true));
    closeMenu?.addEventListener('click', () => toggleMenu(false));
    menuOverlay?.addEventListener('click', () => toggleMenu(false));

    // --- Mobile Accordion Dropdowns ---
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown-group button');
    mobileDropdowns.forEach(btn => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('i');

        content.classList.toggle('hidden');
        // Rotate icon logic
        if (content.classList.contains('hidden')) {
          icon.classList.remove('rotate-180');
        } else {
          icon.classList.add('rotate-180');
        }
      });
    });

    // --- Keyboard Accessibility ---
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        toggleSearch(false);
        toggleMenu(false);
      }
    });
  });
</script>
