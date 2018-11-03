<?php

require 'TimeTravel.php';

$start = new DateTime('31-12-1985');
$end = new DateTime('now');
$timeTravel = new TimeTravel($start, $end);
$interval = new DateInterval('PT1000000000S');
$step = new DateInterval('P1M1W1D');

echo $timeTravel->getTravelInfo($start, $end);
echo '<br>';
echo '<br>';
echo $timeTravel->findDate($interval);
echo '<br>';
echo '<br>';
var_dump($timeTravel->backToFutureStepByStep($step)) ;


