<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jahe Emprit Mama Gio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <?php

                $id = $_GET['id_product'];
                $query = mysqli_query($koneksi, "SELECT*FROM product where id_product = '$id'");
                $data = mysqli_fetch_array($query)
                ?>

                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/product/<?php echo $data['gambar']; ?>" height="500px" width="100%" style="border-radius: 50px;">
                    </div>
                    <div class="col-md-6">
                        <h3 class="font-weight-bold"><?php echo $data['nama_product']; ?></h3><br>
                        <h5>Rp.<?php echo number_format($data['harga']); ?></h5><br>
                        <h5>Description</h5>
                        <p class="text-justify display-5"><?php echo $data['description']; ?></p>
                        <form role="form" id="form-tambah" method="post" action="aksi-beli.php">
                            <input type="hidden" name="id_product" value="<?php echo $data['id_product']; ?>">
                            <input type="hidden" name="nama_product" value="<?php echo $data['nama_product']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
                            <div class="form-group">
                                <label>QTY</label>
                                <input type="number" class="form-control" id="qty" name="qty" required="required" value="1" min="1" max="<?php echo $data['stok']; ?>">
                            </div>
                            <?php if ($data['stok'] < 1) { ?>

                                <h4 class="text-danger">Stok Habis</h4>


                            <?php } else { ?>
                                <button type="submit" class="btn btn-primary">Beli</button>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>