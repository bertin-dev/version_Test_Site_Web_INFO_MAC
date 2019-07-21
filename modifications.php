<?php
session_start();
if(isset($_GET['infos']))
{
	if(isset($_POST['nom'],$_POST['email'],$_POST['prenom']) AND !empty($_POST['nom'])AND !empty($_POST['email'])AND !empty($_POST['prenom']))  
	{
			//on enleve l'echappement si get_magic_quotes_gpc() est activé
		if(get_magic_quotes_gpc())
		{
		$_POST['nom']=strtolower(stripslashes(htmlspecialchars($_POST['nom'])));
		$_POST['pseudo']=strtolower(stripslashes(htmlspecialchars($_POST['pseudo'])));
		$_POST['email']=strtolower(stripslashes(htmlspecialchars($_POST['email'])));
		$_POST['prenom']=strtolower(stripslashes(htmlspecialchars($_POST['prenom'])));

		}
										include('connexion_base_donnee.php');	
										$req=$bdd->prepare('UPDATE inscription SET nom= :nom_complet,email=:email,prenom=:contact WHERE id = :id_membre');
										
										$req->execute(array(
															'nom_complet'=>$_POST['nom'],
															'email'=>$_POST['email'],
															'contact'=>$_POST['prenom'],
															'id_membre'=>$_GET['id']
															));
															
										
										
										if($req)
										{
											echo "Modification effectuée...";
										}else{echo "lov";}
										$req->closeCursor();
								
	}else{echo "Vueillez remplir tous les champs svp.";}

}

if(isset($_GET['pass']))
{
	if(isset($_POST['mtp'],$_POST['rmtp'],$_POST['rmtp0']) AND !empty($_POST['mtp'])AND !empty($_POST['rmtp'])AND !empty($_POST['rmtp0'])) 
	{
			//on enleve l'echappement si get_magic_quotes_gpc() est activé
		if(get_magic_quotes_gpc())
		{
		$_POST['mtp']=strtolower(stripslashes(htmlspecialchars($_POST['mtp'])));
		$_POST['rmtp']=strtolower(stripslashes(htmlspecialchars($_POST['rmtp'])));
		$_POST['rmtp0']=strtolower(stripslashes(htmlspecialchars($_POST['rmtp0'])));
		}
	
			if($_POST['rmtp']==$_POST['rmtp0'])
			{	
				if(strlen($_POST['rmtp'])>=6 AND strlen($_POST['rmtp'])<=15)
				{	
						$_POST['mtp']=sha1($_POST['mtp']);
						$_POST['rmtp']=sha1($_POST['rmtp']);
						$_POST['rmtp0']=sha1($_POST['rmtp0']);
						
						include('connexion_base_donnee.php');	
						$req=$bdd->prepare('SELECT count(*) As nbrs FROM inscription WHERE password=:password');
						$req->execute(array('password'=>$_POST['mtp']));
						$resultat=$req->fetch();
						if($resultat['nbrs']>0)
						{
						
						$req0=$bdd->prepare('UPDATE membres SET password=:password WHERE id =:id_membre');
						$req0->execute(array(
						'password'=>$_POST['rmtp'],
						'id_membre'=>$_GET['id']
						));
							
							if($req0)
								{
								echo "Modification effectuée...";
								}
				}else{echo "Ce mot de passe n'hesite pas";}
			}else{echo "Le mot de passe doit contenir au moins 6caractères.";}
		}else{echo "Les nouveaux mot de passe ne sont pas identiques";}
							
	}else{echo "Vueillez remplir tous les champs svp.";}

}
/**************************************************************************************/
	if(isset($_GET['photo']))
	{
		//on verifi si l'adresse de l'image a ete bien definit
			
			if(isset($_FILES['avatars']['name']) AND !empty($_FILES['avatars']['name']))
				{
				//on verifi la taille de l'image
					if($_FILES['avatars']['size']>=1000)
						{
						$extensions_valides=Array('jpg','jpeg','png');
						//la fonctions strrchr( $chaine,'.') renvoit l'extension avec le point
						//la fonction substtr($chaine,1) ingore la premiere caractere de la chaine
						//la fonction strtolower($chaine) renvoit la chaine en minuscule
						$extension_upload=strtolower(substr(strrchr($_FILES['avatars']['name'],'.'),1));
						//on verifi si l'extension_uplod est valide
							
							if(in_array($extension_upload,$extensions_valides))
								{
								$id_membre=md5(uniqid(rand(),true));	
								$chemin="avatars/{$id_membre}.{$extension_upload}";
								//on deplace du serveur au disque dur
								
									if(move_uploaded_file($_FILES['avatars']['tmp_name'],$chemin))
										{
											// La photo est la source
											if($extension_upload=='jpg' OR $extension_upload=='jpeg'){$source = imagecreatefromjpeg($chemin);}
											else{$source = imagecreatefrompng($chemin);}
										$destination = imagecreatetruecolor(150, 150); // On crée la miniature vide

										// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
										$largeur_source = imagesx($source);
										$hauteur_source = imagesy($source);
										$largeur_destination = imagesx($destination);
										$hauteur_destination = imagesy($destination);
										$chemin0="avatars/miniature/{$id_membre}.{$extension_upload}";
										// On crée la miniature
										imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

										// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
										
										imagejpeg($destination,$chemin0);
										echo $chemin0;
										$_SESSION['chemin']=$chemin0;
										}else{echo "no deplace";}
								}else{echo "no extensions";}
						}else{echo "no size";}
				}else{echo "no defined";}
		
	}	

/********************************************************/

/*******************************************************************/
if(isset($_GET['ok']))
{
									include('connexion_base_donnee.php');
										$req=$bdd->prepare('UPDATE inscription SET avatars=:avatars WHERE id=:id_membre');
										$req->execute(array(
														'avatars'=>$_SESSION['chemin'],
														'id_membre'=>$_GET['id']
															));
										if($req)
										{
										echo 'Votre photo de profil à étè mise à jour...';
									
										}
										
										$req->closeCursor();
}
/**************************************************************/
if(isset($_GET['supp']))
{
	include('connexion_base_donnee.php');	
	$req=$bdd->prepare('DELETE FROM cours WHERE id_cours=:id_cours');
	$req->execute(array('id_cours'=>$_GET['id']));
	$resultat=$req->fetch();
	if($req)
	{
		echo "Ce fihier a étè supprimé...";
	}else{echo "volle";}
}

if(isset($_GET['modif']))
{
	include('connexion_base_donnee.php');	
	$req=$bdd->prepare('DELETE FROM commentaires WHERE id_commentaire=:id_commentaire');
	$req->execute(array('id_commentaire'=>$_GET['id_comment']));
	$resultat=$req->fetch();
	if($req)
	{
		echo "Ce commentaire a étè supprimer...";
	}else{echo "volle";}
}














