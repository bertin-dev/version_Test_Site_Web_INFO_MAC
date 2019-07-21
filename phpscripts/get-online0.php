<?php
session_start();
include('functions.php');
$db = db_connect();
// On vérifie que l'utilisateur est inscrit dans la base de données
$req0=$db->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req0->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt0=$req0->fetch();
$query = $db->prepare("
	SELECT *
	FROM chat_online
	WHERE online_user = :user 
");
$query->execute(array(
	'user' => $rslt0['id']
));
// On compte le nombre d'entrées
$count = $query->rowCount();
$data = $query->fetch();

	/* si l'utilisateur n'est pas inscrit dans la BDD, on l'ajoute, sinon
	on modifie la date de sa derniere actualisation */
	if($count == 0) {
		$insert = $db->prepare('
			INSERT INTO chat_online (online_id, online_ip, online_user, online_status, online_time) 
			VALUES(:id, :ip, :user, :status, :time)
		');
		$insert->execute(array(
			'id' => '',
			'ip' => $_SERVER["REMOTE_ADDR"],
			'user' => $rslt0['id'],
			'status' => '2',
			'time' => time()
		));
	} else {
		$update = $db->prepare('UPDATE chat_online SET online_time = :time WHERE online_user = :user');
		$update->execute(array(
			'time' => time(),
			'user' => $rslt0['id']
		));
	}


$query->closeCursor();
// On supprime les membres qui ne sont pas sur le chat,
// donc qui n'ont pas actualisé automatiquement ce fichier récemment
$time_out = time()-5;
$delete = $db->prepare('DELETE FROM chat_online WHERE online_time < :time');
$delete->execute(array(
	'time' => $time_out
));

// Récupère les membres en ligne sur le chat
// et retourne une liste
$query = $db->prepare("
	SELECT online_id, online_id, online_user, online_status, online_time, id, pseudo,avatars
	FROM chat_online 
	LEFT JOIN inscription ON inscription.id = chat_online.online_user
	WHERE online_status=:online_status	
	ORDER BY pseudo
");
$query->execute(array(
	'online_status' =>2
));
// On compte le nombre de membre
$count = $query->rowCount();
/* Si au moins un membre est connecté, on l'affiche.
Sinon, on affiche un message indiquant que personne n'est connecté */
if($count != 0) {
		$i = 0;
while($data = $query->fetch())
{
	if($data['online_status'] == '0') {
			$status = 'inactive';
		} elseif($data['online_status'] == '1') {
			$status = 'busy';
		} elseif($data['online_status'] == '2') {
			$status = 'active';
		}
	// On enregistre dans la colonne [status] du tableau
		// le statut du membre : busy, active ou inactive (occupé, en ligne, absent)
		$infos["status"] = $status;
		// Et on enregistre dans la colonne [login] le pseudo
		$infos["login"] = $data['pseudo'];
		
		// Enfin on enregistre le tableau des infos de CE MEMBRE
		// dans la [i ème] colonne du tableau des comptes 
		$accounts[$i] = $infos;
		$i++;
	//on compte le nombre de membres en ligne
$req01=$db->prepare('SELECT count(*) As nbrs_connecte FROM chat_online WHERE online_status=:online_status');
$req01->execute(array('online_status' =>2));
$rslt01=$req01->fetch();	
?>
<script>
	function test(test)
	{
	window.document.formulaire.message.value += '' + test + ' ';
	document.getElementById('message').focus();
	}
</script>
<a href="#" align="left" >En ligne (<?php echo $rslt01['nbrs_connecte'];?>)</a>
<div align="left" style="display:none;" class="line">
<a href="#" title="En ligne"  style="color:rgba(0,74,148,0.8);text-decoration:none;font-weight:bold;" onclick="javascript:test('[g][color=green]<?php echo $data['pseudo'];?> => [/color][/g]');return(false)">
	<img src="<?php echo $data['avatars'] ?>" height="50px" width="50px" class="img-rounded"> @<?php echo $data['pseudo'] ?> 
</a>
</div>
<?php
}
} else {
	// Il y a une erreur, aucun membre dans la liste
	echo "attention";
}

$query->closeCursor();

?>
<script src="jquery.js"></script>
<script>
$(function(){
	
});
</script>