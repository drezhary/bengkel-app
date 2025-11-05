<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="flex-grow-1 bg-light p-4">
  <h2>📝 Data Motor Masuk</h2>

  <form class="row g-3 mt-3">
    <div class="col-md-4">
      <label class="form-label">Nama Pemilik</label>
      <input type="text" class="form-control" placeholder="Nama pelanggan">
    </div>
    <div class="col-md-4">
      <label class="form-label">Nomor Polisi</label>
      <input type="text" class="form-control" placeholder="Contoh: AB1234CD">
    </div>
    <div class="col-md-4">
      <label class="form-label">Tipe Motor</label>
      <input type="text" class="form-control" placeholder="Contoh: Vario 150">
    </div>
    <div class="col-md-12">
      <label class="form-label">Keluhan</label>
      <textarea class="form-control" rows="2" placeholder="Masukkan keluhan pelanggan"></textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Simpan Data</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>

  <hr class="my-4">

  <h4>Daftar Motor Masuk</h4>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Pemilik</th>
        <th>No Polisi</th>
        <th>Tipe Motor</th>
        <th>Keluhan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>Andi</td><td>AB1234CD</td><td>Vario 150</td><td>Mesin kasar</td><td><span class="badge bg-warning">Proses</span></td>
        <td>
          <button class="btn btn-sm btn-success">Edit</button>
          <button class="btn btn-sm btn-danger">Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php include "../includes/footer.php"; ?>
