-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 02:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022s_hanif_sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `idbeli` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `idongkir` int(5) NOT NULL,
  `tglbeli` date NOT NULL,
  `total` int(11) NOT NULL,
  `bukti` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `namakota` varchar(80) NOT NULL,
  `tarifnya` float NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`idbeli`, `id`, `idongkir`, `tglbeli`, `total`, `bukti`, `status`, `namakota`, `tarifnya`, `alamat`) VALUES
(43, 4, 8, '2022-06-13', 367000, '1712kwitansi.png', 'Diterima', 'Martapura', 17000, 'Jl. Bunga Melati kota Banjarbaru'),
(44, 6, 3, '2022-06-14', 75000, '6846IMG.20211125.WA0000.jpg', 'Diterima', 'Barabai', 5000, 'Jl. Trikora Rt.32 Rw.5 Kode Pos 70721 Guntung Manggis'),
(45, 3, 6, '2022-06-15', 1424000, '5258IMG.20210815.WA0023.jpg', 'Diterima', 'Marabahan', 25000, 'Gang Hijrah Raya, Muhibbin 4 Sekumpul'),
(46, 6, 12, '2022-05-31', 1399000, '5799IMG.20210910.WA0004.jpg', 'Diterima', 'COD', 0, 'Jl. Trikora Rt.32 Rw.5 Kode Pos 70721 Guntung Manggis');

-- --------------------------------------------------------

--
-- Table structure for table `beliproduk`
--

