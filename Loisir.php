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
		<br/>
		<p><i class="fa fa-spinner fa-pulse"></i> Basket-ball</p>
		<p><i class="fa fa-spinner fa-pulse"></i> Football</p>
		<p><i class="fa fa-spinner fa-pulse"></i> Tennis</p>
		<p><i class="fa fa-spinner fa-pulse"></i> Karting</p>
		<p><i class="fa fa-spinner fa-pulse"></i> Cinéma</p>
		<p><i class="fa fa-spinner fa-pulse"></i> Musique</p>
		</article>
	</section>
	</body>
</html>
