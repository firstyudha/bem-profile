-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Mar 2020 pada 16.24
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12767502_bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bem', '3b3fe2a9850b42902182a214de4aee37'),
('bem2019plb', 'd86966950a107098159ce9a876576cb6'),
('bempolitekniklp3i', 'e8d8be5c64925d47d3438154e324aed8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nim`, `nama`, `email`, `password`) VALUES
('1122', 'siapa ya', 'y@g.com', '$2y$10$X.dQKnhFaEx7.SCe5KvBqeWpH4I2auIj7t9Dkg4uoI1jxdzXJlMTK'),
('123', 'cek', 'dada@gmail.com', '$2y$10$BDB4BR8AmS.FD4ObeCvjW.nalQc6UDyEmLtVwZ63eXdqfm.bRBAHS'),
('123123', 'yeye', 'y@y.y', '$2y$10$qnTdMZRdTz8RRxvX/8ONQ.cIBDHcoxAgY7C2TMvphriWXqs/0.f/S'),
('1234', 'Joe', 'ryu@first.co.id', '$2y$10$FbhYR9lgHKXH/fQVnK6ntOYpQrvYVqLlf9qIR/pCW/M6S/G3L9ga.'),
('9090', 'yy', 'dada99@gmail.com', '$2y$10$3d.u2b6v0wnWvGOVONDZCO..XJALC2Yc8t28LZS9Ag9imfGLOjvgy'),
('99', 'gege', 'g@g.g', '$2y$10$2XIQSp5MyVBjO.7coRVvS.GrkOOGvuRxwuKZgUMysEs0c92d0iNki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `no` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kritik` varchar(1000) NOT NULL,
  `diterima` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`no`, `nim`, `nama`, `kritik`, `diterima`) VALUES
(2, '123', 'Joe', 'haha', '2020-01-15 08:24:28'),
(3, '123', 'Joe', 'asdfasd', '2020-01-15 08:24:28'),
(4, '123', 'Joe', 'wawawawawa', '2020-01-15 08:24:28'),
(6, '9090', 'yy', 'cekk', '2020-01-15 08:24:28'),
(7, '9090', 'yy', 'gege', '2020-01-15 08:24:28'),
(8, '9090', 'yy', 'baru nih', '2020-01-15 08:29:01'),
(9, '1122', 'siapa ya', 'cobain', '2020-01-15 08:30:02'),
(10, '123123', 'yeye', 'haahahaha', '2020-02-13 13:38:02'),
(11, '99', 'gege', 'saran', '2020-03-02 14:02:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
