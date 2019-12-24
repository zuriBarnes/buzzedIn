<?php

// Class User Information,arrays,lists,

 class User {

// User class for the inventory app

     public $user;
     public $email;

// function creates User objects

     function __construct($user, $email) {
         $this->user = $user;
         $this->email = $email;
        }

// Log in function
     function log_in() {
        echo "{$this->user}: signed in";
    }
}

// Users List 

$zuri = new User("Zuri", "zurikiser@gmail.com");
$misty = new User("Misty", "mistybarnes79@gmail.com");

 // users array/list
 
 $app_users = [$zuri, $misty];

 ?>
