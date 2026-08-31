<?php

$name = "Jacob Supplee";
$city = "Rockville";
$state = "Maryland";
$temperature = 75;
$currentDate = date("m/d/y");

$pi = 3.14;
$earthRadius = 3959;
$earthVolume = (4/3)*$pi*$earthRadius*$earthRadius*$earthRadius;

echo "My name is $name.<br>";
echo "My city is $city in the state of $state.<br>";
echo "The current temperature (in F) is $temperature.<br>";
echo "Today's date is $currentDate.<br>";
echo "The Earth's volume is $earthVolume cubic miles.";

?>