    <?php 
      $title = "Ifstatement";
      include "includes/header.php"
    ?> 
    <h1>IF-ELSE Statements</h1>      
    <?php
       // AN if ststement that will carry out an action based on the value of the variable

       echo "<h2>If statement</h2>";

       $grade = 80;

       if($grade >= 50){
        echo "<h3 style='color: green'>YOU HAVE PASSED</h3>";
       }
       else{
        echo "<h3 style='color: red'>YOU HAVE FAILED</h3>";
       }
       $garde = "C";
       // IF Else IF-Else
       if($grade == "A"){
        echo "<h2 style='color: green'>YOU ARE SUPERSTAR!</h2>";
       }
       elseif($grade == "B"){
        echo "<h2 style='color: blue'>YOU DID WELL!</h2>";
       }
       else{
        echo "<h2 style='color: red'>YOU HAVE FAILED....</h2>";
       }
    ?>
<?php require 'includes/footer.php' ?> 