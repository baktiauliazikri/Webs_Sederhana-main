<?php 
include '../../koneksi.php';
include '../ceklogin.php';
?><!DOCTYPE html>
<html lang="en"> 
<head>
  <title>Cetak</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../docs/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="../docs/fa/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini rtl">
  <div class="container">
    <br><br>
    <h2 class="text-center">Laporan Transaksi</h2>
    <hr><br><br>

    <?php
    $semuadata = array();

    // Fetch all data from transaksi table
    $ambil = $koneksi->query("SELECT * FROM transaksi");
    while ($pecah = $ambil->fetch_assoc()) {
      $semuadata[] = $pecah;
    }
    ?>

    <div id="laporan_transaksi">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php $total = 0; ?>
        <tbody>
          <?php foreach ($semuadata as $key => $value): ?>
            <?php $total += $value['total']; ?>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $value['nama_customer']; ?></td>
              <td><?php echo $value['tgl_transaksi']; ?></td>
              <td>Rp. <?php echo number_format($value['total']); ?></td>
              <td><?php echo $value['status']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <?php if (empty($semuadata)) { ?>
              <th colspan="2"></th>
              <th>Tidak Ada Data</th>
              <th colspan="2"></th>
            <?php } else { ?>
              <th style="background-color: #d4edda; color: #155724;" colspan="3">Total</th>
              <th style="background-color: #d4edda; color: #155724;">Rp. <?php echo number_format($total); ?></th>
              <th style="background-color: #d4edda; color: #155724;"></th>
            <?php } ?>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- Essential javascripts for application to work-->
  <script src="../docs/js/jquery-3.2.1.min.js"></script>
  <script src="../docs/js/popper.min.js"></script>
  <script src="../docs/js/bootstrap.min.js"></script>
  <script src="../docs/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script>
    window.print();
  </script>
</body>
</html>
