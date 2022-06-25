<?php
require 'function2.php';
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

$statement = $connection->prepare('SELECT * FROM `opdrachtenen` WHERE id=?');
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
        <h1 class="headertype"><?php echo $place['title']?></h1>
        <figure><img src="img/<?php echo $place['picture']?>" alt="" width="700px" height="500px"></figure>
        <p class="p"><?php echo $place['message']?></p>
        <a href="contact2.php" class="link-button">Contact us!</a>
        <a href="index-engels.php" class="link-button">Back</a>

        

     

        

    </div>
    
</body>
</html>