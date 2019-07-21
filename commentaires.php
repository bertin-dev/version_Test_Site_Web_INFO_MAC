<?php session_start();
include('phpscripts/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Commentaires | INFO-MAC</title>
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
					<li><a href="admin.php">ESPACE COMMUNICATION /</a><i class="icon-angle-right"></i></li>
					<li class="active">INFO-MAC</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

<!--Header Ends================================================ -->
<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/blog.png) no-repeat center center #000;">
	<div class="container" >

		<h1 id="pageTitle">Blog 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
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
<div class="well well-small">
<h4 align="center"><img src="<?php echo $rslt001['avatars'];?>" class="img-circle"><br>@<?php echo $_SESSION['pseudo'];?></h4>
<ul class="nav nav-tabs nav-stacked">
	<li class="active"><a href="#"><?php echo $rslt001['nom'];?></a></li>
	<li><a href="#">En ligne</a></li>
	<li><a href="#">Chat et Discussions</a></li>
	<li><a href="#">Mes camarades</a></li>
	<li><a href="#">Mes cours</a></li>
	<li><a href="#">AE-FS</a></li>
	<li><a href="#">Modifier profil</a></li>
	<li><a href="#">Déconnexion</a></li>
	
  </ul>
</div>
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
<h4 align="left" id="test"><a href="#" title="my web solutions"><img src="<?php echo $rslt001['avatars'];?>" class="img-rounded" width="100px" height="100px" align=""></a><br>
Salut <?php echo  $rslt001['nom'];?>,Quoi de neuf au campus?
<div align="left" style="margin-top:em;">
		<button class="btn-warning btn-large" type="submit" id="publier"> <i class="icon-envelope"></i> Publier une actualité</button>
	</div>
</h4>			
	<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_publier" align="left">
				<form class="form-horizontal" id="my_form" action="execution.php?ok=ok" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="row-fluid">    
						<div id="rapport" class="alert alert-success" style="display:none;width:446px;padding:0.5em;font-size:1.1em;">
							
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
					
					
					<div class="control-group" align="left">
					  <textarea rows="10" name="contenu" cols="" id="textarea" class="input-xxlarge" placeholder="Quoi de neuf au campus?" style="font-size:1.2em;" class="input-xxxlarge"></textarea>
					</div>
					
					<div align="left" style="margin-top:-1em;">
					<button class="btn-warning btn-large" type="submit" > <i class="icon-envelope"></i> Partagez</button>
					</div>
					
				</fieldset>
			  </form>
	</div>
			
</div>
<?php
include('connexion_base_donnee.php');
$req=$bdd->prepare('SELECT * FROM actualites WHERE id_actualite=:id_actualite');
$req->execute(array('id_actualite'=>$_GET['id']));
$rslt=$req->fetch();

	$req0=$bdd->prepare('SELECT avatars FROM inscription WHERE id=:id_membre');
	$req0->execute(array('id_membre'=>$rslt['id']));
	$rslt0=$req0->fetch();
?>				
<div class="thumbnail" style="background-color:rgba();">
<div style="background-color:rgba(0,74,148,0.5);border-top:2px solid rgba(245,76,16,0.8);border-left:2px solid rgba(245,76,16,0.8);border-right:2px solid rgba(245,76,16,0.8);">
<p class="meta" style="margin-top:0.5em;background-color:rgba(0,74,148,0.8);"><img align="left" src="<?php echo $rslt0['avatars'];?>" width="64px" height="64px" class="img-rounded" style="margin-top:-0.2em;margin-left:0.2em;"> </p>
<br><p align="left">&nbsp <b style="background-color:rgba(245,76,16,0.5); padding:0.1em;">@<?php echo $rslt['pseudo'];?> #<?php echo $rslt['id_actualite'];?></b>, 
<h3 align=""  style="margin-top:1em;border-top:5px solid rgba(245,76,16,0.8);height:em;"><a href="#" title="my web solutions"> <?php echo $rslt['titre'];?></a></h3>
</p>
</div>


<p align="center" style="font-weight:bold;"> 
<img src="detail.png"> Filiere ,
<a href="#" title="View all posts in Category 3">Niveau </a>,<?php echo date('d-m-Y H:i'); ?></p>

<p  style="display:block;padding:em;">
<?php 
if(isset($rslt['image']) AND !empty($rslt['image']))
{
?>
	<img src="<?php echo $rslt['image'];?>"> 

<?php
}
//on recupere le nbrs total de like et de dislike
$req0=$bdd->prepare('SELECT aime,noaime FROM actualites WHERE id_actualite=:id_actualite');
$req0->execute(array('id_actualite'=>$rslt['id_actualite']));
$rslt0=$req0->fetch();	
$like=$rslt0['aime'];
$dislike=$rslt0['noaime'];
$total=$like+$dislike;	

?></p>
<p class="contenu" style="display:block;padding:1em;background-color:rgba(245,76,16,0.2);" align="left">
	<span style="font-size:1.1em;"><?php echo $rslt['contenu'];?></span>
