-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2023 pada 06.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_snack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `exp_date` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `exp_date`, `gambar`) VALUES
(2, 'ISOPLUS', 'Isoplus 350ml, 1 dus isi 12pcs', 'Minuman', 35000, -1, '2024-06-25', 'ISOPLUS1.jpg'),
(3, 'Kacang', 'kacang gurih', 'Snack Kering', 20000, 0, '2024-02-25', 'Kacang.jpg'),
(4, 'Toso Coklat', 'toso kacang wijen rasa coklat isi 9', 'Snack Kering', 30000, 0, '2023-11-25', 'Toso_Kacang_Wijen_Rasa_Coklat.jpg'),
(5, 'Toso Original', 'toso kacang wijen rasa original isi 9', 'Snack Kering', 30000, -1, '2023-11-25', 'Toso_Kacang_Wijen_Original.jpg'),
(6, 'Kue Widaran', 'kue widaran 200g', 'Snack Kering', 20000, 20, '2023-12-13', 'Kue_Widaran.jpg'),
(7, 'Lanting Original', 'lanting original', 'Snack Kering', 25000, 20, '2023-12-28', 'Lanting_Original.jpg'),
(8, 'Bolu Donat Kering', 'bolu donat kering isi 18', 'Snack Basah', 25000, 20, '2023-11-29', 'Bolu_Donat_Kering.jpg'),
(9, 'Kerupuk Gadung', 'kerupuk gadung 150gr', 'Snack Kering', 20000, 20, '2024-02-25', 'Keruk_Gadung.jpg'),
(10, 'Kerupuk Ikan Tongkol', 'kerupuk ikan tongkol pcs', 'Snack Kering', 15000, 20, '2023-12-23', 'Kerupuk_Ikan_Tongkol.jpg'),
(11, 'Jipang Ketan', 'jipang ketan 1kg', 'Snack Basah', 45000, 9, '2023-11-20', 'Jipang_Ketan.jpg'),
(12, 'Kue kering sagu', 'kue kering sagu manis', 'Snack Kering', 25000, 20, '2024-02-25', 'Kue_Kering_Sagu.jpg'),
(13, 'Lanting Manis Jagung', 'lating manis rasa jagung', 'Snack Kering', 25000, 20, '2024-03-25', 'Lanting_Manis_Jagung.jpg'),
(14, 'Keripik Tempe', 'keripik tempe gurih', 'Snack Kering', 25000, 20, '2024-02-25', 'Keripik_Tempe.jpg'),
(15, 'Lanting Manis Keju', 'lanting manis rasa keju', 'Snack Kering', 25000, 20, '2024-06-25', 'Lanting_Manis_Keju1.jpg'),
(16, 'Mino Pandan', 'mino rasa pandan', 'Snack Kering', 30000, 20, '2023-12-25', 'Mino_Pandan.jpg'),
(17, 'Mino Original', 'mino rasa original', 'Snack Kering', 25000, 20, '2023-12-27', 'Mino_Original1.jpg'),
(18, 'Mino Kacang', 'mino rasa kacang', 'Snack Kering', 25000, 20, '2023-12-19', 'Mino_Kacang.jpg'),
(19, 'Mino Durian', 'mino rasa durian', 'Snack Kering', 25000, 20, '2023-12-22', 'Mino_Durian.jpg'),
(20, 'Mino Gula Merah', 'mino rasa gula merah', 'Snack Kering', 25000, 20, '2023-12-21', 'Mino_Gula_Merah.jpg'),
(21, 'Mino Nanas', 'mino rasa nanas', 'Snack Kering', 25000, 20, '2023-12-28', 'Mino_Nanas.jpg'),
(22, 'Sambel Pecel', 'sambel pecel kacang', 'Snack Basah', 20000, 20, '2023-11-30', 'Sambel_Pecel.jpg'),
(23, 'Gula Jahe', 'gula jahe manis', 'Snack Basah', 20000, 20, '0000-00-00', 'Gula_Jahe.jpg'),
(24, 'Roti Manco', 'roti manco rasa wijen', 'Snack Kering', 20000, 20, '2023-12-26', 'Manco_Wijen.jpg'),
(25, 'Pisang Sale Keju', 'pisang sale rasa keju', 'Snack Kering', 25000, 20, '2023-12-28', 'Pisang_Sale_Keju.jpg'),
(26, 'Keripik Sukun', 'keripik sukun gurih', 'Snack Kering', 20000, 20, '2024-02-25', 'Keripik_Sukun.jpg'),
(27, 'Keripik Singkong', 'keripik singkon original gurih', 'Snack Kering', 20000, 20, '2024-02-25', 'Keripik_Singkong_Original.jpg'),
(28, 'Keripik Singkong Balado', 'keripik singkong rasa balado', 'Snack Kering', 20000, 20, '2024-01-25', 'Keripik_Singkong_Balado.jpg'),
(29, 'Jenang Gula Merah', 'jenang rasa gula merah', 'Snack Basah', 20000, 20, '2023-11-23', 'Jenang_Gula_Merah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomer_tlp` int(14) NOT NULL,
  `jasa_kirim` varchar(50) NOT NULL,
  `pilih_pembayaran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `kode_transaksi`, `nama_lengkap`, `id_user`, `alamat`, `nomer_tlp`, `jasa_kirim`, `pilih_pembayaran`, `status`, `tgl_pesan`, `batas_bayar`) VALUES
(4, 'TR1692933727', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:22:12', '2023-08-26 10:22:12'),
(5, 'TR1692934991', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:43:14', '2023-08-26 10:43:14'),
(6, 'TR1692935031', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:43:54', '2023-08-26 10:43:54'),
(7, 'TR1692935275', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:48:00', '2023-08-26 10:48:00'),
(8, 'TR1692935315', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:48:38', '2023-08-26 10:48:38'),
(9, 'TR1692935351', 'Dimas', 16, '', 0, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:49:13', '2023-08-26 10:49:13'),
(10, 'TR1692935389', 'Dimas', 16, 'adsad', 8412412, 'JNE', 'BRI-12345', 'Belum Di Bayar', '2023-08-25 10:50:01', '2023-08-26 10:50:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(5, 4, 2, 'ISOPLUS', 1, 35000, ''),
(6, 5, 2, 'ISOPLUS', 1, 35000, ''),
(7, 6, 3, 'Kacang', 1, 20000, ''),
(8, 7, 4, 'Toso Coklat', 15, 30000, ''),
(9, 8, 3, 'Kacang', 19, 20000, ''),
(10, 9, 2, 'ISOPLUS', 19, 35000, ''),
(11, 10, 5, 'Toso Original', 21, 30000, '');

--
-- Trigger `tb_pesanan`
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
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomer_tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `nomer_tlp`, `email`, `role_id`) VALUES
(14, 'Admin Toko', 'admin', '123', '082325253463', 'dputrariyanto@gmail.com', 1),
(15, 'User', 'user', '123', '082325253463', 'dputrariyanto@gmail.com', 2),
(16, 'Dimas', 'dimas01', '123', '0812334235', 'dputrariyanto@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
