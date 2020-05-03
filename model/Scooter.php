<?php
    class Scooter{
        public $NoUnik;
        public $Warna;
        public $TarifScooter;

        public function __construct($NoUnik,$Warna,$TarifScooter){
            $this->NoUnik = $NoUnik;
            $this->Warna = $Warna;
            $this->TarifScooter = $TarifScooter;
        }

        public function getNoUnik(){
            return $this->NoUnik;
        }

        public function getWarna(){
            return $this->Warna;
        }

        public function getTarifScooter(){
            return $this->TarifScooter;
        }
    }
?>