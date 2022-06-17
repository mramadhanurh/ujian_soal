-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 07.52
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujicoba_andyglobalsoft`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pel` int(11) NOT NULL,
  `nama_pel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id_pel`, `nama_pel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Biologi'),
(3, 'Fisika'),
(5, 'Bahasa Inggris'),
(8, 'Matematika'),
(9, 'Geografi'),
(10, 'Sejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_pel` int(11) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `pil_a` varchar(1000) NOT NULL,
  `pil_b` varchar(1000) NOT NULL,
  `pil_c` varchar(1000) NOT NULL,
  `pil_d` varchar(1000) NOT NULL,
  `pil_e` varchar(1000) NOT NULL,
  `kunci` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_pel`, `soal`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `pil_e`, `kunci`) VALUES
(1, 9, 'Bahasa yang digunakan dalam teks ceramah adalah?', 'Efektif', 'Ambigu', 'Rancu', 'Bahasa gaul', 'Bahasa tidak baku', 'pil_a'),
(2, 9, 'Nilai yang menjelaskan baik dan buruknya seseorang dalam cerita disebut nilai?', 'Budaya', 'Moral', 'Agama', 'Ekonomi', 'Sosial', 'pil_b'),
(4, 9, 'Tokoh baik dalam karya sastra disebut?', 'Protagonis', 'Antagonis', 'Campuran', 'Tritagonis', 'Noortagonis', 'pil_e'),
(5, 3, 'Manakah di antara kalimat berikut yang termasuk pernyataan deduktif ?', 'Karena bangun kesiangan, ia datang terlambat', 'Disebabkan oleh penyakitnya,ia menghentikan aktifitas di luar rumah', 'Jika hari hujan,ia tidak menghadiri rapat', 'Mengapa permasalahan itu diperumit jika semua sudah jelas?', 'Bacalah bacaan yang manfaatnya sesuai dengan selera', 'pil_e'),
(6, 2, 'manaanalablalab', 'awawawawa', 'uwuwuwuwuw', 'ehehehehehe', 'ehekehekehek', 'yyyyyyyy', 'pil_c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `id_pel` int(11) NOT NULL,
  `judul_ujian` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL,
  `time_limit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `id_pel`, `judul_ujian`, `deskripsi`, `time_limit`) VALUES
(1, 3, 'Fisika Kuantum', 'Pengertian fisika kuantum', '5'),
(3, 9, 'Geografi', 'Ujian', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'hives', 'hives17', '123123123', 'admin'),
(2, 'budi', 'budi', '123123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `fk_pelajaran` (`id_pel`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `fk_pelajaran` FOREIGN KEY (`id_pel`) REFERENCES `pelajaran` (`id_pel`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
