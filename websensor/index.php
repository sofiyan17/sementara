<?php
  require("koneksi1.php"); // memanggil file koneksi.php untuk koneksi ke database
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <!-- Require Data Realtime -->
    <script type="text/javascript" src="jquery/jquery.min.js" ></script>
    
    <title>Project IOT</title>

  <!-- Pemanggilan Data Sensor Realtime Start -->
    <script type="text/javascript" >
      $(document).ready(function() {
        setInterval(function() {
         $("#ceksensor").load('write_data1.php'); 
        }, 1000);
      });
    </script>
  <!-- Pemanggilan Data Sensor Realtime End-->

  <!-- JavaScript Current Time Start -->
    <script type="text/javascript">
      function updateClock() {
        var now = new Date();
        var clock = document.getElementById("clock");

        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Tambahkan angka 0 jika angka jam, menit, atau detik kurang dari 10
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        var currentTime = hours + ":" + minutes + ":" + seconds;

        clock.innerText = currentTime;
      }
      // Panggil fungsi updateClock setiap detik (1000 milidetik)
      setInterval(updateClock, 1000);
    </script>
  <!-- JavaScript Current Time End -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"/>

  <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  <!-- Icons End -->

  <!-- My Style Start-->
    <style>
      :root {
        --primary: #00fc22f5;
        --bg: #010101;
        --yellow: #e5ff00;

      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
      }

      html{
        scroll-behavior: smooth;
      }

      body {
        font-family: "Poppins", sans-serif;
        background-color: var(--bg);
        color: #fff;
        /* min-height: 3000px; */
        
      }

      /* Navbar */
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: #000;
        border-bottom: 1px solid #00fc22f5;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
      }

      .navbar .navbar-logo {
        font-size: 2rem;
        font-weight: 700;
        font-style: italic;
        color: #fff;
      }

      .navbar .navbar-logo span {
        color: var(--primary);
      }

      .navbar .navbar-nav a {
        color: #fff;
        font-weight: 700;
        display: inline-block;
        font-size: 1.3rem;
        margin: 0 1rem;
      }

      .navbar .navbar-nav a:hover {
        color: var(--yellow);
      }

      .navbar .navbar-nav a::after {
        content: "";
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid var(--primary);
        transform: scaleX(0);
        transition: 0.2s linear;
      }

      .navbar .navbar-nav a:hover::after {
        transform: scaleX(0.5);
      }

      .navbar .navbar-extra a {
        color: #fff;
        margin: 0, 0, 5rem;
        padding: 1rem;
      }

      .navbar .navbar-extra a:hover {
        color: var(--primary);
      }

      #iot-menu {
        display: none;
      }

      /* Hero Section */
      .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url(img/header.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
      }

      .hero::after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 30%;
        bottom: 0;
        background: linear-gradient(
          0deg,
          rgba(1, 1, 3, 1) 8%,
          rgba(255, 255, 255, 0) 50%
        );
      }

      .hero .content {
        padding: 1.4rem 7%;
        max-width: 60rem;
      }

      .hero .content h1 {
        font-size: 4em;
        color: #fff;
        text-shadow: 5px 5px 5px rgba(255, 238, 0, 0.959);
        line-height: 1.2;
      }

      .hero .content h1 span {
        color: var(--primary);
      }

      .hero .content p {
        font-size: 1.6rem;
        margin-top: 1rem;
        color: #fff;
        line-height: 1.4;
        font-weight: 500;
        text-shadow: 1px 1px 3px rgba(1, 1, 3);
      }

      .hero .content .cta {
        margin-top: 1rem;
        display: inline-block;
        padding: 1rem 3rem;
        font-size: 1.4rem;
        color: #fff;
        background-color: var(--primary);
        border-radius: 0.5rem;
        box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
      }

      /* About Section */
      .about,
      .dashboard,
      .team,
      .contact {
        padding: 8rem 7% 1.4rem;
      }

      .about h2, 
      .dashboard h2,
      .team h2,
      .contact h2 {
        text-align: center;
        font-size: 2.6rem;
        margin-bottom: 3rem;
        text-shadow: 2px 2px 3px rgba(255, 238, 0, 0.959);
      }

      .about h2 span,
      .dashboard h2 span,
      .team h2 span,
      .contact h2 span {
        color: var(--primary);
      }

      .about .row{
        display: flex;
      }

      .about .row .about-img{
        flex: 1 1 45rem;
      }

      .about .row .about-img img{
        width: 100%;
      }

      .about .row .content{
        flex: 1 1 35rem;
        padding: 0 1rem;
      }

      .about .row .content h3{
        font-size: 1.8rem;
        margin-bottom: 1rem;
      }

      .about .row .content p{
        margin-bottom: 0.8rem;
        text-align: justify;
        font-size: 1rem;
        font-weight: 100;
        line-height: 1.6;
      }

      /* Dashboard Section */
      .dashboard h2,
      .team h2,
      .contact h2{
        margin-bottom: 1rem;
      }

      .dashboard p,
      .contact p{
        text-align: center;
        max-width: 30rem;
        margin: auto;
        font-size: 1.3rem;
        font-weight: 400;
        line-height: 1.6;
      }

      .dashboard .row{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

      }

      .dashboard .row .dashboard-card{
        text-align: center;
      }

      .dashboard .row .dashboard-card img{
        width: 60%;
      }

      .dashboard .row .dashboard-card .data{
        margin: 0 auto 0.5rem;
      }

      #ceksensor, #clock{
        color: var(--bg);
        background-color: #0CFF00;
        text-align: center;
        font-weight: 700;
        font-size: 2rem;
      }

      /* Team Section */
      .team h3{
        text-align: center;
        max-width: 30rem;
        margin: auto;
        line-height: 1.6;
      }

      .team .row{
        display: flex;
        justify-content: center;

      }

      .team .row .team-card{
        text-align: center;
      }

      .team .row .team-card img{
        border-radius: 15%;
        margin-top: 2.6rem;
        width: 60%;
      }

      .team .row .team-card .name{
        margin: 1rem auto 0.5rem;
      }

      /* Contact Section */
      .contact .row{
        display: flex;
        margin-top: 2rem;
        background-color: var(--primary);
      }

      .contact .row .map{
        flex: 1 1 45rem;
        width: 50%;
        object-fit: cover;
      }

      .contact .row form{
        flex: 1 1 45rem;
        padding: 5rem 2rem;
        text-align: center;
      }

      .contact .row form .input-group{
        display: flex;
        align-items: center;
        margin-top: 2rem;
        background-color: var(--bg);
        border: 1px solid #eee;
        padding-left: 2rem;
      }

      .contact .row form .input-group input{
        width: 50%;
        padding: 2rem;
        font-size: 1.7rem;
        background: none;
        color: #fff;
      }

      .contact .row form .btn{
        margin-top: 3rem;
        display: inline-block;
        padding: 1rem 3rem;
        font-size: 1.7rem;
        color: #fff;
        background-color: var(--bg);
        cursor: pointer;
      }

      /* Footer */
      footer{
        background-color: var(--primary);
        text-align: center;
        padding: 1rem 0 3rem;
        margin-top: 3rem;
      }

      footer .socials{
        padding: 1rem 0;
      }

      footer .socials a{
        color: var(--bg);
        margin: 1rem;
      }

      footer .socials a:hover,
      footer .links a:hover{
        color: var(--yellow);
      }

      footer .links{
        margin-bottom: 1rem;
      }

      footer .links a{
        font-size: 1.4rem;
        color: #fff;
        font-weight: bold;
        padding: 0.7rem 1rem;
      }

      footer .credit{
        color: #fff;
        font-weight: 500;
        font-size: 1.4rem;
      }

      footer .credit a{
        color: var(--bg);
        font-weight: 700;
      }

      /* Media Queries */
      /* Laptop */
      @media (max-width: 1366px) {
        html {
          font-size: 75%;
        }
      }

      /* Tablet */
      @media (max-width: 768px) {
        html {
          font-size: 62.5%;
        }

        #iot-menu {
          display: inline-block;
        }

        .navbar .navbar-nav {
          position: absolute;
          top: 100%;
          right: -100%;
          background-color: var(--primary);
          width: 30rem;
          height: 100vh;
          transition: 0.5s;
        }

        .navbar .navbar-nav.active {
          right: 0;
          transition: 0.5s;
        }

        .navbar .navbar-nav a {
          color: #fff;
          display: block;
          margin: 1.5rem;
          padding: 0.5rem;
          font-size: 2rem;
        }

        .navbar .navbar-nav a::after {
          transform-origin: 0 0;
        }
        
        .navbar .navbar-nav a:hover::after {
          transform: scaleX(0.2);
        }

        .about .row{
          flex-wrap: wrap;
        }

        .about .row .about-img img{
          height: 24rem;
          object-fit: cover;
          object-position: center;
        }

        .about .row .content{
          padding: 0;
        }

        .about .row .content h3{
          margin-top: 1rem;
          font-size: 2rem;
        }

        .about .row .content p{
          font-size: 1.6rem;
        }
      
      }

      /* Mobile */
      @media (max-width: 450px) {
        html {
          font-size: 55%;
        }
      }
    </style>
  <!-- My Style End -->
  
  </head>
  <body>
