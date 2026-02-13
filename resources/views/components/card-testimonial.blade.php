<div class="p-7 bg-white">
  <div class="text-red-800 mb-5">
    <iconify-icon icon="mingcute:star-fill" width="20" height="20"></iconify-icon>
    <iconify-icon icon="mingcute:star-fill" width="20" height="20"></iconify-icon>
    <iconify-icon icon="mingcute:star-fill" width="20" height="20"></iconify-icon>
    <iconify-icon icon="mingcute:star-fill" width="20" height="20"></iconify-icon>
    <iconify-icon icon="mingcute:star-line" width="20" height="20"></iconify-icon>
  </div>
  <p class="text-gray-500">{{ $slot }}</p>
  <div class="mt-10 flex items-center justify-between">
    <div class="flex items-center gap-5">
      <div class="w-10 h-10 rounded-full overflow-hidden">
        <img src="{{ $image }}" alt="" class="w-full">
      </div>
      <div>
        <h5 class="font-title">{{ $name }}</h5>
        <p class="text-sm">Mahasiswa {{ $batch }}</p>
      </div>
    </div>
    <iconify-icon icon="si:quote-line" width="60" height="60" class="text-red-800"></iconify-icon>
  </div>
</div>
