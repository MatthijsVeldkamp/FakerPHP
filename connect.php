<?php
$starttime = microtime(true);
require_once 'vendor/autoload.php';
$msg = 'Inserting users...';
$faker = Faker\Factory::create('en_US');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fakedb";

// Specify the path to the MySQL socket file
$socketPath = '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, null, $socketPath);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>
<br>
<?php
// for loop
for ($x = 0; $x < 10000; $x++)
{
// generate a first name and last name
$voornaam = $faker->firstName;
$name = $voornaam;
$achternaam = $faker->lastName;
$stad = $faker->city;
$straat = $faker->streetName;
$huisnummer = $faker->buildingNumber();
$postcode = $faker->postcode();
$location = $faker->citySuffix();
$main_phone = $faker->phoneNumber();
$mobile_phone = $faker->phoneNumber();
$email = $faker->safeEmail();
$adress = $faker->secondaryAddress();
$dob = $faker->iso8601();
$ssn = $faker->randomNumber(5, true);
$account = $faker->iban('NL');
$company = $faker->company();

// insert the names into the table called 'users'
$sql = $conn->prepare("INSERT INTO users (name, firstname, lastname, city, street, buildingnumber, postalcode, location, main_phone, mobile_phone, email, adress, dob, ssn, account, company) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql -> bind_param("ssssssssssssssss",$name, $voornaam, $achternaam, $stad, $straat, $huisnummer, $postcode, $location, $main_phone, $mobile_phone, $email, $adress, $dob, $ssn, $account, $company);

$sql -> execute();
}
$endtime = microtime(true);
$timediff = $endtime - $starttime;
round($timediff,2);
$msg = 'Done!';


$sql -> close();
$conn -> close();

?>


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
    <title>Done! Took: <?php echo round($timediff,2);?> seconds.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loader.css">
    <script src="theme.js"></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="container">
        <div id="loader" class="loader DISABLED">
            <div class="square-circle-5"></div>
        </div>
        <div id="smalltext" class="smalltext">
            <h2><i id="loadtext"><?php echo $msg;?> Took: <?php echo round($timediff,2);?> seconds.</i></h2>
        </div>
    </div>
    
</div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>