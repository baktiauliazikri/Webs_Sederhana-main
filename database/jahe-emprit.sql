-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 06:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jahe-emprit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
('AD001', 'admin', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transaksi`
--

CREATE TABLE `bukti_transaksi` (
  `id_bukti` int(11) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `bukti_transaksi` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bukti_transaksi`
--

INSERT INTO `bukti_transaksi` (`id_bukti`, `id_transaksi`, `bukti_transaksi`, `status`) VALUES
(1, 'trans_2', 'WhatsApp Image 2019-05-29 at 20.26.18.jpeg', 'Valid'),
(2, 'trans_3', 'portrait-asian-boy-glasses-showing-260nw-454434301.png', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(30) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `email`, `password`, `telp`) VALUES
('Customer_1', 'Bakti', 'Padang', 'bakti@gmail.com', '123', '08776521234'),
('Customer_2', 'customer', 'Padang', 'customer@gmail.com', '123', '085782305163'),
('Customer_3', 'test', 'test', 'test@tes.com', '123', '1212'),
('Customer_4', 'test1', 'test1', 'test1@t.com', '123', '121');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Jahe Emprit'),
(2, 'Minuman'),
(3, 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` varchar(30) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `id_product` varchar(30) NOT NULL,
  `nama_product` varchar(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `subtotal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_transaksi`, `id_customer`, `id_product`, `nama_product`, `qty`, `harga`, `subtotal`) VALUES
('Keranjang_1', 'trans_1', 'Customer_2', 'Product_3', 'Thai Thea', 1, 6000, 6000),
('Keranjang_2', 'trans_2', 'Customer_1', 'Product_3', 'Thai Thea', 6, 6000, 36000),
('Keranjang_3', 'trans_3', 'Customer_1', 'Product_1', 'aeqwe', 2, 131, 262),
('Keranjang_4', 'trans_4', 'Customer_1', 'Product_4', 'Jahe Emprit', 1, 35000, 35000),
('Keranjang_5', 'trans_4', 'Customer_1', 'Product_3', 'Wedang Ronde', 1, 10000, 10000),
('Keranjang_6', 'Belum Ada Transaksi', 'Customer_1', 'Product_2', ' Bawang Goreng', 1, 35000, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `biaya_kurir` int(30) NOT NULL,
  `waktu_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `biaya_kurir`, `waktu_pengiriman`) VALUES
(1, 'JNE', 9000, '2-4 Hari'),
(3, 'J&T Expresss', 10000, '2-4 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(30) NOT NULL,
  `nama_product` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `description` text NOT NULL,
  `stok` int(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga`, `description`, `stok`, `kategori`, `gambar`) VALUES
('Product_1', 'Wedang jahe', 25000, 'Wedang jahe adalah hidangan minuman sari jahe tradisional dari daerah Jawa Tengah, DI Yogyakarta dan Jawa Timur, Indonesia yang umumnya disajikan hangat atau panas. Wedang jahe juga kadang disebut sebagai teh jahe, meskipun sama sekali tidak mengandung daun teh.', 10, 'Minuman', 'jahewell.jpeg'),
('Product_2', ' Bawang Goreng', 35000, 'Bawang goreng adalah bawang merah iris yang digoreng hingga berwarna keemasan dan renyah. Bawang goreng ini adalah bumbu tabur yang lazim digunakan sebagai garnis pelengkap atau penyedap yang ditaburkan di atas aneka masakan Indonesia.', 15, 'Makanan', 'bawanggoreng.jpg'),
('Product_3', 'Wedang Ronde', 10000, 'Wedang ronde adalah salah satu minuman khas Jawa Tengah. Minuman ini mengandung ramuan agak pedas dengan penganan bulat-bulat kecil di dalamnya. Pembuatan wedang ronde terdiri dari kuah jahe yang berisi ronde yang berbentuk bulat-bulat.', 9, 'Minuman', 'Ronde.jpg'),
('Product_4', 'Jahe Emprit', 35000, 'Jahe emprit adalah jenis jahe yang memiliki bentuk rimpang kecil, rata, dan cenderung pipih. Jahe emprit memiliki aroma dan rasa yang lebih kuat daripada jahe biasa, dengan kandungan minyak atsiri yang lebih tinggi, terutama gingerol dan zingeron. Jahe emprit juga memiliki rasa yang lebih pedas, tetapi tekstur yang lebih lembut daripada jenis jahe lain. ', 14, 'Jahe Emprit', 'jahe21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `logo_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`, `logo_bank`) VALUES
(2, 'BCA', '12321321', 'Supriyadi', 'logo-bca.jpg'),
(3, 'BNI', '12321313', 'Suryono', 'logo-bni.jpg'),
(5, 'Mandiri', '140411234', 'Eka Wijaya', 'logo-mandiri.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `telepon` int(30) NOT NULL,
  `catatan_pembelian` text NOT NULL,
  `alamat` text NOT NULL,
  `total` int(30) NOT NULL,
  `no_rek` int(30) NOT NULL,
  `kurir` varchar(30) NOT NULL,
  `no_resi` varchar(30) NOT NULL,
  `tgl_transaksi` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `nama_customer`, `telepon`, `catatan_pembelian`, `alamat`, `total`, `no_rek`, `kurir`, `no_resi`, `tgl_transaksi`, `status`) VALUES
('trans_1', 'Customer_2', 'Bayu Junis Pribadi', 2147483647, 'jangan ada yang lecet', 'Perumahan GDC Sektor Melati Blok C-2/No.52 Kota Depok, Jawa Barat', 15000, 12321321, 'JNE', 'Belum Dikirim', '30 Jul 202410:04', 'Menunggu Pembayaran'),
('trans_2', 'Customer_1', 'Wahyudi MIS', 2147483647, 'tidak boleh lecet', 'Di Kota Bogor, Jawa Barat', 45000, 12321321, 'JNE', '12312312', '01 Aug 2024 01:19', 'Transaksi Selesai'),
('trans_3', 'Customer_1', 'a', 2, 'a', 'A', 9262, 12321321, 'JNE', 'Belum Dikirim', '01 Aug 2024 10:23', 'Pesanan Dikirim'),
('trans_4', 'Customer_1', 'Bakti', 2147483647, 'test', 'test', 55000, 12321321, 'J&T Expresss', 'Belum Dikirim', '01 Aug 2024 11:31', 'Menunggu Pembayaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
