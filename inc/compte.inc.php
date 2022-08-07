<h2>mon compte</h2>

<?php


// dump($_SESSION);
?>

<div id="compte">
    <div class="flexcompte">
    <p style="color:blue">Nom :</p>
    <i><?=$_SESSION['nom'];?></i>
    <a href="index.php?page=edit&amp;edit=nom">Editer ✏️ </a>
    </div>

    <div class="flexcompte">
    <p style="color:blue">Prenom :</p>
    <i><?=$_SESSION['prenom'];?></i>
    <a href="index.php?page=edit&amp;edit=prenom">Editer ✏️ </a>
    </div>

<div class="flexcompte">
    <p style="color:blue">echelon : </p>
    <i><?=$_SESSION['roles'];?></i>
   
    </div>

    <div class="flexcompte">
    <p style="color:blue">email :</p>
    <i><?=$_SESSION['email'];?></i>
    <a href="index.php?page=edit&amp;edit=email">Editer ✏️ </a>
    </div>

    <div class="flexcompte">
    <p style="color:blue">mobile :</p>
    <i><?=$_SESSION['mobile'];?></i>
    <a href="index.php?page=edit&amp;edit=mobile">Editer ✏️ </a>
    </div>

    <div class="flexcompte">
    <p style="color:blue">pseudo :</p>
    <i><?=$_SESSION['pseudo'];?></i>
    <a href="index.php?page=edit&amp;edit=pseudo">Editer ✏️ </a>
    </div>


<div class="flexcompte">
    <p style="color:blue">avatar :</p>
    <i><?=$_SESSION['avatar'];?></i>
    <a href="index.php?page=edit&amp;edit=avatar">Editer ✏️ </a>
    </div>


<div class="flexcompte">
    <p style="color:blue">mdp : </p>
    <i>**************</i>
    <a href="index.php?page=edit&amp;edit=mdp">Editer ✏️ </a>
    </div>

</div>