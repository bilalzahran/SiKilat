-- Ini adalah file untuk membuat database MySQL
-- Setiap orang punya kontribusi masing-masin di querynya
-- Dari mulai membuat table dan membuat query SELECT dll


-- Bilal.

-- Afri.

-- Membuat tabel
CREATE TABLE barang ( 
 id INT(10) NOT NULL AUTO_INCREMENT ,
 nama_barang VARCHAR(30) NOT NULL ,
 berat FLOAT(3) NOT NULL ,
 deskripsi VARCHAR(100) NOT NULL ,
 PRIMARY KEY (id)
 );
 
 CREATE TABLE laporan_pembayaran ( 
 id_laporan INT(10) NOT NULL AUTO_INCREMENT , 
 tanggal DATE NOT NULL , 
 id_admin INT(10) NOT NULL , 
 PRIMARY KEY (id_laporan)
 );
 
 --memasukan record/data
 INSERT INTO barang VALUES (NULL, 'kipas', 2, 'kipas elektronik');
 INSERT INTO barang VALUES (NULL, 'tas', 1, 'tas ransel');
 INSERT INTO barang VALUES (NULL, 'drone', 2, 'drone mini phantom');
 INSERT INTO barang VALUES (NULL, 'laptop', 1, 'laptop asus');
 INSERT INTO barang VALUES (NULL, 'televisi', 3, 'tv toshiba 21 inc');
 
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-01-01', 1301160794);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-02-01', 1301160784);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-03-01', 1301160784);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-04-01', 1301160730);
 INSERT INTO laporan_pembayaran VALUES (NULL, '2018-05-01', 1301160779);
 
 --view record/data
 SELECT * FROM barang;
 SELECT * FROM laporan_pembayaran;
 
 
-- Astrid.

-- Yulinda.