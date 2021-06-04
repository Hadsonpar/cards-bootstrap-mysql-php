/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.4.18-MariaDB : Database - demos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`demos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `demos`;

/*Table structure for table `cards` */

DROP TABLE IF EXISTS `cards`;

CREATE TABLE `usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `profile` TEXT NOT NULL,
  `skills` TEXT NOT NULL,
  `website` VARCHAR(255) NOT NULL,
  `photo` VARCHAR(255) NOT NULL,
  `facebook` VARCHAR(255) NOT NULL,
  `gplus` VARCHAR(255) NOT NULL,
  `twitter` VARCHAR(255) NOT NULL,
  `flag` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cards` */

INSERT  INTO `cards`(`id`,`name`,`address`,`profile`,`skills`,`website`,`photo`,`facebook`,`gplus`,`twitter`,`flag`) VALUES (1,'Hadson Paredes Cordova','Av. Las Azucenas, El Agustino - Lima Perú','Autodidacta y apasionado por las nuevas tecnologías, la investigación, los patrones de diseño y las buenas prácticas; Arquitecto de TI con experiencia y participación en diversos proyectos de banca, seguros y AFP.','Software Architect, Web Developer, Mobile Developer','http://hadsonpar.com','img/hadson.png','https://www.facebook.com/hadsonpar','https://www.google.com/hadsonpar','https://www.titter.com/hadsonpar',1),(2,'Cesar Paredes Cordova','Av. Las Azucenas, El Agustino - Lima Perú','Scrum Master, bachiller en Economía con conocimientos en gestión de proyectos Agiles y bajo el enfoque del PMI.','Web Developer, Mobile Developer, Full-Stack Developer','http://hadsonpar.com','img/cesar.png','https://www.facebook.com/hadsonpar','https://www.google.com/hadsonpar','https://www.titter.com/hadsonpar',2),(3,'Gian Marco Elera Garay','Av. Los Caminos, Los Olivos - Lima Perú','Salesforce technical architect passionate about new trends in technology and business, devops discipline, design patterns and software architecture.','Mobile Developer, Full-Stack Developer, Scrum Master, UI/UX','http://hadsonpar.com','img/gian.png','https://www.facebook.com/hadsonpar','https://www.google.com/hadsonpar','https://www.titter.com/hadsonpar',1);
