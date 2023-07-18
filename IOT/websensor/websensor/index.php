<?php
  require("koneksi1.php"); // memanggil file koneksi.php untuk koneksi ke database

  include "koneksi1.php";

  $sql = mysqli_query($koneksi1, "SELECT * FROM sensorsoil");
  $data = mysqli_fetch_array($sql);

  // Get Status Relay
  $relay = $data['relay'];
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

  <!-- JavaScript Start -->
    <script type="text/javascript" >
      
      // Pembacaan Data Sensor
      $(document).ready(function() {
        setInterval(function() {
         $("#ceksensor").load('write_data1.php'); 
         $("#keterangan").load('keterangan.php'); 
        }, 1000);
      });

      // Waktu
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
      
      // Relay
      function ubahstatus(value) {
        var statusText = value ? "ON" : "OFF";
        document.getElementById('status').innerHTML = statusText;

        // Mengirim permintaan ke relay.php
        var xmlhttp = new XMLHttpRequest();

        // Perubahan Saat Menekan Button ke Database
        xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('status').innerHTML = xmlhttp.responseText;
          }
        }
        xmlhttp.open("GET", "relay.php?stat=" + (value ? "ON" : "OFF"), true);
        xmlhttp.send();
      }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"/>

  <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  
  <!-- My Style -->
  <link rel="stylesheet" href="css/styles.css">

  <style>
    #ceksensor, #clock, #keterangan{
    color: #010101;
    background-color: #0CFF00;
    text-align: center;
    border-radius: 3px;
    font-weight: 700;
    font-size: 2rem;
  }

  footer{
    background-color: var(--primary);
    text-align: center;
    padding: 1rem 0 3rem;
    margin-top: 4rem;
  }

  @media (max-width: 450px) {
    html {
      font-size: 55%;
    }
    .dashboard .row{
      flex-wrap: wrap;
      
    }
    .team .row{
      flex-wrap: wrap;
    }
  }
  </style>

  
  </head>
  <body>
<!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Technology <span>IOT</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#team">Team</a>
        <a href="#about">About</a>
        <a href="#dashboard">Device</a>
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
        <a href="#dashboard" class="cta">Device Realtime</a>
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
      <h2>De<span>vice</span></h2>
      <p>Memantau Kondisi Tanaman Lebih Mudah</p>
      <div class="row">
        <div class="dashboard-card">
          <img src="img/gauge.png" alt="">
          <h3 class="data">- Sensor Moisture Soil -</h3>
          <p><center><table width="150" height="50" border="1">
          <tr ><td id="ceksensor"></td></tr>
          <tr></tr>
          <tr></tr>
          <tr ><td id="keterangan"></td></tr>
          </table></center></p>
        </div>
        
        <div class="dashboard-button">
          <img src="img/button.png" alt="">
          <h3 class="data">- Button -</h3>
          <div class="switch">
            <input type="checkbox" id="toggle" 
            class="toggle-input" onchange="ubahstatus(this.checked)" 
            <?php if($relay == 0) echo "checked"; ?> >
            <label for="toggle" class="toggle-label"></label>
          </div>
          <h1 id="status"><?php if($relay == 0) echo "ON"; else echo "OFF"; ?></h1>
        </div>

        <div class="dashboard-card">
          <img src="img/time.png" alt="">
          <h3 class="data">- Time -</h3>
          <p><center><table width="150" height="50" border="1">
              <tr><td id="clock"></td></tr>
          </table></center></p>
        </div>
      </div>
    </section>
  <!-- Dashboard Section End -->

  <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
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
