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

-- Yulinda.