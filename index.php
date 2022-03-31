<!DOCTYPE html>
<!-- ICS2O-Unit2-04-AreaPerRectangle-UserInput -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Money gameshow except its in PHP this time wow!!!!">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>WOW!!!! MONEY!!! PHP!!!</title>
 
    <!-- wow favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header and body text -->
  <?php 
    echo "<h1>CHeating Exercise Software System (CHESS)</h1>";
  ?>
  <br>
  <?php
    echo "<p>I'm sure you've seen the other website that gives you all the information, but here we're a little more relaxed. we're a little more peaceful. we don't do that intense marketing thing. just put your numbers in and click, and i'm sure some things will happen.";
    ?>

  <!-- wow money. wow. interesting. very cool, thank you. -->
  <form action="./results.php" method="post" target="results">
    <label for="hourly-wages">Hourly Pay</label>
    <input type="number" id="hourly-wages" placeholder="...money per hour..." name="hourly-wages">
    <br>
    <br>
    <label for="hours-worked">Hours Worked</label>
    <input type="number" id="hours-worked" placeholder="...hours worked..." name="hours-worked">
    <br>
    <br>
    <input type="submit" value="I respectfully request numbers."
    <br>
    <br>
  </form>

  <!-- Frame for results where they will appear mmmm -->
  <iframe id="results" name="results">
    You made $ " + $total-earnings"
    The government takes $ " + $government-cut"
    You walk away from this situation with $ " + $whole-earnings"
  </iframe>
</body>
</html>