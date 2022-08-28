  <?php 
    $title = "index";
    include "includes/header.php"
  ?>

    <!-- Basic Html -->
    <h1>Hello Html - PHP primary</h1>
    <br>
    <?php
    // Printing to Html using echo
      echo "Hello PHP!";
      echo  "<br/>";
      echo "Second LIne";
      echo "<br/>";
      
      // declare variable
      $name = "Johnpaul Chisom";
      $age = 32;
     // echo variable
      echo "<h1>My Name is: $name </h1>";
      echo "<h1>My Age is: $age </h1>";
    ?>

    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>

    <?php require 'includes/footer.php' ?> 