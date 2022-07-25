-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 07:10 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipedi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__mahasiswa`
--

CREATE TABLE `admin__mahasiswa` (
  `id` char(36) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `telepon` char(36) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin__mahasiswa`
--

INSERT INTO `admin__mahasiswa` (`id`, `nim`, `nama`, `prodi`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `jenis_kelamin`, `telepon`, `foto`, `password`, `created_at`, `updated_at`) VALUES
('96d2e0a5-cf96-42db-8d1f-d3bef2d0a053', '3042020008', 'Jalal oka saputra', NULL, 'Sukadana', '2002-10-01', 'Jln. Haji Agusalim', 'Islam', 'Laki-laki', '089694786184', 'app/images/mahasiswa/96d2e0a5-cf96-42db-8d1f-d3bef2d0a053-1658324562-yeIdi.webp', '$2y$10$b1o/oDVIg5CMsFHeI1pJl.VAuvM0yB.sRCk0WP6zM3F9y1Gb.R2XK', '2022-07-20 13:42:42', '2022-07-20 06:42:42'),
('96d905a4-30e2-4352-89d9-b65e5ed9866f', '3042020055', 'Fikri Brandan', 'Teknologi Informasi', 'Brandan', '2001-11-25', 'Jl. KH.Mansyur', 'Islam', 'Laki-laki', '081290034449', 'app/images/mahasiswa/96d905a4-30e2-4352-89d9-b65e5ed9866f-1658588467-BZra2.jpg', '$2y$10$lUli1nZa6WshsAeTnamW6.jXS3N8scDJ0PY9/cruJDYFFX5Fe16G.', '2022-07-23 15:07:29', '2022-07-23 08:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin__module`
--

CREATE TABLE `admin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin__module`
--

INSERT INTO `admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('96b4be93-23b1-4961-bb78-25904b38ee48', 'Sipedi', 'sipedi-pegawai', 'Pegawai', 'Sipedi', 'Pegawai', '#085f63', 'pegawai', 'pegawai', '2022-07-05 14:33:36', '2022-07-05 14:33:36'),
('ad9529d8-faef-11ec-a679-da2c4dfb062a', 'Admin', 'sipedi-admin', 'Admin', 'Sipedi', 'Admin', '#085f63', 'admin', 'admin', '2022-07-03 16:46:20', '2022-07-03 16:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pegawai`
--

CREATE TABLE `admin__pegawai` (
  `id` char(36) NOT NULL,
  `nip` varchar(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` char(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin__pegawai`
--

INSERT INTO `admin__pegawai` (`id`, `nip`, `nama`, `telepon`, `email`, `username`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `agama`, `jenis_kelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('96d82ae1-c4f4-4fb3-bbef-21ca8cca154c', '19930128 201609 210', 'Jalal oka saputra', '089694786184', 'okasaputra012345@gmail.com', 'JALAL', 'Sukadana', '2002-10-01', 'Jln. Haji Agusalim', 'app/images/pegawai/96d82ae1-c4f4-4fb3-bbef-21ca8cca154c-1658551765-mbbGc.webp', 'Islam', 'Laki-laki', '$2y$10$O42ihoSH7timGdUMmzsbReqLfSY3v2IWlsNcJ4riSuy50.9uvbtLG', NULL, '2022-07-23 10:27:36', '2022-07-23 03:27:36'),
('96d93c34-85fb-4132-83fe-9a2c241c61df', '19831001 202121 2 004', 'NellyNely Kurnila, S.Pd., M.Pd', '-', 'nelly@gmail.c0m', 'nelly', 'Ketapang', '1999-01-01', 'Ketapang', 'app/images/pegawai/96d93c34-85fb-4132-83fe-9a2c241c61df-1658597621-8Pg3L.png', 'Katolik', 'Laki-laki', '$2y$10$bCLn2N6UTo2JOm1yp.fa8e/ke6JIwLkyysa.jwrxuPniZkPXSlYuW', NULL, '2022-07-23 17:38:53', '2022-07-23 17:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin__role`
--

CREATE TABLE `admin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin__role`
--

INSERT INTO `admin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('96b24f5c-a252-4392-836a-f82bd7237c4a', '96aac846-7f67-474a-80c0-79019b940955', '96aff02e-5121-4138-8cfa-6de7e452246d', '2022-07-04 02:09:58', '2022-07-04 02:09:58'),
('96d82e65-4d1e-42e7-b29f-959ea734851b', '96d82ae1-c4f4-4fb3-bbef-21ca8cca154c', 'ad9529d8-faef-11ec-a679-da2c4dfb062a', '2022-07-22 21:59:14', '2022-07-22 21:59:14'),
('96d8637c-fd45-48d0-ac0d-50f7879b397f', '96d82ae1-c4f4-4fb3-bbef-21ca8cca154c', '96b4be93-23b1-4961-bb78-25904b38ee48', '2022-07-23 00:27:42', '2022-07-23 00:27:42'),
('96d93e41-b74d-4771-b943-997567464037', '96d93c34-85fb-4132-83fe-9a2c241c61df', '96b4be93-23b1-4961-bb78-25904b38ee48', '2022-07-23 10:39:25', '2022-07-23 10:39:25'),
('96d93e63-ed2b-4c01-a9d3-7928b83ec844', '96d93c34-85fb-4132-83fe-9a2c241c61df', 'ad9529d8-faef-11ec-a679-da2c4dfb062a', '2022-07-23 10:39:48', '2022-07-23 10:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa__fiksi`
--

CREATE TABLE `mahasiswa__fiksi` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `lokasi_rak` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) NOT NULL,
  `jumlah_halaman` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa__fiksi`
--

INSERT INTO `mahasiswa__fiksi` (`id`, `kode_buku`, `judul`, `penerbit`, `pengarang`, `tahun_terbit`, `lokasi_rak`, `foto`, `jumlah`, `jumlah_halaman`, `created_at`, `updated_at`) VALUES
('96b2c6b3-1fd8-4b1a-b8e8-0a30af6bbc65', '979-3289-14-7', 'Metode Penelitian Kuantitatif,Kualitatif dan R & D', 'CV Semiotika', 'Tole Iskandar', '2022-07-04', 'Rak 3 Baris 7', NULL, '49', NULL, '2022-07-04 07:43:40', '2022-07-04 07:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa__nonfiksi`
--

CREATE TABLE `mahasiswa__nonfiksi` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `lokasi_rak` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa__peminjaman`
--

CREATE TABLE `mahasiswa__peminjaman` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `batas_pengembalian` varchar(255) NOT NULL,
  `denda` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa__pengembalian`
--

CREATE TABLE `mahasiswa__pengembalian` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `batas_pengembalian` varchar(255) NOT NULL,
  `tanggal_kembali` varchar(255) NOT NULL,
  `denda` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__dashboard`
--

CREATE TABLE `sipedi__dashboard` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__dashboard`
--

INSERT INTO `sipedi__dashboard` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('96d6495d-33aa-4926-aa7c-59053c4cd57c', 'Batas Pengumpulan Landing Page 21-juli-2022', '2022-07-21 23:23:00', '2022-07-21 23:23:00'),
('96d6498d-1bd0-4bfd-b829-060a29cecb84', 'PBL Expo 26-Juli-2022', '2022-07-21 23:23:31', '2022-07-21 23:23:31'),
('96d66ba1-c5de-436b-9b2b-d9cd38285cbc', 'Batas pengumpuan link github 24-Juli-2022', '2022-07-22 00:58:49', '2022-07-22 00:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__denda`
--

CREATE TABLE `sipedi__denda` (
  `id` char(36) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__denda`
--

INSERT INTO `sipedi__denda` (`id`, `keterangan`, `harga`, `created_at`, `updated_at`) VALUES
('96d665ed-c45d-4d6a-a1a0-3173981224f2', 'Keterlambatan Pengembalian', '1000', '2022-07-22 07:43:00', '2022-07-22 00:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__fiksi`
--

CREATE TABLE `sipedi__fiksi` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `lokasi_rak` varchar(255) NOT NULL,
  `jumlah_halaman` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__fiksi`
--

INSERT INTO `sipedi__fiksi` (`id`, `kode_buku`, `judul`, `penerbit`, `pengarang`, `tahun_terbit`, `lokasi_rak`, `jumlah_halaman`, `jumlah`, `foto`, `created_at`, `updated_at`) VALUES
('96d91c4c-e6b7-411e-97bf-56b0733f7047', '-', 'MISTERI 3 MASJID PALING FENOMENAL', 'Najah', 'Moh.Ali Hasan Zaidany', '2012-01-01', 'Lemari 3 baris 1', '-', '1', 'app/images/fiksi/96d91c4c-e6b7-411e-97bf-56b0733f7047-1658592268-toHMI.jpg', '2022-07-23 16:04:28', '2022-07-23 09:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__kondisibuku`
--

CREATE TABLE `sipedi__kondisibuku` (
  `id` char(36) NOT NULL,
  `isbn` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `total_buku` char(36) NOT NULL,
  `buku_rusak` char(36) NOT NULL,
  `buku_bagus` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__mahasiswa`
--

CREATE TABLE `sipedi__mahasiswa` (
  `id` char(36) NOT NULL,
  `nim` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `telepon` char(36) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetd_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__nonfiksi`
--

CREATE TABLE `sipedi__nonfiksi` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `lokasi_rak` varchar(255) NOT NULL,
  `jumlah_halaman` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__nonfiksi`
--

INSERT INTO `sipedi__nonfiksi` (`id`, `kode_buku`, `judul`, `penerbit`, `pengarang`, `tahun_terbit`, `lokasi_rak`, `jumlah_halaman`, `jumlah`, `foto`, `created_at`, `updated_at`) VALUES
('96d91de2-861d-4196-ac46-89ee956dcc7e', '-', 'KAMUS LENGKAP BIOLOGI', 'Fajar Mulya', 'CANDRA KUSUMA', '1980-10-23', 'Lemari 3 baris 1', '-', '2', 'app/images/nonfiksi/96d91de2-861d-4196-ac46-89ee956dcc7e-1658592534-ioYfO.jpg', '2022-07-23 16:08:54', '2022-07-23 09:08:54'),
('96d91ee0-0ac8-4324-b22d-dee34b609184', '-', 'PENDIDIKAN AGAMA KHONG HU CU', 'Ristekdikti', 'Parisyanti Nurwardani', '2016-08-21', 'Lemari 3 baris 2', '-', '1', 'app/images/nonfiksi/96d91ee0-0ac8-4324-b22d-dee34b609184-1658592700-03v5K.jpg', '2022-07-23 16:11:40', '2022-07-23 09:11:40'),
('96d92006-34c1-43ea-9881-96abc8d8bda3', '-', 'Metode penelitian kuantitatif, kualitatif dan R&D', 'Alfabeta', 'Prof.Dr. Sugiyono', '2018-04-04', 'Rak 2 baris 1', '-', '17', 'app/images/nonfiksi/96d92006-34c1-43ea-9881-96abc8d8bda3-1658592893-iDRzu.jpg', '2022-07-23 16:14:53', '2022-07-23 09:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__peminjaman`
--

CREATE TABLE `sipedi__peminjaman` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `batas_pengembalian` varchar(255) NOT NULL,
  `denda` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__pengembalian`
--

CREATE TABLE `sipedi__pengembalian` (
  `id` char(36) NOT NULL,
  `kode_buku` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_peminjaman` varchar(255) NOT NULL,
  `batas_pengembalian` varchar(255) NOT NULL,
  `tanggal_kembali` varchar(255) NOT NULL,
  `denda` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__pengembalian`
--

INSERT INTO `sipedi__pengembalian` (`id`, `kode_buku`, `judul`, `id_anggota`, `nama`, `tanggal_peminjaman`, `batas_pengembalian`, `tanggal_kembali`, `denda`, `created_at`, `updated_at`) VALUES
('96d8fea6-c519-4aa8-934e-25c088e3a3d3', '123', 'Metodelogi Penelitian Kuantitatif dan Kualitatif', '3042020008', 'tole', '2022-07-23', '2022-07-28', '2022-07-26', '0', '2022-07-23 07:41:34', '2022-07-23 07:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__pengunjung`
--

CREATE TABLE `sipedi__pengunjung` (
  `id` char(36) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__pengunjung`
--

INSERT INTO `sipedi__pengunjung` (`id`, `id_anggota`, `nama`, `keperluan`, `hari`, `tanggal`, `created_at`, `updated_at`) VALUES
('96d93832-28d1-40f8-ae63-4643102ef992', '3042020008', 'Jalal Oka Saputra', 'Belajar', 'Senin', '2022-07-25', '2022-07-23 10:22:28', '2022-07-23 10:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `sipedi__tugasakhir`
--

CREATE TABLE `sipedi__tugasakhir` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `jumlah_halaman` varchar(255) NOT NULL,
  `lokasi_rak` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipedi__tugasakhir`
--

INSERT INTO `sipedi__tugasakhir` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `lokasi_rak`, `foto`, `created_at`, `updated_at`) VALUES
('96d93465-f90e-408f-bca1-1f4b6657d031', 'SISTEM INFORMASI PENJUALAN MAKANAN RINGAN KHAS KETAPANG BERBASIS WEB', 'SEROJA OKTAVIRA SUKMA PUTRI', 'POLITEKNIK NEGERI KETAPANG', '2021-01-01', '105', 'LemariI 2 Baris 3', 'app/images/tugasakhir/96d93465-f90e-408f-bca1-1f4b6657d031-1658596311-6pvkC.jpg', '2022-07-23 17:11:51', '2022-07-23 10:11:51'),
('96d935b3-89bf-4e3a-b83d-1a836dab4c34', 'APLIKASI ZAKAT DIMASJID AL IKHLAS KETAPANG BERBASIS ANDROID', 'TIAS MUCUS', 'POLITEKNIK NEGERI KETAPANG', '2020-01-01', '119', 'LEMARI 2 BARIS 3', 'app/images/tugasakhir/96d935b3-89bf-4e3a-b83d-1a836dab4c34-1658596530-a3FLk.jpg', '2022-07-23 17:15:30', '2022-07-23 10:15:30'),
('96d9363c-6516-40eb-8da2-b90a4056176f', 'APLIKASI CUSTOMER RELATIONSHIP MANAGEMENT (CRM) DIGRAFIK DIGITAL PRINTING BERBASIS WEB', 'HENI INDRIANTI', 'POLITEKNIK NEGERI KETAPANG', '2020-01-01', '74', 'LEMARI 2 BARIS 3', 'app/images/tugasakhir/96d9363c-6516-40eb-8da2-b90a4056176f-1658596619-aXdy9.jpg', '2022-07-23 17:17:00', '2022-07-23 10:17:00'),
('96d936ed-dcc8-4544-9c48-f63591175f2a', 'APLIKASI YUM KETAPANG! UNTUK PROMOSI WISATA KETAPANG', 'RONI BIASANTO', 'POLITEKNIK NEGERI KETAPANG', '2020-01-01', '154', 'LEMARI 2 BARIS 3', 'app/images/tugasakhir/96d936ed-dcc8-4544-9c48-f63591175f2a-1658596736-nzAKb.jpg', '2022-07-23 17:18:56', '2022-07-23 10:18:56'),
('96d93772-7361-4aa5-8bcc-f579b7ef9efe', 'SISTEM PAKAR DIAGNOSIS PENYAKIT PADA PEROKOK AKTIF MENGGUNAKAN METODE FORWARD CHAINING DENGAN CERTAINTY FACTOR BERBASIS WEB', 'WEDHA SAPUTRA', 'POLITEKNIK NEGERI KETAPANG', '2020-01-01', '133', 'LEMARI 2 BARIS 3', 'app/images/tugasakhir/96d93772-7361-4aa5-8bcc-f579b7ef9efe-1658596823-Dh2z4.jpg', '2022-07-23 17:20:23', '2022-07-23 10:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__mahasiswa`
--
ALTER TABLE `admin__mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__module`
--
ALTER TABLE `admin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pegawai`
--
ALTER TABLE `admin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa__fiksi`
--
ALTER TABLE `mahasiswa__fiksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa__nonfiksi`
--
ALTER TABLE `mahasiswa__nonfiksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa__peminjaman`
--
ALTER TABLE `mahasiswa__peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa__pengembalian`
--
ALTER TABLE `mahasiswa__pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__dashboard`
--
ALTER TABLE `sipedi__dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__denda`
--
ALTER TABLE `sipedi__denda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__fiksi`
--
ALTER TABLE `sipedi__fiksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__kondisibuku`
--
ALTER TABLE `sipedi__kondisibuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__mahasiswa`
--
ALTER TABLE `sipedi__mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__nonfiksi`
--
ALTER TABLE `sipedi__nonfiksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__peminjaman`
--
ALTER TABLE `sipedi__peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__pengembalian`
--
ALTER TABLE `sipedi__pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__pengunjung`
--
ALTER TABLE `sipedi__pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipedi__tugasakhir`
--
ALTER TABLE `sipedi__tugasakhir`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
