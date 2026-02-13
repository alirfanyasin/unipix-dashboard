@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero-sub>{{ $name }}</x-hero-sub>

  <section class="bg-white">
    <div class="section-container">
      <div class="grid grid-cols-1 md:grid-cols-3 md:gap-10">
        <div class="mb-6 md:mb-0">
          <img src="{{ asset('assets/img/dosen-1.jpg') }}" alt="" class="w-full object-cover">
        </div>

        <div class="col-span-2">
          <p class="text-gray-500">NJFA</p>
          <h1 class="text-4xl font-title mb-5">Dr. Dyah Putri Rahmawati, S.Stat.</h1>
          <p class="text-gray-500">Statistical modeling, nonparametrik regression</p>
          <div>
            <div class="my-5 flex items-center gap-7">
              <div class="w-12 h-12 border border-gray-300 flex items-center justify-center">
                <iconify-icon icon="mdi:tag-outline" width="24" height="24" class="text-gray-500"></iconify-icon>
              </div>
              <div class="">
                <h5 class="font-semibold">Nomor Induk Pegawai (NIP)</h5>
                <p class="text-gray-500">23960023</p>
              </div>
            </div>

            <div class="my-5 flex items-center gap-7">
              <div class="w-12 h-12 border border-gray-300 flex items-center justify-center">
                <iconify-icon icon="mdi:tag-outline" width="24" height="24" class="text-gray-500"></iconify-icon>
              </div>
              <div class="">
                <h5 class="font-semibold">Nomor Induk Dosen Nasional (NIDN)</h5>
                <p class="text-gray-500">0719039601</p>
              </div>
            </div>

            <div class="my-5 flex items-center gap-7">
              <div class="w-12 h-12 border border-gray-300 flex items-center justify-center">
                <iconify-icon icon="mdi:tag-outline" width="24" height="24" class="text-gray-500"></iconify-icon>
              </div>
              <div class="">
                <h5 class="font-semibold">Kode Dosen</h5>
                <p class="text-gray-500">DPH</p>
              </div>
            </div>


            <div class="my-5 flex items-center gap-7">
              <div class="w-12 h-12 border border-gray-300 flex items-center justify-center">
                <iconify-icon icon="material-symbols:mail-outline-rounded" width="24" height="24"
                  class="text-gray-500"></iconify-icon>
              </div>
              <div class="">
                <h5 class="font-semibold">Email Address</h5>
                <p class="text-gray-500">dyahputri@telkomuniversity.ac.id</p>
              </div>
            </div>

            <div class="my-5 flex items-center gap-7">
              <div class="w-12 h-12 border border-gray-300 flex items-center justify-center">
                <iconify-icon icon="mingcute:location-line" width="24" height="24"
                  class="text-gray-500"></iconify-icon>
              </div>
              <div class="">
                <h5 class="font-semibold">Location</h5>
                <p class="text-gray-500">S1 Informatika - Telkom University Surabaya</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bg-white">
    <div class="section-container">
      <h1 class="uppercase font-title text-4xl mb-5">AREAS OF EXPERTISE</h1>
      <p class="text-gray-500 text-xl">Statistical modeling, nonparametrik regression</p>
    </div>
  </section>


  <div class="max-w-7xl mx-auto">
    <hr class="text-gray-300">
  </div>

  <section class="bg-white">
    <div class="section-container">
      <h1 class="uppercase font-title text-4xl mb-5">CERTIFICATIONS</h1>
      <p class="text-gray-500 text-xl">-</p>
    </div>
  </section>


  <div class="max-w-7xl mx-auto">
    <hr class="text-gray-300">
  </div>

  <section class="bg-white pb-32" x-data="{ tab: 1 }">
    <div class="section-container">
      <h1 class="uppercase font-title text-4xl mb-5">PUBLICATIONS</h1>

      <div class="flex justify-center gap-4 flex-wrap">
        <button @click="tab=1" :class="tab === 1 ? 'bg-red-800 text-white' : 'bg-gray-200 text-gray-700'"
          class="px-8 py-3 transition hover:bg-red-800 hover:text-white hover:cursor-pointer">
          Penelitian
        </button>
        <button @click="tab=2" :class="tab === 2 ? 'bg-red-800 text-white' : 'bg-gray-200 text-gray-700'"
          class="px-8 py-3 transition hover:bg-red-800 hover:text-white hover:cursor-pointer">
          Pengabdian
        </button>
        <button @click="tab=3" :class="tab === 3 ? 'bg-red-800 text-white' : 'bg-gray-200 text-gray-700'"
          class="px-8 py-3 transition hover:bg-red-800 hover:text-white hover:cursor-pointer">
          Karya
        </button>
        <button @click="tab=4" :class="tab === 4 ? 'bg-red-800 text-white' : 'bg-gray-200 text-gray-700'"
          class="px-8 py-3 transition hover:bg-red-800 hover:text-white hover:cursor-pointer">
          Paten/HKI
        </button>
      </div>

      <div class="mt-12">
        <div x-show="tab===1">
          <div class="mt-10 overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm">
              <thead class="bg-red-800 text-white">
                <tr>
                  <th class="border px-4 py-3 text-left w-20">No</th>
                  <th class="border px-4 py-3 text-left">Judul Penelitian</th>
                  <th class="border px-4 py-3 text-left w-28">Tahun</th>
                </tr>
              </thead>

              <tbody class="text-gray-600">
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">1</td>
                  <td class="border px-4 py-3">
                    IMPLEMENTASI PLTS DI SEKOLAH MENENGAH PERTAMA DI KABUPATEN PUNCAK JAYA, PROVINSI PAPUA TENGAH
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">2</td>
                  <td class="border px-4 py-3">
                    Implementasi PLTS di Sekolah Menengah Pertama di Kabupaten Puncak Jaya, Provinsi Papua Tengah
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div x-show="tab===2">
          <div class="mt-10 overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm">
              <thead class="bg-red-800 text-white">
                <tr>
                  <th class="border px-4 py-3 text-left w-20">No</th>
                  <th class="border px-4 py-3 text-left">Judul Pengabdian Masyarakat</th>
                  <th class="border px-4 py-3 text-left w-28">Tahun</th>
                </tr>
              </thead>

              <tbody class="text-gray-600">
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">1</td>
                  <td class="border px-4 py-3">
                    IMPLEMENTASI PLTS DI SEKOLAH MENENGAH PERTAMA DI KABUPATEN PUNCAK JAYA, PROVINSI PAPUA TENGAH
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">2</td>
                  <td class="border px-4 py-3">
                    Implementasi PLTS di Sekolah Menengah Pertama di Kabupaten Puncak Jaya, Provinsi Papua Tengah
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div x-show="tab===3">
          <div class="mt-10 overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm">
              <thead class="bg-red-800 text-white">
                <tr>
                  <th class="border px-4 py-3 text-left w-20">No</th>
                  <th class="border px-4 py-3 text-left">Judul Karya</th>
                  <th class="border px-4 py-3 text-left">Jenis Karya</th>
                  <th class="border px-4 py-3 text-left w-28">Tahun</th>
                </tr>
              </thead>

              <tbody class="text-gray-600">
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">1</td>
                  <td class="border px-4 py-3">
                    IMPLEMENTASI PLTS DI SEKOLAH MENENGAH PERTAMA DI KABUPATEN PUNCAK JAYA, PROVINSI PAPUA TENGAH
                  </td>
                  <td class="border px-4 py-3">
                    Jurnal nasional terakreditasi
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">2</td>
                  <td class="border px-4 py-3">
                    Implementasi PLTS di Sekolah Menengah Pertama di Kabupaten Puncak Jaya, Provinsi Papua Tengah
                  </td>
                  <td class="border px-4 py-3">
                    Jurnal nasional terakreditasi
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div x-show="tab===4">
          <div class="mt-10 overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm">
              <thead class="bg-red-800 text-white">
                <tr>
                  <th class="border px-4 py-3 text-left w-20">No</th>
                  <th class="border px-4 py-3 text-left">Judul Karya</th>
                  <th class="border px-4 py-3 text-left">Jenis Karya</th>
                  <th class="border px-4 py-3 text-left w-28">Tahun</th>
                </tr>
              </thead>

              <tbody class="text-gray-600">
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">1</td>
                  <td class="border px-4 py-3">
                    IMPLEMENTASI PLTS DI SEKOLAH MENENGAH PERTAMA DI KABUPATEN PUNCAK JAYA, PROVINSI PAPUA TENGAH
                  </td>
                  <td class="border px-4 py-3">
                    Jurnal nasional terakreditasi
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="border px-4 py-3 text-center">2</td>
                  <td class="border px-4 py-3">
                    Implementasi PLTS di Sekolah Menengah Pertama di Kabupaten Puncak Jaya, Provinsi Papua Tengah
                  </td>
                  <td class="border px-4 py-3">
                    Jurnal nasional terakreditasi
                  </td>
                  <td class="border px-4 py-3">2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('js')
  <script src="//unpkg.com/alpinejs" defer></script>
@endpush
