

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
            dump($article);
        }
        echo $html .= '</div>';
     }

      
 }






