<h2>categorie = <?php  echo $_GET['categorie'];?></h2>

<?php 



if(!empty($_GET['categorie'])){
    $lacategorie= $_GET['categorie'];

    $sql= "SELECT * FROM articles Where categorie = '$lacategorie'";
   
    global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$articles = $query->fetchAll();

?>

<p>Articles</p>

<?php

foreach($articles as $article){
    dump($article);
}

}