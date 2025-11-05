<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="flex-grow-1 bg-light p-4">
  <h2>🔧 Status Servis</h2>

  <table class="table table-hover mt-4">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Pemilik</th>
        <th>No Polisi</th>
        <th>Tipe Motor</th>
        <th>Status Servis</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Budi</td>
        <td>AD9876BC</td>
        <td>Beat Street</td>
        <td><span class="badge bg-warning">Dalam Proses</span></td>
        <td>
          <select class="form-select form-select-sm" style="width: 150px;">
            <option>Dalam Proses</option>
            <option>Selesai</option>
            <option>Menunggu Suku Cadang</option>
          </select>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php include "../includes/footer.php"; ?>
