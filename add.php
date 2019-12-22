<?php
include('include/user.inc.php');



    






 // $result = function(){
  //  echo "> updates,info and other output shown here <br/>" ;
  //  echo "> click the +ADD PRODUCT button to begin...<br/>";
  //  echo "> waiting for input...";
 // }




?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?> 


<!--  //  Main form that collects products, amount, and type  //    -->

<section class="container">
    <div class="app-test">
        
        <form action="add.php" method="POST">
            <h1>Inventory(update)</h1>
            <div class="region">
                <label for="product">Product:</label>
                <input type="text" name="product"  id="product">
            </div>
            <div class="region">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" id="amount" required>
            </div>
            <div class="region">
                <label for="type">Type:</label>
                <input type="text" name="type" id="type" required>
            </div>
            <div class="btn">
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>
</section>

<!--  //  End Main Form //  -->
<?php include('templates/footer.php'); ?>
</html>