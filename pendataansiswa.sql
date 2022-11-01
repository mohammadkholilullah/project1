-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2022 pada 10.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataansiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ass`
--

CREATE TABLE `data_ass` (
  `id` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `soal1` text NOT NULL,
  `pilihan1` varchar(10) NOT NULL,
  `soal2` text NOT NULL,
  `pilihan2` varchar(10) NOT NULL,
  `soal3` text NOT NULL,
  `pilihan3` varchar(10) NOT NULL,
  `soal4` text NOT NULL,
  `pilihan4` varchar(10) NOT NULL,
  `soal5` text NOT NULL,
  `pilihan5` varchar(10) NOT NULL,
  `soal6` text NOT NULL,
  `pilihan6` varchar(10) NOT NULL,
  `soal7` text NOT NULL,
  `pilihan7` varchar(10) NOT NULL,
  `soal8` text NOT NULL,
  `pilihan8` varchar(10) NOT NULL,
  `soal9` text NOT NULL,
  `pilihan9` varchar(10) NOT NULL,
  `soal10` text NOT NULL,
  `pilihan10` varchar(10) NOT NULL,
  `soal11` text NOT NULL,
  `pilihan11` varchar(10) NOT NULL,
  `soal12` text NOT NULL,
  `pilihan12` varchar(10) NOT NULL,
  `soal13` text NOT NULL,
  `pilihan13` varchar(10) NOT NULL,
  `soal14` text NOT NULL,
  `pilihan14` varchar(10) NOT NULL,
  `soal15` text NOT NULL,
  `pilihan15` varchar(10) NOT NULL,
  `soal16` text NOT NULL,
  `pilihan16` varchar(10) NOT NULL,
  `soal17` text NOT NULL,
  `pilihan17` varchar(10) NOT NULL,
  `soal18` text NOT NULL,
  `pilihan18` varchar(10) NOT NULL,
  `soal19` text NOT NULL,
  `pilihan19` varchar(10) NOT NULL,
  `soal20` text NOT NULL,
  `pilihan20` varchar(10) NOT NULL,
  `soal21` text NOT NULL,
  `pilihan21` varchar(10) NOT NULL,
  `soal22` text NOT NULL,
  `pilihan22` varchar(10) NOT NULL,
  `soal23` text NOT NULL,
  `pilihan23` varchar(10) NOT NULL,
  `soal24` text NOT NULL,
  `pilihan24` varchar(10) NOT NULL,
  `soal25` text NOT NULL,
  `pilihan25` varchar(10) NOT NULL,
  `soal26` text NOT NULL,
  `pilihan26` varchar(10) NOT NULL,
  `soal27` text NOT NULL,
  `pilihan27` varchar(10) NOT NULL,
  `soal28` text NOT NULL,
  `pilihan28` varchar(10) NOT NULL,
  `soal29` text NOT NULL,
  `pilihan29` varchar(10) NOT NULL,
  `soal30` text NOT NULL,
  `pilihan30` varchar(10) NOT NULL,
  `soal31` text NOT NULL,
  `pilihan31` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ass`
--

INSERT INTO `data_ass` (`id`, `nama`, `soal1`, `pilihan1`, `soal2`, `pilihan2`, `soal3`, `pilihan3`, `soal4`, `pilihan4`, `soal5`, `pilihan5`, `soal6`, `pilihan6`, `soal7`, `pilihan7`, `soal8`, `pilihan8`, `soal9`, `pilihan9`, `soal10`, `pilihan10`, `soal11`, `pilihan11`, `soal12`, `pilihan12`, `soal13`, `pilihan13`, `soal14`, `pilihan14`, `soal15`, `pilihan15`, `soal16`, `pilihan16`, `soal17`, `pilihan17`, `soal18`, `pilihan18`, `soal19`, `pilihan19`, `soal20`, `pilihan20`, `soal21`, `pilihan21`, `soal22`, `pilihan22`, `soal23`, `pilihan23`, `soal24`, `pilihan24`, `soal25`, `pilihan25`, `soal26`, `pilihan26`, `soal27`, `pilihan27`, `soal28`, `pilihan28`, `soal29`, `pilihan29`, `soal30`, `pilihan30`, `soal31`, `pilihan31`) VALUES
(186, 'hendri', 'Mampu berbicara dengan jelas', 'ya', 'Pemalu dan tidak percaya diri', 'tdk', 'Mudah tersinggung', 'ya', 'Kurang perbendahaan kata', 'ya', 'Sulit bergaul dengan sebaya', 'tdk', 'Mudah marah', 'tdk', 'Mengalami kesulitan terhadap lingkugan yang baru', 'ya', 'Suka mengamuk dan merusak barang orang lain', 'ya', 'Suka mengganggu temannya', 'ya', 'Membutuhkan bantuan orang lain dalam melakukan sesuatu', 'ya', 'Kesulitan dalam melakukan gerakan', 'ya', 'Suka melamun', 'ya', 'Peka terhadap sentuhan', 'ya', 'Melakukan sesuatu tergantung mood', 'tdk', 'Sulit memusatkan perhatian', 'ya', 'Rasa ingin tahu besar', 'ya', 'Kehilangan keseimbangan', 'tdk', 'Bentuk tubuh merosot dan agak bungkuk', 'ya', 'Tidak mampu duduk atau berjalan', 'ya', 'Jari jari tangan kaku dan tidak dapat menggenggam', 'ya', 'Ada bagian anggota gerak yang tidak lengkap/lebih kecil', 'ya', 'Mampu mengucap kata/kalimat dengan jelas', 'ya', 'Mampu membaca kata/kalimat', 'tdk', 'Mampu menulis kata/kalimat', '', 'Mampu melakukan perhitungan sederhana', 'tdk', 'Mampu melakukan perjumlahan dan pengurangan', 'ya', 'Mampu mewarnai', '', 'Mampu menjiplak gambar/pola', '', 'Mampu membedakan warna', '', 'Mampu menyebutkan nama benda yang diperintahkan', '', 'Mampu menyebutkan nama buah/hewan sesuai gambar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(100) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_masuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `nama_barang`, `jumlah`, `tanggal_masuk`) VALUES
(56, 'TV', 1000, '2022-10-10'),
(60, 'Sempak', 20, '2022-10-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `id` int(100) NOT NULL,
  `nama_pengurus` varchar(30) NOT NULL,
  `ttl` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `poto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengurus`
--

INSERT INTO `data_pengurus` (`id`, `nama_pengurus`, `ttl`, `jk`, `jabatan`, `hp`, `alamat`, `poto`) VALUES
(68, 'Akun contoh', 'Contoh, 12 Mei 2022', 'Laki-Laki', 'Ketua', '089998889009', 'Desa contoh', '182629849_Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(100) NOT NULL,
  `nik` bigint(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pendidikan` varchar(12) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `nama_ibu` varchar(10) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `masuk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `poto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nik`, `nama`, `ttl`, `jk`, `status`, `pendidikan`, `hp`, `nama_ibu`, `nama_ayah`, `masuk`, `alamat`, `poto`) VALUES
(54, 3210175605950002, 'Contoh', 'Contoh, 12 Mei 2022', 'Laki-Laki', 'Yatim', 'SMA', '087667887665', 'Ade', 'Adi', '2022-02-12', 'Desa contoh ', '692079740_Tulips.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `leveluser` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `leveluser`) VALUES
(1, 'admin', 'proyekkemanusiaan22', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_ass`
--
ALTER TABLE `data_ass`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_ass`
--
ALTER TABLE `data_ass`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
