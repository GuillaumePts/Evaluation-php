<form action="index.php?page=editer" method="post">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" value="<?=$articleedit[0]['titre'];?>" />
    </div>
    <div>
        <label for="description">Déscription :</label>
        <input type="text" id="description" name="description" value="<?=$articleedit[0]['description'];?>" />
    </div>
    <div>
        <label for="contenu">contenu :</label>
       <textarea name="contenu" id="contenu" cols="30" rows="10"><?=$articleedit[0]['contenu'];?></textarea>
    </div>
    <div>etat :
   <select name="status" id="status" >
 
    <option >visible</option>
    <option>notvisible</option>
   </select>
   </div>
   <div>
        <label for="categorie">categorie :</label>
        <input type="text" id="categorie" name="categorie" value="<?=$articleedit[0]['categorie'];?>"/>
    </div>
    <div>
    <input type="submit" value="Confirmer" />
    </div>
   <input type="hidden" name="idarticle" value="<?=$articleedit[0]['id_articles'];?>">
    <input type="hidden" name="frmeditadmin" />
</form>