CREATE DATABASE IF NOT EXISTS `QuanLyThuVien` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `QuanLyThuVien`;

CREATE TABLE IF NOT EXISTS `TacGia` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tenTacGia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `Sach` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tenSach` varchar(200) NOT NULL,
  `namXuatBan` int(4) NOT NULL,
  `idTacGia` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idTacGia`) REFERENCES `TacGia`(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `TacGia` (`id`, `tenTacGia`) VALUES
	(1,'ten1'),
    (2,'ten2'),
    (3,'ten3'),
    (4,'ten4'),
    (5,'ten5');
    
INSERT INTO `Sach` (`id`,`tenSach`,`namXuatBan`,`idTacGia`) VALUES
	(1,'Sach1',2011,1),
    (2,'Sach2',2012,2),
    (3,'Sach3',2013,3),
    (4,'Sach4',2014,3),
    (5,'Sach5',2015,4),
    (6,'Sach6',2016,2),
    (7,'Sach7',2017,1),
    (8,'Sach8',2018,3),
    (9,'Sach9',2019,5),
    (10,'Sach10',2020,2),
    (11,'Sach1',2013,1),
    (12,'Sach1',2011,4);
