-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qhomedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `label`) VALUES
(1, 'Bel Pintu Tanpa Kabel IDEALIFE IL 294 Wireless Doorbell Manual', '- Merek produk IDEALIFE\r\n- Berfungsi sebagai bel pintu listrik wireless\r\n- Berbahan dasar besi berkualitas\r\n- Memiliki berat 1 kg\r\n- Berdimensi 67 cm x 25 cm x 21 cm', 'Elektronik', 55000, 10, 'bel.jpg', 'Flash Sale'),
(2, 'Keramik Lantai MULIA Neo Perlino Grey 40 40 Glossy Grey', '<li>Merek produk MULIA SPECTRUM</li>\r\n<li>Berfungsi sebagai penutup permukaan dinding dan lantai lebih rapi dan rata</li>\r\n<li>Berbahan dasar keramik</li>\r\n<li>Memiliki berat 18 kg</li>\r\n<li>Berdimensi 40 cm x 40 cm x 5 cm</l', 'Elektronik', 41000, 12, 'ubin.jpg', ''),
(3, 'Cat Kayu dan Besi Avian High Gloss Enamel 915 DARK GREY 0.9Liter', '- Merek produk AVIAN KAYU & BESI\r\n- Berfungsi sebagai sebagai cat akhir yang memberi perlindungan dan memperindah permukaan kayu dan besi baik digunakan untuk interior maupun exterior\r\n- Berbahan dasar binder, solvent, pigmen', 'Painting', 62400, 22, 'catavian.jpg', 'Flash Sale'),
(4, 'GEMBOK GRENDEL DEKKSON PUTUS ADJ', '- Merek produk DEKKSON PUTUS\r\n- Berfungsi sebagai\r\n- Berbahan dasar\r\n- Memiliki berat 0 kg\r\n- Berdimensi 0 cm x 0 cm x 0 cm', 'Tools % Hardware', 275000, 10, 'default.PNG', ''),
(5, 'BOOM SBR - RAK PISAU 520 KOTAK', 'Merek produk SUBRON/SANI\r\nBerfungsi sebagai rak pisau\r\nBerbahan dasar staonless\r\nMemiliki berat 2 kg\r\nBerdimensi 50 cm x 9 cm x 7 cm', 'Dekorasi Rumah', 25000, 12, 'rak.jpg', ''),
(7, 'Lampu Meja Hias Vas Kristal', 'Merek produk VSL\r\nBerfungsi sebagai lampu hias\r\nBerbahan dasar fiber berkualitas\r\nMemiliki berat 15 kg\r\nBerdimensi 33 cm x 33 cm x 50 cm', 'Dekorasi Rumah', 55000, 22, 'vas.jpg', ''),
(8, 'Keran GBV 4604 SINGLE LEVER BASIN MIXER 4604 Excellent Series', 'Merek produk Germany Brilliant\r\nBerfungsi sebagai keran dinding\r\nBerbahan dasar kuningan dan stainless steel 304\r\nMemiliki berat 2 kg\r\nBerdimensi 0 cm x 0 cm x 0 cm', 'Sanitary', 275000, 10, 'kran.jpg', 'Flash Sale'),
(13, 'Kenmaster 075 Gunting Beton 24 Inch Xander', 'Merek produk KENMASTER\r\nBerfungsi sebagai memotong', 'Tools & Hardware', 184590, 12, 'tang1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(66) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(2, 'Friska', 'Jatim', '2021-04-28 09:00:03', '2021-04-29 09:00:03'),
(3, '', '', '2021-04-28 11:16:52', '2021-04-29 11:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(66) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 2, 1, 'Bel Pintu Tanpa Kabel IDEALIFE IL 294 Wireless Doorbell Manual', 1, 55000, ''),
(2, 3, 3, 'Cat Kayu dan Besi Avian High Gloss Enamel 915 DARK GREY 0.9Liter', 1, 62400, ''),
(3, 3, 7, 'Lampu Meja Hias Vas Kristal', 1, 55000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(66) NOT NULL,
  `username` varchar(66) NOT NULL,
  `password` varchar(66) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
