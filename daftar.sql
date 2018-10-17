-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2018 pada 18.24
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `jeniskelamin` text NOT NULL,
  `programstudi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `motohidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`nama`, `nim`, `jeniskelamin`, `programstudi`, `fakultas`, `asal`, `motohidup`) VALUES
('yaya', 123412, 'wanita', 'S1 MBTI', 'FKB', 'wakanda', 'wedew'),
('lala', 123456, 'wanita', 'D3 Perhotelan', 'FIK', 'wanareja', 'hihi'),
('agus', 219831, 'pria', 'S1 MBTI', 'FEB', 'Purwokerto', 'ketawa aja'),
('hahaha', 1234123, 'pria', 'S1 Ilmu Komunikasi', 'FI', 'moe', 'aha'),
('hahaha', 12341234, 'pria', 'S1 Ilmu Komunikasi', 'FI', 'moe', 'aha'),
('ica', 12741983, 'wanita', 'S1 Ilmu Komunikasi', 'FKB', 'bandung', 'haha'),
('sandi', 2147483647, 'pria', 'D3 Teknik Telekomunikasi', 'FI', 'bandung', 'haha');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
