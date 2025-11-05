<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="flex-grow-1 bg-light p-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Dashboard</h2>
    <span>👤 Kasir: <strong>Admin</strong></span>
  </div>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="card text-bg-primary">
        <div class="card-body">
          <h5 class="card-title">Motor Masuk Hari Ini</h5>
          <p class="card-text display-6">8</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-bg-success">
        <div class="card-body">
          <h5 class="card-title">Servis Selesai</h5>
          <p class="card-text display-6">5</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-bg-warning">
        <div class="card-body">
          <h5 class="card-title">Dalam Proses</h5>
          <p class="card-text display-6">3</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../includes/footer.php"; ?>
