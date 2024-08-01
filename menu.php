<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

  <title>Jahe Emprit Mama Gio</title>
</head>

<body class="body">

  <div class="container-custom">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-4">
          <div class="garis"></div>
        </div>
        <div class="col-md-4">
          <h1 class="display-5 text-center">Our Product</h1>
        </div>
        <div class="col-md-4">
          <div class="garis"></div>
        </div>
      </div>

      <br>
      <br>

      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Pilih Kategori</label>

        <select class="form-control" id="kategori">
          <option value="show-all" selected="selected">---Pilihan Kategori---</option>
          <?php
          $q_kategori = mysqli_query($koneksi, "SELECT*FROM kategori");
          while ($data_kat = mysqli_fetch_array($q_kategori)) {
          ?>
            <option value="<?php echo $data_kat['kategori']; ?>"><?php echo $data_kat['kategori']; ?></option>
          <?php } ?>
        </select>

      </div>

      <div id="data-product"></div>

      <br><br>

    </div>
  </div>

  <div id="footer">

    <br><br>
    <h5 class="text-center">COPYSRIGHT @SobatNgoding 2019</h5>
    <br><br>

  </div>


</body>

</html>