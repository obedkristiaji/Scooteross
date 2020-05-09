<?php
    class Transaksi{
        public $NoTransaksi;
        public $KTP;
        public $Nama;
        public $IdScooter;
        public $Warna;
        public $Biaya;
        public $Mulai;
        public $Selesai;

        public function __construct($NoTransaksi,$KTP,$Nama,$IdScooter, $Warna, $Biaya, $Mulai, $Selesai){
            $this->NoTransaksi = $NoTransaksi;
            $this->KTP = $KTP;
            $this->Nama = $Nama;
            $this->IdScooter = $IdScooter;
            $this->Warna = $Warna;
            $this->Biaya = $Biaya;
            $this->Mulai = $Mulai;
            $this->Selesai = $Selesai;
        }

        public function getNoTransaksi(){
            return $this->NoTransaksi;
        }

        public function getKTP(){
            return $this->KTP;
        }

        public function getNama(){
            return $this->Nama;
        }

        public function getIdScooter(){
            return $this->IdScooter;
        }

        public function getWarna(){
            return $this->Warna;
        }

        public function getBiaya(){
            return $this->Biaya;
        }

        public function getMulai(){
            return $this->Mulai;
        }

        public function getSelesai(){
            return $this->Selesai;
        }
    }
