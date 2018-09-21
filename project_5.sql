-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 06:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

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
(6, 1, 'Gedung Kreo', 'Alamat Gedung Kreo Kantor A', '', '', '', '', '', '', '', '', '', ''),
(7, 2, 'Gedung Utama', 'Alamat Gedung Utama Kantor B', '', '', '', '', '', '', '', '', '', '');

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
(2, 'Kantor B', 'Alamat Kantor B', 'Telepon B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(3, 5, 'Lantai 3', '', '', '', '', '', '', '', '', '', '');

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
  `id_pc` int(255) NOT NULL,
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
(2, 3, 'Ruangan Perencanaan', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `id_gedung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `id_lantai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id_pc` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
