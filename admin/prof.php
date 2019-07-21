<?php session_start();
include('../phpscripts/functions.php');
$db = db_connect();
$balises = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head><!-- 
    <meta charset="utf-8">
    <title>Nzoupe - Actualités</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
	<style type="text/css"></style>
	
	 -->
	
	
	
	
	 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="FORMULAIRE D'INSCRIPTION à L'INSTITUT SALOMON">
    <meta name="author" content="Etudiant Bertin Mounok, Dr. Philippe Totto Ndong">
	<meta name="keyword"  lang="fr" content="Centre de formation professionnel,Assistance de Direction Manager, Audit et Controle de Gestion,Communication Leadership et Cohesion d'equipe,Community Management,Conduite et Gestion des Projets,Coutenance,Creation de Charte Graphique,Culture Digitale,Deleguer Efficacement et prendre des Decisions,developpement Mobile,developpement Web,Developper son Potentiel Humain,Developper son propre Leadership,Elaborer un Plan de Management des Risques,Elaborer une DSF,Entreprenariat et Montage de Projet,Excel VBA,Gestion de la Paie,Gestion des Ressources Humaines,Infographie 2D3D4D,Les Fintech,Maintenance des Reseaux Informatiques,Maintenance Informatique,Management Associatif,Management et Leadership,Management_projets,Marketing Digital,Mener Efficacement les Negociations Commerciales,Methode et Outils de Fidelisation de la clientele,Montage Video et Spot,MS Access,MS Project Server Professionnel,Presenter Efficacement vos idees et projets,Redaction d'un Referentiel Projet Propre a Votre Entreprise,Redaction Professionnelle,Rediger un Business Plan,Rediger un cahier de Charge,Rediger un Plan Capacitif,Rediger un Schema Directeur,Sage - Comptabilite,Sage - Gestion commerciale,Sage - Paie,Secretaire,Secretariat Assistance Accueil,Secretariat Bureautique Bilingue,Secretariat Comptable,Web Design ,Bertin_Mounok, Philippe_Totto, Apropos de Nous, portfolio, Contact, Service E-Learning">
	<!-- Icône du site (favicon) -->
	<link rel="icon" type="image/jpg" href="../images/logo.jpg" alt="LOGO INSTITUT SALOMON" title="Logo Officiel de l'Institut Salomon"/>
    <title>ESPACE ADMINISTRATEUR | INSTITUT SALOMON</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/animate.min.css" rel="stylesheet">
     <link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">

	<?php include('../bbcode0.php');?>
</head>
<body>
<?php
	
/**
* function wordCut($sText, $iMaxLength, $sMessage)
*
* + cuts an wordt after $iMaxLength characters
*
* @param string $sText the text to cut
* @param integer $iMaxLength the text's maximum length
* @param string $sMessage piece of text which is added to the cut text, e.g. '...read more'
*
* @returns string
**/

function wordCut($sText, $iMaxLength, $sMessage)
{
if (strlen($sText) > $iMaxLength)
{
$sString = wordwrap($sText, ($iMaxLength-strlen($sMessage)), '[cut]', 1);
$asExplodedString = explode('[cut]', $sString);

echo $sCutText = $asExplodedString[0];

echo "<span style='font-size:1.1em;'>".$sCutText."</span>".$sMessage."";
}
else
{
echo "".$sText."";
}
}
?>







        <?php include_once("../analyticstracking.php") ?>   
	<?php include('header.html'); ?> 
		 
		 <section>
        <div class="container">	
		   <div class="row">
				
				
				
				
				
				
				
				
				
				       
	   				<div class="team col-xs-12 col-lg-3">
<?php include('../cadre prof.php');?>
	       </div><!--/.col-xs-12 col-lg-3 -->
				
				
				
				
				<div class="team col-xs-12 col-lg-9">
       
	   
	   
	   
	   <div class="thumbnail" style="margin-top:em;padding:1em;display:;">
<h4 align="left" id="test"><a href="#" title="my web solutions"><img src="../<?php echo $rslt001['avatars'];?>" class="img-rounded" width="100px" height="100px" align=""></a><br>
Salut <?php echo $rslt001['nom_f'];?>, Quoi de neuf ?
<div align="left" style="margin-top:em;">
		<button class="btn-warning btn-large" type="submit" id="publier">Publiez une actualité</button>
	</div>
</h4>			
	<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_publier" align="left">
		<h4>Partagez une actualité...</h4>		
				<form class="form-horizontal" id="my_form" action="../execution.php?ok=ok" name="myform" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="row-fluid" align="center">    
						<br><div id="rapport" class="alert alert-success" style="font-weight:bold;display:none;width:446px;padding:0.5em;font-size:1.1em;">
							
						</div>
					</div>
					<div class="row-fluid">    
						<div class="col-lg-12">
							<input type="text" id="titre" class="input-xxlarge" placeholder="Titre de la vidéo" name="titre" style="font-size:1.3em; height:1.7em;" required>
						</div>
					</div>
					
					<div class="row-fluid"> 
						<div class="col-lg-12" style="border:0px solid;width: 545px;background-color:rgba(0,0,0,0.1);">
							<input type="file" id="image" class="input-xxlarge"  name="image" style="font-size:1.2em; height:1.5em;margin-top:0.2em;border-radius:5px;background-color:rgba();">
						</div>
					</div>	
					
					
					<div class="control-group col-lg-12" align="center" style="margin-top:0.5em;">
					<input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />
					<input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />
					<input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />
					<input type="button" id="size" name="size" value="Size" onClick="javascript:bbcode('[font size=5px]', '[/font]');return(false)"  />
					<input type="button" id="color" name="color" value="Color" onClick="javascript:bbcode('[color=]', '[/color]');return(false)" />
					
					</div>
					
					<div class="control-group" align="center">
					  <textarea rows="10" name="contenu" cols="" id="contenu" class="input-xxlarge" placeholder="Quoi de neuf ?" style="font-size:1.2em;" class="input-xxxlarge"></textarea>
					</div>
					
					<div align="right" style="margin-top:-1em;">
						<button class="btn-warning btn-large" type="submit" >Partagez</button>&nbsp <span style="display:none;" class="gifpub"><img src="../ajax-loader18.gif"></span>
					</div>
					
				</fieldset>
			  </form>
	</div>
			
