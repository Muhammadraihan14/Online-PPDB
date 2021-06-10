<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos -->

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- bosstrap -->

    <!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- google fonts -->


     <!-- css -->
      <style type="text/css">


      #pembuka{
        background :none;
       
      }
      #baground{
      background-size:cover;
      background-attachment: fixed;
      padding-top:150px;
      height:800px;
      max-height:1112px;
      }

      #baground {
        background-image: url('{{ asset('image/Gedung.jpg')}}');
      }
      #lambang{
        background:no-repeat; 
        background-size: cover;
      }


      #navbarNav a:hover {
      color: blue;
      }

      #navbarNav a{
         font-family: 'Ubuntu', sans-serif;
      }

      .row a{
        text-decoration: none;
        color: #000;
      }
      .row a:hover{
        text-decoration: underline;
        color: #FFF8DC;
      }

      
    </style>
    <!-- css -->

    <title>Portal PPDB | Landak.com </title>
</head>
<body style="height: 4000px;">

    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-lg">
  <div class="container">
    <div class="navbar-brand">
    <a href="#"> <img src= {{asset ('image/facebook.png')}} width="30"></a>
    <a href="https://www.instagram.com/pensi_smansaka/"> <img src={{asset ('image/instagram.png')}} width="30"></a>
    <a href="https://www.youtube.com/channel/UC0rS4QIem9V_WnwwXpMe07w?app=desktop&itct=CBwQ6p4EIhMImZGWxcHQ5QIVhuloCh0C6AsH&csn=cBPAXYOxNK-O3LUPwY6eiAc&wlfg=true"> <img src={{asset ('image/youtube.png')}} width="30"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Tentang">Tentang PPDB</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Persyaratan">Persyaratan</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Jadwal">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Contact">Contact Center</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <!-- navbar -->



  <!-- jumbotron -->
  <section id="Beranda">
    <div class="container-fluid" id="baground" >
    <div class="container text-center" style="margin-top: 70px;" id="pembuka" >  
     <h1 class="h1" data-aos="fade-down" data-aos-duration="1500" data-aos-easing="linear" >PENERIMAAN PESERTA DIDIK BARU</h1> 
     <h2 class="h2" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="linear" >SMAN 01 MEMPAWAH HULU 2021/2022</h2>
     <h3 class="h3" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear" >Registrasi Online melalui</h2>
     <a href="portal" ><button type="button" class="btn btn-primary m-3"  data-aos="zoom-in" data-aos-duration="2000" data-aos-easing="linear">Portal SMANSAKA</button></a>
  </div>
  </div>
  </section>
  <!-- end jumbotron -->

<!-- main -->
<main>
<!-- tentang -->


<section id="Tentang">
  <div class="container text-center mt-5">
    <div class="card-body">
    <h1 class="h2 " data-aos="zoom-in" data-aos-duration="1500" >Selamat Datang di Portal Layanan SIAP PPDB Online</h2>
    <p class="lh-sm" data-aos="zoom-in" data-aos-duration="1500">Layanan SIAP PPDB Online adalah sebuah sistem layanan yang dirancang untuk melakukan otomasi seleksi Pendaftaran Peserta Didik Baru (PPDB), 
    mulai dari proses pendaftaran, proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis waktu nyata (realtime).</p>
  </div>
  </div>


  <div class="container-fluid mt-5">
  <div class="container">
    <div class="row ">
      <div class="col-6" data-aos="fade-right" data-aos-duration="2000">
        <h3 class="h3">Dasar Hukum</h3>
       <p class="lh-sm " style="text-align: justify;">
          Mengacu pada Juknis PPDB TK, SD, SMP, SMA, SMK tahun ajaran 2021-2022 yang diatur dalam Perdikbud Nomor 1 tahun 2021 untuk PPDB
          harus dilaksanakan dalam azas keadilan, nondiskiriminasi,kecuali sekolah yang secara khusus melayani peserta didik dari kelompok 
          gendar atau agama tertentu, transparan, akuntabel, objektif. Menurut Juknis PPDB TK, SD, SMA, SMK, tahun ajaran 2021/2022, bahwa 
          syarat usia wajib dibuktikan dangan akta kelahiran atau surat keterangan lahir.
        </p>
      </div>
      <div class="col-6" data-aos="fade-up" data-aos-duration="2000">
        <img class="img-fluid" src={{ asset ('image/law.jpg')}}></img>
      </div>
    </div>







    <div class="row mt-5">
      <div class="col-6">
        <img class="img-fluid" src= {{asset ('image/tujuan.jpg')}} data-aos="fade-left" data-aos-duration="2000"></img>
      </div>

      <div class="col-6" data-aos="fade-up" data-aos-duration="2000">
        <h3 class="h3">Maksud dan Tujuan</h3>
       <p class="lh-sm " style="text-align: justify;">
         Dengan adanya situs PPDB online ini, diharapkan masyarakat khusunya yang berkaitan dengan dunia pendidikan anak sekolahan, maka 
         dapat memperoleh informasi dengan mudah mulai mulia proses  proses pendaftaran siswa baru seperti alur pendaftaran atau tata cara 
         pendataran, persyaratan pendaftaran , jadwal pelaksanaan, dan lain-lain hingga menuju proses seleksi dan pengumuman hasil seleksi.
        </p>
      </div>
    </div>
  </div>
