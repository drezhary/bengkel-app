<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="flex-grow-1 bg-light p-4">
  <h2>📊 Laporan Servis</h2>

  <form class="row g-3 my-3">
    <div class="col-md-4">
      <label class="form-label">Dari Tanggal</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-md-4">
      <label class="form-label">Sampai Tanggal</label>
      <input type="date" class="form-control">
    </div>
    <div class="col-md-4 align-self-end">
      <button class="btn btn-primary">Tampilkan</button>
    </div>
  </form>

  <table class="table table-bordered mt-4">
    <thead class="table-secondary">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Pemilik</th>
        <th>No Polisi</th>
        <th>Tipe Motor</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>2025-10-30</td><td>Sinta</td><td>AE7654DR</td><td>NMax 155</td><td><span class="badge bg-success">Selesai</span></td>
      </tr>
    </tbody>
  </table>
</div>

<?php include "../includes/footer.php"; ?>
