<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<?php
			include("include/link.php");
		?>
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
		<h2>Informatique</h2>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Microsoft Office (Word, Excel, Power Point, Access)</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Web statique (HTML 5, CSS 3)</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Web dynamique (PHP, JS)</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Gestion d'une base de donnée (SQL)</p>
		<h2>Comptable</h2>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Gestion comptable</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Gestion fiscale</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Gestion sociale</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Gestion financière</p>
		<p class="competance"><i class="fa fa-spinner fa-pulse"></i> Prévisions, analyses et contrôle de gestion</p>

		</article>
	</section>
	</body>
</html>
