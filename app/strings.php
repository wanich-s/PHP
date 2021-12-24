<?php
$charactorName = "John";
$charactorAge = 35;
echo "There once was a man named $charactorName <br>";
echo "He was $charactorAge years old <br>";    
echo "He really liked the name $charactorName <br>";
echo "but didn't like being $charactorAge <br>";
$name = null;
echo $name;
// Working with Strings
echo strtolower($charactorName) . "<br>";
echo strtoupper($charactorName) . "<br>";
echo strlen($charactorName) . "<br>";
echo $charactorName[0] . "<br>";
echo str_replace("J", "W", $charactorName) . "<br>";
echo $charactorName . "<br>";
echo substr($charactorName, 1) . "<br>";
echo substr($charactorName, 1, 2) . "<br>";
?>