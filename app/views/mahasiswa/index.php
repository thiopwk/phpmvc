<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>  

  <div class="row">
    <div class="col-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br><br>
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center ">
            <?= $mhs['nama']; ?>
            <div class="btn-group">
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary">Detail</a>
              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-warning">Ubah</a>
              <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data <?= $mhs['nama'] ?>?');">Hapus</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik mesin">Teknik mesin</option>
              <option value="Teknik informatika">Teknik informatika</option>
              <option value="Teknik industri">Teknik industri</option>
              <option value="Teknik pangan">Teknik pangan</option>
              <option value="Teknik planologi">Teknik planologi</option>
              <option value="Teknik lingkungan">Teknik lingkungan</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>