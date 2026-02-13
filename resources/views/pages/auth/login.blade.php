@extends('layouts.auth')
@section('title', 'Login')
@section('content')
  <div>
    <img src="{{ asset('assets/img/logo-telkom-university.png') }}" alt="Logo Telkom University Surabaya"
      class="w-32 mx-auto mb-8">
    <div class="p-7 rounded-2xl shadow-xl min-w-80 bg-white">
      <form action="">
        <div class="mb-3">
          <label for="email" class="">Alamat Email</label>
          <input type="email" name="email" id="email" class="w-full p-3 rounded-md border border-gray-300"
            placeholder="example@test.com">
        </div>
        <div class="mb-3">
          <label for="password" class="">Password</label>
          <input type="password" name="password" id="password" class="w-full p-3 rounded-md border border-gray-300"
            placeholder="*****">
        </div>
        <div class="">
          <button
            class="block py-3 rounded-md bg-red-800 text-center w-full cursor-pointer text-white hover:bg-red-900">Login</button>
        </div>
      </form>
    </div>
  </div>
@endsection
