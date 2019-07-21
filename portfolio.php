<?php
    session_start();
	?>
	
	<?php
	include("connectes.php");
	?>
	
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>CATALOGUE | INFO-MAC.FR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<meta name="Bertin Mounok" content="http://www.info-mac.fr" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />


	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>



<div id="wrapper">

	<!-- start header -->
	<?php 
	include("entete.php");
	?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">CATALOGUE</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">TRAVEAUX RECENTS</h4>

				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">COMPLET<div class="cbp-filter-counter"></div></div>
					<div data-filter=".identity" class="cbp-filter-item">IMPRIMERIE<div class="cbp-filter-counter"></div></div>
					<div data-filter=".web-design" class="cbp-filter-item">FLYERS<div class="cbp-filter-counter"></div></div>
					<div data-filter=".graphic" class="cbp-filter-item">AGENDA<div class="cbp-filter-counter"></div></div>
				</div>
				

				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/1.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE BI-MATIERE 2017 <br>Premium avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE BI-MATIERE 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / PREMIUM</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/13.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/13big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE DEUX TONS BLEU 2017<br>Flyers">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE DEUX TONS BLEU 2017 </div>
							<div class="cbp-l-grid-projects-desc">FLYER / HARMONIE</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/3.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/3big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE BI-MATIERE 2017<br>Blue Shine avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE BI-MATIERE 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / BLUE SHINE</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/4.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017 <br>Diplomate avec Coin Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DiPLOMATE</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/12.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/12big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE DEUX TONS MARRON 2017<br>FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE DEUX TONS MARRON 2017</div>
							<div class="cbp-l-grid-projects-desc">FLYER / Premium</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/14.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/14big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE GRIS 2017<br> FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE GRIS 2017</div>
							<div class="cbp-l-grid-projects-desc">FLYER / Harmonie</div>
						</li>
						
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/15.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/15big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE ROUGE 2017<br> FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE ROUGE 2017</div>
							<div class="cbp-l-grid-projects-desc">FLYER / Harmonie</div>
						</li>
						
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/7.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017 <br>Consul">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / CONSUL</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/9.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/9big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017<br>Diplomate">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DIPLOMATE</div>
						</li>
						
						<!--_______________________________________________________________-->
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/10.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/10big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>CLASS">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / CLASS</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/8.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>Delice avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DELICE</div>
						</li>
						
						
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/11.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/11big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>Delice">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DELICE</div>
						</li>
						<!--_______________________________________________________________-->
					</ul>
				</div>
				
				<div class="cbp-l-loadMore-button">
					<a href="ajax/loadMore.php" class="cbp-l-loadMore-button-link">Voir Encore</a>
				</div>

			</div>
		</div>
	</div>
	</section>
    <?php 
	include("pied_de_page.php");
	?>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>


</body>
</html>