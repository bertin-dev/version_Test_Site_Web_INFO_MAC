<?php
extract($_POST);

include('connexion_base_donnee.php');	
$req0=$bdd->prepare('SELECT * FROM cours WHERE id_cours=:id_cours')
$req0->execute(array('id_cours'=>$_GET['file']));
$rslt0=$req0->fetch();



$update = $bdd->prepare('UPDATE cours SET compteur = :compteur id_cours = :id_cours');
$update->execute(array(
'compteur' => $rslt0['compteur']+1,	
'id_cours' => $_GET['file']
));
	
?>	