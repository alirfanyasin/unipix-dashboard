<section class="relative pt-24">
  <div class="w-full h-52 lg:h-80 2xl:h-96 overflow-hidden relative">
    <img src="{{ asset('assets/video/hero-img.jpeg') }}" class="w-full h-full object-cover object-center">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
      <h1 class="text-3xl md:text-5xl mb-4  tracking-wide font-title">
        {{ $slot }}
      </h1>
      <p class="text-lg tracking-wide">
        Home > {{ $slot }}
      </p>
    </div>
  </div>
</section>
