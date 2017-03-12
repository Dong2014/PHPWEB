<?php

class User {
    //put your code here
    
    
    public function __construct($input) {
       $this->username = $input['username'];
       $this->password = $input['password'];
      
    }
    public function get_username()
    {
        return $this->username;
    }
    private function set_username($name) {
        $this->username = $name;
    }
    
    public function get_password()
    {
        return $this->password;
    }
    private function set_passwrod($password) {
        $this->password = $password;
    }
    
}

?>
