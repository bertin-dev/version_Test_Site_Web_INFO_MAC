<?php
    session_start();
	?>
	
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>TRAITEMENT | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="INFO-MAC" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	
		<link rel="icon" type="image/png" href="logo.png"/>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

	<?php
	include("connectes.php");
	?>

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
if($_POST['nom']==null && $_POST['prenom']==null && $_POST['user']==null && $_POST['password']==null && $_POST['password_confirmation']==null)
{
  header('location: register.php');
  Exit;  
}

$serveur="http://".$_SERVER["HTTP_HOST"];	// Server root      Racine du serveur
$validity=7;					// Code validity, in days.
$db_host='127.0.0.1';			// DB parameters
$db_user='root';
$db_pass='';
$database='data_infomac';

//************ End of parameters

$valid2=3600*24*$validity;
$er='';

if (isset($_POST['email']))		// If the form has been submitted
{
              try
              {
	           $bdd = new PDO('mysql:host='.$db_host.';dbname='.$database, $db_user, $db_pass);
              }
              catch(Exception $e)
               {
                die('Erreur : '.$e->getMessage());
               }

$page=$serveur.$_SERVER["PHP_SELF"];
$nom=htmlentities(substr($_POST['nom'],0,100), ENT_QUOTES);// we cut the entered values to 100 characters and remove any ' or "      nous avons coupé les valeurs entrées à 100 caractères et en enlevons ' ou "
$prenom=htmlentities(substr($_POST['prenom'],0,100), ENT_QUOTES);
$user=htmlentities(substr($_POST['user'],0,100), ENT_QUOTES);

$pass=htmlentities(substr($_POST['password'],0,100), ENT_QUOTES);		// this is to avoid SQL insertions (or other injections), and limit the amount of code that could be executed   c'est éviter insertion SQL (ou d'autres injections) et limite le montant de code qui pourrait être exécuté

$pass2=htmlentities(substr($_POST['password_confirmation'],0,100), ENT_QUOTES);		// in case an insertion should succeed     au cas où une insertion devrait réussir
$email=htmlentities(substr($_POST['email'],0,100), ENT_QUOTES);
$IP=$_SERVER['REMOTE_ADDR'];
$heure=time();

if(!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $email))
	{
	$er.='S\'il vous plait entrez une address e-mail  valide.<br/>';	// Once again, sth against email insertion            Encore une fois, sth contre insertion de l'email
    }
	
 if(!preg_match('/^[A-Za-z0-9_]{4,20}$/', $nom))
          {
               $er.='Votre nom doit comporter entre 4 et 20 caractères. L\'utilisation de l\'underscore est autorisée<br />\n';
          }

if(false!=strpos($nom,chr(92)) || false!=strpos($nom,":") || false!=strpos($nom,",") || false!=strpos($nom,";")) 
	$er.='Vous avez utilisé des caractères défendus dans votre nom de l\'utilisateur.<br/>';

 if(!preg_match('/^[A-Za-z0-9_]{4,20}$/', $prenom))
          {
               $er.='Votre Prenom doit comporter entre 4 et 20 caractères. L\'utilisation de l\'underscore est autorisée<br />\n';
          }

if(false!=strpos($prenom,chr(92)) || false!=strpos($prenom,":") || false!=strpos($prenom,",") || false!=strpos($prenom,";")) 
	$er.='Vous avez utilisé des caractères défendus dans votre prenom.<br/>';


 if(!preg_match('/^[A-Za-z0-9_]{4,20}$/', $user))
          {
               $er.='Votre Pseudo doit comporter entre 4 et 50 caractères. L\'utilisation de l\'underscore est autorisée<br />\n';
          }
if(false!=strpos($user,chr(92)) || false!=strpos($user,":") || false!=strpos($user,",") || false!=strpos($user,";")) 
	$er.='Vous avez utilisé des caractères défendus dans votre NOM COMPLET.<br/>';


do					// The code must be unique, but we don't need to tell the user ;)       Le code doit être unique, mais nous ne devons pas dire à l'utilisateur
{
$session=md5($heure.rand(100000,999999));

$resultat = $bdd->query('SELECT * FROM w_members WHERE session=\''.$session.'\'');

}  
while(false!=($ligne = $resultat->fetch()));

