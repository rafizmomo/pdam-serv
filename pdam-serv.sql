-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2020 at 04:19 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam-serv`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_11_06_042634_create_t4pelanggan_table', 1),
(10, '2020_11_06_092422_create_t4rektagih_table', 1),
(11, '2020_11_06_092508_create_t4rekbayarbas_table', 1),
(12, '2020_11_11_032556_add_roles_field_on_users_table', 1),
(13, '2020_11_13_070314_add_kantor__field_on_users_table', 1),
(14, '2020_11_13_094402_add__j_k_field_to_pelanggan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('19e77809c79cc8c9bff3500387dba1afb6b9b0d17e43b741d83b92472880d6183ff15ae549e03c95', 2, 1, 'Laravel Password Grant Client', '[]', 1, '2020-11-13 02:51:39', '2020-11-13 02:51:39', '2021-11-13 09:51:39'),
('2909199df180d8aa713548863a13dc5d375f71a1328c2fb62fcdd16ae05952a67445387436847d14', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2020-11-13 02:54:37', '2020-11-13 02:54:37', '2021-11-13 09:54:37'),
('657b99f0ada67cc3c6bb69d16f01d6b05ba82f083fa3a75aa1b5cfefb13a78d1d984ca261b027e02', 3, 1, 'Laravel Password Grant Client', '[]', 0, '2020-11-16 09:31:10', '2020-11-16 09:31:10', '2021-11-16 16:31:10'),
('70c047220e35226f62bb3f857fc144ba27694b0271a4e2681efcd252244558246a3155102bcd255e', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2020-11-13 02:47:51', '2020-11-13 02:47:51', '2021-11-13 09:47:51'),
('a8f013096fe11b2ec12030136f01085d247aae1ff3f099426b7d57ee3db305233bc7206fe85764b6', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2020-11-16 17:17:58', '2020-11-16 17:17:58', '2021-11-17 00:17:58'),
('d334c3c90796a659900bdcf1a7a9c2ca5c447a95caad6fed5506f4d602f75a47f6c2853d131ab3fa', 3, 1, 'Laravel Password Grant Client', '[]', 0, '2020-11-16 09:11:06', '2020-11-16 09:11:06', '2021-11-16 16:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '9UJ2g7O34stTfHO6Aa7iU2ZDo1QlOvutxydGhItP', NULL, 'http://localhost', 1, 0, 0, '2020-11-13 02:47:04', '2020-11-13 02:47:04'),
(2, NULL, 'Laravel Password Grant Client', 'TmQ6yzH7mHXrLkBudZlOHwURMHBd8R7SwnenQbLJ', 'users', 'http://localhost', 0, 1, 0, '2020-11-13 02:47:04', '2020-11-13 02:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-11-13 02:47:04', '2020-11-13 02:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t4pelanggan`
--

