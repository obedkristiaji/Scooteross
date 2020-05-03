<?php
    class Penyewa{
        public $NoKTPPenyewa;
        public $NamaPenyewa;
        public $AlamatPenyewa;
        public $NoScooter;

        public function __construct($NoKTPPenyewa,$NamaPenyewa,$AlamatPenyewa,$NoScooter){
            $this->NoKTPPenyewa = $NoKTPPenyewa;
            $this->NamaPenyewa = $NamaPenyewa;
            $this->AlamatPenyewa = $AlamatPenyewa;
            $this->NoScooter = $NoScooter;
        }

        public function getNoKTPPenyewa(){
            return $this->NoKTPPenyewa;
        }

        public function getNamaPenyewa(){
            return $this->NamaPenyewa;
        }

        public function getAlamatPenyewa(){
            return $this->AlamatPenyewa;
        }

        public function getNoScooter(){
            return $this->NoScooter;
        }
    }
?>