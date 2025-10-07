<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Kasus - SIKAP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">
</head>

<body>
  <!--  Sidebar -->
  <?php include 'komponen/sidebar.php'; ?>

  <!--  Header -->
  <?php include 'komponen/header.php'; ?>

  <!-- content -->
  <div class="content">
    <div class="container">
      <div class="card shadow">
        <!-- Judul dinamis -->
        <div id="formTitle" class="card-header text-white"
          style="background: linear-gradient(90deg, #003366, #00b3b3);"> DATA PELAPOR
        </div>

        <div class="card-body">
          <form id="formKasus">

            <!-- STEP 1: DATA PELAPOR -->
            <div id="step1">
              <div class="mb-3">
                <label class="form-label">Tanggal Kasus</label>
                <input type="date" class="form-control" name="tanggal_kasus" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_pelapor" placeholder="Masukkan nama">
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
              </div>
              <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur">
              </div>
              <div class="mb-3">
                <label class="form-label">No. KTP</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">No. HP</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">Hubungan dengan Korban</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">Kabupaten/Kota</label>
                <select class="form-select" name="kabupaten/kota">
                  <option value="">--Pilih--</option>
                  <option>Kab. Gorontalo</option>
                  <option>Kab. Gorontalo Utara</option>
                  <option>Kota Gorontalo</option>
                  <option>Kab. Boalemo</option>
                  <option>Kab. Pohuwato</option>
                  <option>Kab. Bone Bolango</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
              </div>
              <button type="button" class="btn btn-gradient" onclick="nextStep(2)">Selanjutnya →</button>
            </div>

            <!-- STEP 2: DATA KORBAN -->
            <div id="step2" style="display:none;">
              <div class="mb-3">
                <label class="form-label">Nama Korban</label>
                <input type="text" class="form-control" name="nama_korban">
              </div>
              <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jk_korban">
                  <option value="">--Pilih--</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir_korban">
              </div>
              <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur_korban">
              </div>
              <div class="mb-3">
                <label class="form-label">No. KTP</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">No. HP</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="nama_korban">
              </div>
              <div class="mb-3">
                <label class="form-label">Hubungan dengan Korban</label>
                <input type="text" class="form-control" name="no_hp">
              </div>
              <div class="mb-3">
                <label class="form-label">Kabupaten/Kota</label>
                <select class="form-select" name="kabupaten/kota">
                  <option value="">--Pilih--</option>
                  <option>Kab. Gorontalo</option>
                  <option>Kab. Gorontalo Utara</option>
                  <option>Kota Gorontalo</option>
                  <option>Kab. Boalemo</option>
                  <option>Kab. Pohuwato</option>
                  <option>Kab. Bone Bolango</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat_korban"></textarea>
              </div>
              <button type="button" class="btn btn-back-gradient" onclick="nextStep(1)">← Kembali</button>
              <button type="button" class="btn btn-gradient" onclick="nextStep(3)">Selanjutnya →</button>
            </div>

            <!-- STEP 3: DATA PELAKU -->
            <div id="step3" style="display:none;">
              <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="unknownPelaku" onclick="togglePelaku()">
                <label class="form-check-label" for="unknownPelaku">Pelaku tidak diketahui</label>
              </div>
              <div id="pelakuFields">
                <div class="mb-3">
                  <label class="form-label">Nama (Opsional)</label>
                  <input type="text" class="form-control" name="nama_pelaku">
                </div>
                <div class="mb-3">
                  <label class="form-label">Umur (Opsional)</label>
                  <input type="number" class="form-control" name="umur_pelaku">
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jk_pelaku">
                    <option value="">--Pilih--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Pekerjaan</label>
                  <input type="text" class="form-control" name="nama_korban">
                </div>
                <div class="mb-3">
                  <label class="form-label">Kabupaten/Kota</label>
                  <select class="form-select" name="kabupaten/kota">
                    <option value="">--Pilih--</option>
                    <option>Kab. Gorontalo</option>
                    <option>Kab. Gorontalo Utara</option>
                    <option>Kota Gorontalo</option>
                    <option>Kab. Boalemo</option>
                    <option>Kab. Pohuwato</option>
                    <option>Kab. Bone Bolango</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <textarea class="form-control" name="alamat_pelaku"></textarea>
                </div>
              </div>
              <button type="button" class="btn btn-back-gradient" onclick="nextStep(2)">← Kembali</button>
              <button type="button" class="btn btn-gradient" onclick="nextStep(4)">Selanjutnya →</button>
            </div>

            <!-- STEP 4: MASALAH KASUS -->
            <div id="step4" style="display:none;">
              <div class="mb-3">
                <label class="form-label">Bentuk Kekerasan</label>
                <select class="form-select" name="bentuk_kekerasan">
                  <option value="">--Pilih--</option>
                  <option>KDRT</option>
                  <option>Kekerasan Fisik</option>
                  <option>Kekerasan Psikis</option>
                  <option>Kekerasan Seksual</option>
                  <option>Eksploitasi</option>
                  <option>Hak Asuh Anak</option>
                  <option>TPPO</option>
                  <option>Lainnya</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Deskripsi Kasus</label>
                <textarea class="form-control" name="deskripsi"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Sumber Laporan</label>
                <select class="form-select" name="su  mber_laporan">
                  <option value="">--Pilih--</option>
                  <option>Home Visit</option>
                  <option>Satgas PPA</option>
                  <option>BAP P2TP2A</option>
                  <option>UPPA Polsek Kota</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Tindak Lanjut</label>
                <select class="form-select" name="tindak_lanjut">
                  <option value="">--Pilih--</option>
                  <option>Assesment Awal</option>
                  <option>Assesment Akhir</option>
                </select>
              </div>
              <button type="button" class="btn btn-back-gradient" onclick="nextStep(3)">← Kembali</button>
              <button type="submit" class="btn btn-gradient">Simpan</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="js/mobile.js"></script>
<script>
  // Judul tiap step
  const titles = {
    1: "DATA PELAPOR",
    2: "DATA KORBAN",
    3: "DATA PELAKU",
    4: "MASALAH KASUS & SUMBER LAPORAN"
  };

  function nextStep(step) {
    document.querySelectorAll("#formKasus > div").forEach(div => div.style.display = "none");
    document.getElementById("step" + step).style.display = "block";
    document.getElementById("formTitle").innerText = titles[step];
  }

  function togglePelaku() {
    const checked = document.getElementById("unknownPelaku").checked;
    document.getElementById("pelakuFields").style.display = checked ? "none" : "block";
  }
</script>
</body>

</html>