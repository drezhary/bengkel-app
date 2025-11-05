<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>
<?php include "../includes/db.php";?>

<div class="flex-grow-1 bg-light p-4">
  <h2>📝 Data Motor Masuk</h2>

  <form class="row g-3 mt-3" method="POST" action="../process/input_motor.php">
    <div class="col-md-4">
      <label class="form-label">Nama Pemilik</label>
      <input type="text" class="form-control" placeholder="Nama pelanggan" name="nama_pemilik">
    </div>
    <div class="col-md-4">
      <label class="form-label">Nomor Polisi</label>
      <input type="text" name="no_polisi" class="form-control" placeholder="Contoh: AB1234CD">
    </div>
    <div class="col-md-4">
      <label class="form-label">Tipe Motor</label>
      <input type="text" name="tipe_motor" class="form-control" placeholder="Contoh: Vario 150">
    </div>
    <div class="col-md-12">
      <label class="form-label">Keluhan</label>
      <textarea name="keluhan" class="form-control" rows="2" placeholder="Masukkan keluhan pelanggan"></textarea>
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
    <?php
    $sql = "SELECT nama_pemilik, no_polisi, tipe_motor, keluhan, status_servis FROM motor_servis";
    $result = $conn->query($sql);
    $i = 1;
    ?>
    <tbody>
      <?php foreach ($result as $row) :?>
      <tr>
        <td><?= $i;?></td>
        <td><?= $row["nama_pemilik"];?></td>
        <td><?= $row["no_polisi"];?></td>
        <td><?= $row["tipe_motor"];?></td>
        <td><?= $row["keluhan"];?></td>
        <td><span class="badge bg-warning"><?= $row["status_servis"];?></span></td>
        <td>
          <button class="btn btn-sm btn-success">Edit</button>
          <button class="btn btn-sm btn-danger">Hapus</button>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php include "../includes/footer.php"; ?>
