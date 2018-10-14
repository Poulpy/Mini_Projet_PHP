<?php

require_once("config.php");
require_once($fichiersInclude.'head.php');

if (!estConnecte() OR $_SESSION['role'] != "professeur") { #Si on arrive sur cette page alors que l'on est pas connecté / ou que l'on n'est pas un professeur
    header('Location: index.php'); #On redirige vers la page de connexion
    exit;
}

require_once($fichiersInclude.'footer.php'); 

?>