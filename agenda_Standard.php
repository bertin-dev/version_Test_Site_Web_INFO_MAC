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
<title>AGENDA_STANDARD | INFO-MAC.FR</title>
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
				<p class="lead"> DELICE</p>
				</div>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#">Les agendas INFO-MAC allient harmonieusement culture et modernité.</a></h3>
							</div>
							<img src="img/dummies/blog/Delice Big.PNG" alt="" class="img-responsive" />
							<strong>Caractéristique: </strong>tranche: Naturelle Personnalisation: Marquage au laser, en sérigraphie ou doming poids / Format: 550g - 195 * 265 mm couleur: Unique Zone de marquage: 100 * 60 mm
						</div>
						<p>
							 NFO-MAC est devenu en quelques années une référence dans le domaine de l'agenda et de la communication par objet au Cameroun. Nous créons et développons des concepts originaux en matière d’agendas exclusifs et personnalisés. Grâce à notre parfaite maîtrise de toute la chaîne graphique (studio de création, mise en page, flashage et impression), nous défendons les valeurs de services et d’adaptation, pour offrir un produit sur mesure au meilleur prix du marché.
						</p>
				</article>	

			
		</div>
		
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					
					<!-------------------------------------------------------------------------FORMULAIRE DE RECHERCHE------------------------------------------>
					<form>
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Recherche...">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Modèles Standard</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="agenda_standard.php">Delice</a></li>
						<li><i class="fa fa-angle-right"></i><a href="class.php">Class</a></li>
						<li><i class="fa fa-angle-right"></i><a href="harmonie.php">Harmonie</a></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Dernier Post</h5>
					<ul class="recent">
						<img src="img/dummies/blog/Delice.png" class="pull-left" alt="" />
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Agendas recents</h5>
					<ul class="tags">
						<li><a href="agenda_VIP.php">V.I.P</a></li>
						<li><a href="agenda_Standard.php">STANDARD</a></li>
						<li><a href="agenda_BiMatiere.php">BI-MATIERES</a></li>
					</ul>
				</div>
				
				
				
				<div class="widget">
				<h5 class="widgetheading">Dernier Flyer</h5>
				<ul class="recent">
				<li>
				<img src="img/dummies/blog/Flyers imprimerie.jpg" class="pull-left" alt="" />
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