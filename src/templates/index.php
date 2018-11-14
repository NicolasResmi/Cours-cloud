<?php include "common/header.php" ?>

<!--__________________________________ -->

<div class="user_anthentification">
  <?php if (isset($_SESSION["Connecté"]) && $_SESSION["Connecté"] == true) { ?>
      <p><?php echo $_SESSION["pseudo"] ?></p>
      <a href="moncompte">Mon compte</a>
      ||
      <a href="panier">Panier</a>
      ||
      <a href="logout">Déconnexion</a>
  <?php } else { ?>
      <a href="login">Se connecter</a>
      ||
      <a href="create">Créer un compte</a>

  <?php } ?>
        ||
      <a href="admin">Admin</a>
</div>


<!--__________________________________ -->


<div id="transactions">
  <h4>Boissons alcoolisées</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["plats"] as $key => $value) { ?>
				<?php
				$image= $value["lien"];
				echo $value["nom"]."<div class='my_class'><img src='$image' />"."Le prix est de: ".$value["prix"]."€</div>"; 
			?>  <a href="/articles?id=<?php echo $value["id"] ?>&nom=<?php echo $value["nom"] ?>&prix=<?php echo $value["prix"] ?>" class="cb-delete">Ajouter au panier</a>    <?php } ?>
			
    </div>
  </div>
</div>

<?php include "common/footer.php" ?>