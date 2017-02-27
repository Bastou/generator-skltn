<header class="<?= isset($page_style) ? $page_style : '' ?> header-main">
	<% if (hasHeaderTopBar) { %>
		<div class="header-main__top">
			<div class="container container-xl d-f justify-end ">
					<nav class="social-networks horizontal-simple-nav">
						<ul class="list-inline">
							<li><a href="https://www.facebook.com/<%= appslug %>"><span class="icon-fb"></span></a></li>
							<li><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
							<li><a href="mailto:contact@<%= appslug %>.fr"><span class="icon-mail"></span></a></li>
						</ul><!-- /.navbar-social -->
					</nav><!-- /.horizontal-simple-nav -->
					<form class="searchform form" name="formrech" method="get" action="/resultats-recherche">
						<input type="text" name="mot" value="" class="inputsearch form-control" accesskey="4" placeholder="Recherche...">
						<button type="submit" class="icon icon-loupe reset"></button>
					</form>
			</div><!-- /.container -->
		</div><!-- /.header-main__top -->	
	<% } %>
	
	<div id="main-navbar" class="main-navbar">
		<div class="container-xl">
			<nav class="navbar">
				<a href="<?= $siteUrl ?>" class="navbar-brand logo logo-main">
					<img class="logo__desktop" src="http://placehold.it/200x158/ffffff?text=<?= $titreSite ?>" alt="logo <?= $titreSite ?>" width="200" height="158" />
				</a>
				<input type="checkbox" id="toggle-menu" class="mobile-menu-check visually-hidden">
				<!-- # Menu + menu responsive -->
				<ul class="primary-nav nav navbar-nav nav-menu-multi">
					<li class="nav-item"><a class="nav-link" href="<?= $siteUrl ?>styleguide">Styleguide</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= $siteUrl ?>model">Model</a>
					</li>
					<li class="nav-item dropdown has-submenu">
						<a class="nav-link dropdown dropdown-toggle" href="#">Sous-menu</a>
						<label for="fof" class="toggle-sub hidden-lg-up" onclick=""></label>
						<input type="checkbox" id="fof" class="sub-nav-check hidden-lg-up">
						<ul id="fof-sub" class="dropdown-menu sub-nav">
							<li class="sub-heading hidden-lg-up"><label for="fof" class="toggle toggle-back" onclick="" title="retour"></label> Entrée parente</li>
							<li class="nav-item dropdown has-submenu ">
								<a class="nav-link dropdown dropdown-toggle"  href="#">Entrée</a>
								<label for="fof-bourse-actives" class="toggle-sub hidden-lg-up" onclick=""></label>
								<input type="checkbox" id="fof-bourse-actives" class="sub-nav-check hidden-lg-up">
								<ul id="fof-bourse-actives-sub" class="sub-menu sub-nav">
									<li class="sub-heading hidden-lg-up"><label for="fof-bourse-actives" class="toggle toggle-back" onclick="" title="retour"></label> Entrée parente</li>
									<li class="nav-item"><a class="nav-link"  href="#">Entrée</a></li>
									<li class="nav-item"><a class="nav-link"  href="#">Entrée</a></li>
									<li class="nav-item"><a class="nav-link"  href="#">Entrée</a></li>
									<li class="nav-item"><a class="nav-link"  href="#">Entrée</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Entrée</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Entrée</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Entrée</a>
							</li>
						</ul>
					</li>
					<% if (includeNews) { %>
					<li class="nav-item">
						<a class="nav-link" href="<?= $siteUrl ?>actualites">Actualités</a>
					</li>
					<% } %>
					<% if (includeContact) { %>
					<li class="nav-item">
						<a class="nav-link" href="<?= $siteUrl ?>contact">Contact</a>
					</li>
					<% } %>
					<!-- Bouton fermetrue menu overlay, mobile/ipad uniquement -->
					<li class="close-menu"><label for="toggle-menu"><span class="icon-close-l"></span></label></li><!-- /.close-menu -->
				</ul>
				<div class="navbar-search recherche navbar-item">
					<a href="#recherche" id="searchtoggl"><span class="icon-loupe"></span></a>
				</div><!-- /.navbar-search -->
				<div class="navbar-hamburger-menu-wrapper navbar-item">
					<label for="toggle-menu" class="btn-ring navbar-hamburger-menu"><span class="icon-hamburger"></span></label>
				</div><!-- /.navbar-hamburger-menu navbar-item -->
			</nav>
		</div><!-- /.container -->
		<div id="searchbar" class="clearfix">
			<form name="formrech" method="get" action="/dev/rechercher" id="searchform">
				<input type="hidden" name="etp" value="1">
				<input type="hidden" name="start" value="0">
				<button type="submit" id="searchsubmit" class="fa fa-search fa-4x"></button>
				<input type="text" name="mot" id="mot" value="" class="formrech" accesskey="4" placeholder="Rechercher">
			</form>
		</div>
	</div><!-- /.main-navbar--wrapper -->
</header>
