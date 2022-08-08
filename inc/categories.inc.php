

<?php 
$lacategorie = $_GET['categorie'];
$sqlverif = "SELECT * FROM categories WHERE nom ='$lacategorie' ";

global $pdo;
 $query = $pdo->prepare($sqlverif);
 $query->execute();
 $verif = $query->fetchAll();

 if(empty($verif)){
    echo '<p>Cette categorie n\'éxiste pas </p>';
 }else{

echo '<h1>'.$lacategorie.'</h1>';
echo '<h2>Articles</h2>';

    $sql= "SELECT * FROM articles Where categorie = '$lacategorie' AND status = 'visible' ";
   
         global $pdo;
     $query = $pdo->prepare($sql);
     $query->execute();
     $articles = $query->fetchAll();

     if(empty($articles)){
        echo '<p>Aucuns articles dans cette categorie </p> ';
     }else{
      echo $html = '<div id ='.'articles'.'>';
        foreach($articles as $article){
           ?>

<div class="article">
<h3><?= $article['titre'];?></h3>
<h4><?= $article['description'];?></h4>
<p><?= $article['contenu'];?></p>
</div>

<div class="finArticle">
   <ul>
      <li><p class="notes">note : <?= $article['notes'];?></p></li>
      <li><p> écrit le <?= $article['created_at'];?></p></li>
      <li><a href="index.php?page=article">Commenter</a></li>
   </ul>
</div>

           <?php
        }
        echo $html .= '</div>';
     }

      
 }






