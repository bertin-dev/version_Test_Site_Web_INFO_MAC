<?php session_start();
include('phpscripts/functions.php');
$db = db_connect();
$balises = true;
?>

<?php include('bbcode0.php');?>

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
							<form method="post" action="Traitement_espace_membre.php" enctype="multipart/form-data">
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
					<li><a href="register.php">Forum</a><i class="icon-angle-right"></i></li>
					<li class="active">Espace Membres</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
		
			<div class="col-lg-4">
				<aside class="left-sidebar">
				<div class="widget">
					<form role="form">
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Search..">
					  </div>
					</form>
				</div>
				<div class="widget">
					<?php include('cadre.php');?>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>
				</aside>
			</div>
			
			<div class="col-lg-8">
				<article>
				
				
				     <div class="well well-small" style="text-align:left;" id="plan">
					 <?php

						echo 'Nom: '.$_SESSION['nom'].'<br>';
						echo 'Prenom: '.$_SESSION['prenom'].'<br>';
						echo 'Pseudo: '.$_SESSION['pseudo'].'<br>';
						echo 'Sexe: '.$_SESSION['sexe'].'<br>';
						echo 'Password: '.$_SESSION['mtp'].'<br>';
						echo 'Email: '.$_SESSION['email'].'<br>';
						echo 'Temps'.$_SESSION['time']=time();
						?>
					 </div>
					 <?php
					 
					 while($rslt=$_SESSION['requete'])
{
	$req0=$bdd->prepare('SELECT avatars FROM inscription WHERE id=:id_membre');
	$req0->execute(array('id_membre'=>$rslt['id']));
	$rslt0=$req0->fetch();
?>

<div class="thumbnail" style="background-color:rgba();">
<div style="background-image:url('arriereentete2.jpg');border-top:2px solid white;border-left:2px solid white;border-right:2px solid white;">
<p class="meta" style="margin-top:0.5em;background-image:url('arriereentete2.jpg');"><img align="left" src="<?php echo $rslt0['avatars'];?>" width="64px" height="64px" class="img-rounded" style="margin-top:-0.2em;margin-left:0.2em;"> </p>
<br><p align="left">&nbsp <b style="background-color:rgba(245,76,16,0.5); padding:0.1em;">@<?php echo $rslt['pseudo'];?> #<?php echo $rslt['id_actualite'];?></b>
<h3 align=""  style="margin-top:1em;border-top:5px solid rgba(245,76,16,0.8);height:em;"><a href="#" title="my web solutions"> <?php echo $rslt['titre'];?></a></h3>
</p>
</div>


<p align="center" style="font-weight:bold;"> 
<img src="detail.png"> FILIERE ,
<a href="#" title="View all posts in Category 3">NIVEAU </a>,<?php echo date('d-m-Y H:i'); ?></p>

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
	
$req01=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
$req01->execute(array('pseudo'=>$_SESSION['pseudo']));
$rslt01=$req01->fetch();

?></p>
<p class="contenu" id="ici_comment" style="display:block;padding:1em;background-color:rgba(245,76,16,0.2);" align="left">
	<?php 
	$sText = htmlspecialchars($rslt['contenu']); 
	$sText=code($sText);
	$sText = urllink($sText);
	$sText = nl2br($sText);

	$iMaxLength = 1000;
	$sMessage = '...<br><br><a href="commentaires.php?id='.$rslt['id_actualite'].'#ici_comment" id='.$rslt['id_actualite'].'class="afficher_plus">Lire la suite</a>';
	wordCut("$sText", "$iMaxLength", "$sMessage");
	?>
</p>
	
     <div class="tab-tr" id="t1" style="background-color:rgba();">
			<?php
				$req2=$bdd->prepare('SELECT * FROM mespreferes WHERE id_actualite=:id_actualite AND id=:id_membre');
				$req2->execute(array('id_actualite'=>$rslt['id_actualite'],'id_membre'=>$rslt01['id']));
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
	<form id="<?php echo $rslt['id_actualite'];?>" class="form_comment form_comment<?php echo $rslt['id_actualite'];?>" name="formulaire">
				
					<div style="width:;" align="left" id="mydiv" class="mydiv<?php echo $rslt['id_actualite'];?>"> 
						<img src="<?php echo $rslt001['avatars'];?>" align="left" width="50px" height="50px" class="img-rounded" style="display: inline-block;width:%;" align="left">
						<p style="clear: both;display: inline-block;width:70%;vertical-align:top;">
							<input type="text" align="" id="contenu" class="input-xxlarge contenu contenu<?php echo $rslt['id_actualite'];?>" placeholder="Laissez un commentaire"  name="contenu" style="font-size:1.1em;border-radius:5px; height:2.1em;">&nbsp <span class="uploads" style="display:none;"><img src="ajax-loader1.gif"></span><span style="font-weight:bold;color:rgba(245,76,16,1);"><button type="button"class="btn btn-primary0 smileys" id="<?php echo $rslt['id_actualite'];?>"><img src="confus.gif" width="18px" height="18px">Smileys</button></span>
								
							<input type="submit" style="display:none;">&nbsp <span class="load_comment" style="display:none;"><img src="ajax-loader6.gif"></span>
							<div style="background-color:;padding:em;border-radius:5px;margin-left:3em;display:none;" id="img_smileys<?php echo $rslt['id_actualite'];?>">
								<img src="smileys/heureux.png" class="lol" alt=":Happy:" id="<?php echo $rslt['id_actualite'];?>" width="25px" height="25px"/>
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
							</p>
							
					</div>	
			
</form>	
<script>
function smilies0(img)
{
window.document.formulaire.contenu.value += '' + img + ' ';
document.getElementById('contenu').focus();
}
</script>	 
<div id="block_comment<?php echo $rslt['id_actualite'];?>">
<?php
$req4=$bdd->prepare('SELECT * FROM commentaires WHERE id_actualite=:id_actualite ORDER BY id_commentaire DESC LIMIT 0,5');
$req4->execute(array('id_actualite'=>$rslt['id_actualite']));
$_SESSION['id_actualite']=$rslt['id_actualite'];
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
			<button type="button" class="close supp" id="supp<?php echo $rslt4['id_commentaire'];?>" name="<?php echo $rslt4['id_commentaire'];?>" style="font-size:1.5em;font-weigjt:bold;" data-dismiss=""><span style="display:none;" class="supp"><?php echo $rslt4['id_commentaire'];?></span>×</button>
		<?php
		}
		?>
	<?php echo $message;?><br><br>
		<b><span style="color:rgba(0,74,148,1);">@<?php echo $rslt4['id_commentaire'];?><?php echo $rslt4['pseudo'];?></span></b>&nbsp &nbsp <span style="color:rgba(245,76,16,1);"><?php echo date('d-m-Y H:i'); ?></span> 
	<div id=""></div>
	<div id="rapport4" class="alert alert-success rslt<?php echo $rslt4['id_commentaire'];?>" style="display:none;width:446px;padding:0.5em;font-size:1.1em;"></div>
	</p>