CREATE TABLE `t4pelanggan` (
  `idno` int(10) UNSIGNED NOT NULL,
  `idpel` bigint(20) UNSIGNED NOT NULL,
  `idjln` int(10) UNSIGNED NOT NULL,
  `namapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketkelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kdpellama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RW` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_update` date NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idprop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutrute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typemtr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglinstall` date NOT NULL,
  `jmldigit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idlama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglbaca` date NOT NULL,
  `angkamtr` int(10) UNSIGNED NOT NULL,
  `lokasimtr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutno` int(10) UNSIGNED NOT NULL,
  `setatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agrtid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npa_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snmeter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpbr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merkmeter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisimeter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khusus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Catatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalupd` timestamp NOT NULL,
  `jk` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t4pelanggan`
--

INSERT INTO `t4pelanggan` (`idno`, `idpel`, `idjln`, `namapel`, `kelompok`, `ketkelompok`, `kdpellama`, `alamat`, `RT`, `RW`, `Desa`, `Kecamatan`, `Contact`, `telp`, `urut`, `Loket`, `last_update`, `user_id`, `idprop`, `rute`, `urutrute`, `mtrid`, `typemtr`, `tglinstall`, `jmldigit`, `idlama`, `tglbaca`, `angkamtr`, `lokasimtr`, `artikel`, `urutno`, `setatus`, `sub_id`, `agrtid`, `npa_lama`, `snmeter`, `idpbr`, `keterangan`, `merkmeter`, `kondisimeter`, `tgl_lahir`, `petugas`, `khusus`, `Catatan`, `lat`, `lng`, `tanggalupd`, `jk`) VALUES
(3574, 12517, 503010, 'NURLIS', 'RT3', 'Rumah Tangga C', '890025-0002', 'JLN. MOHD TAHIR LR K.UMAR', '3', '49', 'DESA COT MESJID', 'LUENG BATA', 'NURLIS', '', '50', '99-2022', '2015-11-05', '2022-ZAKY', '36580', '503010', '1', '36579', '301', '2008-04-01', '5', '890025-0002', '2015-08-27', 384, '01 - Depan Rumah', '101', 1879, 'A', '0', '0', '27746', '282088', 'Kor', '-', 'ITRON', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', 'GANTI WM BARU TGL 18 SEP 2014 LAP.CAB III (PUTRAWAN JAYA) TGL 09 OKT 2014, RUBAH JLN. MOHD TAHIR LR BERINGIN  KE JLN. MOHD TAHIR LR K.UMAR  LAP. CAB.III TGL 09 OKT 2015,', '5,5343367', '95,33987', '1999-12-30 17:00:00', 0),
(30172, 30154, 103006, 'JULIDAR', 'RT4', 'Rumah Tangga D', '003-036-0', 'JL.RAWA SAKTI II No.12', '1', '101', 'PERUMNAS LINGKE', 'SYIAH KUALA', 'JULIDAR', '85260646346', '10', '30-1051', '2016-03-01', '1051-WER', '', '103006', '1', '', '301', '2008-11-20', '5', '31125', '2015-10-19', 1691, '01 - Depan Rumah', '101', 1140, 'A', '', '', 'Agresso', '630990', 'Kor', 'EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011', 'ITRON', '01 - Baik', '1964-08-20', 'Bag. Distribusi PDAM', '1', 'EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011, PERUBAHAN TARIF DARI 41 KE 51 LAP. PETUGAS CAB.I MENGETAHUI KACAB I ( ILHAM YACOB ) TGL 31 DES 2015, GANTI WM BARU LAP. CAB.I  TGL 08 JAN 2016', '5,5809435', '95,3527289', '1999-12-30 17:00:00', 1),
(35895, 36461, 103020, 'DRS.H.ARIEF LUKMAN', 'N2', 'Niaga Menengah', '003-014-111', 'JL.T.NYAK ARIEF NO.340 No.', '1', '101', 'PERUMNAS LINGKE', 'SYIAH KUALA', '', '', '10', '30-1051', '2017-04-29', '1051-WER', '36362', '103020', '1', '36361', '301', '2009-08-01', '5', '21051', '2015-09-30', 3589, '01 - Depan Rumah', '101', 1060, 'A', '0', '0', 'Agresso', '-', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5800086', '95,3525555', '1999-12-30 17:00:00', 1),
(35896, 36462, 312021, 'MACHMUD GADE', 'RT3', 'Rumah Tangga C', '016-018-065', 'JL.TERATAI NO.323', '1', '20', 'LAMPULO', 'KUTA ALAM', 'MACHMUD GADE', '', '31', '96-2012', '2018-04-23', '2012-IVAN', '36363', '312021', '1', '36362', '301', '2009-07-01', '5', '19217', '2018-04-20', 0, '01 - Depan Rumah', '101', 1, 'A', '0', '0', 'Agresso', '-', 'Kor', '', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', 'TUTUP REK. TUNGGAKAN CAB.I TGL 09 NOV 2015/ AKT KD NO.27/04/SK/2018 TGL 20/04/18', '5,570565', '95,323028', '1999-12-30 17:00:00', 0),
(35897, 36463, 308030, 'HASBALLAH', 'RT1', 'Rumah Tangga A', '014-009-008', 'JL.T.FAKINAH NO.4 No.', '1', '11', 'KP. MULIA', 'KUTA ALAM', '', '8126931593', '30', '99-1046', '2010-04-16', '1046-NATY', '36364', '308030', '1', '36363', '301', '2009-11-01', '5', '014-009-008', '2015-08-20', 891, '01 - Depan Rumah', '101', 119, 'A', '0', '0', 'Agresso', '104541', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5644496', '95,3211334', '1999-12-30 17:00:00', 1),
(35898, 36464, 709008, 'TEUKU MOEHAMMAD RIDHA', 'RT2', 'Rumah Tangga B', '36954', 'JL.WEDANA LR.VI NO.111B No.', '3', '67', 'LAM ARA', 'BANDAR RAYA', '', '15605', '70', '10-1050', '2011-10-27', '1050-ARJUNA', '36365', '709008', '1', '36364', '301', '2009-12-22', '5', '36954', '2015-09-29', 360, '01 - Depan Rumah', '101', 1633, 'A', '0', '0', '15605', '-', 'Kor', '-PINDAH RUTE 0709018 KE RUTE 0709008 LAP P METER RAMADHAN  TGL 27-10-2011 DSML OKT 2011', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-PINDAH RUTE 0709018 KE RUTE 0709008 LAP P METER RAMADHAN  TGL 27-10-2011 DSML OKT 2011', '5,5240652', '95,3098176', '1999-12-30 17:00:00', 1),
(35899, 36465, 105029, 'M.HASAN,SE', 'RT3', 'Rumah Tangga C', '36953', 'JL.TGK.DIBLANG II No.', '2', '46', 'RUKOH', 'SYIAH KUALA', '', '15166', '10', '99-2022', '2011-01-24', '2022-ZAKY', '36366', '105029', '1', '36365', '301', '2009-12-22', '5', '36953', '2015-09-30', 1680, '01 - Depan Rumah', '101', 2074, 'A', '0', '0', 'Agresso', '7280985', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5791066', '95,3709759', '1999-12-30 17:00:00', 1),
(35900, 36466, 105029, 'DRS. MUSTAFA AMIN', 'RT3', 'Rumah Tangga C', '36937', 'JL.TGK.DI BLANG No.', '2', '46', 'RUKOH', 'SYIAH KUALA', '', '15747', '10', '10-1051', '2010-02-24', '1051-WER', '36367', '105029', '1', '36366', '301', '2009-12-22', '5', '36937', '2015-09-30', 1795, '01 - Depan Rumah', '101', 2053, 'A', '0', '0', 'Agresso', '-', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5777914', '95,3704532', '1999-12-30 17:00:00', 0),
(35901, 36467, 105029, 'DRA.HJ.MAISARAH', 'RT3', 'Rumah Tangga C', '36933', 'JL.TGK.DI BLANG No.', '2', '46', 'RUKOH', 'SYIAH KUALA', '', '15743', '10', '10-1051', '2010-02-24', '1051-WER', '36368', '105029', '1', '36367', '301', '2009-12-22', '5', '36933', '2015-09-30', 1026, '01 - Depan Rumah', '101', 2054, 'A', '0', '0', 'Agresso', '-', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5779534', '95,3703826', '1999-12-30 17:00:00', 0),
(35902, 36468, 304012, 'DRS.SYUKRI ABDULLAH', 'RT2', 'Rumah Tangga B', '36949', 'JL.JEURAT RAYA LR D BEURAWE No.', '2', '16', 'BEURAWE', 'KUTA ALAM', '', '15759', '30', '10-1051', '2010-02-20', '1051-WER', '36369', '304012', '1', '36368', '301', '2009-12-22', '5', '36949', '2015-08-14', 1152, '01 - Depan Rumah', '101', 494, 'A', '0', '0', 'Agresso', '-', 'Kor', '-', 'BARINDO', '01 - Baik', '1900-01-02', 'Bag. Distribusi PDAM', '1', '-', '5,5580612', '95,3338959', '1999-12-30 17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t4rekbayarbas`
--

CREATE TABLE `t4rekbayarbas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpel` bigint(20) UNSIGNED NOT NULL,
  `idjln` int(10) UNSIGNED NOT NULL,
  `kdpellama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keltarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novocer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meter_sbl` int(10) UNSIGNED NOT NULL,
  `meter_skr` int(10) UNSIGNED NOT NULL,
  `mpakai` int(10) UNSIGNED NOT NULL,
  `minn` int(10) UNSIGNED NOT NULL,
  `adm` int(10) UNSIGNED NOT NULL,
  `dmeter` int(10) UNSIGNED NOT NULL,
  `dlain` int(10) UNSIGNED NOT NULL,
  `denda` int(10) UNSIGNED NOT NULL,
  `h1` int(10) UNSIGNED NOT NULL,
  `h2` int(10) UNSIGNED NOT NULL,
  `h3` int(10) UNSIGNED NOT NULL,
  `h4` int(10) UNSIGNED NOT NULL,
  `s1` int(10) UNSIGNED NOT NULL,
  `s2` int(10) UNSIGNED NOT NULL,
  `s3` int(10) UNSIGNED NOT NULL,
  `s4` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `loket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haspaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `waktu` time NOT NULL,
  `statuscetak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalupload` timestamp NOT NULL,
  `kantorbayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t4rekbayarbas`
--

INSERT INTO `t4rekbayarbas` (`id`, `idpel`, `idjln`, `kdpellama`, `keltarif`, `gol`, `kelompok`, `novocer`, `aktno`, `bulan`, `meter_sbl`, `meter_skr`, `mpakai`, `minn`, `adm`, `dmeter`, `dlain`, `denda`, `h1`, `h2`, `h3`, `h4`, `s1`, `s2`, `s3`, `s4`, `total`, `tanggal`, `loket`, `users`, `setatus`, `Keterangan`, `haspaid`, `harga`, `waktu`, `statuscetak`, `tanggalupload`, `kantorbayar`) VALUES
(1, 30154, 103006, '110001-0029', '1', '', '', '20000001', '130110', '11998', 7711, 7837, 126, 0, 500, 750, 0, 2727457, 0, 0, 0, 0, 0, 0, 0, 0, 70100, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '1', 68850, '17:08:43', '0', '2020-11-13 10:08:43', 'Kantor Pusat'),
(2, 36464, 709008, '110004-0041', '1', '4', '41', '20000006', '130110', '11998', 195, 215, 20, 0, 500, 750, 0, 2727462, 0, 0, 0, 0, 0, 0, 0, 0, 8000, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '1', 6750, '17:11:09', '0', '2020-11-13 10:11:09', 'Kantor Pusat'),
(3, 36466, 105029, '600001-0005', '1', '5', '51', '20000008', '130110', '11998', 6, 7, 1, 20, 500, 1000, 0, 2727464, 0, 0, 0, 0, 0, 0, 0, 0, 10500, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '1', 9000, '09:55:49', '0', '2020-11-17 02:55:49', 'Kantor Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `t4rektagih`
--

CREATE TABLE `t4rektagih` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpel` bigint(20) UNSIGNED NOT NULL,
  `idjln` int(10) UNSIGNED NOT NULL,
  `kdpellama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keltarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `novocer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meter_sbl` int(10) UNSIGNED NOT NULL,
  `meter_skr` int(10) UNSIGNED NOT NULL,
  `mpakai` int(10) UNSIGNED NOT NULL,
  `minn` int(10) UNSIGNED NOT NULL,
  `adm` int(10) UNSIGNED NOT NULL,
  `dmeter` int(10) UNSIGNED NOT NULL,
  `dlain` int(10) UNSIGNED NOT NULL,
  `denda` int(10) UNSIGNED NOT NULL,
  `h1` int(10) UNSIGNED NOT NULL,
  `h2` int(10) UNSIGNED NOT NULL,
  `h3` int(10) UNSIGNED NOT NULL,
  `h4` int(10) UNSIGNED NOT NULL,
  `s1` int(10) UNSIGNED NOT NULL,
  `s2` int(10) UNSIGNED NOT NULL,
  `s3` int(10) UNSIGNED NOT NULL,
  `s4` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `loket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haspaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `waktu` time NOT NULL,
  `tanggalupload` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t4rektagih`
--

INSERT INTO `t4rektagih` (`id`, `idpel`, `idjln`, `kdpellama`, `keltarif`, `gol`, `kelompok`, `novocer`, `aktno`, `bulan`, `meter_sbl`, `meter_skr`, `mpakai`, `minn`, `adm`, `dmeter`, `dlain`, `denda`, `h1`, `h2`, `h3`, `h4`, `s1`, `s2`, `s3`, `s4`, `total`, `tanggal`, `loket`, `users`, `setatus`, `Keterangan`, `haspaid`, `harga`, `waktu`, `tanggalupload`) VALUES
(1, 30154, 103006, '110001-0029', '1', '', '', '20000001', '130110', '11998', 7711, 7837, 126, 0, 500, 750, 0, 2727457, 0, 0, 0, 0, 0, 0, 0, 0, 70100, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 68850, '00:00:00', '2020-09-17 00:18:03'),
(2, 12517, 503010, '110002-0003', '1', '', '', '20000002', '130110', '11998', 5881, 5928, 47, 0, 500, 750, 0, 2727458, 0, 0, 0, 0, 0, 0, 0, 0, 22700, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 21450, '00:00:00', '2020-09-17 00:18:03'),
(3, 36461, 103020, '110003-0002', '1', '', '', '20000003', '130110', '11998', 4050, 4065, 15, 0, 500, 750, 0, 2727459, 0, 0, 0, 0, 0, 0, 0, 0, 6125, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 4875, '00:00:00', '2020-09-17 00:18:03'),
(4, 36462, 312021, '110003-0017', '1', '4', '41', '20000004', '130110', '11998', 1554, 1579, 25, 0, 500, 750, 0, 2727460, 0, 0, 0, 0, 0, 0, 0, 0, 10250, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 9000, '00:00:00', '2020-09-17 00:18:03'),
(5, 36463, 308030, '110003-0022', '1', '1', '14', '20000005', '130110', '11998', 2002, 2002, 0, 20, 500, 750, 0, 2727461, 0, 0, 0, 0, 0, 0, 0, 0, 6050, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 4800, '00:00:00', '2020-09-17 00:18:03'),
(6, 36464, 709008, '110004-0041', '1', '4', '41', '20000006', '130110', '11998', 195, 215, 20, 0, 500, 750, 0, 2727462, 0, 0, 0, 0, 0, 0, 0, 0, 8000, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 6750, '00:00:00', '2020-09-17 00:18:03'),
(7, 36465, 105029, '110005-0023', '1', '', '', '20000007', '130110', '11998', 3626, 3684, 58, 0, 500, 750, 0, 2727463, 0, 0, 0, 0, 0, 0, 0, 0, 29300, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 28050, '00:00:00', '2020-09-17 00:18:03'),
(8, 36466, 105029, '600001-0005', '1', '5', '51', '20000008', '130110', '11998', 6, 7, 1, 20, 500, 1000, 0, 2727464, 0, 0, 0, 0, 0, 0, 0, 0, 10500, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 9000, '00:00:00', '2020-09-17 00:18:03'),
(9, 36467, 105029, '600001-0009', '1', '', '', '20000009', '130110', '11998', 1300, 1348, 48, 0, 500, 750, 0, 2727465, 0, 0, 0, 0, 0, 0, 0, 0, 23300, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 22050, '00:00:00', '2020-09-17 00:18:03'),
(10, 36468, 304012, '600001-0011', '1', '', '', '20000010', '130110', '11998', 4509, 4529, 20, 0, 500, 750, 0, 2727466, 0, 0, 0, 0, 0, 0, 0, 0, 8000, '2010-01-06', '1', 'Admin Trans', '2', 'Rek Lama - Tunggakan Rekening', '0', 6750, '00:00:00', '2020-09-17 00:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `kantor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kantor Pusat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `kantor`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$GIJj3PABQwP3kdSzIkyrh.Ar0zRc6qaF.7aGzF7ETH1fTSrS7zsQS', NULL, '2020-11-13 02:47:51', '2020-11-13 02:47:51', 'ADMIN', 'Kantor Pusat'),
(3, 'Admin Testing', 'email@email.com', NULL, '$2y$10$26LGk44hQhzJFn1w5FTPgeIeoPNB5RVhBApMV9iDYczmp9pWNS.ve', NULL, '2020-11-16 09:11:06', '2020-11-16 09:11:06', 'USER', 'Kantor Pusat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `t4pelanggan`
--
ALTER TABLE `t4pelanggan`
  ADD PRIMARY KEY (`idpel`),
  ADD UNIQUE KEY `t4pelanggan_idno_unique` (`idno`);

--
-- Indexes for table `t4rekbayarbas`
--
ALTER TABLE `t4rekbayarbas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t4rekbayarbas_idpel_foreign` (`idpel`);

--
-- Indexes for table `t4rektagih`
--
ALTER TABLE `t4rektagih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t4rektagih_idpel_foreign` (`idpel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t4pelanggan`
--
ALTER TABLE `t4pelanggan`
  MODIFY `idpel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36469;

--
-- AUTO_INCREMENT for table `t4rekbayarbas`
--
ALTER TABLE `t4rekbayarbas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t4rektagih`
--
ALTER TABLE `t4rektagih`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t4rekbayarbas`
--
ALTER TABLE `t4rekbayarbas`
  ADD CONSTRAINT `t4rekbayarbas_idpel_foreign` FOREIGN KEY (`idpel`) REFERENCES `t4pelanggan` (`idpel`) ON DELETE CASCADE;

--
-- Constraints for table `t4rektagih`
--
ALTER TABLE `t4rektagih`
  ADD CONSTRAINT `t4rektagih_idpel_foreign` FOREIGN KEY (`idpel`) REFERENCES `t4pelanggan` (`idpel`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
