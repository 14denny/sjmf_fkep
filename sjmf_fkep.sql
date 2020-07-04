-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjmf_fkep`
--

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id`, `tanggal`, `ket`, `inserted_at`) VALUES
(1, '2020-07-01', '', '2020-06-30 12:29:49'),
(5, '2020-06-30', 'keterangan baru', '2020-06-30 14:03:55'),
(6, '2020-06-30', 'keterangan baru', '2020-06-30 14:05:16'),
(7, '2020-06-30', 'keterangan baru', '2020-06-30 14:06:28'),
(10, '2020-06-30', 'keterangan baru', '2020-06-30 14:10:06'),
(11, '2020-07-02', 'keterangan baru', '2020-07-02 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi_prodi`
--

CREATE TABLE `akreditasi_prodi` (
  `id` int(11) NOT NULL,
  `id_akreditasi` int(11) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `id_nilai` int(1) NOT NULL,
  `hingga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akreditasi_prodi`
--

INSERT INTO `akreditasi_prodi` (`id`, `id_akreditasi`, `prodi`, `jenjang`, `id_nilai`, `hingga`) VALUES
(1, 2, 'Ilmu Keperawatan', 'S1', 2, '2021-05-21'),
(2, 2, 'Keperawatan', 'S2', 2, '2023-08-31'),
(3, 2, 'Profesi Ners', 'Profesi', 2, '2021-05-21'),
(4, 6, 'Ilmu Keperawatan', 'S1', 2, '2021-05-21'),
(5, 6, 'Keperawatan', 'S2', 2, '2023-08-31'),
(6, 6, 'Profesi Ners', 'Profesi', 2, '2021-05-21'),
(7, 7, 'Ilmu Keperawatan', 'S1', 2, '2021-05-21'),
(8, 7, 'Keperawatan', 'S2', 2, '2023-08-31'),
(9, 7, 'Profesi Ners', 'Profesi', 2, '2021-05-21'),
(16, 10, 'Ilmu Keperawatan', 'S1', 2, '2021-05-21'),
(17, 10, 'Keperawatan', 'S2', 2, '2023-08-31'),
(18, 10, 'Profesi Ners', 'Profesi', 2, '2021-05-21'),
(19, 11, 'Ilmu Keperawatan', 'S1', 2, '2021-05-21'),
(20, 11, 'Keperawatan', 'S2', 2, '2023-08-31'),
(21, 11, 'Profesi Ners', 'Profesi', 2, '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `konten`, `inserted_at`) VALUES
(1, '<p>konten</p>', '2020-06-29 07:49:50'),
(2, '<p>Pentingnya pengawasan mutu <strong><em>telah</em></strong> diisyaratkan oleh Pemerintah sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit <s>Akademik</s> UI.</p><p><br></p><p>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.</p><p><br></p><p>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.</p><p><br></p><p>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.</p>', '2020-06-29 08:04:02'),
(3, '<p>Pentingnya pengawasan mutu telah diisyaratkan oleh Pemerintah sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit Akademik UI.</p><p>								</p><p><br></p><p>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.</p><p>								</p><p><br></p><p>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.</p><p>								</p><p><br></p><p>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.</p>', '2020-06-29 08:04:47'),
(4, '<p>Pentingnya pengawasan mutu telah diisyaratkan oleh Pemerintah sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit Akademik UI.</p><p><br></p><p><br></p><p>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.</p><p><br></p><p><br></p><p>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.</p><p><br></p><p><br></p><p>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.</p>', '2020-06-29 08:06:20'),
(5, '<p>Pentingnya pengawasan mutu telah diisyaratkan oleh <strong><u>Pemerintah</u></strong> sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit Akademik UI.</p><p><br></p><p><br></p><p>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.</p><p><br></p><p><br></p><p>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.</p><p><br></p><p><br></p><p>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.</p>', '2020-06-29 08:08:22'),
(7, '<p class=\"ql-align-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sem dolor, cursus vitae orci vel, porta bibendum dolor. Nunc in condimentum lorem. Mauris placerat luctus arcu, vel porttitor arcu pharetra sit amet. Curabitur et mollis lorem. Integer lorem lectus, maximus tincidunt placerat vitae, interdum non lacus. Vivamus vulputate justo lacus, eu commodo nisi scelerisque quis. Proin vitae pretium purus. In commodo ullamcorper risus in convallis. Sed euismod, tellus sit amet dictum accumsan, justo lectus commodo enim, a facilisis massa lacus nec metus.</p><p class=\"ql-align-justify\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dui lacus, ultricies et tincidunt lobortis, posuere non velit. Integer eu iaculis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis nulla arcu, nec accumsan risus viverra in. Morbi faucibus vel nibh vitae bibendum. Ut est libero, viverra ut felis eu, tristique aliquet mi. Sed et scelerisque odio. Maecenas elit dolor, volutpat ut malesuada ut, volutpat eu turpis.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Integer in odio elit. Ut enim sem, fringilla non leo pretium, gravida sagittis nibh. Maecenas vestibulum nulla a dolor venenatis, sed commodo purus porttitor. Suspendisse potenti. Proin vel aliquet risus. Nulla sed justo viverra, convallis lacus vitae, pharetra nisi. Aliquam a tristique metus. Proin sed hendrerit massa, vitae maximus ipsum. Quisque bibendum ultrices accumsan. In convallis viverra facilisis. In fringilla orci non nunc porta placerat. Nulla accumsan, magna ac hendrerit dictum, ante libero tempus erat, vel cursus sapien diam non dui. Nullam feugiat arcu eu elit lacinia efficitur. Etiam sollicitudin tincidunt aliquam. Aliquam purus sem, gravida gravida ante quis, dapibus suscipit est.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Cras interdum dignissim fermentum. Phasellus et lectus quis purus gravida eleifend ut at eros. Etiam vulputate dolor non ligula rhoncus lacinia. Sed vel rhoncus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ullamcorper interdum quam, ac placerat purus congue rhoncus. Ut lobortis velit quis pretium suscipit.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Nunc dapibus risus at enim commodo, sit amet posuere sapien convallis. Nam volutpat orci in varius venenatis. Quisque felis ante, pretium sollicitudin efficitur ut, dapibus id leo. Fusce eget nibh mi. Phasellus eu dui risus. Quisque dui tellus, euismod vel justo vel, commodo posuere dolor. Fusce scelerisque, ante ut faucibus feugiat, tellus lectus ullamcorper magna, a eleifend velit nisi ac libero. Quisque gravida, velit non viverra venenatis, dolor turpis semper lectus, venenatis dignissim odio nulla facilisis nulla. Mauris vehicula feugiat mi nec iaculis. In hac habitasse platea dictumst. Fusce nec risus ac nibh vulputate cursus eu id nibh. Donec mollis ante suscipit est accumsan aliquet et et libero. Quisque sit amet felis lacus. Nullam dolor orci, commodo et pellentesque eu, euismod ut ante. Nam sit amet purus sagittis, hendrerit est ac, sodales tortor. Mauris venenatis diam ac lectus fringilla, in tempor magna mollis.</p><p class=\"ql-align-justify\"><br></p><p><br></p>', '2020-06-30 11:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `total_downloads` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `download_files`
--

CREATE TABLE `download_files` (
  `id` int(11) NOT NULL,
  `id_download` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `konten`, `inserted_at`) VALUES
(1, '<p class=\"ql-align-center\"><strong class=\"ql-size-large ql-font-monospace\">Kegiatan</strong></p><p class=\"ql-align-center\"><br></p><p><span class=\"ql-font-serif\">Ini isi konten kegiatan...</span></p>', '2020-07-03 10:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akreditasi`
--

CREATE TABLE `nilai_akreditasi` (
  `id` int(11) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_akreditasi`
--

INSERT INTO `nilai_akreditasi` (`id`, `nilai`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `jabatan`) VALUES
(43, 'Bapak', 'Kepala'),
(44, 'Ibu', 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `konten`, `inserted_at`) VALUES
(1, '<p class=\"ql-align-center\"><strong class=\"ql-size-large ql-font-monospace\">Program dan Sasaran SJMF Fakultas Keperawatan Unsyiah</strong></p><p><span class=\"ql-font-serif\">Berikut isi Program dan Sasaran SJMF Fakultas Keperawatan Unsyiah</span></p>', '2020-07-02 13:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `upload_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `teks_1` varchar(100) NOT NULL,
  `teks_2` varchar(100) NOT NULL,
  `posisi` tinyint(1) NOT NULL,
  `warna_txt_1` tinyint(1) NOT NULL,
  `warna_txt_2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `location`, `upload_at`, `teks_1`, `teks_2`, `posisi`, `warna_txt_1`, `warna_txt_2`) VALUES
(1, 'uploads/slider/11.png', '2020-06-25 06:20:04', 'FKEP UNSYIAH', 'SELAMAT DATANG', 2, 0, 1),
(2, 'uploads/slider/44.jpg', '2020-06-25 06:20:34', 'Judul', 'Deskripsi', 1, 1, 0),
(3, 'uploads/slider/45.jpg', '2020-06-25 06:20:34', 'Judul', 'Deskripsi', 3, 0, 1),
(4, 'uploads/slider/47.jpg', '2020-06-25 06:20:34', 'Judul', 'Deskripsi', 1, 0, 1),
(5, 'uploads/slider/48.jpg', '2020-06-25 06:20:34', 'Judul', 'Deskripsi', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `konten`, `inserted_at`) VALUES
(1, '<p class=\"ql-align-center\"><strong class=\"ql-size-large ql-font-monospace\">Struktur Organisasi dan Tupokasi</strong></p><p class=\"ql-align-center\"><br></p><p>Berikut isi dari halaman Struktur Organisasi dan Tupokasi</p>', '2020-07-02 13:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `survey_kemudahan`
--

CREATE TABLE `survey_kemudahan` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `kemudahan` int(2) NOT NULL,
  `informatif` int(2) NOT NULL,
  `survey_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_kemudahan`
--

INSERT INTO `survey_kemudahan` (`id`, `ip`, `kemudahan`, `informatif`, `survey_time`) VALUES
(9, '::1', 10, 10, '2020-07-03 13:12:38'),
(10, '::2', 10, 9, '2020-07-03 13:18:24'),
(11, '::3', 7, 10, '2020-07-03 13:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `konten`, `inserted_at`) VALUES
(1, '<p>konten</p>', '2020-06-26 13:04:45'),
(4, '<p class=\"ql-align-center\"><strong class=\"ql-size-large\">Visi Misi</strong></p><p><em>konten</em></p>', '2020-06-26 13:15:12'),
(5, '<p class=\"ql-align-center\"><strong class=\"ql-size-large\">Visi Misi</strong></p><p>Pentingnya pengawasan mutu telah diisyaratkan oleh Pemerintah sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit Akademik UI.</p><p>								</p><p><br></p><p>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.</p><p>								</p><p><br></p><p>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.</p><p>								</p><p><br></p><p>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.</p>', '2020-06-29 08:04:29'),
(6, '<p class=\"ql-align-center\"><strong class=\"ql-size-large\">Visi Misi</strong></p><p class=\"ql-align-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sem dolor, cursus vitae orci vel, porta bibendum dolor. Nunc in condimentum lorem. Mauris placerat luctus arcu, vel porttitor arcu pharetra sit amet. Curabitur et mollis lorem. Integer lorem lectus, maximus tincidunt placerat vitae, interdum non lacus. Vivamus vulputate justo lacus, eu commodo nisi scelerisque quis. Proin vitae pretium purus. In commodo ullamcorper risus in convallis. Sed euismod, tellus sit amet dictum accumsan, justo lectus commodo enim, a facilisis massa lacus nec metus.</p><p class=\"ql-align-justify\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dui lacus, ultricies et tincidunt lobortis, posuere non velit. Integer eu iaculis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis nulla arcu, nec accumsan risus viverra in. Morbi faucibus vel nibh vitae bibendum. Ut est libero, viverra ut felis eu, tristique aliquet mi. Sed et scelerisque odio. Maecenas elit dolor, volutpat ut malesuada ut, volutpat eu turpis.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Integer in odio elit. Ut enim sem, fringilla non leo pretium, gravida sagittis nibh. Maecenas vestibulum nulla a dolor venenatis, sed commodo purus porttitor. Suspendisse potenti. Proin vel aliquet risus. Nulla sed justo viverra, convallis lacus vitae, pharetra nisi. Aliquam a tristique metus. Proin sed hendrerit massa, vitae maximus ipsum. Quisque bibendum ultrices accumsan. In convallis viverra facilisis. In fringilla orci non nunc porta placerat. Nulla accumsan, magna ac hendrerit dictum, ante libero tempus erat, vel cursus sapien diam non dui. Nullam feugiat arcu eu elit lacinia efficitur. Etiam sollicitudin tincidunt aliquam. Aliquam purus sem, gravida gravida ante quis, dapibus suscipit est.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Cras interdum dignissim fermentum. Phasellus et lectus quis purus gravida eleifend ut at eros. Etiam vulputate dolor non ligula rhoncus lacinia. Sed vel rhoncus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ullamcorper interdum quam, ac placerat purus congue rhoncus. Ut lobortis velit quis pretium suscipit.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\">Nunc dapibus risus at enim commodo, sit amet posuere sapien convallis. Nam volutpat orci in varius venenatis. Quisque felis ante, pretium sollicitudin efficitur ut, dapibus id leo. Fusce eget nibh mi. Phasellus eu dui risus. Quisque dui tellus, euismod vel justo vel, commodo posuere dolor. Fusce scelerisque, ante ut faucibus feugiat, tellus lectus ullamcorper magna, a eleifend velit nisi ac libero. Quisque gravida, velit non viverra venenatis, dolor turpis semper lectus, venenatis dignissim odio nulla facilisis nulla. Mauris vehicula feugiat mi nec iaculis. In hac habitasse platea dictumst. Fusce nec risus ac nibh vulputate cursus eu id nibh. Donec mollis ante suscipit est accumsan aliquet et et libero. Quisque sit amet felis lacus. Nullam dolor orci, commodo et pellentesque eu, euismod ut ante. Nam sit amet purus sagittis, hendrerit est ac, sodales tortor. Mauris venenatis diam ac lectus fringilla, in tempor magna mollis.</p><p class=\"ql-align-justify\"><br></p><p><br></p>', '2020-06-30 11:28:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditasi_prodi`
--
ALTER TABLE `akreditasi_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_files`
--
ALTER TABLE `download_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_akreditasi`
--
ALTER TABLE `nilai_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_kemudahan`
--
ALTER TABLE `survey_kemudahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akreditasi_prodi`
--
ALTER TABLE `akreditasi_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_files`
--
ALTER TABLE `download_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_akreditasi`
--
ALTER TABLE `nilai_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_kemudahan`
--
ALTER TABLE `survey_kemudahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
