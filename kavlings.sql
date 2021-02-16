/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.17-MariaDB : Database - kavlings
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kavlings` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `dt_angsuran` */

DROP TABLE IF EXISTS `dt_angsuran`;

CREATE TABLE `dt_angsuran` (
  `id_dt_angsuran` int(11) NOT NULL AUTO_INCREMENT,
  `id_angsuran` int(11) DEFAULT NULL,
  `dt_tanggal` date DEFAULT NULL,
  `dt_angsuran` int(11) DEFAULT NULL COMMENT 'nomor angsuran',
  `dt_nominal` float(11,2) DEFAULT NULL,
  `dt_keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_dt_angsuran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `dt_angsuran` */

/*Table structure for table `tb_angsuran` */

DROP TABLE IF EXISTS `tb_angsuran`;

CREATE TABLE `tb_angsuran` (
  `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,
  `id_kavling` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `harga` float(11,2) DEFAULT NULL,
  `uang_muka` float(11,2) DEFAULT NULL,
  `angsuran` float(11,2) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_angsuran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_angsuran` */

/*Table structure for table `tb_kavling` */

DROP TABLE IF EXISTS `tb_kavling`;

CREATE TABLE `tb_kavling` (
  `id_kavling` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahap` int(11) DEFAULT NULL,
  `blok_kavling` char(1) DEFAULT NULL,
  `nomor_kavling` int(11) DEFAULT NULL COMMENT 'kalau ada pecahan kavling kasih nomor sub',
  `harga_kavling` float(11,2) DEFAULT NULL,
  `ukuran_kavling` varchar(20) DEFAULT NULL,
  `keterangan_kavling` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kavling`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kavling` */

/*Table structure for table `tb_login` */

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `role` char(1) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_login` */

/*Table structure for table `tb_pelanggan` */

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nik_pelanggan` char(16) DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `alamat_pelanggan` varchar(100) DEFAULT NULL,
  `telp_pelanggan` varchar(15) DEFAULT NULL,
  `foto_pelanggan` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pelanggan` */

/*Table structure for table `tb_tahap` */

DROP TABLE IF EXISTS `tb_tahap`;

CREATE TABLE `tb_tahap` (
  `id_tahap` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_tahap` int(11) DEFAULT NULL,
  `nama_tahap` varchar(50) DEFAULT NULL,
  `alamat_tahap` varchar(100) DEFAULT NULL,
  `keterangan_tahap` text DEFAULT NULL,
  `denah_tahap` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_tahap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_tahap` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
