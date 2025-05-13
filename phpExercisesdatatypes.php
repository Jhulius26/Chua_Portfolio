<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise Data Types</title>
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
    <h1>PHP Exercises <br>Data Types</h1>

    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 1<br>Personal information</h2>
    
    <?php
        $x = 21;
        $y = 11;

        $z = ($x + $y) * 5;
        echo "<h3>x = $x
        <br>y = $y<br> Multiply by 5</h3>";
        echo "<h3>The total is $z.</h3>";
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 2<br>Value added tax</h2>
    
    <?php 
        $price = 934;
        $vat = 13;

        $totalPrice = $price + $vat;
        echo "<h3> Price: $price
        <br>Vat: $vat
        <br>Total price: $totalPrice</h3>";
    ?>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 3<br>Average</h2>
    
    <?php 
        $x1 = 21;
        $y1 = 11;
        $z1 = 26;

        $ave = ($x1 + $y1 + $z1) / 3;
        $average = number_format($ave, 2, '.', ',');
        echo "<h3>The numbers $x1, $y1, and $z1.</h3>";
        echo "<h3> The average is $average </h3>";
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 4<br>Countries and capitals</h2>
    
    <?php 
        $countries = ["Netherlands" => "Amsterdam", "Thailand" => "Bangkok", "Germany" => "Berlin", "Philippines" => "Manila", "Japan" => "Tokyo" ];

        foreach ($countries as $country => $capital) {
          echo "<h3> The capital of $country is $capital. </h3>";
        }

    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 5<br>Centimeters to inches</h2>
    <?php 
        $cm = 26;
        $cmToInch = $cm * 0.39;

        $inch = number_format($cmToInch, 2, '.', ',');
        echo "<h3>$cm centimeters is $inch inches<h3>";
    ?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 6<br>Expenses</h2>
    <?php 
        $expenses = [523, 356, 500, 421, 251];
        $totalAmount = 0;

        foreach ($expenses as $expense) {
          $totalAmount += $expense;
        }
        $amountOfExpenses = count($expenses);
        echo "<h3>My $amountOfExpenses biggest expenses were $totalAmount.</h3>";
    ?>
  </div>
</div>

</body>
</html>