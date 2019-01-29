-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.

-- Afri.

-- Astrid.
CREATE TABLE pengirim ( 
	id INT(10) NOT NULL AUTO_INCREMENT , 
	nama_pengirim VARCHAR(30) NOT NULL , 
	alamat VARCHAR(50) NOT NULL , 
	no_telp VARCHAR(13) NOT NULL , 
	username VARCHAR(30) NOT NULL , 
	password VARCHAR(30) NOT NULL , 
	foto VARCHAR(100) NOT NULL , 
	PRIMARY KEY (id));

 CREATE TABLE laporan_pengiriman ( 
 	id INT(10) NOT NULL AUTO_INCREMENT ,
 	tanggal DATETIME NOT NULL , 
 	id_admin INT(10) NOT NULL , 
 	PRIMARY KEY (id),
 	FOREIGN KEY (id_admin) REFERENCES admin(id)); 

 INSERT INTO `pengirim` (`id`, `nama_pengirim`, `alamat`, `no_telp`, `username`, `password`, `foto`) VALUES 
 (NULL, 'Bilal', 'GBA 2', '085956243648', 'bilal', 'bial', 'linkfoto'),
 (NULL, 'Astrid', 'UjungBerung', '085242078055', 'astridvt', '123456', 'linkfoto1'),
 (NULL, 'Yulinda', 'Sukabirus', '081321353333', 'Yulinda', 'yeyeye', 'linkfoto2'),
 (NULL, 'Afri', 'PGA', '0815366654050', 'AFRIMAI', '098765', 'linkfoto3'),
 (NULL, 'vena', 'BuahBatu', '082145757577', 'venavt', 'veveelia', 'linkfoto4'),

 ;

INSERT INTO `laporan_pengiriman` (`id`, `tanggal`, `id_admin`) VALUES ('123456', '2019-01-07 00:00:00', '0');

SELECT * FROM pengirim;
SELECT * FROM laporan_pengiriman;
-- Yulinda.