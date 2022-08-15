<h2>liste tout les articles</h2>

<?php


$sql = "SELECT * FROM articles ORDER BY created_at DESC ";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$articles = $query->fetchAll();


// dump($articles);

foreach($articles as $article){
    
    ?>

<div style="display:flex; width:100%; justify-content: space-around; align-items:center ; margin: 20px auto;">
<p><?= $article['titre'];?></p>
<p><?= $article['description'];?></p>
<p><?= $article['contenu'];?></p>
<p><?= $article['created_at'];?></p>
<p><?= $article['status'];?></p>
<p><?= $article['notes'];?></p>
<p><?= $article['categorie'];?></p>

<?php
echo '<a href='.'index.php?page=supprimer&amp;id='.$article['id_articles'].'>supprimer</a>';
echo '<a href='.'index.php?page=editer&amp;id='.$article['id_articles'].'>editer</a>';

?>
</div>

<?php }