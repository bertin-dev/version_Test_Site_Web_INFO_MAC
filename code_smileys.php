
<?php
function code_smileys($texte)
{
//Smileys
$texte = str_replace(':happy:', '<img src="smileys/heureux.png" title="heureux" alt="heureux"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':lol:', '<img src="smileys/lol.png" title="lol" alt="lol"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':triste:', '<img src="smileys/triste.png" title="triste" alt="triste" width="25px" height="25px"/>', $texte);
$texte = str_replace(':frime:', '<img src="smileys/cool.png" title="cool" alt="cool"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':D', '<img src="smileys/rire.png" title="rire" alt="rire" width="25px" height="25px"/>', $texte);
$texte = str_replace(':o.O', '<img src="smileys/peur.png" title="peur" alt="peur" width="25px" height="25px"/>', $texte);
$texte = str_replace(':*', '<img src="smileys/kiss.png" title="kiss" alt="kiss" width="25px" height="25px"/>', $texte);
$texte = str_replace(':cry:', '<img src="smileys/cry.png" title="cry" alt="cry"  width="25px" height="25px"/>', $texte);
$texte = str_replace('/:', '<img src="smileys/unsure.png" title="unsure" alt="unsure" height="25px"/>', $texte);
$texte = str_replace(':O', '<img src="smileys/angel.png" title="angel" alt="angel" width="25px" height="25px"/>', $texte);
$texte = str_replace(':V', '<img src="smileys/pacman.png" title="pacman" alt="pacman"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':confus:', '<img src="smileys/confused.png" title="confus" alt="confus"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':B', '<img src="smileys/blague.png" title="blague" alt="blague"  width="25px" height="25px"/>', $texte);
$texte = str_replace(':aime:', '<img src="smileys/aime.png" title="aime" alt="aime" width="25px" height="25px"/>', $texte);
$texte = str_replace(':o', '<img src="smileys/choc.gif" title="choc" alt="choc" width="32px" height="32px"/>', $texte);
$texte = str_replace(':3', '<img src="smileys/punition.gif" title="punition" alt="punition" width="35px" height="35px"/>', $texte);

//On retourne la variable texte
return $texte;
}
?>

