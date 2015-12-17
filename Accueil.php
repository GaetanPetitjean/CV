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
		<h3>Bienvenue</h3>
		<p>Je suis heureux de vous accueillir sur mon CV en ligne. Vous trouverez ici toutes les informations sur ma vie professionnelle.</p>

		<p>Je suis un jeune dynamique, motivé, intéréssé.</p>

		<p>Je sais m'adapter à une entreprise rapidement.</p>

		<p>Vous pouvez <a id="mail" href="mailto:petitjean.gaetan@gmail.com" target="_blank">me contacter par mail</a>. Je répondrai rapidement à vos attentes.</p>

		<p>Mon CV en version PDF est disponible en cliquant sur le fichier.</p>

		<p align="center"><a href="CV.pdf" target="_blank"><img src="image/CV.png" alt="CV" /></a></p>
		</article>
	</section>
	</body>
</html>
