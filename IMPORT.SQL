-- REIKĖTŲ ŠĮ FAILĄ SUIMPORTUOTI PRISIJUNGUS PRIE MYSQL SERVERIO KAIP ROOT VARTOTOJUI

CREATE USER 'hack'@'%' IDENTIFIED BY PASSWORD PASSWORD('hack');
GRANT SELECT ON hack.* TO 'hack'@'%';

--
-- Table structure for table `users5`
--

CREATE TABLE IF NOT EXISTS `users5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users5`
--

INSERT INTO `users5` (`id`, `username`, `password`) VALUES
(1, 'fifth', 'delfi');
