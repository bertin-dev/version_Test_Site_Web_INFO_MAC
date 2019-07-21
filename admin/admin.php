<?php

// On se facilite la vie
$ip = $_SERVER["REMOTE_ADDR"];

// Fonction qui servira à signer nos cookie pour les protéger
// Cette fonction génère 25 caractères aléatoires
function signature()
{
  $arr = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $tmp = '';

  while(strlen($tmp)<25)
  {
    $tmp .= $arr[mt_rand(0,61)];
  }

  return $tmp;
}

// Ouverture de la session globale, utilisée comme espace mémoire
session_id('BS1OYs7hjlW3rRvFfJ0m');
session_start();
include('../phpscripts/functions.php');
$db = db_connect();
$balises = true;

// 1. On vérifie si l'utilisateur aurait déjà un cookie d'administration valide
if(isset($_COOKIE['ID_ADMIN'], $_SESSION[$ip.'ID_ADMIN']) && $_COOKIE['ID_ADMIN']===$_SESSION[$ip.'ID_ADMIN'])
{
  // Si oui, on inclut la page d'administration (un document HTML par exemple)
  ?>
  <!-- Insérer ici la page HTML de l'interface d'administration -->
  
  
  
  
  
  
  
  
  
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Interface d'administration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
    <meta name="author" content="http://iweb-studio.com" />
<!-- css -->
	<link type="text/css" rel="stylesheet" href="../css/style1.css">
	<link type="text/css" rel="stylesheet" href="../css/style.css">
	<link id="callCss" rel="stylesheet" href="../themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="../themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="../themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
	<style type="text/css"></style>



<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />
	<?php include('../bbcode0.php');?>
	<!-- boxed bg -->
	<link rel="icon" type="image/png" href="../logo.png"/>
  </head>
  <body>
  
  <?php
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
	
	
	<div class="span9">
	<div class="thumbnail" style="margin-top:em;padding:1em;display:;">
	<!---------------------------------------espace a deplacer vers l'espace admin--------------------------------------------------------------->
<h4 align="left" id="test"><a href="#" title="my web solutions"><img src="<?php echo $rslt001['avatars'];?>" class="img-rounded" width="100px" height="100px" align=""></a><br>
Salut <?php echo $rslt001['nom'];?>, Quoi de neuf?
<div align="left" style="margin-top:em;">
		<button class="btn-warning btn-large" type="submit" id="publier">Publier une actualité</button>
	</div>
</h4>			
	<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_publier" align="left">
		<h4>Partagez une actualité...</h4>		
				
				
				<form class="form-horizontal" id="my_form" action="execution.php?ok=ok" name="myform" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="row-fluid">    
						<br><div id="rapport" class="alert alert-success" style="font-weight:bold;display:none;width:446px;padding:0.5em;font-size:1.1em;">
							
						</div>
					</div>
					<div class="row-fluid">    
						<div class="span6">
							<input type="text" id="titre" class="input-xxlarge" placeholder="Titre de l'actualité" name="titre" style="font-size:1.3em; height:1.7em;" required>
						</div>
					</div>
					
					<div class="row-fluid" > 
						<div class="span6" style="border:0px solid;width: 545px;background-color:rgba(0,0,0,0.1);">
							<input type="file" id="image" class="input-xxlarge"  name="image" style="font-size:1.2em; height:1.5em;margin-top:0.2em;border-radius:5px;background-color:rgba();">
						</div>
					</div>	
					
					
					<div class="control-group" align="left" style="margin-top:0.5em;">
					<input type="button" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)" />
					<input type="button" id="italic" name="italic" value="Italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)" />
					<input type="button" id="souligné" name="souligné" value="Souligné" onClick="javascript:bbcode('[s]', '[/s]');return(false)" />
					<input type="button" id="size" name="size" value="Size" onClick="javascript:bbcode('[font size=5px]', '[/font]');return(false)"  />
					<input type="button" id="color" name="color" value="Color" onClick="javascript:bbcode('[color=]', '[/color]');return(false)" />
					
					</div>
					
					<div class="control-group" align="left">
					  <textarea rows="10" name="contenu" cols="" id="contenu" class="input-xxlarge" placeholder="Quoi de neuf au campus?" style="font-size:1.2em;" class="input-xxxlarge"></textarea>
					</div>
					
					<div align="left" style="margin-top:-1em;">
						<button class="btn-warning btn-large" type="submit" >Partagez</button>&nbsp <span style="display:none;" class="gifpub"><img src="ajax-loader18.gif"></span>
					</div>
					
				</fieldset>
			  </form>
	</div>
			
</div>
</div>
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
$('.span9').load('../pluscommentaire.php?id='+I, function() {
				
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- Fin de la page HTML -->
  <?php
  
  // On aurait pu aussi utiliser la fonction include pour simplifier le code :
  // include '/www/pages/admin/admin_interface.php';
}

// Sinon, on regarde si l'utilisateur a envoyé des données de connexion pour d'identifier
// Il est important d'appliquer la condition is_string() sur $_POST['psw'],
// parce que la fonction hash() n'admet que des chaines de caractère.

else if(isset($_POST['psw']) && is_string($_POST['psw']))
{
  // On vérifie que le mot de passe est correct avec un hash sécurisé
  // Ici, le mot de passe est : maison
  $hash = hash('sha256','#Hu5'.$_POST['psw'].'p2!B');
  if($hash=='29a2d24eac52388d45ec150fb67cf161b028c5eb635677dfa61c152bb6c8a52b')
  {
    // Si oui, on signe un cookie...
    $sign_cookie = signature();
    setcookie('ID_ADMIN', $sign_cookie);

    // ... et on le stocke dans la session globale en le protégeant
    // par l'adresse IP
    $_SESSION[$ip.'ID_ADMIN'] = $sign_cookie;

    header('Location: admin.php'); exit;
  }

  // Redirection en cas d'erreur : mot de passe incorrect
  header('Location: admin.php?error');
}
else
{
  ?>
  <!-- Intégrer ici une page HTML/PHP qui demande de s'authentifier avec un mot de passe -->
  <!-- Pour simplifier, je ne donne que le formulaire code brut -->
  <form action="admin.php" method="post">
    <p>Mot de passe :</p>
    <input type="password" name="psw" autofocus required maxlength="100">
    <p>&nbsp;</p>
    <input type="submit" value=" Valider ">
  </form>
  <?php
  if(isset($_GET['error']))
  {
    echo 'Mot de passe incorrect';
  }
}

?>
