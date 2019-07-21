<?php session_start();
include('phpscripts/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modification Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
	<style type="text/css">
		
	</style>
</head>
<body>
    <header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="span6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +237 696290261</li>
							</ul>
						</div>
						<div class="span6">
						<div id="sb-search" class="sb-search">
							
							<!-------------------------------------------RECHERCHE ET ENVOI DES DONNEES SUR LE SERVEUR A PARTIR DU FORMULAIRE--------------------------->
							<form>
								<input class="sb-search-input" placeholder="Entrez le terme recherche" type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Demarrer la recherche"></span>
								</form>
						</div>


						</div>
					</div>
				</div>
			</div>	
			
		
	
	</header>
	
	
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="admin.php">COMMUNICATION /</a><i class="icon-angle-right"></i></li>
					<li class="active">INFO-MAC</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
<!--Header Ends================================================ -->
<!-- Page banner -->
 
<!-- Page banner end -->
<section id="bodySection">
<div class="container">					
<div class="row">
<?php
include('connexion_base_donnee.php');
$req001=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req001->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt001=$req001->fetch();
?>	
<div class="span3" style="">
	<?php include('cadre.php');?>
<div class="thumbnail">
	<a href="http://mywebsolution.info" target="_blank" ><img src="themes/images/portfolio/mywebsolution.jpg" alt="bootstrap business templates"/></a>
	<h4>My web solution</h4>
	<p>Our aim is simple - to provide affordable web design and development services for different devices., </p>
	<div class="btn-toolbar">
	   <div class="btn-group toolTipgroup">
		<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>
		<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>
		<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>
		<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>
		<a href="http://mywebsolution.info" target="_blank" class="btn" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>
	  </div>
	</div>
</div>
<br/>
<div class="well well-small">
<h4>Popular Posts</h4>
<ul class="nav nav-tabs nav-stacked">
<li class="active"><a href="#">Customizations</a></li>
<li><a href="#">Media</a></li>
</ul>
</div>

<div class="well well-small">
<h4>Archives</h4>
<ul class="nav nav-tabs nav-stacked">
<li class="active"><a href="#">November 2012 (10)</a></li>
<li><a href="#">October 2012 (19)</a></li>
<li><a href="#">September 2012 (19)</a></li>
<li><a href="#">August 2012 (22)</a></li>
<li><a href="#">July 2012 (25)</a></li>
<li><a href="#">June 2012 (19)</a></li>
<li><a href="#">May 2012 (27)</a></li>
<li><a href="#">April 2012 (15)</a></li>
<li><a href="#">More...</a></li>
</ul>
</div>

<div class="well well-small">
<h4>Tag</h4>
	<a class="btn btn-mini" href="#">Business</a>
	<a class="btn btn-mini" href="#">Computer</a>
	<a class="btn btn-mini" href="#">Mobile</a>
	<a class="btn btn-mini" href="#">Website</a>
	<a class="btn btn-mini" href="#">Software</a>
	<a class="btn btn-mini" href="#">Html and css</a>
	<a class="btn btn-mini" href="#">php</a>
	<a class="btn btn-mini" href="#">Media</a>
</ul>
</div>
</div>
					
<div class="span9">		
<div class="thumbnail" style="margin-top:em;padding:1em;">
<h3 align="left"><?php echo  $rslt001['pseudo'];?> >> Modifier Profil</h3>					
</div>
			
<div class="thumbnail" style="background-color:rgba();" >
			<li class="media well well-small" style="background-image:url('pattern17.png');">
			<span>
				<a class="pull-left" href="#">
				
				<img src="<?php echo $rslt001['avatars'];?>" class="img-rounded" id="infos3" width="100px" height="100px" align="">
				 
				</a>
			<span>	
				<div class="media-body" style="background-color:rgba();border-radius:5px; padding:0.5em;">
				<div id="infos1">  
				
					<h3 class="media-heading" style=";">#<?php echo $rslt001['nom'];?></h3>
		
				<div style="background-color:rgba(0,0,0,0.1); font-size:1.1em;margin-top:0.3em;border-left:5px solid rgba(245,76,16,1);padding:0.5em;border-radius:5px;">
					<div style="margin-top:em;"><b>Nom : </b><span style="color:grey;font-weight:bold;"><i> <?php echo  $rslt001['nom'];?></i></span></div>
					<div style="margin-top:em;"><b>Prenom : </b><span style="color:grey;font-weight:bold;"><i> <?php echo  $rslt001['prenom'];?></i></span></div>
					<div style="margin-top:0.3em;"><b style=""> Pseudonyme : </b> <span style="color:rgba(0,74,148,1);font-weight:bold;">@<?php echo  $rslt001['pseudo'];?></span></div>
					
					<div style="margin-top:0.3em;"><b> Email : </b> <span style="color:grey;font-weight:bold;"><?php echo  $rslt001['email'];?></span></div>
					<div id="rslt"></div>
				</div>	
				</div>	
					<br/>
					 <div align="right" style="background-color:white;"> 	
							
								<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_infos" align="left">
									<h4 style="color:rgba(245,76,16,0.8);">Modifier vos informations personnelles...</h4>
									<div id="rapport1" class="" style="display:none;width:px;padding:0.5em;font-size:1.1em;"></div>
									<form class="form-horizontal" id="infos" action="modifications.php?infos=infos&id_membre=<?php echo $rslt001['id'];?>" method="post" enctype="multipart/form-data">
									<fieldset>
										<div class="row-fluid">
											<div class="span6">
												<input type="text" id="nom" value="<?php echo $rslt001['nom'];?>" class="input-xxlarge" placeholder="Nom" name="nom" style="font-size:1.3em; height:1.7em;" required>
											</div>
										</div>
										
										<div class="row-fluid">
											<div class="span6">
												<input type="text" id="prenom" value="<?php echo $rslt001['prenom'];?>" class="input-xxlarge" placeholder="Prenom" name="nom" style="font-size:1.3em; height:1.7em;" required>
											</div>
										</div>
		
										<div class="row-fluid">
											<div class="span6">
												<input type="email" id="email" value="<?php echo $rslt001['email'];?>" class="input-xxlarge" placeholder="Adresse élèctronique" name="email" style="font-size:1.3em; height:1.7em;" required>
											</div>
										</div>
								
								
									
										<div style="display:none;" id="uploads">
											<img src="ajax-loader28.gif">
										</div>
										
										<br><br><div align="left" style="margin-top:-1em;">
										<button class="btn-success btn-large" type="submit" >Mettre à jour</button>
										</div>
										
									</fieldset>
								  </form>
							</div>
							
							
							
							<button class="btn" style="font-size:1.1em;" id="infos_pass"><b>Modifier Mot de passe <img src="next.png" width="16px" height="16px"></b></button><br>
							<div id="rapport2" align="left" style="display:none;width:px;padding:0.5em;font-size:1.1em;"></div>
								<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_pass" align="left">
									<h4 style="color:rgba(245,76,16,0.8);">Modification du mot de passe...</h4>
									<form class="form-horizontal" id="pass" action="modifications.php?pass=pass&id_membre=<?php echo $rslt001['id'];?>" method="post" enctype="multipart/form-data">
									<fieldset>
									<div class="row-fluid">    
										<div class="span6">
											<input type="password" id="mtp" class="input-xxlarge" placeholder="Ancien mot de passe" name="mtp" style="font-size:1.3em; height:1.7em;" required>
										</div>
									</div>
									<div class="row-fluid">    
										<div class="span6">
											<input type="password" id="rmtp" class="input-xxlarge" placeholder="Nouveau mot de passe" name="rmtp" style="font-size:1.3em; height:1.7em;" required>
										</div>
									</div>
									<div class="row-fluid">    
										<div class="span6">
											<input type="password" id="rmtp0" class="input-xxlarge" placeholder="Confirmer Nouveau mot de passe" name="rmtp0" style="font-size:1.3em; height:1.7em;" required>
										</div>
									</div>
									
									<div style="display:none;" id="uploads1">
											<img src="ajax-loader28.gif">
									</div>
									
									<br><br><div align="left" style="margin-top:-1em;">
										<button class="btn-success btn-large" type="submit" >Modifier</button>
									</div>
										
									</fieldset>
								  </form>
							</div>  
							   <button class="btn" style="font-size:1.1em;" id="infos_photo"><b>Photo de profil <img src="next.png" width="16px" height="16px"></b></button><br>
								
								<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_photo" align="left">
									<h4 style="color:rgba(245,76,16,0.8);">Changer de photo de profil</h4>
									<div id="rapport3" class="" style="display:none;width:px;padding:0.5em;font-size:1.1em;"></div>
									<form class="form-horizontal" id="photo" action="modifications.php?photo=photo" name="<?php echo $rslt001['avatars'];?>" method="post" enctype="multipart/form-data">
									<fieldset>
									<div class="row-fluid">
											<div class="span6" >
												<img src="<?php echo $rslt001['avatars'];?>" class="photo" width="" height="">
											</div>
									</div>
									<div class="row-fluid">    
										<div class="span6">
											<input type="file" id="avatars" class="input-xxlarge"  name="avatars" style="font-size:1.2em; height:1.5em;margin-top:0.2em;border-radius:5px;background-color:rgba(0,0,0,0.2);"> 		
											<input type="submit" id="charger" class="btn-primary" title="Nous rejoindre" style="font-size:1.2em;padding:0.4em;" value="Charger l'image"> 
											<div style="display:none;" id="uploads2">
												<img src="ajax-loaderr.gif">
											</div>
										</div>
									</div>
									
									<br><br><div align="left" style="margin-top:-1em;">
										<button class="btn-success btn-large" type="submit" name="<?php echo $rslt001['id'];?>" id="terminer">Mettre a jour</button>
									</div>
										
									</fieldset>
								  </form>
							</div>   
					</div>
				
				</div>
				
		  </li>	
</div><br>


<br/>
	
</div>


<!-- Sidebar comumn -->

</div>
</div>
</div>
</section>
 <!-- Footer
  ================================================== -->
	<?php 
	include("pied_de_page1.php");
	?>
	
<span id="themesBtn"></span>
 <script src="jquery.js"></script>
    <script>
     $(function () {
  
		$('#infos_perso').click(function(){
		var element = $(this);	
		var I = element.attr("name");
		var J = element.attr("title");
		$('#block_infos').toggle();
		$('#filiere').val(I);
		$('#niveau').val(J);
		
		});
		
		$('#infos_pass').click(function(){

		$('#block_pass').toggle();	
		});

		$('#infos_photo').click(function(){

		$('#block_photo').toggle();	
		});
/**************************************************************************/
       $('#infos').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('#uploads').show();
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
				$('#uploads').hide();
				$('#rapport1').html('<br><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><p><b><i>'+data+'</i></b></p></div>').show();
				$('#infos1').load('infos_perso.php',function(){
					
				});
			
	}
           
       });
        });      


		$('#pass').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('#uploads1').show();
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
			$('#uploads1').hide();	
			$('#rapport2').html('<br><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><p><b><i>'+data+'</i></b></p></div>').show();
				
	}
           
       });
        });
