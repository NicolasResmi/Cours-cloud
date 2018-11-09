<?php include "common/header.php" ?>



  
<div id="transactions">
  <h4>Alcoolo anonyme - Paiement </h4>
  <hr>
  <form id="frm_newsletter" method="post" action="">

<fieldset>
    <legend>Inscription à notre newsletter</legend>

    <?php if (!empty($message)): ?>
    <p>
        <?php echo $message; ?>
    </p>
    <?php endif; ?>

    <div>
        <label for="email">Votre adresse email</label>
        <input id="email" name="email" type="text" value="" />
    </div>
    
    <div>
        <label for="object">Objet</label>
        <select id="object" name="object">
            <option value="subscribe">Inscription</option>
            <option value="unsubscribe">Désinscription</option>
        </select>
    </div>

    <div>                       
        <input class="button large" type="submit" name="subscribe_submit" value="Envoyer" />
    </div>

</fieldset>

</form>

</div>
<?php include "common/footer.php" ?>