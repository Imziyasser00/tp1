<?php

    class User{
        public $username;
        public $password;
        
        public function __construct($username,$password){
            $this->username = $username;
            $this->password = $password;
        }
    }

    $user = new User("imziyasser00@gmail.com","Asskicker4Y");
    echo $user->username;

    ?>