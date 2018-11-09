<?php


// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php'; // Charger le fichier de configuration 
require APPLICATION_PATH . '/config.php'; // Charger le fichier de configuration
// require APPLICATION_PATH . '/vendor/autoload.php';

use Lib\Client;

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

// Page d'accueil
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin$',
    'GET'   => array('AdminController', 'index') // Classe IndexController, Méthode index
));



$router->addRoute(array(
    'route'  => '^/admin/plats$',
    'GET'   => array('AdminPlatController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/plats/add$',
    'ALL'   => array('AdminPlatController', 'add') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/plats/update$',
    'ALL'   => array('AdminPlatController', 'update') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/plat$',
    'ALL'   => array('PlatController', 'get') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/checkout',
    'ALL'   => array('PlatController', 'checkout') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/payment',
    'ALL'   => array('PlatController', 'payment') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/commandes$',
    'GET'   => array('AdminCommandeController', 'index') // Classe IndexController, Méthode index
));

// Newsletter
$router->addRoute(array(
    'route'  => '^/admin/newsletters$',
    'GET'   => array('NewsletterController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/newsletters/update$',
    'ALL'   => array('NewsletterController', 'update') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => 'admin/newsletters/delete$',
    'ALL' => array('NewsletterController', 'delete')
));

// Paiement
$router->addRoute(array(
    'route' => '^/admin/paiement$',
    'GET' => array('PaiementController', 'index')
));

$router->addRoute(array(
    'route' => 'admin/paiement/update$',
    'ALL' => array('PaiementController', 'update')
));

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'GET'   => array('AdminController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'POST'   => array('AdminController', 'loginPost') // Classe MembreController, Méthode loginPost
));

// Déconnexion de l'espace membre
$router->addRoute(array(
    'route'  => '^/admin/logout$',
    'GET'   => array('AdminController', 'logout')
));

// Afficher l'inscription
$router->addRoute(array(
    'route'  => '^/inscription$',
    'GET'   => array('InscriptionController', 'afficher')
));

// Sauvegarder l'inscription
$router->addRoute(array(
    'route'  => '^/inscription$',
    'POST'   => array('InscriptionController', 'sauvegarder')
));

// Afficher formulaire de paiement
$router->addRoute(array(
    'route'  => '^/paiement$',
    'GET'   => array('PaiementController', 'payer')
));

/* Paiement confirmer
$router->addRoute(array(
    'route'  => '^/paiement/confirmed$',
    'GET'   => array('PaiementController', 'confirmed')
)); */

// Afficher le formulaire paiement
$router->addRoute(array(
    'route'  => '^/paiement$',
    'POST'   => array('PaiementController', 'confirmation')
));

// Newsletter
$router->addRoute(array(
    'route' => '^/newsletter$',
    'GET' => array('NewsletterController', 'afficher')
));

$router->addRoute(array(
    'route' => '^/newsletter$',
    'POST' => array('NewsletterController', 'abonnee')
));



$router->addRoute(array(
    'route'  => '^/admin/users$',
    'GET'   => array('AdminUserController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users/add$',
    'ALL'   => array('AdminUserController', 'add') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/users/update$',
    'ALL'   => array('AdminUserController', 'update') // Classe IndexController, Méthode index
));

// ___________________________________
// ___________________________________
// ___________________________________



$router->addRoute(array(
    'route'  => '^/create$',
    'GET'   => array('UserController', 'inscription') // Classe IndexController, Méthode index
));

// Paiement confirmer
$router->addRoute(array(
    'route'  => '^/create$', // /confirmed
    'POST'   => array('UserController', 'confirmation')
));

$router->addRoute(array(
    'route'  => '^/login$',
    'GET'   => array('ConnectController', 'loginUser') // Classe IndexController, Méthode index
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/login$',
    'POST'   => array('ConnectController', 'loginPostUser') // Classe MembreController, Méthode loginPost
));

$router->addRoute(array(
    'route'  => '^/logout$',
    'GET'   => array('UserController', 'logoutUser') // Classe MembreController, Méthode loginPost
));

$router->addRoute(array(
    'route' => '^/moncompte$',
    'GET' => array('UserController', 'account')
));

$router->addRoute(array(
    'route' => '/moncompte/delete$',
    'ALL' => array('UserController', 'delete')
));

// $router->addRoute(array(
//     'route' => '^/moncompte$',
//     'GET' => array('UserController', 'cb')
// ));

// ___________________________________
// ADLEY
// ___________________________________
// ___________________________________

$router->addRoute(array(
    'route'  => '^/admin/administrateurs$',
    'GET'   => array('AdminUserController', 'listAdmin') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/administrateurs/update$',
    'ALL'   => array('AdminUserController', 'updateAdmin') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/administrateurs/add$',
    'ALL'   => array('AdminUserController', 'addAdmin') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => '/admin/plats/delete$',
    'ALL' => array('AdminPlatController', 'delete')
));


// ____________________________________
// MATHIEU
// ____________________________________
// ____________________________________

$router->addRoute(array(
    'route' => '/panier$',
    'GET' => array('UserController', 'afficher')
));

$router->addRoute(array(
    'route' => '/articles$',
    'ALL' => array('UserController', 'addArticle')
));

$router->addRoute(array(
    'route' => '/articles/delete$',
    'ALL' => array('UserController', 'suppPanier')
));

$router->addRoute(array(
    'route' => '/articles/buy$',
    'ALL' => array('UserController', 'buyPanier')
));

$router->addRoute(array(
    'route' => '/moncompte$',
    'GET' => array('UserController', 'afficherPanier')
));

$router->run();