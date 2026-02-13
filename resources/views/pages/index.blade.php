@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero video="{{ asset('assets/video/video-1.mp4') }}">
    S1 Informatika
  </x-hero>


  <x-about-section :img1="asset('assets/img/img-1.jpg')" :img2="asset('assets/img/img-2.jpg')" class="text-[10.5px]" department="S1 Informatika">
    <p class="text-gray-500 mb-4">
      Program Studi Informatika merupakan bidang studi yang memfokuskan pada pengembangan dan penerapan teknologi
      informasi serta komputasi. Program ini mencakup berbagai disiplin ilmu, seperti pemrograman, algoritma, basis
      data, jaringan komputer, kecerdasan buatan, dan sistem informasi.
    </p>
    <p class="text-gray-500 mb-8">
      Di era digital saat ini, peran lulusan Informatika sangat penting dalam mendorong inovasi dan efisiensi
      melalui teknologi. Mereka tidak hanya bertugas untuk menciptakan sistem yang efisien dan efektif, tetapi juga
      harus mampu beradaptasi dengan perkembangan teknologi yang cepat dan terus berubah. Program Studi Informatika
      menjadi landasan bagi mereka yang ingin berkontribusi dalam transformasi digital dan menjadi bagian dari
      solusi teknologi masa depan.
    </p>
  </x-about-section>


  <section class="bg-white">
    <div class="section-container">
      <div class="grid md:grid-cols-3">
        <div class="md:pr-20 md:border-r border-gray-300">
          <h2 class="text-5xl font-title text-red-800 mb-6 leading-tight">
            Akreditasi Baik Sekali
          </h2>
          <p class="text-gray-800">
            Terakreditasi <strong>Baik Sekali</strong> oleh LAM INFOKOM
            dengan nomor
            <a href="https://telkomuniversityofficial-my.sharepoint.com/personal/bifsby_telkomuniversity_ac_id/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fbifsby%5Ftelkomuniversity%5Fac%5Fid%2FDocuments%2Fakreditasi%20informatika%20baik%20sekali%2Ejpeg&parent=%2Fpersonal%2Fbifsby%5Ftelkomuniversity%5Fac%5Fid%2FDocuments&ga=1"
              class="text-red-800" target="_blank">
              011/SK/LAM-INFOKOM/Ak.PNB/S/V/2024
            </a>
          </p>
        </div>
        <div class="md:px-20 md:border-r border-gray-300 mt-10 md:mt-0">
          <h3 class="text-5xl font-title text-red-800 mb-4">
            518
          </h3>
          <p class="text-gray-800">
            Mahasiswa dan Alumni dari seluruh penjuru Indonesia
          </p>
        </div>
        <div class="md:pl-20 mt-10 md:mt-0">
          <h3 class="text-5xl font-title text-red-800 mb-4">
            158
          </h3>
          <p class="text-gray-800">
            Publikasi, Penelitian, Pengabdian Masyarakat, dan HKI
          </p>
        </div>
      </div>
    </div>
  </section>


  <x-kaprodi-section name="Rizky Fenaldo Maulana, S.Kom., M.Kom." :image="asset('assets/img/kaprodi-img.jpg')">
    <p class="text-gray-500">Selamat datang di Program Studi Sarjana Informatika, Program Studi Sarjana
      Informatika
      memiliki tiga kelompok keahlian yaitu tiga kelompok keahlian, yaitu: Data Sience and Intelligent System
      (DSIS), Communication and Information, Technology Infrastructure (CITI) dan Software Engineering and
      Algorithm
      (SEAL). Profil lulusan utama mencakup AI Engineer, IT Consultant, System Analyst, Programmer, Network
      Engineer.</p>
  </x-kaprodi-section>



  <section class="bg-red-800">
    <div class="section-container">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-20">
        <div class="text-white">
          <h1 class="font-title text-5xl uppercase mb-5">Apa Kata Mereka</h1>
          <p>Dengarkan opini mahasiswa dan alumni mengenai pengalaman mereka di program studi S1 Informatika Telkom
            University Kampus Surabaya</p>

          <div class="flex items-center gap-3 mt-5">
            <button
              class="w-10 h-10 rounded-full border boredr-white flex items-center justify-center hover:cursor-pointer hover:bg-white hover:text-red-800 text-white">
              <iconify-icon icon="oui:arrow-left" width="20" height="20"></iconify-icon>
            </button>
            <button
              class="w-10 h-10 rounded-full border boredr-white flex items-center justify-center hover:cursor-pointer hover:bg-white hover:text-red-800 text-white">
              <iconify-icon icon="oui:arrow-right" width="20" height="20"></iconify-icon>
            </button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 col-span-2">
          <x-card-testimonial name="Ivan Sholana" batch="2021" :image="asset('assets/img/kaprodi-img.jpg')">
            Selama menjalani kuliah di prodi ini,
            saya merasa sangat diberkahi dengan
            kesempatan untuk mengasah
            kemampuan dan kemandirian saya
            dalam berkembang di segala kondisi
            yang ada.
          </x-card-testimonial>
          <x-card-testimonial name="Ivan Sholana" batch="2021" :image="asset('assets/img/kaprodi-img.jpg')">
            Selama menjalani kuliah di prodi ini,
            saya merasa sangat diberkahi dengan
            kesempatan untuk mengasah
            kemampuan dan kemandirian saya
            dalam berkembang di segala kondisi
            yang ada.
          </x-card-testimonial>
        </div>
      </div>
    </div>
  </section>


  <section class="bg-white">
    <div class="section-container">
      <div class="flex justify-between">
        <div>
          <h1 class="font-title text-5xl uppercase mb-4">BERITA TERBARU</h1>
          <p class="text-gray-500">Temukan berita terbaru seputar pengajaran, <br> penelitian, pengabdian masyarakat dan
            informatika</p>
        </div>
        <a href="" class="group inline-flex items-center gap-2 text-red-800">
          <span class="border-b border-transparent group-hover:border-red-800 transition">
            Lihat Selengkapnya
          </span>
          <iconify-icon icon="prime:arrow-up" width="18" height="18"
            class="rotate-45 group-hover:rotate-90 group-hover:translate-x-1 transition">
          </iconify-icon>
        </a>
      </div>
    </div>
  </section>

  <div class="max-w-7xl mx-auto">
    <hr class="text-gray-300">
  </div>

  <section class="bg-white pb-32">
    <div class="section-container">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <div class="relative overflow-hidden group">
          <img src="{{ asset('assets/img/blog-1.jpeg') }}"
            class="w-full h-full object-cover group-hover:scale-125 transition-all duration-300">
          <div class="absolute inset-0 bg-black/60"></div>

          <div class="absolute inset-0 p-10 flex flex-col justify-end text-white">
            <div class="flex gap-6 mb-4">
              <p class="flex items-center text-sm md:text-base gap-2">
                <iconify-icon icon="solar:user-linear"></iconify-icon>
                Benedicta Eka Wijayanti
              </p>
              <p class="flex items-center text-sm md:text-base gap-2">
                <iconify-icon icon="stash:data-date"></iconify-icon>
                November 19, 2024
              </p>
            </div>
            <h2 class="text-xl lg:text-2xl font-title group-hover:underline">
              Program Studi Informatika Telkom University Surabaya Gelar Kuliah
              Tamu Berbasis Workshop Yang Bertemakan: “End-To-End AI:
              Using Python And Web Application”
            </h2>
          </div>
        </div>

        <div class="space-y-6">
          <a href="" class="flex gap-4 group">
            <div class="w-40 h-28 overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/blog-1.jpeg') }}"
                class="w-full h-full object-cover group-hover:scale-125 transition-all duration-300">
            </div>
            <div>
              <div class="flex gap-4 text-xs text-gray-500 mb-2">
                <p class="flex items-center gap-1">
                  <iconify-icon icon="solar:user-linear"></iconify-icon>
                  Benedicta Eka Wijayanti
                </p>

                <p class="flex items-center gap-1">
                  <iconify-icon icon="stash:data-date"></iconify-icon>
                  January 12, 2026
                </p>
              </div>
              <h3 class="font-title text-lg capitalize group-hover:underline group-hover:text-red-800">
                China Luncurkan Internet 10G: Awal Revolusi Teknologi
              </h3>
            </div>
          </a>


          <a href="" class="flex gap-4 group">
            <div class="w-40 h-28 overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/blog-2.png') }}"
                class="w-full h-full object-cover group-hover:scale-125 transition-all duration-300">
            </div>
            <div>
              <div class="flex gap-4 text-xs text-gray-500 mb-2">
                <p class="flex items-center gap-1">
                  <iconify-icon icon="solar:user-linear"></iconify-icon>
                  Benedicta Eka Wijayanti
                </p>

                <p class="flex items-center gap-1">
                  <iconify-icon icon="stash:data-date"></iconify-icon>
                  January 12, 2026
                </p>
              </div>
              <h3 class="font-title text-lg capitalize group-hover:underline group-hover:text-red-800">
                EDUKASI CYBER SECURITY AWARENESS SEBAGAI UPAYA PENINGKATAN
              </h3>
            </div>
          </a>

          <div class="flex gap-4 group">
            <div class="w-40 h-28 overflow-hidden shrink-0">
              <img src="{{ asset('assets/img/blog-2.png') }}"
                class="w-full h-full object-cover group-hover:scale-125 transition-all duration-300">
            </div>
            <div>
              <div class="flex gap-4 text-xs text-gray-500 mb-2">
                <p class="flex items-center gap-1">
                  <iconify-icon icon="solar:user-linear"></iconify-icon>
                  Benedicta Eka Wijayanti
                </p>

                <p class="flex items-center gap-1">
                  <iconify-icon icon="stash:data-date"></iconify-icon>
                  January 12, 2026
                </p>
              </div>
              <h3 class="font-title text-lg capitalize group-hover:underline group-hover:text-red-800">
                EDUKASI CYBER SECURITY AWARENESS SEBAGAI UPAYA PENINGKATAN
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
