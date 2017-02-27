<?php 
$page_title='Styleguide';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>

<main>
<% if (hasBannerImage) { %>
	<section class="banner banner-img-wrapper">
		<div class="banner-img banner01" style="background-image:url('http://placehold.it/1920x550')"></div>
		<div class="banner__text">
			<h2><span class="banner__text__title"><?= $page_title ?></span></h2>
		</div>
		<div class="overlay-dark"></div>
	</section>
<% } %>
	<section class="content container fadeIn">
		<article>
			<header>
				<div class="breadcrumb">
					<span>
						<span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <span class="breadcrumb_last"><?= $page_title ?></span></span>
					</span>
				</div>
				<div class="titre-page-wrapper">
					<div class="page__tools">
						<a id="btn-share" href="#" class="btn-ring btn-ring--border  btn-ring--m btn-ring--color3 icon-share mrt"></a>
						<a id="btn-print" href="#" class="btn-ring btn-ring--border btn-ring--m btn-ring--color3 icon-print "></a>
					</div>
					<h1 class="titre-page">H1 Titre page</h1>

				</div>
				<!-- /.titre-page-wrapper -->
			</header>
			<section class="section">
				<span class="texte-chapeau">span intro Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur risus eget placerat consequat.</span>
				<h2 class="titre-section">H2 Titre de section</h2>
				<h3 class="titre-paragraphe">H3 titre de paragraphe</h3>
				<h3 class="titre-article">Titre article <span class="titre-article--small">en petit</span></h3>
				<div class="bloc bloc-bg-colored bg-grey">
					<h3 class="titre-bloc">Titre bloc</h3>
				</div>
				<!-- /.bloc -->
				<p>Nunc facilisis pharetra urna ac fermentum. Curabitur efficitur ut arcu vitae congue. Sed pretium nunc in tortor ultricies egestas. <span class="dominant-color"><strong>Donec condimentum,</strong> justo vitae imperdiet aliquet.</span> <strong>Donec condimentum,</strong> justo vitae imperdiet aliquet. Cras laoreet orci vitae lacus venenatis, ut tincidunt lectus porta. Pellentesque sit amet euismod ipsum . <span class="em"><strong>Donec condimentum,</strong> justo vitae imperdiet aliquet.</span></p>
				<p class="p-bigger">Paragraphe avec taille de police plus grande. Neque aliquid at in, minus quia ipsam. Unde itaque voluptates repellendus aliquid quae, laborum soluta sed eaque? </p>
				<p class="texte-en-avant">Texte en avant, consectetur adipisicing elit. Ea sequi quibusdam voluptatum temporibus fugit iusto facilis dolor quidem eos nemo, laudantium, cupiditate accusantium atque aliquam maiores, est commodi. Nisi, aspernatur.</p>
			</section>
			<section class="blocs-textes row">
				<!-- Ajouter blocs avec fonds differents -->
			</section>
			<!-- /.row -->
			<section class="texte">
				<p>__________________
					<br />
					<small>* Annotations ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consequatur tenetur quisquam. Quod a natus velit minus ut, eos rem pariatur rerum similique ex voluptas cum officiis? Facere, error, autem.<br>** Quod nostrum nemo a! Aliquam eos, obcaecati eligendi. Sint quo delectus nemo totam fuga, minus ut ipsa esse voluptate mollitia, optio distinctio dolore saepe temporibus, harum ducimus consequatur quod in at tempora architecto accusantium consequuntur!</small>
				</p>
			</section>
			<section class="row section">
				<!-- /.col-lg-3 col-sm-6 col-12 -->
				<div class="col-lg-3 col-sm-6 col-12">
					<ul>
						<li>Nulla eu auctor sapien</li>
						<li>Placerat commodo sem vel</li>
						<li>Phasellus urna arcu varius ac</li>
						<li>Curabitur vitae luctus dui</li>
						<li>Maecenas ex metus pretium</li>
					</ul>
					<!-- /.liste -->
				</div>
				<div class="col-lg-3 col-sm-6 col-12">
					<ul class="liste-fleche">
						<li>Nulla eu auctor sapien</li>
						<li>Placerat commodo sem vel</li>
						<li>Phasellus urna arcu varius ac</li>
						<li>Curabitur vitae luctus dui</li>
						<li>Maecenas ex metus pretium</li>
					</ul>
					<!-- /.liste -->
				</div>
				<div class="col-lg-3 col-sm-6 col-12">
					<ol class="liste-number">
						<li>Nulla eu auctor sapien</li>
						<li>Placerat commodo sem vel</li>
						<li>Phasellus urna arcu varius ac</li>
						<li>Curabitur vitae luctus dui</li>
						<li>Maecenas ex metus pretium</li>
					</ol>
					<!-- /.liste -->
				</div>
				<!-- /.col-lg-3 col-sm-6 col-12 -->
			</section>
			<!-- /.row -->
			<section class="row section">
				<div class="col-12">
					<div class="btn-group mbm">
						<a href="" class="btn btn--invert">En savoir plus</a>
						<a href="" class="btn">En savoir plus</a>
					</div>
					<div class="btn-group mbm">
						<a href="" class="btn-ring "><span class="icon icon-angle-right"></span></a>
						<a href="" class="btn-ring btn-ring--invert"><span class="icon icon-angle-right"></span></a>
						<a href="" class="btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
						<a href="" class="btn-ring btn-ring--color3"><span class="icon icon-angle-right"></span></a>
						<div style="padding:10px;margin-bottom:-10px;" class="d-ib bloc-bg-colored bg-dominant-color pbt">
							<a href="" class="btn-ring btn-ring--color2 mr0"><span class="icon icon-angle-right"></span></a>
						</div>
						<!-- /.d-ib bloc-bg-colored bg-dominant-color -->
					</div>
					<!-- /.btn-group -->
				</div>
			</section>
			<% if (includeCards) { %>
			<section class="section">
				<div class="row row--same-height">
					<div class="col-md-4 col-12">
						<div class="bloc-card bloc-card--bordered">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="titre image" />
								</div>
								<!-- /.image-wrapper -->
							</div>
							<div class="bloc-card__content">
								<h3 class="text-info-bloc-card">Categorie</h3>
								<p class="titre-bloc2">Bloc Carte par défaut</p>
								<p>Unde mollitia consectetur deserunt veniam nulla! Earum amet repellat deserunt autem nesciunt sed quis neque.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<!-- 16:9 aspect ratio -->
						<div class="bloc-card bloc-card--bordered">
							<div class="bloc-card__image">
								<div class="embed-responsive image-wrapper">
									<iframe class="embed-responsive-item" width="350" height="197" src="https://www.youtube.com/embed/vOGhAV-84iI" allowfullscreen></iframe>
								</div>
							</div>
							<!-- /.bloc-card__image -->
							<div class="bloc-card__content">
								<h3 class="text-info-bloc-card">Categorie</h3>
								<p class="titre-bloc2">Bloc Carte par défaut</p>
								<p>Unde mollitia consectetur deserunt veniam nulla! Earum amet repellat deserunt autem nesciunt sed quis neque.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="bloc-card bloc-card--bordered">
							<div class="bloc-card__content">
								<h2 class="titre-paragraphe">Bloc carte liste, voluptates, enim! Lorem ipsum dolor sit.</h2>
								<!-- Trait Rouge -->
								<ul class="liste">
									<li class="red"><a href="#"><span class="base-color">Voluptates, enim! Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Neque, incidunt! Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Quis, assumenda? Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Est, totam! Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Esse, aspernatur? Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Eos, similique. Lorem ipsum dolor sit.</span></a></li>
									<li class="red"><a href="#"><span class="base-color">Error, accusantium. Lorem ipsum dolor sit.</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /.row -->
			<% } %>
			<section class="section row">
				<% if (includeAccordion) { %>
					<div class="col-md-7">
						<div class="accordion">
							<h4>Setunggal</h4>
							<div>
								<p>
									Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
							<h4>Kalih</h4>
							<div>
								<p>
									Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.
								</p>
							</div>
							<h4>Tigo</h4>
							<div>
								<p>
									Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
								</p>
							</div>
							<h4>Sekawan</h4>
							<div>
								<p>
									Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
								</p>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
				<% } %>
				<% if (includeTabs) { %>
				<div class="col-md-5">
					<div class="tabs">
						<div id="tabs-1">
							<p class="titre-section2 mt0">Tab 1</p>
							<div class="tab-content-item mbs">
								<p class="mbt">Vitae id quasi tempora vero voluptatibus laboriosam nobis explicabo iste, fugit reiciendis deserunt hic aut similique ex voluptate veniam quo? Delectus ut dignissimos facere sed. Similique quis, consequatur aliquid a ex .</p>
								<span class="dominant-color">Dolorum, harum.</span>
							</div>
							<div class="tab-content-item mbs">
								<p class="mbt">Excepturi aperiam dolores laborum voluptatum, non eos ratione! Ex, praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p class="dominant-color">Dolorum, harum.</p>
							</div>
						</div>
						<div id="tabs-2">
							<p class="titre-section2 mt0">Tab 2</p>
							<div class="tab-content-item mbs">
								<p class="mbt">Excepturi aperiam dolores laborum voluptatum, non eos ratione! Ex, praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p class="dominant-color">Dolorum, harum.</p>
							</div>
							<div class="tab-content-item mbs">
								<p class="mbt">Vitae id quasi tempora vero voluptatibus laboriosam nobis explicabo iste, fugit reiciendis deserunt hic aut similique ex voluptate veniam quo? Delectus ut dignissimos facere sed. Similique quis, consequatur aliquid a ex .</p>
								<span class="dominant-color">Dolorum, harum.</span>
							</div>
						</div>
						<ul class="d-f list-unstyled">
							<li class="prt">
								<a class="btn-ring btn-ring--invert bold" href="#tabs-1">1</a>
							</li>
							<li>
								<a class="btn-ring btn-ring--invert bold" href="#tabs-2">2</a>
							</li>
						</ul>
					</div>
					<!-- /.bloc -->
				</div>
				<% } %>
			</section>

			<!-- /.row -->
			<% if (includeForms) { %>
			<section class="row section">
				<!-- Formulaire -->

				<div class=" col-md-10 offset-md-1 col-12 center-block">
					<p class="bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem voluptates explicabo, saepe nisi id odit est reprehenderit qui ad natus.</p>
					<form class="form">
						<div class="form-group">
							<label for="nom" class="control-label bold required">Nom</label>
							<input type="texte" name="nom"  class="form-control" id="nom"  placeholder="Nom" required>
						</div>
						<div class="form-group">
							<label class="bold control-label required" for="prenom">Prénom</label>
							<input type="texte" name="prenom"  class="form-control required" id="prenom"  placeholder="Prénom" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="bold control-label required">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="sujet" class="bold control-label required">Sujet</label>
							<input type="texte" name="sujet" class="form-control" id="sujet"  placeholder="Sujet" required>
						</div>
						<div class="form-group">
							<label for="choix" class="bold control-label required">Choix</label>
							<div class="select-wrap form-control">
								<select name="choix" id="choix">
									<option value="option1">Option 1</option>
									<option value="option1">Option 2</option>
									<option value="option1">Option 3</option>
								</select>
							</div>
							<!-- /.select-wrap -->
						</div>

						<% if (includeDatepicker) { %>
						<div class="form-group">
							<label class="control-label bold" for="date" aria-required="true">Date Picker</label>
							<input class="datepicker form-control" type="text" id="dp1487840154912" placeholder="10/09/16">
						</div>
						<% } %>

						<div class="form-group">
							<label for="exampleTextarea" class="bold control-label required">Message</label>
							<textarea class="form-control" id="exampleTextarea" rows="3">Votre message</textarea>
						</div>
						<span class="titre-etape">Titre etape</span>
						<div class="form-group checkboxes">
							<div class="checkbox">
								<input id="checkbox1" type="checkbox">
								<label for="checkbox1">Checkbox</label>
							</div>
							<div class="checkbox">
								<input id="checkbox2" type="checkbox">
								<label for="checkbox2">Checkbox</label>
							</div>
						</div>
						<span class="titre-etape">Titre etape</span>
						<div class="form-group direction-colum">
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Bouton radio
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" checked=""> Bouton radio
								</label>
							</div>
						</div>
						<p>
							<span class="bold dominant-color">*</span> Champ(s) obligatoire(s)
							<button type="submit" class="btn btn-cp pull-right">Envoyer</button>
						</p>
					</form>
				</div>
			</section>
			<% } %>
			<% if (includeMap) { %>
			<section class="row section">
				<div class="col-12">
					<section id="contact-map" class="acf-map">
						<div class="marker" data-lat="43.6414439" data-lng="1.4871640999999727">
							<p><?= $titreSite ?></p>
						</div>
					</section>
				</div>
				<!-- /.col-12 -->
			</section>
			<!-- /.row -->
			<% } %>
			<section class="row section">
				<div class="col-lg-4 col-sm-6">
					<div class="bloc bloc-bg-colored bg-dominant-color">
						<h3 class="titre-bloc"><span class="light">titre</span> <br /> du bloc</h3>
						<!-- /.titre-bloc -->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies rutrum sapien eget maximus. Phasellus dapibus quam et lorem euismod sodales. In eget enim rhoncus magna luctus ullamcorper. Cras in cursus diam. <strong>Donec sed finibus purus. Sed a diam feugiat risus mollis bibendum</strong> et sed justo. Curabitur suscipit elit quam. Nulla lobortis est tellus, nec dignissim libero efficitur ut.</p>
					</div>
					<!-- /.bloc bloc-bg-colored bg-color1 -->
				</div>
				<!-- /.col-lg-4 col-sm-6 -->
				<div class="col-lg-4 col-sm-6">
					<div class="bloc bloc-bg-colored bg-base-color">
						<h3 class="titre-bloc"><span class="light">titre</span> <br /> du bloc</h3>
						<!-- /.titre-bloc -->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies rutrum sapien eget maximus. Phasellus dapibus quam et lorem euismod sodales. In eget enim rhoncus magna luctus ullamcorper. Cras in cursus diam. <strong>Donec sed finibus purus. Sed a diam feugiat risus mollis bibendum</strong> et sed justo. Curabitur suscipit elit quam. Nulla lobortis est tellus, nec dignissim libero efficitur ut.</p>
					</div>
					<!-- /.bloc bloc-bg-colored bg-color1 -->
				</div>
				<!-- /.col-lg-4 col-sm-6 -->
				<div class="col-lg-4 col-sm-6">
					<div class="bloc bloc-bg-colored bg-grey">
						<h3 class="titre-bloc"><span class="light">titre</span> <br /> du bloc</h3>
						<!-- /.titre-bloc -->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultricies rutrum sapien eget maximus. Phasellus dapibus quam et lorem euismod sodales. In eget enim rhoncus magna luctus ullamcorper. Cras in cursus diam. <strong>Donec sed finibus purus. Sed a diam feugiat risus mollis bibendum</strong> et sed justo. Curabitur suscipit elit quam. Nulla lobortis est tellus, nec dignissim libero efficitur ut.</p>
					</div>
					<!-- /.bloc bloc-bg-colored bg-color1 -->
				</div>
				<!-- /.col-lg-4 col-sm-6 -->
			</section>
			<% if (includeGallery) { %>
			<section class="row row--same-height section">
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="bloc-card">
						<div class="bloc-card__image">
							<div class="image-wrapper">
								<a class="image-gallery" data-fancybox-group="001" href="http://placehold.it/1600x1080?end=.jpg" rel="gallery" title="Image title">
									<img src="http://placehold.it/600x400" alt="" />
								</a>
							</div>
							<!-- /.image-wrapper -->
						</div>
						<div class="bloc-card__content">
							<h4 class="font-stack-trirong p-bigger">Image gallerie ipsum dolor sit amet.</h4>
						</div>
					</div>
				</div>
			</section>
			<!-- /.row -->
			<% } %>
			<% if (includeFilters) { %>
			<section class="section">
				<div class="row">
					<div class="col-sm-12">
						<div class="filter  text-center">
							<ul class="list-unstyled">
								<li><a class="active" data-filter="*" href="#">Tout les filtres</a></li>
								<li><a href="#" data-filter="code">Code</a></li>
								<li><a href="#" data-filter="industriel">Industriel</a></li>
								<li><a href="#" data-filter="photographie">Photographie</a></li>
								<li><a href="#" data-filter="webdesign">Web design</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="filter-gallery row row--same-height">
					<div class="col-md-4 col-12 filter-gallery__item filter-code">
						<div class="bloc-card ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Code</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 filter-gallery__item filter-industriel">
						<div class="bloc-card   ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Insudtriel</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 filter-gallery__item filter-webdesign">
						<div class="bloc-card ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Webdesign</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 filter-gallery__item filter-photographie">
						<div class="bloc-card ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Photographie</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 filter-gallery__item filter-webdesign">
						<div class="bloc-card ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Webdesign</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 filter-gallery__item filter-industriel">
						<div class="bloc-card ">
							<div class="bloc-card__image">
								<div class="image-wrapper">
									<img src="http://placehold.it/600x400" alt="" />
								</div>
							</div>
							<div class="bloc-card__content">
								<h3 class="text-date">Industriel</h3>
								<h4 class="font-stack-trirong p-bigger">Filtre article ipsum dolor sit amet.</h4>
								<p>
									Autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
								</p>
								<a href="" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
			</section>
			<!-- /.section -->
			<% } %>
			<% if (includeSlider) { %>
			<section class="slider-section-wrapper section">
				<div id="slider-demo" class="swiper-container ">
					<div class="swiper-wrapper ">
						<div class="swiper-slide row home-actu">
							<div class="col-md-4 offset-md-1 center">
								<div class="bloc-image ">
									<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
								</div>
								<!-- /.bloc-image -->
							</div>
							<!-- /.col-sm-4 offset-sm-1 -->
							<div class="col-md-6 col-12">
								<!-- /.home-actu__date -->
								<h2 class="titre-article titre"> slider standard adipisicing elit. Facilis, eligend</h2>
								<!-- /.titre-section -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus sed dolorum incidunt rem dolorem est suscipit fuga aliquid laborum, nulla, eos fugit, quam perspiciatis commodi vel! Nemo sequi corporis maiores molestias, blanditiis ut, nostrum vitae libero ratione esse nobis.</p>
								<a href="#" class="btn btn--invert btn-text-only">Lire la suite</a>
							</div>
							<!-- /.col-sm-6 -->
						</div>
						<div class="swiper-slide row home-actu">
							<div class="col-md-4 offset-md-1 center">
								<div class="bloc-image">
									<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
								</div>
								<!-- /.bloc-image -->
							</div>
							<!-- /.col-sm-4 offset-sm-1 -->
							<div class="col-md-6 col-12">
								<!-- /.home-actu__date -->
								<h2 class="titre-article titre"> consectetur adipisicing elit. Facilis, eligend</h2>
								<!-- /.titre-section -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus sed dolorum incidunt rem dolorem est suscipit fuga aliquid laborum, nulla, eos fugit, quam perspiciatis commodi vel! Nemo sequi corporis maiores molestias, blanditiis ut, nostrum vitae libero ratione esse nobis.</p>
								<a href="#" class="btn btn--invert btn-text-only">Lire la suite</a>
							</div>
							<!-- /.col-sm-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.swiper-wrapper  -->
					<nav class="pagination slider-pagination"></nav>
				</div>
				<!-- /swiper-container -->
				<div class="swiper-button swiper-button-prev icon-angle-left"></div>
				<!-- /.swiper-button-prev -->
				<div class="swiper-button swiper-button-next icon-angle-right"></div>
			</section>
			<section class="slider-section-wrapper section">
				<div id="slider-demo-multiview" class="swiper-container ">
					<div class="swiper-wrapper ">
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
						<div class="swiper-slide">
							<div class="bloc-image ">
								<img src="http://placehold.it/600x400" class="home-actu__image" alt="actualité accueil" width="360" height="270" />
							</div>
						</div>
					</div>
					<!-- /.swiper-wrapper  -->
				</div>
				<nav class="pagination slider-pagination-mview"></nav>
			</section>
			<% } %>
		</article>
	</section>
</main>

<?php include 'footer.php'; ?>
