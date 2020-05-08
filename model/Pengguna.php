<?php
    class Pengguna{
        public $KTPPengguna;
        public $NamaPengguna;
        public $AlamatPengguna;
        public $EmailPengguna;
        public $Role;

        public function __construct($KTPPengguna,$NamaPengguna,$AlamatPengguna,$EmailPengguna, $Role){
            $this->KTPPengguna = $KTPPengguna;
            $this->NamaPengguna = $NamaPengguna;
            $this->AlamatPengguna = $AlamatPengguna;
            $this->EmailPengguna = $EmailPengguna;
            $this->Role = $Role;
        }

        public function getKTPPengguna(){
            return $this->KTPPengguna;
        }

        public function getNamaPengguna(){
            return $this->NamaPengguna;
        }

        public function getAlamatPengguna(){
            return $this->AlamatPengguna;
        }

        public function getEmailPengguna(){
            return $this->EmailPengguna;
        }

        public function getRole(){
            return $this->Role;
        }
    }
?>