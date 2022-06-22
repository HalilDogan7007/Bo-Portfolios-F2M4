<?php
require 'function.php';
$connection = dbConnect();

$voornaam = '';
$achternaam = '';
$soortpakket = '';
$contactgegevens = '';

$errors = [];

// Gegegevens check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $soortpakket = $_POST['soortpakket'];
    $contactgegevens = $_POST['contactgegevens'];

    if (isEmpty($voornaam)) {
        $errors['voornaam'] = 'Vul uw voornaam in a.u.b';
    }
    if (isEmpty($achternaam)) {
        $errors['achternaam'] = 'Vul uw voornaam in a.u.b';
    }
    if (!isValidEmail($contactgegevens)) {
        $errors['contactgegevens'] = 'Dit is geen geldig e-mail of telefoonnummer';
    }
    if (!HasMinLength($soortpakket, 8)) {
        $errors['soortpakket'] = 'Zo een pakket bestaat niet, je kan alleen kiezen uit: beginner, standaard & full acces.';
    }

    print_r($errors);



    if (count($errors) == 0) {
        $sql = "INSERT INTO `bestellen` ( `voornaam`, `achternaam`, `soortpakket`, `contactgegevens`) 
        VALUES (:voornaam, :achternaam, :soortpakket, :contactgegevens);";

        $statement = $connection->prepare($sql);
        $params = [
            'voornaam' => $voornaam,
            'achternaam' => $achternaam,
            'soortpakket' => $soortpakket,
            'contactgegevens' => $contactgegevens,
        ];
        $statement->execute($params);

        header('Location: bedankt.html');
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designhd forms</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>


    <div class="container">
        <h1 class="h1-titel">Designhd Formulier!</h1>
        <br>
        <section class="contact">
            <header class="titel2">
                <h2 class="h2-titel">Vul gegevens in</h2>
            </header>

            <br>
            <form action="contact.php" method="POST" novalidate>
                <div class="form__field">
                    <label class="labelnaam" for="voornaam">Voornaam</label>&nbsp;
                    <input type="text" id="voornaam" name="voornaam" placeholder="Vul uw voornaam in" required />
                </div>
                <br>
                <div class="form__field">
                    <label class="labelnaam" for="achternaam">Achternaam</label>&nbsp;
                    <input type="text" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required />
                </div>
                <br>
                <div class="form__field">
                    <label class="labelnaam" for="Soort-pakket">Bericht</label>&nbsp;
                    <input type="text" id="soortpakket" name="soortpakket" placeholder="Vul uw bericht hier in a.u.b!" required />
                </div>
                <br>
                <div class="form__field">
                    <label class="labelnaam" for="contactgegevens">Contactgegevens</label>&nbsp;
                    <textarea type="text" id="contactgegevens" name="contactgegevens" placeholder="E-mail & telefoonnummer" required></textarea>
                </div>
                <button class="opsturenButton" type="submit" class="form_button">Opsturen</button>
                <a class="bloo" href="index.php">Terug naar het overzicht</a>
            </form>

        </section>


    </div>
</body>

</html>