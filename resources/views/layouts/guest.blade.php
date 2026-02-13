<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Default Title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Library --}}
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

  {{-- CSS Custom --}}
  @stack('css')
</head>

<body class="bg-gray-100">
  <!-- Main Content -->

  @include('partials.navbar')

  <main class="">
    @yield('content')
  </main>

  @include('partials.footer')


  {{-- Navbar Script --}}
  @include('helper.navbar_script')
  {{-- Javascript Custom --}}
  @stack('js')

</body>

</html>
