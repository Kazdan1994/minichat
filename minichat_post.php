<?php
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie

// Connexion à la base de données
try
{
    //VARIABLES
    $host = 'localhost';
    $dbname = 'minichat';
    $charset = 'utf8';
    $user = 'root';
    $password = '';

    // Objet $bdd de la classe PDO pour se connecter à la bdd
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=' . $charset, $user, $password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
