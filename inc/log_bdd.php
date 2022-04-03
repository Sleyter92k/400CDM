<?php
// 1-Variables de connexion à la BDD
$host = 'localhost';// le chemin vers le serveur de données
$database = '400cdm';// le nom de la BDD
$user = 'root';// le nom d'utilisateur pour se connecter
$psw = '';// mdp PC XAMPP

// Retourne une instance de PDO. La signature de la fonction getInstancePDO implique que l'objet doit être nécessairement de type PDO
// Sinon une erreur sera levée
$pdoLOG = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les warnings SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));
// 2- OUVERTURE DE SESSION
session_start();
// var_dump(get_class_methods($pdoLOG));


//4- UNE VARIABLE POUR LES MESSAGES
$contenu = '';