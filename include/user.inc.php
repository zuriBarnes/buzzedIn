

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

 


// Function that echos form input. Form method is POST by default This fucntion is located in the header.php template 

 $result = function(){
     if(isset($_POST['submit'])){
         echo "new product <strong>ADDED</strong>...<br/>";
         echo "> Product: {$_POST['product']} <br/>";
         echo "> Amount: {$_POST['amount']} <br/>";
         echo "> Type: {$_POST['type']}";
    
       }
     else{
          echo " User Console <br/>" ;
          echo "> click +ADD PRODUCT to begin...<br/>";
          echo "> waiting for input...";
     }
   
 }
 
 



?>
