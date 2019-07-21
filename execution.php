<?php session_start(); ?>
<?php
function nettoieProtect(){

foreach($_POST as $k => $v){
  $v=strip_tags(trim($v));
  $_POST[$k]=$v;
  }
  foreach($_GET as $k => $v){
  $v=strip_tags(trim($v));
  $_GET[$k]=$v;
  }
  foreach($_REQUEST as $k => $v){
  $v=strip_tags(trim($v));
  $_REQUEST[$k]=$v;
  }

}
     
     // Formulaire visible par défaut
     $masquer_formulaire = false;
     $message='';
	 $success='';
	 $i=0;
     // Une fois le formulaire envoyé
     if(isset($_GET['inscription']))
     {
          
          // Vérification de la validité des champs
          if(!preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $_POST['nom'])) 
          { 
	           $i++;
               $message .= "Nom de Famille Invalide<br />\n";
          }
		  if(!preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $_POST['prenom']))
          {
			   $i++;
               $message .= "Prenom Invalide<br />\n";
          }
		  if(!preg_match('/^[A-Za-z0-9_. ]{4,20}$/', $_POST['pseudo']))
          {
			   $i++;
               $message .= "Nom d'utilisateur Invalide<br />\n";
          }
		  
		  elseif(!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $_POST['email']))
          {
			   $i++; 
               $message .= "Votre Adresse E-mail n'est pas valide <br/>";
          }
		  
          elseif(!preg_match('/^[A-Za-z0-9]{4,}$/', $_POST['password']))
          {
			   $i++;
               $message .= "Mot de passe Invalide et doit comporter au moins 4 caractères <br/>";
          }
          elseif($_POST['password'] != $_POST['password_confirmation'])
          {
			   $i++;
               $message .= "Votre mot de passe n'a pas été correctement confirmé<br/>";
          }
          
          else
          {
               
               // Connexion à la base de données
               include('connexion_base_donnee.php');

			   
			   nettoieProtect();
               extract($_POST);
			   
			   $result = $bdd->query('SELECT COUNT(*) FROM inscription WHERE pseudo=\''.$_POST['pseudo']. '\' OR email =\''.$_POST['email'].'\'');
			   
               // Si une erreur survient
               if(!$result)
               {
				    $i++;
                    $message .= "Erreur d'accès à la base de données lors de la vérification d'unicité<br/>";
               }
               else
               {
             
                    // Si un enregistrement est trouvé
                    if($result->fetchColumn() > 0)
                    {
                         $result = $bdd->query('SELECT * FROM inscription WHERE pseudo=\''.$_POST['pseudo']. '\' OR email =\''.$_POST['email'].'\'');
						 
                         //while($row = mysql_fetch_array($result))
							 while($row = $result->fetch())
                         {
                              
                              if($_POST['pseudo'] == $row['pseudo'])
                              {
								 
                                   $message .= "Pseudonyme " . $_POST['pseudo'];
                                   $message .= " déjà utilisé<br/>";
                              }
                              elseif($_POST['email'] == $row['email'])
                              {
								 
                                   $message .= "Adresse E-mail (" . $_POST['email'].')';
                                   $message .= " déjà utilisée<br/>";
                              }
							
                              $result->closeCursor();
                         }
                         
                    }
                    else
                    {
						
						
						
						$_POST['password']=sha1($_POST['password']);
						$_POST['password_confirmation']=sha1($_POST['password_confirmation']);
						
						$_SESSION['nom']=$_POST['nom'];
						$_SESSION['prenom']=$_POST['prenom'];
						$_SESSION['password_confirmation']=$_POST['password_confirmation'];
						$_SESSION['pseudo']=$_POST['pseudo'];
						$_SESSION['sexe']=$_POST['civilite'];
						$_SESSION['mtp']=$_POST['password'];
						$_SESSION['email']=$_POST['email'];
						$_SESSION['time']=time();
						?>
						<script>
							$('#plan').load('inscription2.php?sexe=<?php echo $_POST['civilite'];?>');
						</script>
						<?php
						
						}
                    
               }
               
          }
          
          if(isset($message)&& $message!='') 
       {
	   
		   if($i==1)
		   { 
      	    echo 'il y a '. $i .' erreur<br/>';
			echo $message;
		   }
           else if($i>1)
		   { 
     	   echo 'il y a '. $i .' erreurs<br/>';
           echo $message;		   
		   }
           else echo $message;		   
     }
          
    }
						
						
