<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
    <title>Suppression de l'Inscrit</title>
  <style type="text/css">
  .titresupp {
	font-size: 30px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;
}
  .tableadmin {
	text-align: center;
}
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
  
  <?php
require "../secret/config.php";
?>
  
<p class="titresupp"><img src="images/attention.jpg" width="100" height="100" alt="" /></p>
<p class="titresupp">Supprimer cet inscrit?? </p>
<table border="5" class="tableadmin">
   <?php
//connexion au serveur:
$cnx = mysql_connect("$dbhost", "$dbuser", "$dbpass");
//s�lection de la base de donn�es:
$db= mysql_select_db("$db");

  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $ID_Utilisateur  = $_GET["idPersonne"] ;
 
  //requ�te SQL:
  $sql = "SELECT * FROM Comptes_Utilisateurs WHERE ID_Utilisateur = ".$ID_Utilisateur ;
 
  //ex�cution de la requ�te:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des donn�es:
  if( $result = mysql_fetch_object( $requete ) );
  {
  ?>


<form name="insertion" action="supp3.php" method="POST">
  <input type="hidden" name="ID_Utilisateur" value="<?php echo($ID_Utilisateur) ;?>">
  <tr> 
          <td class="tableadmin"><span class="centrerdanscase">ID</span></td> 
          <td class="tableadmin"><span class="centrerdanscase">Nom</span></td>      
          <td class="centrerdanscase"><span class="centrerdanscase">Pr�nom</span></td>
           <td class="centrerdanscase"><span class="centrerdanscase">Surnom</span></td>
           <td class="centrerdanscase"><span class="centrerdanscase">Mail</span></td>
           <td class="centrerdanscase"><span class="centrerdanscase">Date d'Inscription</span></td>
           <td class="centrerdanscase"><span class="centrerdanscase">Compte Activ�?</span></td>
           <td class="centrerdanscase"><span class="centrerdanscase">Derni�re Connexion</span></td>
           <td class="centrerdanscase">Supprimer</td>
</tr>
        
       

        <tr>
         <td class="tableadmin"> <?php echo($result->ID_Utilisateur);?>       </td>
         <td class="tableadmin"> <?php echo($result->Nom_Propre);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Prenom);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Nom_Utilisateur);?>      </td>
          <td class="centrerdanscase"> <?php echo($result->Adresse_Email);?> </td>
          <td class="centrerdanscase"> <?php echo($result->Date_Inscription);?>     </td>
           <td class="centrerdanscase"> <?php echo($result->Compte_Active);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Date_Connexion);?>      </td>
         

                 
                  
          <td class="centrerdanscase"> <a href="<?php echo"supp3.php?id=".$result->ID_Utilisateur.""?>"><img src="images/icon-supprimer.jpg" alt="Supp" width="30" height="30"  style="border:0;"></td>
    </tr>
    </form>

  <?php
	   
  }//fin if 
  ?>
</table> 
</body>
</html>