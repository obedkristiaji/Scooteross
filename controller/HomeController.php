<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
class HomeController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","scooteross");
    }

    public function view_index_login(){
        return View::createView('/Home/login.php',
        []
        );
    }

    public function view_home(){
        return View::createView('/Home/index.php',
        []
        );
    }
}
?>