</div>



<!-- <div class="container mt-5">
  <h1 class="h2 text-center">Tentang PPDB 2021</h2>
  <div class="row">
 <div class="col-6 col-sm-6 ">
        <img src="gambar/law.jpg" class=" mx-auto d-block">
      </div>

      <div class="col-6 col-sm-6" >
        <p class="lh-sm " style="text-align: justify;">
          Mengacu pada Juknis PPDB TK, SD, SMP, SMA, SMK tahun ajaran 2021-2022 yang diatur dalam Perdikbud Nomor 1 tahun 2021 untuk PPDB
          harus dilaksanakan dalam azas keadilan, nondiskiriminasi,kecuali sekolah yang secara khusus melayani peserta didik dari kelompok 
          gendar atau agama tertentu, transparan, akuntabel, objektif. Menurut Juknis PPDB TK, SD, SMA, SMK, tahun ajaran 2021/2022, bahwa 
          syarat usia wajib dibuktikan dangan akta kelahiran atau surat keterangan lahir.
        </p>
      </div>
</div>


</div> -->

<div class="container text-center mt-5" 
     data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
  <p class="lead">PPDB 2020 ? DirumahAja! PPDB From Home</p>
    <iframe src="https://www.youtube.com/embed/2o3Ixqvf1N4" width="750" height="400"></iframe>
</div>
</section>
<!-- tentang -->


<!-- Tentang -->



<!-- tentang -->

<!-- persyaratan -->
<section id="Persyaratan">
<div class="container mt-5">
  <!-- header========= -->
  <header class="text-center">
    <h3 class="h3 mb-3" 
     data-aos="fade-left"
     data-aos="linear"
      data-aos-duration="2000"
      >Persyaratan Pendaftaran</h3>
  </header>
  <!-- header========= -->
  <div class="justify-content-center">
  <div class="col-lg-12 col-md-12 mb-4" 
     data-aos="zoom-out-right"
     data-aos-easing="linear" 
     data-aos-duration="2000">
   <div class="card-body shadow-lg">
      <div class="card-title pt-2 text-center">Persyaratan Umum</div>
         <div class="card-text" >
           <ol class="list">
             <li>Telah lulus SMP/Sederajat, memiliki Ijazah atau Surat Keterangan Lulus (SKL) dan nilai rapor semester 1 sampai dengan 5 dari sekolah untuk lulusan pada tahun pelajaran tahun 2020/2021 atau sebelumnya.</li>
             <li>Berusia paling tinggi 21 tahun pada saat awal tahun pelajaran 2021/2022 (Juli 2021).</li>
             <li>Tidak sedang terlibat dalam tindak pidana dan penyalahgunaan narkoba.</li>
          </ol>
        </div>
      </div>
    </div>
</div>
</div>
</div>


