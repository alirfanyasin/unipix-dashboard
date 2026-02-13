@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero-sub>Staf Pengajar</x-hero-sub>

  <section class="bg-white pb-32">
    <div class="section-container">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <x-card-lecturer name="Dr. Dyah Putri Rahmawati, S.Stat." position="Asisten Ahli" :image="asset('assets/img/dosen-1.jpg')"
          expertise="Statistical modeling, nonparametrik regression" email="dyahputri@telkomuniversity.ac.id">
        </x-card-lecturer>
        <x-card-lecturer name="Dr. Dyah Putri Rahmawati, S.Stat." position="Asisten Ahli" :image="asset('assets/img/dosen-1.jpg')"
          expertise="Statistical modeling, nonparametrik regression" email="dyahputri@telkomuniversity.ac.id">
        </x-card-lecturer>
        <x-card-lecturer name="Dr. Dyah Putri Rahmawati, S.Stat." position="Asisten Ahli" :image="asset('assets/img/dosen-1.jpg')"
          expertise="Statistical modeling, nonparametrik regression" email="dyahputri@telkomuniversity.ac.id">
        </x-card-lecturer>
        <x-card-lecturer name="Dr. Dyah Putri Rahmawati, S.Stat." position="Asisten Ahli" :image="asset('assets/img/dosen-1.jpg')"
          expertise="Statistical modeling, nonparametrik regression" email="dyahputri@telkomuniversity.ac.id">
        </x-card-lecturer>
      </div>
    </div>
  </section>
@endsection
