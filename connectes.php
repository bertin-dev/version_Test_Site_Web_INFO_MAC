<?php

     
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=info_mac', 'root', '');
	
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

   

   $compte = $bdd->query('SELECT COUNT(*) AS nbrEntre FROM connectes WHERE ip=\''.$_SERVER['REMOTE_ADDR']. '\'');
   $donneTAB = $compte->fetch();
   if($donneTAB['nbrEntre'] == 0)
   {
	   $req = $bdd->prepare('INSERT INTO connectes (ip, timestamp) VALUES(?, ?)');
	   $req->execute(array($_SERVER['REMOTE_ADDR'], time()));
   }

   else
   {
	  $miseAjour = $bdd->prepare('UPDATE connectes SET timestamp = :nvTimestamp WHERE ip='.$_SERVER['REMOTE_ADDR']);
	  $miseAjour->execute(array('nvTimestamp' => time()));
   }	   

//supression des adresses ip ayant fait plus de 5 minutes d'inactivites

      $timestemps_5mim = time() - (5*60);
	  $suppression = $bdd->prepare('DELETE FROM connectes WHERE timestamp <' .$timestemps_5mim);


?>