<?php
session_start();
extract($_POST);
if(isset($act) AND $act=='like')
	{
		//like
		include('connexion_base_donnee.php');
		//on recupere les infos lié à l'id de l'actualites
		$req0=$bdd->prepare('SELECT * FROM actualites WHERE id_actualite=:id_actualite');
		$req0->execute(array('id_actualite'=>$id));
		$rslt0=$req0->fetch();
		//on verifie si l'utilisateur a dejà aimé cette actualites

		$like=$rslt0['aime']+1;
		$req1=$bdd->prepare('UPDATE actualites SET aime=:aime WHERE id_actualite=:id_actualite');
		$req1->execute(array('aime'=>$like,'id_actualite'=>$id));
		$rslt1=$req1->fetch();
		
		$req2=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
		$req2->execute(array('pseudo'=>$_SESSION['pseudo']));
		$rslt2=$req2->fetch();
		
		$req01=$bdd->prepare('SELECT count(*) As nbrs FROM mespreferes WHERE id_actualite=:id_actualite AND id=:id_membre AND aime=1');
		$req01->execute(array('id_actualite'=>$id,'id_membre'=>$rslt2['id']));
		$rslt01=$req01->fetch();
		
		if($rslt01['nbrs']==0)
		{
		$req3=$bdd->prepare('INSERT INTO mespreferes VALUES(:id_actualite,:id_membre,:aime)');
		$req3->execute(array('id_actualite'=>$id,'id_membre'=>$rslt2['id'],'aime'=>1));
		$rslt3=$req3->fetch();
		}else
		{
		$req3=$bdd->prepare('UPDATE mespreferes SET aime=:aime WHERE id_actualite=:id_actualite AND id=:id_membre');
		$req3->execute(array('aime'=>1,'id_actualite'=>$id,'id_membre'=>$rslt2['id']));
		$rslt3=$req3->fetch();	
		}
		if($rslt1){echo $like;}else{echo $like;}
		$req0->closeCursor();
		$req1->closeCursor();
	}
	extract($_POST);
	if(isset($act) AND $act=='dislike')
	{
		//dislike
		include('connexion_base_donnee.php');
		$req0=$bdd->prepare('SELECT * FROM actualites WHERE id_actualite=:id_actualite');
		$req0->execute(array('id_actualite'=>$id));
		$rslt0=$req0->fetch();
		
		$dislike=$rslt0['noaime']+1;
		$req1=$bdd->prepare('UPDATE actualites SET noaime=:noaime WHERE id_actualite=:id_actualite');
		$req1->execute(array('noaime'=>$dislike,'id_actualite'=>$id));
		$rslt1=$req1->fetch();
		
		$req2=$bdd->prepare('SELECT * FROM inscription WHERE pseudo=:pseudo');
		$req2->execute(array('pseudo'=>$_SESSION['pseudo']));
		$rslt2=$req2->fetch();
		
		$req01=$bdd->prepare('SELECT count(*) As nbrs FROM mespreferes WHERE id_actualite=:id_actualite AND id=:id_membre');
		$req01->execute(array('id_actualite'=>$id,'id_membre'=>$rslt2['id']));
		$rslt01=$req01->fetch();
		
		if($rslt01['nbrs']==0)
		{
		$req3=$bdd->prepare('INSERT INTO mespreferes VALUES(:id_actualite,:id_membre,:aime,:aime)');
		$req3->execute(array('id_actualite'=>$id,'id_membre'=>$rslt2['id'],'aime'=>2));
		$rslt3=$req3->fetch();
		}else
		{
		$req3=$bdd->prepare('UPDATE mespreferes SET aime=:aime WHERE id_actualite=:id_actualite AND id=:id_membre');
		$req3->execute(array('aime'=>2,'id_actualite'=>$id,'id_membre'=>$rslt2['id']));
		$rslt3=$req3->fetch();	
		}
		if($rslt1){echo $dislike;}else{echo $dislike;}
	}
/*****************************************************************************************/
//nombre telehargement


if(isset($contenu) AND !empty($contenu))
{
include('connexion_base_donnee.php');
//requetes pour ompter le nombre de commentaires

	
	$req=$bdd->prepare('INSERT INTO commentaires 
										VALUES(:id_commentaire,:id_membre,:contenu,:pseudo)');
										
										$req->execute(array('id_commentaire'=>'',
															'id_membre'=>$id,
															'contenu'=>$contenu,
															'pseudo'=>$_SESSION['pseudo']
															));
										if($req)
											{
													$req3=$bdd->prepare('SELECT count(*) As nbrs_comment FROM commentaires WHERE id_actualite=:id_actualite');
													$req3->execute(array('id_actualite'=>$id));
													$rslt3=$req3->fetch();
													echo $rslt3['nbrs_comment'];
											}
		
}
extract($_POST);
if(isset($page))
{
	echo $id_page;
}
if(isset($amphi))
{
	echo $id_page;
}
if(isset($cours))
{
	echo $id_page;
}

