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
                        <div class="form-group mb-3">
                            <label for="id_dosen">Id Dosen</label>
                            <input type="text" name="id_dosen" class="form-control" 
                                placeholder="Id Dosen" value="<?= $list_dosen['id_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_dosen">Nama</label>
                            <input type="text" name="nama_dosen" class="form-control" 
                                placeholder="Nama" value="<?= $list_dosen['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN</label>
                            <input type="text" name="nidn" class="form-control" 
                                placeholder="NIDN" value="<?= $list_dosen['nidn'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" 
                                placeholder="NIP" value="<?= $list_dosen['nip'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" 
                                placeholder="L" value="<?= $list_dosen['jenis_kelamin'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_agama">Id Agama</label>
                            <input type="text" name="id_agama" class="form-control" 
                                placeholder="Id Agama" value="<?= $list_dosen['id_agama'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_agama">Agama</label>
                            <input type="text" name="nama_agama" class="form-control" 
                                placeholder="Agama" value="<?= $list_dosen['nama_agama'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control" 
                                placeholder="yyyy-mm-dd" value="<?= $list_dosen['tanggal_lahir'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_status_aktif">Id Status</label>
                            <input type="text" name="id_status_aktif" class="form-control" 
                                placeholder="Id Status" value="<?= $list_dosen['id_status_aktif'] ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_status_aktif">Status</label>
                            <input type="text" name="nama_status_aktif" class="form-control" 
                                placeholder="Status" value="<?= $list_dosen['nama_status_aktif'] ?>" required>
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
  <div class="min-height-300 bg-gray-100 position-absolute w-100"></div>
 

  

  </body>

<?= $this->endSection() ?>