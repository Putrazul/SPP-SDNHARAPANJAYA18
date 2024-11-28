<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo/logosd.jpg">
    <style>
        .container {
            padding-top: 150px;
        }

        h2 {
            text-align: center;
            font-size: small;
        }

        .card {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include('koneksi.php');
    include('tampilan/header.php');
    include('tampilan/sidebar.php');
    ?>

    <div class="container">
        <!-- Header -->
        <div class="text-center">
            <h2>Biodata Mahasiswa</h2>
        </div>

        <div class="row">
            <!-- Left Side -->
            <div class="col-md-4 text-center">
                <div class="card" style="border-radius: 10px; box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <!-- Profile Picture -->
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle img-fluid mb-3">
                        <!-- Profile Info -->
                        <p><b><?php echo $_SESSION['username']; ?></b></p>
                        <button onclick="window.location.href='ubahpw.php'" class="btn btn-primary mt-3" style="border-radius: 10px;">Ubah Password</button>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form action="proses_tambahsiswa.php" method="POST">
                            <!-- Personal Information -->
                            <h5 class="mb-3">Personal</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" class="form-control mb-3" placeholder="Tulis nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis_kelamin" class="form-label mb-2">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control mb-3" required>
                                        <option value="not_option" disabled selected>Silahkan pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-2">NISN</label>
                                    <input type="text" id="nisn" name="nisn" class="form-control mb-3" placeholder="Tulis NISN Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-2">NIS</label>
                                    <input type="text" id="nis" name="nis" class="form-control mb-3" placeholder="Tulis NIS Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Tempat Lahir</label>
                                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control mb-3" placeholder="Tulis Tempat Anda Lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Tanggal Lahir</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control mb-3" placeholder="Tulis Tanggal Lahir Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="id_kelas" class="form-label mb-2">Kelas</label>
                                    <select id="id_kelas" name="id_kelas" class="form-control mb-3" required>
                                        <option value="not_option" disabled selected>Silahkan pilih kelas</option>
                                        <?php
                                        $query = "SELECT * FROM kelas ORDER BY nama_kelas, kompetensi_keahlian ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        if (!$result) {
                                            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                        }
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?> <?php echo $row['kompetensi_keahlian']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="id_spp" class="form-label mb-2">Tahun Masuk</label>
                                    <select id="id_spp" name="id_spp" class="form-control mb-3" required>
                                        <option value="not_option" disabled selected>Tahun Masuk</option>
                                        <?php
                                        $query = "SELECT * FROM spp";
                                        $result = mysqli_query($koneksi, $query);

                                        if (!$result) {
                                            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                        }

                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <hr>
                            <!-- Data Orang Tua -->
                            <h5 class="mb-3">Orang Tua</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Nama Ayah</label>
                                    <input type="text" id="nama_ayah" name="nama_ayah" class="form-control mb-3" placeholder="Tulis Nama Ayah Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Nama Ibu</label>
                                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control mb-3" placeholder="Tulis Nama Ibu Anda" required>
                                </div>
                            </div>
                            <hr>
                            <!-- Alamat -->
                            <h5 class="mb-3">Alamat</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label mb-2">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" class="form-control mb-3" placeholder="Tulis Alamat Lengkap Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="kode_pos" class="form-label mb-2">Kode Pos</label>
                                    <input type="text" id="kode_pos" name="kode_pos" class="form-control mb-3" placeholder="Tulis Kode Pos Anda" required>
                                </div>
                            </div>
                            <hr>
                            <!-- Kontak -->
                            <h5 class="mb-3">Kontak</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="form-label mb-2">Email</label>
                                    <input type="email" id="email" name="email" class="form-control mb-3" placeholder="Tulis Email Anda Disini" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_tlp" class="form-label mb-2">No. Telepon</label>
                                    <input type="tel" id="no_tlp" name="no_tlp" class="form-control mb-3" placeholder="Tulis Nomor HP Aktif Anda Disini" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tlp_darurat" class="form-label mb-2">No. Telepon Darurat</label>
                                    <input type="tel" id="tlp_darurat" name="tlp_darurat" class="form-control mb-3" placeholder="Tulis Nomor Darurat Aktif Anda Disini" required>
                                </div>
                            </div>
                            <hr>
                            <!-- Informasi Tambahan -->
                            <h5 class="mb-3">Informasi Tambahan</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="agama" class="form-label mb-2">Agama</label>
                                    <select id="agama" name="agama" class="form-control mb-3" required>
                                        <option value="not_option" disabled selected>Silahkan pilih Agama Anda</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="hobi" class="form-label mb-2">Hobi</label>
                                    <input type="text" id="hobi" name="hobi" class="form-control mb-3" placeholder="Tulis Hobi dan Minat Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="eskul" class="form-label mb-2">Kegiatan Ekstrakurikuler</label>
                                    <input type="text" id="eskul" name="eskul" class="form-control mb-3" placeholder="Tulis Kegiatan Ekstrakurikuler" required>
                                </div>
                            </div>
                            <hr>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('tampilan/footer.php'); ?>

</body>

</html>