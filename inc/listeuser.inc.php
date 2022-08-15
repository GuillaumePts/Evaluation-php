<h2>liste des users</h2>
<?php


$sql = "SELECT * FROM users ORDER BY id_users DESC ";
global $pdo;
$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchAll();


dump($users);
