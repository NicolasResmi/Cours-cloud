<?php include "common/header.php" ?>

<p>Page mon compte</p>
<div class="cb">
<?php foreach($data["paiements"] as $key => $value) 
    if ($value["pseudo"] == $_SESSION["pseudo"]){ ?>
    <div class="cb-border">
        <p>Votre carte : <?php echo $value["card"] ?></p>
        <p>Expire le : <?php echo $value["expityMonth"] ?> / <?php echo $value["expityYear"]?></p>
        <a href="/moncompte/delete?id=<?php echo $value["id"] ?>" class="cb-delete">Supprimer</a>
    </div>  
    <?php }
?>
</div>

<p class="cb-add"><a href="/paiement">Cliquez ici pour ajouter une carte</a></p>

<p>Vos précédents achats:</p>
<?php foreach($data["panier"] as $key => $value) 
    if (($value["pseudo"] == $_SESSION["pseudo"]) && ($value["etat"] == 1)){ ?>
    <div class="cb-border">
        <p>Votre produit: <?php echo $value["nomproduit"] ?></p>
        <p>Prix : <?php echo $value["prix"] ?>€</p>
	</div>
	
    <?php }?>

<?php include "common/footer.php" ?>
