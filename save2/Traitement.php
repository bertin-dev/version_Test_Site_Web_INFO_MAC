<?php
// Connexion à la base de données
if(isset($_POST['first_name']) AND isset($_POST['last_name']) AND isset($_POST['email']) AND isset($_POST['message']) )
{
	
      if($_POST['first_name'] != NULL AND $_POST['last_name'] != NULL AND $_POST['email'] != NULL AND $_POST['message'] != NULL )

	  {
		  
		  $nom = strip_tags($_POST['first_name']);
          $prenom = strip_tags($_POST['last_name']);
          $email = strip_tags($_POST['email']);
          $message = htmlspecialchars($_POST['message']);



try
{
	$bdd = new PDO('mysql:host=localhost;dbname=info_mac', 'root', '');
	
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO contact (first_name, last_name, email, message) VALUES(?, ?, ?, ?)');
$req->execute(array($nom, $prenom, $email, $message));

// Redirection du visiteur vers la page du minichat
header('Location: contact.php');


}
  
     
else
{
	header('Location: contact.php');
}
}


?>


<?php
       //TRAITEMENT DU FORMULAIRE D'INSCRIPTION----------------------------------------------------------
	
       if(isset($_POST['nom'], $_POST['prenom'], $_POST['nom_complet'], $_POST['email'], $_POST['password'], $_POST['password_confirmation']))
	   {
		   if($_POST['nom'] != NULL AND $_POST['prenom'] != NULL AND $_POST['nom_complet'] != NULL AND $_POST['email'] != NULL  AND $_POST['password'] != NULL AND $_POST['password_confirmation'] != NULL)
		   {
			   $nom = htmlentities($_POST['nom'], ENT_QUOTES);
			   $prenom = htmlentities($_POST['prenom'], ENT_QUOTES);
			   $nom_complet = htmlentities($_POST['nom_complet'], ENT_QUOTES);
			   $email = htmlentities($_POST['email'], ENT_QUOTES);
			   $password = htmlentities($_POST['password'], ENT_QUOTES);
			   $password_confirmation = htmlentities($_POST['password_confirmation'], ENT_QUOTES);
			   
			   try
			   {
				   $datacenter = new PDO('mysql:host=localhost; dbname=info_mac', 'root', '');
			   }
			   
			   catch(Exception $error)
			   {
				   die('UNE ERREUR S\'est produite' .$error->getMessage());
			   }
			   //UTILISATION DES REQUETES PREPARES
			   $requete = $datacenter->prepare('INSERT INTO inscription (nom, prenom, nom_complet, email, password, password_confirmation) VALUES(?, ?, ?, ?, ?, ?)');
			   $requete->execute(array($nom, $prenom, $nom_complet, $email, $password, $password_confirmation));
			   header('Location: espace_membre.php');
		   }
	   }		   
?>




<?php
			     if(isset($_POST['sujet'], $_POST['message']))
				 {
					 if($_POST['sujet']!= NULL OR $_POST['message'] != NULL)
					 {
						$sujet = htmlentities($_POST['sujet'], ENT_QUOTES);
                        $message = htmlentities($_POST['message'], ENT_QUOTES);

                         $message = nl2br($message);

                        try
						{
							$bdd = new PDO('mysql:host=localhost; dbname=info_mac', 'root', '');
						}
                        catch(Exception $e)
						{
							die('ERREUR :' .$e->getMessage());
						}
                         
						 $req = $bdd->prepare('INSERT INTO discussion (sujet, message) VALUES(?, ?)');
						 $req->execute(array($sujet, $message));
                       header('location: espace_membre.php');						
					 }
				 }
			 ?>


<?php
      if(isset($_FILES['nomfichier']) AND $_FILES['nomfichier']['error'] == 0)
	  {
		  if($_FILES['nomfichier']['size'] < 4000000)
		  {
			  $infoFichier = pathinfo($_FILES['nomfichier']['type'])
			  $extension_upload = $infoFichier ['extension'];
			  $extension_autorisee = array('jpg', 'gif', 'png', 'jpeg');
			  
			  if(in_array($extension_upload, $extension_autorisee))
			  {
				  move_uploaded_file($_FILES['nomfichier']['tmp_name'], 'upload/' .basename($_FILES['nomfichier']['name']));
				  echo 'FICHIER CHARGE AVEC SUCCESS';
			  }
		  }
	  }

?>
