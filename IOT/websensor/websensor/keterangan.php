<?php
    include "koneksi1.php";
 
    // POST Nilai Sensor ke Database
    if(isset($_POST["sensor"])) {

		$t = $_POST["sensor"];
		$sql = "UPDATE sensorsoil SET sensor = $t"; 

		if (mysqli_query($koneksi1, $sql)) { 
			echo "\nNew record created successfully"; 
		} else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi1); 
		}	
	}

    // Mengambil Nilai Database ke Webserver
	$sql = mysqli_query($koneksi1, "SELECT * FROM sensorsoil");
    if(mysqli_num_rows($sql) == 0){ 
        echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
    }
    else {
        $no = 1;
        $row = mysqli_fetch_array($sql);
        $nilai_sensor = $row['sensor'];
            if ($nilai_sensor > 1000) 
                $keterangan = "BASAH";
            else if ($nilai_sensor < 1000) 
                $keterangan = "KERING";
            echo $keterangan;
    }
?>