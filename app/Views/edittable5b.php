<?= $this->extend('layout/admin/layout') ?>

<?= $this->section('content') ?>


<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
        </ol>
        <h3 class="font-weight-bolder text-white mb-0">Tables</h3>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-0">
          <div class="card-header pb-0">
            <h5>Form Edit</h5>

            <div class="card-body px-0 pt-0 pb-2">
              <form action="" method="post" id="text-editor">
                <input type="hidden" name="no" value="<?= $table5b['no'] ?>" />
                <div class="form-group mb-3">
                  <label for="judul_penelitian">Luaran Penelitian</label>
                  <input type="text" name="judul_penelitian" class="form-control"
                    placeholder="table5b judul_penelitian" value="<?= $table5b['judul_penelitian'] ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="nama_dosen">Nama Dosen</label>
                  <input type="text" name="nama_dosen" class="form-control"
                    placeholder="table5b nama_dosen" value="<?= $table5b['nama_dosen'] ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="mata_kuliah">Mata Kuliah</label>
                  <input type="text" name="mata_kuliah" class="form-control"
                    placeholder="table5b mata_kuliah" value="<?= $table5b['mata_kuliah'] ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="bentuk_integrasi">Bentuk </label>
                  <input type="text" name="bentuk_integrasi" class="form-control"
                    placeholder="table5b bentuk_integrasi" value="<?= $table5b['bentuk_integrasi'] ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="tahun">Tahun</label>
                  <select id="tahun" name="tahun" class="form-control" placeholder="Tahun" aria-label="tahun" required>
                    <?php
                    $tahunSekarang = date("Y");
                    $tahunTerpilih = $table5b['tahun']; // Ambil tahun yang sudah tersimpan dari data yang akan diedit

                    for ($tahun = 1900; $tahun <= $tahunSekarang + 10; $tahun++) {
                      $selected = ($tahun == $tahunTerpilih) ? "selected" : "";
                      echo "<option value='$tahun' $selected>$tahun</option>";
                    }
                    ?>
                  </select>
                </div>


                <div class="form-group">
                  <button type="submit" name="status" value="simpan" class="btn btn-primary">Simpan</button>
                  <button type="reset" name="status" value="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<body class="g-sidenav-show bg-primary">





</body>

<?= $this->endSection() ?>