<div class="container mt-5">
<div class="justify-content-center">
  <div class="col-lg-12 col-md-12 mb-4"
   data-aos="zoom-out-left"
   data-aos-easing="linear" 
   data-aos-duration="2000">
   <div class="card-body shadow-lg">
      <div class="card-title pt-2 text-center">Persyaratan Berdasarkan UUD</div>
         <div class="card-text">
            <p class="lh-sm"><b>Pasal 6</b> calon peserta didik baru kelas 10 (sepuluh) SMA harus memenuhi persyaratan :</p>
              <ol class="list">
               <li>Berusia paling tinggi 21 tahun pada tanggal 1 juli.</li>
              <li>Telah menyelesaikan kelas 9 SMP atau bentuk lain sederajat.</li>
            </ol>
          <p class="lh-sm"><b>Pasal 7</b> Persyaratan usia harus dibuktikan dengan :</p>
        <ol class="list">
      <li>Akta kelahiran; atau</li>
    <li>Surat keterangan lahir yang dikeluarkan oleh pihak yang berwenang dan dilegalisir oleh lurah/kepala desa atau pejabat setempat lain yang berwenang sesuai domisili calon peserta.</li>
  </ol>
    <p class="lh-sm"> <b>Pasal 8</b> Persyaratan bukti kelulusan sebagaimana yang dimaksud harus dibuktikan dengan :</p>
      <ol class="list">
        <li>ijazah; atau</li>
        <li>dokumen lain yang menyatakan kelulusan.</li>
          </ol>
            </div>
              </div>
                </div>
                  </div>
              </div>
          </div>
</section>
<!-- persyaratan -->

<!-- jalur pendaftaran -->
<section id="Jalur">
  <div class="container mt-5"  
      data-aos="zoom-out-up"
      data-aos-easing="linear" 
      data-aos-duration="2000">
    <!-- header=====> -->
    <header class="text-center">
      <h3 class="h3">Jalur Pendaftaran PPDB 2021/2022</h3>
    </header>
    <!-- header=====> -->
    <div class="justify-content-center">
      <div class="col-lg-12 col-md-12 mb-4">
        <div class="card-body shadow-lg">
          <div class="card-title pt-2">Pendaftaran PPDB dilaksanakan melalui jalur sebagai berikut :</div>
          <div class="card-text">
            <ol class="list">
              <li>Zonasi.</li>
              <li>Afirmasi.</li>
              <li>Perpindahan tugas orang tua/wali.</li>
              <li>Prestasi.</li>
            </ol>
            
          </div>
        </div>
        
      </div>
    </div>

  </div>
</section>
<!-- jalur pendaftaran -->
<!-- kententuan pendaftaran -->

<section id="Ketentuan"> 
  <div class="container mt-5"
    data-aos="zoom-out-down"
      data-aos-easing="linear" 
      data-aos-duration="2000">
  <header> 
<h3 class="h3 text-center"> Ketentuan Pendaftaran Jalur PPDB </h3>
  </header> 
  <div class="justify-content-center">  
<div class="col-lg-12 col-md-12 mb-4">
      
  <div class="card-body shadow-lg"> 
<div class="card-text"> 
  <ol class="list"> 
 <li>Jalur zonasi sma paling sedikit 50% dari daya tampung sekolah</li>
 <li>Jalur afirmasi sebagaimana dimaksud dalam pasal 12 ayat (2) huruf b paling banyak  15% dari daya tampung sekolah</li>
 <li>Jalur perpindahan tugas orang tua/wali sebagaimana dimaksud dalam pasal 12 ayat (2) huruf c paling banyak  5% dari daya tampung sekolah</li>
  </ol>
</div>  
  </div>
 </div>
  </div>  
  </div>
</section>
<!-- <section>
  <div class="container mt-5"> -->
    <!-- header====> -->
    <!-- <header>
      <h3 class="h3">Ketentuan Jalur Pendaftaran PPDB</h3>
    </header> -->
    <!-- header====> -->
    <!-- <div class="justify-content-center">
      <div class="col-lg-12 col-md-12 mb-4">
        <di class="card-body shadow-lg">
          <div class="card-text">
            <ol class="list">
              <li>Jalur zonasi sma paling sedikit 50% dari daya tampung sekolah</li>
              <li>Jalur afirmasi sebagaimana dimaksud dalam pasal 12 ayat (2) huruf b paling banyak  15% dari daya tampung sekolah</li>
              <li>Jalur perpindahan tugas orang tua/wali sebagaimana dimaksud dalam pasal 12 ayat (2) huruf c paling banyak  5% dari daya tampung sekolah</li>
            </ol>
          </div>
      </div>
    </div>
  </di>
