<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Build In Functions</title>
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
    .alist {
            font-size: 18px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-align: center;
    }
    .cdown {
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-align: center;
    }
    p {
            font-size: 18px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #1d1d32;">
    <h1>Exercises <br>Build In Functions</h1>

    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 1<br>Sorting array</h2>
    
    <?php
        $NUM = array(21, 6, 11, 23, 2);

        echo "<h3>Original Array:</h3>";
        echo "<div class='alist'>" . implode(', ', $NUM) . "</div>";
        rsort($NUM);
        echo "<h3>Sorted Array (Descending):</h3>";
        echo "<div class='alist'>" . implode(', ', $NUM) . "</div>";
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 2<br>Birthday countdown</h2>
    
    <?php 
        $birthMonthD = "10-21";

        $today = new DateTime();
        $currentYear = $today->format("Y");
        $birth = new DateTime("$currentYear-$birthMonthD");

        if ($birth < $today) {
            $birth->modify('+1 year');
        }

        $interval = $today->diff($birth);
        $daysRemain = $interval->days;
        echo "<div class='cdown'><strong>$daysRemain</strong> days left until your birthday!</div>";
    ?>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 3<br>Generating random float numbers</h2>
    
    <?php 
        function randNumber($min = 0, $max = 1) {
            return $min + mt_rand() / mt_getrandmax() * ($max - $min);
        }

        $randomFloat = randNumber(11, 21);
        echo "<h3>Random float between 11 and 21: " . number_format($randomFloat, 4) . "</h3>";
    ?>

  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 4<br>Lowercase check</h2>
    
    <?php 
        $str = "Tralalelo Tralala";

        function lowercaseCheck($text) {
            return strtolower($text);
        }

        $lowercaseText = lowercaseCheck($str);
        echo "<h3>Original Text<br>$str</h3>";
        echo "<h3>Lowercased Text</h3><p>$lowercaseText</p>";
    ?>

  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Exercise 5<br>Search inside of a text</h2>
    <?php 
        $str = "Love is not something you can control. It's something that control you!";

        function searchText($str, $punctuation) {
            $count = substr_count($str, $punctuation);
            echo "<p>The text has <strong>$count</strong> '$punctuation' punctuation(s).</p>";
        }
        searchText($str, "!");
    ?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Exercise 6<br>Lowest and highest values</h2>
    <?php 
        $onlyNumbers = [26, 11, 6, 21, 2, 26];

        $min = min($onlyNumbers);
        $max = max($onlyNumbers);
        echo "<p>The lowest value is <strong>$min</strong> and the highest value is <strong>$max</strong>.</p>";
    ?>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Exercise 7<br>String repeat</h2>
    
    <?php 
        $str = "Boyie! ";

        function repeatString($text, $times) {
            return str_repeat($text, $times);
        }

        $repeated = repeatString($str, 8);
        echo "<p>$repeated</p>";
    ?>

  </div>
</div>

</body>
</html>