<form action="index.php?page=inscription" method="post">
    <div>
        <label for="designation">Designation :</label>
        <input type="text" id="designation" name="designation" value="<?=$designation?>" />
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" id="description" name="description" value="<?=$description?>" />
    </div>
    <div>
        <label for="puht">Puht</label>
        <input type="text" id="puht" name="puht" value="<?=$puht?>" />
    </div>
    <div>
        <label for="reference">Reference</label>
        <input type="reference" id="reference" name="reference" />
    </div>
    <div>
        <label for="qtestock">qtestock</label>
        <input type="qtestock" id="qtestock" name="qtestock" />
    </div>
    <div>
        <label for="qtestockesecu">qtestockesecu</label>
        <input type="qtestockesecu" id="qtestockesecu" name="qtestockesecu" />
    </div>
    <div>
        <label for="masse">Masse</label>
        <input type="masse" id="masse" name="masse" />
    </div>
    
    <div>
        <input type="checkbox" name="cgu" id="cgu" value="1"<?=isset($_POST['cgu'])?"checked":'';?> /><label for="cgu" >J'accepte les <a href="index.php?page=cgu" target="_blank">Conditions Générales d'Utilisation</a></label>
    </div>
    <div>
    <input type="submit" name="submitted" value="modifier">
        <input  type="submit" value="Supprimer" />
    </div>


    <input type="hidden" name="frmInscription" />
</form>