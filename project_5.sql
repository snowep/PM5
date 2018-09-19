-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 05:05 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `id_kantor`, `nama_gedung`, `alamat`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(5, 1, 'Gedung Utama', 'Alamat Gedung Utama Kantor A', '', '', '', '', '', '', '', '', '', ''),
(7, 3, 'Gedung A', 'Jl. Jenderal Sudirman No.1, Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15118', '', '', '', '', '', '', '', '', '', ''),
(8, 5, 'Gedung Utama', 'Cempaka putih', '', '', '', '', '', '', '', '', '', ''),
(9, 6, 'Gedung Utama', 'Bandengan', '', '', '', '', '', '', '', '', '', ''),
(10, 7, 'Gedung Utama', 'BUlungan', '', '', '', '', '', '', '', '', '', ''),
(11, 8, 'Gedung Utama', 'Ciputat', '', '', '', '', '', '', '', '', '', ''),
(12, 9, 'Gedung Utama', 'Bintaro', '', '', '', '', '', '', '', '', '', ''),
(13, 9, 'Gedung Utama', 'Bintaro', '', '', '', '', '', '', '', '', '', ''),
(14, 10, 'Gedung Utama', 'Jatinegara', '', '', '', '', '', '', '', '', '', ''),
(15, 11, 'Gedung D', 'Jakarta Pusat', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` int(255) NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `gps_x` varchar(255) DEFAULT NULL,
  `gps_y` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `hp_user` varchar(255) DEFAULT NULL,
  `info_01` varchar(100) DEFAULT NULL,
  `info_02` varchar(100) DEFAULT NULL,
  `info_03` varchar(100) DEFAULT NULL,
  `info_04` varchar(100) DEFAULT NULL,
  `info_05` varchar(100) DEFAULT NULL,
  `info_06` varchar(100) DEFAULT NULL,
  `info_07` varchar(100) DEFAULT NULL,
  `info_08` varchar(100) DEFAULT NULL,
  `info_09` varchar(100) DEFAULT NULL,
  `info_10` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `nama_kantor`, `alamat`, `telepon`, `gps_x`, `gps_y`, `nama_user`, `hp_user`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(1, 'Kantor A', 'Alamat A', 'Telepon A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'PLN Disbanten', 'Jl. Jenderal Sudirman No.1, Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15118', '15118 021- 5526716', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'PLN Area Cempaka Putih', 'Kav.60, Jalan A. Yani, RT.15/RW.3', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'PLN Area Bandengan', 'Jl. Bandengan Utara Raya No.81, RT.5/RW.16, Pejagalan, Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450', '(021) 1238964', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'PLN Bulungan', 'Jalan Sisingamangaraja No.1, RT.2/RW.8, Gunung, Kebayoran Baru, RT.2/RW.8, Gunung, Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120', '(021) 7244754', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'PLN- Area Pelayanan Ciputat', 'Jl. RE. Martadinata KM. 27, Ciputat, Pamulang Tim., Pamulang, Kota Tangerang Selatan, Banten 15417', '(021) 7443805', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'PLN Bintaro', 'Bintaro Sektor VII Blok B7 Kavling A2 No. 17, Jl. Mohammad Husni Thamrin, Pondok Jaya, Pondok Aren, Pondok Jaya, Pd. Jaya, Pd. Aren, Tangerang, Banten 15524', '(021) 74861708', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'PLN Area Jatinegara', 'Jl. Raya Jatinegara Timur No.75, RT.10/RW.2, Bali Mester, Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13310', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'PLN Distribusi Jakarta Raya', 'Jl. M.I. Ridwan Rais No.1, RT.7/RW.1, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110', '(021) 3454000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lantai`
--

CREATE TABLE `lantai` (
  `id_lantai` int(255) NOT NULL,
  `id_gedung` int(255) NOT NULL,
  `nama_lantai` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lantai`
--

INSERT INTO `lantai` (`id_lantai`, `id_gedung`, `nama_lantai`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(1, 5, 'Lantai 1', '', '', '', '', '', '', '', '', '', ''),
(2, 5, 'Lantai 2', '', '', '', '', '', '', '', '', '', ''),
(3, 5, 'Lantai 3', '', '', '', '', '', '', '', '', '', ''),
(4, 5, 'Lantai 4', '', '', '', '', '', '', '', '', '', ''),
(5, 8, 'Lantai 1', '', '', '', '', '', '', '', '', '', ''),
(6, 11, 'Lantai 1', '', '', '', '', '', '', '', '', '', ''),
(7, 15, 'Lantai 2', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id_pc` int(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `id_gedung` int(255) NOT NULL,
  `id_lantai` int(255) NOT NULL,
  `id_ruangan` int(255) NOT NULL,
  `jenis` enum('pc','laptop') NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `mac_address` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `hard_disk` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `sistem_operasi` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id_pc`, `id_kantor`, `id_gedung`, `id_lantai`, `id_ruangan`, `jenis`, `ip_address`, `mac_address`, `serial_number`, `hard_disk`, `ram`, `processor`, `sistem_operasi`, `tahun`, `keterangan`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(1, 1, 5, 1, 3, 'pc', '10.3.36.245', 'F4-4D-30-19-E2-96', 'R301Z1C5', '1000', '4', 'Intel Core i3', 'Windows 10', '16', '', '', '', '', '', '', '', '', '', '', ''),
(4, 8, 11, 6, 10, 'pc', '1992.168.1.1', 'AC-E0-10-14-FA-8D', 'R301Z1C5', '500', '4 GB', 'i3', 'windows 7', '2006', '', '', '', '', '', '', '', '', '', '', ''),
(5, 11, 15, 7, 11, 'laptop', '1992.168.1.1', 'AC-E0-10-14-FA-8D', 'R301Z1C5', '500', '4 GB', 'intel inside', 'LINUX', '2006', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `struktural` enum('0','1') NOT NULL,
  `id_pc` int(255) DEFAULT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `jabatan`, `struktural`, `id_pc`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(1, '123', 'A', 'Supervisor', '0', 1, '', '', '', '', '', '', '', '', '', ''),
(2, '12312312331', 'adasdad', 'asstaf', '1', NULL, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(255) NOT NULL,
  `id_lantai` int(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `id_lantai`, `nama_ruangan`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(1, 2, 'Ruang Rapat', '', '', '', '', '', '', '', '', '', ''),
(2, 3, 'Ruangan Perencanaan', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'Bagian Jaringan', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'Ruang Rapat', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'Ruangan Perencanaan', '', '', '', '', '', '', '', '', '', ''),
(6, 1, 'Ruang A', '', '', '', '', '', '', '', '', '', ''),
(7, 1, 'Ruang B', '', '', '', '', '', '', '', '', '', ''),
(8, 4, 'Ruangan Scada', '', '', '', '', '', '', '', '', '', ''),
(9, 5, 'Ruang Pelayanan', '', '', '', '', '', '', '', '', '', ''),
(10, 6, 'Ruang Pelayanan', '', '', '', '', '', '', '', '', '', ''),
(11, 7, 'Ruangan IT', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id_server` int(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `id_gedung` int(255) NOT NULL,
  `id_lantai` int(255) NOT NULL,
  `id_ruangan` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `mac_address` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `sistem_operasi` varchar(255) NOT NULL,
  `hard_disk` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `cpu_processor` varchar(255) NOT NULL,
  `tipe_server` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `fungsi_server` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `switch`
--

CREATE TABLE `switch` (
  `id_switch` int(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `id_gedung` int(255) NOT NULL,
  `id_lantai` int(255) NOT NULL,
  `id_ruangan` int(255) NOT NULL,
  `nama_switch` varchar(255) NOT NULL,
  `switch_type` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `mac_address` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `jumlah_port` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hak_akses` enum('0','1','2') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `info_01` varchar(255) NOT NULL,
  `info_02` varchar(255) NOT NULL,
  `info_03` varchar(255) NOT NULL,
  `info_04` varchar(255) NOT NULL,
  `info_05` varchar(255) NOT NULL,
  `info_06` varchar(255) NOT NULL,
  `info_07` varchar(255) NOT NULL,
  `info_08` varchar(255) NOT NULL,
  `info_09` varchar(255) NOT NULL,
  `info_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE `wifi` (
  `id_wifi` int(255) NOT NULL,
  `id_kantor` int(255) NOT NULL,
  `id_gedung` int(255) NOT NULL,
  `id_lantai` int(255) NOT NULL,
  `id_ruangan` int(255) NOT NULL,
  `nama_ap` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `mac_address` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `info_01` varchar(100) NOT NULL,
  `info_02` varchar(100) NOT NULL,
  `info_03` varchar(100) NOT NULL,
  `info_04` varchar(100) NOT NULL,
  `info_05` varchar(100) NOT NULL,
  `info_06` varchar(100) NOT NULL,
  `info_07` varchar(100) NOT NULL,
  `info_08` varchar(100) NOT NULL,
  `info_09` varchar(100) NOT NULL,
  `info_10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`),
  ADD KEY `id_kantor` (`id_kantor`);

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`id_lantai`),
  ADD KEY `id_kantor` (`id_gedung`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id_pc`),
  ADD KEY `id_kantor` (`id_kantor`,`id_gedung`,`id_lantai`,`id_ruangan`),
  ADD KEY `pc_ibfk_2` (`id_lantai`),
  ADD KEY `pc_ibfk_3` (`id_ruangan`),
  ADD KEY `pc_ibfk_4` (`id_gedung`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pc` (`id_pc`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `id_kantor` (`id_lantai`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id_server`),
  ADD KEY `id_kantor` (`id_kantor`,`id_gedung`,`id_lantai`,`id_ruangan`),
  ADD KEY `server_ibfk_2` (`id_gedung`),
  ADD KEY `server_ibfk_3` (`id_lantai`),
  ADD KEY `server_ibfk_4` (`id_ruangan`);

--
-- Indexes for table `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`id_switch`),
  ADD KEY `id_kantor` (`id_kantor`,`id_gedung`,`id_lantai`,`id_ruangan`),
  ADD KEY `switch_ibfk_2` (`id_gedung`),
  ADD KEY `switch_ibfk_3` (`id_lantai`),
  ADD KEY `switch_ibfk_4` (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kantor` (`id_kantor`);

--
-- Indexes for table `wifi`
--
ALTER TABLE `wifi`
  ADD PRIMARY KEY (`id_wifi`),
  ADD KEY `id_kantor` (`id_kantor`,`id_gedung`,`id_lantai`,`id_ruangan`),
  ADD KEY `wifi_ibfk_1` (`id_gedung`),
  ADD KEY `wifi_ibfk_3` (`id_lantai`),
  ADD KEY `wifi_ibfk_4` (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `id_lantai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id_pc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id_server` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `switch`
--
ALTER TABLE `switch`
  MODIFY `id_switch` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wifi`
--
ALTER TABLE `wifi`
  MODIFY `id_wifi` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gedung`
--
ALTER TABLE `gedung`
  ADD CONSTRAINT `gedung_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lantai`
--
ALTER TABLE `lantai`
  ADD CONSTRAINT `lantai_ibfk_1` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_ibfk_2` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_ibfk_3` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_ibfk_4` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_pc`) REFERENCES `pc` (`id_pc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_ibfk_1` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `server`
--
ALTER TABLE `server`
  ADD CONSTRAINT `server_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `server_ibfk_2` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `server_ibfk_3` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `server_ibfk_4` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `switch`
--
ALTER TABLE `switch`
  ADD CONSTRAINT `switch_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switch_ibfk_2` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switch_ibfk_3` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switch_ibfk_4` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wifi`
--
ALTER TABLE `wifi`
  ADD CONSTRAINT `wifi_ibfk_1` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wifi_ibfk_2` FOREIGN KEY (`id_kantor`) REFERENCES `kantor` (`id_kantor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wifi_ibfk_3` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wifi_ibfk_4` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
