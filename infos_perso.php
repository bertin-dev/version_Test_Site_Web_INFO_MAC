<?php
session_start();
include('connexion_base_donnee.php');
$req001=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req001->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt001=$req001->fetch();
?>				
			<h3 class="media-heading" style=";">#<?php echo $rslt001['nom'];?></h3>
				<div style="background-color:rgba(0,0,0,0.1); font-size:1.1em;margin-top:0.3em;border-left:5px solid rgba(245,76,16,1);padding:0.5em;border-radius:5px;">	
					<div style="margin-top:em;"><b>Nom complet : </b><span style="color:grey;font-weight:bold;"><i> <?php echo  $rslt001['nom'];?></i></span></div>
					<div style="margin-top:0.3em;"><b style=""> Pseudonyme : </b> <span style="color:rgba(0,74,148,1);font-weight:bold;">@<?php echo  $rslt001['pseudo'];?></span></div>
					
					<div style="margin-top:0.3em;"><b> Email : </b> <span style="color:grey;font-weight:bold;"><?php echo  $rslt001['email'];?></span></div>
					<div style="margin-top:0.3em;"><b> Perenom : </b> <span style="color:grey;font-weight:bold;"><?php echo  $rslt001['prenom'];?></span></div>
					<div id="rslt"></div>
				</div>	