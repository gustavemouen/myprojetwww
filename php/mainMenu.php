<?php
    session_start();
    if  ($_SESSION['username']){
        /*echo 
            "<nav class='session'>
                bienvenue ".$_SESSION['username'].
                "</br>
                <a class='moi' href='logout.php'>
                    se deconnecter
                </a>
            </nav>";*/
    }
    else {
        header("Location:connexion.php");
    }
?>
</span>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainMenu.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h1>MYP</h1>
        </div>
        <div class="barre_de_navigation">
            <ul>
                <a href="#1" data-toggle="tab">
                    <li role="presentation" class="active">HOMMES</li>
                </a>
                <a href="#2" data-toggle="tab">
                    <li role="presentation">FEMMES</li>
                </a>
                <a href="#3" data-toggle="tab">
                    <li role="presentation">ENFANTS</li>
                </a>
                <a href="#4" data-toggle="tab">
                    <li role="presentation">PRODUITS DE BEAUTE</li>
                </a>
                <a href="#4" data-toggle="tab">
                    <li role="presentation">CONTACT</li>
                </a>
            </ul>
        </div>
        <img class="menuburger" src="../image/menu-btn.png" alt="menu burger">
    </nav>
    <div class="tab-content">
        <div class="tab-pane active" id="1">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                   <div class="thumbnail">
                        <img src="../image/hacker who is on his laptop feet crossed with a ho.jpg" alt="...">
                        <div>5000FCFA</div>
                        <div class="caption">
                            <h4>Vetement1</h4>
                            <p>voici la description du produit</p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>
                                Commader
                            </a>
                        </div>
                   </div> 
                </div>
                <div class="col-sm-6 col-md-4">
                   <div class="thumbnail">
                        <img src="../image/hacker who is on his dell brand laptop crossed fee.jpg" alt="...">
                        <div>5000FCFA</div>
                        <div class="caption">
                            <h4>Vetement1</h4>
                            <p>voici la description du produit</p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>
                                Commader
                            </a>
                        </div>
                   </div> 
                </div>
            </div>
        </div>
        <div class="tab-pane" id="2">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                   <div class="thumbnail">
                        <img src="../image/hacker who is on his laptop feet crossed with a ho.jpg" alt="...">
                        <div>500000000000000000000000FCFA</div>
                        <div class="caption">
                            <h4>Vetement1</h4>
                            <p>voici la description du produit</p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>
                                Commader
                            </a>
                        </div>
                   </div> 
                </div>
                <div class="col-sm-6 col-md-4">
                   <div class="thumbnail">
                        <img src="../image/hacker who is on his dell brand laptop crossed fee.jpg" alt="...">
                        <div>5000FCFA</div>
                        <div class="caption">
                            <h4>Vetement1</h4>
                            <p>voici la description du produit</p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>
                                Commader
                            </a>
                        </div>
                   </div> 
                </div>
            </div>
        </div>
    </div>

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
    <script>
        const menuHamburger = document.querySelector(".menuburger")
        const navList = document.querySelector(".barre_de_navigation")
        const connexion = document.querySelector(".Account1")
        menuHamburger.addEventListener('click',()=>{
        navList.classList.toggle('mobile-menu');})
    </script>
</body>
</html>