CREATE TABLE `beliproduk` (
  `idbeliproduk` int(5) NOT NULL,
  `idbeli` int(5) NOT NULL,
  `idtanam` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `namanya` varchar(80) NOT NULL,
  `harganya` float NOT NULL,
  `subharga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beliproduk`
--

INSERT INTO `beliproduk` (`idbeliproduk`, `idbeli`, `idtanam`, `jumlah`, `namanya`, `harganya`, `subharga`) VALUES
(37, 43, 20, 5, 'Mouse Logitech', 70000, 350000),
(38, 44, 20, 1, 'Mouse Logitech', 70000, 70000),
(39, 45, 22, 1, 'VOYAGER68 Lightyear Edition CNC Alu South Facing Mechanical Keyboard - BAREBONES', 1399000, 1399000),
(40, 46, 22, 1, 'VOYAGER68 Lightyear Edition CNC Alu South Facing Mechanical Keyboard - BAREBONES', 1399000, 1399000);

--
-- Triggers `beliproduk`
--
DELIMITER $$
CREATE TRIGGER `membeli` AFTER INSERT ON `beliproduk` FOR EACH ROW BEGIN 
	UPDATE tanam SET stok = stok - NEW.jumlah, 
                     terjual = terjual + NEW.jumlah 
    WHERE idtanam = NEW.idtanam;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(5) NOT NULL,
  `notransaksi` varchar(15) NOT NULL,
  `nservice1` varchar(100) NOT NULL,
  `ket1` text NOT NULL,
  `jumlah1` int(11) NOT NULL,
  `harga1` float NOT NULL,
  `subharga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`iddetail`, `notransaksi`, `nservice1`, `ket1`, `jumlah1`, `harga1`, `subharga`) VALUES
(2, '2022061301', 'Ganti Thermal Paste Laptop/Komputer', 'Menggunakan Arctic Cooling MX4 4g', 2, 165000, 330000),
(4, '2022061341', 'Install Ulang Komputer/Laptop', 'termasuk OS dan Aplikasi.', 1, 150000, 150000),
(5, '2022061320', 'Ganti Thermal Paste Laptop/Komputer', 'Menggunakan Deepcool Z9', 1, 90000, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `idfavorit` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `idtanam` int(5) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`idfavorit`, `id`, `idtanam`, `tgl`) VALUES
(1, 6, 20, '2022-06-12'),
(8, 3, 21, '2022-06-09'),
(9, 3, 23, '2022-06-10'),
(11, 4, 22, '2022-06-13'),
(12, 2, 21, '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `kirim`
--

CREATE TABLE `kirim` (
  `idkirim` int(5) NOT NULL,
  `idbeli` int(5) NOT NULL,
  `idkurir` int(3) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `ket` text NOT NULL,
  `statuskirim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kirim`
--

INSERT INTO `kirim` (`idkirim`, `idbeli`, `idkurir`, `penerima`, `foto`, `ket`, `statuskirim`) VALUES
(3, 43, 3, 'adiknya', '3077IMG.20191218.135559..2..jpg', 'Barang Sampai', 'Selesai'),
(4, 44, 3, 'pembeli yg bersangkutan', '7143IMG.20200811.092255..2..jpg', 'Barang Sampai', 'Selesai'),
(5, 45, 2, 'yg bersangkutan', '6712IadsMG.20191218.135559..2..jpg', 'Barang Sampai.', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `idkurir` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namakurir` varchar(80) NOT NULL,
  `kontakkurir` varchar(50) NOT NULL,
  `alamatkurir` text NOT NULL,
  `jkkurir` enum('0','1') NOT NULL,
  `layanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`idkurir`, `username`, `password`, `namakurir`, `kontakkurir`, `alamatkurir`, `jkkurir`, `layanan`) VALUES
(2, 'ikhwan', 'ikhwan', 'Akhmad Ikhwan', '051178659932', 'Banjarmasin', '0', 'JNE'),
(3, 'popon', 'popon', 'Popon Sugiantoro', '085369696664', 'Barabai', '0', 'J&T Express');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `idongkir` int(2) NOT NULL,
  `kota` varchar(80) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`idongkir`, `kota`, `tarif`) VALUES
(2, 'Banjarbaru', 15000),
(3, 'Barabai', 5000),
(4, 'Kotabaru', 17000),
(5, 'Banjarmasin', 20000),
(6, 'Marabahan', 25000),
(7, 'Kandangan', 20000),
(8, 'Martapura', 17000),
(9, 'Pelaihari', 18000),
(10, 'Batakan', 25000),
(11, 'Landasan Ulin', 10000),
(12, 'COD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idpengeluaran` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `ket` text NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`idpengeluaran`, `tgl`, `ket`, `total`) VALUES
(4, '2022-06-13', 'Listrik', 300000),
(5, '2022-06-13', 'Bensin', 30000),
(6, '2022-06-13', 'Air Bersih', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idservice` int(5) NOT NULL,
  `nservice` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idservice`, `nservice`, `ket`, `total`) VALUES
