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

<?php foreach($categories as $categorie){?>


<a href="index.php?page=categories"><?=$categorie['nom']?></a>

<?php } ;?>
</div>

<?php 

$page = $_GET['page'] ?? "accueil";
autoInclude($page);
?>

</div>