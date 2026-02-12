{{-- Sidebar --}}
<aside id="sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0 bg-white shadow-lg">
  <div class="h-full px-4 py-6 overflow-y-auto">
    {{-- Logo --}}
    <div class="flex items-center mb-8 px-2">
      <div class="px-10">
        <img src="{{ asset('assets/img/logo-telkom-university.png') }}" alt="Logo" class="w-100">
      </div>
    </div>
    {{-- Menu Navigation --}}
    <ul class="space-y-2">
      <li>
        <a href="{{ route('dashboard') }}"
          class="menu-item flex items-center p-3 text-white rounded-lg bg-red-800 hover:bg-red-800 hover:text-white transition-colors">
          <iconify-icon icon="ic:outline-dashboard" width="24" height="24"></iconify-icon>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>

      <li>
        <button onclick="toggleDropdown(1)"
          class="menu-item flex items-center justify-between w-full p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
          <div class="flex items-center">
            <iconify-icon icon="iconoir:multiple-pages" width="24" height="24"></iconify-icon>
            <span class="ml-3">Pages</span>
          </div>
          <iconify-icon id="dropdownIcon1" class="text-sm transition-transform" icon="iconamoon:arrow-up-2"
            width="24" height="24"></iconify-icon>
        </button>

        <ul id="dropdownSubmenu1" class="hidden ml-8 mt-2 space-y-2">
          <li>
            <a href="#"
              class="submenu-item flex items-center p-2 text-gray-600 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
              <span class="ml-2">Add Pages</span>
            </a>
          </li>
          <li>
            <a href="#"
              class="submenu-item flex items-center p-2 text-gray-600 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
              <span class="ml-2">All Pages</span>
            </a>
          </li>
        </ul>
      </li>


      <li>
        <button onclick="toggleDropdown(2)"
          class="menu-item flex items-center justify-between w-full p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">

          <div class="flex items-center">
            <iconify-icon icon="iconoir:post" width="24" height="24"></iconify-icon>
            <span class="ml-3">Posts</span>
          </div>

          <iconify-icon id="dropdownIcon2" class="text-sm transition-transform" icon="iconamoon:arrow-up-2"
            width="24" height="24"></iconify-icon>
        </button>

        <ul id="dropdownSubmenu2" class="hidden ml-8 mt-2 space-y-2">
          <li>
            <a href="#"
              class="submenu-item flex items-center p-2 text-gray-600 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
              <span class="ml-2">Add Posts</span>
            </a>
          </li>
          <li>
            <a href="#"
              class="submenu-item flex items-center p-2 text-gray-600 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
              <span class="ml-2">All Posts</span>
            </a>
          </li>
          <li>
            <a href="{{ route('posts.categories') }}"
              class="submenu-item flex items-center p-2 text-gray-600 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
              <span class="ml-2">Categories</span>
            </a>
          </li>
        </ul>
      </li>


      <li>
        <a href="#"
          class="menu-item flex items-center p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
          <iconify-icon icon="la:chalkboard-teacher" width="24" height="24"></iconify-icon>
          <span class="ml-3">Professor</span>
        </a>
      </li>

      <li>
        <a href="#"
          class="menu-item flex items-center p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
          <iconify-icon icon="solar:user-linear" width="24" height="24"></iconify-icon>
          <span class="ml-3">Users</span>
        </a>
      </li>
      <li>
        <a href="#" onclick="showContent('settings')"
          class="menu-item flex items-center p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
          <iconify-icon icon="uil:setting" width="24" height="24"></iconify-icon>
          <span class="ml-3">Settings</span>
        </a>
      </li>

      <li>
        <a href="#"
          class="menu-item flex items-center p-3 text-gray-700 rounded-lg hover:bg-red-800 hover:text-white transition-colors">
          <iconify-icon icon="uil:setting" width="24" height="24"></iconify-icon>
          <span class="ml-3">Component</span>
        </a>
      </li>
    </ul>
  </div>
</aside>


<!-- Overlay untuk mobile -->
<div id="overlay" class="fixed inset-0 z-30 bg-black bg-opacity-50 hidden lg:hidden" onclick="toggleSidebar()">
</div>