</p>
	
     <div class="tab-tr" id="t1" style="background-color:rgba();">
			<?php
				$req2=$bdd->prepare('SELECT * FROM mespreferes WHERE id_actualite=:id_actualite AND id=:id_membre');
				$req2->execute(array('id_actualite'=>$rslt['id_actualite'],'id_membre'=>$rslt['id']));
				$rslt2=$req2->fetch();
				
				if($rslt2['aime']==1)
				{
			?>
			<div id="<?php echo $rslt['id_actualite'];?>" style="" class="like-btn like-h">Like</div>
			<div id="<?php echo $rslt['id_actualite'];?>" class="dislike-btn"></div>
			
			<?php	
				}
				else if($rslt2['aime']==2)
				{
			?>
			<div id="<?php echo $rslt['id_actualite'];?>" class="like-btn">Like</div>
			<div id="<?php echo $rslt['id_actualite'];?>" class="dislike-btn dislike-h"></div>
			<?php
				}
			else
			{
			?>
			<div id="<?php echo $rslt['id_actualite'];?>" class="like-btn">Like</div>
			<div id="<?php echo $rslt['id_actualite'];?>" class="dislike-btn"></div>
			<?php
					
			}
			//requetes pour ompter le nombre de commentaires
			$req3=$bdd->prepare('SELECT count(*) As nbrs_comment FROM commentaires WHERE id_actualite=:id_actualite');
			$req3->execute(array('id_actualite'=>$rslt['id_actualite']));
			$rslt3=$req3->fetch();
			
			?>
			<div class="share-btn share-btn<?php echo $rslt['id_actualite'];?>" id="<?php echo $rslt['id_actualite'];?>" style="font-weight:bold;">Commentaire(<?php echo $rslt3['nbrs_comment'];?>)</div>
			
            <div class="stat-cnt" style="background-color:rgba();padding:em;">
                <div class="rate-count rate-count<?php echo $rslt['id_actualite'];?>" id="<?php echo $total;?>"><?php echo $total;?></div>
                <div class="stat-bar">

                    <div class="bg-green" style="width:;"></div>
                    <div class="bg-red" style="width:100%;"></div>
                </div><!-- stat-bar -->
				
				<div class="dislike-count" id="dislike-count<?php echo $rslt['id_actualite'];?>"><?php echo $rslt['noaime'];?></div>
				<div class="like-count" id="like-count<?php echo $rslt['id_actualite'];?>"><?php echo $rslt['aime'];?></div>
  
            </div><!-- /stat-cnt -->
						
        </div><!-- /tab-tr -->
<br><br>

<div style="background-image:url('pattern12.png');padding:0.5em;">
<div id="mycomment"></div>
	<form id="<?php echo $rslt['id_actualite'];?>" class="form_comment form_comment<?php echo $rslt['id_actualite'];?>" name="myform">
				<fieldset>
					<div style="width:100%;" align="left" > 
						<img src="<?php echo $rslt001['avatars'];?>" align="left" width="50px" height="50px" class="img-rounded" style="display: inline-block;" align="left">
						<p style="clear: both;display: inline-block;width:70%;vertical-align:top;">
							<input type="text" align="" id="contenu" class="input-xxlarge contenu contenu<?php echo $rslt['id_actualite'];?>" placeholder="Laissez un commentaire"  name="contenu" style="font-size:1.1em;border-radius:5px; height:2.1em;">
								&nbsp <span class="uploads" style="display:none;"><img src="ajax-loader1.gif"></span>
							<input type="submit" style="display:none;">&nbsp <span class="load_comment" style="display:none;"><img src="ajax-loader6.gif"></span><span style="font-weight:bold;color:rgba(245,76,16,1);"><button type="button"class="btn btn-primary0 smileys" id="<?php echo $rslt['id_actualite'];?>"><img src="confus.gif" width="18px" height="18px">Smileys</button></span></p>
							<div style="background-color:;padding:em;border-radius:5px;margin-left:3em;display:none;" id="img_smileys<?php echo $rslt['id_actualite'];?>">
								<img src="smileys/heureux.png" class="lol" alt=":happy:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/lol.png" class="lol" title="lol" alt=":lol:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/triste.png" class="lol" title="triste" alt=":triste:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/cool.png" class="lol" title="cool" alt=":frime:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/rire.png" class="lol" title="rire" alt=":D"	 id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								
								<img src="smileys/peur.png" class="lol" title="peur" alt=":o.O" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/cry.png" class="lol" title="cry" alt=":cry:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/kiss.png" class="lol" title="kiss" alt=":*" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								
								<img src="smileys/unsure.png" class="lol" title="unsure" alt="/:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/angel.png" class="lol" title="angel" alt=":O" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/pacman.png" class="lol" title="pacman" alt=":V" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/confused.png" class="lol" title="confus" alt=":confus:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/blague.png" class="lol" title="blague" alt=":B" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/aime.png" class="lol" title="aime" alt=":aime:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
								<img src="smileys/choc.gif" class="lol" title="choc" alt=":o" id="<?php echo $rslt['id_actualite'];?>" width="32px" height="32px"/>
								<img src="smileys/punition.gif" class="lol" title="punition" alt=":3" onClick="javascript:contenu('');return(false)" width="35px" height="35px"/>
							</div>
					</div>	
				</fieldset>
