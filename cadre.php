<div style="background-color:rgba();">
<div class="well well-small" style="background-image:url('arriereentete2.jpg');font-weight:bold;">
<?php
include('connexion_base_donnee.php');
$req001=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req001->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt001=$req001->fetch();
?>
<h4 align="center" style="margin-top:em;"><img src="<?php echo $rslt001['avatars'];?>" class="img-circle"></h4>
<ul class="nav nav-tabs nav-stacked">
	<li class="active"><a href="#" style="text-align:center;"><?php echo $rslt001['prenom'].' '.$rslt001['nom'];?></a></li>
	<li id="users"></li>
	<li><a href="index.php">Accueil</a></li>
	<li><a href="modifier_profil.php">Modifier profil</a></li>
	<li><a href="deconnexion.php">Déconnexion</a></li>
	
  </ul>
</div>

</div>
<script src="jquery.js"></script>
<script>
$(function(){
function getonline(){
				$('#users').load('phpscripts/get-online0.php', function() {
				
      });
}
setInterval(getonline, 3000);

});
</script>