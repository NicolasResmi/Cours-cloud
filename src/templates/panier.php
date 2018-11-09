<?php include "common/header.php" ?>

<?php foreach($data["panier"] as $key => $value) 
    if (($value["pseudo"] == $_SESSION["pseudo"]) && ($value["etat"] == 1)){ ?>
    <div class="cb-border">
        <p>Votre produit: <?php echo $value["nomproduit"] ?></p>
        <p>Prix : <?php echo $value["prix"] ?>€</p>
        <a href="/articles/delete?id=<?php echo $value["id"] ?>" class="cb-delete">Supprimer</a>
        <a href="/articles/buy?id=<?php echo $value["id"] ?>&etat=2" class="cb-delete">Acheter</a>
	</div>
	
    <?php }?>

<?php include "common/footer.php" ?>