</form>			 
<div id="block_comment<?php echo $rslt['id_actualite'];?>">
<?php
$req4=$bdd->prepare('SELECT * FROM commentaires WHERE id_actualite=:id_actualite ORDER BY id_commentaire DESC');
$req4->execute(array('id_actualite'=>$rslt['id_actualite']));
while($rslt4=$req4->fetch())
{
$message = htmlspecialchars($rslt4['contenu']); 
$message=code($message);
$message = urllink($message);

$req5=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req5->execute(array('pseudo'=>$rslt4['pseudo']));
$rslt5=$req5->fetch();	
?>
<div align="left" style="width:100%;">	
	<img src="<?php echo $rslt5['avatars'];?>" width="50px" height="50px" class="img-rounded" style="display: inline-block;">
	<p style="padding:0.8em;background-color:white;text-align:left;clear: both;display: inline-block;width:60%;vertical-align:top;">
	<?php 
		//on affihe le bouton fermer si e commentaire nous appartient
		if($rslt4['pseudo']==$_SESSION['pseudo'])
		{
		?>
		<button type="button" class="close supp" id="supp<?php echo $rslt4['id_commentaire'];?>" name="<?php echo $rslt4['id_commentaire'];?>" style="font-size:1.5em;font-weigjt:bold;" data-dismiss="">×</button>
		<?php
		}
		?>
	<?php echo $message;?><br><br>
		<b><span style="color:rgba(0,74,148,1);">@<?php echo $rslt4['pseudo'];?></span></b>&nbsp &nbsp <span style="color:rgba(245,76,16,1);"><?php echo date('d-m-Y H:i'); ?></span> 
	<div id="rapport4" class="alert alert-success rslt<?php echo $rslt4['id_commentaire'];?>" style="display:none;width:446px;padding:0.5em;font-size:1.1em;"></div>
	</p>
</div>
<?php	
}

?>
</div>
</div>			
</div><br>


<br/>

<div class="pagination pull-right">
  <?php 
  // On met dans une variable le nombre de messages qu'on veut par page		
				// On récupère le nombre total de messages
				$req06=$bdd->query('SELECT count(*) As nb_messages FROM actualites ORDER BY id_actualite DESC ');
				$donnees=$req06->fetch();
				
				
				$totalDesMessages = $donnees['nb_messages'];
				// On calcule le nombre de pages à créer
				$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);
				
				$req07=$bdd->query('SELECT * FROM actualites ORDER BY id_actualite DESC');
				$donnees1=$req07->fetch();
				
				// Puis on fait une boucle pour écrire les liens vers chacune des pages
				echo '<br/><p lass="pagination pull-right" id="pagination" align="center"><b>[ Page : ';
				/* Boucle sur les pages */
				for ($i = 1 ; $i <= $nombreDePages ; $i++) {
				  if ($i < ($page-3) )
					$i = $page - 3;
						if ($i >= $page + 3 AND $i <= $nombreDePages - 3)
								echo "...";
				  if ($i > ($page+2) )
					$i = $nombreDePages ;
				  if ($i == $page )
					echo "<span id='page_active'>$i</span>";
				  else
					echo ' <button  class="page btn"  name= "'.$i.'" id="pages">'.$i.'</button> ';
				}
				echo ' ]<b></p><br/>';
?>
</div>	
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
  
		$('#publier').click(function(){

		$('#block_publier').show('slow');	
		});

       $('#my_form').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
		
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
				$('#rapport').html(data).show().fadeIn('slow').delay(6000).fadeOut('slow');
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
                url:"ajax.php",
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
                url:"ajax.php",
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
            url:"ajax.php",
            type:"POST",
            data:"contenu="+contenu+"&id="+I,
            success:function(data){
				$('.uploads').hide();
				$('.share-btn'+I).text('Commentaire('+data+')');	
				$('#block_comment'+I).load('commentaire.php?id='+I, function() {
				$('#contenu').val('');
      });
	}
           
       });
		
        });	 
/************************************************************/
$('.afficher_plus').click(function(){
var element = $(this);	
var I = element.attr("id");	
$('.span9').load('pluscommentaire.php?id='+I, function() {
				
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
            url:'modifications.php?modif=modif&id_comment='+I,
            type:'post',
            data:'terminer=ok',
            success:function(data){
			
				$('.rslt'+I).html(data).show().fadeIn('slow').delay(6000).fadeOut('slow');
				$('body').load('mise_a_jour_actualite.php', function() {
				
      });
						
			}		
				   
			   });
					
			}
	
	});	

	 });
	
/***********************************************************/
	  
   </script>
	  
</body>
</html>