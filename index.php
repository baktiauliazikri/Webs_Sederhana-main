<?php
include 'koneksi.php';
$is_logged_in = isset($_SESSION['user_id']);

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
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Jahe Emprit<span>Mama Gio</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
            <?php
            session_start();
            error_reporting(0);
            $id_customer = $_SESSION['id_customer'];
            if (!isset($id_customer)) {
            ?>
                <a href="login.php">Login</a>
            <?php } else {
                $customer = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer = '$id_customer'");
                $cust = mysqli_fetch_array($customer);
            ?>
                <div class="navbar-extra">
                    <a href="customer/keranjang.php" id="shopping-cart">
                        <i data-feather="shopping-cart"></i>
                        <!-- <span class="cart-count"><?php echo $cart_count; ?></span> -->
                    </a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            <i data-feather="user"></i>
                            <?php echo $cust['nama_customer']; ?>
                        </a>
                        <div class="dropdown-menu">
                            <a href="customer/profile.php">Profile</a>
                            <a href="customer/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Menikmati Secangkir JAHE<span></span></h1>
            <p>
                Ada banyak caraku untuk menanti kedatanganmu tanpa rasa bosan, Duduk
                manis sembari kunikmati Jaheku dengan perlahan
            </p>
            <a href="#menu" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="assets/img/jahe1.jpeg" alt="TentangKami" />
            </div>
            <div class="content">
                <h3>Kenapa Memilih Jahe kami?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                    alias non repellendus, error perspiciatis dolores?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus
                    dicta natus quisquam quos sint tempore nobis rem laborum reiciendis
                    minima!
                </p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>
            Kami menyediakan berbagai macam olahan jahe dan tersedia juga bawang goreng untuk penyajian makanan anda yang lebih nikmat.
        </p>
        <div class="row">
            <?php
            $query = mysqli_query($koneksi, 'SELECT * FROM product ORDER BY id_product DESC');
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <img src="assets/product/<?php echo $data['gambar']; ?>" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="detail-product.php?id_product=<?php echo $data['id_product']; ?>" title="<?php echo $data['nama_product']; ?>">
                                    <?php echo $data['nama_product']; ?>
                                </a>
                            </h5>
                            <div class="button-container">
                                <a href="detail-product.php?id_product=<?php echo $data['id_product']; ?>" title="<?php echo $data['nama_product']; ?>" class="button">Beli</a>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>

        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Kontak Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, amet
        </p>
        <div class="row">
            <form action="send_whatsapp.php" method="POST">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" name="name" placeholder="Nama" />
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" name="email" placeholder="Email" />
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" name="phone" placeholder="Nomor Hp" />
                </div>
                <button type="submit" class="btn">Kirim pesan</button>
            </form>
        </div>
    </section>
    <!-- Kontak Section End -->

    <!-- Footer Section Start -->
    <footer>
        <div class="socials">
            <a href="#"> <i data-feather="instagram"></i></a>
            <a href="#"> <i data-feather="twitter"></i></a>
            <a href="#"> <i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
        <div class="credit">
            <p>Created by <a href="#">Giovanny sontha</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
</body>

</html>