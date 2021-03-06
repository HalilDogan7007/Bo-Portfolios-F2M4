<?php
require 'function.php';
$connection = dbConnect();

if( !isset($_GET['id']) ){
    echo "de ID is niet gezet";
    exit;
}

$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal (integer)";
    exit;
}

$statement = $connection->prepare('SELECT * FROM `opdrachten` WHERE id=?');
$params = [$id];
$statement->execute($params);
$place = $statement->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="container place-details">
    <div class="place-info">
        <h1 class="headertype"><?php echo $place['titel']?></h1>
        <figure><img src="img/<?php echo $place['foto']?>" alt="" width="700px" height="500px"></figure>
        <p class="p"><?php echo $place['beschrijving']?></p>
        <a href="contact.php" class="link-button">Neem contact op!</a>
        <a href="index.php" class="link-button">Terug</a>

        

     

        

    </div>
    
</body>
</html>