</div>

<?php	
}
//si le nombre de commentaire est superieur a 5 on affiche le texte afficher plus de commentaires
if($rslt3['nbrs_comment']>=5)
{
?>
<div align="left" style="margin-left:50px;margin-top:5px;"><a href="commentaires.php?id=<?php echo $rslt['id_actualite'];?>#ici_comment" id="<?php echo $rslt['id_actualite'];?>" class="afficher_plus"> Afficher plus de commentaires</a></div>
<?php
}
?>
</div>
</div>			
</div><br>
					 
<?php
}

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
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
	<?php 
	include("pied_de_page.php");
	?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
span id="themesBtn"></span>
 <script src="jquery.js"></script>
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
				$('body').load('espace-client.php', function() {
				
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
	<?php
	include('connexion_base_donnee.php');
	$req5=$bdd->prepare('SELECT * FROM commentaires WHERE pseudo=:pseudo ORDER BY id_commentaire DESC ');
	$req5->execute(array('pseudo'=>$_SESSION['pseudo']));
	$rslt5=$req5->fetch();
	
	$req6=$bdd->prepare('SELECT count(*) As nbrs FROM commentaires WHERE pseudo=:pseudo ORDER BY id_commentaire DESC ');
	$req6->execute(array('pseudo'=>$_SESSION['pseudo']));
	$rslt6=$req6->fetch();
	$debut=$rslt5['id_commentaire'];
	$total=$rslt5['id_commentaire']+$rslt6['nbrs'];
	if($debut<=$total)
	{
	?>
	
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
			
				$('#rapport4').html(data).show().fadeIn('slow').delay(6000).fadeOut('slow');
						
			}		
				   
			   });
					
			}
	<?php
	}
	?>
	});	
	
	$('.page').click(function(){
			var element = $(this);	
			var I = element.attr("name");
			$.ajax({
            url:"ajax.php",
            type:"POST",
            data:"page=ok&id_page="+I,
            success:function(data){
			$('body').load('espace-client.php?page='+data, function() {
				
      });
			
	}
           
       });
			
	});	
	
	 });
/***********************************************************/

   </script>







	<span id="themesBtn"></span>
 <script src="jquery.js"></script>
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
						$('body').load('mise_a_jour_actualite.php', function() {
				
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
		
	$('.page').click(function(){
			var element = $(this);	
			var I = element.attr("name");
			$.ajax({
            url:"ajax.php",
            type:"POST",
            data:"page=ok&id_page="+I,
            success:function(data){
			$('body').load('mise_a_jour_actualite.php?page='+data, function() {
				
      });
			
	}
           
       });
			
	});
	
	 });
/***********************************************************/

   </script>
	








	
