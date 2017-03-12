<?php

class Controller {
    //put your code here




    protected $db_connect;

    /**
     * Constructor
     */
    public function __construct() {
        $dname = 'pc shop';
        $username = 'pcshop';
        $password = '123';
        $servername = 'localhost';
        $this->db_connect = new PDO("mysql:host=$servername;dbname=pc shop", $username, $password);
    }



}
?>
