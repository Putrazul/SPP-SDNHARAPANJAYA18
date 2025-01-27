<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data petugas dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password ditemukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");

		// cek jika user login sebagai petugas
	} else if ($data['level'] == "petugas") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard petugas
		header("location:dashboard.php");

		// cek jika user login sebagai siswa
	} else if ($data['level'] == "siswa") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:history.php");
	} else {
		// alihkan ke halaman login kembali jika level tidak dikenali
		header("location:index.php?pesan=gagal");
	}
} else {
	// jika username atau password salah, alihkan ke halaman login dengan pesan gagal
	header("location:index.php?pesan=gagal");
}
