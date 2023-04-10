<?php
    session_start();
    if  ($_SESSION['username']){
        echo "bienvenue ".$_SESSION['username']."</br><a href='logout.php'>. se deconnecter</a>";
    }
    else {
        header("Location:connexion.php");
    }
    
?>
</span>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainMenu.css">
    <title>Document</title>
</head>
<body>
<span class="yo">
    <!--

    <footer>
        <div class="footer-top">
            <div class="footer-top-col">
                <h3>About Us</h3>
                <a href="#">Historique de l'entreprise</a>
                <a href="#"Nos Clients></a>
            </div>
            <div class="footer-top-col">
                <h3>Contact</h3>
                <a href="#">Aide et Conseils</a>
            </div>
            <div class="footer-top-col">
                <h3>Services</h3>
                <a href="#">Espace</a>
                <a href="#">Personnel</a>
                <a href="#">Decoration</a>
            </div>
        </div>
        <div class="footer-midle">
            <h3>
                Rester à  jour
            </h3>
            <form>
                <label for="newsletter">
                    InscriveZ-vous à notre programme pour ne rien manquer de nos mises à jour
                </label>
                <div>
                    <input 
                    type="email" name="newsletter" 
                    id="newsletter" placeholder="example@gmail.com" 
                    required>
                <input type="submit" value="S'inscrire">
                </div>
            </form>
        </div>
        <div class="footer-bottom">
            <a href="#" class="social">
                <i class="ri-facebook-circle-fill"></i>
            </a>
            <a href="#" class="social">
                <i class="ri-twitter-fill"></i>
            </a>
            <a href="#" class="social">
                <i class="ri-whatsapp-fill"></i>
            </a>
        </div>
    </footer>

    -->
</body>
</html>