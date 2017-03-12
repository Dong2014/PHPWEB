<?php
require_once("Controller.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Sbc-ComEx
 */
class UserController extends Controller{
    //put your code here
   
    public function __construct() {
        parent::__construct();

    }
    
    public function add_user($input ,$usernamelist){
      
        $check = 0;
        for($i= 0; $i < sizeof($usernamelist); $i++)
        {
             //echo "usernamelist:  ".$usernamelist[$i] . " VS  ". $input->get_username()."<br>";
            if(strcmp($usernamelist[$i],$input->get_username()) == 0) {
                       
                       $check = 1;
                       break;
            }
        }
        if($input->get_username()=='')
        {
            $check == 1;
        }
        
        if($check == 0)
        {
         $sql = "INSERT INTO 
                users(username, password) 
                VALUES (:username, :password)";
        $stmt = $this->db_connect->prepare($sql);
        $stmt->bindParam(':username', $input->get_username(), PDO::PARAM_STR);
        $stmt->bindParam(':password', $input->get_password(), PDO::PARAM_STR);
        $stmt->execute();
        }
        else { 
            return -1;
        }
        return 1;

    }
    
    public function getUserNameInfo($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        foreach (parent::$this->db_connect->query($sql) as $row) {
            return $row;
        }
    }

    public  function get_user_list() {
        $sql = "SELECT * from users";
        foreach ($this->db_connect->query($sql) as $row) {
            $dataSet[] = $row['username'];
        }

        if (!empty($dataSet))
            return $dataSet;
        else
            return null;
    }

}
