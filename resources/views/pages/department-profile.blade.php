@extends('layouts.guest')
@section('title', 'Telkom University Surabaya')

@section('content')

  <section class="relative pt-24">
    <div class="w-full h-52 lg:h-80 2xl:h-96 overflow-hidden relative">
      <img src="{{ asset('assets/video/hero-img.jpeg') }}" class="w-full h-full object-cover object-center">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
        <h1 class="text-3xl md:text-5xl mb-4  tracking-wide font-title">
          Profil Program Studi
        </h1>
        <p class="text-lg tracking-wide">
          Home > Profil Program Studi
        </p>
      </div>
    </div>
  </section>


  <section class="bg-white pb-32">
    <div class="section-container grid grid-cols-1 md:grid-cols-3 gap-15">
      <div class="col-span-2">
        <h2 class="text-black font-title text-4xl mb-10">Tentang S1 Informatika Kampus Surabaya</h2>
        <p class="text-gray-500 mb-5">Program Studi Informatika merupakan bidang studi yang memfokuskan pada pengembangan
          dan
          penerapan teknologi informasi serta komputasi. Program ini mencakup berbagai disiplin ilmu, seperti pemrograman,
          algoritma, basis data, jaringan komputer, kecerdasan buatan, dan sistem informasi. Mahasiswa Informatika akan
          mempelajari dasar-dasar pemrograman, seperti bahasa pemrograman Java, Python, atau C++, serta prinsip-prinsip
          algoritma dan struktur data. Selain itu, mereka juga akan mendalami pengelolaan basis data, desain dan analisis
          jaringan, serta teknik-teknik dalam pengembangan perangkat lunak.</p>

        <p class="text-gray-500 mb-5">
          Program studi ini juga menekankan pada penerapan teknologi dalam berbagai bidang, seperti kesehatan, pendidikan,
          bisnis, dan industri kreatif. Dengan demikian, lulusan program studi Informatika memiliki keterampilan yang luas
          dan beragam, memungkinkan mereka untuk berkarir sebagai pengembang perangkat lunak, analis sistem, administrator
          jaringan, data scientist, dan berbagai profesi lainnya di bidang teknologi informasi.
        </p>

        <p class="text-gray-500 mb-5">
          Di era digital saat ini, peran lulusan Informatika sangat penting dalam mendorong inovasi dan efisiensi melalui
          teknologi. Mereka tidak hanya bertugas untuk menciptakan sistem yang efisien dan efektif, tetapi juga harus
          mampu beradaptasi dengan perkembangan teknologi yang cepat dan terus berubah. Program Studi Informatika menjadi
          landasan bagi mereka yang ingin berkontribusi dalam transformasi digital dan menjadi bagian dari solusi
          teknologi masa depan.
        </p>


        <div class="text-white bg-red-800 p-10 mb-5">
          <h4 class="text-3xl font-title mb-5">Visi</h4>
          <p>Menuju program studi sarjana yang bereputasi nasional dan internasional dalam pendidikan, penelitian, dan
            pengabdian masyarakat yang inovatif di bidang Informatika, khususnya sistem cerdas.</p>
        </div>

        <div class="text-black bg-gray-100 p-10 mb-5">
          <h4 class="text-3xl font-title mb-5">Misi</h4>
          <ul>
            <li class="flex items-start gap-3 mb-4">
              <iconify-icon icon="material-symbols:check" width="26" height="26"
                class="text-red-800"></iconify-icon>
              <p>Menyelenggarakan pendidikan program sarjana yang berstandar internasional untuk bidang Informatika.
                Bidang keilmuan Informatika yang menjadi fokus adalah sistem cerdas.</p>
            </li>

            <li class="flex items-start gap-3 mb-4">
              <iconify-icon icon="material-symbols:check" width="26" height="26"
                class="text-red-800"></iconify-icon>
              <p>Melaksanakan penelitian dalam rangka pengembangan ilmu pengetahuan dan teknologi untuk sistem cerdas.</p>
            </li>

            <li class="flex items-start gap-3 mb-4">
              <iconify-icon icon="material-symbols:check" width="26" height="26"
                class="text-red-800"></iconify-icon>
              <p>Berpartisipasi dalam memberikan layanan kepada masyarakat dan komunitas profesi bidang Informatika,
                khususnya komunitas yang relevan dengan pengembangan mesin dan sistem cerdas.</p>
            </li>

            <li class="flex items-start gap-3 mb-4">
              <iconify-icon icon="material-symbols:check" width="26" height="26"
                class="text-red-800"></iconify-icon>
              <p>Berkolaborasi dengan industri, pemerintah dan alumni dalam rangka mengembangkan kewirausahaan bidang
                Informatika atau bidang-bidang lain yang relevan dengan Informatika.</p>
            </li>
          </ul>
        </div>

        <h2 class="text-black font-title text-4xl my-10">Akreditasi</h2>

        <p class="text-gray-500">
          Program Studi Informatika dengan bangga meraih predikat <strong>Akreditasi Baik Sekali</strong>, yang
          mencerminkan komitmen kami dalam menyediakan pendidikan berkualitas tinggi di bidang teknologi informasi dan
          komunikasi. Predikat ini menjadi bukti bahwa kami terus berupaya meningkatkan mutu akademik, mendukung
          penelitian inovatif, dan menghasilkan lulusan yang kompeten serta relevan dengan kebutuhan industri. Dengan
          semangat ini, kami berkomitmen untuk terus maju, menciptakan dampak positif, dan memberikan kontribusi nyata
          bagi masyarakat.
        </p>

        <div class="mt-5">
          <img
            src="https://bif-sby.telkomuniversity.ac.id/wp-content/uploads/2024/12/akreditasi-if-tel-u-surabaya-768x481.jpg"
            alt="" class="w-full">
        </div>

        <h2 class="text-black font-title text-4xl my-10">Learning Outcomes</h2>

        <p class="text-gray-500">
          Learning outcomes dari Program Studi Informatika dirancang untuk memastikan lulusan memiliki keterampilan dan
          pengetahuan yang komprehensif dalam bidang teknologi informasi dan komputasi. Mahasiswa akan menguasai
          dasar-dasar teori dan konsep informatika, termasuk algoritma, struktur data, dan arsitektur komputer. Mereka
          akan terampil dalam berbagai bahasa pemrograman seperti Java, Python, dan C++, serta mampu merancang dan
          mengimplementasikan sistem informasi yang aman, skalabel, dan berkinerja tinggi. Selain itu, lulusan akan
          memiliki kemampuan dalam manajemen basis data, jaringan komputer, serta aplikasi kecerdasan buatan dan
          pembelajaran mesin dalam berbagai konteks. Pengembangan perangkat lunak juga menjadi fokus, dengan mahasiswa
          yang mampu mengikuti seluruh siklus hidup pengembangan perangkat lunak dari analisis kebutuhan hingga
          pemeliharaan. Etika profesional dan kemampuan komunikasi yang efektif, baik secara lisan maupun tulisan, juga
          ditekankan, memastikan lulusan mampu bekerja sama dalam tim multidisiplin dan beradaptasi dengan cepat terhadap
          perubahan teknologi. Kesadaran akan pentingnya pembelajaran seumur hidup melengkapi kompetensi lulusan,
          mempersiapkan mereka untuk terus mengembangkan keterampilan dan pengetahuan mereka seiring perkembangan
          teknologi informasi. Dengan demikian, lulusan Program Studi Informatika siap berkontribusi secara signifikan
          dalam industri dan masyarakat di era digital.
        </p>


        <ul class="mt-10 space-y-5">

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Pemahaman Teoritis dan Konseptual: Mahasiswa mampu menjelaskan prinsip dasar ilmu komputer dan informatika,
              termasuk teori komputasi, algoritma, struktur data, dan arsitektur komputer.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Keterampilan Pemrograman: Mahasiswa mampu menguasai berbagai bahasa pemrograman, seperti Java, Python, C++,
              dan lainnya, serta mampu menerapkannya dalam pengembangan perangkat lunak yang efektif dan efisien.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Desain dan Analisis Sistem: Mahasiswa mampu merancang, menganalisis, dan mengoptimalkan sistem informasi
              serta perangkat lunak, dengan mempertimbangkan aspek keamanan, skalabilitas, dan performa.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Manajemen Basis Data: Mahasiswa mampu mengelola, merancang, dan mengimplementasikan basis data relasional
              maupun non-relasional untuk mendukung kebutuhan pengolahan data dalam organisasi.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Jaringan Komputer: Mahasiswa mampu memahami dan mengimplementasikan konsep-konsep jaringan komputer,
              termasuk konfigurasi, manajemen, dan pengamanan jaringan.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Kecerdasan Buatan dan Pembelajaran Mesin: Mahasiswa mampu memahami konsep dan teknik kecerdasan buatan,
              pembelajaran mesin, serta penerapannya dalam berbagai bidang, seperti pengenalan pola, data mining, dan
              sistem cerdas.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Pengembangan Perangkat Lunak: Mahasiswa mampu mengikuti siklus hidup pengembangan perangkat lunak (Software
              Development Life Cycle/SDLC), mulai dari analisis kebutuhan, desain, implementasi, pengujian, hingga
              pemeliharaan.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Etika dan Profesionalisme: Mahasiswa mampu menerapkan etika profesi dalam bidang teknologi informasi,
              termasuk aspek hukum dan sosial dari penggunaan teknologi informasi.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Komunikasi dan Kerja Tim: Mahasiswa mampu berkomunikasi dengan efektif dalam bentuk lisan maupun tulisan,
              serta mampu bekerja sama dalam tim multidisiplin untuk menyelesaikan masalah yang kompleks.
            </p>
          </li>

          <li class="flex items-start gap-3">
            <iconify-icon icon="iconoir:long-arrow-up-right" width="28" height="28"
              class="text-red-800"></iconify-icon>
            <p class="text-gray-500">
              Pembelajaran Seumur Hidup: Mahasiswa memiliki kesadaran akan pentingnya pembelajaran seumur hidup dan mampu
              mengidentifikasi serta memanfaatkan sumber daya untuk terus memperbarui pengetahuan dan keterampilan mereka
              dalam bidang teknologi informasi.
            </p>
          </li>

        </ul>


        <div class="text-white bg-blue-950 p-10 my-10 text-center">
          <h4 class="text-3xl font-title mb-5">Gelar Lulusan</h4>
          <p>Setelah lulus dan menyelesaikan Program Studi Informatika, mahasiswa akan mendapatkan gelar
            Sarjana Komputer (S.Kom).</p>
        </div>

        <h2 class="text-black font-title text-4xl my-10">Sejarah Singkat</h2>

        <p class="text-gray-500 mb-5">
          Program Studi S1 Informatika berada dibawah institusi ITTelkom Surabaya sesuai dengan diterbitkannya Surat
          Keputusan Menristekdikti nomor 733/KPT/I/2018 pada tanggal 4 September 2018. Pada awalnya program studi ini
          berada di lingkup Fakultas Teknologi Informasi dan Industri (FTII). Pada saat itu, ITTelkom Surabaya hanya
          memiliki 7 prodi dan 2 Fakultas besar.
        </p>

        <p class="text-gray-500 mb-5">
          Pada tahun 2021, FTII berubah menjadi Fakultas Teknologi Informasi dan Bisnis (FTIB) dengan tambahan tiga
          program studi baru, salah satunya adalah S1 Informatika. FTIB didirikan dengan tujuan menjadi fakultas yang
          unggul dalam penerapan ICT serta berfokus pada bidang maritim, transportasi, dan logistik. FTIB merupakan sebuah
          fakultas yang menaungi 6 program studi dibidang Teknologi Informasi dan Bisnis.
        </p>
        <p class="text-gray-500 mb-5">
          Pada tahun 2022, terjadi perubahan kurikulum hasil dampak dari perubahan visi dan misi program studi. Perubahan
          kurikulum ini memperbaiki kurikulum sebelumnya yang focus pada Informatika secara global menjadi Informatika
          yang dibagi menjadi tiga peminatan atau kelompok keahlian. Kelompok keahlian yang terdaftar, yaitu: Optimize
          Programming, Smart Networking, dan Smart Computing dengan beberapa mata kuliah wajib pada setiap kelompoknya.
        </p>
        <p class="text-gray-500 mb-5">
          Pada Tahun 2023, program studi S1 Informatika mendapatkan akreditasi BAIK SEKALI dari LAM INFOKOM sesuai dengan
          surat No. 032/SK/LAM INFOKOM/Ak.P/S/XII/2023 pada tanggal 14 Desember 2023.
        </p>
        <p class="text-gray-500 mb-5">
          Pada Tahun 2024, ITTelkom Surabaya bergabung dengan Telkom University dan menjadi bagian dari Telkom University
          National Campus (TUNC). Dengan penyatuan ini, ITTelkom Surabaya berubah nama menjadi Telkom University Surabaya,
          dan program studi S1 Informatika berubah menjadi S1 Informatika (Kampus Surabaya). Sekarang, S1 Informatika
          (Kampus Surabaya) berada di dalam naungan Fakultas Informatika yang berpusat di kota Bandung dengan tiga
          kelompok keahlian, yaitu: Data Sience and Intelligent System (DSIS), Communication and Information Technology
          Infrastructure (CITI) dan Software Engineering and Algorithm (SEAL)
        </p>
      </div>

      <div class="space-y-10">
        <div class="border border-gray-200">
          <div class="bg-[#181818] text-white text-center py-4 font-title text-xl">
            Tautan Penting
          </div>
          <ul>
            <li class="border-t border-gray-200">
              <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                <iconify-icon icon="bitcoin-icons:arrow-right-filled" width="17" height="17"></iconify-icon>
                Struktur Kurikulum
              </a>
            </li>
            <li class="border-t border-gray-200">
              <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                <iconify-icon icon="bitcoin-icons:arrow-right-filled" width="17" height="17"></iconify-icon>
                Prospek Karir
              </a>
            </li>
            <li class="border-t border-gray-200">
              <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                <iconify-icon icon="bitcoin-icons:arrow-right-filled" width="17" height="17"></iconify-icon>
                Dosen & Staf
              </a>
            </li>
            <li class="border-t border-gray-200">
              <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                <iconify-icon icon="bitcoin-icons:arrow-right-filled" width="17" height="17"></iconify-icon>
                Prestasi & Penghargaan
              </a>
            </li>
            <li class="border-t border-gray-200">
              <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                <iconify-icon icon="bitcoin-icons:arrow-right-filled" width="17" height="17"></iconify-icon>
                Kegiatan Riset
              </a>
            </li>
          </ul>
        </div>


        <div class="relative overflow-hidden">
          <img src="{{ asset('assets/video/hero-img.jpeg') }}" class="w-full h-full object-cover absolute inset-0">
          <div class="absolute inset-0 bg-black/70"></div>
          <div class="relative text-center text-white p-10 border border-white/20 m-6">
            <p class="text-lg mb-10">
              Penerimaan <br> Mahasiswa Baru
            </p>
            <h2 class="font-serif text-3xl mb-6 leading-snug">
              Mulai Perjalanan Akademis Kamu Bersama Kami
            </h2>
            <a href="#"
              class="bg-white text-red-700 px-8 font-semibold group py-3 inline-flex items-center gap-2 hover:bg-red-800 hover:text-white transition">
              Daftar Sekarang
              <iconify-icon icon="prime:arrow-up" width="18" height="18"
                class="rotate-45 group-hover:rotate-90 group-hover:translate-x-1 transition">
              </iconify-icon>
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>


@endsection
