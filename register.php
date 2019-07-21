<?php session_start(); ?>
	
	<?php
	include("connectes.php");
	?>
	
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>INSCRIPTION | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="INFO-MAC" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="themes/css/base.css" rel="stylesheet" type="text/css">
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
					<li class="active">Inscription</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">

    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">	
	<div class="well well-small" style="text-align:left;" id="plan">
		<div id="rapport" class="alert alert-danger" style="display:none;"></div>
	
	
		<form id="inscription" method="post" action="execution.php?inscription=inscription" class="register-form">
			<h2>Inscrivez-vous <small>C'est Gratuit</small></h2>
			<hr class="colorgraph">
			<div class="form-group">
               <label for="sexe">Civilité * </label><br>			
                         <input type="radio" required name="civilite" value="M" id="sexe" tabindex="8"><font size="2"><label> Homme </label></font>
                         <input type="radio" required name="civilite" value="Mme" id="sexe" tabindex="9"><font size="2"><label> Femme</label></font>
			            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="nom" id="nom" class="form-control input-lg" placeholder="Nom" tabindex="1" required="required" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];}?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="prenom" id="prenom" class="form-control input-lg" placeholder="Prenom" tabindex="2" required value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];}?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="pseudo" id="pseudo" class="form-control input-lg" placeholder="Pseudo" tabindex="3" required value="<?php if(isset($_POST['pseudo'])){echo $_POST['email'];}?>">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="Adresse mail" tabindex="4" required value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="mot de passe" tabindex="5" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmez le mot de passe" tabindex="6" required><br/>
					</div>
				</div>
				<!-- ______________________________________INSERTION D'UNE IMAGE____________________________________________________-->
			
				
				
				<!-- _______________________________________________________________________________________________________________-->
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Accepter</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 Cliquez sur <strong class="label label-primary">Incription</strong>, signifi que Vous Acceptez les <a href="#" data-toggle="modal" data-target="#t_and_c_m">Conditions</a> d' utilisation des cookies.
				</div>
			</div>
			
			<hr class="colorgraph">
			
				<div id="rapport" class="alert alert-danger" style="display:none;"></div>
		<div>
			&nbsp &nbsp <img src="ajax-loader31.gif" class="uploads" style="display:none;">
		</div><br>
			
			
			
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="inscription" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6">Avez-Vous un Compte? <a href="login.php">Connectez-vous</a></div>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Termes & Conditions d'utilisation</h4>
			</div>
			<div class="modal-body">
				<p>
				
				</p>
				<p>
				
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Accepter</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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


<script>
      $(function() {
		  
				
		  $('#inscription').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('.uploads').show();
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
 
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            contentType: false, // obligatoire pour de l'upload
            processData: false, // obligatoire pour de l'upload
            dataType: 'html', // selon le retour attendu
            data:data,
            success:function(data){
			var test=$('#rapport').html(data).show();
			$('.uploads').hide();
				
			    
	}
           
       });
        });
	  });
		  
      </script>

</body>
</html>