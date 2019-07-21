<?php
    session_start();
	?>
	
	<?php
	include("connectes.php");
	?>
	
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>ESPACE_MEMBRE | INFO-MAC.FR</title>
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



<div id="wrapper">
	<!-- start header -->
	

<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +237 696290261</li>
							</ul>
						</div>
						<div class="col-md-6">
						<div id="sb-search" class="sb-search">
							
							<!-------------------------------------------RECHERCHE ET ENVOI DES DONNEES SUR LE SERVEUR A PARTIR DU FORMULAIRE--------------------------->
							<form method="post" action="Traitement_espace_membre.php" enctype="multipart/form-data">
								<input class="sb-search-input" placeholder="Entrez le terme recherche" type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Demarrer la recherche"></span>
						</div>


						</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <!--LOGO DU SITE WEB INFO-MAC -->
                    <a class="navbar-brand" href="index.php"><img class="log" src="img/logo.png" alt="" width="250" height="175" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li>
							<a href="index.php">ACCUEIL</a>
						</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">AGENDA <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="agenda_VIP.php">V.I.P </a></li>
                                <li><a href="agenda_Standard.php">Standard </a></li>
								<li><a href="agenda_BiMatiere.php">Bi-Matières </a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.php">CATALOGUE</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">FORUM <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
                                <li><a href="login.php">Connexion</a></li>
							   <li><a href="register.php">Inscription</a></li>
                            </ul>
						</li>
                        <li><a href="contact.php">CONTACT</a></li>
						<li><a href="apropos.php">APROPOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	
	
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="register.php">Forum</a><i class="icon-angle-right"></i></li>
					<li class="active">Espace Membres</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	

	
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		
			<center><h2>SOYEZ LE BIENVENU <br/></h2>
			<?php
			echo $_SESSION['nom'].'<br>';
			echo $_SESSION['prenom'].'<br>';
															echo $_SESSION['pseudo'].'<br>';
															echo $_SESSION['sexe'].'<br>';
															echo $_SESSION['email'].'<br>';
															echo $_SESSION['mtp'].'<br>';
															echo time().'<br>';
															
															echo $_SERVER['REMOTE_ADDR'].'<br>';
															echo $_SESSION['chemin'].'<br>';
			
			
			?>
			</center>
			
			
			
			 <?php
			       try
						{
							$bdd = new PDO('mysql:host=localhost; dbname=info_mac', 'root', '');
						}
                        catch(Exception $e)
						{
							die('ERREUR :' .$e->getMessage());
						}
						
						$nbreMSGparPAGE = 5;
						$retour = $bdd->query('SELECT COUNT(*) AS nbreEntre FROM discussion');
						$don = $retour->fetch();
					    $nbreTotalMSG = $don['nbreEntre'];
						
						$nbrePAGE = ceil($nbreTotalMSG / $nbreMSGparPAGE);
						
						for($i = 0; $i < $nbrePAGE; $i++)
						{
							$ab ='<strong><a href ="espace_membre.php?page='.$i. '">'. $i.'</a></strong>';
						}
					
						if(isset($_GET['page']))
						{
							$page = intval($_GET['page']); 
						}
						else
						{
							$page = 1;
						}
						
						 $premierMSG = ($page-1) * $nbreMSGparPAGE;
						
						
						
						$reponse = $bdd->query('SELECT sujet, message, DATE_FORMAT(temps, "%d/%m/%Y %Hh%imin%ss") AS date_envoi FROM discussion ORDER BY id DESC LIMIT 0,'.$nbreMSGparPAGE);
						
						
						while($donnee = $reponse->fetch())
						{
						?>
						<?php
						echo '<br/><strong>'. $donnee['sujet'] .'</strong>'; 
 						echo '<br/> <img src="avatar.png" alt="pseudo" title="avatar" width="70"/> :<br/>';
						echo 'temps: <strong>'. $donnee['date_envoi'] .'</strong> :';
						?>
						<div id="echange">
						<?php
							echo $donnee['message'] .'<br/>';
							?>
						
						</div>
						<?php
						}
						
						$reponse->closeCursor();
			 ?>
		
			
			
			<center><h2><small>Postez un commentaire!!!</small></h2></center>
			<hr class="colorgraph">
			
            <form role="form" class="register-form">
			<div class="form-group">
				<input type="text" name="sujet" id="sujet" class="form-control input-lg" placeholder="Pseudo" tabindex="4">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="8" placeholder="* Votre Commentaire" name="message"></textarea>
			</div>

			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Envoyez" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>	
			</div>
			<?php
			      echo '<center><strong><u>Statistiques:</u></strong></center><br/>';
			      include("connectes.php");
				  $compte = $bdd->query('SELECT COUNT(*) AS nbrConnecte FROM connectes');
                  while($donnee = $compte->fetch())
                     {
	                   if($donnee['nbrConnecte'] <= 1)
	                   echo '<center>Connecté: ' . $donnee['nbrConnecte']. '</center></br/>';
                        else
                        echo '<center>Connectés: ' . $donnee['nbrConnecte']. '</center><br/>';		   
                      }
                    
					echo '<center>nombre de Page: ';
						for($i = 0; $i < $nbrePAGE; $i++)
						{
							echo '<strong><a href ="espace_membre.php?page='. $i. '">'. $i.'/</a></strong>';
						}
						echo '</center><br/>';
						
						echo '<center>Poste: '.$nbreTotalMSG.'</center><br/>';
						  try
						{
							$bd = new PDO('mysql:host=localhost; dbname=data_infomac', 'root', '');
						}
                        catch(Exception $e)
						{
							die('ERREUR :' .$e->getMessage());
						}
						
						$retour = $bd->query('SELECT COUNT(*) AS nbreEntre FROM w_members');
						$don = $retour->fetch();
					    $total = $don['nbreEntre'];
						echo '<center>Nombre d\'inscrit: '. $total.'</center>'; 
						
				  ?>
		</form>
	</div>
</div>

</div>
	</section>

	<?php 
	include("pied_de_page.php");
	?>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	
</body>
</html>