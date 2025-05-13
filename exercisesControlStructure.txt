<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Control Structure</title>
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
    .table {
            display: inline-block;
            margin-left: 140px;
            text-align: center;
            font-size: 15px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      .series {
            font-size: 18px;
            margin-top: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-align: center;
      }
    </style>
</head>
<body style="background-color: #1d1d32;">
    <h1>Exercises <br>Control Structure</h1>

    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 1</h2>
    
    <?php
        $num1 = 11;
        $num2 = 21;

        if ($num1 > $num2) {
            $highest = $num1;
            $lowest = $num2;
        } else {
            $highest = $num2;
            $lowest = $num1;
        }

        echo "<h3>Num1 = $num1<br>Num2 = $num2</h3>";
        echo "<h3>Highest value is $highest.
        <br>Lowest value is $lowest.</h3>";
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 2</h2>
    
    <?php 
        $value = 2;

        if ($value < 1 || $value > 4) {
            echo "<h2>Please use a number between 1 and 4.</h2>";
        } else {
            switch ($value) {
                case 1:
                    $card = "Spades";
                    break;
                case 2:
                    $card = "Hearts";
                    break;
                case 3:
                    $card = "Diamonds";
                    break;
                case 4:
                    $card = "Clubs";
                    break;
            }

            echo "<h3>The selected is $card.</h3>";
        }
    ?>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 3</h2>
    
    <?php 
        $points = 75;
        $grade = '';
        $passed = false;

        if ($points >= 90 && $points <= 100) {
            $grade = 'A';
            $passed = true;
        } elseif ($points >= 80) {
            $grade = 'B';
            $passed = true;
        } elseif ($points >= 70) {
            $grade = 'C';
            $passed = true;
        } elseif ($points >= 60) {
            $grade = 'D';
            $passed = false;
        } elseif ($points< 60) {
            $grade = 'F';
            $passed = false;
        }

        echo "<h3>You scored $points points.</h3>";
        echo "<h3>Your grade is: $grade.</h3>";

        if ($passed) {
            echo "<h3 class='pass'>Sana ol! Pasado!</h3>";
        } else {
            echo "<h3 class='fail'>Sorry you did not passed!</h3>";
        }
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 4</h2>
    
    <?php 
        $workHours = 9999;
        $ageInYears = 3;           
        $failuresPYear = 26;

        echo "<h3>Working Hours: $workHours
        <br>Age: $ageInYears
        <br>Failures Per Year: $failuresPYear<h3>";

        if ($workHours > 10000 || $ageInYears > 7 || $failuresPYear > 25) {
            echo "<h3 class='replace'>Machine needs to be replaced.</h3>";
        } else {
            echo "<h3 class='keep'>Machine is in good condition.</h3>";
        }
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 5</h2>
    <?php 
        $year = 2025;

        if ($year % 400 == 0 || $year % 4 == 0) {
            echo "<h3 class='yes'>$year is a leap year</h3>";
        } else {
            echo "<h3 class='no'>$year is NOT a leap year</h3>";
        }
    ?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 6</h2>
    <?php 
        $num = 7;
        $start = 1;
        $end = 10;

        echo "<h3>Multiplication Table by $num</h3>";
        echo "<div class='table'>";
        for ($i = $start; $i <= $end; $i++) {
            $result = $num * $i;
            echo "$num × $i = $result<br>";
        }
        echo "</div>";
    ?>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 7</h2>
    <h3>Fibonacci Series from 0 to 50</h3>
    <div class="series">
    <?php 
        $s1 = 0;
        $s2 = 1;

        echo "$s1, $s2";

        while (true) {
            $next = $s1 + $s2;
            if ($next > 50) {
                break;
            }
            echo ", $next";
            $s1 = $s2;
            $s2 = $next;
          }
    ?>
    </div>

  </div>

</body>
</html>