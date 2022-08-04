<h2>Acceuil</h2>

<h3>Articles à la une</h3>
<?php 

$sql = "SELECT * FROM articles WHERE status = 'visible' ORDER BY created_at DESC ";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$articlesacc = $query->fetchAll();

dump($articlesacc[0]);
dump($articlesacc[1]);
dump($articlesacc[2]);
dump($articlesacc[3]);
// foreach($articlesacc as $value){
    
// }


// for ($i=0; $i < 4 ; $i++) { 
//    dump($value);
// }