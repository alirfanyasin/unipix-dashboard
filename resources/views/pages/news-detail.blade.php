@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')
  <x-hero-sub>{{ $title }}</x-hero-sub>

  <section class="bg-white pb-32">
    <div class="section-container">
      <div class="grid md:grid-cols-3 grid-cols-1 md:gap-7 gap-0">
        <div class="col-span-2">
          <div class="w-full h-120 shrink-0">
            <img src="{{ asset('assets/img/laboratorium.png') }}" alt="" class="w-full h-full object-cover">
          </div>

          <div class="mb-2 text-red-800 flex items-center gap-5 my-8 font-semibold">
            <div class="flex items-center gap-2">
              <iconify-icon icon="solar:user-linear" width="16" height="16"></iconify-icon>
              <p>Irfan Yasin</p>
            </div>

            <div class="flex items-center gap-2">
              <iconify-icon icon="lucide:clock" width="16" height="16"></iconify-icon>
              <p>18 Januari 2023</p>
            </div>

            <div class="flex items-center gap-2">
              <iconify-icon icon="lucide:tags" width="16" height="16"></iconify-icon>
              <p>Artikel dan Berita</p>
            </div>
          </div>

          <div class="content mt-9">
            <p class="text-gray-500 mb-6">
              Di tengah pesatnya perkembangan teknologi digital pada periode 2020–2025, ancaman terhadap keamanan data
              semakin kompleks dan masif. Serangan siber tidak hanya menargetkan individu, tetapi juga perusahaan besar,
              lembaga keuangan, dan infrastruktur kritis negara. Dalam lanskap ancaman yang terus berkembang ini,
              algoritma kriptografi seperti RSA, AES, dan SHA-256 berperan sebagai pilar utama yang menjaga kerahasiaan,
              integritas, dan autentikasi data di dunia digital.
            </p>

            <p class="text-gray-500 mb-6">
              RSA (Rivest-Shamir-Adleman) merupakan algoritma enkripsi asimetris yang digunakan untuk mengamankan
              pertukaran kunci dan autentikasi identitas. RSA bekerja dengan menggunakan pasangan kunci publik dan kunci
              privat yang saling terkait secara matematis melalui faktorisasi bilangan prima besar. Pada praktiknya, RSA
              banyak digunakan dalam protokol keamanan seperti TLS/SSL untuk memastikan bahwa komunikasi antara klien dan
              server terlindungi dari penyadapan. Dalam periode 2020-2025, RSA tetap menjadi standar penting, terutama
              untuk infrastruktur kunci publik (PKI) dan sistem tanda tangan digital.
            </p>

            <p class="text-gray-500 mb-6">
              AES (Advanced Encryption Standard) adalah algoritma enkripsi simetris yang dirancang untuk mengamankan data
              dalam jumlah besar secara efisien. Berbeda dengan RSA, AES menggunakan satu kunci yang sama untuk proses
              enkripsi dan dekripsi. Keunggulan AES terletak pada kecepatan dan kekuatannya, sehingga sangat cocok
              digunakan untuk pengamanan data dalam penyimpanan (data at rest) maupun data yang sedang dikirim (data in
              transit). Versi AES-128, AES-192, dan AES-256 menjadi standar global dan digunakan secara luas pada
              perangkat seluler, layanan cloud, dan sistem keuangan modern.
            </p>

            <p class="text-gray-500 mb-6">
              SHA-256 (Secure Hash Algorithm 256-bit) berfungsi sebagai algoritma hash kriptografis yang menjamin
              integritas data. Tidak seperti RSA dan AES yang bersifat reversible, SHA-256 bersifat satu arah (one-way
              function), sehingga tidak memungkinkan data asli dikembalikan dari hasil hash. Algoritma ini digunakan untuk
              memastikan bahwa data tidak mengalami perubahan selama proses transmisi atau penyimpanan. Selain itu,
              SHA-256 menjadi komponen utama dalam teknologi blockchain dan cryptocurrency, di mana keutuhan data
              transaksi menjadi faktor krusial.
            </p>


            <p class="text-gray-500 mb-6">
              Ketiga algoritma ini bekerja secara komplementer dalam sistem keamanan modern. RSA sering digunakan untuk
              pertukaran kunci secara aman, setelah itu AES digunakan untuk mengenkripsi data utama karena efisiensinya.
              Sementara itu, SHA-256 digunakan untuk memverifikasi integritas data dan menghasilkan digital fingerprint
              yang unik. Kombinasi ini menciptakan sistem keamanan berlapis yang mampu melindungi data dari berbagai jenis
              serangan, mulai dari man-in-the-middle hingga brute force attack.
            </p>
          </div>

          <div class="my-10">
            <p class="text-gray-500 font-semibold text-xl inline mr-2">Tags: </p>
            <a href=""
              class="inline-block px-5 py-1 border text-gray-500 border-gray-300 hover:bg-red-800 hover:text-white">AES</a>
            <a href=""
              class="inline-block px-5 py-1 border text-gray-500 border-gray-300 hover:bg-red-800 hover:text-white">CyberScurity</a>
            <a href=""
              class="inline-block px-5 py-1 border text-gray-500 border-gray-300 hover:bg-red-800 hover:text-white">Digital
              Scurity</a>
            <a href=""
              class="inline-block px-5 py-1 border text-gray-500 border-gray-300 hover:bg-red-800 hover:text-white">hashing</a>
          </div>


          <div>
            <h2 class="font-title text-2xl">Leave a Reply</h2>
            <p class="text-gray-500 my-5">
              Your email address will not be published. Required fields are marked *
            </p>

            <form action="">
              <input type="text" name="name" id="name" placeholder="Name *"
                class="w-full border border-gray-300 p-4 mb-4 focus:outline-none focus:border-red-800 focus:ring-1 focus:ring-red-800 transition">

              <input type="text" name="email" id="email" placeholder="Email *"
                class="w-full border border-gray-300 p-4 mb-4 focus:outline-none focus:border-red-800 focus:ring-1 focus:ring-red-800 transition">

              <textarea name="comment" id="comment" rows="10" placeholder="Comment here"
                class="w-full border border-gray-300 p-4 mb-4 focus:outline-none focus:border-red-800 focus:ring-1 focus:ring-red-800 transition"></textarea>

              <button
                class="px-5 py-3 bg-red-800 text-white font-semibold hover:bg-black transition hover:cursor-pointer">Post
                Comment</button>
            </form>
          </div>
        </div>


        <div class="space-y-10 mt-20 md:mt-0">
          <div class="bg-gray-100 p-5">
            <h3 class="text-2xl font-title mb-4">Recent Posts</h3>
            <div class="space-y-4">
              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Mengapa
                  Power Bank Bisa
                  Mengisi Dua Perangkat Sekaligus?Penjelasan dengan Hukum
                  Kirchhoff</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Mengapa
                  Power Bank Bisa
                  Mengisi Dua Perangkat Sekaligus?Penjelasan dengan Hukum
                  Kirchhoff</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Mengapa
                  Power Bank Bisa
                  Mengisi Dua Perangkat Sekaligus?Penjelasan dengan Hukum
                  Kirchhoff</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Mengapa
                  Power Bank Bisa
                  Mengisi Dua Perangkat Sekaligus?Penjelasan dengan Hukum
                  Kirchhoff</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Mengapa
                  Power Bank Bisa
                  Mengisi Dua Perangkat Sekaligus?Penjelasan dengan Hukum
                  Kirchhoff</a>
              </div>
            </div>
          </div>

          <div class="bg-gray-100 p-5">
            <h3 class="text-2xl font-title mb-4">Category</h3>
            <div class="space-y-4">
              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Artikel dan
                  Berita</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Himpunan
                  Mahasiswa</a>
              </div>

              <div class="p-5 bg-white group">
                <a href="" class="text-lg text-gray-500 group-hover:text-red-800 group-hover:underline">Kegiatan
                  Riset</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
