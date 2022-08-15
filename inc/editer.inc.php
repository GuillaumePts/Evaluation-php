<?php

$id = $_GET['id'];

$sql = "SELECT * FROM articles WHERE id_articles=$id";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$articleedit = $query->fetchAll();

include ('frmeditadmin.php');

if (isset($_POST['frmeditadmin'])){
    $titre =$_POST['titre'];
    $description =$_POST['description'];
    $contenu =$_POST['contenu'];
    $status=$_POST['status'];
    $categorie=$_POST['categorie'];
    $idarticle=$_POST['idarticle'];
   
    dump($titre);
    dump($idarticle);

    $sql2="UPDATE articles SET titre = $titre, description =  $description, contenu = $contenu, status = $status, categorie` = $categorie WHERE id_articles = $idarticle ";
    global $pdo;
    $query = $pdo->prepare($sql2);
$query->execute();
// echo "<script>window.location.replace('http://localhost/evaluation-php/index.php?page=listearticle')</script>";
}