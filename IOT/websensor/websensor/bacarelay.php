<?php
  include "koneksi1.php";

  $sql = mysqli_query($koneksi1, "SELECT * FROM sensorsoil");
  $data = mysqli_fetch_array($sql);

  // Get Status Relay
  $relay = $data['relay'];

  // Reponse Balik Ke ESP32
  echo $relay;
?>