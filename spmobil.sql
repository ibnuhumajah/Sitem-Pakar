-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 15.45
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
('RYU', 'f3770595e0cb4d9a988bd5da98d2187d', 'Rizky Yuni Utami'),
('januriawan', '21232f297a57a5a743894a0e4a801fc3', 'Fajar Januriawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_kerusakan` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_kerusakan`, `kode_gejala`, `mb`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1.0, '2021-06-02 14:50:13', '2021-06-02 14:50:13'),
(2, 1, 2, 0.8, '2021-06-03 08:31:16', '2021-06-02 14:50:27'),
(3, 1, 3, 0.2, '2021-06-03 08:31:20', '2021-06-02 14:51:54'),
(4, 1, 4, 1.0, '2021-06-02 14:52:06', '2021-06-02 14:52:06'),
(5, 2, 5, 1.0, '2021-06-02 14:54:15', '2021-06-02 14:54:15'),
(6, 2, 6, 1.0, '2021-06-02 14:54:41', '2021-06-02 14:54:41'),
(7, 2, 7, 1.0, '2021-06-02 14:55:05', '2021-06-02 14:55:05'),
(8, 2, 8, 1.0, '2021-06-02 14:55:14', '2021-06-02 14:55:14'),
(9, 3, 5, 1.0, '2021-06-02 15:09:24', '2021-06-02 15:09:24'),
(10, 3, 9, 1.0, '2021-06-02 15:10:00', '2021-06-02 15:10:00'),
(11, 3, 10, 0.4, '2021-06-03 08:31:11', '2021-06-02 15:10:16'),
(12, 3, 11, 1.0, '2021-06-02 15:11:04', '2021-06-02 15:11:04'),
(13, 4, 12, 1.0, '2021-06-02 15:11:58', '2021-06-02 15:11:58'),
(14, 4, 13, 1.0, '2021-06-02 15:12:10', '2021-06-02 15:12:10'),
(15, 4, 14, 1.0, '2021-06-02 15:12:34', '2021-06-02 15:12:34'),
(16, 5, 15, 1.0, '2021-06-02 15:12:58', '2021-06-02 15:12:58'),
(17, 5, 16, 1.0, '2021-06-02 15:13:09', '2021-06-02 15:13:09'),
(18, 6, 17, 1.0, '2021-06-02 15:13:25', '2021-06-02 15:13:25'),
(19, 6, 18, 0.2, '2021-06-02 15:13:33', '2021-06-02 15:13:33'),
(20, 6, 19, 1.0, '2021-06-02 15:13:40', '2021-06-02 15:13:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `updated_at`, `created_at`) VALUES
(1, 'Suara yang tidak wajar', '2021-06-02 14:24:18', '2021-06-02 14:24:18'),
(2, 'Suara Ketukan', '2021-06-02 14:24:22', '2021-06-02 14:24:22'),
(3, 'Suara Gesekan', '2021-06-02 14:24:28', '2021-06-02 14:24:28'),
(4, 'Getaran yang tidak wajar', '2021-06-02 14:24:34', '2021-06-02 14:24:34'),
(5, 'Saat dijalankan mobil brebet', '2021-06-02 14:25:36', '2021-06-02 14:25:36'),
(6, 'RPM Tertahan', '2021-06-02 14:25:45', '2021-06-02 14:25:45'),
(7, 'Bahan Bakar Boros', '2021-06-02 14:25:53', '2021-06-02 14:25:53'),
(8, 'Indikator Engine Menyala', '2021-06-02 14:26:01', '2021-06-02 14:26:01'),
(9, 'Pada saat digas terasa tertahan', '2021-06-02 14:26:31', '2021-06-02 14:26:31'),
(10, 'Tidak Idle', '2021-06-02 14:26:50', '2021-06-02 14:26:50'),
(11, 'Bisa distarter tetapi mesin tidak hidup', '2021-06-02 14:27:01', '2021-06-02 14:27:01'),
(12, 'Oli Berkerak / Tidak Encer', '2021-06-02 14:33:49', '2021-06-02 14:33:49'),
(13, 'Bunyi kasar di bagian mesin', '2021-06-02 14:34:06', '2021-06-02 14:34:06'),
(14, 'Indikator Oli Nyala', '2021-06-02 14:34:15', '2021-06-02 14:34:15'),
(15, 'Rem tidak pakem', '2021-06-02 14:48:59', '2021-06-02 14:48:59'),
(16, 'Quantitas minyak rem berkurang', '2021-06-02 14:49:10', '2021-06-02 14:49:10'),
(17, 'Kemudi tidak stabil', '2021-06-02 14:49:22', '2021-06-02 14:49:22'),
(18, 'Ban habis tidak rata', '2021-06-02 14:49:31', '2021-06-02 14:49:31'),
(19, 'Kemudi akan bergetar jika kecepatan tinggi', '2021-06-02 14:49:40', '2021-06-02 14:49:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `kerusakan` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `kerusakan`, `gejala`, `hasil_id`, `hasil_nilai`, `created_at`, `updated_at`) VALUES
(2, 'a:2:{i:2;s:6:\"0.9936\";i:3;s:6:\"0.6000\";}', 'a:4:{i:5;s:1:\"3\";i:6;s:1:\"3\";i:7;s:1:\"4\";i:8;s:1:\"4\";}', 2, '0.9936', '2021-06-03 16:46:23', '2021-06-03 16:46:23'),
(3, 'a:2:{i:3;s:6:\"0.9635\";i:2;s:6:\"0.4000\";}', 'a:4:{i:5;s:1:\"2\";i:9;s:1:\"4\";i:10;s:1:\"3\";i:11;s:1:\"3\";}', 3, '0.9635', '2021-06-03 16:48:20', '2021-06-03 16:48:20'),
(4, 'a:1:{i:4;s:6:\"0.8720\";}', 'a:3:{i:12;s:1:\"1\";i:13;s:1:\"3\";i:14;s:1:\"3\";}', 4, '0.8720', '2021-06-03 16:49:35', '2021-06-03 16:49:35'),
(5, 'a:1:{i:5;s:6:\"0.9200\";}', 'a:2:{i:15;s:1:\"4\";i:16;s:1:\"3\";}', 5, '0.9200', '2021-06-03 16:50:36', '2021-06-03 16:50:36'),
(6, 'a:1:{i:6;s:6:\"0.8848\";}', 'a:3:{i:17;s:1:\"4\";i:18;s:1:\"1\";i:19;s:1:\"2\";}', 6, '0.8848', '2021-06-03 16:51:06', '2021-06-03 16:51:06'),
(7, 'a:1:{i:1;s:6:\"0.9476\";}', 'a:4:{i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"4\";}', 1, '0.9476', '2021-06-04 05:43:25', '2021-06-04 05:43:25'),
(8, 'a:2:{i:4;s:6:\"1.0000\";i:1;s:6:\"0.9476\";}', 'a:5:{i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:1:\"4\";i:12;s:1:\"5\";}', 4, '1.0000', '2021-06-04 05:44:19', '2021-06-04 05:44:19'),
(9, 'a:2:{i:2;s:6:\"0.8000\";i:1;s:6:\"0.7280\";}', 'a:3:{i:1;s:1:\"3\";i:2;s:1:\"2\";i:6;s:1:\"4\";}', 2, '0.8000', '2021-06-04 07:50:20', '2021-06-04 07:50:20'),
(10, 'a:6:{i:4;s:6:\"0.9360\";i:2;s:6:\"0.8720\";i:3;s:6:\"0.5584\";i:6;s:6:\"0.5392\";i:5;s:6:\"0.5200\";i:1;s:6:\"0.5054\";}', 'a:18:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"2\";i:4;s:1:\"1\";i:6;s:1:\"4\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"2\";i:10;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:13;s:1:\"3\";i:14;s:1:\"4\";i:15;s:1:\"1\";i:16;s:1:\"2\";i:17;s:1:\"2\";i:18;s:1:\"1\";i:19;s:1:\"1\";}', 4, '0.9360', '2021-06-04 11:12:21', '2021-06-04 11:12:21'),
(11, 'a:1:{i:1;s:6:\"1.0000\";}', 'a:4:{i:1;s:1:\"2\";i:2;s:1:\"2\";i:3;s:1:\"4\";i:4;s:1:\"5\";}', 1, '1.0000', '2021-06-11 09:39:25', '2021-06-11 09:39:25'),
(12, 'a:3:{i:1;s:6:\"1.0000\";i:2;s:6:\"0.6000\";i:3;s:6:\"0.6000\";}', 'a:5:{i:1;s:1:\"2\";i:2;s:1:\"2\";i:3;s:1:\"4\";i:4;s:1:\"5\";i:5;s:1:\"3\";}', 1, '1.0000', '2021-06-11 09:39:52', '2021-06-11 09:39:52'),
(13, 'a:1:{i:1;s:6:\"1.0000\";}', 'a:4:{i:1;s:1:\"5\";i:2;s:1:\"3\";i:3;s:1:\"2\";i:4;s:1:\"3\";}', 1, '1.0000', '2021-06-12 10:46:13', '2021-06-12 10:46:13'),
(14, 'a:1:{i:1;s:6:\"0.9268\";}', 'a:4:{i:1;s:1:\"3\";i:2;s:1:\"3\";i:3;s:1:\"3\";i:4;s:1:\"3\";}', 1, '0.9268', '2021-06-12 10:46:47', '2021-06-12 10:46:47'),
(15, 'a:3:{i:1;s:6:\"0.9268\";i:2;s:6:\"0.8000\";i:3;s:6:\"0.8000\";}', 'a:5:{i:1;s:1:\"3\";i:2;s:1:\"3\";i:3;s:1:\"3\";i:4;s:1:\"3\";i:5;s:1:\"4\";}', 1, '0.9268', '2021-06-12 10:47:22', '2021-06-12 10:47:22'),
(16, 'a:1:{i:1;s:6:\"0.9462\";}', 'a:4:{i:1;s:1:\"3\";i:2;s:1:\"5\";i:3;s:1:\"4\";i:4;s:1:\"1\";}', 1, '0.9462', '2021-06-17 10:59:05', '2021-06-17 10:59:05'),
(17, 'a:1:{i:1;s:6:\"1.0000\";}', 'a:4:{i:1;s:1:\"3\";i:2;s:1:\"1\";i:3;s:1:\"4\";i:4;s:1:\"5\";}', 1, '1.0000', '2021-06-17 11:15:02', '2021-06-17 11:15:02'),
(18, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:1:{i:5;s:1:\"5\";}', 2, '1.0000', '2021-06-28 08:40:00', '2021-06-28 08:40:00'),
(19, 'a:2:{i:2;s:6:\"0.9808\";i:3;s:6:\"0.6000\";}', 'a:4:{i:5;s:1:\"3\";i:6;s:1:\"2\";i:7;s:1:\"4\";i:8;s:1:\"3\";}', 2, '0.9808', '2021-06-28 08:40:46', '2021-06-28 08:40:46'),
(20, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:4:{i:5;s:1:\"5\";i:6;s:1:\"2\";i:7;s:1:\"4\";i:8;s:1:\"3\";}', 2, '1.0000', '2021-06-28 08:41:09', '2021-06-28 08:41:09'),
(21, 'a:1:{i:1;s:6:\"0.8000\";}', 'a:1:{i:1;s:1:\"4\";}', 1, '0.8000', '2021-06-29 12:17:12', '2021-06-29 12:17:12'),
(22, 'a:1:{i:1;s:6:\"0.9735\";}', 'a:4:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"2\";i:4;s:1:\"3\";}', 1, '0.9735', '2021-06-29 12:17:34', '2021-06-29 12:17:34'),
(23, 'a:1:{i:1;s:6:\"0.9747\";}', 'a:4:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"3\";i:4;s:1:\"3\";}', 1, '0.9747', '2021-06-29 12:17:55', '2021-06-29 12:17:55'),
(24, 'a:1:{i:1;s:6:\"0.9747\";}', 'a:4:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"3\";i:4;s:1:\"3\";}', 1, '0.9747', '2021-06-29 12:18:12', '2021-06-29 12:18:12'),
(25, 'a:1:{i:1;s:6:\"0.9747\";}', 'a:4:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"3\";i:4;s:1:\"3\";}', 1, '0.9747', '2021-06-29 12:18:24', '2021-06-29 12:18:24'),
(26, 'a:2:{i:5;s:6:\"1.0000\";i:1;s:6:\"0.9747\";}', 'a:6:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"3\";i:4;s:1:\"3\";i:15;s:1:\"3\";i:16;s:1:\"5\";}', 5, '1.0000', '2021-06-29 12:38:14', '2021-06-29 12:38:14'),
(27, 'a:4:{i:3;s:6:\"1.0000\";i:2;s:6:\"1.0000\";i:5;s:6:\"1.0000\";i:1;s:6:\"0.9747\";}', 'a:7:{i:1;s:1:\"4\";i:2;s:1:\"4\";i:3;s:1:\"3\";i:4;s:1:\"3\";i:5;s:1:\"5\";i:15;s:1:\"3\";i:16;s:1:\"5\";}', 3, '1.0000', '2021-06-29 12:43:34', '2021-06-29 12:43:34'),
(28, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:1:{i:5;s:1:\"5\";}', 2, '1.0000', '2021-06-29 12:44:14', '2021-06-29 12:44:14'),
(29, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:4:{i:5;s:1:\"5\";i:6;s:1:\"3\";i:7;s:1:\"2\";i:8;s:1:\"1\";}', 2, '1.0000', '2021-06-29 12:46:13', '2021-06-29 12:46:13'),
(30, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:4:{i:5;s:1:\"5\";i:6;s:1:\"1\";i:7;s:1:\"2\";i:8;s:1:\"3\";}', 2, '1.0000', '2021-06-29 12:46:27', '2021-06-29 12:46:27'),
(31, 'a:2:{i:2;s:6:\"1.0000\";i:3;s:6:\"1.0000\";}', 'a:4:{i:5;s:1:\"5\";i:9;s:1:\"2\";i:10;s:1:\"2\";i:11;s:1:\"2\";}', 2, '1.0000', '2021-06-29 12:47:29', '2021-06-29 12:47:29'),
(32, 'a:1:{i:1;s:6:\"0.9817\";}', 'a:4:{i:1;s:1:\"4\";i:2;s:1:\"3\";i:3;s:1:\"3\";i:4;s:1:\"4\";}', 1, '0.9817', '2021-06-30 16:45:14', '2021-06-30 16:45:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kode_kerusakan` int(11) NOT NULL,
  `nama_kerusakan` varchar(50) DEFAULT NULL,
  `det_kerusakan` varchar(500) NOT NULL,
  `srn_kerusakan` varchar(500) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`kode_kerusakan`, `nama_kerusakan`, `det_kerusakan`, `srn_kerusakan`, `updated_at`, `created_at`) VALUES
(1, 'Noice', 'Bunyi pada jenis city adalah wajar dikarenakan ukuran dari jenis mobil city car kecil sehingga peredam dari jenis mobil city car terbilang kurang efektif untuk meredam suara maupun getaran. Tetapi apabila tejadi suara yang tidak wajar maka disarankan langsung ke bengkel agar dapat ditangani oleh montir', 'Repair part yang bermasalah atau jika part tersebut sudak tidak layak maka part tersebut wajib diganti', '2021-06-02 23:32:23', '2021-06-02 14:21:44'),
(2, 'Busi Sudah Tidak Layak', 'Terjadi karena telat ganti busi atau produk dari busi tersebut tidak layak.', 'Ganti busi pada mobil tersebut, namun apabila pemilik tidak bisa memasang maka disarankan langsung ke bengkel.', '2021-06-02 21:22:35', '2021-06-02 14:22:35'),
(3, 'Fuel Pump Rusak', 'rusakan pada pompa bensin ini penting dikarenakan keberadaan pompa bensin atau fuel pump pada mobil injeksi penting untuk menyalurkan bahan bakar ke injektor agar sesuai dengan kebutuhan mesin mobil danfuel pump juga bertanggung jawab menjaga tekanan bensin agar tetap tinggi.', 'Disarankan untuk ke bengkel untuk mengganti ASSY', '2021-06-02 21:22:53', '2021-06-02 14:22:53'),
(4, 'Oli Mesin Tidak Layak', 'Oli mesin tidak layak terjadi karena pemilik mobil tidak mengganti oli tepat waktu, sehingga menyebabkan oli berkerak dan tidak encer.', 'Mengganti oli.', '2021-06-02 21:23:18', '2021-06-02 14:23:18'),
(5, 'Seal Rem Lemah', 'Seal rem lemah dikarena bocor pada rem dan bisa saja terjadi karena karetnya sudah tidak layak', 'Lumasi rem apabila bocor dan ganti karet.', '2021-06-02 21:23:36', '2021-06-02 14:23:36'),
(6, 'Snooring dan balancing', 'kerusakan yang terjadi karena posisi kedudukan yang tidak lurus sehingga menyebabkan kemudi yang kurang nyaman. Apabila dibiarkan akan menyebabkan ban habisnya tidak rata.', 'Diberi timah balance.', '2021-06-02 21:23:57', '2021-06-02 14:23:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$dFoFXmDLvazBkYZxGlClNO8.HOUOBbqlUK9295yrFADBGzAVV3BFy', 1, NULL, '2021-05-24 17:47:33', '2021-05-24 17:47:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `kode_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
