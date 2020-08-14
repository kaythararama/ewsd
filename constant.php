<?php
$rate = 1.52;
$US_dollars = 20.00;
$CA_dollars = $US_dollars * $rate;
?>

<?php
define("RATE",1.52);
echo '<br>Rate variable'.RATE;
  		$US_dollars = 20;
  		$CA_dollars = $US_dollars * RATE;
  		echo '<br> Canadian dollars= '.$CA_dollars;
  		echo '<br>Type of variable checkvar is'.var_dump($US_dollars);
?>