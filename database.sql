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

-- Astrid.

-- Yulinda.