(1, 'Install Ulang Komputer/Laptop', 'termasuk OS dan Aplikasi.', 150000),
(2, 'Install Ulang Komputer/Laptop', 'cuma OS saja.', 100000),
(3, 'Ganti Thermal Paste Laptop/Komputer', 'Menggunakan Cooler Master HTK-002', 45000),
(4, 'Ganti Thermal Paste Laptop/Komputer', 'Menggunakan Arctic Cooling MX4 4g', 165000),
(5, 'Ganti Thermal Paste Laptop/Komputer', 'Menggunakan Deepcool Z9', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `tanam`
--

CREATE TABLE `tanam` (
  `idtanam` int(5) NOT NULL,
  `namatanam` varchar(80) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `modal` float NOT NULL,
  `harga` float NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(4) NOT NULL,
  `terjual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanam`
--

INSERT INTO `tanam` (`idtanam`, `namatanam`, `kategori`, `modal`, `harga`, `deskripsi`, `gambar`, `stok`, `terjual`) VALUES
(20, 'Mouse Logitech', 'Mouse', 50000, 70000, 'dari taiwan', '9663mouse2.jpg', 50, 6),
(21, 'NOVA Ultralight Wireless Gaming Mouse 2.4ghz by Press Play', 'Mouse', 250000, 300000, 'NOVA v2 Wireless Gaming Mouse. Semua stock sudah v2, tidak ada lagi yg v1.', '371316e4c1a4.fbee.430d.adab.1741de5e23df.jpg', 2, 0),
(22, 'VOYAGER68 Lightyear Edition CNC Alu South Facing Mechanical Keyboard - BAREBONES', 'Keyboard', 900000, 1399000, 'Software bisa di download dari link di Instagram @pressplayid.', '71185ce1faa0.96c5.4dd8.ae84.b82965c73fc1.jpg', 3, 2),
(23, 'Type C Coiled Cable Mechanical Keyboard Aviator by Press Play - GRAPHITE, V1', 'Keyboard', 250000, 349000, 'Specs:\r\n- Reverse Coiled\r\n- Double Sleeved with Techflex mesh\r\n- Total length +/- 1.6m', '43083e412be2.9a1c.48c8.9af6.59c3e1168fbc.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tanammasuk`
--

CREATE TABLE `tanammasuk` (
  `idtanammasuk` int(5) NOT NULL,
  `idtanam` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `hargamasuk` float NOT NULL,
  `sumber` varchar(80) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanammasuk`
--

INSERT INTO `tanammasuk` (`idtanammasuk`, `idtanam`, `tgl`, `jumlah`, `hargamasuk`, `sumber`, `catatan`) VALUES
(23, 20, '2022-06-09', 2, 50000, 'sunken', 'warna hitam'),
(24, 20, '2022-06-11', 1, 50000, 'sunken', 'varian putih'),
(25, 21, '2022-06-13', 2, 250000, 'Pressplay', 'versi 1'),
(26, 23, '2022-06-12', 3, 250000, 'Pressplay', 'varian graphite, flux dan rust');

--
-- Triggers `tanammasuk`
--
DELIMITER $$
CREATE TRIGGER `delete_masuk` AFTER DELETE ON `tanammasuk` FOR EACH ROW BEGIN 
	UPDATE tanam SET stok = stok - OLD.jumlah
    WHERE idtanam = OLD.idtanam;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_masuk` AFTER INSERT ON `tanammasuk` FOR EACH ROW BEGIN
	UPDATE tanam SET stok = stok + NEW.jumlah
    WHERE idtanam = NEW.idtanam;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_masuk` AFTER UPDATE ON `tanammasuk` FOR EACH ROW BEGIN
	UPDATE tanam SET stok = stok - OLD.jumlah, 
                     stok = stok + NEW.jumlah 
    WHERE idtanam = NEW.idtanam;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tanamrusak`
--

CREATE TABLE `tanamrusak` (
  `idtanamrusak` int(5) NOT NULL,
  `idtanam` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanamrusak`
--

INSERT INTO `tanamrusak` (`idtanamrusak`, `idtanam`, `tgl`, `jumlah`, `catatan`) VALUES
(2, 20, '2022-06-20', 1, 'switch on/off tidak berfungsi.');

--
-- Triggers `tanamrusak`
--
DELIMITER $$
CREATE TRIGGER `gaRusak` AFTER DELETE ON `tanamrusak` FOR EACH ROW BEGIN 
	UPDATE tanam SET stok = stok + OLD.jumlah
    WHERE idtanam = OLD.idtanam;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jadiRusak` AFTER INSERT ON `tanamrusak` FOR EACH ROW BEGIN 
	UPDATE tanam SET stok = stok - NEW.jumlah
    WHERE idtanam = NEW.idtanam;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ubahRusak` AFTER UPDATE ON `tanamrusak` FOR EACH ROW BEGIN
	UPDATE tanam SET stok = stok + OLD.jumlah, 
                     stok = stok - NEW.jumlah 
    WHERE idtanam = NEW.idtanam;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `notransaksi` varchar(15) NOT NULL,
  `id` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `barang` varchar(100) NOT NULL,
  `total` double NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`notransaksi`, `id`, `tgl`, `barang`, `total`, `catatan`) VALUES
('2022061301', 3, '2022-06-10', 'Laptop Acer E1-410', 330000, '-'),
('2022061320', 2, '2022-06-14', 'Laptop Asus ROG Zephyrus M16', 90000, '-'),
('2022061341', 6, '2022-06-13', 'PC Ryzen 3 2200g', 150000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jk` enum('0','1') NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `alamat`, `telp`, `email`, `jk`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '-', '-', '-', '0', 'admin'),
(2, 'Tuman Prakasa', 'tuman', 'tuman', 'Landasan Ulin, Banjarbaru.', '628215213642', 'tumah_prakasa@gmail.com', '0', 'pelanggan'),
(3, 'Ateez Holic', 'ateez', 'ateez', 'Gang Hijrah Raya, Muhibbin 4 Sekumpul', '081329123219', 'ateez_holic@gmail.com', '0', 'pelanggan'),
(4, 'Firdaus Mikail', 'firdaus', 'firdaus', 'Jl. Bunga Melati ', '08971441232', 'firdausmikail@gmail.com', '0', 'pelanggan'),
(6, 'Soo Hyun', 'soohyun', 'soohyun', 'Jl. Trikora Rt.32 Rw.5 Kode Pos 70721 Guntung Manggis', '081222334151', 'soohyun_@gmail.co.id', '1', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`idbeli`),
  ADD KEY `id` (`id`),
  ADD KEY `idongkir` (`idongkir`);

--
-- Indexes for table `beliproduk`
--
ALTER TABLE `beliproduk`
  ADD PRIMARY KEY (`idbeliproduk`),
  ADD KEY `idbeli` (`idbeli`),
  ADD KEY `idtanam` (`idtanam`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `notransaksi` (`notransaksi`),
  ADD KEY `nservice1` (`nservice1`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`idfavorit`),
  ADD KEY `id` (`id`),
  ADD KEY `idtanam` (`idtanam`);

--
-- Indexes for table `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`idkirim`),
  ADD KEY `idbeli` (`idbeli`),
  ADD KEY `idkurir` (`idkurir`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`idkurir`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`idongkir`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idpengeluaran`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`);

--
-- Indexes for table `tanam`
--
ALTER TABLE `tanam`
  ADD PRIMARY KEY (`idtanam`);

--
-- Indexes for table `tanammasuk`
--
ALTER TABLE `tanammasuk`
  ADD PRIMARY KEY (`idtanammasuk`),
  ADD KEY `idtanam` (`idtanam`);

--
-- Indexes for table `tanamrusak`
--
ALTER TABLE `tanamrusak`
  ADD PRIMARY KEY (`idtanamrusak`),
  ADD KEY `idtanam` (`idtanam`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `idbeli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `beliproduk`
--
ALTER TABLE `beliproduk`
  MODIFY `idbeliproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `iddetail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `idfavorit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kirim`
--
ALTER TABLE `kirim`
  MODIFY `idkirim` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `idkurir` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `idongkir` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idpengeluaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanam`
--
ALTER TABLE `tanam`
  MODIFY `idtanam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tanammasuk`
--
ALTER TABLE `tanammasuk`
  MODIFY `idtanammasuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tanamrusak`
--
ALTER TABLE `tanamrusak`
  MODIFY `idtanamrusak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beliproduk`
--
ALTER TABLE `beliproduk`
  ADD CONSTRAINT `beliproduk_ibfk_1` FOREIGN KEY (`idbeli`) REFERENCES `beli` (`idbeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`notransaksi`) REFERENCES `transaksi` (`notransaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`idtanam`) REFERENCES `tanam` (`idtanam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanamrusak`
--
ALTER TABLE `tanamrusak`
  ADD CONSTRAINT `tanamrusak_ibfk_1` FOREIGN KEY (`idtanam`) REFERENCES `tanam` (`idtanam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
