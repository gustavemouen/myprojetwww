<?php
    require 'database.php';
    if (!empty($_GET['id'])) {
        $iditem = checkInput($_GET['id']);
        $db = Database::connect();
        $statement = $db->prepare("SELECT items.iditem, items.name, items.description, items.price, items.image, catgory.name 
                                   AS category FROM items 
                                   LEFT JOIN catgory ON items.category = catgory.idcategory
                                   WHERE items.iditem = ?");
        $statement->execute(array($iditem));
        $item = $statement->fetch();
        Database::disconnect();
    }
    function checkInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/mainMenu.css">
    <title>viewitem</title>
</head>
<body>
    <header>
        <h1 class="admintitle font-effect-neon">GESTION DES ITEMS</h1>
    </header>
    <div class="admin">
        <div class="row">
            <div class="col-sm-6">
                <h2>
                    <strong> Vue sur l'item</strong>
                </h2>
                <br>
                <form action="">
                    <div class="form-group">
                        <label>Nom:</label><?php echo " ". $item['name']; ?>
                    </div>
                    <div class="form-group">
                        <label>Description:</label><?php echo " ". $item['description']; ?>
                    </div>
                    <div class="form-group">
                        <label>Prix:</label><?php echo " ". number_format((float)$item['price'],2,'. ',''); ?><strong>$</strong>
                    </div>
                    <div class="form-group">
                        <label>Category:</label><?php echo " ". $item['category']; ?>
                    </div>
                    <div class="form-group">
                        <label>Image:</label><?php echo " ". $item['image']; ?>
                    </div>
                    <div class="form-actions">
                        <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">

            </div> 
        </div>
    </div>
</body>
</html>