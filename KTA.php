<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kasus Terhadap Anak - SIKAP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/tables.css" rel="stylesheet">
</head>

<body>

  <!--  Sidebar -->
  <?php include 'komponen/sidebar.php'; ?>

  <!--  Header -->
  <?php include 'komponen/header.php'; ?>

  <!-- Content -->
  <div class="content">
    
    <h3 class="mb-4">Kasus Terhadap Anak</h3>

    <!-- Search Bar + Input Button -->
    <div class="mb-3 d-flex justify-content-between align-items-center">
      <form class="d-flex align-items-center w-75 mb-0">
        <div class="search-wrapper w-100">
          <i class="bi bi-search"
            style="position:absolute; left:10px; top:50%; transform:translateY(-50%); color:#6c757d;"></i>
          <input type="text" placeholder="Cari data..." class="form-control">
        </div>
        <button type="submit" class="btn btn-primary ms-2">Cari</button>
      </form>
      <a href="forminputkasus.html" class="btn btn-input-kasus ms-3">
        <i class="bi bi-folder-plus me-1"></i> Input Kasus</a>
    </div>

    <!-- Card Statistik -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="stats-card">
          <h5>Jumlah Kasus</h5>
          <p class="fs-4">8</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stats-card">
          <h5>Kasus Selesai</h5>
          <p class="fs-4 text-success">50</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stats-card">
          <h5>Kasus Proses</h5>
          <p class="fs-4 text-warning">10</p>
        </div>
      </div>
    </div>

    <!-- Tabel Ringkasan -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th rowspan="2">Nama Korban</th>
            <th colspan="2">JK</th> <!-- 🔹 ubah jadi colspan 2 -->
            <th rowspan="2">Umur</th>
            <th rowspan="2">Alamat</th>
            <th rowspan="2">Tgl Kasus</th>
            <th rowspan="2">Nama Pelaku</th>
            <th rowspan="2">Bentuk Kekerasan</th>
            <th rowspan="2">Sumber Laporan</th>
            <th rowspan="2">Tindak Lanjut</th>
            <th rowspan="2">Opsi</th>
          </tr>
          <tr>
            <th>L</th>
            <th>P</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="10" class="text-center">Belum ada data</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script src="js/mobile.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>