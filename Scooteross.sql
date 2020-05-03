CREATE TABLE DataPengguna(
    id INT NOT NULL,
    NamaPengguna varchar(50) NOT NULL,
    Alamat varchar(50) NOT NULL,
    Role varchar(50) NOT NULL,
    KTP INT NOT NULL
);

INSERT INTO DataPengguna
VALUES 
("1","Vivian Cecilia","Jalan Kembar no 9 Bandung","Operator","3509749254000000"),
("2","Kimberly Natalia","Jalan Astana Anyar no 12 Bandung","Operator","3309074509000010"),
("3","Antony Budiman","Jalan Sukajadi no 112 Bandung","Pimpinan Taman","3457892345800030"),
("4","Denny Setiadi","Jalan Kopo no 98 Bandung","Admin","3982178934523000");

CREATE TABLE DataScooter(
    NoUnik INT NOT NULL,
    Warna varchar(10) NOT NULL,
    Tarif INT NOT NULL
);

INSERT INTO DataScooter
VALUES 
("1","Hijau","20000"),
("2","Biru","20000"),
("3","Kuning","20000");

CREATE TABLE DataPenyewa(
    NoKTP INT NOT NULL,
    NamaPenyewa varchar(50) NOT NULL,
    AlamatPenyewa varchar(50) NOT NULL,
    NoScooter INT NOT NULL
);

INSERT INTO DataPenyewa
VALUES 
("3579762987600020","Rani","Jalan Mekar Laksana no 11 Bandung","1"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","2"),
("3542349800002320","Britney","Jalan Anggrek no 7 Bandung","3"),
("3579762987600020","Rani","Jalan Mekar Laksana no 11 Bandung","3"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","3"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","2");

/*CREATE TABLE LaporanTransaksi(
    NoUnik INT NOT NULL,
    NoKTP INT NOT NULL,
    Warna varchar(10) NOT NULL,
    BiayaSewa INT NOT NULL,
    Tanggal Date NOT NULL
);

INSERT INTO LaporanTransaksi
VALUES 
("1","","Hijau","40000","20200315"),
("2","","Biru","20000","20200317"),
("3","","Kuning","40000","20200317"),
("3","","Kuning","40000","20200319"),
("3","","Kuning","20000","20200320"),
("2","","Biru","20000","20200322");

CREATE TABLE StatistikPenyewaanScooter(
    Rank INT NOT NULL,
    NoUnik INT NOT NULL,
    JumlahPenyewa INT NOT NULL
);

INSERT INTO StatistikPenyewaanScooter
VALUES 
("1","3","3"),
("2","2","2"),
("3","1","1");

CREATE TABLE StatistikPenyewaanKonsumen(
    Rank INT NOT NULL,
    NamaPenyewa varchar(50) NOT NULL,
    JumlahScooterSewaan INT NOT NULL
);

INSERT INTO StatistikPenyewaanKonsumen
VALUES 
("1","Keane","3"),
("2","Rani","2"),
("3","Britney","1");*/


