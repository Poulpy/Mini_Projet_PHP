<?php

require_once("config.php");
require_once($fichiersInclude.'head.php');

if (!estConnecte()) {
    header('Location: index.php');
    exit;
}

?>




<?php

require_once($fichiersInclude.'footer.php'); 

?>