<!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Technology <span>IOT</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#team">Team</a>
        <a href="#about">About</a>
        <a href="#dashboard">Dashboard</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="iot-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Penyiraman <span>Tanaman</span> Otomatis</h1>
        <p>
          Tanam, Lupakan, Panen: Solusi Penyiraman Tanaman Otomatis Berbasis IoT
        </p>
        <a href="#dashboard" class="cta">Dashboard Realtime</a>
      </main>
    </section>
  <!-- Hero Section End -->

  <!-- Team Section Start -->
    <section class="team" id="team">
      <h2>Te<span>am</span></h2>
      <h3>Program Studi Teknik Informatika</h3>
      <h3>Universitas Hamzanwadi</h3>

      <div class="row">
        <div class="team-card">
          <img src="img/A1.jpg" alt="">
          <div class="profil">
            <h3 class="name">KHAYATULLAH AL-AMIN</h3>
            <p>210602132</p>
            <p>TI-E</p>
          </div>
        </div>
        <div class="team-card">
          <img src="img/A2.jpg" alt="">
          <div class="profil">
            <h3 class="name">MUH. SOFIYAN</h3>
            <p>210602138</p>
            <p>TI-E</p>
          </div>
        </div>
        <div class="team-card">
          <img src="img/A3.png" alt="">
          <div class="profil">
            <h3 class="name">HENDRI</h3>
            <p>210602130</p>
            <p>TI-E</p>
          </div>
        </div>
      </div>
    </section>
  <!-- Team Section End -->
    
  <!-- About Section Start -->
    <section class="about" id="about">
      <h2>Tentang <span>Project</span></h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.png" alt="">
        </div>

        <div class="content">
          <h3>Penyiraman Tanaman Otomatis</h3>
          <p>
            Proyek penyiraman tanaman otomatis berbasis IoT adalah sistem yang dirancang untuk mengotomatisasi proses penyiraman tanaman dengan menggunakan teknologi Internet of Things (IoT). 
            Sistem ini mengintegrasikan sensor dan perangkat cerdas untuk memantau kondisi tanaman dan memberikan air secara otomatis berdasarkan kebutuhan tanaman.</p>
          <p>
            Dalam proyek ini, sensor-sensor seperti sensor kelembaban tanah, sensor suhu, dan sensor cahaya digunakan untuk mengumpulkan data penting tentang lingkungan tumbuh tanaman. 
            Data ini kemudian dikirim ke perangkat IoT, yang biasanya berupa mikrokontroler atau komputer kecil yang terhubung ke internet. 
            Perangkat IoT ini berfungsi sebagai otak sistem, menerima data dari sensor dan mengambil keputusan berdasarkan algoritma atau aturan yang telah ditentukan sebelumnya.</p>
          <p>
            Sistem penyiraman ini dapat menggunakan pompa air yang terhubung ke perangkat IoT. Ketika perangkat IoT memberikan perintah, pompa air akan menyala dan mengirim air ke tanaman sesuai dengan jumlah yang diperlukan.
          </p>
          <p>
            Dengan adanya proyek penyiraman tanaman otomatis berbasis IoT, pengguna dapat mengoptimalkan penggunaan air, menghindari pemborosan, dan secara efisien menjaga kondisi optimal tanaman
          </p>
          </div>
      </div>
    </section>
  <!-- About Section End -->

  <!-- Dashboard Section Start -->
    <section class="dashboard" id="dashboard">
      <h2>Dash<span>board</span></h2>
      <p>Memantau Kondisi Tanaman Lebih Mudah</p>
      <div class="row">
        <div class="dashboard-card">
          <img src="img/gauge.png" alt="">
          <h3 class="data">- Sensor Soil -</h3>
          <p><center><table width="150" height="50" border="1">
          <tr ><td id="ceksensor"></td></tr>
          </table></center></p>
        </div>

        <div class="dashboard-card">
          <img src="img/time.png" alt="">
          <h3 class="data">- Time -</h3>
          <p><center><table width="150" height="50" border="1">
              <tr ><td id="clock"></td></tr>
          </table></center></p>
        </div>
      </div>
    </section>
  <!-- Dashboard Section End -->

  <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2>Kontak <span>Kami</span></h2>
      <p>Hubungi kami dengan Mudah</p>
      <p>
        <div class="row">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.4413154728027!2d116.52299777408271!3d-8.649508987979154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4ebb32a87dcb%3A0xc527401028f9028f!2sFakultas%20Teknik%20Universitas%20Hamzanwadi!5e0!3m2!1sid!2sid!4v1686651158639!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <form action="">
            <div class="input-group">
              <i data-feather="user"></i>
              <input type="text" name="" placeholder="name">
            </div>
            <div class="input-group">
              <i data-feather="mail"></i>
              <input type="text" name="" placeholder="email">
            </div>
            <div class="input-group">
              <i data-feather="phone"></i>
              <input type="text" name="" placeholder="no phone">
            </div>
            <button type="submit" class="btn">send message</button>
          </form>
        </div>
      </p>
    </section>
  <!-- Contact Section Start -->

  <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#team">Team</a>
        <a href="#about">About</a>
        <a href="#dashboard">Dashboard</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">TI-E</a> &copy; 2023.</p>
      </div>
    </footer>
  <!-- Footer End -->

  <!-- Icons -->
    <script>
      feather.replace();
    </script>
  <!-- End Icons -->

  <!-- My Java Script -->
    <script src="js/script.js"></script>
  </body>
</html>
