<?php
// GUESS GAME STARTS
$number= $_POST['number_entered'];

$submitbutton= $_POST['submit'];

$randomnumber= mt_rand(1,10);

Result: 

if ($submitbutton){

if (($number > 0) && ($number <11)){
if ($number != $randomnumber)
{
echo "Incorrect guess. The correct number was $randomnumber. Try again";
}
else 
{
echo "$randomnumber is the correct guess. You got it right.";
}
}
}
// GUESS GAME ENDS


// <!--  Electricity bill Start -->


$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}

function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
    echo '<br />' . $result_str; 

    // <!--  Electricity bill Ends -->
    // <!-- MULTIPLICATION TABLE STARTS -->
    if($_POST) {
        $num = $_POST["number"];
      
        echo nl2br("<p style='text-align: center;'>
            Multiplication Table of $num: </p>
        ");
              
        for ($i = 1; $i <= 10; $i++) {
            echo ("<p style='text-align: center;'>$num"
                . " X " . "$i" . " = " 
                . $num * $i . "</p>
            ");
        }
    }
    // <!-- MULTIPLICATION TABLE ENDS -->


