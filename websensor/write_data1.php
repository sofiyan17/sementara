<?php
 
    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sensor_db";
 
    $koneksi1 = mysqli_connect("$servername", "$username", "$password","$dbname");
 
    // Prepare the SQL statement
    if (!$koneksi1) { 
		die("Connection failed: " . mysqli_connect_error()); 
	} 

	if(isset($_POST["sensor"])) {

		$t = $_POST["sensor"];

		$sql = "INSERT INTO sensorsoil (sensor) VALUES (".$t.")"; 

		if (mysqli_query($koneksi1, $sql)) { 
			echo "\nNew record created successfully"; 
		} else { 
			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi1); 
		}
	
	}

	$sql = mysqli_query($koneksi1, "SELECT * FROM sensorsoil ORDER BY id DESC LIMIT 1");
          $id = 0;
          if(mysqli_num_rows($sql) == 0){ 
            echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
          }else{ // jika terdapat entri maka tampilkan datanya
            $no = 1; // mewakili data dari nomor 1
            while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
              echo $row['sensor'];
              $id++; // mewakili data kedua dan seterusnya
            }
          }

?>