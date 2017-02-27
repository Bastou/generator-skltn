<header class="header-main">
	<nav id="main-nav" class="navbar navbar-toggleable-md navbar-inverse">
		<div id="menu-header" class="menu-container">
			<div id="main-nav-header" class="navbar-header">
				<!-- #Hamburger button -->
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-brand nav-burger-banner hidden-lg-up">
					<a href="<?= $siteUrl ?>"><img class="logo" src="http://placehold.it/200x100/000000?text=<?= $titreSite ?>" alt="logo <?= $titreSite ?>" width="200" height="100" /></a>
				</div>
			</div>
			<div id="navbarNavDropdown" class="collapse navbar-collapse">
				<div class="menu-wrapper">
					<div class="main-nav-top">
						<div id="logo-main" class="hidden-md-down">
							<a href="<?= $siteUrl ?>"><img class="logo__desktop" src="http://placehold.it/200x158/000000?text=<?= $titreSite ?>" alt="logo <%= appslug %>" width="200" height="158" /></a>
						</div>
						<div id="menu-slider">
							<ul class="nav-header nav-list nav-list-main nav--vertical">
								<li><a href="<?= $siteUrl ?>styleguide">Styleguide</a></li>
								<li><a href="<?= $siteUrl ?>model">Model</a></li>
								<li>
									<a href="#">Sous Menu</a>
									<ul>
										<li><a href="">Nobis vero</a></li>
										<li><a href="#">Doloribus, quasi</a></li>
										<li><a href="#">Obcaecati</a></li>
										<li><a href="#">Voluptatum, hic</a></li>
										<li><a href="#">Praesentium, dolor</a></li>
										<li><a href="#">Reprehenderit, quisquam</a></li>
									</ul>
								</li>
								<% if (includeNews) { %>
								<li >
									<a href="<?= $siteUrl ?>actualites">Actualités</a>
								</li>
								<% } %>
								<% if (includeContact) { %>
								<li >
									<a  href="<?= $siteUrl ?>contact">Contact</a>
								</li>
								<% } %>
								<li><a href="#">Dolore harum</a></li>
								<li><a href="#">Nobis vero</a></li>
							</ul>
						</div>
					</div>
					<div class="main-nav-bottom">
						<form class="nav-header nav-form nav-form--search">
							<div class="nav-form-inputfield">
								<input type="text" placeholder="Rechercher" />
								<span class="nav-form-btn"><button class="icon icon-loupe" type="submit"></button></span>
							</div>
						</form>
						<span class="nav-header-title">Newsletter</span>
						<form class="nav-header nav-form nav-form--mail">
							<div class="nav-form-inputfield">
								<input type="text" placeholder="Votre email" />
								<span class="nav-form-btn"><button class="icon icon-angle-right-l" type="submit"></button></span>
							</div>
						</form>
						<div class="nav-header nav-social_links">
							<div class="nav-social_links-list">
								<a class="icon icon-twitter" href="#"></a>
								<a class="icon icon-fb" href="#"></a>
								<a class="icon icon-mail" href="#"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