/********************************************************/
					if(isset($_GET['profil']))
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
	
	
	
                    if(isset($_POST['terminer']))
{
	include('connexion_base_donnee.php');
									if(empty($_SESSION['chemin']))
									{
										unset($_SESSION['chemin']);						
										if($_SESSION['sexe']=='M')
										{
						
										$chemin0="avatars/homme.png";	
										$_SESSION['chemin']=$chemin0;
										}else{
										$chemin0="avatars/femme.png";
										$_SESSION['chemin']=$chemin0;
										}
									}
									
									
									  
                         // Génération de la clef d'activation
                         $caracteres = array("a", "b", "c", "d", "e", "f", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
                         $caracteres_aleatoires = array_rand($caracteres, 8);
                         $clef_activation = "";
                         
                         foreach($caracteres_aleatoires as $i)
                         {
                              $clef_activation .= $caracteres[$i];
                         }
									
									

						  //fonction d'envi de mail en php
									
										$req=$bdd->prepare('INSERT INTO inscription 
										VALUES(:id, :nom1, :prenom2, :pseudo3, :civilite4, :email, :password, :date_inscription, :clef_activation, :ip, :avatars)');
										
										$req->execute(array('id'=>'',
															'nom1'=>$_SESSION['nom'],
															'prenom2'=>$_SESSION['sexe'],
															'pseudo3'=>$_SESSION['prenom'],
															'civilite4'=>$_SESSION['pseudo'],
															'email'=>$_SESSION['email'],
															'password'=>$_SESSION['mtp'],
															'date_inscription'=>time(),
															'clef_activation'=>$clef_activation,
															'ip'=>$_SERVER['REMOTE_ADDR'],
															'avatars'=>$_SESSION['chemin']
															));
										if($req)
										{
										echo 'espace-client.php';
										unset($_SESSION['chemin']);
										}
										
										$req->closeCursor();
}	
/**********************************************************/
  if(isset($_GET['ok']))
{
if(isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
{
	if(isset($_POST['titre'],$_POST['contenu']) AND !empty($_POST['titre']) AND !empty($_POST['contenu']) ) 
	{
			//on enleve l'echappement si get_magic_quotes_gpc() est activé
		if(get_magic_quotes_gpc())
		{
		$_POST['titre']=strtolower(stripslashes(htmlspecialchars($_POST['titre'])));
		$_POST['contenu']=strtolower(stripslashes(htmlspecialchars($_POST['contenu'])));
		}
		//on verifi si l'adresse de l'image a ete bien definit
		if(isset($_FILES['image']['name']))
		{	
			if(isset($_FILES['image']['name']))
				{
				//on verifi la taille de l'image
					if($_FILES['image']['size']>=1000)
						{
						$extensions_valides=Array('jpg','jpeg','png','mp3');
						//la fonctions strrchr( $chaine,'.') renvoit l'extension avec le point
						//la fonction substtr($chaine,1) ingore la premiere caractere de la chaine
						//la fonction strtolower($chaine) renvoit la chaine en minuscule
						$extension_upload=strtolower(substr(strrchr($_FILES['image']['name'],'.'),1));
						//on verifi si l'extension_uplod est valide
							
							if(in_array($extension_upload,$extensions_valides))
								{
								$id_membre=md5(uniqid(rand(),true));	
								$chemin="themes/images/all/{$id_membre}.{$extension_upload}";
								//on deplace du serveur au disque dur
								
									if(move_uploaded_file($_FILES['image']['tmp_name'],$chemin))
										{
										include('connexion_base_donnee.php');	
										$req0=$bdd->prepare('SELECT id,nom FROM inscription WHERE pseudo=:pseudo');
										$req0->execute(array('pseudo'=>$_SESSION['pseudo']));
										$resultat0=$req0->fetch();
										$id_membre=$resultat0['id'];
										
										$req=$bdd->prepare('INSERT INTO actualites 
										VALUES(:id_actualite,:id_membre,:titre,:contenu,:image,:nom,:pseudo,:aime,:noaime)');
										
										$req->execute(array('id_actualite'=>'',
															'id_membre'=>$id_membre,
															'titre'=>$_POST['titre'],
															'contenu'=>$_POST['contenu'],
															'image'=>$chemin,	
															'nom'=>$resultat0['nom'],	
															'pseudo'=>$_SESSION['pseudo'],
															'aime'=>0,
															'noaime'=>0
															));
										
										$req->closeCursor();
										if($req)
										{
											echo "Votre publication à étè éffectuée avec succès.";
										}else{echo "lov";}
									}else{echo "no deplace";}
								}else{echo "no extensions";}
						}else{echo "no size";}
				}else{echo "no defined";}
		}
		
	}else{echo "Vueillez remplir tous les champs svp.";}
}
else
	{
			include('connexion_base_donnee.php');	
										$req0=$bdd->prepare('SELECT id,nom FROM inscription WHERE pseudo=:pseudo');
										$req0->execute(array('pseudo'=>$_SESSION['pseudo']));
										$resultat0=$req0->fetch();
										$id_membre=$resultat0['id'];
										$nom=$resultat0['nom'];
										
										$req=$bdd->prepare('INSERT INTO actualites 
										VALUES(:id_actualite,:id_membre,:titre,:contenu,:image,:nom,:pseudo,:aime,:noaime)');
										
										$req->execute(array('id_actualite'=>'',
															'id_membre'=>$id_membre,
															'titre'=>$_POST['titre'],
															'contenu'=>$_POST['contenu'],
															'image'=>'',	
															'nom'=>$nom,	
															'pseudo'=>$_SESSION['pseudo'],
															'aime'=>0,
															'noaime'=>0,
															));
										
										$req->closeCursor();
										if($req)
										{
											echo "Votre publication à étè éffectuée avec succès.";
										
										}
										
		}
}   

//connexion
if(isset($_GET['go']))
{

//si les données d'un utilisateur est definit on le deconnecte afin de connectez un nouveau utilisateur
	if(isset($_SESSION['pseudo'],$_SESSION['password']))
	{
	unset($_SESSION['pseudo']);
	unset($_SESSION['password']);
	}					
	if(isset($_POST['nom'],$_POST['mtp']))
	{
		//on enleve l'echappement si get_magic_quotes_gpc() est active
		if(get_magic_quotes_gpc())
		{
		$_POST['nom']=strtolower(stripslashes(htmlspecialchars($_POST['nom'])));
		$_POST['mtp']=strtolower(stripslashes(htmlspecialchars($_POST['mtp'])));
		}	
		//on verifi  que le mot de passe existe
		include('connexion_base_donnee.php');
		$_POST['mtp']=sha1($_POST['mtp']);
		$req=$bdd->prepare('SELECT count(*)As nbrs FROM inscription WHERE password=:password AND pseudo=:pseudo');
		$req->execute(array('password'=>$_POST['mtp'],
							'pseudo'=>$_POST['nom']));
		$count = $req->fetch();

			if($count['nbrs']>0)
			{
			
				$_SESSION['pseudo']=$_POST['nom'];
				$_SESSION['password']=$_POST['mtp'];
				echo "Connexion Reussie";
			
			}
			else
			{
			echo "Mot de passe ou pseudo incorrect.";
			}
	}
	else
	{
	echo "Vueillez remplir les champs.";
	}
}
/**************************************************************/
if(isset($_GET['deconnexion']))
{
	
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['pseudo']);
unset($_SESSION['password']);
unset($_SESSION['sexe']);
unset($_SESSION['email']);
unset($_SESSION['chemin']);
header('location:index.php');	
}


?>


