# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             podcast
# Server version:       5.0.45-community-nt
# Server OS:            Win32
# Target-Compatibility: MySQL 5.1
# max_allowed_packet:   1047552
# HeidiSQL version:     3.2 Revision: 1129
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1*/;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0*/;


#
# Table structure for table 'podcast'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `podcast` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  `nome_servidor` varchar(255) default NULL,
  `nome_original` varchar(50) default NULL,
  `ext` varchar(6) default NULL,
  `area` tinyint(3) unsigned default NULL,
  `data` timestamp NULL default NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'podcast'
#

LOCK TABLES `podcast` WRITE;
/*!40000 ALTER TABLE `podcast` DISABLE KEYS*/;
REPLACE INTO `podcast` (`id`, `descricao`, `nome_servidor`, `nome_original`, `ext`, `area`, `data`) VALUES
	(30,'teste','0114c0229c.mp3','redacao0802_01.mp3','mp3',1,'2008-02-20 16:47:52'),
	(31,'meu pod','54e6bbd8d6.mp3','redacao0802_01.mp3','mp3',2,'2008-02-20 16:48:47'),
	(32,'meu pod2','06d573c4de.mp3','redacao0802_01.mp3','mp3',2,'2008-02-20 16:49:15'),
	(33,'CACA','8a90e71fc2.mp3','redacao0802_01.mp3','mp3',2,'2008-02-20 16:50:07'),
	(34,'TETET','9fe5220a89.mp3','2008_0702_jornal1800.mp3','mp3',2,'2008-02-20 16:51:24'),
	(35,'OCO','51d4265ac6.mp3','2008_0702_jornal1800.mp3','mp3',1,'2008-02-20 16:54:08'),
	(36,'dede','a241242de6.mp3','2008_0702_jornal1800.mp3','mp3',2,'2008-02-20 16:54:43'),
	(37,'fefefe','d67e0360ae.mp3','2008_0702_jornal1800.mp3','mp3',3,'2008-02-20 17:45:26'),
	(38,'rere','fa261de336.mp3','redacao0802_01.mp3','mp3',2,'2008-02-20 18:00:42');
/*!40000 ALTER TABLE `podcast` ENABLE KEYS*/;
UNLOCK TABLES;


#
# Table structure for table 'podcast_temp'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `podcast_temp` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `descricao` varchar(255) default NULL,
  `nome_servidor` varchar(255) default NULL,
  `nome_original` varchar(50) default NULL,
  `ext` varchar(6) default NULL,
  `area` tinyint(3) unsigned default NULL,
  `data` timestamp NULL default NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'podcast_temp'
#

LOCK TABLES `podcast_temp` WRITE;
/*!40000 ALTER TABLE `podcast_temp` DISABLE KEYS*/;
REPLACE INTO `podcast_temp` (`id`, `descricao`, `nome_servidor`, `nome_original`, `ext`, `area`, `data`) VALUES
	(35,'OCO','51d4265ac6.mp3',NULL,NULL,1,'2008-02-20 16:54:08'),
	(30,'teste','0114c0229c.mp3',NULL,NULL,1,'2008-02-20 16:47:52'),
	(38,'rere','fa261de336.mp3',NULL,NULL,2,'2008-02-20 18:00:42'),
	(36,'dede','a241242de6.mp3',NULL,NULL,2,'2008-02-20 16:54:43'),
	(34,'TETET','9fe5220a89.mp3',NULL,NULL,2,'2008-02-20 16:51:24'),
	(33,'CACA','8a90e71fc2.mp3',NULL,NULL,2,'2008-02-20 16:50:07'),
	(32,'meu pod2','06d573c4de.mp3',NULL,NULL,2,'2008-02-20 16:49:15'),
	(37,'fefefe','d67e0360ae.mp3',NULL,NULL,3,'2008-02-20 17:45:26');
/*!40000 ALTER TABLE `podcast_temp` ENABLE KEYS*/;
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS*/;