</div>
	   
	   



       </div> <!--/.col-xs-12 col-lg-9 -->	
	   
	   
	   
	   
	   
	     
	   

				
				
				
									
					
			
</div>
</div>
</section>



		
     
<?php include('footer.html'); ?>


     
                                             
 
<span id="themesBtn"></span>
 <script src="../jquery.js"></script>
    <script>
     $(function () {
  
		$('#publier').click(function(){

		$('#block_publier').toggle();	
		});

       $('#my_form').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('.gifpub').show();
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
				$('.gifpub').hide();
				$('#rapport').html(data).show().fadeIn('slow').delay(6000).fadeOut('slow');
						$('body').load('../mise_a_jour_actualite.php', function() {
				
      });
	}
           
       });
        });
	/*******************************************/
	  
	$('.like-btn').click(function(){
               
            $(this).addClass('like-h');
			var element = $(this);
			var I = element.attr("id");
			
            $.ajax({
                type:"POST",
                url:"../ajax.php",
                data:'act=like&id='+I,
                success: function(data){
					var like='#like-count'+I;
					$(like).text(data);
					$('.bg-red').css('width','0px');
					$('.bg-green').css('width','100%');
					$('.bg-defaut').css('width','0px');
					$('.like-btn').css('background-image','');	
					
					var nvx= parseInt(data)+1;
					$('.rate-count').text(nvx);
                }
            });
        });
        $('.dislike-btn').click(function(){
          
            $(this).addClass('dislike-h');
			var element = $(this);
			var I = element.attr("id");
            $.ajax({
                type:"POST",
                url:"../ajax.php",
                data:'act=dislike&id='+I,
                success: function(data){
				var nvx= parseInt(data);
				$('.rate-count').text(nvx);
				
				var dislike='#dislike-count'+I;
				$(dislike).text(data);
				$('.bg-red').css('width','100%');
				$('.bg-defaut').css('width','0px');
				$('.bg-green').css('width','0px');
				
                }
            });
        });
		
        $('.share-btn').click(function(){
			var element = $(this);
			var I = element.attr("id");
			 $('#block_comment'+I).toggle();
        });
/*********************************************************/

		$('.form_comment').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		$('.uploads').show();
		var element = $(this);	
		var I = element.attr("id");
		
			var contenu=$(this).find('input.contenu').val();
	
		$.ajax({
            url:"../ajax.php",
            type:"POST",
            data:"contenu="+contenu+"&id="+I,
            success:function(data){
				$('.uploads').hide();
				$('.share-btn'+I).text('Commentaire('+data+')');	
				$('#block_comment'+I).load('../commentaire.php?id='+I, function() {
				$('#contenu').val('');
      });
	}
           
       });
		
        });	 
/************************************************************/
$('.afficher_plus').click(function(){
var element = $(this);	
var I = element.attr("id");	
$('.col-lg-9').load('../pluscommentaire.php?id='+I, function() {
				
      });
});


	$('.smileys').click(function(){
	var element = $(this);	
	var I = element.attr("id");
	$('#img_smileys'+I).toggle();

	});
	$('.lol').click(function(){
	var element = $(this);	
	var I = element.attr("id");
	var smilies=$(this).attr('alt');
	var valeur=$('.contenu'+I).val();
	$('.contenu'+I).val(valeur+smilies);
	$('.contenu'+I).focus();

	});
	
	
			$('.supp').click(function(){
			var element = $(this);	
			var I = element.attr("name");
			var contenu=$(this).find('span.supp').text();
			
			if (confirm('Supprimer ce commentaire?')) 
			{
			$.ajax({
            url:'../modifications.php?modif=modif&id_comment='+I,
            type:'post',
            data:'terminer=ok',
            success:function(data){
			
				$('.rslt'+I).html(data).show().fadeIn('slow').delay(6000).fadeOut('slow');
				$('body').load('../mise_a_jour_actualite.php', function() {
				
      });
						
			}		
				   
			   });
					
			}
	
	});	
		
	$('.page').click(function(){
			var element = $(this);	
			var I = element.attr("name");
			$.ajax({
            url:"../ajax.php",
            type:"POST",
            data:"page=ok&id_page="+I,
            success:function(data){
			$('body').load('../mise_a_jour_actualite.php?page='+data, function() {
				
      });
			
	}
           
       });
			
	});
	
	 });
/***********************************************************/

   </script>
	  
</body>
</html>