<?php session_start();
include('phpscripts/functions.php');
$db = db_connect();
$balises = true;
?>
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

	<?php
include('bbcode0.php');
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
 
<!-- Page banner end -->
<section id="bodySection">
<div class="container">					
<div class="row">	
<div class="span3" style="background-color:rgba();">
	<?php include('cadre.php');?>


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
		
<div class="thumbnail" style="margin-top:em;padding:1em;display:;">
<h4 align="left" id="test"><a href="#" title="my web solutions"><img src="<?php echo $rslt001['avatars'];?>" class="img-rounded" width="100px" height="100px" align=""></a><br>
Salut <?php echo $rslt001['nom'];?>, Quoi de neuf ?
<div align="left" style="margin-top:em;">
		<button class="btn-warning btn-large" type="submit" id="publier">Publier une actualité</button>
	</div>
</h4>			
	<div style="margin-top:0.2em;display:none;border:0px solid;background-color:rgba(0,0,0,0.12);padding:1em;" id="block_publier" align="left">
		<h4>Partagez une actualité...</h4>		
				<form class="form-horizontal" id="my_form" name="myform" action="execution.php?ok=ok" method="post" enctype="multipart/form-data">
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
					  <textarea rows="10" name="contenu" cols="" id="textarea" class="input-xxlarge" placeholder="Quoi de neuf au campus?" style="font-size:1.2em;" class="input-xxxlarge"></textarea>
					</div>
					
					<div align="left" style="margin-top:-1em;">
					<button class="btn-warning btn-large" type="submit" >Partagez</button>&nbsp <span style="display:none;" class="gifpub"><img src="ajax-loader18.gif"></span>
					</div>
					
				</fieldset>
			  </form>
	</div>
			
</div>
<?php
include('connexion_base_donnee.php');
			$nombreDeMessagesParPage = 5; // Essayez de changer ce nombre pour voir :o)
			// Maintenant, on va afficher les messages
			if (isset($_GET['page']))
			{
					$page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (livreor.php?page=4)
			}
			else // La variable n'existe pas, c'est la première fois qu'on charge la page
			{
					$page = 1; // On se met sur la page 1 (par défaut)
			}
				 
			// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
			$premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;
			
$req=$bdd->prepare('SELECT * FROM actualites ORDER BY id_actualite DESC LIMIT :offset , :limit');
 $req->bindParam(':offset', $premierMessageAafficher , PDO::PARAM_INT);
 $req->bindParam(':limit', $nombreDeMessagesParPage, PDO::PARAM_INT);
 $req->execute();
while($rslt=$req->fetch())
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
				$req2=$bdd->prepare('SELECT *  FROM mespreferes WHERE id_actualite=:id_actualite AND id=:id_membre');
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
	<div id="rslt<?php echo $rslt4['id_commentaire'];?>"></div>
	<div id="rapport4" class="alert alert-success" style="display:none;width:446px;padding:0.5em;font-size:1.1em;"></div>
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
				echo ' ]</b></p><br/>';
?>

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
			$('body').load('mise_a_jour_actualite.php?page='+data, function() {
				
      });
			
	}
           
       });
			
	});	
	
	 });
/***********************************************************/

   </script>