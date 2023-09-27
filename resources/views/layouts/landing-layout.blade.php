<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Art of Manunggalan 9.0 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-landing.css">
    <link rel="stylesheet" href="css/responsive-landing.css">
</head>
<body>
    <div class="loading-overlay">
        <div class="loader">
            <img src="/img/loading-new.gif" alt="loading">
        </div>
    </div>
    <nav>
        {{-- <img src="" class="icon-logo"> --}}
        <a href="/" class="nav-logo">Art of Manunggalan 9.0</a>
        <img class="nav-sideicon" src="/img/logo/sidemenuicon.svg" alt="">
        <div class="nav-menulist">
            <div class="nav-menu hover-underline">
                <a href="#event">Event</a>
            </div>
            <div class="nav-menu hover-underline">
                <a href="#about">About</a>
            </div>
            @auth
            {{-- <div class="login-button reverse-hover-animate">
                <a href="login">Check</a>
            </div> --}}
            <div class="login-button reverse-hover-animate">
                <a href="login">{{ auth()->user()->name }}</a>
            </div>
            <div class="login-button reverse-hover-animate">
                <a href="{{ route('logout') }}">Logout</a>
            </div>
            @else
            <div class="login-button reverse-hover-animate">
                <a href="login">login</a>
            </div>
            @endauth
        </div>
    </nav>
    @yield('content')
    {{-- <section id="content">
        <div class=" content-section">
            <div class="left-container payments">
                <div class="sub-title hover-underline" id="payment">
                    3-WAY Payment
                </div>
                <div class="payment-list">
                    <div class="payment">
                        <img src="/img/logo/ticket-logo.png" alt="" srcset="">
                        <h3>Pre-Sale 1</h3>
                        <h4 style="display: flex;">Status : <div style="color: green; margin-left:5px;">Ongoing...</div></h4>
                    </div>
                    <div class="payment">
                        <img src="/img/logo/ticket-logo.png" alt="" srcset="">
                        <h3>Pre-Sale 2</h3>
                        <h4 style="display: flex;">Status : <div style="color: red; margin-left:5px;">Coming Soon..</div></h4>
                    </div>
                    <div class="payment">
                        <img src="/img/logo/handshake-logo.png" alt="" srcset="">
                        <h3>On-The-Spot</h3>
                        <h4 style="display: flex;">Status : <div style="color: green; margin-left:5px;">Ongoing...</div></h4>
                    </div>
                </div>
            </div>
            <div class="left-container medpart">
                <div id="sponsorship" class="sub-title hover-underline">
                    Media Partner
                </div>
                <div class="sponsorlist">
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-medpart-name
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-container sponsors">
                <div id="sponsorship" class="sub-title hover-underline">
                    Sponsorship
                </div>
                <div class="sponsorlist">
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                    <div class="sponsor container">
                        <img src="/img/default-spr.jpg" class="sponsor-image" alt="">
                        <div class="sponsor-title">
                            long-sponsor-name
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section side-sticky">
            <div id="lokasi" class="side-content">
                <h3 class="outside-title">Map</h3>
                
            </div>
            <div id="alamat" class="side-content">
                <h3 class="outside-title">Location</h3>
                
            </div>
            <div id="sosmed" class="side-content">
                <h3 class="outside-title">Follow Us!</h3>
                
            </div>
        </div>
    </section> --}}

    <div class="border">
    </div>
    <footer>
        Made Ⓒ Himpunan Mahasiswa Jurusan Teknologi Informasi, Politeknik Negeri Jember 2023
    </footer>
    <script>
        window.addEventListener('load', function () {
            // When the page is fully loaded, hide the loading overlay and show the content
            const loadingOverlay = document.querySelector('.loading-overlay');
            const content = document.querySelector('.content');
            // const timerElement = document.querySelector('.timer');
            let timerCount = 5; // Initial countdown time in seconds

            setTimeout(function () {
                // Hide the loading overlay and show the content
                loadingOverlay.style.display = 'none';
                content.style.display = 'block';
            }, 3000);
            // loadingOverlay.style.display = 'none';
            // content.style.display = 'block';
            // setTimeout(updateTimer, 3000); // Update the timer every 1 second
        
            // function updateTimer() {
            //     timerCount--;

            //     if (timerCount === 0) {
            //     // Hide the loading overlay and show the content when the timer reaches 0
            //     loadingOverlay.style.display = 'none';
            //     content.style.display = 'block';
            //     } else {
            //     // Update the timer display
            //     timerElement.textContent = timerCount;
            //     }
            // }
            // updateTimer();
        });
        const targetDate = new Date("2023-11-14T00:00:00");
    
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
</body>
</html>
