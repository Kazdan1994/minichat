<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mini-chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    </head>
<body>
<div class="container">

    <!-- Header -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h1>Minichat en php</h1>
                <a class="brand" href="minichat_post.php">Rafraichir la liste des messages</a>
            </div>
        </div>
    </nav>

<div class="jumbotron">
    <form action="minichat_post.php" method="post">
        <div class="form-group">
            <label for="pseudo">Pseudo</label> :
            <!-- Retiens le pseudo de l'utilisateur -->
            <input type="text" name="pseudo" id="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>" />
        </div>
        <div class="form-group">
            <label for="message">Message</label> :
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="Envoyer" />
        </div>
    </form>
</div>

</div>

<?php
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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message, date_message FROM minichat ORDER BY id DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<div class="page-header"><div class="container"><p>Pseudo : <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong></p><p>Message : ' . htmlspecialchars($donnees['message']) . '</p><p>Date : ' . htmlspecialchars(dateFr($donnees['date_message'])) . '</p></div></div>';
}

$reponse->closeCursor();

/* Configure la date en français */
setlocale (LC_TIME, 'fr_FR','fra');
//Définit le décalage horaire par défaut de toutes les fonctions date/heure
date_default_timezone_set("Europe/Paris");
//Definit l'encodage interne
mb_internal_encoding("UTF-8");
//Convertir une date US en françcais
function dateFr($date){
    return strftime('%d-%m-%Y',strtotime($date));
}
?>
</body>
</html>
