-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 05.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detailpemesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_detailpemesanan`, `id_pemesanan`, `id_kategori`, `nama_kategori`, `jumlah`, `harga`) VALUES
(26, 25, 8, 'Setrika saja', 2, 3000),
(27, 26, 8, 'Setrika saja', 1, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `jenis`, `harga`) VALUES
(1, 'Cuci Setrika', 'Kiloan', 6000),
(2, 'Boneka Mini', 'Satuan', 6000),
(8, 'Setrika saja', 'Kiloan', 3000),
(9, 'Bad Cover', 'Kiloan', 10000),
(10, 'Gorden', 'Kiloan', 5500),
(11, 'Boneka Sedang', 'Satuan', 8000),
(12, 'Boneka Besar', 'Satuan', 10000),
(13, 'Kebaya Setelan', 'Satuan', 45000),
(14, 'Selimut', 'Kiloan', 5000),
(15, 'Jas', 'Satuan', 25000),
(18, 'Setelan Jas', 'Satuan', 30000),
(20, 'Cuci Kering Tanpa Setrika', 'Kiloan', 5000),
(23, 'Bantal / guling kecil', 'Satuan', 7000),
(24, 'Bantal / guling sedang', 'Satuan', 10000),
(25, 'Bantal / guling besar', 'Satuan', 12000),
(26, 'Jaket non kulit', 'Satuan', 9000),
(27, 'Gaun Panjang', 'Satuan', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `alamat`, `no_telp`, `jabatan`, `id_user`) VALUES
(1, '001', 'Nur Syifaul Husna', 'Jl. Mekar Sari No. 09 Surabaya', '081334859975', 'Admin', 15),
(9, '002', 'Kurniawan', 'Jl. Mutiara  No. 10 Surabaya', '08565245321', 'Kurir', 18),
(10, '003', 'Susy Astuti', 'Jl. Mutiara  No. 10 Rt. 01 Rw. 01 Padangan', '088764334167', 'Kasir', 19),
(11, '004', 'Dendi Putra', 'Jl. Kelaten No. 6 Surabaya', '088745257129', 'Staff', 24),
(12, '005', 'Karina Safitri', 'Jl. Diponegoro No. 01 Surabaya', '088134562879', 'Kasir', 25),
(13, '006', 'Mutiara ', 'Jl. Diponegoro No. 10 Surabaya', '088756452311', 'Staff', 26),
(14, '007', 'Agus Setiawan', 'Jl. Mekar No. 7 Surabaya', '088246896541', 'Kurir', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_telp`, `jenis_kelamin`, `alamat`, `id_user`) VALUES
(2, 'Abdul Haris', '08810832807', 'Pria', 'Jl. Mekar No. 88 Surabaya', 21),
(3, 'Putri', '085731777966', 'Wanita', 'Jl. Bagong No. 09 Surabaya', 22),
(4, 'Santi', '088765435671', 'Wanita', 'Jl. Soekarno No. 12 Surabaya', 28),
(5, 'Surya', '088675789098', 'Pria', 'Jl. Werkudara No. 42 Surabaya', 29),
(6, 'Rara Putri Lestari', '088126779992', 'Wanita', 'Jl. Melati No. 77 Surabya', 30),
(7, 'Daniel Putra', '088764441121', 'Pria', 'Jl. Gajah Mada No. 12 Surabaya', 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nota` varchar(15) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` enum('Boking','Proses','Selesai','Batal') NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pegawai`, `nota`, `tgl_pemesanan`, `nama_pemesan`, `no_telp`, `alamat`, `status`, `tgl_selesai`) VALUES
(25, 1, 'N-00001', '2021-05-22', 'Laili', '088976532781', 'Jl. Mutiara  No. 10 Surabaya', 'Boking', '2021-05-24'),
(26, 1, 'N-00002', '2021-05-26', 'Ridwan', '08565245321', 'Jl. Mekar Sari No.09 Surabaya', 'Boking', '2021-05-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_laundry` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_laundry`, `alamat`, `no_telp`) VALUES
(1, 'Laundry \"XYZ\"', 'Jl. Mekar Sari No. 11 Surabaya', '08565245321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(15, 'syifa', 'fac6dcc99d753552059000479582260a', 'Admin', 'Aktif'),
(18, 'kurniawan', '16ca55b4f29157780eabc6244f49d442', 'Pegawai', 'Aktif'),
(19, 'susy', 'ae2518f0370729389043d0874b2f229f', 'Pegawai', 'Aktif'),
(21, 'haris', 'c0ba88b8bca79ca3b50b96abdf431766', 'Member', 'Aktif'),
(22, 'putri', '4093fed663717c843bea100d17fb67c8', 'Member', 'Aktif'),
(23, 'rudi', '1755e8df56655122206c7c1d16b1c7e3', 'Admin', 'Aktif'),
(24, 'dendi', 'densi', 'Pegawai', 'Aktif'),
(25, 'karina', 'karina', 'Pegawai', 'Aktif'),
(26, 'mutiara', 'mutiara', 'Pegawai', 'Aktif'),
(27, 'agus', 'agus', 'Pegawai', 'Aktif'),
(28, 'santi', 'ae1d4b431ead52e5ee1788010e8ec110', 'Member', 'Aktif'),
(29, 'surya', 'aff8fbcbf1363cd7edc85a1e11391173', 'Member', 'Aktif'),
(30, 'rara', 'd8830ed2c45610e528dff4cb229524e9', 'Member', 'Aktif'),
(31, 'daniel', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 'Member', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detailpemesanan`),
  ADD KEY `fk_detail_pemesanan` (`id_pemesanan`),
  ADD KEY `fk_detailpemesanan_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_pegawai_user` (`id_user`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `fk_pelanggan_user` (`id_user`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_pemesanan_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_transaksi_pemesanan` (`id_pemesanan`),
  ADD KEY `fk_transaksi_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detailpemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `fk_detail_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `fk_detailpemesanan_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_pegawai_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pelanggan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_transaksi_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
