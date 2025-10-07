<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SIKAP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/rekapan.css" rel="stylesheet">
</head>

<body>
  <!--  Sidebar -->
  <?php include 'komponen/sidebar.php'; ?>

  <!--  Header -->
  <?php include 'komponen/header.php'; ?>

  <!-- Konten Rekapan KTA -->
  <div class="content">
    <div class="header-admin">
      <span class="me-2">Admin</span>
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="35" class="rounded-circle border">
    </div>
    <!-- Judul Halaman -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="fw-bold">Laporan Kasus Terhadap Anak </h3>
    </div>

    <!-- Filter Bulan & Tahun -->
    <!-- Filter Bulan & Tahun -->
    <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
      <label class="mb-0">Bulan:</label>
      <select class="form-select w-auto">
        <option>Januari</option>
        <option>Februari</option>
        <option>Maret</option>
        <option>April</option>
        <option>Mei</option>
        <option>Juni</option>
        <option>Juli</option>
        <option>Agustus</option>
        <option>September</option>
        <option>Oktober</option>
        <option>November</option>
        <option>Desember</option>
      </select>

      <label class="mb-0">s/d Bulan:</label>
      <select class="form-select w-auto">
        <option>Januari</option>
        <option>Februari</option>
        <option>Maret</option>
        <option>April</option>
        <option>Mei</option>
        <option>Juni</option>
        <option>Juli</option>
        <option>Agustus</option>
        <option>September</option>
        <option>Oktober</option>
        <option>November</option>
        <option>Desember</option>
      </select>

      <label class="mb-0">Tahun:</label>
      <input type="number" class="form-control w-auto" placeholder="2025" min="2000" max="2100">

      <button class="btn btn-success ms-auto">
        <i class="bi bi-file-earmark-pdf"></i> Export PDF
      </button>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-3">Tabel Rekapan</h5>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Bulan</th>
                <th colspan="2">JK</th>
                <th colspan="7">Bentuk Kekerasan</th>
                <th colspan="4">Sumber Laporan</th>
              </tr>
              <tr>
                <th>L</th>
                <th>P</th>
                <th>Kekerasan Fisik</th>
                <th>Kekerasan Psikis</th>
                <th>Kekerasan Seksual</th>
                <th>Eksploitasi</th>
                <th>Hak Asuh Anak</th>
                <th>TPPO</th>
                <th>Lainnya</th>
                <th>Home Visit</th>
                <th>Satgas PPA</th>
                <th>BAP P2TP2A</th>
                <th>UPPA Polsek Kota</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="js/mobile.js"></script>
</body>