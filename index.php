<?php
require_once 'vendor/autoload.php';
// for loop
for ($i = 0; $i < 1000; $i++) {
    // put faker on Dutch
    $faker = Faker\Factory::create('nl_NL');
    echo $faker->name;
    echo '<br>';
    echo $faker->address;
    echo '<br>';
    echo $faker->email;
    echo '<br>';
    echo $faker->phoneNumber;
    echo '<br>';
    echo $faker->creditCardNumber;
    echo '<br>';
    echo $faker->creditCardType;
    echo '<br>';
}
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