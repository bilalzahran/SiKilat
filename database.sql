-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.

-- Afri.

-- Astrid.
CREATE TABLE `sikilat_db`.`pengirim` ( 
	`id` INT(10) NOT NULL AUTO_INCREMENT , 
	`nama_pengirim` VARCHAR(30) NOT NULL , 
	`alamat` VARCHAR(50) NOT NULL , 
	`no_telp` VARCHAR(13) NOT NULL , 
	`username` VARCHAR(30) NOT NULL , 
	`password` VARCHAR(30) NOT NULL , 
	`foto` VARCHAR(100) NOT NULL , 
	PRIMARY KEY (`id`(10)));

 CREATE TABLE `sikilat_db`.`laporan_pengiriman` ( 
 	`id` INT(10) NOT NULL AUTO_INCREMENT ,
 	`tanggal` DATETIME NOT NULL , 
 	`id_admin` INT(10) NOT NULL , 
 	PRIMARY KEY (`id`)); 

-- Yulinda.