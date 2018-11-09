<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>Deliveroo - Admin</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/litera/bootstrap.css" crossorigin="anonymous">


  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <style>
    body {
      font-family: "Open Sans";
      position: absolute;
      width: 100%;
      height: 100%;
      color: #151515;
      padding: 15px;
    }

    .content {
      margin-top: 90px;
    }

    a {
      text-decoration: none!important;
    }

    * {
      outline: none!important;
    }

    form {
      margin-bottom:100px
    }
  </style>
<body>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <nav style="width: 100%;" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Back office</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="/admin/users">Utilisateurs</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/plats">Boissons</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/commandes">Commandes</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/newsletters">Newsletter</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/paiement">Paiements</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/logout" target="_blank">Déconnexion</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/administrateurs">Administrateurs</a></li>
        </ul>
      </div>
    </nav>

    </div>
  </div>
</div>