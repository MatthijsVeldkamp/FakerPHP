<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('nl_NL');

$roepnaam = $faker->firstName;
$voornaam = $faker->firstName;
$tussenvoegsel = $faker->lastName;
$achternaam = $faker->lastName;
$huisnummer = $faker->buildingNumber;
$postcode = $faker->postcode;
$plaats = $faker->city;
$vast_telefoon = $faker->phoneNumber;
$mobiel_telefoon = $faker->phoneNumber;
$adres = $faker->streetAddress;
$geboortedatum = $faker->date($format = 'Y-m-d', $max = 'now');
$bsn_nummer = $faker->ssn;

// Gebruik randomNumber voor een willekeurig getal, je moet zelf validatie toevoegen als nodig
$bankrekening = $faker->randomNumber(10); // Dit geeft een willekeurig getal van 10 cijfers

$bedrijfsnaam = $faker->company;

echo $roepnaam. " ". $voornaam. " ". $tussenvoegsel. " ". $achternaam. " ". $huisnummer. " ". $postcode. " ". $plaats. " ". $vast_telefoon. " ". $mobiel_telefoon. " ". $adres. " ". $geboortedatum. " ". $bsn_nummer. " ". $bankrekening. " ". $bedrijfsnaam. "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
    <h1>Welcome to the main page</h1>
</body>
</html>