-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata` (
  `userid` int(10) unsigned zerofill NOT NULL,
  `email` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `posisi` char(40) NOT NULL,
  `ktp` int(16) NOT NULL,
  `tempatlahir` char(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` char(20) NOT NULL,
  `goldarah` char(5) NOT NULL,
  `status` char(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `domisili` varchar(200) NOT NULL,
  `notelp` int(20) NOT NULL,
  `orgterdekat` char(50) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `lokasitugas` varchar(200) NOT NULL,
  `penghasilan` int(30) NOT NULL,
  `createdtime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `biodata` (`userid`, `email`, `nama`, `posisi`, `ktp`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `goldarah`, `status`, `alamat`, `domisili`, `notelp`, `orgterdekat`, `skill`, `lokasitugas`, `penghasilan`, `createdtime`) VALUES
(0000000003,	'admin2@admin.com',	'Galih',	'PHP Developer',	234242,	'Bekasi',	'1998-12-12',	'LAKI-LAKI',	'Islam',	'O',	'Belum Menikah',	'Bekasi',	'Bekasi',	2222,	'-',	'PHP,Phyton,JavaScaript',	'YA',	7000000,	'2022-08-24 04:55:10');

DROP TABLE IF EXISTS `pendidikan_terakhir`;
CREATE TABLE `pendidikan_terakhir` (
  `userid` int(10) unsigned zerofill NOT NULL,
  `jenjang` varchar(40) NOT NULL,
  `institusi` varchar(40) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `tahunlulus` year(4) NOT NULL,
  `ipk` double NOT NULL,
  `createdtime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `jenjang` (`jenjang`),
  KEY `userid` (`userid`),
  CONSTRAINT `pendidikan_terakhir_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `biodata` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pendidikan_terakhir` (`userid`, `jenjang`, `institusi`, `jurusan`, `tahunlulus`, `ipk`, `createdtime`) VALUES
(0000000003,	'S1',	'UIN',	'TI',	'2020',	3.25,	'0000-00-00 00:00:00'),
(0000000003,	'SMA',	'SMA',	'IPA',	'2016',	14.25,	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `riwayat_pekerjaan`;
CREATE TABLE `riwayat_pekerjaan` (
  `userid` int(10) unsigned zerofill NOT NULL,
  `namaperusahaan` varchar(60) NOT NULL,
  `posisi_perusahaan` varchar(60) NOT NULL,
  `pendapatan` double NOT NULL,
  `tahun_perusahaan` year(4) NOT NULL,
  `createdtime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `userid` (`userid`),
  CONSTRAINT `riwayat_pekerjaan_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `biodata` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `riwayat_pelatihan`;
CREATE TABLE `riwayat_pelatihan` (
  `userid` int(10) unsigned zerofill NOT NULL,
  `kursus` varchar(40) NOT NULL,
  `sertifikat` char(40) NOT NULL,
  `tahun_sertifikat` year(4) NOT NULL,
  `createdtime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  KEY `userid` (`userid`),
  CONSTRAINT `riwayat_pelatihan_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `biodata` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` char(20) NOT NULL DEFAULT 'user',
  `createdtime` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`userid`, `email`, `password`, `role`, `createdtime`) VALUES
(0000000001,	'admin@admin.com',	'$2y$10$gxhNvrUKafcwbXw4DcN9EO3xYoAJMu7fMJbFykVVfI2jHd4mhllYK',	'admin',	'2022-08-24 02:55:37'),
(0000000003,	'admin2@admin.com',	'$2y$10$v6sBDmTahrSKtrZhoucaV.8uu3cDWpsPHzdCNTJ01JEbiqD8TBDMi',	'user',	'2022-08-23 16:48:21');

-- 2022-08-24 05:02:07
