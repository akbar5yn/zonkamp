-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 08:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zona-kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(250) NOT NULL,
  `id_content` int(250) NOT NULL,
  `id_user` int(250) NOT NULL,
  `komentar` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_content`, `id_user`, `komentar`, `date`) VALUES
(6, 168, 5, 'p', '0000-00-00'),
(7, 168, 5, 'p', '0000-00-00'),
(8, 166, 1, 'p', '0000-00-00'),
(9, 141, 1, 'p', '0000-00-00'),
(10, 168, 1, 'p', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id_content` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `content_link` varchar(256) NOT NULL,
  `desc_content` varchar(256) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id_content`, `id_user`, `judul`, `content_link`, `desc_content`, `id_kategori`, `create_at`) VALUES
(141, 2, 'Beberapa persiapan sebelum kuliah nih! ', 'http://localhost/project-simul/./uploads/Beberapa_persiapan_sebelum_kuliah_nih!_.mp4', 'Belum ada desc', 1, '2022-12-19 15:25:40'),
(143, 5, 'Buat yang pengen IPK diatas 3.5 dan lulus dibawah 4 tahun silahkan mendaftar', 'http://localhost/project-simul/./uploads/Buat_yang_pengen_IPK_diatas_3_5_dan_lulus_dibawah_4_tahun_silahkan_mendaftar.mp4', '', 1, '2022-12-20 02:21:08'),
(144, 6, 'Calon mahasiswa sini ngumpul dulu! Checklist buat persiapan kuliah check', 'http://localhost/project-simul/./uploads/Calon_mahasiswa_sini_ngumpul_dulu!_Checklist_buat_persiapan_kuliah_check.mp4', '', 1, '2022-12-20 02:22:44'),
(145, 2, 'cara belajar yg efektif & cepet paham', 'http://localhost/project-simul/./uploads/cara_belajar_yg_efektif_cepet_paham1.mp4', '', 1, '2022-12-21 09:31:02'),
(147, 1, 'Rekomendasi Jurusan kuliah untuk SMK ', 'http://localhost/project-simul/./uploads/rekomendasi_Jurusan_kuliah_untuk_SMK_.mp4', 'Berikut adalah rekomendasi buat kalian yang bingung untuk memilih jurusan kuliah yang diminati, simak videonya..', 1, '2022-12-29 10:00:16'),
(148, 5, 'Trik isi formulir calon karyawan format pdf ga pake ribet pas lamar kerja!', 'http://localhost/project-simul/./uploads/Trik_isi_formulir_calon_karyawan_format_pdf_ga_pake_ribet_pas_lamar_kerja!.mp4', 'Tulis deskripsi mu disini', 1, '2022-12-22 13:50:21'),
(149, 6, 'cocok nih buat yg kerjain tugasnya last minute', 'http://localhost/project-simul/./uploads/cocok_nih_buat_yg_kerjain_tugasnya_last_minute.mp4', '', 1, '2022-12-22 14:03:15'),
(151, 1, 'Tips Rekomendasi memilih jurusan saat mau Kuliah byAkbar', 'http://localhost/project-simul/./uploads/Tips_Rekomendasi_Kuliah_1.mp4', 'Gimana sih caranya memilih jurusan yang sesuai ?? berikut simak videonya ...', 2, '2023-01-02 14:09:42'),
(154, 1, 'BIKIN BAB 1 SKRIPSI CUMA 5 DETIK ', 'http://localhost/project-simul/./uploads/BIKIN_BAB_1_SKRIPSI_CUMA_5_DETIK_1.mp4', 'Skripsi ?? Masih bingung di bab 1 ? berikut cara bikin bab 1 skripsi gapake mikir ...', 1, '2022-12-30 14:36:55'),
(166, 1, 'Mapel ap lagi nih', 'http://localhost/project-simul/./uploads/Mapel_ap_lagi_nih1.mp4', 'Kalian masih bingung mau kuliah jurusan apa ?? berikut simak video cara menentukan jurusan berdasarkan mapel favorite teman-teman.', 2, '2023-01-01 06:23:08'),
(167, 1, 'Persiapan ngoding framework javascript - install npm', 'http://localhost/project-simul/./uploads/Persiapan_ngoding_framework_javascript_-_install_npm2.mp4', 'Somthinge else', 2, '2023-01-02 06:31:53'),
(168, 1, 'Coba masukin video', 'http://localhost/project-simul/./uploads/Prototipe_Version_0_3_-_Zona_Kampus91.mp4', '', 1, '2023-01-02 16:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_video`
--

