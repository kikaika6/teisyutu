<?php
// Your code here!
require "AirConditioner.php";

$AirConditioner = new AirConditioner(1,6);



$AirConditioner->showStatus();

$AirConditioner->dry();
$AirConditioner->showStatus();
$AirConditioner->showStatus();
$AirConditioner->showStatus();


$AirConditioner->showStatus();

?>
