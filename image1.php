<?php
session_start();
include('connexion_base_donnee.php');
$req001=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req001->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt001=$req001->fetch();
?>	
<a class="pull-left" href="#">
				
				<img src="<?php echo $rslt001['avatars'];?>" class="img-rounded" width="100px" height="100px" align="">
				 
</a>