CREATE TABLE `kategori_video` (
  `id` int(5) NOT NULL,
  `kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_video`
--

INSERT INTO `kategori_video` (`id`, `kategori`) VALUES
(1, 'Tips and Trik'),
(2, 'Seputar Tutorial'),
(3, 'Trending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(250) NOT NULL,
  `moto` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `image`, `moto`, `role_id`, `is_active`, `created_at`) VALUES
(1, 'akbar5yn', 'akbar5yn@gmail.com', '$2y$10$Ngg1A2x5lhF1d51YAbXynew7EmN.SwykVhjUE2z/HxsJdRNFVxMpm', 'akbar.svg', 'Selamat datang diprofile ku', 2, 1, '2023-01-02 13:16:08'),
(2, 'Habib Aditiya', 'habib@gmail.com', '$2y$10$ubj6ALbpZBZ0abfq9WcTbOCUBKfy7HMMrvu6dSZOqbJilcb/Gh6QO', 'default24.jpg', 'Selamat datang di profile saya', 2, 1, '2022-12-26 08:45:40'),
(5, 'M Jindan', 'jindan@gmail.com', '$2y$10$2OxQn7AdNMTHR8GuCwYts.9souxa9d02IjHgukKRJt.PHsvapJeNq', 'images1.png', '', 2, 1, '2022-12-22 13:53:14'),
(6, 'Syawal Saputra', 'syawal@gmail.com', '$2y$10$0zVKVLFrBlsEc0T23eStNOJQ0k2ReWU0kFweCCkA9HxmTn9X35mxq', 'default11.jpg', '', 2, 1, '2022-12-22 14:09:14'),
(7, 'Daffa', 'daffa@gmail.com', '$2y$10$ZurNsGOfus00QloGYYdVZu6woPDKZLvL72v.ca1v92TnEvDZeeNRy', 'default.jpg', 'Kamu belum ada deskripsi ni :(', 2, 1, '2022-12-20 05:41:06'),
(8, 'rifiky', 'rifiky@gmail.com', '$2y$10$R2R9nbRwNahcf/pT37nUkO7NTM0bnshdpgMZDaQ3KHiG6uoZY5CTG', 'default.jpg', 'Kamu belum ada deskripsi ni :(', 2, 1, '2022-12-22 13:44:20'),
(9, 'teguh', 'teguh@gmail.com', '$2y$10$zQus5rOhr/3bLs.DBKFdU.yU8k1TpU1xGKj2LoIr/4v0mf6JisS52', 'default.jpg', 'Kamu belum ada deskripsi ni :(', 1, 1, '2022-12-26 08:49:55'),
(10, 'jindan aljubay', 'jindan1@gmail.com', '$2y$10$dv59nWxRmM4c8B0oQaH4Iues.8aYt8HYmf6Mio3yYz8Mu2rN/AH3O', 'images6.png', 'Selamat datang diprofile ku', 2, 1, '2022-12-29 14:44:59'),
(11, 'anonim', 'anonim@gmail.com', '$2y$10$7Ah27Z0HcYYXTFTP9VoLEu3pjp1riMqIhU9f4DMDVy93p2w3Wwype', 'default.jpg', 'Kamu belum ada deskripsi ni :(', 2, 1, '2023-01-02 06:27:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_content` (`id_content`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id_content`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_video`
--
ALTER TABLE `kategori_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id_content` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `kategori_video`
--
ALTER TABLE `kategori_video`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_content`) REFERENCES `contents` (`id_content`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