if($nom=="" || $prenom=="" || $user=="" || $email=="" || $pass=="" || $pass2=="")
{
	$er.='Un ou plusieurs champs manquent.<br/>';
}				// Fill in all fields, thank you     Remplissez tous les champs, merci

if(!preg_match('/^[A-Za-z0-9]{4,}$/', $pass) || !preg_match('/^[A-Za-z0-9]{4,}$/', $pass2))
          {
               $er.= 'La sécurite de votre mot de passe est faible. SVP Veuillez le changer!!!';
          }

if($pass!=$pass2)
{
	$er.='Le mot de passe et la confirmation ne sont pas égaux<br/>';
}					// The 2 passwords must be the same        Les 2 mots de passe doivent être les mêmes

$resultat = $bdd->query('SELECT * FROM w_members WHERE nom=\''.$nom.'\''); 
if(false!=($ligne = $resultat->fetch()))
{
	$er.='cet utilisateur ('.$nom.') est déjà pri.<br/>';
}	// If the login is already taken (confirmed)                Si le nom de connexion est déjà pris (confirmé)


$resultat = $bdd->query('SELECT * FROM w_members WHERE prenom=\''.$prenom.'\''); 
if(false!=($ligne = $resultat->fetch()))
{
	$er.='cet utilisateur ('.$prenom.') est déjà pri.<br/>';
}

$resultat = $bdd->query('SELECT * FROM w_members WHERE user=\''.$user.'\''); 
if(false!=($ligne = $resultat->fetch()))
{
	$er.='cet utilisateur ('.$user.') est déjà pri.<br/>';
}

$resultat = $bdd->query('SELECT * FROM w_members WHERE email=\''.$email.'\'');
if(false!=($ligne = $resultat->fetch()))
{
	$er.='cet e-mail ('.$email.') est déjà pri. Vous ne pouvez pas l\'utiliser pour vous inscrire ici.<br/>';
}	// If the e-mail is in the blacklist          Si l'e-mail est dans la liste noire

if($er=='')
{	//**** IF NO ERROR - START                   SI AUCUNE ERREUR - DÉBUT

//********* Confirmation e-mail                   E-mail de la confirmation
/* subject */
$subject = "Account confirmation";

/* message */
$message = '
<html>
<head>
 <title>Account confirmation</title>
</head>
<body>
Hello '.$nom.',<br/><br/>

Vous recevez cet e-mail parce que vous ou quelqu\'un d\'autre a utilisé votre adresse pour s\'inscrire sur notre site.<br/>
Compléter s\'il vous plaît le processus d\'inscription en suivant <a href="'.$page.'?code='.$session.'">ce lien</a>.<br/><br/>

If you didn\'t sign up on our site, just ignore this message and please accept our apologies.<br/>
You can also choose to blacklist your e-mail so you won\'t hear from us anymore by following <a href="'.$page.'?code='.$session.'&BL=1">this link</a>.<br/>
Your e-mail was submitted from IP '.$IP.' on '.date("r").' (server time).<br/><br/>

Best regards,<br/>
Site Admin
</body>
</html>
';

/* Pour envoyer le courrier HTML, vous pouvez mettre l'en-tête du Contenu-type */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "To: ".$nom." <".$email.">\r\n";
$headers .= "From: Site <do_not_reply@patheticcockroach.com>\r\n";

/* and now mail it                    et maintenant le poste*/
if(isset($email, $subject, $message, $headers))
	{
	   $req = $bdd->prepare('INSERT INTO w_members (nom, prenom, user, pass, email, heure, session, ip) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
	   $req->execute(array($nom, $prenom, $user, md5($pass), $email, $heure, $session, $IP));
		$_SESSION['nom'] = $nom;
	    $_SESSION['prenom'] = $prenom;
		$_SESSION['id'] = $session;
	//mysql_query("INSERT INTO w_members SET nom='".$nom."',pass='".md5($pass)."',email='".$email."',heure='".$heure."',session='".$session."',IP='".$IP."';");		// We insert the data into the waiting table
    echo 'Votre compte utilisateur est partiellement crééé.<br/>';
	echo 'Un email vous est envoyé à l\'adresse '.$email.'. S\'il vous plaît ouvrez votre boite e-mail et confirmez votre adhésion dans '.$validity.' jours.';
	echo 'S.V.P Veuillez cliquez ici: <a href="espace_membre.php" title="lien de redirection"> LIEN</a>';
	}
else {$er.='We weren&#39;t able to send you the confirmation e-mail. Please contact the webmaster.<br/>';}
}	//**** IF NO ERROR - END

    $resultat->closeCursor();
}	// If the form has been filled - END _____________________________________________________email


