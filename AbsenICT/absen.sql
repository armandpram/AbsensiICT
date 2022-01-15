# Host: 127.0.0.1  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2022-01-15 23:18:44
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "asisten"
#

DROP TABLE IF EXISTS `asisten`;
CREATE TABLE `asisten` (
  `nim` varchar(10) NOT NULL DEFAULT '',
  `noKartu` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL DEFAULT '',
  `jabatan` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "asisten"
#

INSERT INTO `asisten` VALUES ('1911501284','138dfa61','Sayangku','Asisten');

#
# Structure for table "tmprfid"
#

DROP TABLE IF EXISTS `tmprfid`;
CREATE TABLE `tmprfid` (
  `nokartu` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`nokartu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tmprfid"
#

