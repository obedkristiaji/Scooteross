<?php
    class Pengguna{
        public $idPengguna;
        public $NamaPengguna;
        public $AlamatPengguna;
        public $Role;
        public $KTPPengguna;

        public function __construct($idPengguna,$NamaPengguna,$AlamatPengguna,$Role,$KTPPengguna){
            $this->idPengguna = $idPengguna;
            $this->NamaPengguna = $NamaPengguna;
            $this->AlamatPengguna = $AlamatPengguna;
            $this->Role = $Role;
            $this->KTPPengguna = $KTPPengguna;
        }

        public function getIdPengguna(){
            return $this->idPengguna;
        }

        public function getNamaPengguna(){
            return $this->NamaPengguna;
        }

        public function getAlamatPengguna(){
            return $this->AlamatPengguna;
        }

        public function getRole(){
            return $this->Role;
        }

        public function getKTPPengguna(){
            return $this->KTPPengguna;
        }
    }
?>