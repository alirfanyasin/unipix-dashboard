<section class="bg-white">
  <div class="section-container">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="relative">
        <div class="flex justify-center items-center gap-3">
          <div class="">
            <img src="{{ $img1 }}" class="w-full rounded shadow-lg" />
          </div>
          <div class="">
            <img src="{{ $img2 }}" class="w-full rounded shadow-lg" />
          </div>
        </div>

        <div
          class="absolute w-48 h-48 rounded-full bg-red-800 flex items-center border border-white p-5 justify-center text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
          <svg class="absolute w-full h-full animate-spin [animation-duration:10s]" viewBox="0 0 100 100">
            <defs>
              <path id="circlePath" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0" />
            </defs>

            <text {{ $attributes->merge(['class' => 'tracking-widest fill-white']) }}>
              <textPath href="#circlePath">
                {{ $department }} • Akreditasi Baik Sekali •
              </textPath>
            </text>
          </svg>
          <div class="relative z-10">
            ▶
          </div>

        </div>
      </div>
      <div>
        <p class="text-red-800 font-medium text-xl mb-2">
          {{ $department }}
        </p>
        <h2 class="text-5xl font-title mb-6">
          Tentang Kami
        </h2>
        {{ $slot }}
        <div class="grid grid-cols-2 gap-4">
          <a href="#"
            class="border border-red-800 text-red-800 p-4 flex items-center gap-3 hover:bg-red-800 hover:text-white transition">
            <iconify-icon icon="mdi:book-education-outline" width="40" height="40"></iconify-icon>
            <p>Struktur Kurikulum</p>
          </a>
          <a href="#"
            class="border border-red-800 text-red-800 p-4 flex items-center gap-3 hover:bg-red-800 hover:text-white transition">
            <iconify-icon icon="hugeicons:graduation-scroll" width="40" height="40"></iconify-icon>
            <p>Prospek Karir</p>
          </a>
          <a href="#"
            class="border border-red-800 text-red-800 p-4 flex items-center gap-3 hover:bg-red-800 hover:text-white transition">
            <iconify-icon icon="file-icons:jsx-atom" width="40" height="40"></iconify-icon>
            <p>Riset Unggulan</p>
          </a>
          <a href="#"
            class="border border-red-800 text-red-800 p-4 flex items-center gap-3 hover:bg-red-800 hover:text-white transition">
            <iconify-icon icon="fluent:hat-graduation-sparkle-20-regular" width="40" height="40"></iconify-icon>

            <p>Kehidupan Kampus</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
