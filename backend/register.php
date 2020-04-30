<?php 
	include 'database.php';

	if (!isset($_POST['nim'], $_POST['nama'], $_POST['email'], $_POST['password'])) {

		//tidak boleh kosong
		header("Location: ../daftar.php?pesan=data_kosong");
	}

	//memastikan data register tidak kosong

	if (empty($_POST['nim']) || empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['password'])) {
		
		//data tidak lengkap
		header("Location: ../daftar.php?pesan=data_tidak_lengkap");
	}


	if ($stmt = $koneksi->prepare('SELECT email, password FROM akun WHERE email = ?')) {
	
		$stmt->bind_param('s', $_POST['email']);
		$stmt->execute();
		$stmt->store_result();

	
		if ($stmt->num_rows > 0) {
		
			//email verification
			header("Location: ../daftar.php?pesan=email_ada");
			
		} else {
		
				if($stmt = $koneksi->prepare('SELECT nim FROM akun WHERE nim = ?')){
					$stmt->bind_param('s', $_POST['nim']);
					$stmt->execute();
					$stmt->store_result();

					if ($stmt->num_rows > 0) {
					
						//username verification
						header("Location: ../daftar.php?pesan=nim_ada");
					} else {
					
							if ($stmt = $koneksi->prepare('INSERT INTO akun (nim, nama, email, password) VALUES (?, ?,?,?)')) {
								$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
								$stmt->bind_param('ssss', $_POST['nim'], $_POST['nama'], $_POST['email'], $password);
								$stmt->execute();

								header("Location: ../index.php");

							} else {
							
								echo 'Could not prepare statement!';
							}
						}
					$stmt->close();

				} else {
				
					echo 'Could not prepare statement!';
				}
			}
		$stmt->close();
	}else {
	
		echo 'Could not prepare statement!';

	}


$koneksi->close();
?>