/***********************************************/


	 
/************************************************************/
	$('#photo').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('.uploads2').show();
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
		var element = $(this);	
		var I = element.attr("name");
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            contentType: false, // obligatoire pour de l'upload
            processData: false, // obligatoire pour de l'upload
            dataType: 'html', // selon le retour attendu
            data: data,
            success:function(data){
				
				$('.photo').attr('src',data);
				$('.photo').attr('width','');
				$('.photo').attr('height','');
				$('#charger').replaceWith('<input type="submit" id="annuler" class="btn-success" title="Nous rejoindre" style="font-size:1.2em;padding:0.4em;" value="Annuler">')
				$('.uploads2').hide();
				$('#annuler').click(function(){
	
							$('#annuler').replaceWith('<input type="submit" id="charger" class="btn-primary" title="Nous rejoindre" style="font-size:1.2em;padding:0.4em;" value="Charger l\image">');
							$('.photo').attr('src',I);
							$('.photo').attr('width','150px');
							$('.photo').attr('height','150px');
							$('#avatars').replaceWith('<input type="file" id="avatars" class="input-xxlarge"  name="avatars" style="font-size:1.2em; height:1.5em;margin-top:0.2em;border-radius:5px;background-color:rgba(0,0,0,0.2);">');
		});
	}
           
       })
        });	


		$('#terminer').click(function (){
        
		var element = $(this);	
		var I = element.attr("name");
		$('#uploads2').show();
        $.ajax({
            url:'modifications.php?ok=ok&id_membre='+I,
            type:'post',
            data:'terminer=ok',
            success:function(data){
				$('#uploads2').hide();
				$('#rapport3').html('<br><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><p><b><i>'+data+'</i></b></p></div>').show();
				
				$('body').load('mise_a_jour.php', function() {
				
      });
					
				
	}		
           
       });
        });		
	});
	
/***********************************************************/
	  
	  
   </script>
	  
</body>
</html>