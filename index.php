<?php
$defaultTZone = 'Europe/Paris';
date_default_timezone_set($defaultTZone);

$presentTime = new DateTime('now');
$destinationTime =  (new DateTime)->setDate(2014,11, 22)->setTime(16, 10);

$presentResult = $presentTime->format('M j Y A h:i');
$destinationResult = $destinationTime->format('M j Y A h:i');

$timeTillDes = $presentTime->diff($destinationTime);
$timeTillDesResult = $timeTillDes->format('%m months %d days %h hours %i minutes');
//
//$totalMinutes = $timeTillDes->days * 24 * 60 + $timeTillDes->h * 60 + $timeTillDes->i;
//
//$carburantNeeded = $totalMinutes / 10000;
//$carburantPerMinute = $carburantNeeded / $totalMinutes;

var_dump($presentTime, $destinationTime, $timeTillDes, $timeTillDesResult/*, $totalMinutes*/);



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
<body>

<h1>Back to the future</h1>
<h2>Present time</h2>
<p><?php echo $presentResult?></p>

<h2>Destination time</h2>
<p><?php echo $destinationResult?></p>

<h2>Time difference</h2>
<p><?php echo $timeTillDesResult?></p>
<!---->
<!--<h2>Carburant needed by minutes</h2>-->
<!--<p>--><?php //echo $carburantPerMinute?><!--</p>-->



</body>
</html>