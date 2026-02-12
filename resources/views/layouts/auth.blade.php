<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Library --}}
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

  {{-- CSS Custom --}}
  @stack('css')
</head>

<body class="bg-gray-100">
  <!-- Main Content -->
  <div class="lg:ml-64">
    <!-- Content Area -->
    <main class="p-4 md:p-6">
      @yield('content')
    </main>
  </div>

  {{-- Javascript Custom --}}
  @stack('js')
</body>

</html>
