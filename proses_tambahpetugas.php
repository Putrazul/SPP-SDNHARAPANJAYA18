<?php
// Menyertakan koneksi ke database
include('koneksi.php');

// Mengecek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Menangkap data dari form
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama_petugas = $_POST['nama_petugas'];
  $level = $_POST['level'];

  // Menangani case ketika level tidak dipilih
  if ($level == 'not_option') {
    echo "<script>alert('Silakan pilih level terlebih dahulu.'); window.location = 'tambah_petugas.php';</script>";
    exit;
  }

  // Membuat query untuk menyimpan data pengguna ke dalam database
  $query = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";

  // Mengeksekusi query dan mengecek apakah berhasil
  if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data pengguna berhasil ditambahkan!'); window.location = 'petugas.php';</script>";
  } else {
    echo "<script>alert('Terjadi kesalahan saat menambahkan data pengguna.'); window.location = 'tambah_petugas.php';</script>";
  }
} else {
  // Jika form belum disubmit, redirect kembali ke halaman tambah_petugas.php
  header('Location: tambah_petugas.php');
  exit;
}
