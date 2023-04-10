<?php
    session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $statutsocial = $_POST["statutsocial"]; 
        if($username&&$password&&$email&&$nom&&$prenom&&$statutsocial){
            $conn = mysqli_connect("localhost", "root", "", "gestionfete");
            $password = md5($password);
            $reg = mysqli_query($conn, "SELECT * FROM compte WHERE username='$username' or email='$email' ");
            $rows = mysqli_num_rows($reg);
            
            if($rows==0){
                $query1 = mysqli_query($conn, "INSERT INTO `compte` (`idcompte`, `username`, `email`, `password`) VALUES (NULL,'$username', '$email', '$password')");
                $selectid = mysqli_query($conn, "SELECT MAX(idcompte) FROM compte "); 
                if($row2 = mysqli_fetch_array($selectid)){
                    $id = $row2[0];
                    $query = mysqli_query($conn, "INSERT INTO `personne` (`idpersonne`, `nom`, `prenom`, `statutsocial`, `idcompte`) VALUES (NULL, '$nom', '$prenom', '$statutsocial', '$id')");
                    $_SESSION['username'] = $username;
                    $_SESSION['password']=$password;
                    $_SESSION['email']=$email;
                    $_SESSION['nom']=$nom;
                    $_SESSION['prenom']=$prenom;
                    $_SESSION['statutsocial']=$statutsocial;
                    header("Location:mainMenu.php");
                }
            }
            else {
                echo "ce pseudo et cette email sont indisponibles";
            }
            
        }
        else echo "entrer des valeurs";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulaire.css">
    <title>S'inscrire</title>
</head>
<body>
    <div class="card">
        <div class="card2">
            <form class="form" action="inscription.php" method="post">
                <p id="heading">Inscription</p>
                <label for="username">
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
                    </svg>
                    <input type="text" class="input-field" id="username" name="username" placeholder="Username" autocomplete="off">
                </div>
                </label>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input type="password" class="input-field" id="password" name="password" placeholder="Password">
                </div>
                <div class="field">
                    <input type="text" class="input-field" id="email" name="email" placeholder="email" autocomplete="off">
                </div>
                <div class="field">
                    <input type="text" class="input-field"  id="nom" name="nom" placeholder="Nom" autocomplete="off">
                    <input type="text" class="input-field" id="prenom" name="prenom" placeholder="prenom" autocomplete="off">
                </div>
                <div class="field">
                    <input type="text" class="input-field" id="statutsocial" name="statutsocial" placeholder="Statut social" autocomplete="off">
                </div>
                <div class="btn">
                    <input class="button1" type="submit" value="S'inscrire" name="submit" id="submit" onclick="valider()">
                    <button class="button2">
                        <a href="../html_et_php/connexion.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se connecter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>