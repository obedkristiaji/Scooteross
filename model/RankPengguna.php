<?php
class RankPengguna
{
    public $nama;
    public $jmlS;

    public function __construct($nama, $jmlS)
    {
        $this->nama = $nama;
        $this->jmlS = $jmlS;
    }

    public function getnama()
    {
        return $this->nama;
    }

    public function getjmlS()
    {
        return $this->jmlS;
    }
}
