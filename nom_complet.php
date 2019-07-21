<?php
session_start();
include('connexion_base_donnee.php');
$req001=$bdd->prepare('SELECT * FROM membres WHERE pseudo=:pseudo');
$req001->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt001=$req001->fetch();
?>	
<a href="#"><?php echo $rslt001['nom_complet'];?></a>