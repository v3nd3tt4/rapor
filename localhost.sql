-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db_raportsiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_raportsiswa`;

DROP TABLE IF EXISTS `tb_catatan`;
CREATE TABLE `tb_catatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`id`),
  KEY `FK_tb_catatan` (`nis`),
  CONSTRAINT `FK_tb_catatan` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_catatan` (`id`, `nis`, `thnajaran`, `semester`, `catatan`) VALUES
(1,	'SIS001',	'2017/2018',	'1 - ganjil',	'Pengawasan terhadap belajar anak di rumah');

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
  PRIMARY KEY (`idguru`),
  UNIQUE KEY `NewIndex1` (`kodeguru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_guru` (`idguru`, `kodeguru`, `namaguru`, `alamat`, `telp`, `jk`, `statuskepegawaian`, `jenisptk`, `agama`, `tempatlahir`, `tgllahir`, `username`, `password`) VALUES
(1,	'GUR001',	'Rahman Indra',	'jhgfd',	'0987654',	'Pria',	'Aktif',	'PNS',	'Islam',	'PU',	'1991-06-19',	'guru',	'$2y$10$CfSyFMmi8aGq8Bq7g7GyduJw1TBmZciQbrqoCMDKB/ioHTx4Z1lLK');

DROP TABLE IF EXISTS `tb_kegiatan`;
CREATE TABLE `tb_kegiatan` (
  `idkegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `namadu` varchar(40) DEFAULT NULL,
  `alamat` text,
  `lamadanwaktu` varchar(100) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `predikat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idkegiatan`),
  KEY `FK_tb_kegiatan` (`nis`),
  CONSTRAINT `FK_tb_kegiatan` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kegiatan` (`idkegiatan`, `nis`, `thnajaran`, `semester`, `namadu`, `alamat`, `lamadanwaktu`, `nilai`, `predikat`) VALUES
(3,	'SIS001',	'2017/2018',	'1 - ganjil',	'jsjsdj',	'djjdj',	'jdjd',	80,	'dxmxd');

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
(1,	'OT001',	'Otomotif 1',	'Mesin',	'Teknik Mesin',	'Mesin Kendaraan Besar',	'1',	'1');

DROP TABLE IF EXISTS `tb_kepribadian`;
CREATE TABLE `tb_kepribadian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `kelakuan` varchar(20) DEFAULT NULL,
  `kerajinan` varchar(20) DEFAULT NULL,
  `kerapian` varchar(20) DEFAULT NULL,
  `komponen` varchar(255) DEFAULT NULL,
  `predikat` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tb_kepribadian` (`nis`),
  CONSTRAINT `FK_tb_kepribadian` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kepribadian` (`id`, `nis`, `thajaran`, `semester`, `kelakuan`, `kerajinan`, `kerapian`, `komponen`, `predikat`, `kategori`) VALUES
