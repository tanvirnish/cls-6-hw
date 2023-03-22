
<?php
    //  triangle pattern
    $size = 5;
    for($i = 0; $i < $size; $i++)
    {
        for($j = 0; $j < $size - $i; $j++) {
            echo "*";
        }
        echo "<br> ";
        

    }
    // pyramid star pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        for($j = 0; $j < $size - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
            
        }
        for($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }
        echo "<br> ";
    }
// factorial number 
    $num = 3;
    $factorial = 1;

    for ($x=$num; $x>=1; $x--)
    {
        $factorial = $factorial * $x;
    }

    echo "The factorial of $num is $factorial";
    ?>
    




    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php From</title>
       
    </head>
    <body>
    <form   action="./game.php" method="POST">
        <!-- GUESS GAME START-->
        <h3>Guess a Number Between 1 and 10: </h3 >
         <input type="text" name="number_entered" value='8'/> 
          <input type="submit" name="submit" value="Search"/>
    <!-- GUESS GAME ENDS-->
    <!--  Electricity bill Start -->
     <div id="e_bill">
        <h3> Electricity Bill</h3>
         <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
          <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />

     </div>
    <!--  Electricity bill ENDS -->
    <!-- MULTIPLICATION TABLE STARTS -->
    <div id="multiplication_table">
          <h4>Multiplication Table:</h4> 
        <input type="text" name="number" placeholder="Enter Multiplication Number">
              
         <input type="Submit" value="Submit"> 
        
    </div>
    <!-- MULTIPLICATION TABLE ENDS -->

    </form>
   
    
   

    </body>
    </html>

    
    