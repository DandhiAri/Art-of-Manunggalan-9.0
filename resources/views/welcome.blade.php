<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>E-Ticket | ART of MANUNGGALAN 2023</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <meta name="theme-color" content="#ffffff"> --}}


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{url('assets/landing/assets/css/theme.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
  </head>


  <body>
    <div id="loading-page">
      <img src="img/loading.gif" alt="">
    </div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/">Art of Manunggalan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0"  id="navbarSupportedContent">
            <div class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <div class="nav-item px-2">
                <a class="font nav-link" aria-current="page" href="#">Home</a>
              </div>
              <div class="nav-item px-2">
                <a class="font nav-link" href="#sponsorship">Sponsorhip</a>
              </div>
              <div class="nav-item px-2">
                <a class="font btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" style="border-color:#0ff; " href="{{route('login')}}">Login</a>
              </div>
            </div>
            {{-- <ul style="list-style: none;" class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#sponsorship">Sponsorhip</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{route('login')}}">Login</a> --}}
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-bannerhero">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{url('assets/landing/assets/img/gallery/hero.png')}}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="font fw-light fs-6 fs-xxl-7">Coming Soon Art Of Manunggalan 9.0</h1>
              <p class="fs-1 mb-5">Dimeriahkan dengan penampilan artis spesial, bazar makanan dan minuman, aksesoris, photobooth, dan hiburan lain-nya</p>
              <div class="register">
                <div class="countdown">
                  <div class="days">00</div>
                  <div class="divider">:</div>
                  <div class="hours">00</div>
                  <div class="divider">:</div>
                  <div class="minutes">00</div>
                  <div class="divider">:</div>
                  <div class="seconds">00</div>
                </div>
                <a class="btn btn-lg btn-primary rounded-pill" href="{{route('register')}}" role="button">Daftar Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="sponsorship">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" >
              </div>
              <!--/.bg-holder-->

              <h1 class="font text-center">Sponsorship</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            @if($sponsorships->count()<0)
              @foreach ($sponsorships as $item)
                  <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                    <div class="d-flex flex-column align-items-center">
                      <div class="icon-box text-center">
                        <a class="text-decoration-none" href="#!">
                          <img class="mb-3 deparment-icon" src="{{url($item->logo)}}" alt="..." height="50px" />
                          <img class="mb-3 deparment-icon-hover" src="{{url($item->logo)}}" alt="..." height="55px" />
                          <p class="fs-1 fs-xxl-2 text-center">{{$item->name}}</p>
                        </a>
                      </div>
                    </div>
                  </div>
              @endforeach
            @else
              <div class="sponsor">
                <h3 class="font">Buka untuk Sponsorship</h3>
                <P class="py-0 font">Hubungi Nomor Dibawah ini</P>
                <p>Nama : +62123456789</p>
              </div>
            @endif
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section id="location">
        <div class="sec-title">
          <h1 class="font">Lokasi Kami</h1>
        </div>
        <div class="location-content">
          <div class="address">
            <h4 class="font">
              Gedung Jurusan Teknologi Infomasi, Politeknik Negeri Jember
            </h4>
            <p style="padding : 10px 0">
              Jl. Mastrip No.164, Lingkungan Panji, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121
            </p>
            <p>
              Jember, Jawa Timur, Indonesia
            </p>
          </div>
          <div class="map">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=gedung jurusan TI politeknik negeri jember&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-footer">

          <div class="container footer py-3">
            <div class="col sosmed">
              <a href="https://www.youtube.com/@campingwithsteve">
                <img class="img-footer" src="/img/logo/sosmed/1.jpg" alt="">
                <p>@hmjti</p>
              </a>
              <a href="">
                <img class="img-footer" src="/img/logo/sosmed/1.jpg" alt="">
                <p>@aom</p>
              </a>
              <a href="">
                <img class="img-footer" src="/img/logo/sosmed/tiktok.jpg" alt="">
                <p>@hmjti</p>
              </a>
              <a href="">
                <img class="img-footer" src="/img/logo/sosmed/yt.jpg" alt="">
                <p>@hmjti</p>
              </a>
            </div>
            <div class="col text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Art of Manunggalan, 2023</p>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{url('assets/landing/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{url('assets/landing/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/landing/vendors/is/is.min.js')}}"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{url('assets/landing/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{url('assets/landing/assets/js/theme.js')}}"></script>
    <script>
      const targetDate = new Date("2023-06-31T00:00:00");
  
      function countdown() {
      const now = new Date().getTime();
      const timeDifference = targetDate - now;
  
      if (timeDifference <= 0) {
          // Countdown is complete
          displayCountdown(0, 0, 0, 0);
          return;
      }
  
      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
  
      displayCountdown(days, hours, minutes, seconds);
      }
  
      function displayCountdown(days, hours, minutes, seconds) {
      const daysElement = document.querySelector('.days');
      const hoursElement = document.querySelector('.hours');
      const minutesElement = document.querySelector('.minutes');
      const secondsElement = document.querySelector('.seconds');
  
      const formattedDays = padZero(days);
      const formattedHours = padZero(hours);
      const formattedMinutes = padZero(minutes);
      const formattedSeconds = padZero(seconds);
  
      daysElement.textContent = formattedDays;
      hoursElement.textContent = formattedHours;
      minutesElement.textContent = formattedMinutes;
      secondsElement.textContent = formattedSeconds;
      }
  
      function padZero(number) {
      return number.toString().padStart(2, '0');
      }
  
      // Start the countdown
      setInterval(countdown, 1000);

      //loading page
      window.addEventListener('load', function() {
        const loadingPage = document.getElementById('loading-page');
        const content = document.getElementById('top');

        setTimeout(function() {
            loadingPage.classList.add('finish');
            setTimeout(function() {
                loadingPage.style.display = 'none';
                content.classList.remove('hidden');
            }, 1000);
        }, 2000);
      });
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>