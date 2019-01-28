-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.

-- Afri.

-- Astrid.

-- Yulinda.
CREATE TABLE `sikilat_db`.`admin` ( 
	`id` INT(10) NOT NULL AUTO_INCREMENT , 
	`username` VARCHAR(30) NOT NULL , 
	`password` VARCHAR(30) NOT NULL , 
	`nama` VARCHAR(30) NOT NULL , 
	`alamat` VARCHAR(30) NOT NULL , 
	`no_telp` VARCHAR(13) NOT NULL , 
	`foto` VARCHAR(100) NOT NULL , 
	`level` INT(1) NOT NULL , 
	PRIMARY KEY (`id`)) ;
