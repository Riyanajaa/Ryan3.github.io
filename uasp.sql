-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2022 pada 09.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpususah`
--

CREATE TABLE `perpususah` (
  `ID` int(10) NOT NULL,
  `Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Tahun_Terbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpususah`
--

INSERT INTO `perpususah` (`ID`, `Buku`, `Pengarang`, `Tahun_Terbit`) VALUES
(124, 'Cara menjadi Batu', 'Unknow', '2011'),
(557, '1/3 Malam', 'Dewi', '2002'),
(901, 'Marimas', 'Sepuh', '2006');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpususah`
--
ALTER TABLE `perpususah`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpususah`
--
ALTER TABLE `perpususah`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=991;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
