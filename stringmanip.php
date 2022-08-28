  <?php 
    $title = "Stringmanip";
    include "includes/header.php"
  ?> 
    <h1>PHP STring Manipulation</h1>
    <?php
    //Concatenation of strings
      $phrase1 = "student who came late";
      $phrase2 = "in class, stand with Rock";
      $name = "national nation";
      echo $phrase1 . ", named Nation, " . $phrase2;
      echo "<br/>";
      echo "<hr/>";
      //stings transformation 
      echo "Uppercase first letter: " . ucfirst($name)."<br/>";
      echo "Uppercase first letter of each world: " . ucwords($name)."<br/>";
      echo "Upper case: ". strtoupper($name)."<br/>";
      echo "Lower case: ". strtolower("THIS WAS ALL UPPER CASE")."<br/>";
      echo "<hr/>";
      echo "Repeat String: ".str_repeat("a",10). "<br/>";
      echo "Repeat String: ".strtoupper(str_repeat("a",10)). "<br/>";
      echo "Get a Substring: " . substr($name, 3, 5). "<br/>";

      echo "Get position of string: " . strpos($name, "l"). "<br/>";
      //Returns NULL
      // echo "Get position of string: " .stopos($combine, "z"). "<br/>";

      echo "Find Length of string: " .strlen($name) . "<br/>";

      echo "Without Trim: ". "A" . "B C D" . "E" . "<br/>";
      echo "Trim spaces on both sides: ". "A" .trim("B C D") . "E" . "<br/>";
      echo "Trim spaces to the left: ". "A" . ltrim("B C D") . "E" . "<br/>";
      echo "Trim spaces to the right: ". "A" . rtrim("B C D") . "E" . "<br/>";

      echo "Replace string with another: ". str_replace("stand", "sit", $phrase2) . "<br/>";
    ?>
<?php require 'includes/footer.php' ?> 