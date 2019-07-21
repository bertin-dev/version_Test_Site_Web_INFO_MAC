<?php
session_start();
include('phpscripts/functions.php');
$db = db_connect();
$balises = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="stylechat.css">
	 <script src="jquery.js"></script>

	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	
	<style type="text/css" id="enject"></style>
	<?php include('bbcode.php');?>
	
</head>
<body>
<?php 
include('header.php');
	if(isset($_SESSION['pseudo']))
	{
?>
<!--Header Ends================================================ -->
 <!-- Page banner -->
<section id="bannerSection" style="background:url('logo.png');">
	<div class="container" >

		<h1 id="pageTitle">
		<div style="padding:1em;">
		
		</div>
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
		<div class="span3">
			<!-- colonne avec les membres connectés au chat -->
			<div valign="top" id="users-td" class="well well-small">
				
				<div id="users">Chargement</div>
			</div>
		</div>
		<div class="span9">
		<div class="well well-small" style="text-align:left">
			<div id="" style="background-image:url('pattern17.png');padding:0.5em;">
	<h1 align="left" style="margin-left:0.5em;"> Chat-Online</h1>

        <!-- Statut //////////////////////////////////////////////////////// -->				
	<table class="status"><tr>
		<td style="padding:0.5em;">
			<span id="statusResponse"></span>
			<select name="status" id="status" style="width:200px;" onchange="setStatus(this)">
				<option value="0">Absent</option>
				<option value="1">Occup&eacute;</option>
				<option value="2" selected>En ligne</option>
			</select><BR>
		
				<div align="right" class="total_msg"></div>
		</td>
	</tr></table>

	<table class="chat"><tr>		
	<!-- zone des messages -->
	<td valign="top" id="text-td" style="background-image:url('pattern6.png');">
            	<div id="annonce"></div>
		<div id="text" style=";">
			<div id="loading">
				<center>
				<span class="info" id="info">Chargement du chat en cours...</span><br />
				<img src="ajax-loader.gif" alt="patientez...">
				</center>
			</div>
		</div>
	</td>
			
	
</tr></table>

<!-- Zone de texte //////////////////////////////////////////////////////// -->
        <a name="post"></a>
		<?php
		$_SESSION['time']=time();
		?>
	<table class="post_message"><tr>
		<td>
		<form action="" name="formulaire" method="" class="chat" onsubmit="envoyer(); return false;" enctype="multipart/form-data">
			<input type="text" id="message" maxlength="255" name="message" /> &nbsp <span id="upload" style="display:none;"><img src="ajax-loaderr.gif" alt="patientez..."></span>
			<input type="hidden" id="dateConnexion" value="<?php echo $_SESSION['time']; ?>" />
			<div>
				<div>
			<img src="smileys/heureux.png" title="heureux" alt="heureux" onClick="javascript:smilies(':happy:');return(false)" width="25px" height="25px"/>
			<img src="smileys/lol.png" title="lol" alt="lol" onClick="javascript:smilies(':lol:');return(false)" width="25px" height="25px"/>
			<img src="smileys/triste.png" title="triste" alt="triste" onClick="javascript:smilies(':triste:');return(false)" width="25px" height="25px"/>
			<img src="smileys/cool.png" title="cool" alt="cool" onClick="javascript:smilies(':frime:');return(false)" width="25px" height="25px"/>
			<img src="smileys/rire.png" title="rire" alt="rire"	 onClick="javascript:smilies(':D');return(false)" width="25px" height="25px"/>
			
			<img src="smileys/peur.png" title="peur" alt="peur" onClick="javascript:smilies(':o.O');return(false)" width="25px" height="25px"/>
			<img src="smileys/cry.png" title="cry" alt="cry" onClick="javascript:smilies(':cry:');return(false)" width="25px" height="25px"/>
			<img src="smileys/kiss.png" title="kiss" alt="kiss" onClick="javascript:smilies(':*');return(false)" width="25px" height="25px"/>
			
			<img src="smileys/unsure.png" title="unsure" alt="unsure" onClick="javascript:smilies('/:');return(false)" width="25px" height="25px"/>
			<img src="smileys/angel.png" title="angel" alt="angel" onClick="javascript:smilies(':O');return(false)" width="25px" height="25px"/>
			<img src="smileys/pacman.png" title="pacman" alt="pacman" onClick="javascript:smilies(':V');return(false)" width="25px" height="25px"/>
			<img src="smileys/confused.png" title="confus" alt="confus" onClick="javascript:smilies(':confus:');return(false)" width="25px" height="25px"/>
			<img src="smileys/blague.png" title="blague" alt="	blague" onClick="javascript:smilies(':B');return(false)" width="25px" height="25px"/>
			<img src="smileys/aime.png" title="aime" alt="aime" onClick="javascript:smilies(':aime:');return(false)" width="25px" height="25px"/>
			<img src="smileys/choc.gif" title="choc" alt="choc" onClick="javascript:smilies(':o');return(false)" width="32px" height="32px"/>
			<img src="smileys/punition.gif" title="punition" alt="punition" onClick="javascript:smilies(':3');return(false)" width="35px" height="35px"/>
				</div>
			<div>	
				<button class="btn btn-success" style="display:none;"></button>
				<button class="btn btn-success" id="gras" name="gras" value="Gras" onClick="javascript:bbcode('[g]', '[/g]');return(false)">Gras</button>
				<button class="btn btn-success" id="italic" name="italic" value="italic" onClick="javascript:bbcode('[i]', '[/i]');return(false)">Italic</button>
				<button class="btn btn-success">actualiser</button>
			</div>
			
		</form>
                <div id="responsePost" style="display:none"></div>
		</td>
	</tr></table>

</div>		
		</div>

		</div>
		</div>
	</div>
</section>
 <!-- Footer
  ================================================== -->
<section id="footerSection">
<div class="container">
    <footer class="footer well well-small">
	<div class="row-fluid">
	<div class="span4">
			<h4>Newsletter and Subscription</h4>
			<h5>Our aim</h5>
			<em>
			"To provide affordable web design and development services for different devices is our aim, 
			that fully meet your requirements." <br/><br/>
			</em>
			<h5>What our client say?</h5>
			<em>
			" I can confirm, bougth the theme a couple of days afo and it is really fantastic. Very flexible, very good support. I really like it."
			</em>
			<br/><br/>
			<h5>Subscription</h5>
			<form>
			<div class="input-append">
			  <input id="appendedInputButton"  placeholder="Enter your e-mail" type="text">
			  <button class="btn btn-warning" type="button">send </button>
			</div>
			</form>
		</div>
		<div class="span5">
		<h4>Latest news</h4>
		<ul class="media-list">
		  <li class="media">
			<a class="pull-left" href="blog_details.html">
			  <img class="media-object" src="themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.html"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.html">
			  <img class="media-object" src="themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.html"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.html">
			  <img class="media-object" src="themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.html"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.html">
			  <img class="media-object" src="themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.html"> More</a></small>
			</div>
		  </li>
		</ul>
		</div>
	
	<div class="span3">
			<h4>Visit us</h4>
			<address style="margin-bottom:15px;">
			<strong><a href="index.html" title="business"><i class=" icon-home"></i> Business (p.) Ltd. </a></strong><br>
				194, Vectoria Street, Newwork <br>
				nw 488, USA<br>
			</address>
			Phone: <i class="icon-phone-sign"></i> &nbsp; 00123 456 000 789 <br>
			Email: <a href="contact.html" title="contact"><i class="icon-envelope-alt"></i> info@companyltd.com</a><br/>
			Link: <a href="index.html" title="Business ltd"><i class="icon-globe"></i> www.businessltd.com</a><br/><br/>
			<h5>Quick Links</h5>	
			<a href="services.html" title="services"><i class="icon-cogs"></i> Services </a><br/>
			<a href="about.html" title=""><i class="icon-info-sign"></i> About us </a><br/>
			<a href="portfolio.html" title="portfolio"><i class="icon-question-sign"></i> Portfolio </a><br/>

	<h5>Find us on</h5>	
	<div style="font-size:2.5em;">
		<a href="index.html" title="" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"> </i> </a> 
		<a href="portfolio.html" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>
		<a href="services.html" title="" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>
		<a href="services.html" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>
		<a href="about.html" title="" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>
	</div>
	</div>
    </div>

	<p style="padding:18px 0 44px">&copy; 2012, allright reserved </p>
	</footer>
    </div><!-- /container -->
</section>

<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
	<script src="themes/js/bootstrap.min.js"></script>
	<script src="themes/js/bootstrap-tooltip.js"></script>
    <script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="current"><img src="themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>

<script src="jquery.js"></script>

<script>
	     $(function () {
			$('.chat').on('submit', function (e) {
				$('#upload').show();
			// On empêche le navigateur de soumettre le formulaire
			e.preventDefault();
				// On lance la requête ajax
	// type: POST > nous envoyons le message

	// On encode le message pour faire passer les caractères spéciaux comme +
	var message = encodeURIComponent($("#message").val());
	var reloadTime = 1000;
	var scrollBar = false;
	$.ajax({
		type: "POST",
		url: "phpscripts/post-message.php",
		data: "message="+message,
		success: function(data){
			// Si la réponse est true, tout s'est bien passé,
			// Si non, on a une erreur et on l'affiche
			if(data == true) {
				// On vide la zone de texte
				var $content=$("#text");
				$content[0].scrollTop=$content[0].scrollHeight;
				$("#message").val('');
				$("#responsePost").slideUp("slow").html('');
				$('#upload').hide();
				$('#text').load('phpscripts/get-message.php?dateConnexion='+$("#dateConnexion").val(), function() {

      });
			} else
				$("#responsePost").html(data).slideDown("slow");
			// on resélectionne la zone de texte, en cas d'utilisation du bouton "Envoyer"
			$("#message").focus();
		},
		error: function(data){
			// On alerte d'une erreur
			alert('Erreur');
		}
	});
		});99
		

function getmessage(){
				$('#text').load('phpscripts/get-message0.php', function() {

			
      });
}
setInterval(getmessage, 4000);
function getonline(){
				$('#users').load('phpscripts/get-online.php', function() {
				
      });
}
setInterval(getonline, 3000);

function totalmsg(){
				$('.total_msg').load('phpscripts/nbrs_message.php', function() {
				
      });
}
setInterval(totalmsg, 6000);


$('#status').click(function(){
	var status=$('#status').val();
	$.ajax({
		type: "POST",
		url: "phpscripts/set-status.php",
		data: "status="+status,
		success: function(data){
		$('#statusResponse').text(data);	
		}
	});
	
});



	});
</script>
	<?php
	}else{header('location:connexion.php');}
?>
</body>
</html>