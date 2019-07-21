<?php
session_start();
//on doit deconnecter le visiteur sil clic sur le lien deconnexion
	unset($_SESSION['pseudo'],$_SESSION['mtp']);
header('location: index.php');
?>