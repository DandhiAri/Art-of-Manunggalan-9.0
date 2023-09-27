@extends('layouts.landing-layout')
@section('content')
<div class="isi">
    <div class="banner-hero">
        {{-- <img src="/img/aom-banner1.png" alt=""> --}}
        <div class="banner-hero-title">
            <h2>Art Of Manunggalan 9.0</h2>
            <p>Event Created By Himpunan Jurusan Teknologi Informasi</p>
        </div>
        <div class="banner-hero-desc">
            <h2>Sabtu, 18 November 2023</h2>
            <h2>Halaman GOR Perjoeangan 45 Polije</h2>
        </div>
    
        <div class="register">
            <div class="countdown">
              <div class="days">00</div>
              <div class="divider">Hari</div>
              <div class="hours">00</div>
              <div class="divider">jam</div>
              <div class="minutes">00</div>
              <div class="divider">Menit</div>
              <div class="seconds">00</div>
              <div class="divider">Detik</div>
            </div>
            <a class="btn-register reverse-hover-animate" href="{{route('register')}}" role="button">Daftar Sekarang</a>
        </div>
    </div>
    <div class="single-container guests">
        <div class="guest-container-title">
            Top GuestStar
        </div>
        <div class="guest-list TS">
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                   ?
                </div>
            </div>
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                   ?
                    
                </div>
            </div>
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                   ?
                    
                </div>
            </div>
        </div>
        <div class="guest-container-title" style="margin-top:15px">
            Line Up
        </div>
        <div class="guest-list LU">
            <div class="guest">
                <img src="/img/GS/LINE UP/sunday-groove-new.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                    Sunday Groove
                    
                </div>
            </div>
            <div class="guest">
                <img src="/img/GS/LINE UP/victory-band.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                    Victory Band
                </div>
            </div>
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                    ?
                    
                </div>
            </div>
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                   ?
                    
                </div>
            </div>
            <div class="guest">
                <img src="/img/question-mark.jpg" class="guest-img hover-animate" alt="">
                <div class="guest-name">
                   ?
                    
                </div>
            </div>
        </div>
    </div>
    <div class="single-container events" id="event">
        <div class="guest-container-title">
            Events
        </div>
        <div class="carousel-container">
            <div class="event-list" id="carousel">
                <div class="event hover-animate">
                    <div class="event-title"> 
                        Pre-Sale 1
                    </div>
                    <div class="direct-event">
                        Baca Selengkapnnya.....
                    </div>
                </div>
                <div class="event hover-animate">
                    {{-- <img src="/img/default-pfp.jpg" class="guest-img hover-animate" alt=""> --}}
                    <div class="event-title"> 
                        Calling All F&B Tenant
                    </div>
                    <div class="direct-event">
                        Baca Selengkapnnya.....
                    </div>
                </div>
                <div class="event hover-animate">
                    {{-- <img src="/img/default-pfp.jpg" class="guest-img hover-animate" alt=""> --}}
                    <div class="event-title"> 
                        AOM GOT TALENT
                    </div>
                    <div class="direct-event">
                        Baca Selengkapnnya.....
                    </div>
                </div>
                <div class="event hover-animate">
                    {{-- <img src="/img/default-pfp.jpg" class="guest-img hover-animate" alt=""> --}}
                    <div class="event-title"> 
                        Pre-Sale 2
                    </div>
                    <div class="direct-event">
                        Baca Selengkapnnya.....
                    </div>
                </div>
                <div class="event hover-animate">
                    {{-- <img src="/img/default-pfp.jpg" class="guest-img hover-animate" alt=""> --}}
                    <div class="event-title"> 
                        On-The-Spot
                    </div>
                    <div class="direct-event">
                        Baca Selengkapnnya.....
                    </div>
                </div>
                {{-- <div class="event hover-animate">
                    <div class="event-title"> 
                        Pre-Sale 1
                    </div>
                    <div class="direct-event">
                        Link Selanjut-nya....
                    </div>
                </div> --}}
            </div>
            {{-- <button id="prevBtn">Previous</button>
            <button id="nextBtn">Next</button> --}}
        </div>
    </div>
    <div class="single-container sponsorship">
        <div class="sponsor-container">
            <div class="sponsor-title">
                Event Made By
            </div>
            <center>
                <img src="/img/logo/hmjti-logo.png" class="hmjti-img" alt="hmtji-logo">
            </center>
        </div>
        <div class="sponsor-container">
            <div class="sponsor-title">
                Sponsored By
            </div>
            <div class="sponsor-list">
                @if($sponsorships->count()<0)
                    @foreach ($sponsorships as $item)
                        <div class="sponsor-content">
                            <img src="/img/question-mark-foto.png" class="sponsor-image" alt="">
                            <div class="name">
                                long-sponsor-name
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="sponsor">
                    <h3 class="font">Buka untuk Sponsorship</h3>
                    <P class="py-0 font">Hubungi Nomor Dibawah ini</P>
                    <b>Firzy : +62123456789</b> 
                    </div>
                @endif
            </div>
        </div>
        <div class="sponsor-container">
            <div class="sponsor-title">
                Media Partner By
            </div>
            <div class="sponsor-list">
                @if($sponsorships->count()<0)
                    @foreach ($sponsorships as $item)
                        <div class="sponsor-content">
                            <img src="/img/question-mark-foto.png" class="sponsor-image" alt="">
                            <div class="name">
                                long-sponsor-name
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="sponsor">
                    <h3 class="font">Buka untuk Media Partner</h3>
                    <P class="py-0 font" st>Hubungi Nomor Dibawah ini</P>
                    <b>Firzy : +62123456789</b>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="single-container identitas">
        <div class="sponsor-container bisque">
            <div class="sponsor-title">
                Map Details
            </div>
            <div class="content">
                <div class="map">
                    <div class="mapouter">
                      <div class="gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=gedung jurusan TI politeknik negeri jember&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsor-container bisque">
            <div class="sponsor-title ">
                Lokasi
            </div>
            <div class="alamat-content">
                <img src="/img/lokasi-icon.svg" width="35px" alt="">
                <p>
                    Jl. Mastrip No.164, Lingkungan Panji, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia
                </p>
            </div>
            <div class="alamat-content" style="margin-top: -13px;">
                <img src="/img/gedung-icon.svg" width="35px" alt="">
                <p>
                    Gedung Jurusan Teknologi Informasi, Politeknik Negeri Jember
                </p>
            </div>
        </div>
        <div class="sponsor-container bisque">
            <div class="sponsor-title">
                Social Media
            </div>
            <div class="sosmed-content">
                <a href="https://www.instagram.com/aom.jti/" class="hover-animate sosmeds">
                    <img class="" src="/img/logo/sosmed/1.jpg" alt="">
                    <p>@Art Of Manunggalan</p>
                </a>
                <a href="https://www.instagram.com/hmjti_polije/" class="hover-animate sosmeds">
                    <img class="" src="/img/logo/sosmed/1.jpg" alt="">
                    <p>@HMJTI</p>
                </a>
                {{-- <a href="https://www.instagram.com/bog3ng22/" class="hover-animate sosmeds">
                    <img class="" src="/img/logo/sosmed/1.jpg" alt="">
                    <p>@me</p>
                </a> --}}
                <a href="https://www.tiktok.com/@hmjti_polije" class="hover-animate sosmeds">
                    <img class="" src="/img/logo/sosmed/tiktok.jpg" alt="">
                    <p>@HMJTI</p>
                </a>
                
                <a href="https://www.youtube.com/c/HMJTI_Polije" class="hover-animate sosmeds">
                    <img class="" src="/img/logo/sosmed/yt.jpg" alt="">
                    <p>@HMJTI</p>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
