<?php 

// Function that echos form input. Form method is POST by default This fucntion is located in the header.php template 

 $result = function(){
    if(isset($_POST['submit'])){
        echo "new product <strong>ADDED</strong>...<br/>";
        echo htmlspecialchars($_POST['product']) ."<br/>";
        echo htmlspecialchars($_POST['amount']) . "<br/>";
        echo htmlspecialchars($_POST['type']) . "<br/>";
   
      }
    else{

         echo "> click +ADD PRODUCT to begin...<br/>";
         echo "> waiting for input...";
    }
  
}

?>

