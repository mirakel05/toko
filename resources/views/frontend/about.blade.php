 @extends('frontend/layouts/main')
 @section('content')
     <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('frontend') }}/images/bg_6.jpg');">
         <div class="container">
             <div class="row no-gutters slider-text align-items-center justify-content-center">
                 <div class="col-md-9 ftco-animate text-center">
                     <p class="breadcrumbs"><span class="mr-2"><a href="/index">Home</a></span> <span>About</span></p>
                     <h1 class="mb-0 bread">About Us</h1>
                 </div>
             </div>
         </div>
     </div>

     <section class="ftco-section ftco-no-pt ftco-no-pb">
         <div class="container">
             <div class="row no-gutters ftco-services">
                 @foreach ($layanan as $item)
                     <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                         <div class="media block-6 services p-4 py-md-5">
                             <div class="icon d-flex justify-content-center align-items-center mb-4">
                                 <span class="flaticon-{{ $item->logo }}"></span>
                             </div>
                             <div class="media-body">
                                 <h3 class="heading">{{ $item->nama }}</h3>
                                 <p>{{ $item->keterangan }}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>

     <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
         <div class="container">
             @foreach ($sejarah as $item)
                 <div class="row">
                     <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                         style="background-image: url({{ Storage::url($item->photo) }});">
                         <a href="{{ Storage::url($item->photo) }}">
                             {{-- class="icon popup-vimeo d-flex justify-content-center align-items-center">
                             <span class="icon-play"></span> --}}
                         </a>
                     </div>
                     <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
                         <div class="heading-section-bold mb-4 mt-md-5">
                             <div class="ml-md-0">
                                 <h2 class="mb-4">{{ $item->judul }}</h2>
                             </div>
                         </div>
                         <div class="pb-md-5 pb-4">
                             <p>{{ $item->keterangan }}</p>
                             <p></p>
                             <p><a href="/shop" class="btn btn-primary">Shop now</a></p>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </section>

     <section class="ftco-section testimony-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     {{-- waktu --}}
                     <div id="jadwal-operasional">
                         <span class="buka">Jam Buka: Sedang memuat...</span>
                         <span class="tutup">Jam Tutup: Sedang memuat...</span>
                         <span class="jam">Jam: Sedang memuat...</span>
                         <span class="detik">Menit:Detik: Sedang memuat...</span>
                     </div>

                     <script>
                         function updateJamOperasional() {
                             const hariIni = new Date();
                             const jam = hariIni.getHours();
                             const menit = hariIni.getMinutes();
                             const detik = hariIni.getSeconds();
                             const hari = hariIni.getDay(); // Mengambil hari dalam bentuk angka (0 = Minggu, 1 = Senin, dst.)

                             const jamOperasional = document.getElementById("jadwal-operasional");

                             // Tentukan jadwal operasional untuk setiap hari
                             const jadwal = {
                                 0: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Minggu
                                 1: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Senin
                                 2: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Selasa
                                 3: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Rabu
                                 4: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Kamis
                                 5: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Jumat
                                 6: {
                                     buka: "07.00",
                                     tutup: "20.00"
                                 }, // Sabtu
                             };

                             const jadwalHariIni = jadwal[hari];

                             if (jadwalHariIni) {
                                 const jamBuka = jadwalHariIni.buka;
                                 const jamTutup = jadwalHariIni.tutup;

                                 if (jamBuka === "Tutup" || jamTutup === "Tutup") {
                                     jamOperasional.innerHTML = "Tutup Hari Ini";
                                     jamOperasional.className = "tutup";
                                 } else if (jam >= parseInt(jamBuka) && jam < parseInt(jamTutup)) {
                                     jamOperasional.innerHTML =
                                         `<span class="buka">Jam Buka: ${jamBuka}</span><span class="tutup">Jam Tutup: ${jamTutup}</span><span class="jam">Jam: ${jam}:${menit}:${detik}</span>`;
                                 } else {
                                     jamOperasional.innerHTML =
                                         `<span class="buka">Jam Buka: ${jamBuka}</span><span class="tutup">Jam Tutup: ${jamTutup}</span><span class="jam">Jam: ${jam}:${menit}:${detik}</span>`;
                                 }
                             } else {
                                 jamOperasional.innerHTML = "Tutup Hari Ini";
                                 jamOperasional.className = "tutup";
                             }
                         }

                         // Perbarui jam operasional setiap detik
                         setInterval(updateJamOperasional, 1000);

                         // Panggil fungsi pertama kali
                         updateJamOperasional();
                     </script>
                 </div>
             </div>
         </div>
     </section>
 @endsection
