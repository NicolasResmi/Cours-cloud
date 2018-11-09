<?php include "common/header.php" ?>


<div style="margin-top:30px">

<div class="col-md-4"></div>

<div class="col-md-4">
<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Utilisateur</h3>
    </div>
    <div class="panel-body">
        <form role="form" method="post">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Pseudo" name="pseudo" type="text" autofocus="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-sm btn-success">Login</button>
            </fieldset>
        </form>
    </div>
</div>
</div>

<div class="col-md-4"></div>

<?php include "common/footer.php" ?>
