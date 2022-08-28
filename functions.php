    <?php 
        $title = "Function";
        include "includes/header.php"
        ?> 
    <h1>Functions</h1>
    
    <?php
    //  Defining a Function
      
    function writeMessage(){
      echo "You are really a nice person, Have a nice time! <br/>";
    }

    // Calling a Function
     writeMessage();
    
     echo "<hr/>";
     
     writeMessage();

    //  Functions with parameters

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
    $num = 500;
    addFunction(10, 20);
    addFunction(10, $num);

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }
    
    $return_value = returnProduct(10, 200); 
    echo $return_value . "<br/>";
    ?>
    
    <?php require 'includes/footer.php' ?> 