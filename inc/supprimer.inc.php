<?php

$id = $_GET['id'];

// dump($id);

$sql = "DELETE FROM articles WHERE `articles`.`id_articles` = $id";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
echo "<script>window.location.replace('http://localhost/evaluation-php/index.php?page=listearticle')</script>";