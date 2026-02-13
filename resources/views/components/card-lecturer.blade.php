<div class="border border-gray-200 hover:border-red-800 p-3 grid grid-cols-3 gap-7">
  <div class="w-full h-56 shrink-0">
    <img src="{{ $image }}" alt="" class="w-full h-full object-cover">
  </div>
  <div class="col-span-2">
    <h3 class="font-title text-2xl">{{ $name }}</h3>
    <p class="text-gray-500 mb-3">{{ $position }}</p>
    <p class="flex items-center gap-2 text-red-800 mb-2">
      <iconify-icon icon="material-symbols:mail-outline-rounded" width="18" height="18"></iconify-icon>
      <span>{{ $email }}</span>
    </p>
    <p class="pl-3 border-l border-l-red-800 text-gray-500 mb-4">
      {{ $expertise }}
    </p>
    <a href=""
      class="inline-block text-red-800 px-7 py-2 border border-red-800 hover:bg-red-800 hover:text-white">
      Lihat Selengkapnya
    </a>
  </div>
</div>
