<?php 
	include 'database.php';

	if ( !isset($_POST['nim'], $_POST['password']) ) {
    
        die ('Please fill both the Email and password field!');

    }else{
        $username = $_POST['nim'];
        $userpass = $_POST['password'];
        $sql = mysqli_query($koneksi, "SELECT nim, password FROM akun WHERE nim = '$username'");

        list($username, $password) = mysqli_fetch_array($sql);

        if (mysqli_num_rows($sql) > 0) {

            /*
                Validasi login dengan password_verify
                $userpass -----> diambil dari password yang diinputkan user lewat form login
                $password -----> diambil dari password dalam database
            */
            if (password_verify($userpass, $password)) {
                $nim = $_POST['nim'];
                $kritik = $_POST['kritik'];
                $data = mysqli_query($koneksi,"SELECT * FROM akun where nim = '$nim'");
                while ($t = mysqli_fetch_array($data)){
                   $nama = $t['nama'];
                }
                mysqli_query($koneksi,"INSERT INTO kritik VALUES (NULL,'$nim','$nama','$kritik',now())");

                header("Location:../index.php?pesan=terkirim");
                die();
            } else {
                header("Location:../index.php?pesan=gagal");
                die();
            }
        } else {
           header("Location:../index.php?pesan=belum_daftar");
           die();
        }

}

?>

