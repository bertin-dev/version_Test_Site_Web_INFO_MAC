<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modifications effectu&eacute;es</title>
<style type="text/css">
.grossirtext {
	font-size: 24px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<?php
require "../secret/config.php";
?>


<span class="grossirtext">
  <span class="grossirtext">
<?php
//connexion au serveur:
$cnx = mysql_connect("$dbhost", "$dbuser", "$dbpass");
//s�lection de la base de donn�es:
$db= mysql_select_db("$db");

     $ID_Utilisateur = $_POST['ID_Utilisateur'];
	 $Nom_Propre = $_POST['Nom_Propre'];
	 $Prenom = $_POST['Prenom'];
    $Nom_Utilisateur = $_POST['Nom_Utilisateur'];
    $Adresse_Email = $_POST['Adresse_Email'];
    $Date_Inscription = $_POST['Date_Inscription'];
    $Compte_Active = $_POST['Compte_Active'];
    $Date_Connexion = $_POST['Date_Connexion'];
    
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE Comptes_Utilisateurs
            SET ID_Utilisateur='$ID_Utilisateur', Nom_Propre='$Nom_Propre', `Prenom` = '$Prenom', Nom_Utilisateur='$Nom_Utilisateur', Adresse_Email='$Adresse_Email', Date_Inscription='$Date_Inscription', Compte_Active='$Compte_Active', Date_Connexion='$Date_Connexion'
		  
           WHERE ID_Utilisateur = '$ID_Utilisateur' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
    echo("Donn�es Modifi�es") ;
  }
  else
  {
    echo("La modification � �chou�e") ;
  }
?>
</p>
  </span></span>
<p><span class="grossirtext"><span class="grossirtext"><a href="modif.php"><img src="images/icon-ok.png" alt="ok" width="70" height="70" hspace="45" /></a></span></span><br><br>

</p>
</body>
</html>