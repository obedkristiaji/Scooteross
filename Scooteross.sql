CREATE TABLE DataPengguna(
    id INT NOT NULL,
    NamaPengguna varchar(50) NOT NULL,
    Alamat varchar(50) NOT NULL,
    Role varchar(50) NOT NULL,
    KTP varchar(16) NOT NULL
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
    NoScooter varchar(16) NOT NULL
);

INSERT INTO DataPenyewa
VALUES 
("3579762987600020","Rani","Jalan Mekar Laksana no 11 Bandung","1"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","2"),
("3542349800002320","Britney","Jalan Anggrek no 7 Bandung","3"),
("3579762987600020","Rani","Jalan Mekar Laksana no 11 Bandung","3"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","3"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","2");

CREATE TABLE Admin(
    noKTP varchar(16) NOT NULL,
    Nama varchar(50) NOT NULL,
    Alamat varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    idKec int NOT NULL
);

INSERT INTO Admin 
VALUES 
("3982178934523000","Denny Setiadi","Jalan Kopo no 98 Bandung","denny@gmail.com","1");

CREATE TABLE Pimpinan(
    noKTP varchar(16) NOT NULL,
    Nama varchar(50) NOT NULL,
    Alamat varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    idKec int NOT NULL
);

INSERT INTO Pimpinan
VALUES 
("3457892345800030","Antony Budiman","Jalan Sukajadi no 112 Bandung","antony97@gmail.com","2");

CREATE TABLE Penyewa(
    NoKTP varchar(16) NOT NULL,
    NamaPenyewa varchar(50) NOT NULL,
    AlamatPenyewa varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    idKec int NOT NULL
);

INSERT INTO Penyewa
VALUES 
("3579762987600020","Rani","Jalan Mekar Laksana no 11 Bandung","Rani@gmail.com","3"),
("3928982789862000","Keane","Jalan Merdeka no 5 Bandung","Keane@gmail.com","4"),
("3542349800002320","Britney","Jalan Anggrek no 7 Bandung","Britney@gmail.com","5");

CREATE TABLE Petugas(
    noKTP varchar(16) NOT NULL,
    Nama varchar(50) NOT NULL,
    Alamat varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    idKec INT NOT NULL
);

INSERT INTO Petugas
VALUES
("3509749254000000","Vivian Cecilia","Jalan Kembar no 9 Bandung","VivianCel@gmail.com","6"),
("3309074509000010","Kimberly Natalia","Jalan Astana Anyar no 12 Bandung","Kimberly@gmail.com","7");

CREATE TABLE Kecamatan(
    idKec INT NOT NULL,
    namaKec varchar(50) NOT NULL
);

INSERT INTO Kecamatan
VALUES 
("1","Bojongloa Kaler"),
("2","Sukajadi"),
("3","Bojongloa Kidul"),
("4","Sumur"),
("5","Bandung Wetan"),
("6","Regol"),
("7","Astana Anyar");

CREATE TABLE Kelurahan(
    idKel INT NOT NULL,
    namaKel varchar(50) NOT NULL,
    idKec INT NOT NULL
);

INSERT INTO Kelurahan
VALUES
("1","Kopo","1"),
("2","Sukagalih","2"),
("3","Mekarwangi","3"),
("4","Babakan Ciamis","4"),
("5","Cihapit","5"),
("6","Cigereleng","6"),
("7","Karanganyar","7");

CREATE TABLE Mengedit(
    noKTP varchar(16) NOT NULL,
    noUnik INT NOT NULL
);

INSERT INTO Mengedit
VALUES
("3982178934523000","1");

CREATE TABLE Scooter(
    NoUnik INT NOT NULL,
    Warna varchar(50) NOT NULL,
    Tarif INT NOT NULL,
    NoTransaksi INT NOT NULL
);

INSERT INTO Scooter
VALUES 
("1","Hijau","20000","1"),
("2","Biru","20000","2"),
("3","Kuning","20000","3"),
("3","Kuning","20000","4"),
("3","Kuning","20000","5"),
("2","Biru","20000","6");

/*CREATE VIEW DataScooter AS 
SELECT DISTINCT(Scooter.NoUnik) , Scooter.Warna , Scooter.Tarif
FROM Scooter */

CREATE TABLE Menyewakan(
    noKTP varchar(16) NOT NULL,
    noUnik INT NOT NULL
);

INSERT INTO Menyewakan
VALUES
("3509749254000000","1"),
("3309074509000010","2"),
("3309074509000010","3"),
("3509749254000000","3"),
("3509749254000000","3"),
("3309074509000010","2");

CREATE TABLE TransaksiPenyewaan(
    noTransaksi INT NOT NULL,
    waktu_mulai datetime NOT NULL, 
    noKTP varchar(16) NOT NULL,
);

INSERT INTO TransaksiPenyewaan
VALUES
("1","2020-03-15 10:00:00","3579762987600020"),
("2","2020-03-17 14:00:00","3928982789862000"),
("3","2020-03-17 15:00:00","3542349800002320"),
("4","2020-03-19 17:00:00","3579762987600020"),
("5","2020-03-20 12:00:00","3928982789862000"),
("6","2020-03-22 11:00:00","3928982789862000");

CREATE TABLE TransaksiPengembalian(
    noTransaksi INT NOT NULL,
    waktu_pengembalian datetime NOT NULL, 
    noKTP varchar(16) NOT NULL,
);

INSERT INTO TransaksiPengembalian
VALUES
("1","2020-03-15 12:00:00","3579762987600020"),
("2","2020-03-17 15:00:00","3928982789862000"),
("3","2020-03-17 17:00:00","3542349800002320"),
("4","2020-03-19 19:00:00","3579762987600020"),
("5","2020-03-20 13:00:00","3928982789862000"),
("6","2020-03-22 12:00:00","3928982789862000");

/*CREATE VIEW DataPenyewa AS 
SELECT Penyewa.NoKTP , Penyewa.NamaPenyewa , Penyewa.AlamatPenyewa , Scooter.noUnik 
FROM Penyewa 
JOIN TransaksiPenyewaan 
ON Penyewa.noKTP = TransaksiPenyewaan.noKTP
JOIN Scooter 
ON TransaksiPenyewaan.noTransaksi = Scooter.noTransaksi */