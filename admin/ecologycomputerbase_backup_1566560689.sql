

CREATE TABLE `administrador` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nomadmin` varchar(15) DEFAULT NULL,
  `correoadmin` varchar(20) DEFAULT NULL,
  `contrasenaa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idadmin`),
  UNIQUE KEY `correoadmin` (`correoadmin`),
  UNIQUE KEY `contrasenaa` (`contrasenaa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO administrador VALUES("1","Mirian","m@gmail.com","123456");



CREATE TABLE `computadora` (
  `idcompu` int(11) NOT NULL AUTO_INCREMENT,
  `nombrec` varchar(30) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `preciorenta` int(15) DEFAULT NULL,
  `img` text,
  `estadoc` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idcompu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO computadora VALUES("5","330s","lenovo","gris","9000","1390680_573316246075405_1375655150_n.jpg","Disponible");
INSERT INTO computadora VALUES("6","dv6","hp","vino","1000","678893.jpg","Disponible");



CREATE TABLE `renta` (
  `idrenta` int(11) NOT NULL AUTO_INCREMENT,
  `estador` varchar(20) DEFAULT NULL,
  `fechain` varchar(15) DEFAULT NULL,
  `fechafin` varchar(15) DEFAULT NULL,
  `tiemporenta` varchar(15) DEFAULT NULL,
  `costototal` int(15) DEFAULT NULL,
  `idu` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrenta`),
  KEY `idu` (`idu`),
  CONSTRAINT `renta_ibfk_1` FOREIGN KEY (`idu`) REFERENCES `usuario` (`idu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `usuario` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nombreu` varchar(20) DEFAULT NULL,
  `correou` varchar(30) DEFAULT NULL,
  `contrasenau` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","juan","al@gmail.com","000");

