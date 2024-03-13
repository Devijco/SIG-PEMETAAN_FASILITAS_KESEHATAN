-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 05:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_map4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE `klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama_klinik` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`id_klinik`, `nama_klinik`, `alamat`, `deskripsi`, `latitude`, `longitude`, `foto`) VALUES
(1, 'Klinik Suci Medika', 'Jl. Raya Batusangkar No.Km.5, Sungai Tarab, Kec. Sungai Tarab, Kota Bukittinggi, Sumatera Barat 27261, Indonesia', 'Klinik Utama', '-0.413674', '100.56527468723489', 'e6d1606530372715279bbd0788f02b98.jpg'),
(2, 'Klinik Polres Tanah Datar', 'Asrama Polisi Balai Selasa Blok B no. 7 nagari Baringin, Kecamatan Lima Kaum, Baringin, Kec. Lima Kaum, BATUSANGKAR, Sumatera Barat 27261, Indonesia', 'Klinik Pratama', '-0.449944', '100.584823', 'eb3e16c68c234e6b83ea058ebc1268c1.png'),
(3, 'Klinik FKTP Kesdim 0307', 'Pagaruyung, Tanjung Emas, Tanah Datar Regency, West Sumatra 27281, Indonesia', 'Klinik Pratama', '-0.477063', '100.623148', 'f3d7faeb2ac5d173b1c80c017a72ddf2.png'),
(4, ' Klinik Verban', 'Jl. Raya Batusangkar No.292, Baringin, Kec. Lima Kaum, Kabupaten Tanah Datar, Sumatera Barat 27211, Indonesia', 'Klinik Pratama Non Rawat Inap', '-0.448759', '100.585703', '463cd0d0c4031082ebb0532f008f1708.png'),
(5, 'Klinik Pratama Bundo Media', 'Jl. Raya Saruaso, Saruaso, Kec. Tj. Emas, Kabupaten Tanah Datar, Sumatera Barat 27281, Indonesia', 'Klnik Pratama Non Rawat Inap', '-0.487354', '100.633695', 'ada39f418636369284599dc64b127520.png'),
(6, 'Klinik Universitas Islam Negeri Mahmud Yunus Batusangkar', 'Jl. Jenderal Sudirman No. 137, Limo Kaum, Kec. Lima Kaum, Kabupaten Tanah Datar.', 'Klinik Pratama Non Rawat Inap', '-0.4585743437475252', '100.57278548506132', 'c50010eb5fa56bd34e72807eed3c9bc5.jpg'),
(7, ' Klinik Pratama', 'Baringin, Lima Kaum, Tanah Datar Regency, West Sumatra 27211, Indonesia', 'Klinik Pratama', '-0.449506', '100.588263', '09c09d9924ef3078e218383743e0c253.jpg'),
(8, 'Klinik Sakato', 'Jl. A. Yani NO. 452 Pincuran Tujuh, Batusangkar.', 'Klinik Pratama Non Rawat Inap.', '-0.4587678754175949', '100.5862234288937', 'cc5929f83f072ff0cec9e790c8be4507.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `nama_puskesmas` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `nama_puskesmas`, `alamat`, `deskripsi`, `latitude`, `longitude`, `foto`) VALUES
(1, 'Puskesmas X. KOTO I', 'Jl. Raya Padang Panjang-Bukittinggi Nagari Koto Baru Kecamatan Sepuluh Koto.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.3959308708430485', '100.40451331205503', 'b812878adce17ba47185df8ed35dcf32.jpg'),
(2, 'Puskesmas X. KOTO II', 'Jln. Tigo Suku Nagari Paninjauan Kecamatan X Koto.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.45117378648172674', '100.42536523903729', '38b5e1c34bcecd14f32cfaf549bd904f.jpg'),
(3, 'Puskesmas SINGGALANG', 'Jln. Raya Singgalang KM 3 Kecamatan X Koto. ', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.43887738617214606', '100.3895910120552', 'ea6d70d9a484593ab44705ab0adf20f4.jpg'),
(4, 'Puskesmas BATIPUH I ', 'Jln. Tuan Gadang Batipuh, Nagari Batipuh Ateh, Kecamatan Batipuh.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.4766717017592517', '100.46199409856429', 'f96f022297d70d6c6d3fa06ce01e9eb8.jpeg'),
(5, 'Puskesmas BATIPUH SELATAN', 'Jln. Raya Malalo, Jorong Duo Koto Nagari Guguak Malalo.', 'Puskesmas Pedesaan Rawat Inap.', '-0.5833112514761818', '100.49350123589741', '6cab76275fc64abbbe9a07574dc13f54.jpeg'),
(6, 'Puskesmas PARIANGAN', 'Ds. Simabur, Kec. Pariangan.', 'Puskesmas Pedesaan Rawat Inap.', '-0.4616440582650099', '100.50849156972797', 'abb50e6179548c9e797b0ac9e7d8f782.jpeg'),
(7, 'Puskesmas RAMBATAN I', 'Nagari Rambatan, Kec. Rambatan.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.5545780974123893', '100.54613387894705', '0062b95f787437b13232ea515de6b5e0.jpeg'),
(8, 'Puskesmas RAMBATAN II', 'Jorong Patai Nagari, Padang Magek, Kec. Rambatan.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.5004274596456237', '100.56544067415594', '2ceee1cc7897e0dc1fe23f99cd7af76d.jpg'),
(9, 'Puskesmas LIMA KAUM I', 'Jl. Sudirman Jorong Tigo Tumpuak Nagari Lima Kaum, Kec. Lima Kaum.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.4621078867644662', '100.56710745438266', '726fbab18bd8a8caecec8fa310e2f527.jpg'),
(10, 'Puskesmas LIMA KAUM II', 'Ds. Cubadak, Kec. Lima Kaum.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.4654983438165553', '100.53841459671011', 'a87021097186e15820d1e477882b183e.jpg'),
(11, 'Puskesmas TANJUNG EMAS', 'Jln. Kesehatan Nagari Koto Tnagah, Kec. Tanjung Emas.', 'Puskesmas Pedesaan Rawat Inap.', '-0.48526478823159563', '100.6557093390375', '4ce66fe4c98e4f55290e18f08d3299ad.jpg'),
(12, 'Puskesmas BATIPUH II', 'Jl. Raya Padang Panjang – Solok KM 13 Jorong Pulai Nagari Tanjung Barulak, Kec. Batipuh.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.515701872262495', '100.49086244089192', '0aa83fe6df0744d88089d5f7f33c190f.jpg'),
(13, 'Puskemas PAGARUYUNG', 'Jl. ST. Alam Bagagarsyah Paagaruyung Kec. Tanjung Emas.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.4773043156323912', '100.62339368321902', 'c9665072a63173c42120764b72d1f8f7.jpg'),
(14, 'Puskemas PADANG GANTING', 'Ds. Nagari Padang Ganting, Kec. Padang Ganting.', 'Puskesmas Pedesaan Rawat Inap.', '-0.5249695020673218', '100.68496661205559', '36ca21974657ef6be567cb3867572fa2.jpg'),
(15, 'Puskemas LINTAU BUO UTARA I', 'Jr. Nusa Indah Sampping Taman Makan Pahlawan, Nagari Lubuk Jantan, Kec. Lintau Buo Utara.', 'Puskesmas Pedesaan Rawat Inap.', '-0.4243239391087364', '100.74182998432279', '562ebe4ee0ca652aeaea8a89446aace2.jpeg'),
(16, 'Puskesmas LINTAU BUO', 'Jln. Raya Sitangkai – Balai Tangah KM 3 Tigo Jangko Kec. Lintau Buo.', 'Puskesmas Pedesaan Rawat Inap.', '-0.36779169470380985', '100.72561536719626', 'b26831296d6c8e13fc7af186a8a28a07.jpg'),
(17, 'Puskesmas LINTUO BUO UTARA II', 'Jl. Kayu Meranti Nagari Tanjung Bonai, Nagari Tanjung Bonai, Kec. Lintau Buo Utara.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.38906945526778713', '100.72278029146773', 'e96ac6c978944b379bce4afe1856e8e6.jpg'),
(18, 'Puskesmas SUNGAI TARAB I', 'Jln. Raya Batusangkar – Bukittingi KM 10 Rao-Rao, Kec. Sungai Tarab.', 'Puskesmas Pedesaan Rawat Inap.', '-0.3757048437910933', '100.56248091339133', 'd43ff210f0174618556b9dcd75e05190.jpeg'),
(19, 'Puskesmas SUNGAI TARAB II', 'Jln. Raya Sungai Tarab – Bukittinggi, Kec. Sungai Tarab.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.4103796248539328', '100.5703773369214', '7ffc9044695aadd1d584beba342f2c8b.jpg'),
(20, 'Puskesmas GURUN', 'Ds Gurun, Kec. Sungai Tarab.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.44499851822462105', '100.55987630045902', '8d4333ea7dd9ad6c00ede76baf4de12c.jpg'),
(21, 'Puskesmas SALIMPAUNG', 'Jln. Raya Batusangkar – Bukittinggi KM 12 Nagari Salimpaung, Kec. Salimpaung.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.3539253705865418', '100.54716250227217', '894b8181fb7fe144c071559bc54da2e3.png'),
(22, 'Puskesmas TANJUNG BARU', 'Jln. Raya Batusangkar – Payakumbuh KM 23, Kec. Tanjung Baru.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.30320716940343184', '100.52991186736155', '7bf17fd53debb7d26bdf08a211e6af3e.png'),
(23, 'Puskesmas SUNGAYANG', 'Ds. Nagari Sungayang, Kec. Sungayang.', 'Puskesmas Pedesaan Non Rawat Inap.', '-0.40198012879278866', '100.60280561135197', '412b08fac69c773287531c44ee9bb65b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id_rs`, `nama_rs`, `alamat`, `deskripsi`, `latitude`, `longitude`, `foto`) VALUES
(74, 'RSIA Fadhila', 'koto baranjak, Limo Kaum, Kec. Lima Kaum, Kabupaten Tanah Datar, Sumatera Barat 27213, Indonesia', 'Rumah Sakit Ibu dan Anak Perusahaan Tipe C.', '-0.454041', '100.581738', 'f1f24bd39de8953b1db7b9b6bc9ad32e.jpeg'),
(77, 'RSIA Sayang Ibu ', 'Baringin, Lima Kaum, Tanah Datar Regency, West Sumatra 27261, Indonesia', 'Rumah Sakit Ibu dan Anak Swasta Tipe C.', '-0.448591', '100.586749', '969bf3ceebb4058e319e640d839ef6ee.jpeg'),
(78, 'RSUD Prof Dr M. A Hanafiah', 'JL. Bunto Kandung No.1, Baringin, Kec. Lima Kaum, Kabupaten Tanah Datar, Sumatera Barat 27211, Indonesia', 'Rumah Sakit Umum Pemkab Tipe C.', '-0.450730', '100.599939', 'd7dbe3303407e5108d0b7f88de3f8795.jpeg'),
(79, 'RSU Harapan Ibunda', 'Jl. Imam Bonjol Kuburajo No.3B, Limo Kaum, Kec. Lima Kaum, Kabupaten Tanah Datar, Sumatera Barat 27213, Indonesia', 'Rumah Sakit Umum Swasta Tipe D.', '-0.466917', '100.582544', '472073b61fbefea3fd9892f9605e9206.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