</div>
</section> -->
<!-- kententuan pendaftaran -->


<section id="Jadwal">
  <div class="container mt-5"
      data-aos="zoom-in"
      data-aos-easing="linear" 
      data-aos-duration="1000">
    <h2 class="h2 text-center mb-4"> Jadwal Kegiatan PPDB</h2>
    <table class="table table-hover table-secondary shadow-lg">
      <thead>
        <tr>
          <th>NO</th>
          <th>URAIAN KEGIATAN</th>
          <th>TANGGAL</th>
          <th>JAM</th>
          <th>TEMPAT</th>
          <th>KETERANGAN</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Pengambilan Pin/Tes Kesehatan</td>
        <td>Mei-Juni 2021</td>
        <td>Jam kerja</td>
        <td>SMA</td>
        <td>Offline</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Pendaftaran</td>
        <td>Mei-Juni 2021</td>
        <td>Jam kerja</td>
        <td>Internet</td>
        <td>Online</td>
      </tr>
      </tr>
      <tr>
        <td>3.</td>
        <td>Vertifikasi dan Validasi</td>
        <td>Juni 2021</td>
        <td>Jam kerja</td>
        <td>Internet</td>
        <td>Online</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Pengumuman Hasil PPDB</td>
        <td>Mei-Juni 2021</td>
        <td>01.00 WIB</td>
        <td>Internet</td>
        <td>Online</td>
      </tr>
       <tr>
        <td>5.</td>
        <td>Daftar Ulang PPDB</td>
        <td>Juni 2021</td>
        <td>08.00 - 15.00 WIB</td>
        <td>Internet</td>
        <td>Online</td>
      </tr>
        
    </tbody>
      </table>
  </div>
</section>
<!-- tabel jadwal -->

</main>

<!-- end main -->


<!-- https://www.tipssehatcantik.com/jadwal-syarat-dan-cara-pendaftaran-ppdb-sma-smk-2020 -->

    







    



    <!-- footer -->
  <section id="Contact">
  <div class="container-fluid bg-primary mt-5">


    <div class="container">
      <div class="row align-items-center py-3">
        <div class="col-6">
           <img src= {{ asset ('image/Landak.png')}} class="img-fluid">
        </div>

        <div class="col-6 offsite-3">
          <h3 class="h3">Peta Sekolah</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.635656437928!2d109.37373141437394!3d0.5482631996000089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2d8204925eea3%3A0x4bc0d9af925ab756!2sSMA%20NEGERI%201%20MEMPAWAH%20HULU!5e0!3m2!1sid!2sid!4v1620909503906!5m2!1sid!2sid" width="450" height="200" style="border:0;" allowfullscreen></iframe>
        </div>
        </div>





        <div class="row py-3">

          <div class="col-3 footer-contact">
          <h3 class="h3">Hubungi Kami</h3>
          <p class="text-sm">Jalan Raya Karangan <br>
          Desa Karangan <br>
          Kabupaten Landak <br>
          Contact Center 0-8969-1819-664 <br>
          Malayani mulai <br>
          Jam 08.00 s/d 15.00 WIB

          </p>
          </div>

          <div class="col-3">
          <h3 class="h3">Framework</h3>
          <p class="text-sm">
            <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a><br>
            <a href="https://greensock.com/gsap/" target="_blank">GreenSock</a><br>
            <a href="https://laravel.com/" target="_blank">Laravel</a><br>
          </p>
          </div>

          <div class="col-3">
          <h3 class="h3">Library</h3>
          <p class="text-sm">
            <a href="https://michalsnik.github.io/aos/" target="_blank">Animate On Scroll Library</a><br>
          </p>
          </div>
        
        
          <div class="col-3">
          <h3 class="h3">Developer</h3>
          <p class="text-sm">Muhammad Raihan</p>
          </div>
          
        </div>

        <div class="row">
          <div class="col-12">
           <p class="text-sm text-center">©2021 PPDB online | Kabupaten Landak</p>
          </div>
        </div>
      </div>
    </div>




  </section>
    <!-- end footer -->



<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
 </script>
<!-- aos -->

<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<!-- js -->
</body>
</html>