<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SIKAP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">

</head>
<body>
  <!--  Sidebar -->
  <?php include 'komponen/sidebar.php'; ?>

  <!--  Header -->
  <?php include 'komponen/header.php'; ?>

  <div class="content">
    <h3 class="mb-2">Dashboard</h3>
    <p class="text-muted mb-4">Ringkasan data kasus anak & perempuan</p>

    <!-- Cards Ringkasan -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="card text-white bg-primary shadow-sm h-100">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h6>Jumlah Kasus</h6>
              <h3>120</h3>
            </div>
            <i class="bi bi-bar-chart-fill" style="font-size: 2rem;"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-success shadow-sm h-100">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h6>Kasus Terhadap Anak</h6>
              <h3>50</h3>
            </div>
            <i class="bi bi-emoji-smile-fill" style="font-size: 2rem;"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-danger shadow-sm h-100">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h6>Kasus Terhadap Perempuan</h6>
              <h3>70</h3>
            </div>
            <i class="bi bi-gender-female" style="font-size: 2rem;"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Konten dashboard lainnya -->
    <!-- Row 1: Aktivitas + Progress -->
    <div class="row g-4 mb-4">
      <div class="col-md-7">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h6 class="mb-3"><i class="bi bi-clock-history"></i> Aktivitas Terbaru</h6>
            <div class="table-responsive">
              <table class="table table-sm table-hover">
                <thead class="table-light">
                  <tr>
                    <th>Tanggal</th>
                    <th>Jenis Kasus</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>25/09/25</td>
                    <td>Kekerasan Fisik</td>
                    <td><span class="badge bg-warning">Dalam Proses</span></td>
                  </tr>
                  <tr>
                    <td>24/09/25</td>
                    <td>KDRT</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                  </tr>
                  <tr>
                    <td>23/09/25</td>
                    <td>Seksual</td>
                    <td><span class="badge bg-danger">Baru</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h6 class="mb-3"><i class="bi bi-graph-up"></i> Progres Penyelesaian Kasus</h6>
            <p class="mb-1">Kasus Anak</p>
            <div class="progress mb-3" style="height: 18px;">
              <div class="progress-bar bg-primary" role="progressbar" data-target="65">0%</div>
            </div>
            <p class="mb-1">Kasus Perempuan</p>
            <div class="progress mb-3" style="height: 18px;">
              <div class="progress-bar bg-danger" role="progressbar" data-target="45">0%</div>
            </div>
            <p class="mb-1">Total Kasus</p>
            <div class="progress" style="height: 18px;">
              <div class="progress-bar bg-success" role="progressbar" data-target="55">0%</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2: Chart Anak + Pie Anak -->
    <div class="row g-4 mb-4">
      <div class="col-md-7">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h6 class="mb-3">Statistik Kasus Anak</h6>
            <canvas id="chartAnak"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h6 class="mb-3">Klasifikasi Kasus Anak</h6>
            <canvas id="pieAnak"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 3: Chart Perempuan + Pie Perempuan -->
    <div class="row g-4 mb-4">
      <div class="col-md-7">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h6 class="mb-3">Statistik Kasus Perempuan</h6>
            <canvas id="chartPerempuan"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <h6 class="mb-3">Klasifikasi Kasus Perempuan</h6>
            <canvas id="piePerempuan"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="js/mobile.js"></script>
  <script>
    const ctxAnak = document.getElementById('chartAnak').getContext('2d');
    new Chart(ctxAnak, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agst', 'Sept','Okt','Nov', 'Des'],
        datasets: [{
          label: 'Kasus Anak',
          data: [5, 7, 3, 6, 4, 8, 6, 4, 2, 1, 0, 3],
          backgroundColor: 'rgba(220, 53, 69, 0.7)'
        }]
      }
    });

    const ctxPerempuan = document.getElementById('chartPerempuan').getContext('2d');
    new Chart(ctxPerempuan, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agst', 'Sept','Okt','Nov', 'Des'],
        datasets: [{
          label: 'Kasus Perempuan',
          data: [7, 12, 4, 9, 6, 11, 6, 4, 2, 1, 0, 3],
          backgroundColor: 'rgba(0, 123, 255, 0.7)'
        }]
      }
    });

    new Chart(document.getElementById('pieAnak'), {
      type: 'pie',
      data: {
        labels: ['Kekerasan Fisik', 'Kekeras Piskis', 'Seksual', 'Lainnya'],
        datasets: [{
          data: [12, 8, 5, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)'
          ]
        }]
      }
    });

    new Chart(document.getElementById('piePerempuan'), {
      type: 'doughnut',
      data: {
        labels: ['KDRT', 'Seksual', 'Kekerasan Fisik', 'Lainnya'],
        datasets: [{
          data: [15, 10, 6, 5],
          backgroundColor: [
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(255, 205, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)'
          ]
        }]
      }
    });

    document.addEventListener("DOMContentLoaded", function() {
      const bars = document.querySelectorAll(".progress-bar");

      bars.forEach(bar => {
        let target = bar.getAttribute("data-target");
        let value = 0;
        let speed = 15;

        let interval = setInterval(() => {
          if (value >= target) {
            clearInterval(interval);
          } else {
            value++;
            bar.style.width = value + "%";
            bar.textContent = value + "%";
          }
        }, speed);
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>