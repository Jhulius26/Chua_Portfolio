<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Functions</title>
    <style>
    * {
        box-sizing: border-box;
    }
    h1 {
        text-align: center; 
        font-size: 45px; 
        color: #dedef6;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    h3 {
        text-align: center;
        font-size: 18px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .row .column h2 {
        text-align: center; 
        font-size: 25px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .column {
        margin-left: 20px;
        margin-bottom: 20px;
        float: left;
        width: 31%;
        padding: 10px;
        height: 360px;
        border-radius: 10px;
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
</head>
<body style="background-color: #1d1d32;">
    <h1>Exercises <br>Functions</h1>

    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 1<br>Vat calculator</h2>
    
    <?php
        $price = 100;
        $vat = 0.21;

        function calculateVat($price, $vat) {
            $calculatedPrice = $price + ($price * $vat);
            return $calculatedPrice;
        }

        $total = calculateVat($price, $vat);

        echo "<h3>Price is: $price, VAT is: " . ($vat * 100) . "%, Total price is: " . number_format($total, 2) . "</h3>";
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 2<br>Leap year</h2>
    
    <?php 
        $year = 2025;

        function isLeapYear($year) {
            return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        }

        if (isLeapYear($year)) {
            echo "<h3 class='yes'>$year is a leap year</h3>";
        } else {
            echo "<h3 class='no'>$year is not a leap year</h3>";
        }
    ?>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 3<br>Calculator</h2>
    
    <?php 
        $num1 = 21;
        $num2 = 11;

        function addNumbers($a, $b) {
            return $a + $b;
        }

        function subtractNumbers($a, $b) {
            return $a - $b;
        }

        function multiplyNumbers($a, $b) {
            return $a * $b;
        }

        function divideNumbers($a, $b) {
            return $b != 0 ? $a / $b : 'Division by zero error';
        }

        echo "<h3>Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "
        <br>Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "
        <br>Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "
        <br>Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . "</h3>";
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 4<br>Swapping numbers</h2>
    
    <?php 
        function swapNumbers($num1, $num2) {
            echo "<h3>Before swapping: num1 = $num1, num2 = $num2</h3>";

            $tmp = $num1;
            $num1 = $num2;
            $num2 = $tmp;

            echo "<h3>After swapping: num1 = $num1, num2 = $num2</h3>";
        }

        $a1 = 4;
        $b1 = 8;

        swapNumbers($a1, $b1);
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 5<br>Even or Odd</h2>
    <?php 
        function evenOrNot($num1) {
            if ($num1 % 2 == 0) {
                echo "<h3>$num1 is even</h3>";
            } else {
                echo "<h3>$num1 is odd</h3>";
            }
        }

        $num1 = 21;
        evenOrNot($num1);
    ?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 6<br>Prime number</h2>
    <?php 
        function isPrime($num1) {
            if ($num1 <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num1); $i++) {
                if ($num1 % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        $num1 = 21;

        if (isPrime($num1)) {
            echo "<h3>$num1 is a prime number</h3>";
        } else {
            echo "<h3>$num1 is not a prime number</h3>";
        }
    ?>
  </div>
</div>

</body>
</html>