<?php
session_start();
echo "ID : ".session_id()."<br>";
echo "Bonjour ".$_SESSION['nom']." (".$_SESSION['mail'].")<br>";
echo "Ta première connexion était le ".$_SESSION['date']."<br>";
?>

<a href="<?php echo $_SESSION['site']; ?>">Cliquer pour ouvrir votre site préféré</a>