-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.

-- Afri.

-- Astrid.

-- Yulinda.
CREATE TABLE admin ( 
	id INT(10) NOT NULL AUTO_INCREMENT , 
	username VARCHAR(30) NOT NULL , 
	password VARCHAR(30) NOT NULL , 
	nama VARCHAR(30) NOT NULL , 
	alamat VARCHAR(30) NOT NULL , 
	no_telp VARCHAR(13) NOT NULL , 
	foto VARCHAR(100), 
	level INT(1) NOT NULL , 
	PRIMARY KEY (id)) ;

CREATE TABLE pembayaran ( 
	id INT(10) NOT NULL AUTO_INCREMENT, 
	jumlah INT(7) NOT NULL ,
	tanggal DATETIME NOT NULL , 
	id_laporan INT(10),
	id_pengiriman INT(10)
	PRIMARY KEY(id),
	FOREIGN KEY(id_laporan) REFERENCES laporan_pembayaran(id),
	FOREIGN KEY(id_pengiriman) REFERENCES pengiriman(id) );

INSERT INTO admin 
	(id, username, password, nama, alamat, no_telp, foto, level)
VALUES
 	(NULL, 'ani', '09april', 'ani', 'padang', '0822837804367', 'http://foto.com', '3'),
 	(NULL, 'ayu', '23sepetember', 'ayu', 'medan', '082266789326', 'http://foto.com', '2'),
	(NULL, 'vika', '02november', 'vika', 'pekanbaru', '0822780091122', 'http://foto.com', '1'),
	(NULL, 'iyang', '26desember', 'iyang', 'lampung', '0822837804311', 'http://foto.com', '2'), 
 	(NULL, 'linda', '11oktober', 'linda', 'bandung', '0822780091126', 'http://foto.com', '2');

INSERT INTO pembayaran
	(id, jumlah, tanggal, id_laporan,id_pengiriman)
VALUES 
 	(NULL, '10000', '2019-01-01 00:00:00', 1,1),
  	(NULL, '20000', '2019-01-02 00:20:20', 2,2),
  	(NULL, '30000', '2019-01-02 00:00:50', 3,3),
 	(NULL, '40000', '2019-01-04 00:10:10', 4,4),
 	(NULL, '50000', '2019-01-05 00:05:20', 5,5);;

SELECT * FROM `pembayaran`;

SELECT * FROM `admin`;