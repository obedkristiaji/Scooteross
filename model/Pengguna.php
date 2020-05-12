<?php
    class Pengguna{
        public $KTPPengguna;
        public $NamaPengguna;
        public $AlamatPengguna;
        public $EmailPengguna;
        public $Role;
        public $Kel;
        public $status;

        public function __construct($KTPPengguna,$NamaPengguna,$AlamatPengguna,$EmailPengguna, $Role, $Kel, $status){
            $this->KTPPengguna = $KTPPengguna;
            $this->NamaPengguna = $NamaPengguna;
            $this->AlamatPengguna = $AlamatPengguna;
            $this->EmailPengguna = $EmailPengguna;
            $this->Role = $Role;
            $this->Kel = $Kel;
            $this->status = $status;
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

        public function getKel() {
            return $this->Kel;
        }

        public function getStatus() {
            if($this->status == 'Active'){
                return 'Active';
            } else {
                return 'Inactive';
            }
        }
    }
?>