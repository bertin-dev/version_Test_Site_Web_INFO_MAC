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