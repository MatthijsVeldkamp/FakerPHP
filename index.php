<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('nl_NL');

$voornaam = $faker->firstName;
/*
$roepnaam = $voornaam;
$tussenvoegsel = $faker->lastName;
$achternaam = $faker->lastName;
$huisnummer = $faker->buildingNumber;
$postcode = $faker->postcode;
$plaats = $faker->city;
$vast_telefoon = $faker->phoneNumber;
$mobiel_telefoon = $faker->phoneNumber;
$adres = $faker->streetAddress;
$geboortedatum = $faker->date($format = 'Y-m-d', $max = 'now');

$bedrijfsnaam = $faker->company;

echo $roepnaam. " ". $voornaam. " ". $tussenvoegsel. " ". $achternaam. " ". $huisnummer. " ". $postcode. " ". $plaats. " ". $vast_telefoon. " ". $mobiel_telefoon. " ". $adres. " ". $geboortedatum. " ". $bedrijfsnaam. "<br>";*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loader.css">
    <script src="theme.js"></script>
</head>
<body>
    <div class="header">
        <div class="headeritem">
            <button><h5>Profile</h5></button>
        </div>
    </div>
    <div class="container">
        <h1 id="welcometext">Welcome to the main page</h1>
        <h3><button id="getallusers" class="big_button" type="button">Get all users</button></h3>
        <h2 class="DISABLED">Getting all users from db...</h2>
        <div id="loader" class="loader DISABLED">
            <div class="square-circle-5"></div>
        </div>
        <div id="smalltext" class="smalltext DISABLED">
            <h4><i id="loadtext">Loading users...</i></h4>
        </div>
    </div>
    <script src="showloader.js"></script>
</div>
<div class="footer">
    <!-- <div class="seperator">
    </div> -->
    <div class="footeritem">
    <h2>rr</h2>
</div>
</body>
</html>