(6,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kelakuan',	'Baik',	'kepribadian'),
(7,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kerajinan',	'Sangat Baik',	'kepribadian'),
(8,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kerapian',	'Baik',	'kepribadian'),
(9,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'osis',	'-',	'pengembangan diri'),
(10,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'sepak bola',	'-',	'pengembangan diri'),
(11,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'rohis',	'-',	'pengembangan diri'),
(12,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'pramuka',	'-',	'pengembangan diri');

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE `tb_mapel` (
  `idmapel` int(11) NOT NULL AUTO_INCREMENT,
  `kodemapel` varchar(20) DEFAULT NULL,
  `kategorimapel` varchar(30) DEFAULT NULL,
  `namamapel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idmapel`),
  UNIQUE KEY `NewIndex1` (`kodemapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_mapel` (`idmapel`, `kodemapel`, `kategorimapel`, `namamapel`) VALUES
(1,	'MTK 001',	'normatif',	'Matematika');

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE `tb_nilai` (
  `idnilai` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kodemapel` varchar(20) DEFAULT NULL,
  `kodeguru` varchar(30) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `sk7` int(11) DEFAULT NULL,
  `sk8` int(11) DEFAULT NULL,
  `sk9` int(11) DEFAULT NULL,
  `sk10` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `us` int(11) DEFAULT NULL,
  `afaktif` int(11) DEFAULT NULL,
  `psycom` int(11) DEFAULT NULL,
  `kkm` int(11) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idnilai`),
  KEY `FK_tb_nilai` (`nis`),
  KEY `FK_tb_nilai1` (`kodemapel`),
  KEY `FK_tb_nilai2` (`kodeguru`),
  CONSTRAINT `FK_tb_nilai` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_nilai1` FOREIGN KEY (`kodemapel`) REFERENCES `tb_mapel` (`kodemapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_nilai2` FOREIGN KEY (`kodeguru`) REFERENCES `tb_guru` (`kodeguru`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_nilai` (`idnilai`, `nis`, `kodemapel`, `kodeguru`, `thnajaran`, `semester`, `sk7`, `sk8`, `sk9`, `sk10`, `uts`, `us`, `afaktif`, `psycom`, `kkm`, `deskripsi`) VALUES
(5,	'SIS001',	'MTK 001',	'GUR001',	'2017/2018',	'1 - ganjil',	91,	91,	91,	91,	91,	91,	91,	91,	91,	'-');

DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE `tb_pegawai` (
  `idpegawai` int(11) NOT NULL AUTO_INCREMENT,
  `kodepegawai` varchar(20) DEFAULT NULL,
  `namapegawai` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(12) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `tempatlahir` varchar(255) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `divisi` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pegawai` (`idpegawai`, `kodepegawai`, `namapegawai`, `alamat`, `telp`, `jk`, `agama`, `tempatlahir`, `tgllahir`, `divisi`, `username`, `password`) VALUES
(1,	'PEG001',	'Ega Budiman',	'Way Halim',	'09876543',	'Pria',	'Islam',	'Way Halim',	'1989-07-05',	'Kurikulum',	'pegawai',	'$2y$10$5.kAbD9OdRyeVTORELD0q.IVPdJJMN96u6n8ND7qAE7vD0zVEg5ky');

DROP TABLE IF EXISTS `tb_predikat`;
CREATE TABLE `tb_predikat` (
  `idpredikat` int(11) NOT NULL AUTO_INCREMENT,
  `angka` int(11) DEFAULT NULL,
  `huruf` varchar(3) DEFAULT NULL,
  `predikat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idpredikat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tb_presensi`;
CREATE TABLE `tb_presensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `izin` varchar(20) DEFAULT NULL,
  `sakit` varchar(20) DEFAULT NULL,
  `tanpaketerangan` varchar(20) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tb_presensi` (`nis`),
  CONSTRAINT `FK_tb_presensi` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_presensi` (`id`, `nis`, `thajaran`, `semester`, `izin`, `sakit`, `tanpaketerangan`, `jenis`, `jumlah`) VALUES
(4,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'sakit',	'0'),
(5,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'izin',	'0'),
(6,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'tanpa keterangan',	'0');

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `idsiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `namasiswa` varchar(40) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `jk` varchar(30) DEFAULT NULL,
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
  PRIMARY KEY (`idsiswa`),
  UNIQUE KEY `NewIndex1` (`nis`),
  KEY `FK_tb_siswa` (`idkelas`),
  CONSTRAINT `FK_tb_siswa` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_siswa` (`idsiswa`, `nis`, `namasiswa`, `tempatlahir`, `tgllahir`, `agama`, `jk`, `alamat`, `namaayah`, `namaibu`, `namawali`, `pekerjaanayah`, `pekerjaanibu`, `pekerjaanwali`, `asalsekolah`, `tglmasuksekolah`, `telpayah`, `idkelas`, `username`, `password`) VALUES
(1,	'SIS001',	'Arief Apriandi',	'Kemiling',	'1989-02-09',	'Islam',	'Pria',	'KEmiling',	'Rajif',	'Restu',	'-',	'Programmer',	'Pengajar',	'-',	'SMA N 1 Palembang',	'2016-02-09',	'0987654321',	1,	'siswa',	'$2y$10$3/p2tnihb4ge07V1O.HUIecfiu0LDaccD0Xuzlng4fvJ0fSRrW4QC');

DROP VIEW IF EXISTS `vw_nilai`;
CREATE TABLE `vw_nilai` (`idnilai` int(11), `nis` varchar(20), `kodemapel` varchar(20), `kodeguru` varchar(30), `thnajaran` varchar(10), `semester` varchar(20), `sk7` int(11), `sk8` int(11), `sk9` int(11), `sk10` int(11), `skrata` decimal(17,4), `uts` int(11), `us` int(11), `rata` decimal(23,8), `afaktif` int(11), `psycom` int(11), `nr` decimal(29,12), `kkm` int(11), `deskripsi` text, `namasiswa` varchar(40), `tempatlahir` varchar(100), `tgllahir` date, `agama` varchar(30), `alamat` text, `namaayah` varchar(40), `namaibu` varchar(40), `namawali` varchar(40), `pekerjaanayah` varchar(100), `pekerjaanibu` varchar(100), `pekerjaanwali` varchar(100), `asalsekolah` varchar(100), `tglmasuksekolah` date, `telpayah` varchar(12), `idkelas` int(11), `username` varchar(100), `password` varchar(100), `namakelas` varchar(20), `bidangstudi` varchar(100), `programstudikeahlian` varchar(100), `kompetensikeahlian` varchar(100), `namawalikelas` varchar(40), `smstr` varchar(30), `namaguru` varchar(30), `telp` varchar(12), `jk` varchar(20), `statuskepegawaian` varchar(100), `jenisptk` varchar(100), `agamaguru` varchar(30), `tempatlahirguru` varchar(100), `tgllahirguru` date, `kategorimapel` varchar(30), `namamapel` varchar(40));


DROP TABLE IF EXISTS `vw_nilai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_nilai` AS select `tb_nilai`.`idnilai` AS `idnilai`,`tb_nilai`.`nis` AS `nis`,`tb_nilai`.`kodemapel` AS `kodemapel`,`tb_nilai`.`kodeguru` AS `kodeguru`,`tb_nilai`.`thnajaran` AS `thnajaran`,`tb_nilai`.`semester` AS `semester`,`tb_nilai`.`sk7` AS `sk7`,`tb_nilai`.`sk8` AS `sk8`,`tb_nilai`.`sk9` AS `sk9`,`tb_nilai`.`sk10` AS `sk10`,((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) AS `skrata`,`tb_nilai`.`uts` AS `uts`,`tb_nilai`.`us` AS `us`,(((((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) + `tb_nilai`.`uts`) + `tb_nilai`.`us`) / 3) AS `rata`,`tb_nilai`.`afaktif` AS `afaktif`,`tb_nilai`.`psycom` AS `psycom`,((((((((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) + `tb_nilai`.`uts`) + `tb_nilai`.`us`) / 3) + `tb_nilai`.`afaktif`) + `tb_nilai`.`psycom`) / 3) AS `nr`,`tb_nilai`.`kkm` AS `kkm`,`tb_nilai`.`deskripsi` AS `deskripsi`,`tb_siswa`.`namasiswa` AS `namasiswa`,`tb_siswa`.`tempatlahir` AS `tempatlahir`,`tb_siswa`.`tgllahir` AS `tgllahir`,`tb_siswa`.`agama` AS `agama`,`tb_siswa`.`alamat` AS `alamat`,`tb_siswa`.`namaayah` AS `namaayah`,`tb_siswa`.`namaibu` AS `namaibu`,`tb_siswa`.`namawali` AS `namawali`,`tb_siswa`.`pekerjaanayah` AS `pekerjaanayah`,`tb_siswa`.`pekerjaanibu` AS `pekerjaanibu`,`tb_siswa`.`pekerjaanwali` AS `pekerjaanwali`,`tb_siswa`.`asalsekolah` AS `asalsekolah`,`tb_siswa`.`tglmasuksekolah` AS `tglmasuksekolah`,`tb_siswa`.`telpayah` AS `telpayah`,`tb_siswa`.`idkelas` AS `idkelas`,`tb_siswa`.`username` AS `username`,`tb_siswa`.`password` AS `password`,`tb_kelas`.`namakelas` AS `namakelas`,`tb_kelas`.`bidangstudi` AS `bidangstudi`,`tb_kelas`.`programstudikeahlian` AS `programstudikeahlian`,`tb_kelas`.`kompetensikeahlian` AS `kompetensikeahlian`,`tb_kelas`.`namawalikelas` AS `namawalikelas`,`tb_kelas`.`semester` AS `smstr`,`tb_guru`.`namaguru` AS `namaguru`,`tb_guru`.`telp` AS `telp`,`tb_guru`.`jk` AS `jk`,`tb_guru`.`statuskepegawaian` AS `statuskepegawaian`,`tb_guru`.`jenisptk` AS `jenisptk`,`tb_guru`.`agama` AS `agamaguru`,`tb_guru`.`tempatlahir` AS `tempatlahirguru`,`tb_guru`.`tgllahir` AS `tgllahirguru`,`tb_mapel`.`kategorimapel` AS `kategorimapel`,`tb_mapel`.`namamapel` AS `namamapel` from ((((`tb_nilai` join `tb_siswa` on((`tb_nilai`.`nis` = `tb_siswa`.`nis`))) join `tb_guru` on((`tb_nilai`.`kodeguru` = `tb_guru`.`kodeguru`))) join `tb_mapel` on((`tb_nilai`.`kodemapel` = `tb_mapel`.`kodemapel`))) join `tb_kelas` on((`tb_siswa`.`idkelas` = `tb_kelas`.`idkelas`)));

-- 2017-10-29 15:33:43
