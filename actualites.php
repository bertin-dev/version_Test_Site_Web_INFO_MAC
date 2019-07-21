<?php session_start();
include('phpscripts/functions.php');
$db = db_connect();
$balises = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>ACCUEIL | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="INFO-MAC" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />

<!-- Chargement les fichiers css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Skin du site web -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- Arriere plan de Body -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  	
	
	
	<link rel="icon" type="image/png" href="logo.png"/>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
 



<div id="wrapper">
	<!-- debut de l'entete du site Web -->
	<?php 
	include("entete.php");
	?>
	<!-- FIN DES headers -->
	
	
	
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
	

	<div class="col-lg-3">
	<?php include('cadre.php');?>
	</div>

	<div class="col-lg-9">
	
	
	
	
	<!---------------------------------------FIN l'espace admin--------------------------------------------------------------->
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
	$req0=$bdd->prepare('SELECT id, avatars FROM inscription WHERE id=:id_membre');
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
$req0=$bdd->prepare('SELECT aime, noaime FROM actualites WHERE id_actualite=:id_actualite');
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


	
</div>	
	
	
	
<?php 
	include("pied_de_page.php");
	?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>







	
</body>
</html>