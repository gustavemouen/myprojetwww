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
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="admintitle font-effect-neon">GESTION DES ITEMS</h1>
    </header>
    <div class="admin">
    <div class="row">
        <h2><strong>Liste des Items</strong>
            <a href="insert.php"class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus"></span> Ajouter
            </a>
        </h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require 'database.php';
                    $db = Database::connect();
                    $statement = $db->query("SELECT items.iditem, items.name, items.description, items.price, catgory.name 
                                             AS category FROM items 
                                             LEFT JOIN catgory ON items.category = catgory.idcategory 
                                             ORDER BY items.iditem DESC");
                    while($item = $statement->fetch()){
                        echo"<tr>
                                <td>". $item['name']."</td>
                                <td>". $item['description']."</td>
                                <td>". number_format((float)$item['price'],2,'. ','')." $</td>
                                <td>". $item['category']."</td>
                                <td width='300px'>
                                    <a href='view.php?id=". $item['iditem']."' class='btn btn-default'>
                                        <span class='glyphicon glyphicon-eye-open'></span> voir
                                    </a>
                                    <a href='update.php?id=". $item['iditem']."' class='btn btn-primary'>
                                        <span class='glyphicon glyphicon-pencil'></span> modifier
                                    </a>
                                    <a href='delete.php?id=". $item['iditem']."' class='btn btn-danger'>
                                        <span class='glyphicon glyphicon-remove'></span> supprimer
                                    </a>
                                </td>
                            </tr>";                  
                    }
                    Database::disconnect();
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>