# ContadorDeVisitas
Contador de Visitas con Base de Datos, una IP una visita.

#### DEMO:
[http://codificando.me/contador_visitas/](http://codificando.me/contador_visitas/)

#### CREAR UNA BASE DE DATOS E IMPORTAR "visitas.sql"
#### OPCIONAL: CONSULTA
```sql
CREATE TABLE `visitas` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`ip_address` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `direccion_ip` (`ip_address`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB;
```

### CAPTURA:
![CONTADOR_DE_VISITAS](http://fotos.subefotos.com/75e2bdf32810a8b2a58139c6b1da9dbfo.png)

