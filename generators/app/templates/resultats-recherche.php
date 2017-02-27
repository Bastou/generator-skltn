<?php 
$page_title='Resultats de recherche';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>


<main >
<% if (hasBannerImage) { %>
	<section class="banner banner-img-wrapper">
		<div class="banner-img banner01 " style="background-image:url('http://placehold.it/1920x550')"></div>
	</section>
<% } %>
	<section class="content container fadeIn">
		<article class="content-article col-sm-10 offset-sm-1 text-left">
			<header>
				<div class="breadcrumb ">
					<span ><span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <span class="breadcrumb_last"><?= $page_title ?></span></span></span>
				</div>
				<h1 class="titre-page text-center"><?= $page_title ?></h1>
			</header>
			<p><span class="dominant-color">10</span> Résultats trouvés pour <strong>skltn</strong></p>
			<ol class="listing-recherche" type="1">
				<li>
					<h3 class="titre-article titre-article--small"><a href="#">Lorem ipsum dolor sit amet </a></h3>
					<div class="breadcrumb ">
						<span ><span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <a class="" href="/" >Prestations</a> <span class="separator">></span> <a class="" href="/" >Prestation</a>  <span class="separator">></span> <span class="breadcrumb_last">Projection</span></span></span>
					</div>
					<!-- /.titre-article -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus numquam enim accusamus alias inventore illo, atque nam voluptate, neque voluptates?... </p>
				</li>
				<li>
					<h3 class="titre-article titre-article--small"><a href="#">Minus numquam enim accusamus </a></h3>
					<div class="breadcrumb ">
						<span ><span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <a class="" href="/" >Prestations</a> <span class="separator">></span> <a class="" href="/" >Prestation</a>  <span class="separator">></span> <span class="breadcrumb_last">Projection</span></span></span>
					</div>
					<!-- /.titre-article -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus numquam enim accusamus alias inventore illo, atque nam voluptate, neque voluptates?... </p>
				</li>
			</ol>
		</article>
	</section><!-- /.content -->
</main>

<?php include 'footer.php'; ?>
