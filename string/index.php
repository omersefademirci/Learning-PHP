<?php 

$message = 'My name\'s Ömer Sefa DEMİRCİ';
$message1 = "My name's Ömer Sefa DEMİRCİ";

$name = 'Sefa';
$surname = 'Demirci';
$age = 21;

echo $message.'<br>';

echo"My name is $name $surname. I'm $age years old.".'<br>';
$message = "My name is $name $surname. I'm $age years old.".'<br>';

// Message character number

echo strlen($message).'<br>';

// Message world number
echo str_word_count($message).'<br>';

//Message to Lower 
echo strtolower($message).'<br>';

//Message to Upper
echo strtoupper($message).'<br>';

//Capitalize  the first letter of a sentecnce
echo ucfirst($message).'<br>';

//Desired change in sentence
echo str_replace("Sefa","Ömer Sefa",$message).'<br>';
echo str_replace(["Sefa","21"],["Ömer","22"],$message).'<br>';



?>