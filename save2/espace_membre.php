<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>LOGIN | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />

<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>



<div id="wrapper">
	<!-- start header -->
	<?php 
	include("entete.php");
	?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Forum</a><i class="icon-angle-right"></i></li>
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
		
			<center><h2>SOYEZ LE BIENVENU!!!</h2></center>
			
			
			
			 <?php
			       try
						{
							$bdd = new PDO('mysql:host=localhost; dbname=info_mac', 'root', '');
						}
                        catch(Exception $e)
						{
							die('ERREUR :' .$e->getMessage());
						}
						
						$reponse = $bdd->query('SELECT sujet, message, temps FROM discussion ORDER BY id DESC');
						while($donnee = $reponse->fetch())
						{
						?>
						<hr class="colorgraph">
						<?php
							echo 'Sujet: <strong>'. $donnee['sujet'] .'</strong> :';
							echo 'message:'. $donnee['message'] .'<br/>';
							?>
							<hr class="colorgraph">
						<?php
						}
						
						$reponse->closeCursor();
			 ?>
		
			
			
			<center><h2><small>Postez un commentaire!!!</small></h2></center>
			<hr class="colorgraph">
			
            <form role="form" class="register-form">
			<div class="form-group">
				<input type="text" name="sujet" id="sujet" class="form-control input-lg" placeholder="Sujet" tabindex="4">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="8" placeholder="* Votre Commentaire" name="message"></textarea>
			</div>

			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Connexion" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>	
			</div>
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