<?php
class RankScooter{
    public $noScooter;
    public $jmlP;

    public function __construct($noScooter, $jmlP)
    {
        $this->noScooter = $noScooter;
        $this->jmlP = $jmlP;
    }

    public function getNoScooter()
    {
        return $this->noScooter;
    }

    public function getjmlP()
    {
        return $this->jmlP;
    }
}