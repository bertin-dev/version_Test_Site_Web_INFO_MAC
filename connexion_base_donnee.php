<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=info_mac', 'root', '');	
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>