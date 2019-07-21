<?php
     //espace membre 
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
