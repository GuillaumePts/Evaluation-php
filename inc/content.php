<div id="content">

<div id="categories">

   <?php

require('./inc/pdo.php');

$sql = "SELECT * FROM categories";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$categories = $query->fetchAll();

?>

<p>Categories</p>

<?php foreach($categories as $categorie){


echo '<a href='.'index.php?page=categories&amp;categorie='.$categorie['nom'].'>'.$categorie['nom'].'</a>';

 }?>
</div>

<?php 

$page = $_GET['page'] ?? "accueil";
autoInclude($page);
?>

</div>