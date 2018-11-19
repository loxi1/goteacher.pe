CREATE TABLE `servicio` (
`id_servicio` int NOT NULL AUTO_INCREMENT,
`nombre` varchar(150) NOT NULL,
`img` varchar(100) NULL,
`orden` int NOT NULL,
`estado` char(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id_servicio`) 
);

CREATE TABLE `curso` (
`id_curso` int NOT NULL AUTO_INCREMENT,
`nombre` varchar(250) NOT NULL,
`sub_nombre` varchar(250) NULL,
`img` varchar(100) NULL,
`codigo` varchar(4) NULL,
`estado` char(1) NULL DEFAULT '1',
PRIMARY KEY (`id_curso`) 
);

CREATE TABLE `serv_curs` (
`id_sevcur` int NOT NULL AUTO_INCREMENT,
`id_servicio` int NOT NULL,
`id_curso` int NOT NULL,
`estado` char(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id_sevcur`) 
);

CREATE TABLE `silabus` (
`id_silabus` int NOT NULL AUTO_INCREMENT,
`id_sevcur` int NOT NULL,
`capitulo` varchar(50) NULL,
`titulo` varchar(250) NULL,
`orden` int NOT NULL,
`estado` char(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id_silabus`) 
);


ALTER TABLE `serv_curs` ADD CONSTRAINT `id_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);
ALTER TABLE `serv_curs` ADD CONSTRAINT `id_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
ALTER TABLE `silabus` ADD CONSTRAINT `id_sevcur` FOREIGN KEY (`id_sevcur`) REFERENCES `serv_curs` (`id_sevcur`);

