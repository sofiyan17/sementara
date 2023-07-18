<?php

    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sensor_db";
    
    // Melakukan Check Koneksi dari Webserver ke Database
	$koneksi1 = mysqli_connect($servername, $username, $password, $dbname); 
 
    // Mengecek Apakah Koneksi Database Error
	if(mysqli_connect_errno()){ 
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>

