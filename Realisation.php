<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<?php
			include("include/link.php");
		?>
			<!--Lien bootstrap -->
			<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
			<!-- Fin lien -->
			<!-- JS-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    	<script type="text/javascript" src="js/jquery.easing.min.js"></script> <!--lien vers le fichier jquery pour l'effet "hover"-->
    	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script> <!--lien vers fichier JQuery pour l'effet filtre-->
			<script type="text/javascript" src="js/data.js"></script> <!--Mon JS-->

			<script type="text/javascript">
		    $(function () {

		        var filterList = {

		            init: function () {

		                // Plugin Mixitup, qui permet de filtrer les vignettes par catégorie
		                $('#portfoliolist').mixitup({
		                    targetSelector: '.portfolio',
		                    filterSelector: '.filter',
		                    effects: ['fade'],
		                    easing: 'snap',
		                    // call the hover effect
		                    onMixEnd: filterList.hoverEffect()
		                });

		            },

		            hoverEffect: function () {

		                // Fonction pour l'effet "hover"
		                $('#portfoliolist .portfolio').hover(
		                    function () {
		                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
		                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
		                    },
		                    function () {
		                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
		                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
		                    }
		                );

		            }

		        };

		        // Lance les deux fonctions "hover" et "filtre"
		        filterList.init();


		    });
		    </script>

			<!-- Fin JS-->
	</head>
	<body>
	<!-- corps du document -->
	<header>
		<?php
			include("include/head.php");
		?>
	</header>
	<br />
	<aside>
		<?php
			include("include/menugauche.php");
		?>
	</aside>
	<section>
		<?php
			include("include/onglets.php");
		?>
		<article>
		<!-- seulement modifié article -->
		<div class="container">

            <!--data-filter permet de filtrer les vignettes par catégorie-->
            <ul id="filters" class="clearfix row">
                <li><span class="filter active" data-filter="cat1 cat2">Toutes mes catégories</span></li>
                <li><span class="filter" data-filter="cat1">GitHub</span></li>
                <li><span class="filter" data-filter="cat2">Codecademy</span></li>
            </ul>

						<div id="portfoliolist"> <!--La div qui contient les vignettes des projets-->

							<div class="portfolio" data-cat="cat1">
									<div class="portfolio-wrapper">
											<img src="image/GitHub.png" alt="" />
											<div class="label">
													<div class="label-text">
															<a class="text-title" href="https://github.com/GaetanPetitjean">GitHub</a>
															<span class="text-category">Mes projets</span>
													</div>
													<div class="label-bg"></div>
											</div>
									</div>
							</div>

							<div class="portfolio" data-cat="cat2">
									<div class="portfolio-wrapper">
											<img src="image/Codecademy.png" alt="" />
											<div class="label">
													<div class="label-text">
															<a class="text-title" href="https://www.codecademy.com/fr/Gaetan_Petitjean">Codecademy</a>
															<span class="text-category">Mes badges</span>
													</div>
													<div class="label-bg"></div>
											</div>
									</div>
							</div>


		</article>
	</section>
	</body>
</html>
