<?php
    require 'database.php';
    if (!empty($_GET['iditem'])) {
        $iditem = checkInput($_GET['iditem']);
    }
    function checkInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>