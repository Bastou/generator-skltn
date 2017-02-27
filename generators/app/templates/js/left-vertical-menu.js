/*
 * GESTION DU MENU PRINCIPAL
 */

 $(document).ready(function () {
	/*
	 * Affiche / Masque le logo quand on clique sur le menu hamburger
	 */
	 $('.navbar-toggle').on('click', function() {
	 	if($('#myNavbar').hasClass('in')) {
	 		$('.nav-burger-banner').fadeIn();
	 	} else {
	 		$('.nav-burger-banner').fadeOut();
	 	}
	 	$(this).toggleClass("active");
	 });
	 /* ----------------------------------------------------------------------- */

	/*
	 * Menu sur plusieurs niveaux
	 */
	 $('.nav-list-main').children('li').children('ul').each(function() {
	 	$(this).addClass('nav-list-secondary');
	 });

	 $('.nav-list-secondary').each(function() {
	 	$(this).wrap('<div class="nav-list-secondary-wrapper">');
	 });

	// Ajout d'un bouton "accueil" dans les sous-niveaux
	$('.nav-list-secondary-wrapper').children('ul').prepend('<li class="nav-list-back"><a href="#">Accueil</a></li>');

	// Ajout d'une classe sur les li de premier niveau ayant un sous-niveau
	$('.nav-list-secondary-wrapper').parent().addClass('nav-list-level1');

	// Quand on clique sur un élément du menu...
	$('li.nav-list-level1 > a').on('click', function() {
		var menu = $(this).parent().children('.nav-list-secondary-wrapper'); // menu à fermer ou ouvrir
		//var visible = menu.is(':visible'); // statut visible du sous-niveau
		var visible = menu.width() > 0;
		var menuActive = $('.nav-list-active'); // Menus actifs au moment du clic
		var timer = (menuActive.length > 0) ? 500 : 0; // délai avant affichage du menu cliqué

		if(visible) {
			// On masque le menu
			maskMenu(menu);
		} else {
			// On masque tous les menu ouverts
			if(menuActive.length > 0) {
				menuActive.each(function() {
					maskMenu($(this).children('.nav-list-secondary-wrapper'));
				});
			}
			// On affiche le menu
			displayMenu(menu, timer);
		}

		return(false);
	});

	// Quand on clique sur le bouton "accueil"...
	$('.nav-list-main .nav-list-back').on('click', function() {
		menu = $(this).parents('.nav-list-secondary-wrapper').last(); // menu à fermer

		maskMenu(menu);

		return(false);
	});

	// Surveille les clicks sur le document
	// afin de fermer le menu quand on clique en dehors
	$(document).on('click', function(e) {
		var menuActive = $('.nav-list-active'); // Menus actifs au moment du clic
		var parent = $(e.target).parents('.header-main').last(); // Parent ('.header-main') de l'élément cliqué

		// Si le parent n'est pas le menu et qu'il y a un menu ouvert
		if(parent.length == 0 && menuActive.length > 0) {
			// On masque tous les menu ouverts
			menuActive.each(function() {
				maskMenu($(this).children('.nav-list-secondary-wrapper'));
			});
		}
	});

	function maskMenu(menu) {
		menu.css({
			'width' : '0px'
		});
		menu.parent().removeClass('nav-list-active');
	}

	function displayMenu(menu, timer) {
		var ww = window.innerWidth; // largeur de la fenetre (barre de scroll comprise)

		if (ww < 1200) {
			menu.css({
				'width' : '100%'
			});
		} else {
			// On attend la fermeture des menus ouverts avant d'en ouvrir un autre
			menu.delay(timer).queue(function(next) {
				$(this).css({
					'width' : '300px'
				});
				next();
			});
		}
		menu.parent().addClass('nav-list-active');
	}
	/* ----------------------------------------------------------------------- */

	/*
	 * Permet au menu principal de scroller s'il dépasse la hauteur de la fenêtre
	 * tout en restant fixé en bas
	 */
	 $(window).on('menu-scroll', function() {
		var menu = $('header.header-main'); 		// Le menu principal

		var headH = menu.prop('scrollHeight'); 		// Hauteur du menu
		var scrollTop = $(window).scrollTop(); 		// Position du scroll
		var winH = $(window).height(); 				// Hauteur de la fenetre
		var winW = window.innerWidth;				// Largeur de la fenetre (barre de scroll comprise)
		if (winW >= 1200) {	
			menu.css({
				'position' 	: 'fixed',
				'top' 		: 0,
				'bottom' 	: '0',
				'height'	: 'inherit'
			});
		}
		// if (winW >= 1200) {							// Si on est en version "desktop"
		// 	if(headH <= winH) { 					// Si le menu est plus petit que la fenetre
		// 		//console.log('A');
		// 		menu.css({
		// 			'position' 	: 'fixed',
		// 			'top' 		: 0,
		// 			'bottom' 	: 'auto',
		// 			'height'	: '100%'
		// 		});
		// 	} else { 								// Si le menu est plus grand que la fenetre
		// 		if(scrollTop + winH >= headH) { 	// Si le bas du menu arrive au dessus du bas de la fenetre
		// 			//console.log('B1');
		// 			menu.css({
		// 				'position' 	: 'fixed',
		// 				'top' 		: 'auto',
		// 				'bottom' 	: 0,
		// 				'height'	: 'inherit'
		// 			});
		// 		} else {
		// 			//console.log('B2');
		// 			menu.css({
		// 				'position' 	: 'absolute',
		// 				'top' 		: 0,
		// 				'bottom' 	: 'auto',
		// 				'height'	: 'inherit'
		// 			});
		// 		}
		// 	}
		// }
	});

	 $(window).on('scroll', function() {
	 	$(window).trigger('menu-scroll');
	 });
	 /* ----------------------------------------------------------------------- */

	/*
	 * Vérifie le redimensionnement de la fenetre
	 * pour afficher le menu en mode burger ou desktop
	 */
	 $(window).on('menu-resize', function() {
		var ww = window.innerWidth; 	// largeur de la fenetre (barre de scroll comprise)
		var winW = $(window).width();	// Largeur utile de la fenetre
		var wh = $(window).height(); 	// hauteur de la fenetre
		var navbarHeight; 				// Hauteur du menu (padding et border inclus)

		// Le menu burger prend la hauteur de la fenetre
		// (le menu burger n'apparait qu'en dessous de 1200px de largeur d'écran)
		if (ww < 1200) {
			navbarHeight = $('#main-nav-header').outerHeight(); // Hauteur du menu (padding et border inclus)

			$('.nav-list-secondary').css({'width' : winW});
			$('.nav-list-active .nav-list-secondary-wrapper').css({'width' : '100%'});

			$('header.header-main').css('height', 'inherit');
			$('.menu-wrapper').height(wh - navbarHeight);

			if(!$('#myNavbar').hasClass('in')) {
				$('#myNavbar').css('height', '0px');
			}

			$('header.header-main').css({'position' : 'fixed', 'bottom' : 'auto'});
		} else {
			$('.nav-list-secondary').css({'width' : '300px'});
			$('.nav-list-active .nav-list-secondary-wrapper').css({'width' : '300px'});

			$('#myNavbar').css('height', '100%');
			$('.menu-wrapper').css('height', '100%');
			$(window).trigger('menu-scroll');
		}
	});

	 $(window).on('resize', function() {
	 	$(window).trigger('menu-resize');
	 }).trigger('menu-resize');
	 /* ----------------------------------------------------------------------- */
	});