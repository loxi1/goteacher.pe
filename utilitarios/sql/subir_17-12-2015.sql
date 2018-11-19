CREATE TABLE `universidad` (
`id_universidad` int NULL AUTO_INCREMENT,
`nombre` varchar(200) NULL,
`codigo` varchar(20) NULL,
`estado` char NULL,
PRIMARY KEY (`id_universidad`) 
);

CREATE TABLE `persona` (
`id_persona` int NULL AUTO_INCREMENT,
`nombres` varchar(250) NULL,
`apellidos` varchar(250) NULL,
`celular` varchar(10) NULL,
`correo` varchar(100) NULL,
`fecha_ingreso` datetime NULL,
PRIMARY KEY (`id_persona`) 
);

CREATE TABLE `informes` (
`id_informe` int NULL,
`id_persona` int NULL,
`id_servicio` varchar(255) NULL,
`det_serv` varchar(30) NULL DEFAULT NULL,
`mensaje` text NULL,
PRIMARY KEY (`id_informe`) 
);

CREATE TABLE `trabaja` (
`id_trabaja` int NOT NULL AUTO_INCREMENT,
`id_persona` int NULL,
`cv` varchar(100) NOT NULL,
`comentario` text NOT NULL,
PRIMARY KEY (`id_trabaja`) 
);

CREATE TABLE `det_trabaja` (
`id_det_trab` int NOT NULL,
`id_trabaja` int NULL,
`id_curso` int NULL,
`estado` char(1) NULL DEFAULT '1',
PRIMARY KEY (`id_det_trab`) 
);

CREATE TABLE `det_informes` (
`id_det_info` int NOT NULL,
`id_informe` int NULL,
`id_universidad` int NULL,
`estado` char(1) NULL DEFAULT '1',
PRIMARY KEY (`id_det_info`) 
);
ALTER TABLE `informes` ADD CONSTRAINT `id_sev_info` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);
ALTER TABLE `informes` ADD CONSTRAINT `id_pers_info` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);
ALTER TABLE `trabaja` ADD CONSTRAINT `id_pers_trab` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);
ALTER TABLE `det_trabaja` ADD CONSTRAINT `id_trabaja` FOREIGN KEY (`id_trabaja`) REFERENCES `trabaja` (`id_trabaja`);
ALTER TABLE `det_trabaja` ADD CONSTRAINT `id_det_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
ALTER TABLE `det_informes` ADD CONSTRAINT `id_informe` FOREIGN KEY (`id_informe`) REFERENCES `informes` (`id_informe`);
ALTER TABLE `det_informes` ADD CONSTRAINT `id_universidad` FOREIGN KEY (`id_universidad`) REFERENCES `universidad` (`id_universidad`);

