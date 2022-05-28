-- Adminer 4.8.1 MySQL 8.0.29 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `db_raportsiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_raportsiswa`;

DROP TABLE IF EXISTS `tb_catatan`;
CREATE TABLE `tb_catatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`id`),
  KEY `FK_tb_catatan` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_catatan` (`id`, `nis`, `thnajaran`, `semester`, `catatan`) VALUES
(1,	'SIS001',	'2017/2018',	'1 - ganjil',	'Pengawasan terhadap belajar anak di rumah'),
(2,	'SIS002',	'2020/2021',	'2 - ganjil',	'Lebih mengawasi lagi pola belajar anak di rumah');

DROP TABLE IF EXISTS `tb_guru`;
CREATE TABLE `tb_guru` (
  `idguru` int NOT NULL AUTO_INCREMENT,
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
  `idkegiatan` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `namadu` varchar(40) DEFAULT NULL,
  `alamat` text,
  `lamadanwaktu` varchar(100) DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `predikat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idkegiatan`),
  KEY `FK_tb_kegiatan` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kegiatan` (`idkegiatan`, `nis`, `thnajaran`, `semester`, `namadu`, `alamat`, `lamadanwaktu`, `nilai`, `predikat`) VALUES
(3,	'SIS001',	'2017/2018',	'1 - ganjil',	'jsjsdj',	'djjdj',	'jdjd',	80,	'dxmxd'),
(4,	'SIS002',	'2020/2021',	'2 - ganjil',	'AAA',	'JL. BRIGJEN H. HASAN BASRY RT.003/RW.002 KEL. BINDERANG KEC.LOKPAIKAT PROV. KALIMANTAN SELATAN',	'60',	80,	'Lumayan');

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas` (
  `idkelas` int NOT NULL AUTO_INCREMENT,
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
  `id` int NOT NULL AUTO_INCREMENT,
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
  KEY `FK_tb_kepribadian` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kepribadian` (`id`, `nis`, `thajaran`, `semester`, `kelakuan`, `kerajinan`, `kerapian`, `komponen`, `predikat`, `kategori`) VALUES
(6,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kelakuan',	'Baik',	'kepribadian'),
(7,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kerajinan',	'Sangat Baik',	'kepribadian'),
(8,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'kerapian',	'Baik',	'kepribadian'),
(9,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'osis',	'-',	'pengembangan diri'),
(10,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'sepak bola',	'-',	'pengembangan diri'),
(11,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'rohis',	'-',	'pengembangan diri'),
(12,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'pramuka',	'-',	'pengembangan diri'),
(13,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'osis',	'Lumayan',	'pengembangan diri'),
(14,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'kelakuan',	'Sangat Baik',	'kepribadian'),
(15,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'sepak bola',	'Sangat Baik',	'pengembangan diri'),
(16,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'rohis',	'Kurang',	'pengembangan diri'),
(17,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'kerajinan',	'Cukup',	'kepribadian'),
(18,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'kerapian',	'Sangat Baik',	'kepribadian');

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE `tb_mapel` (
  `idmapel` int NOT NULL AUTO_INCREMENT,
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
  `idnilai` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kodemapel` varchar(20) DEFAULT NULL,
  `kodeguru` varchar(30) DEFAULT NULL,
  `thnajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `sk7` int DEFAULT NULL,
  `sk8` int DEFAULT NULL,
  `sk9` int DEFAULT NULL,
  `sk10` int DEFAULT NULL,
  `uts` int DEFAULT NULL,
  `us` int DEFAULT NULL,
  `afaktif` int DEFAULT NULL,
  `psycom` int DEFAULT NULL,
  `kkm` int DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idnilai`),
  KEY `FK_tb_nilai` (`nis`),
  KEY `FK_tb_nilai1` (`kodemapel`),
  KEY `FK_tb_nilai2` (`kodeguru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_nilai` (`idnilai`, `nis`, `kodemapel`, `kodeguru`, `thnajaran`, `semester`, `sk7`, `sk8`, `sk9`, `sk10`, `uts`, `us`, `afaktif`, `psycom`, `kkm`, `deskripsi`) VALUES
(5,	'SIS001',	'MTK 001',	'GUR001',	'2017/2018',	'1 - ganjil',	91,	91,	91,	91,	91,	91,	91,	91,	91,	'-'),
(6,	'SIS002',	'MTK 001',	'GUR001',	'2020/2021',	'2 - ganjil',	78,	78,	89,	76,	79,	80,	78,	78,	89,	'Ditingkatkan kembali belajar nya agar lebih baik');

DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE `tb_pegawai` (
  `idpegawai` int NOT NULL AUTO_INCREMENT,
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
  `idpredikat` int NOT NULL AUTO_INCREMENT,
  `angka` int DEFAULT NULL,
  `huruf` varchar(3) DEFAULT NULL,
  `predikat` varchar(30) DEFAULT NULL,
  `idguru` int DEFAULT NULL,
  `nilaiatas` varchar(255) DEFAULT NULL,
  `nilaibawah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpredikat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_predikat` (`idpredikat`, `angka`, `huruf`, `predikat`, `idguru`, `nilaiatas`, `nilaibawah`) VALUES
(1,	NULL,	'E',	'Buruk',	1,	'50',	'0'),
(2,	NULL,	'D',	'Lumayan',	1,	'55',	'51'),
(3,	NULL,	'C',	'Kurang',	1,	'65',	'56'),
(4,	NULL,	'B',	'Cukup',	1,	'75',	'66'),
(5,	NULL,	'A',	'Sangat Baik',	1,	'100',	'76');

DROP TABLE IF EXISTS `tb_presensi`;
CREATE TABLE `tb_presensi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `thajaran` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `izin` varchar(20) DEFAULT NULL,
  `sakit` varchar(20) DEFAULT NULL,
  `tanpaketerangan` varchar(20) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tb_presensi` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_presensi` (`id`, `nis`, `thajaran`, `semester`, `izin`, `sakit`, `tanpaketerangan`, `jenis`, `jumlah`) VALUES
(4,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'sakit',	'0'),
(5,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'izin',	'0'),
(6,	'SIS001',	'2017/2018',	'1 - ganjil',	NULL,	NULL,	NULL,	'tanpa keterangan',	'0'),
(7,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'sakit',	'4'),
(8,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'izin',	'2'),
(9,	'SIS002',	'2020/2021',	'2 - ganjil',	NULL,	NULL,	NULL,	'tanpa keterangan',	'1');

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `idsiswa` int NOT NULL AUTO_INCREMENT,
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
  `idkelas` int DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idsiswa`),
  UNIQUE KEY `NewIndex1` (`nis`),
  KEY `FK_tb_siswa` (`idkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_siswa` (`idsiswa`, `nis`, `namasiswa`, `tempatlahir`, `tgllahir`, `agama`, `jk`, `alamat`, `namaayah`, `namaibu`, `namawali`, `pekerjaanayah`, `pekerjaanibu`, `pekerjaanwali`, `asalsekolah`, `tglmasuksekolah`, `telpayah`, `idkelas`, `username`, `password`) VALUES
(1,	'SIS001',	'Arief Apriandi',	'Kemiling',	'1989-02-09',	'Islam',	'Pria',	'KEmiling',	'Rajif',	'Restu',	'-',	'Programmer',	'Pengajar',	'-',	'SMA N 1 Palembang',	'2016-02-09',	'0987654321',	1,	'siswa',	'$2y$10$OvqIU3wmEpWYtkybxaP18.BStLqJsrDEK8yjrEpkuIbVYKXvbZAeO'),
(2,	'SIS002',	'Ridho Maghribi',	'Natar',	'1993-06-15',	'Islam',	'Pria',	'Natar',	'Ghandi',	'AUlLIA',	'Adam',	'Wiraswasta',	'Ibu Rumah Tangga',	'Pengangguran',	'SMP 5 Waliyuallah',	'2021-05-06',	'09875',	1,	'siswa2',	'$2y$10$DnY.2UvnoslW02QtbczDqOwAhY630kr6C13rQPylA55Lq.fpuas0m');

DROP VIEW IF EXISTS `vw_nilai`;
CREATE TABLE `vw_nilai` (`idnilai` int, `nis` varchar(20), `kodemapel` varchar(20), `kodeguru` varchar(30), `thnajaran` varchar(10), `semester` varchar(20), `sk7` int, `sk8` int, `sk9` int, `sk10` int, `skrata` decimal(17,4), `uts` int, `us` int, `rata` decimal(23,8), `afaktif` int, `psycom` int, `nr` decimal(29,12), `kkm` int, `deskripsi` text, `namasiswa` varchar(40), `tempatlahir` varchar(100), `tgllahir` date, `agama` varchar(30), `alamat` text, `namaayah` varchar(40), `namaibu` varchar(40), `namawali` varchar(40), `pekerjaanayah` varchar(100), `pekerjaanibu` varchar(100), `pekerjaanwali` varchar(100), `asalsekolah` varchar(100), `tglmasuksekolah` date, `telpayah` varchar(12), `idkelas` int, `username` varchar(100), `password` varchar(100), `namakelas` varchar(20), `bidangstudi` varchar(100), `programstudikeahlian` varchar(100), `kompetensikeahlian` varchar(100), `namawalikelas` varchar(40), `smstr` varchar(30), `namaguru` varchar(30), `telp` varchar(12), `jk` varchar(20), `statuskepegawaian` varchar(100), `jenisptk` varchar(100), `agamaguru` varchar(30), `tempatlahirguru` varchar(100), `tgllahirguru` date, `kategorimapel` varchar(30), `namamapel` varchar(40));


DROP TABLE IF EXISTS `vw_nilai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_nilai` AS select `tb_nilai`.`idnilai` AS `idnilai`,`tb_nilai`.`nis` AS `nis`,`tb_nilai`.`kodemapel` AS `kodemapel`,`tb_nilai`.`kodeguru` AS `kodeguru`,`tb_nilai`.`thnajaran` AS `thnajaran`,`tb_nilai`.`semester` AS `semester`,`tb_nilai`.`sk7` AS `sk7`,`tb_nilai`.`sk8` AS `sk8`,`tb_nilai`.`sk9` AS `sk9`,`tb_nilai`.`sk10` AS `sk10`,((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) AS `skrata`,`tb_nilai`.`uts` AS `uts`,`tb_nilai`.`us` AS `us`,(((((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) + `tb_nilai`.`uts`) + `tb_nilai`.`us`) / 3) AS `rata`,`tb_nilai`.`afaktif` AS `afaktif`,`tb_nilai`.`psycom` AS `psycom`,((((((((((`tb_nilai`.`sk7` + `tb_nilai`.`sk8`) + `tb_nilai`.`sk9`) + `tb_nilai`.`sk10`) / 4) + `tb_nilai`.`uts`) + `tb_nilai`.`us`) / 3) + `tb_nilai`.`afaktif`) + `tb_nilai`.`psycom`) / 3) AS `nr`,`tb_nilai`.`kkm` AS `kkm`,`tb_nilai`.`deskripsi` AS `deskripsi`,`tb_siswa`.`namasiswa` AS `namasiswa`,`tb_siswa`.`tempatlahir` AS `tempatlahir`,`tb_siswa`.`tgllahir` AS `tgllahir`,`tb_siswa`.`agama` AS `agama`,`tb_siswa`.`alamat` AS `alamat`,`tb_siswa`.`namaayah` AS `namaayah`,`tb_siswa`.`namaibu` AS `namaibu`,`tb_siswa`.`namawali` AS `namawali`,`tb_siswa`.`pekerjaanayah` AS `pekerjaanayah`,`tb_siswa`.`pekerjaanibu` AS `pekerjaanibu`,`tb_siswa`.`pekerjaanwali` AS `pekerjaanwali`,`tb_siswa`.`asalsekolah` AS `asalsekolah`,`tb_siswa`.`tglmasuksekolah` AS `tglmasuksekolah`,`tb_siswa`.`telpayah` AS `telpayah`,`tb_siswa`.`idkelas` AS `idkelas`,`tb_siswa`.`username` AS `username`,`tb_siswa`.`password` AS `password`,`tb_kelas`.`namakelas` AS `namakelas`,`tb_kelas`.`bidangstudi` AS `bidangstudi`,`tb_kelas`.`programstudikeahlian` AS `programstudikeahlian`,`tb_kelas`.`kompetensikeahlian` AS `kompetensikeahlian`,`tb_kelas`.`namawalikelas` AS `namawalikelas`,`tb_kelas`.`semester` AS `smstr`,`tb_guru`.`namaguru` AS `namaguru`,`tb_guru`.`telp` AS `telp`,`tb_guru`.`jk` AS `jk`,`tb_guru`.`statuskepegawaian` AS `statuskepegawaian`,`tb_guru`.`jenisptk` AS `jenisptk`,`tb_guru`.`agama` AS `agamaguru`,`tb_guru`.`tempatlahir` AS `tempatlahirguru`,`tb_guru`.`tgllahir` AS `tgllahirguru`,`tb_mapel`.`kategorimapel` AS `kategorimapel`,`tb_mapel`.`namamapel` AS `namamapel` from ((((`tb_nilai` join `tb_siswa` on((`tb_nilai`.`nis` = `tb_siswa`.`nis`))) join `tb_guru` on((`tb_nilai`.`kodeguru` = `tb_guru`.`kodeguru`))) join `tb_mapel` on((`tb_nilai`.`kodemapel` = `tb_mapel`.`kodemapel`))) join `tb_kelas` on((`tb_siswa`.`idkelas` = `tb_kelas`.`idkelas`)));

-- 2022-05-28 14:46:54
