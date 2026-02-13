@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero-sub>Kehidupan Kampus</x-hero-sub>

  <section class="bg-white">
    <div class="section-container">
      <h1 class="font-title text-3xl md:text-5xl text-center">Fasilitas Kampus</h1>

      <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1 mt-10">

        <x-card-campus-life name="Laboratorium"
          description="Memiliki 20 jenis laboratorium yang digunakan untuk kegiatan belajar dan penelitian."
          :image="asset('assets/img/laboratorium.png')" />

        <x-card-campus-life name="Fasilitas Olahraga"
          description="Terdapat lapangan tenis, bulu tangkis, futsal, basket, dan voli yang dapat digunakan
              untuk kegiatan olahraga."
          :image="asset('assets/img/fasilitas-olahraga.png')" />

        <x-card-campus-life name="Masjid"
          description="Fasilitas untuk sivitas akademika yang beragama muslim untuk melakukan ibadah." :image="asset('assets/img/masjid.png')" />

        <x-card-campus-life name="Perpustakaan"
          description="Memiliki lebih dari 10.000 koleksi buku cetak maupun e-book yang dapat dipakai untuk referensi belajar dan penelitian."
          :image="asset('assets/img/perpustakaan.png')" />

        <x-card-campus-life name="Asrama"
          description="Dilengkapi dengan asrama untuk mahasiswa dengan lokasi yang sangat dekat dengan gedung perkuliahan."
          :image="asset('assets/img/asrama.png')" />

        <x-card-campus-life name="Open Space"
          description="Memiliki 8 area open space yang dapat digunakan mahasiswa untuk melakukan kegiatan akademik dan non-akademik."
          :image="asset('assets/img/open-space.png')" />
      </div>
    </div>
  </section>


  <section class="bg-white pb-32">
    <div class="section-container">
      <h1 class="font-title text-3xl md:text-5xl text-center">Kegiatan Mahasiswa</h1>

      <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1 mt-10">

        <x-card-campus-life name="Kerohanian"
          description="Terdapat 3 unit kegiatan mahasiswa bidang kerohanian untuk agama Islam, Kristen, dan Katolik."
          :image="asset('assets/img/kerohanian.png')" />

        <x-card-campus-life name="Olahraga"
          description="Terdapat 4 unit kegiatan mahasiswa bidang olahraga untuk cabang basket, bulu tangkis, voli, dan e-sport."
          :image="asset('assets/img/olahraga.png')" />

        <x-card-campus-life name="Kesenian dan Budaya"
          description="Terdapat 3 unit kegiatan mahasiswa bidang kesenian dan budaya, antara lain paduan suara, telkom art, dan ikatan mahasiswa Sulawesi."
          :image="asset('assets/img/kesenian-dan-budaya.png')" />

        <x-card-campus-life name="Penalaran"
          description="Terdapat 5 unit kegiatan mahasiswa di bidang penalaran, antara lain DPM, BEM, CODER, enterpreneur community, dan robotika."
          :image="asset('assets/img/penalaran.png')" />

        <x-card-campus-life name="sosial"
          description="Terdapat 1 untik kegiatan mahasiswa di bidang sosial, yaitu mahasiswa pecinta alam."
          :image="asset('assets/img/sosial.png')" />

        <x-card-campus-life name="Himpuanan Mahasiswa"
          description="Terdapat 11 himpunan mahasiswa dari masing-masing program studi." :image="asset('assets/img/himpunan-mahasiswa.png')" />

      </div>
    </div>
  </section>
@endsection
