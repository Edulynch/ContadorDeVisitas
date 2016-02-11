CREATE TABLE `visitas` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`ip_address` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `direccion_ip` (`ip_address`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;