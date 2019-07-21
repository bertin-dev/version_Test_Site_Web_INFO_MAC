<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gestion des inscrits</title>
<style type="text/css">
.centrerdanscase {
	text-align: center;
}
.titrecentrer {
	font-size: 30px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<?php
require "../secret/config.php";
?>


<body background="../../images/arriereplan.png">
<p class="titrecentrer">Gestion des Inscrits </p>
<table border="5" class="tableadmin">
  <?php
 
//connexion au serveur:
$cnx = mysql_connect("$dbhost", "$dbuser", "$dbpass");
//sélection de la base de données:
$db= mysql_select_db("$db");
//création de la requête SQL:
$sql = "SELECT * FROM Comptes_Utilisateurs ORDER BY Nom_Propre";
//exécution de notre requête SQL:
$requete = mysql_query( $sql, $cnx ) ;
?>
<form action="modif.php" method="post">
         <tr> 
          <td class="centrerdanscase">ID</td>
          <td class="centrerdanscase">Nom</td>     
          <td class="centrerdanscase">Prénom</td>
           <td class="centrerdanscase">Surnom</td>
           <td class="centrerdanscase">Mail</td>
           <td class="centrerdanscase">Date d'Inscription</td>
           <td class="centrerdanscase">Compte Activé?</td>
           <td class="centrerdanscase">Dernière Connexion</td>
           <td class="centrerdanscase">Supprimer?</td>
           <td class="centrerdanscase">Modifier?</td>
         </tr>
        
         <?php
     while( $result = mysql_fetch_object($requete ) )
       { 
        ?>
        
<?php 
$Date_Inscription=$result->Date_Inscription;
$convertisseur1='Le '.date('d/m/Y', $Date_Inscription).' &agrave; '.date('H:i:s', $Date_Inscription);
$Date_Connexion=$result->Date_Connexion;
$convertisseur2='Le '.date('d/m/Y', $Date_Connexion).' &agrave; '.date('H:i:s', $Date_Connexion);
?>
        <tr>
          <td class="centrerdanscase"> <?php echo($result->ID_Utilisateur);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Nom_Propre);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Prenom);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Nom_Utilisateur);?>      </td>
          <td class="centrerdanscase"> <?php echo($result->Adresse_Email);?> </td>
          <td class="centrerdanscase"> <?php echo($convertisseur1);?>     </td>
          <td class="centrerdanscase"> <?php echo($result->Compte_Active);?>       </td>
          <td class="centrerdanscase"> <?php echo($convertisseur2);?>      </td>
          <td class="centrerdanscase"> <a href="<?php echo"supp2.php?idPersonne=".$result->id.""?>"><img src="images/icon-supprimer.jpg" alt="Supp" width="30" height="30"  style="border:0;"></a></td>
          <td class="centrerdanscase"> <a href="<?php echo"modif2.php?idPersonne=".$result->ID_Utilisateur.""?>"><img src="images/icon-modifier.png" alt="Edit" width="30" height="30"  style="border:0;"></a></td>
         
        </tr>
    </form>
<?php
       }  
mysql_free_result ($requete);

?> 
</table>
</body>
</html>