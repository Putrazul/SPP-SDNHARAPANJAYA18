<?php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama             = $_POST['nama'];
  $jenis_kelamin    = $_POST['jenis_kelamin'];
  $nisn             = $_POST['nisn'];
  $nis              = $_POST['nis'];
  $tempat_lahir     = $_POST['tempat_lahir'];
  $tanggal_lahir    = $_POST['tanggal_lahir'];
  $id_kelas         = $_POST['id_kelas'];
  $id_spp           = $_POST['id_spp'];
  $nama_ayah        = $_POST['nama_ayah'];
  $nama_ibu         = $_POST['nama_ibu'];
  $alamat           = $_POST['alamat'];
  $kode_pos         = $_POST['kode_pos'];
  $email            = $_POST['email'];
  $no_tlp           = $_POST['no_tlp'];
  $tlp_darurat      = $_POST['tlp_darurat'];
  $agama            = $_POST['agama'];
  $hobi             = $_POST['hobi'];
  $eskul            = $_POST['eskul'];

  $check_kelas = mysqli_query($koneksi, "SELECT id_kelas FROM kelas WHERE id_kelas = '$id_kelas'");
  if (mysqli_num_rows($check_kelas) == 0) {
    die("ID Kelas tidak ditemukan.");
  }

  $check_spp = mysqli_query($koneksi, "SELECT id_spp FROM spp WHERE id_spp = '$id_spp'");
  if (mysqli_num_rows($check_spp) == 0) {
    die("ID SPP tidak ditemukan.");
  }

  // query untuk insert data ke tabel siswa
  $query = $koneksi->prepare("INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, id_spp, jenis_kelamin, tempat_lahir, tanggal_lahir, nama_ayah, nama_ibu, kode_pos, email, no_tlp, tlp_darurat, agama, hobi, eskul) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

  // Bind parameter dengan jenis data yang sesuai
  $query->bind_param("ssssssssssssssssss", $nisn, $nis, $nama, $id_kelas, $alamat, $id_spp, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $nama_ayah, $nama_ibu, $kode_pos, $email, $no_tlp, $tlp_darurat, $agama, $hobi, $eskul);

  // Menjalankan query
  if ($query->execute()) {
    echo "<script>alert('Data berhasil ditambah.');window.location='biodata.php';</script>";
  } else {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
  }
}
