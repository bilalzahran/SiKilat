-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.
-- Membuat Table
CREATE TABLE pengiriman(
	id INT(10) NOT NULL AUTO_INCREMENT,
	no_resi VARCHAR(12),
	id_pengirim INT(10),
	nama_penerima VARCHAR(30),
	alamat_penerima VARCHAR(100),
	no_telp_penerima VARCHAR(13),
	kecamatan VARCHAR(30),
	kota VARCHAR(30),
	provinsi VARCHAR(30),
	kodepos VARCHAR(6),
	jenis_pengiriman VARCHAR(30),
	tanggal_pengiriman DATETIME,
	status_pengiriman VARCHAR(30),
	id_laporan INT(10),
	PRIMARY KEY(id),
	FOREIGN KEY(id_pengirim) REFERENCES pengirim(id),
	FOREIGN KEY(id_laporan) REFERENCES laporan_pengiriman(id)
);
-- Insert Data
INSERT INTO pengiriman 
(id,no_resi,id_pengirim,nama_penerima,alamat_penerima,no_telp_penerima,kecamatan,kota,provinsi,kodepos,jenis_pengiriman,status,id_laporan)
VALUES
('CGK123412','1','Agung','Jalan pondok lima no.3','082314231234','Bojongsoang','Bandung','Jawa Barat','40287','Reguler','2019-01-07 00:00:00','On Process','1'),
('CGK123413','2','Mamat','Jalan pondok empat no.4','082314231234','Buahbatu','Bandung','Jawa Barat','40223','Reguler','2019-01-07 00:00:00','On Process','2'),
('CGK123414','3','Andri','Jalan pondok tiga no.5','082314231234','Kopo','Bandung','Jawa Barat','40211','Reguler','2019-01-07 00:00:00','On Process','3'),
('CGK123415','4','Yulia','Jalan pondok dua no.6','082314231234','Marga Asih','Bandung','Jawa Barat','40223','Reguler','2019-01-07 00:00:00','On Process','4'),
('CGK123416','5','Siska','Jalan pondok satu no.7','082314231234','Kiaracondong','Bandung','Jawa Barat','40232','Reguler','2019-01-07 00:00:00','On Process','5');
-- Select Data
SELECT * FROM pengiriman;
-- Afri.
-- Membuat tabel
CREATE TABLE barang ( 
 id INT(10) NOT NULL AUTO_INCREMENT ,
 nama_barang VARCHAR(30) NOT NULL ,
 berat FLOAT(3) NOT NULL ,
 deskripsi VARCHAR(100) NOT NULL ,
 id_pengiriman INT(10),
 PRIMARY KEY (id),
 FOREIGN KEY (id_pengiriman) REFERENCES pengiriman(id_pengiriman)
 );
 
 CREATE TABLE laporan_pembayaran ( 
 id_laporan INT(10) NOT NULL AUTO_INCREMENT , 
 tanggal DATE NOT NULL , 
 id_admin INT(10) NOT NULL , 
 PRIMARY KEY (id_laporan),
 FOREIGN KEY (id_admin) REFERENCES admin(id_admin)
 );
 
 --memasukan record/data
 INSERT INTO barang VALUES (NULL, 'kipas', 2, 'kipas elektronik',1);
 INSERT INTO barang VALUES (NULL, 'tas', 1, 'tas ransel',2);
 INSERT INTO barang VALUES (NULL, 'drone', 2, 'drone mini phantom',3);
 INSERT INTO barang VALUES (NULL, 'laptop', 1, 'laptop asus',4);
 INSERT INTO barang VALUES (NULL, 'televisi', 3, 'tv toshiba 21 inc',5);
 
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-01-01', 1);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-02-01',	2);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-03-01', 3);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-04-01', 4);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-05-01', 5);
 
 --view record/data
 SELECT * FROM barang;
 SELECT * FROM laporan_pembayaran;
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
