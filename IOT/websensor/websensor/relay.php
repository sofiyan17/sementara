<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sensor_db";
 
    $koneksi1 = mysqli_connect("$servername", "$username", "$password","$dbname");

    // Get Paramater
    $stat = $_GET['stat'];

    if ($stat == "ON") {
        // Update Field relay pada Database ke 0 untuk Mengaktifkan Relay
        mysqli_query($koneksi1, "UPDATE sensorsoil SET relay=0");
        // Respon ON Saat Button di Tekan
        echo "ON";
    } else {
        // Update Field relay pada Database ke 1 untuk Menonaktifkan Relay
        mysqli_query($koneksi1, "UPDATE sensorsoil SET relay=1");
        // Respon OFF Saat Button di Tekan
        echo "OFF";
    }
?>