<?php


$path = "../../../config.php";
include_once($path);

    $database = new PDO ('mysql:host='.$host.';dbname='.$dbname,$dbuser,$dbpassword);

?>