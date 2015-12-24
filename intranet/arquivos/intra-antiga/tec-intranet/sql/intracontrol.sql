# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 192.168.0.9
# Database:             intracontrol
# Server version:       5.0.32-Debian_7etch1-log
# Server OS:            pc-linux-gnu
# Target-Compatibility: MySQL 5.1
# max_allowed_packet:   16776192
# HeidiSQL version:     3.2 Revision: 1129
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1*/;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0*/;


#
# Database structure for database 'intracontrol'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `intracontrol` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `intracontrol`;


#
# Table structure for table 'tec_users'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `tec_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `login` varchar(50) default NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB /*!40100 DEFAULT CHARSET=latin1 COMMENT='Usuarios da Tecnodata'*/;



#
# Dumping data for table 'tec_users'
#

LOCK TABLES `tec_users` WRITE;
/*!40000 ALTER TABLE `tec_users` DISABLE KEYS*/;
REPLACE INTO `tec_users` (`id`, `nome`, `login`) VALUES
	('1','Waldir Borba Junior','w.borba'),
	('2','Aurélio Forbellone','a.forbellone'),
	('3','Ronaldo Ribeiro','r.ribeiro'),
	('4','Marco Aurélio','m.aurelio');
/*!40000 ALTER TABLE `tec_users` ENABLE KEYS*/;
UNLOCK TABLES;


#
# Table structure for table 'user_control'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `user_control` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'user_control'
#

LOCK TABLES `user_control` WRITE;
/*!40000 ALTER TABLE `user_control` DISABLE KEYS*/;
REPLACE INTO `user_control` (`id`, `username`, `address`) VALUES
	(32,'p.abrahao','192.168.0.158'),
	(33,'w.borba','192.168.0.202');
/*!40000 ALTER TABLE `user_control` ENABLE KEYS*/;
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS*/;
