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
<title>AGENDA_VIP | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="INFO-MAC" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />

<!-- Chargement les fichiers css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Skin du site web -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- Arriere plan de Body -->
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
					<li><a href="index.php" title="Accueil"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Agenda</a><i class="icon-angle-right"></i></li>
					<li class="active">Standard</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="searchtitle">
				<p class="lead">HARMONIE</p>
				</div>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#">Les agendas INFO-MAC allient harmonieusement culture et modernité.</a></h3>
							</div>
							<img src="img/dummies/blog/flyers 2.JPG" alt="" class="img-responsive" />
							<strong>Caracteristique: </strong>tranche: Naturelle Personnalisation: Marquage au laser, en sérigraphie ou doming poids / Format: 550g - 195 * 265 mm couleur: Unique Zone de marquage: 100 * 60 mm
						</div>
						
						<p>
							 Loin d’être un simple document de prise de note, l’agenda INFO-MAC se veut un recueil géographique, un condensé historique, une vitrine touristique. Caractéristiques qui font de cet ouvrage un joyau culturel qui suscite intérêt et admiration. Pure merveille africaine, de part la quantité d’informations qu’ellefournit sur le vieux continent, l’agenda INFO-MAC occupe aujourd’hui une place de choix dans la communication des entreprises camerounaises et sous-régionales.
						</p>
				</article>	

		</div>
		
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					
					<!-------------------------------------------------------------------------FORMULAIRE DE RECHERCHE------------------------------------------>
					<form role="form">
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Recherche...">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Modèles V.I.P</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="agenda_Standard.php">Delice</a></li>
						<li><i class="fa fa-angle-right"></i><a href="class.php">Class</a></li>
						<li><i class="fa fa-angle-right"></i><a href="harmonie.php">Harmonie</a></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Modèles Harmonie</h5>
					<ul class="recent">
						
						<img src="img/dummies/blog/Harmonie.png" class="pull-left" alt="" />
				
				</div>
				<div class="widget">
					<h5 class="widgetheading">Agendas Recents</h5>
					<ul class="tags">
						<li><a href="portfolio.php">V.I.P</a></li>
						<li><a href="portfolio.php">STANDARD</a></li>
						<li><a href="portfolio.php">BI-MATIERES</a></li>
						
					</ul>
				</div>
				
				
				
				<div class="widget">
				<h5 class="widgetheading">Dernier Post</h5>
				<ul class="recent">
						<li>
				<img src="img/dummies/blog/flyers3.jpg" class="pull-left" alt="" />
				</li>
				</ul>
				
				</div>
				</aside>
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