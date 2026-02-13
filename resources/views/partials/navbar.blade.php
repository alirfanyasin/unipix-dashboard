{{-- Navbar start --}}
<header class="header-sticky bg-white fixed top-0 left-0 right-0 z-50 font-sans border-b border-gray-100">
  <div class="container mx-auto px-4 lg:px-0 max-w-7xl">
    <div class="flex items-center justify-between h-24">
      <div class="header-logo shrink-0">
        <a href="index.php" class="block">
          <img src="{{ asset('assets/img/logo-telkom-university.png') }}" alt="Telkom University Surabaya"
            class="h-12 w-auto">
        </a>
      </div>

      <nav class="hidden lg:flex items-center gap-8 ml-auto mr-8">
        <a href="#"
          class="text-gray-800 hover:text-red-800 font-medium transition-colors duration-200 text-[15px]">
          Beranda
        </a>

        <div class="group relative h-full flex items-center">
          <button
            class="flex items-center gap-1 text-gray-800 hover:text-red-800 font-medium transition-colors duration-200 text-[15px]">
            Tentang Kami
            <span class="text-red-800 font-bold text-lg leading-none mb-0.5">+</span>
          </button>

          <div
            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-md opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-in-out pt-2">
            <div class="border-t-4 border-red-800 bg-white py-2">
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Profil
                Program Studi</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Staf
                Pengajar</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Prestasi
                Dan Penghargaan</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Kehidupan
                Kampus</a>
            </div>
          </div>
        </div>

        <div class="group relative h-full flex items-center">
          <button
            class="flex items-center gap-1 text-gray-800 hover:text-red-800 font-medium transition-colors duration-200 text-[15px]">
            Akademik
            <span class="text-red-800 font-bold text-lg leading-none mb-0.5">+</span>
          </button>
          <div
            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-md opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-in-out pt-2">
            <div class="border-t-4 border-red-800 bg-white py-2">
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Program
                Sarjana</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Program
                Magister</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Kurikulum</a>
            </div>
          </div>
        </div>

        <div class="group relative h-full flex items-center">
          <button
            class="flex items-center gap-1 text-gray-800 hover:text-red-800 font-medium transition-colors duration-200 text-[15px]">
            Riset
            <span class="text-red-800 font-bold text-lg leading-none mb-0.5">+</span>
          </button>
          <div
            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-md opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-in-out pt-2">
            <div class="border-t-4 border-red-800 bg-white py-2">
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Pusat
                Riset</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Publikasi</a>
            </div>
          </div>
        </div>

        <div class="group relative h-full flex items-center">
          <button
            class="flex items-center gap-1 text-gray-800 hover:text-red-800 font-medium transition-colors duration-200 text-[15px]">
            Publikasi
            <span class="text-red-800 font-bold text-lg leading-none mb-0.5">+</span>
          </button>
          <div
            class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-b-md opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-in-out pt-2">
            <div class="border-t-4 border-red-800 bg-white py-2">
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Berita</a>
              <a href="#"
                class="block px-6 py-2.5 text-sm text-gray-600 hover:text-red-800 hover:pl-7 transition-all">Event</a>
            </div>
          </div>
        </div>

      </nav>

      <div class="flex items-center">

        <button id="search-btn"
          class="hidden lg:flex items-center justify-center text-gray-600 hover:text-red-800 transition-colors duration-200 hover:cursor-pointer">
          <iconify-icon icon="mingcute:search-line" width="24" height="24"></iconify-icon>
        </button>

        <div class="hidden lg:block h-6 w-px bg-gray-300 mx-6"></div>

        <a href="#"
          class="hidden lg:inline-block px-7 py-3 bg-red-800 hover:bg-red-900 text-white font-semibold text-sm rounded transition-all duration-200 shadow-sm hover:shadow-md">
          Daftar Sekarang
        </a>

        <button id="menu-btn" class="lg:hidden flex items-center justify-center w-10 h-10 text-gray-700 ml-4">
          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>

      </div>

    </div>
  </div>
</header>
{{-- Navbar end --}}

{{-- Search Overlay --}}
<div id="search-overlay"
  class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[60] opacity-0 invisible transition-all duration-300 flex items-center justify-center">
  <div
    class="bg-white w-full max-w-2xl mx-4 rounded-lg shadow-2xl p-6 transform scale-95 transition-transform duration-300"
    id="search-container">
    <div class="flex items-center justify-between mb-4">
      <h3 class="text-xl font-bold text-gray-800">Pencarian</h3>
      <button id="close-search" class="text-gray-400 hover:text-red-800 transition-colors">
        <i class="fa-solid fa-times text-xl"></i>
      </button>
    </div>
    <form class="relative">
      <input type="text" placeholder="Apa yang ingin Anda cari?"
        class="w-full pl-4 pr-12 py-3 border-b-2 border-gray-200 focus:border-red-800 focus:outline-none text-lg bg-transparent transition-colors">
      <button type="submit"
        class="absolute right-0 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-red-800">
        <i class="fa-solid fa-magnifying-glass text-xl"></i>
      </button>
    </form>
  </div>
</div>

{{-- Mobile Menu --}}
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-[55] hidden transition-opacity"></div>
<div id="mobile-menu"
  class="fixed top-0 right-0 h-full w-[85%] max-w-sm bg-white shadow-2xl z-[60] transform translate-x-full transition-transform duration-300 overflow-y-auto">
  <div class="p-6">
    <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-100">
      <span class="font-bold text-lg text-gray-800">Menu</span>
      <button id="close-menu" class="text-gray-500 hover:text-red-800">
        <i class="fa-solid fa-times text-2xl"></i>
      </button>
    </div>

    <nav class="space-y-1">
      <a href="#"
        class="block px-4 py-3 text-gray-700 hover:text-red-800 hover:bg-red-50 rounded-lg transition-colors font-medium">
        Beranda
      </a>

      <div class="mobile-dropdown-group">
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:text-red-800 hover:bg-red-50 rounded-lg transition-colors font-medium group">
          <span>Tentang Kami</span>
          <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 group-hover:text-red-800"></i>
        </button>
        <div class="hidden pl-4 pr-2 py-2 space-y-1 bg-gray-50 rounded-lg mt-1 mx-2">
          <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-red-800">Profil Program
            Studi</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-red-800">Staf Pengajar</a>
        </div>
      </div>

      <div class="mobile-dropdown-group">
        <button
          class="w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:text-red-800 hover:bg-red-50 rounded-lg transition-colors font-medium group">
          <span>Akademik</span>
          <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 group-hover:text-red-800"></i>
        </button>
        <div class="hidden pl-4 pr-2 py-2 space-y-1 bg-gray-50 rounded-lg mt-1 mx-2">
          <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-red-800">Program Sarjana</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-red-800">Kalender Akademik</a>
        </div>
      </div>

    </nav>

    <div class="mt-8 pt-6 border-t border-gray-100">
      <a href="#"
        class="block w-full text-center px-6 py-3 bg-red-800 hover:bg-red-900 text-white font-bold rounded-lg transition-colors shadow-md">
        Daftar Sekarang
      </a>
    </div>
  </div>
</div>
