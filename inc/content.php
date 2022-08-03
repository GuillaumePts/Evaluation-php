<div id="content">

<div id="categories">
    <p>Catégories</p>
    <a href="">A</a>
    <a href="">B</a>
    <a href="">C</a>
    <a href="">D</a>
    <a href="">E</a>
</div>

<?php

$page = $_GET['page'] ?? "accueil";
autoInclude($page);
?>

</div>