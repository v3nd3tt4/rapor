-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db_raportsiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_raportsiswa`;

DROP TABLE IF EXISTS `tb_guru`;
CREATE TABLE `tb_guru` (
  `idguru` int(11) NOT NULL AUTO_INCREMENT,
  `kodeguru` varchar(30) DEFAULT NULL,
  `namaguru` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(12) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `statuskepegawaian` varchar(100) DEFAULT NULL,
  `jenisptk` varchar(100) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idguru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_guru` (`idguru`, `kodeguru`, `namaguru`, `alamat`, `telp`, `jk`, `statuskepegawaian`, `jenisptk`, `agama`, `tempatlahir`, `tgllahir`, `username`, `password`) VALUES
(2,	'23456',	'sxdc edit',	'dfg',	'e345',	'Pria',	NULL,	NULL,	'Katolik',	'sdcf',	'2017-10-04',	'dfghre',	'$2y$10$N.ozqIM0SZcTknLwxqKRL.Y8TPIIGSYUyJ7rJEDiQE5fv5vx9Qo5C'),
(3,	'45678',	'hjk',	'hjk',	'5689',	'Pria',	NULL,	NULL,	'Katolik',	'ghj',	'2017-10-07',	'hj',	'$2y$10$AarxPkHxMwtsqzqmx13jX.4Qj88Vz9HT42Vx.HgYjXO3ahUHCJhdm');

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `kodekelas` varchar(30) DEFAULT NULL,
  `namakelas` varchar(20) DEFAULT NULL,
  `bidangstudi` varchar(100) DEFAULT NULL,
  `programstudikeahlian` varchar(100) DEFAULT NULL,
  `kompetensikeahlian` varchar(100) DEFAULT NULL,
  `namawalikelas` varchar(40) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kelas` (`idkelas`, `kodekelas`, `namakelas`, `bidangstudi`, `programstudikeahlian`, `kompetensikeahlian`, `namawalikelas`, `semester`) VALUES
(1,	'ghj',	'jk',	'hj',	'hjk',	'hjk',	'hjk',	'5');

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE `tb_mapel` (
  `idmapel` int(11) NOT NULL AUTO_INCREMENT,
  `kodemapel` varchar(20) DEFAULT NULL,
  `kategorimapel` varchar(30) DEFAULT NULL,
  `namamapel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idmapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE `tb_nilai` (
  `idnilai` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kodemapel` varchar(20) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `ulanganharian` int(11) DEFAULT NULL,
  `tugas` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `ujiansekolah` int(11) DEFAULT NULL,
  `kkm` int(11) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idnilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE `tb_pegawai` (
  `idpegawai` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` varchar(20) DEFAULT NULL,
  `namapegawai` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(12) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` varchar(100) DEFAULT NULL,
  `divisi` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idpegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pegawai` (`idpegawai`, `kodepegawai`, `namapegawai`, `alamat`, `telp`, `jk`, `agama`, `tempatlahir`, `tgllahir`, `divisi`, `username`, `password`) VALUES
(2,	'34567',	'ghjk',	'hjk',	'34567',	'Pria',	'Budha',	'hjk',	'2017-10-12',	'hjk',	'uiob',	'$2y$10$fsiB6wL/8fIT6DQ1y5VUouE'),
(3,	'uid',	'hjk',	'gh',	'098765',	'Pria',	'Katolik',	'jkl',	'2017-10-12',	'bhnjm',	'hg',	'$2y$10$t12VFDizYJVkZ75MtYQWw.P');

DROP TABLE IF EXISTS `tb_predikat`;
CREATE TABLE `tb_predikat` (
  `idpredikat` int(11) NOT NULL AUTO_INCREMENT,
  `angka` int(11) DEFAULT NULL,
  `huruf` varchar(3) DEFAULT NULL,
  `predikat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idpredikat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `idsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `namasiswa` varchar(40) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `namaayah` varchar(40) DEFAULT NULL,
  `namaibu` varchar(40) DEFAULT NULL,
  `namawali` varchar(40) DEFAULT NULL,
  `pekerjaanayah` varchar(100) DEFAULT NULL,
  `pekerjaanibu` varchar(100) DEFAULT NULL,
  `pekerjaanwali` varchar(100) DEFAULT NULL,
  `asalsekolah` varchar(100) DEFAULT NULL,
  `tglmasuksekolah` date DEFAULT NULL,
  `telpayah` varchar(12) DEFAULT NULL,
  `idkelas` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idsiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_siswa` (`idsiswa`, `nis`, `namasiswa`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `alamat`, `namaayah`, `namaibu`, `namawali`, `pekerjaanayah`, `pekerjaanibu`, `pekerjaanwali`, `asalsekolah`, `tglmasuksekolah`, `telpayah`, `idkelas`, `username`, `password`) VALUES
(2,	'iuyhtg',	'hjkk edit',	'dfrtgy',	'2017-10-06',	'Wanita',	'Katolik',	'hjk',	'bnm',	'hjk',	'hjk',	'vbn',	'm',	'hjk',	'hjk',	'2017-10-24',	'y609',	NULL,	'gdsdfg',	'$2y$10$v1UmgLfezYa8c3ShQTOlYOCQHAbpwvhTDYtPoHGzb5wnlusorQT4.');

-- 2017-10-24 15:16:40
