<?php
	//=================== KALAU PAKAI MYSQLI YANG ATAS SEMUA DI REMARK, TERUS YANG INI RI UNREMARK ========
	 include_once "Koneksi.php";

	 class mahasiswa{}
	
	 $nim = $_POST["nim"];
	 $password = $_POST["password"];
	
	 if ((empty($nim)) || (empty($password))) { 
	 	$response = new mahasiswa();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	 }
	
	 $query = mysqli_query($conn, "SELECT * FROM password5314 WHERE nim='$nim' AND password='$password'");
	
	 $row = mysqli_fetch_array($query);
	
	 if (!empty($row)){
	 	$response = new mahasiswa();
	 	$response->success = 1;
	 	$response->message = "Selamat datang ".$row['nim'];
	 	$response->nim = $row['nim'];
	 	die(json_encode($response));
		
	 } else { 
	 	$response = new mahasiswa();
	 	$response->success = 0;
	 	$response->message = "nim atau password salah";
	 	die(json_encode($response));
	 }
	
	 mysqli_close($conn);

?>