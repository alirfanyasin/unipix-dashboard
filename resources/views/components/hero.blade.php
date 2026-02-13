 {{-- Hero section start (Diperbaiki sesuai teks Gambar) --}}
 <section class="relative pt-24"> {{-- Added padding top to account for fixed header --}}
   <div class="w-full h-120 lg:h-150 2xl:h-170 overflow-hidden relative">
     <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
       <source src="{{ $video }}" type="video/mp4">
     </video>
     {{-- Overlay gradient agar teks lebih terbaca --}}
     <div class="absolute inset-0 bg-black/40"></div>

     <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
       <h1 class="text-3xl md:text-5xl font-bold mb-4 drop-shadow-lg tracking-wide">{{ $slot }}</h1>
       <p class="text-xl md:text-3xl font-light tracking-wide max-w-3xl drop-shadow-md">
         Telkom University (Surabaya)
       </p>
     </div>
   </div>
 </section>
 {{-- Hero section end --}}
