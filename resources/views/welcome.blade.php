<!DOCTYPE html>
<!-- Coding by Kangjadi || www.kangjadi.com -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deteksi Penyakit Kucing </title>
    <link rel="stylesheet" href="{{asset('backend/dist/css/style.css')}}" />
    <script src="../custom-scripts.js" defer></script>
  </head>
  <body>
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"><a href="#">Kucing Begal</a></h2>

          <ul class="menu_items">
            <img src="{{ asset('backend/dist/img/images/times.svg')}}" alt="timesicon" id="menu_toggle" />
            <li><a href="https://kucingbegal.com" class="nav_link">Home</a></li>
            <li><a href="https://kucingbegal.com" class="nav_link">About</a></li>
            <li><a href="https://kucingbegal.com" class="nav_link">Contact</a></li>
            <li><a href="{{ route('register') }}" class="nav_link">Register</a></li>
            <li><a href="{{ route('login') }}" class="nav_link">Login</a></li>
          </ul>
          <img src="{{ asset('backend/dist/img/images/bars.svg')}}" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <!-- Header End -->

      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>Top free tool <br />Deteksi Penyakit Kucing Nomor #1</h2>
            <p>Tersedia juga cetak riwayat deteksi dan konsultasi</p>
            <div class="buttons">
              <button href="{{ route('register') }}" class="btn">Register</button>
              <button href="{{ route('login') }}" class="btn">Login</button>
            </div>
            </div>
          <div class="column">
            <img src="{{ asset('backend/dist/img/images/hero1.png')}}" alt="heroImg" class="hero_img" />
          </div>
        </div>
        <img src="{{ asset('backend/dist/img/images/bg-bottom-hero.png')}}" alt="" class="curveImg" />
      </section>
      <!-- Hero End-->
    </main>

    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>
