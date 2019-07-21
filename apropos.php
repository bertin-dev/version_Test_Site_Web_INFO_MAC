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
					<li class="active">Apropos</li>
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
				<p class="lead">SOCIETE</p>
				</div>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<center><h3><a href="#">INFO- MAC est une entreprise installée à Grenoble (France) et depuis quelques années à Douala.<br/>Notre société est devenue au fil des années une référence dans le domaine de l’imprimerie et de l’agenda personnalisé au Cameroun.</a></h3></center>
							</div>
						</div>
						<p>
							 Grâce à notre parfaite maîtrise de toute la chaîne graphique (studio de création, mise en page, flashage et impression), nous défendons les valeurs de services et d’adaptation, pour vous offrir <strong>des produits de qualité.</strong><br/><br/>
							 Nous vous proposons en outre un service en matière de communication par l’objet <strong>(Imprimerie, Agendas, Sérigraphie, Gadgets publicitaires) </strong>pour accompagner le développement de votre entreprise.<br/><br/>
							 En ce qui concerne précisément <strong>le produit agenda</strong>, nous créons et <strong>développons des concepts originaux en matière d’agendas exclusifs et personnalisés..</strong> Nous vous donnons en outre la possibilité de personnaliser vos agendas à l’image de votre entreprise. Les maître-mots de la cellule créative sont <strong>sur-mesure et différence.</strong><br/><br/>
							 Preuve de notre professionnalisme, nos clients : <strong>Cabinet Civil de la Présidence du Cameroun, Port Autonome de Douala, Société Générale de Banques au Cameroun, Crédit Lyonnais Grenoble, Université de Douala, Ministère du Tourisme, diverses PME et PMI locales</strong>, nous renouvellent régulièrement leur confiance.<br/>

							 
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
					<h5 class="widgetheading">Dernier Post</h5>
					<ul class="recent">
						
						<img src="img/dummies/blog/Delice couche.png" class="pull-left" alt="" />
				
				</div>
				
				
				
				<div class="widget">
				<h5 class="widgetheading">Collection 2017</h5>
				<ul class="recent">
						<li>
				<img src="img/dummies/blog/flyers.jpg" class="pull-left" alt="" />
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