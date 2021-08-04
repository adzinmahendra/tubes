-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 08:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `keterangan_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_sumber` int(11) NOT NULL,
  `id_gudang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan_barang`, `harga_barang`, `tanggal`, `jumlah`, `jenis`, `satuan`, `gambar`, `id_sumber`, `id_gudang`, `id_kategori`) VALUES
(5, 'Stroberi', 'Stroberi Lembang', '34000', '2020-02-04', 10, '', 'Kg', 'product-2.jpg', 3, 1, 2),
(6, 'Kol Ungu', 'Kol Ungu Lembang', '20900', '2020-02-11', 5, 'Sayur', '', 'product-4.jpg', 3, 1, 1),
(7, 'Brokoli', 'Brokoli Banjaran', '34000', '2020-02-10', 0, '', '', 'product-6.jpg', 1, 1, 0),
(8, 'Wortel', 'Wortel Majalaya', '20900', '2020-02-10', 0, '', '', 'product-7.jpg', 1, 1, 0),
(11, 'Tomat', 'Tomat Merah', '20900', '2020-02-11', 0, '', '', 'product-5.jpg', 1, 1, 0),
(12, 'Jus', 'Jus dari sayr dan buah', '20500', '2020-02-05', 0, '', '', 'product-8.jpg', 1, 1, 0),
(13, 'Cabai', 'Cabai Merah dari Bogor', '60900', '2020-02-13', 0, '', '', 'product-12.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `keterangan_cart` varchar(255) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `keterangan_cart`, `jumlah_bayar`, `jumlah_barang`, `size`, `id_transaksi`, `id_barang`, `email`, `id_user`) VALUES
(6, 'beli', 1, 1, '', 1, 5, 'guest', 0);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `keterangan_checkout` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jumlah_harga` double NOT NULL,
  `jumlah_item` double NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `keterangan_checkout`, `email`, `tanggal`, `id_pesanan`, `jumlah_harga`, `jumlah_item`, `id_pembayaran`, `id_user`) VALUES
(2, '', 'qwe@gmail.com', '2021-08-03', 1, 143800, 5, 0, 2),
(3, '', 'qwe@gmail.com', '2021-08-03', 2, 54900, 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_cart`
--

CREATE TABLE `db_cart` (
  `id_db_cart` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `keterangan_cart` varchar(255) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_cart`
--

INSERT INTO `db_cart` (`id_db_cart`, `id_cart`, `keterangan_cart`, `jumlah_bayar`, `jumlah_barang`, `size`, `id_transaksi`, `id_barang`, `id_user`, `email`, `id_pesanan`) VALUES
(1, 2, 'beli', 1, 3, '', 1, 5, 2, '', 1),
(2, 3, 'beli', 1, 2, '', 1, 6, 2, '', 1),
(3, 4, 'beli', 1, 1, '', 1, 6, 2, '', 2),
(4, 5, 'beli', 1, 1, '', 1, 5, 2, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `id_distribusi` int(11) NOT NULL,
  `nama_distributor` varchar(255) NOT NULL,
  `keterangan_distributor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL,
  `keterangan_gudang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `keterangan_gudang`) VALUES
(1, 'Gudang Amanah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `gambar_kategori`) VALUES
(1, 'Sayuran', 'category_sayur.jpg'),
(2, 'Buah-buahan', 'category-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `keterangan_konsumen` varchar(255) NOT NULL,
  `alamat_konsumen` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `no_telepon_konsumen` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_depan`, `nama_belakang`, `keterangan_konsumen`, `alamat_konsumen`, `kota`, `no_telepon_konsumen`, `kode_pos`, `email`, `id_user`) VALUES
(3, 'Annissa', 'Angela', '', '', 'qwe', '082282710200', '', 'qwe@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `keuntungan` double NOT NULL,
  `kerugian` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id_market` int(11) NOT NULL,
  `nama_market` varchar(255) NOT NULL,
  `alamat_market` varchar(255) NOT NULL,
  `keterangan_market` varchar(255) NOT NULL,
  `nama_penanggung_jawab` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id_market`, `nama_market`, `alamat_market`, `keterangan_market`, `nama_penanggung_jawab`, `no_telepon`) VALUES
(1, 'Pasar Andir', 'Jalan Andir', 'Pasar pagi', '', ''),
(2, 'Pasar Kordon', 'Jalan ciwastra', 'Pasar Harian', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis_pembayaran`) VALUES
(1, 'Transfer Bank'),
(2, 'Kartu Debit'),
(3, 'Paypal'),
(4, 'Go-Pay');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `sumber_barang` varchar(255) NOT NULL,
  `keterangan_penerimaan` varchar(255) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `tanggal_penerimaan` int(11) NOT NULL,
  `tanggal_batas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id_penerimaan`, `id_barang`, `sumber_barang`, `keterangan_penerimaan`, `tanggal_pengadaan`, `tanggal_penerimaan`, `tanggal_batas`) VALUES
(15, 5, '', '', '2021-07-29', 0, '0000-00-00'),
(16, 5, '', '', '2021-07-29', 0, '0000-00-00'),
(17, 5, '', '', '2021-07-29', 0, '0000-00-00'),
(18, 5, '', '', '2021-07-29', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pengelolaan`
--

CREATE TABLE `pengelolaan` (
  `id_pengelolaan` int(11) NOT NULL,
  `pengelolaan_gudang` int(11) NOT NULL,
  `keterangan_pengelolaan` varchar(255) NOT NULL,
  `pengelola` varchar(255) NOT NULL,
  `id_gudang` int(11) NOT NULL,
  `id_penerimaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `keterangan_penjualan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tangal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `grup_pesanan` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `grup_pesanan`, `jumlah_bayar`, `jumlah_item`, `id_transaksi`, `id_user`, `email`, `tgl_pesan`) VALUES
(1, 0, 143800, 5, 0, 2, 'qwe@gmail.com', '2021-08-03'),
(2, 0, 54900, 2, 0, 2, 'qwe@gmail.com', '2021-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `isi_saran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(11) NOT NULL,
  `nama_sumber` varchar(255) NOT NULL,
  `alamat_sumber` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id_sumber`, `nama_sumber`, `alamat_sumber`, `no_telepon`) VALUES
(1, 'Albert Cobain', 'New Holland Bandung', '+1235786445'),
(3, 'Callumn Britte', 'Holland', '+1234454321'),
(5, 'Gogon', 'CimahiBandung', '+1234454321');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `keterangan_transaksi` varchar(255) NOT NULL,
  `id_market` int(11) NOT NULL,
  `id_distribusi` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 'admin@mail.com'),
(2, 'qwe', '202cb962ac59075b964b07152d234b70', 'user', 'qwe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `keterangan_wishlist` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `keterangan_wishlist`, `total`, `id_barang`) VALUES
(1, 0, 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_gudang` (`id_gudang`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `email` (`email`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `db_cart`
--
ALTER TABLE `db_cart`
  ADD PRIMARY KEY (`id_db_cart`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id_distribusi`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id_market`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `pengelolaan`
--
ALTER TABLE `pengelolaan`
  ADD PRIMARY KEY (`id_pengelolaan`),
  ADD KEY `id_gudang` (`id_gudang`),
  ADD KEY `id_penerimaan` (`id_penerimaan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD KEY `email` (`email`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_market` (`id_market`),
  ADD KEY `id_penjualan` (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_cart`
--
ALTER TABLE `db_cart`
  MODIFY `id_db_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_distribusi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id_market` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengelolaan`
--
ALTER TABLE `pengelolaan`
  MODIFY `id_pengelolaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_sumber`) REFERENCES `sumber` (`id_sumber`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`email`) REFERENCES `konsumen` (`email`);

--
-- Constraints for table `pengelolaan`
--
ALTER TABLE `pengelolaan`
  ADD CONSTRAINT `pengelolaan_ibfk_1` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pengelolaan_ibfk_2` FOREIGN KEY (`id_penerimaan`) REFERENCES `penerimaan` (`id_penerimaan`) ON UPDATE CASCADE;

--
-- Constraints for table `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `saran_ibfk_1` FOREIGN KEY (`email`) REFERENCES `konsumen` (`email`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
