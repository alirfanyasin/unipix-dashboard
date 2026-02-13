@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero-sub>Artikel & Berita</x-hero-sub>

  <section class="bg-white pb-32">
    <div class="section-container">
      <div class="grid lg:grid-cols-3 gap-5 md:grid-cols-2 grid-cols-1 mt-10">
        <x-card-news name="Irfan Yasin" date="19 Januari 2023" :image="asset('assets/img/laboratorium.png')"
          title="SEtizen Explore: Dari Data Pemerintahan sampai Layanan Publik Modern" />

        <x-card-news name="Irfan Yasin" date="19 Januari 2023" :image="asset('assets/img/laboratorium.png')"
          title="Automated Testing di Dunia Nyata Bagaimana Selenium dan Cypress Meningkatkan" />

        <x-card-news name="Irfan Yasin" date="19 Januari 2023" :image="asset('assets/img/laboratorium.png')"
          title="Algoritma Pencarian Modern: Dari Linear Search ke Elasticsearch dan AI" />
      </div>
    </div>
  </section>
@endsection
