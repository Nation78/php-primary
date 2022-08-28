    <?php 
      $title = "Forloop";
      include "includes/header.php"
    ?> 
    <h1>For Loops</h1>

    <?php
      //For Loops
      for($count = 0; $count < 10; $count++){
        echo "<p> HELLO WORLD</P>";
      }

      //For Loops
      for($count = 0; $count < 10; $count++){
        echo "<P>The Count is: $count</p>";
      }
    ?>
<?php require 'includes/footer.php' ?> 