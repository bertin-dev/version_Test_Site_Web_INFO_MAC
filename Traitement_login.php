<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>TRAITEMENT | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="INFO-MAC" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />

           
</head>
<body>



<?php

$db_host='127.0.0.1';			// DB parameters
$db_user='root';
$db_pass='';
$database='data_infomac'; 
     
	      
    //Traitement du login
      if(isset($_POST['email_login'], $_POST['password_login']))
	  {
		  if($_POST['email_login']=="" || $_POST['password_login']=="")
		  {
			  echo 'verifiez votre formulaire';
		  }
		  
		   try
              {
	           $bdd = new PDO('mysql:host='.$db_host.';dbname='.$database, $db_user, $db_pass);
              }
              catch(Exception $e)
               {
                die('Erreur : '.$e->getMessage());
               }
			   
		  $email=htmlentities(substr($_POST['email_login'],0,100), ENT_QUOTES);
		  $pass=htmlentities(substr($_POST['password_login'],0,100), ENT_QUOTES);
		  $pass=md5($pass);
		  
		  
		    $resultat = $bdd->query('SELECT COUNT(*) AS nbrEntre FROM w_members WHERE email=\''.$email. '\' AND pass=\''.$pass.'\'');
          $resultatTAB = $resultat->fetch();
   if($resultatTAB['nbrEntre'] == 0)
   {
	   echo 'vous n\'est pas encore inscrit <a href="inscription.php" title="LIENS">Inscrivez-vous ici</a>';
   }
    
   else
   {
	 header('loacation: espace_membre.php');   
   }
	  $resultat->closeCursor();
	  }
	  
	 
?>

</body>
</html>
	
