  <section class="bg-white">
    <div class="max-w-5xl mx-auto py-20">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-20 items-center">
        <div class="rounded-md overflow-hidden">
          <img src="{{ $image }}" alt="" class="w-full">
        </div>

        <div>
          <h1 class="font-title text-5xl mb-10">Sambutan Ketua <br> Program Studi</h1>
          {{ $slot }}

          <p class="text-base font-semibold mt-5">{{ $name }}</p>
        </div>
      </div>
    </div>
  </section>