else if(isset($_GET["code"]))					// If a code is entered
{
  try
              {
	           $bdd = new PDO('mysql:host='.$db_host.';dbname='.$database, $db_user, $db_pass);
              }
              catch(Exception $e)
               {
                die('Erreur : '.$e->getMessage());
               }
$heure=time();
$heure2=$heure-$valid2;						// We delete outdated codes

  $suppression = $bdd->prepare('DELETE FROM w_members WHERE heure <' .$heure2);
$session=htmlentities($_GET["code"], ENT_QUOTES);

$resultat = $bdd->query('SELECT * FROM w_members WHERE session=\''.$session.'\''); 
if(false==($ligne = mysql_fetch_assoc ($resultat)))
{
	$er.='Ce code est faux ou a expiré, s\'il vous plaît remplissez encore le formulaire.<br/>';
}

if($er=='')
{	//**** IF NO ERROR - START

if(!isset($_GET["BL"]))						// If the user comes to confirm, we insert them into the members table and remove them from the waiting table      Si l'utilisateur vient pour confirmer, nous les insérons dans les membres présentez et enlevez-les de la table de l'attente
{
$nom=$ligne['nom'];
  $req = $bdd->prepare('INSERT INTO members (nom, prenom, user, pass, email, IP, heure) VALUES(?, ?, ?, ?, ?, ?, ?)');
	   $req->execute(array($nom, $prenom, $user, $ligne['pass'], $ligne['email'], $ligne['IP'], $ligne['heure']));
  $suppression = $bdd->prepare('DELETE FROM w_members WHERE session='.$session);

echo 'Merci pour confirmer votre inscription '.$nom.'. Vous êtes maintenant un membre du site.';
}

else if($_GET["BL"]==1)						// If the user comes to be blacklisted, we ask for a confirmation       Si l'utilisateur vient pour être inscrit sur la liste noire, nous demandons une confirmation
{
echo 'Click <a href="'.$_SERVER["PHP_SELF"].'?code='.$session.'&BL=2">here</a> to blacklist your e-mail. This CANNOT be undone.';
}

else								// If the user confirms they want to be blacklisted,  we insert them into the blacklist and remove them from the waiting table         
//Si l'utilisateur confirme qu'ils veulent être inscrit sur la liste noire, nous les insérons dans la liste noire et les enlevons de la table de l'attente
{
$email=$ligne['email'];

 $req = $bdd->prepare('INSERT INTO blackl (email, IP, heure) VALUES(?, ?, ?)');
	   $req->execute(array($email, $ligne['IP'], $ligne['heure']));
  $suppression = $bdd->prepare('DELETE FROM w_members WHERE session='.$session);

echo 'Your e-mail, '.$email.', has been blacklisted. You won&#39;t receive anymore e-mails from us.';
}
}	//**** IF NO ERROR - END

//mysql_close();
}	// If a code is entered - END                               Si un code est entré - FIN                                 code = $session



else{show_form();}		// If there is no form submitted nor a code, we show the form             S'il n'y a aucune forme soumise ni un code, nous montrons la forme

if($er!='' && isset($_POST["email"])){show_form($nom, $prenom, $user, $pass, $pass2, $email, $er);}
else if($er!='' && !isset($_POST["email"])){show_form('', '', '','', '', '', $er);}

//************ Form display function               fonction de l'exposition
function show_form($nom="", $prenom="", $user="", $pass="", $pass2="", $email="", $er='')
{
	
	
	
echo '<div class="row" color="red"><div style="font-weight:bold;">'.$er.'</div></div>';
echo ' <font face="arial" size="20" color="red">Bonjour le monde !</font> ';

}
?>	








</body>
</html>

