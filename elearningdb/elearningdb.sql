-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 04.41
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearningdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `user_id` varchar(30) NOT NULL,
  `user_psw` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `profil` text DEFAULT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`user_id`, `user_psw`, `nama`, `kelamin`, `alamat`, `email`, `telpon`, `foto`, `profil`, `tgl_daftar`) VALUES
('00001', '*6A7A490FB9DC8C33C2B025A917370', 'Pebri Candra', 'P', '    Silam  ', 'pebri_candra@yahoo.com', '085278737377', '', '', '2011-09-14 10:59:57'),
('00002', '*6A7A490FB9DC8C33C2B025A917370', 'Yuli Hartati', 'W', '      Jl. Agus Salim', 'abli89@yahoo.co.id', '081371321015', '', '', '2011-09-15 10:04:29'),
('00003', '*6A7A490FB9DC8C33C2B025A917370', 'Zainal Mutaqin', 'P', 'Bangkinang      ', 'zainal.mutaqin@yahoo.co.id', '081275803282', '', '', '2011-09-19 15:40:35'),
('00004', '*6A7A490FB9DC8C33C2B025A917370', 'Masnur Abidin', 'P', 'Kuntu ', 'masnur.abidin@yahoo.co.id', '081371108513', '', '', '2011-09-20 10:31:20'),
('00005', '*6A7A490FB9DC8C33C2B025A917370', 'Eti Asniarti', 'W', 'Desa Tanjung Rambutan    ', 'etiasniarti@yahoo.com', '085265942949', '', '', '2011-09-20 11:38:41'),
('00006', '*6A7A490FB9DC8C33C2B025A917370', 'Leni Rafika Oktaviani', 'W', 'Padang Mutung', 'lenipolkam@yahoo.co.id', '085278706958', '', '', '2011-09-20 11:40:27'),
('00007', '*6A7A490FB9DC8C33C2B025A917370', 'Muhamad Sarif', 'P', 'Kampar            ', 'sarif@yahoo.co.id', '085365048772', '', '', '2011-09-20 11:42:25'),
('00008', '*6A7A490FB9DC8C33C2B025A917370', 'Syarial', 'P', 'Koto Tuo           ', 'rial@yahoo.co.id', '085278005502', '', '', '2011-09-20 11:44:14'),
('00009', '*6A7A490FB9DC8C33C2B025A917370', 'Tri Mardianto', 'P', 'Bangkinang           ', 'tri_mau@yahoo.co.id', '085278658303', '', '', '2011-09-20 11:46:47'),
('000010', '*6A7A490FB9DC8C33C2B025A917370', 'Beni Novriadi Khoiri', 'P', 'Air Tiris          ', 'beni@yahoo.co.id', '083187364981', '', '', '2011-09-20 11:48:55'),
('000011', '*6A7A490FB9DC8C33C2B025A917370', 'Rahma Wati', 'W', 'Bangkinang  ', 'rahmawati63@yahoo.co.id', '085265317083', '', '', '2011-10-17 13:20:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `user_id` varchar(30) NOT NULL,
  `user_psw` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nidn` int(20) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`user_id`, `user_psw`, `nama`, `nidn`, `kelamin`, `alamat`) VALUES
('00001', '*6A7A490FB9DC8C33C2B025A917370', 'M. Ridwan', 1003018202, 'P', 'Bangkinang      '),
('00002', '*6A7A490FB9DC8C33C2B025A917370', 'M. Jazman', 1004068202, 'P', 'Bangkinang      '),
('00003', '*6A7A490FB9DC8C33C2B025A917370', 'Abd. Gafar', 1005098101, 'P', 'Bangkinang      '),
('00004', '*6A7A490FB9DC8C33C2B025A917370', 'Fenty Kurnia Oktorina', 1031107801, 'W', 'Pekanbaru            '),
('00005', '*6A7A490FB9DC8C33C2B025A917370', 'Safni Marwa', 1026067802, 'W', 'Bangkinang            '),
('00006', '*6A7A490FB9DC8C33C2B025A917370', 'Fitri', 1021058003, 'P', 'Bangkinang                  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi_jawab`
--

CREATE TABLE `konsultasi_jawab` (
  `id_jawab` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id_tanya` char(3) NOT NULL,
  `jawaban` text NOT NULL,
  `penjawab` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi_jawab`
--

INSERT INTO `konsultasi_jawab` (`id_jawab`, `id_tanya`, `jawaban`, `penjawab`, `tanggal`) VALUES
(0002, '001', 'Kepanjangan dari HTML yaitu HyperText Markup Language', 'Ade', '2011-09-20 12:08:54'),
(0003, '002', 'Protocol merupakan standard aturan yang digunakan untuk berkomunikasi pada komputer networking, HyperText Tranfer Protocol untuk WWW.', 'Fitri', '2011-09-20 12:13:44'),
(0004, '003', 'Browser merupakan software yang di install di mesin client yang\r\nberfungsi untuk menterjemahkan tag-tag HTML menjadi halaman web.\r\nBrowser yang sering di gunakan biasanya Internet Explorer, Netscape\r\nNavigator dan masih banyak yang lainya.', 'Jazman', '2011-09-20 12:14:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi_tanya`
--

CREATE TABLE `konsultasi_tanya` (
  `id_tanya` int(3) UNSIGNED ZEROFILL NOT NULL,
  `kd_matakuliah` char(6) NOT NULL,
  `pertanyaan` text NOT NULL,
  `penanya` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi_tanya`
--

INSERT INTO `konsultasi_tanya` (`id_tanya`, `kd_matakuliah`, `pertanyaan`, `penanya`, `tanggal`) VALUES
(001, 'TI2234', 'Apa kepanjangan dari HTML,,,,????', 'Ahmad', '2008-01-18 22:38:58'),
(002, 'TI2234', 'Apa yang di maksud dengan protocol....???', 'Hesti', '2008-01-19 05:54:46'),
(003, 'TI2234', 'Apa yang di maksud dengan browser....???', 'indah', '2008-01-19 05:56:00'),
(004, 'TI2122', 'Apa yang dimaksud dengan struktur data,,,???', 'Edi', '2011-10-13 18:36:02'),
(005, 'TI2233', 'Sebutkan contoh-contoh dari sistem operasi...', 'Karel', '2011-10-13 18:47:02'),
(006, 'TI1212', 'Apa yang di maksud dengan organisasi komputer', 'Masnur', '2011-10-14 10:51:19'),
(007, 'TI3142', 'Jelaskan apa yang di maksud dengan E-Commerce', 'Johan', '2011-10-14 10:57:09'),
(008, 'TI3137', 'Yang di maksud dengan rekayasa perangkat lunak,,,,???', 'Andre', '2011-10-14 11:00:02'),
(009, 'TI3143', 'Apa yang di maksud dengan jaringan komputer,,,???', 'Anis', '2011-10-14 21:24:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `id_kuis` int(4) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `jawab_a` varchar(60) NOT NULL,
  `jawab_b` varchar(60) NOT NULL,
  `jawab_c` varchar(60) NOT NULL,
  `jawab_d` varchar(60) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuis`
--

INSERT INTO `kuis` (`id_kuis`, `soal`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `kunci`) VALUES
(2, 'Di bawah ini, manakah database yang berlisensi Open Source ?      ', 'MySQL', 'Ms Access', 'Oracle', 'FoxPro', 'A'),
(3, 'Apakah Versi Windows terkakhir?', 'Windows Me', 'Windows XP', 'Windows Vista', 'Windows 2000', 'C'),
(4, 'Jaringan komputer adalah....    ', 'Kelompok Komputer', 'Kumpulan Komputer', 'Sekumpulan komputer yang terhubung untuk bertukar data dan i', 'Jaringan dari komputer', 'C'),
(5, 'Jaringan global yang menghubungkan jutaan komputer dunia sering di sebut..... ', 'Internet', 'Intranet', 'LAN', 'MAN', 'A'),
(6, 'Dalam jaringan komputer topologi adalah bentuk pengaturan keterhubungan antar sistem komputer. Yang ', 'Bus', 'Star', 'Moon', 'Ring', 'C'),
(7, 'Untuk menghubungkan HUB dengan HUB maka menggunakan kabel ....\r\n   ', 'Straight', 'Cross', 'Serial', 'Paralel', 'B'),
(8, 'Berikut adalah yang dibutuhkan dalam membuat sebuah jaringan, kecuali....\r\n      ', 'NIC', 'Crimping Tools', 'UTP', 'Modem', 'B'),
(9, 'Dalam jaringan komputer, pihak yang meminta / menerima layanan disebut', 'Server', 'Billing', 'Client', 'Operator', 'C'),
(10, 'Dalam jaringan komputer, pihak yang memberikan layanan disebut', 'Server', 'Billing', 'Client', 'Operator', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuis` int(3) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `nilai_a` int(10) NOT NULL DEFAULT 0,
  `nilai_b` int(10) NOT NULL DEFAULT 0,
  `nilai_c` int(10) NOT NULL DEFAULT 0,
  `nilai_d` int(10) NOT NULL DEFAULT 0,
  `nilai_e` int(10) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuis`, `pertanyaan`, `nilai_a`, `nilai_b`, `nilai_c`, `nilai_d`, `nilai_e`) VALUES
(1, 'Menurut Anda, bagaimana kualitas dosen STMIK yang ada sekarang?', 1, 1, 1, 1, 1),
(2, 'Saat ini, Apakah dosen pengampu matakuliah sudah sesuai kemampuan?', 1, 2, 0, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_matakuliah` char(6) NOT NULL,
  `nm_matakuliah` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kd_matakuliah`, `nm_matakuliah`) VALUES
('TI1108', 'Algoritma Dan Pemrograman 1'),
('TI1211', 'Algoritma dan Pemrograman 2'),
('TI1212', 'Organisasi Komputer'),
('TI1213', 'Paket Program Niaga'),
('TI1214', 'Bahasa Inggris Terapan II'),
('TI1215', 'Elektronika Analog'),
('TI1216', 'Matematika Diskrit'),
('TI1217', 'Pengantar Ekonomi dan Manajemen'),
('TI2120', 'Metode Numerik I'),
('TI2121', 'Arsitektur Komputer'),
('TI2122', 'Struktur Data'),
('TI2123', 'Database Management System'),
('TI2124', 'Pengantar Sistem Informasi'),
('TI2125', 'Elektronika Digital'),
('TI2229', 'Metode Numerik II'),
('TI2230', 'Microprosessor dan ASM'),
('TI2231', 'Pemrograman Graphical User Interface'),
('TI2232', 'Sistem Informasi Manajemen'),
('TI2233', 'Sistem Operasi'),
('TI2234', 'Pemrograman Web'),
('TI3137', 'Rekayasa Perangkat Lunak'),
('TI3138', 'Komunikasi dan Keamanan Data'),
('TI3139', 'Sistem Berbasis Pengetahuan'),
('TI3140', 'PLC (Programming Logic Controller)'),
('TI3141', 'GIS (Geographical Information System)'),
('TI3142', 'E-Commerce'),
('TI3143', 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(4) NOT NULL,
  `kd_matakuliah` char(6) NOT NULL,
  `bab_nama` varchar(60) NOT NULL,
  `bab_judul` varchar(100) NOT NULL,
  `definisi` text NOT NULL,
  `file_data` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `kd_matakuliah`, `bab_nama`, `bab_judul`, `definisi`, `file_data`, `tanggal`) VALUES
(4, 'TI2234', 'Bab 1', 'PENGENALAN HTML', 'HTML (HyperText Markup Language)', 'TI2234.day-1 HTML.pdf', '2011-09-20 12:44:44'),
(5, 'TI2234', 'Bab 2', 'LANJUTAN HTML', 'Membuat Tabel dan Menampilkan Tabel', 'TI2234.day-2  HTML LANJUT.pdf', '2011-09-20 12:44:55'),
(6, 'TI2234', 'Bab 3', 'CSS', 'CSS (Cascading Style Sheets)', 'TI2234.day-3 CSS.pdf', '2011-09-20 12:45:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tut_kategori`
--

CREATE TABLE `tut_kategori` (
  `id_kategori` int(3) UNSIGNED ZEROFILL NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tut_kategori`
--

INSERT INTO `tut_kategori` (`id_kategori`, `kategori`) VALUES
(001, 'Modifikasi Registry Windows'),
(002, 'Desain Cantik Windows XP'),
(003, 'Bermain Game dan Chet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tut_tutorial`
--

CREATE TABLE `tut_tutorial` (
  `id_tutorial` int(3) NOT NULL,
  `id_kategori` char(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `lengkap` text NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tut_tutorial`
--

INSERT INTO `tut_tutorial` (`id_tutorial`, `id_kategori`, `judul`, `lengkap`, `tgl_masuk`) VALUES
(1, '001', 'Buku Menarik Registry Windows', 'Buat kamu-kamu yang senang dengan Utak-atik konfigurasi Windows, maka kamu perlu punya buku ini: <br>\r\n- 303 Trik Optimalkan Registry Windows', '2008-01-22 19:32:22'),
(2, '001', 'Buku Registry yang Wajib Kamu Beli', 'Berikut adalah daftar buku yang wajib anda beli : <br>\r\n- Konfigurasi dan Manipulasi Registry Windows XP, P ELEX MEDIA.<br>\r\n- Konfigurasi dan Manipulasi Registry Windows XP Buku Dua, P ELEX MEDIA.', '2008-01-22 19:32:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konsultasi_jawab`
--
ALTER TABLE `konsultasi_jawab`
  ADD PRIMARY KEY (`id_jawab`);

--
-- Indeks untuk tabel `konsultasi_tanya`
--
ALTER TABLE `konsultasi_tanya`
  ADD PRIMARY KEY (`id_tanya`);

--
-- Indeks untuk tabel `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_matakuliah`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tut_kategori`
--
ALTER TABLE `tut_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tut_tutorial`
--
ALTER TABLE `tut_tutorial`
  ADD PRIMARY KEY (`id_tutorial`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konsultasi_jawab`
--
ALTER TABLE `konsultasi_jawab`
  MODIFY `id_jawab` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konsultasi_tanya`
--
ALTER TABLE `konsultasi_tanya`
  MODIFY `id_tanya` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id_kuis` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
