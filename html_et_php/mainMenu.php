<?php
    session_start();
    if  ($_SESSION['username']){
        echo "bienvenue ".$_SESSION['username']."</br><a href='logout.php'>. se deconnecter</a>";
    }
    else {
        header("Location:connexion.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>