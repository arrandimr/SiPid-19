-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2020 at 08:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13806450_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `kota_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Usia` varchar(3) NOT NULL,
  `kwn` char(5) NOT NULL,
  `negara` varchar(25) NOT NULL,
  `Status` char(10) NOT NULL,
  `kawin` varchar(25) NOT NULL,
  `Tempat` char(10) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `kronis` char(10) NOT NULL,
  `Ayah` char(10) NOT NULL,
  `ibu` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `sex`, `no_telp`, `kota_lahir`, `tanggal_lahir`, `Usia`, `kwn`, `negara`, `Status`, `kawin`, `Tempat`, `Alamat`, `kronis`, `Ayah`, `ibu`) VALUES
(1, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(4, 'arrandi', '', '', '', '0000-00-00', '', '', '', '', 'Be', '', '', 'Tidak Ada', '', 'Hipertensi'),
(5, 'arrandi', '', '', '', '0000-00-00', '', '', '', '', 'Be', '', '', 'Tidak Ada', '', 'Hipertensi'),
(6, 'arrandi', 'Laki - Laki', '085231274554', 'sidoarjo', '2020-05-01', '20', 'WNI', '', 'mhs', 'Belum menikah', 'Rumah', 'kaskeeaeje', 'Tidak Ada', 'Tidak Ada', 'Hipertensi'),
(7, 'arrandi', 'Laki - Laki', '085231274554', 'sidoarjo', '2020-05-01', '20', 'WNA', 'USA', 'mhs', 'Belum menikah', 'apart', 'jl. soekarno', 'Tidak Ada', 'Hipertensi', 'Hipertensi'),
(8, 'mita', 'Perempuan', '085231274554', 'sidoarjo', '2020-05-01', '20', 'WNI', '', 'pekerja', 'Menikah', 'rusun', 'jl. melati', 'Tidak Ada', 'Jantung', 'Hipertensi'),
(9, 'arrandi muhamad riesta', 'Laki - Laki', '032589478', 'sidoarjo', '2020-05-05', '20', 'WNI', 'Australia', 'Turis', 'Menikah', 'apart', 'jl. kenanga', 'Hipertensi', 'Tidak Ada', 'Hepatitis'),
(10, 'Arrandi', 'Laki - Laki', '085231274554', 'sidoarjo', '2020-05-21', '20', 'WNI', '', 'mhs', 'Belum menikah', 'Rumah', 'anggaswangi', 'Tidak Ada', 'Tidak Ada', 'Jantung'),
(11, 'arya', 'Laki - Laki', '0125151515', 'surabaya', '2020-05-05', '16', 'WNI', '', 'pelajar', 'Belum menikah', 'Rumah', 'jl. babat', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(12, 'arrandi', 'Laki - Laki', '085231274554', 'sidoarjo', '2020-05-08', '20', 'WNI', '', 'pelajar', 'Belum menikah', 'rusun', 'dscedcescf', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada'),
(13, 'admin', 'Laki - Laki', '085231274554', 'sidoarjo', '2020-05-20', '20', 'WNI', '', 'Turis', 'Belum menikah', 'kontrak', 'hjcghgcvg', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `peduli`
--

CREATE TABLE `peduli` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sex` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `prop` char(30) NOT NULL,
  `Nominal` int(11) NOT NULL,
  `Rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peduli`
--

INSERT INTO `peduli` (`id`, `nama`, `sex`, `email`, `telp`, `prop`, `Nominal`, `Rekening`) VALUES
(1, 'arrandi', 'L', 'arrandi@gmail.com', '085231274554', '15', 2000000, '6754378121631'),
(2, 'arrandi', 'L', 'muhamad@gmail.com', '085231274554', '14', 3000000, '6754378121987'),
(3, 'arrandi', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '14', 600000, '72384192438723'),
(4, 'arrandi', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '14', 600000, '72384192438723'),
(5, 'arrandi', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '14', 600000, '72384192438723'),
(6, 'arrandi', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '14', 600000, '72384192438723'),
(7, 'admin', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '16', 600000, '848416181841'),
(8, 'admin', 'L', 'arrandimuhamadriesta12@gmail.com', '085231274554', '16', 600000, '848416181841');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id` int(11) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `RumahSakit` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id`, `kota`, `RumahSakit`, `alamat`, `telepon`) VALUES
(1, 'Surabaya', 'Rumah Sakit Umum Daerah Dr. Soetomo', 'Jalan Mayjen Prof. Dr. Moestopo No.6-8, Airlangga, Kecamatan Gubeng, Kota SBY, Jawa Timur 60286', '(0351) 5501001'),
(2, 'Surabaya', 'Rumah Sakit Katholik Saint Vincentius a Paulo (RKZ) Surabaya', 'Jl. Diponegoro No.51, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241', '(031) 5677562'),
(4, 'Surabaya', 'Rumah Sakit Adi Husada Undaan Wetan', ' Jl. Undaan Wetan No.40-44, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', ' (031) 5318000'),
(5, 'Surabaya', 'Rumah Sakit Primasatya Husada Citra (PHC) Surabaya', 'Jl. Prapat Kurung Selatan No.1, Tanjung Perak, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60165', ' (031) 3294801'),
(6, 'Surabaya', 'Rumah Sakit Umum Daerah Bhakti Dharma Husada', 'Jalan Kendung No. 115 - 117, Sememi, Kec. Benowo, Kota SBY, Jawa Timur 60198', ' (031) 7409135'),
(7, 'Surabaya', 'Rumah Sakit Islam Jemursari Surabaya', 'Jl. Raya Jemursari No.51-57, Jemur Wonosari, Kec. Wonocolo, Kota SBY, Jawa Timur 60237', '(031) 8471877'),
(8, 'Surabaya', 'Rumah Sakit Siloam Surabaya', 'Jl. Raya Gubeng No.70, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281', ' (031) 99206900'),
(9, 'Surabaya', 'Rumah Sakit Umum Haji Surabaya', 'Jl. Manyar Kertoadi, Klampis Ngasem, Kec. Sukolilo, Kota SBY, Jawa Timur 60116', '(031) 5924000'),
(10, 'Surabaya', 'Rumah Sakit Premier Surabaya', 'Jl. Nginden Intan Barat No.B, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118', '(031) 5993211'),
(11, 'Surabaya', 'Rumah Sakit Husada Utama Surabaya', 'Jl. Mayjen Prof. Dr. Moestopo No.31-35, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60131', ' (031) 5018335'),
(12, 'Surabaya', 'Rumah Sakit Bhayangkara Tk. II H.S. Samsoeri Mertojoso', 'Jl. Ahmad Yani No.116, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231', '(031) 8292227'),
(13, 'Surabaya', 'Rumah Sakit Manyar Medical Centre', 'Jl. Raya Manyar No.9, Manyar Sabrangan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60284', '(031) 33311188'),
(14, 'Surabaya', 'RS Universitas Airlangga', 'Kampus C Unair, Jalan Mulyorejo, Mulyorejo, Kecamatan Mulyorejo, Kota SBY, Jawa Timur 60115', '031-5916287, 5916290'),
(15, 'Surabaya', 'Rumah Sakit National Hospital', 'Jl. Boulevard Famili Sel. No.Kav.1, Babatan, Kec. Wiyung, Kota SBY, Jawa Timur 60227', ' (031) 2975777'),
(16, 'Surabaya', 'Rumah Sakit Royal Surabaya', 'Jl. Rungkut Industri I No.1, Kendangsari, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292', '(031) 8476111'),
(17, 'Surabaya', 'Rumah Sakit Tk. III Brawijaya', 'Jl. Kesatriyan No.17, Sawunggaling, Kec. Wonokromo, Kota SBY, Jawa Timur 60242', 'Telepon: (031) 56683'),
(18, 'Surabaya', 'Rumah Sakit Angkatan Laut Dr. Ramelan', 'Jl. Gadung No.1, Jagir,Wonokromo, Surabaya 60244', ' (031) - 8420958 (03'),
(19, 'Surabaya', 'Rumah Sakit Jiwa Menur Surabaya', 'Jl. Raya Menur No.120, RT.009/RW.01, Kertajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60282', '(031) 5021635'),
(20, 'Surabaya', 'Rumah Sakit Umum Daerah Dr. Mohammad Soewandhie Surabaya', 'Jl. Tambak Rejo No.45-47, Tambakrejo, Kec. Simokerto, Kota SBY, Jawa Timur 60142', '(031) 3717141'),
(21, 'Surabaya', 'RS Paru Surabaya', 'Jl. Karang Tembok No.39 Pegirian Semampir Kota SBY, Jawa Timur 60153, Indonesia', '(031)-3713836'),
(22, 'Malang', 'Rumah Sakit Umum Daerah (RSUD)  Dr. Saiful Anwar', 'Jalan Jaksa Agung Suprapto No.2, Klojen, Kecamatan Klojen, Kota Malang, Jawa Timur 65111', ' (0341) 362101'),
(23, 'Malang', 'RSU Islam Aisyiyah Malang', ' Jl. Sulawesi No.16, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117', '(0341) 326773'),
(24, 'Malang', 'Rumah Sakit Tk. II dr. Soepraoen', 'JL. S. Supriyadi, No. 22, Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65139', ' (0341) 325111'),
(25, 'Malang', 'Rumah Sakit Panti Waluya Sawahan', 'Jl. Nusakambangan No.56, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117', ' (0341) 366033'),
(26, 'Malang', 'Rumah Sakit Lavalette', 'Jl. W.R. Supratman No.10, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111', '(0341) 470805'),
(27, 'Malang', 'Rumah Sakit Umum Daerah Kanjuruhan', 'Jl. Panji No.100, Krajan, Panggungrejo, Kec. Kepanjen, Malang, Jawa Timur 65163', '(0341) 395041'),
(28, 'Malang', 'Rumah Sakit Umum Wava Husada', 'Jl. Panglima Sudirman No.99A, Lemah Duwur, Dilem, Kec. Kepanjen, Malang, Jawa Timur 65163', '(0341) 393000'),
(29, 'Malang', 'Rumah Sakit Prima Husada Malang', 'Jl. Raya Mondoroko, Mondoroko, Banjararum, Kec. Singosari, Malang, Jawa Timur 65153', '(0341) 458679'),
(30, 'Malang', 'RSU Universitas Muhammadiyah Malang', 'Jl. Raya Tlogomas No.45, Dusun Rambaan, Landungsari, Kec. Dau, Kota Malang, Jawa Timur 65144', '(0341) 561666'),
(31, 'Malang', 'RS Islam Gondanglegi', ' Jl. Hayam Wuruk No.66, Krajan, Gondanglegi Wetan, Kec. Gondanglegi, Malang, Jawa Timur 65174', ' (0341) 879047'),
(32, 'Madiun', 'Rumah Sakit Umum Daerah (RSUD)  Dr. Soedono', 'Jalan Dr. Sutomo No.59, Kartoharjo, Kecamatan Kartoharjo, Kota Madiun, Jawa Timur 63117', '(0351) 454657'),
(33, 'Madiun', 'RS Islam Siti Aisyah Madiun', 'Jl. Mayjen Sungkono No.38 - 40, Nambangan Lor, Kec. Manguharjo, Kota Madiun, Jawa Timur 63129', '(0351) 464822, 46221'),
(34, 'Madiun', 'Rumah Sakit Umum Daerah Caruban', 'Jl. Ahmad Yani No.KM 2, Caruban, Ngampel, Kec. Mejayan, Madiun, Jawa Timur 63153', ' (0351) 383956'),
(35, 'Madiun', 'RSUD Dolopo', ' Jl. Raya Dolopo - Ngebel No.117, Krajan, Dolopo, Kec. Dolopo, Madiun, Jawa Timur 63174', '(0351) 385266'),
(36, 'Sidoarjo', 'Rumah Sakit Umum Daerah (RSUD) Sidoarjo', 'Jalan Mojopahit No.667, Sidowayah, Celep, Kecamatan Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215', '(031) 8961649'),
(37, 'Sidoarjo', 'Rumah Sakit Islam Siti Hajar Sidoarjo', 'Jl. Raden Patah No.70 - 72, Jasem, Bulusidokare, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61234', '(031) 8921233'),
(38, 'Sidoarjo', 'Rumah Sakit Mitra Keluarga Waru', 'Jl. Jenderal S. Parman No.8, Krajan Kulon, Waru, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', ' (031) 8542111'),
(39, 'Sidoarjo', 'Rumah Sakit Siti Khodijah Sepanjang', 'Jl. Raya Bebekan, RT.02/RW.01, Bebekan, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257', '(031) 7881130 ext. 7'),
(40, 'Sidoarjo', 'Rumah Sakit Umum Anwar Medika', 'Jl. Bypass Krian No.KM, Semawut, Balongbendo, Kec. BalongBendo, Kabupaten Sidoarjo, Jawa Timur 61263', '(031) 8972052'),
(41, 'Pasuruan', 'Rumah Sakit Umum Daerah Bangil', 'Jl. Raya Raci - Bangil, Balungbendo, Masangan, Kec. Bangil, Pasuruan, Jawa Timur 67153', '(0343) 744900'),
(42, 'Pasuruan', 'Rumah Sakit Umum Daerah Dr. R. Soedarsono', 'Jl. Dokter Wahidin Sudiro Husodo No.1-4, Purutrejo, Kec. Purworejo, Kota Pasuruan, Jawa Timur 67117', '(0343) 421073'),
(43, 'Probolinggo', 'Rumah Sakit Umum Daerah Tongas', ' Jl. Tongas No.229, Karang Sawo, Curahdringu, Kec. Tongas, Probolinggo, Jawa Timur 67252', '(0335) 511118'),
(44, 'Probolinggo', 'Rumah Sakit Umum Daerah Dr. Mohamad Saleh', ' Jl. D.I. Panjaitan No.65, Sukabumi, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67219', ' (0335) 433119'),
(45, 'Jember', 'Rumah Sakit Daerah (RSD) Dr. Soebandi ', 'Jalan DR. Soebandi No.124, Cangkring, Patrang, Kecamatan Patrang, Kabupaten Jember, Jawa Timur 68111', ' (0331) 487441'),
(46, 'Jember', 'Rumah Sakit Tk. III Baladhika Husada', 'Jalan Panglima Besar Sudirman No.45, Jemberlor, Patrang, Pagah, Jemberlor, Kec. Patrang, Kabupaten J', '(0331) 484674'),
(47, 'Jember', 'Rumah Sakit Bina Sehat', 'Jl. Jayanegara No.7, Kaliwates Kidul, Kaliwates, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131', '(0331) 422701'),
(48, 'Jember', 'Rumah Sakit Citra Husada', 'Jl. Teratai No.22, Gebang Timur, Gebang, Kec. Patrang, Kabupaten Jember, Jawa Timur 68117', '(0331) 486200'),
(49, 'Jember', 'Rumah Sakit Paru Jember', 'Jl. Nusa Indah No.28, Krajan, Jemberlor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68118', '(0331) 411781'),
(50, 'Jember', 'Rumah Sakit Jember Klinik', 'Jl. Bedadung No.2, Kp. Using, Jemberlor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68118', '0811-3510-033'),
(51, 'Lumajang', 'Rumah Sakit Umum Daerah Dr. Haryoto Lumajang', 'Jl. Jendral Ahmad Yani No.5, Tompokersan, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur 67311', '(0334) 881666'),
(52, 'Lumajang', 'Rumah Sakit Djatiroto', 'Jl. PB Sudirman No. 81, Jatiroto, Umbulsari, Kaliboto Kidul, Kec. Jatiroto, Kabupaten Lumajang, Jawa', '(0334) 321004'),
(53, 'Bondowoso', 'Rumah Sakit Umum dr. H. Koesnadi Bondowoso', 'Jl. P. Tendean No. 3 Kotakulon, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68323', '(0332) 421263, (0332'),
(54, 'Situbondo', 'Rumah Sakit Umum Daerah dr. Abdoer Rahem', 'Jl. Anggrek No.68, Patokan Utara, Patokan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68312', '(0338) 673293'),
(55, 'Banyuwangi', 'Rumah Sakit Umum Daerah (RSUD) Blambangan', 'Jalan Letkol Istiqlah No.49, Singonegaran, Kecamatan Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68', '(0333) 421118'),
(56, 'Bangkalan', 'Rumah Sakit Umum Daerah Syarifah Ambami Rato Ebu', 'Jl. Pemuda Kaffa No.9, Pejagan, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69112', '(031) 3095088'),
(57, 'Sampang', 'Rumah Sakit Umum Daerah dr. Mohammad Zyn Kabupaten Sampang', 'Jl.Rajawali No. 10, Sampang', '(0323) 323956'),
(58, 'Pamekasan', 'Rumah Sakit Umum Daerah Dr. H. Slamet Martodirdjo', 'Jl. Raya Panglegur No.4, Kramat, Panglegur, Tlanakan, Kabupaten Pamekasan, Jawa Timur 69371', '(0324) 326242'),
(59, 'Pamekasan', 'Rumah Sakit Umum Mohammad Noer Pamekasan', 'Jalan Bonorogo No.17, Lawangan Daya, Pademawu, Taman, Lawangan Daya, Kec. Pamekasan, Kabupaten Pamek', '(0324) 322594'),
(60, 'Sumenep', 'Rumah Sakit Umum Daerah Dr. H. Moh. Anwar', 'Jl. DR. Cipto No.35, Gudang, Kolor, Kotasumenep, Kabupaten Sumenep, Jawa Timur 69417', ' (0328) 666788'),
(61, 'Gresik', 'Rumah Sakit Umum Daerah Ibnu Sina', 'Jl. Dr. Wahidin S.H. No.243B, Kembangan, Klangonan, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61161', '(031) 3951239'),
(62, 'Lamongan', 'Rumah Sakit Umum Daerah Dr. Soegiri Lamongan', ' Jl. Kusuma Bangsa No.7, Beringin, Tumenggungan, Kec. Lamongan, Kabupaten Lamongan, Jawa Timur 62214', '(0322) 321718'),
(63, 'Lamongan', 'Rumah Sakit Muhammadiyah Lamongan', 'Jl. Jaksa Agung Suprapto No.76, Sarirejo, Sukorejo, Kec. Lamongan, Kabupaten Lamongan, Jawa Timur 62', '(0322) 322834'),
(64, 'Tuban', 'Rumah Sakit Umum Daerah (RSUD)  dr. R. Koesma Tuban ', 'Jalan Dr. Wahidin Sudirohusodo Gg. Bima No.800, Sidorejo, Kecamatan Tuban, Kabupaten Tuban, Jawa Tim', '(0356) 321010, 32326'),
(65, 'Bojonegoro', 'Rumah Sakit Umum Daerah Dr. R. Sosodoro Djatikoesoemo', 'Jl. Veteran No.36, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115', '(0353) 3412133'),
(66, 'Mojokerto', 'Rumah Sakit Umum Daerah Prof. Dr. Soekandar', 'Jl. Hayam Wuruk No.25, Rw. II, Mojosari, Kec. Mojosari, Mojokerto, Jawa Timur 61382', '(0321) 591591'),
(67, 'Mojokerto', 'Rumah Sakit Umum Daerah Dr. Wahidin Sudiro Husodo', 'Jl. Raya Surodinawan, Mojokerto - Jawa Timur', '0321 - 321661 '),
(68, 'Jombang', 'Rumah Sakit Umum Daerah Kabupaten Jombang', 'Kepanjen, Jl. KH. Wahid Hasyim No.52, Kepanjen, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61416', ' (0321) 863502'),
(69, 'Kediri', 'Rumah Sakit Umum Daerah (RSUD) Kabupaten Kediri', 'Jalan Pahlawan Kusuma Bangsa No.1, Cangkring, Pelem, Kecamatan Pare, Kediri, Jawa Timur 64213', '(0354) 391718'),
(70, 'Kediri', 'RSU Toeloengredjo', 'Jl. A.Yani Timur No.25, Pare, Kec. Pare, Kediri, Jawa Timur 64212', '(0354) 391145'),
(71, 'Kediri', 'RSUD Simpang Lima Gumul Kediri', ' Jl. Galuh Candrakirana, Tugurejo, Kec. Ngasem, Kediri, Jawa Timur 64182', '(0354) 2891400'),
(72, 'Kediri', 'Rumah Sakit Umum Daerah Gambiran', 'Jl. Kapten Piere Tendean No.16, Kota Kediri', '(0354) 2810009'),
(73, 'Kediri', 'Rumah Sakit Muhammadiyah Ahmad Dahlan', 'Jl. Gatot Subroto No.84, Mrican, Kec. Mojoroto, Kediri, Jawa Timur 64112', '(0354) 773115'),
(74, 'Tulungagung', 'Rumah Sakit Umum Daerah Dr. Iskak Tulungagung', 'Jl. Dr. Wahidin Sudiro Husodo, Kedung Taman, Kedungwaru, Kec. Kedungwaru, Kabupaten Tulungagung, Jaw', '(0355) 322609'),
(75, 'Trenggalek', 'Rumah Sakit Umum Daerah Dr. Soedomo Trenggalek', 'Jl. DR. Sutomo No.2, Cengkong, Tamanan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '(0355) 793118'),
(76, 'Batu', 'Rumah Sakit Umum Karsa Husada Batu', 'Jl. Ahmad Yani No.11-13, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65311', '(0341) 596898'),
(77, 'Blitar', 'Rumah Sakit Daerah Mardi Waluyo Kota Blitar', ' Jl. Kalimantan No.151, Karangtengah, Kec. Sananwetan, Kota Blitar, Jawa Timur 66137', '(0342) 801118'),
(78, 'Blitar', 'Rumah Sakit Umum Daerah Ngudi Waluyo Wlingi', 'Jl. Dokter Sucipto No.5, Beru, Kec. Wlingi, Blitar, Jawa Timur 66184', '(0342) 691006'),
(79, 'Nganjuk', 'Rumah Sakit Umum Daerah Nganjuk', 'Jl. DR. Soetomo No.62, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', '(0358) 21118'),
(80, 'Nganjuk', 'RSUD Kertosono', 'Jl. Panglima Sudirman No.16, Area Persawahan, Kepuh, Kec. Kertosono, Kabupaten Nganjuk, Jawa Timur 6', ' (0358) 5501503'),
(81, 'Ngawi', 'Rumah Sakit Umum Daerah Dr. Soeroto ', 'Jalan Dokter Wahidin No.27, Mulyorejo, Central Karang, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63221', '(0351) 749023'),
(82, 'Magetan', 'Rumah Sakit Angkatan Udara dr. Efram Harsana Lanud Iswahjudi', 'Komplek Lanud Iswahjudi, Jl. Raya Solo, Bakung, Maospati, Kec. Maospati, Kabupaten Magetan, Jawa Tim', '(0351) 869705'),
(83, 'Magetan', 'Rumah Sakit Umum Daerah dr. Sayidiman Magetan', 'Jl. Pahlawan No.2, Tambran, Kec. Magetan, Kabupaten Magetan, Jawa Timur 63318', '(0351) 895023'),
(84, 'Ponorogo', 'Rumah Sakit Umum Daerah Dr. Harjono S. Ponorogo', 'Jl. Laksamana Yos Sudarso, Segading, Pakunden, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63419', '(0352) 489262'),
(85, 'Ponorogo', 'RSU Aisyiyah Ponorogo', 'Jl. Dr. Sutomo No.18 - 24, Bangunsari, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63419', ' (0352) 461560'),
(86, 'Pacitan', 'Rumah Sakit Umum Daerah dr. Darsono Pacitan', 'Jl. Jend. A. Yani No.51, Krajan, Pacitan, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63511', ' (0357) 881410');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `V1` char(1) DEFAULT NULL,
  `V2` char(1) DEFAULT NULL,
  `V3` char(1) DEFAULT NULL,
  `V4` char(1) DEFAULT NULL,
  `V5` char(1) DEFAULT NULL,
  `V6` char(1) DEFAULT NULL,
  `V7` char(1) DEFAULT NULL,
  `Keputusan` varchar(100) DEFAULT NULL,
  `PageLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`V1`, `V2`, `V3`, `V4`, `V5`, `V6`, `V7`, `Keputusan`, `PageLink`) VALUES
('Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 100%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'Y', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'Y', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Y', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Positif 95%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'T', 'T', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'T', 'T', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'T', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 70%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'T', 'T', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 70%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'T', 'T', 'T', 'T', 'Y', 'Y', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'T', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'Y', 'T', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'T', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 60%', 'http://sipid-19.000webhostapp.com/positif.php'),
('T', 'T', 'T', 'T', 'T', 'Y', 'Y', 'Negatif 80%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('Y', 'T', 'T', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Negatif 60%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('Y', 'Y', 'T', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'Y', 'Y', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'Y', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'T', 'Y', 'Y', 'T', 'Presentase Kemungkinan Negatif 70%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'T', 'Y', 'Negatif 100%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('Y', 'T', 'T', 'T', 'T', 'T', 'T', 'Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'Y', 'T', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 70%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'Y', 'T', 'T', 'T', 'T', 'Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'Y', 'T', 'T', 'T', 'Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'T', 'Y', 'T', 'T', 'Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'Y', 'T', 'Negatif 90%', 'http://sipid-19.000webhostapp.com/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'T', 'T', 'Negatif 100%', 'http://sipid-19.000webhostapp.com/negatif.php');

-- --------------------------------------------------------

--
-- Table structure for table `total_kasus`
--

CREATE TABLE `total_kasus` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `positif_baru` int(10) NOT NULL,
  `odp` int(11) DEFAULT NULL,
  `odp_dipantau` int(11) DEFAULT NULL,
  `pdp` int(11) DEFAULT NULL,
  `pdp_diawasi` int(11) DEFAULT NULL,
  `positif` int(11) DEFAULT NULL,
  `positif_dirawat` int(11) DEFAULT NULL,
  `sembuh` int(11) DEFAULT NULL,
  `meninggal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_kasus`
--

INSERT INTO `total_kasus` (`id`, `tanggal`, `positif_baru`, `odp`, `odp_dipantau`, `pdp`, `pdp_diawasi`, `positif`, `positif_dirawat`, `sembuh`, `meninggal`) VALUES
(1, '02 Mei', 6, 19767, 5350, 3250, 1680, 1037, 754, 171, 112),
(2, '03 Mei', 6, 19910, 5368, 3319, 1593, 1114, 820, 177, 117),
(3, '04 Mei', 10, 20116, 6122, 3409, 1621, 1124, 759, 187, 120),
(4, '05 Mei', 38, 20401, 5219, 3547, 1710, 1162, 841, 198, 123),
(5, '06 Mei', 58, 20608, 5084, 3645, 1717, 1220, 883, 205, 132),
(6, '07 Mei', 45, 20759, 4853, 3802, 1833, 1265, 918, 210, 137),
(7, '08 Mei', 18, 20858, 4770, 3854, 1838, 1281, 923, 227, 141),
(8, '09 mei', 128, 21131, 4576, 3971, 1850, 1409, 1036, 230, 143),
(9, '10 mei', 83, 21254, 4477, 4031, 1852, 1491, 1098, 244, 149),
(10, '11 mei', 83, 21391, 4301, 4166, 1898, 1534, 1122, 257, 155),
(11, '12 mei', 115, 21567, 4298, 4280, 1910, 1649, 1213, 274, 162),
(12, '13 mei', 117, 21738, 4295, 4372, 1963, 1766, 1322, 278, 166),
(13, '14 mei', 93, 21910, 4236, 4509, 2037, 1858, 1384, 294, 180),
(14, '15 mei', 64, 22497, 4169, 4625, 2116, 1921, 1434, 302, 185),
(15, '16 Mei', 167, 22613, 4159, 4822, 2265, 2088, 1580, 310, 196),
(16, '17 Mei', 62, 22734, 4101, 4943, 2304, 2150, 1593, 337, 211),
(17, '18 Mei', 131, 22859, 4093, 5014, 2330, 2281, 1673, 375, 224),
(18, '19 Mei', 91, 22985, 4024, 5198, 2418, 2372, 1746, 387, 230),
(19, '20 Mei', 119, 23151, 3994, 5274, 2388, 2481, 1836, 403, 243),
(20, '21 Mei', 451, 23271, 3989, 5267, 2296, 2942, 2262, 413, 258),
(21, '22 Mei', 153, 23423, 4046, 5499, 2947, 3095, 2385, 426, 273);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peduli`
--
ALTER TABLE `peduli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_kasus`
--
ALTER TABLE `total_kasus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `peduli`
--
ALTER TABLE `peduli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `total_kasus`
--
ALTER TABLE `total_kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
