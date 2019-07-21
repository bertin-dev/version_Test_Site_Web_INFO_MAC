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
<title>LOGIN | INFO-MAC.FR</title>
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
							<form method="post" action="Traitement_login.php" enctype="multipart/form-data">
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
					<li><a href="#">Forum</a><i class="icon-angle-right"></i></li>
					<li class="active">Connexion</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	
	
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" class="register-form">
			<h2>Connectez-Vous <small>et Posez des Questions.</small></h2>
			<hr class="colorgraph">

			<div class="form-group">
				<input type="email" name="email_login" id="email" class="form-control input-lg" placeholder="Adresse Mail" tabindex="4">
			</div>
			<div class="form-group">
				<input type="password" name="password_login" class="form-control input-lg" id="exampleInputPassword1" placeholder="Mot de passe">
			</div>

			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Souvenez-Vous</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="Connexion" value="Connexion" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6">Vous n'avez pas de compte? <a href="register.php">Inscrivez-Vous</a></div>
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