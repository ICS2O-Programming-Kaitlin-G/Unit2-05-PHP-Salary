<!-- Variables and calculation -->
<?php
  $hourlywages = $_POST["hourly-wages"];
  $hoursworked = $_POST["hours-worked"];
  $taxrate = 0.1805;
  $totalearnings = $hourlywages * $hoursworked;
  $governmentcut = $totalearnings * $taxrate;
  $wholeearnings = $totalearnings - $governmentcut;
?>

<!-- printing zone wow -->
<h2>MONEYYYYY</h2>
You made $ <?php echo "$totalearnings" ?>
<br>
The government takes $ <?php echo "$governmentcut" ?>
<br>
You walk away from this situation with $ <?php echo "$wholeearnings" ?>
<br>