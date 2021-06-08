<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- bosstrap -->




    <style type="text/css">


.box {
    margin: 200px auto;
    width: 600px;
    padding: 10px;
    border:1px solid #ccc;
    border-radius: 10px;
}
.container {
    margin-top: -150px;
}
.row a{
        text-decoration: none;
        color: #000;
      }
      .row a:hover{
        text-decoration: underline;
        color: #00008B;
      }
      
    </style>
  <title> @yield('title')</title>
</head>
<body>
 <div class="container">
  
<section>
 <main>
 
@yield('container')
    <!-- <div class="container">
       <div class="box shadow-lg ">

      <div class="justify-content-center">
        <div class="card-body">
          
             <img src={{asset ('image/portal.svg')}} class="img-fluid" alt="image">

          <hr>
          <div class="row">
            <div class="col-6 offset-4" >
              <a href="login.php" target="_blank"><button type="button" class="btn btn-outline-primary btn-lg p-2" >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
               Siswa
              </button></a>

              <a href="login_admin.php" target="_blank"><button type="button" class="btn btn-outline-secondary btn-lg p-2" >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
              </svg>
               Admin
              </button></a>
              </div>

            
          </div>
        </div>
      </div>
    </div>
  </div> -->


  
 </main>
</section>



  
 <!-- footer -->
  <section id="Contact">
  <div class="container-fluid mt-5">


    <div class="container">
      <div class="row align-items-center py-3">
        <div class="col-6">
           <img src= {{asset ('image/Landak.png')}} class="img-fluid">
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







<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script>
gsap.from('.box', {duration: 1, y: -100, opacity: 0, ease:'bounce'});
</script>
<!-- end GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>