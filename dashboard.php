<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="path/to/stylesheet.css">
  <link rel="icon" type="image/png" href="img/logo/logosd.jpg"> <!-- Favicon -->
</head>

<body>
  <?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include('tampilan/header.php');
  include('tampilan/sidebar.php');
  include('tampilan/footer.php');
  ?>
  <!-- Main Content -->
  <div class="main-content bg-info">
    <section class="section">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-stats">
              <div class="card-stats-title">DATA KELAS -
                <div class="dropdown d-inline">
                  <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">VII MIPA</a>
                  <ul class="dropdown-menu dropdown-menu-sm">
                    <li class="dropdown-title">Pilih Kelas</li>
                    <li><a href="kelas.php" class="dropdown-item active">VII IPA 1</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-stats-items">
                <div class="card-stats-item">
                  <div class="card-stats-item-count">21</div>
                  <div class="card-stats-item-label">Siswa</div>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">12</div>
                  <div class="card-stats-item-label">Belum Lunas</div>
                </div>
                <div class="card-stats-item">
                  <div class="card-stats-item-count">21</div>
                  <div class="card-stats-item-label">Lunas</div>
                </div>
              </div>
            </div>
            <div class="card-icon shadow-info bg-primary">
              <i class="fas fa-users"></i>

    </section>
  </div>
  </div>
  </div>
</body>