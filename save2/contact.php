<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>INFO-MAC</title>
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
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8544374701382!2d9.695878587936182!3d4.050100497054838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112f5961ff299%3A0x7142dd5b91178195!2sRue+Castelnau%2C+Douala!5e0!3m2!1sfr!2scm!4v1470047863559" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	
	
	
			
	
	    <!--__________________________________________________UTILISATION DE PHP ET MYSQL PDO__________________-->
		
		<form role="form" class="register-form">
			<h2>Nous Contatez <small>En remplissant le formulaire ci-dessous</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-md" placeholder="Nom" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-md" placeholder="Prenom" tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="8" placeholder="* Votre Commentaire" name="message"></textarea>
			</div>

			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-4"><input type="submit" value="Envoyez" class="btn btn-theme btn-block btn-md" tabindex="7"></div>
				<div class="col-xs-12 col-md-8">* Remplir le formulaire S.V.P!</div>
			</div>
		</form>
		
		
		
		
		

			</div>
		</div>
	</div>
	</section>
	<!---------------------------------------------------------APPEL DU PIED DE PAGE PAR PHP--------------------------------------------------------->
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