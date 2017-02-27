/**
 * Description:  Script principal pour <%= appname %>
 * Version: 1.0.0
 * Created: <%= date %>
 * Last update: <%= date %>
 * Author: <%= authorname %> <<%= authoremail %>>
 */
;(function ($) {
    'use strict';

    // Declare object and main parameters
    var project = {};
    project.name = '<%= appname %>';
    var breakpoint = {};


    <% if (includeMap) { %>
    // Declare global project vars
    var map = null;
    <% } %>

    // Declare init
    project.init = function () {
        <% if (includeProgressBar) { %>project.nanobar.go(30);<% } %>

        // Change `no-js` to `js` (independently of the `enableClasses` option)
        $('html').removeClass('no-js').addClass('js');

        // Bind project methods on domready
        
        <% if (includeSlider) { %>project.sliders();<% } %>
        project.searchbar();
        project.stickyNav();
        <% if (includeMap) { %>project.map.init_map();<% } %>
        <% if (includeProgressBar) { %>project.nanobar.go(50);<% } %>
        <% if (includeDatepicker) { %>project.datePicker();<% } %>
        <% if (includeTabs) { %>project.tabs();<% } %>
        <% if (includeAccordion) { %>project.accordion();<% } %>
        <% if (includeGallery) { %>project.gallery();<% } %>
        <% if (includeFilters) { %>project.filters();<% } %>

        <% if (includeProgressBar) { %>project.nanobar.go(100);<% } %>

        // On load
        $(window).on('load', function () {

        });

        // ON resize
        $(window).on('resize', function () {
            project.navSubMenu();
        }).trigger('resize');

    };
    <% if (includeProgressBar) { %>
    project.nanobar = new Nanobar();
    <% } %>

<% if (includeSlider) { %>
    project.initSlider = function (selector, options) {
        var $section__slider = $(selector);
        if ($section__slider.length > 0 && $section__slider.find(".swiper-slide").length > 1) {
            // Activation du slider
            this[selector] = new Swiper(selector, options);
        } else {
            $(selector + " .swiper-button").hide();
        }

    };

    project.sliders = function () {
        // Slider bandeau sur la home page
        project.initSlider('#home-slider', {
            pagination: '.home-slider-pagination',
            prevButton: '.home-slider-prev',
            nextButton: '.home-slider-next',
            autoplayDisableOnInteraction: false,
            parallax: true,
            loop: true,
            paginationClickable: true,
            speed: 600,
            grabCursor: true
        });

        project.initSlider('#home-actu-slider', {
            pagination: '.home-actu-slider-pagination',
            autoplayDisableOnInteraction: false,
            loop: true,
            paginationClickable: true,
            speed: 600,
            spaceBetween: 100
        });

        project.initSlider('#slider-demo', {
            pagination: '.slider-pagination',
            autoplayDisableOnInteraction: false,
            prevButton: '.swiper-button-prev',
            nextButton: '.swiper-button-next',
            loop: true,
            paginationClickable: true,
            speed: 600,
            spaceBetween: 100
        });

        project.initSlider('#slider-demo-multiview', {
            pagination: '.slider-pagination-mview',
            autoplayDisableOnInteraction: false,
            paginationClickable: true,
            speed: 600,
            spaceBetween: 60,
            slidesPerView: 4,
            grabCursor: true
        });
    };
<% } %>
    project.searchbar = function () {
        var $searchlink = $('#searchtoggl span');
        var $searchbar = $('#searchbar');

        $('.recherche a').unbind('click').click(function (e) {
            e.preventDefault();

            if ($(this).attr('id') == 'searchtoggl') {
                if (!$searchbar.is(":visible")) {
                    // if invisible we switch the icon to appear collapsable
                    $searchlink.addClass('icon-cross');
                } else {
                    // if visible we switch the icon to appear as a toggle
                    $searchlink.removeClass('icon-cross');
                }

                $searchbar.slideToggle(300, function () {
                    // callback after search bar animation
                    console.log('slideToggle');
                });
            }

        });
    };

    project.stickyNav = function () {
        if ($('#main-navbar').length != 0) {
            var $stickyNav = $('#main-navbar');
            var stickyNavTop = $stickyNav.offset().top;

            var stickyNav = function () {
                var scrollTop = $(window).scrollTop();

                if (scrollTop > stickyNavTop) {
                    $stickyNav.addClass('sticky');
                } else {
                    $stickyNav.removeClass('sticky');
                }
            };

            /* Sticky nav on page
             ------------------------------------------*/
            stickyNav();

            $(window).scroll(function () {
                stickyNav();
            });
        }
    };

    project.navSubMenu = function () {
        if ("matchMedia" in window) { // Détection

            if (window.matchMedia("(min-width: 1200px)").matches) {
                /* La largeur minimum de l'affichage est 1200px inclus */
                $('a.toggle-submenu').on("click", function (e) {
                    $(this).parent().find('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            }

        }
    };
<% if (includeDatepicker) { %>
    project.datePicker = function () {
        if ($('html').attr("lang") == 'fr') {
            $.datepicker.setDefaults($.datepicker.regional["fr"]); // Localisation en francais
            $.datepicker.setDefaults({
                dateFormat: 'dd/mm/y', // Format d'affichage des dates
                firstDay: 1 // Lundi, premier jour de la semaine
            });
        }

        $('.datepicker').datepicker();
    };
<% } %>
<% if (includeTabs) { %>
    project.tabs = function () {
        /*
         * From jquery.ui
         */
        $(".tabs").tabs();
    };
<% } %>
<% if (includeAccordion) { %>
    project.accordion = function () {
        /*
         * From jquery.ui
         */
        $(".accordion").accordion({
            collapsible: true,
            heightStyle: "content"
        });
    };
<% } %>
<% if (includeGallery) { %>
    project.gallery = function () {
        $("a[href$='.jpg'],a[href$='.png'],a[href$='.gif'],a[href~='placehold']").attr('rel', 'gallery').fancybox({padding: 0});
    };
<% } %>    
<% if (includeFilters) { %>
    project.filters = function () {
        var $btnsFilter = $('.filter a').click(function (e) {
            e.preventDefault();
            if ($(this).attr('data-filter') == '*') {
                $('.filter-gallery .filter-gallery__item').fadeIn(450);
            } else {
                var $el = $('.filter-' + $(this).attr('data-filter')).fadeIn(450);
                $('.filter-gallery .filter-gallery__item').not($el).hide();
            }
            $btnsFilter.removeClass('active');
            $(this).addClass('active');
        })
    };
<% } %>
<% if (includeMap) { %>
    project.map = {

        /*
         *  new_map
         *
         *  This function will render a Google Map onto the selected jQuery element
         *
         *  @type    function
         *  @date    8/11/2013
         *  @since   4.3.0
         *
         *  @param   $el (jQuery element)
         *  @return  n/a
         */
        new_map: function ($el) {

            // var
            var $markers = $el.find('.marker');

            // Create an array of styles.
            var styles = [{
                "stylers": [
                    {saturation: -100}
                ]
            }, {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#d8d8da"
                }]
            }, {
                "featureType": "landscape.natural.landcover",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#d8d8da"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#b5b4bb"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ccc"
                }]
            }];
            // Create a new StyledMapType object, passing it the array of styles,
            // as well as the name to be displayed on the map type control.
            var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

            // Disable drag on mobile device
            var isDraggable = $(document).width() > 480 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

            // vars
            var args = {
                zoom: 15,
                center: new google.maps.LatLng(0, 0),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                draggable: isDraggable,
                scrollwheel: false,
                zoomControl: true
            };


            // create map
            var map = new google.maps.Map($el[0], args);

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');


            // add a markers reference
            map.markers = [];


            // add markers
            $markers.each(function () {

                project.map.add_marker($(this), map);

            });


            // center map
            project.map.center_map(map);


            // return
            return map;

        },

        /*
         *  add_marker
         *
         *  This function will add a marker to the selected Google Map
         *
         *  @type    function
         *  @date    8/11/2013
         *  @since   4.3.0
         *
         *  @param   $marker (jQuery element)
         *  @param   map (Google Map object)
         *  @return  n/a
         */

        add_marker: function ($marker, map) {

        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // Marker pointer
        var pointer = '';
        var pointer_icon = {
            'standard': '/images/marker.png',
            //'other': '/wp-content/themes/pnr/images/marker-other.png',
        };
        if ($marker.attr('data-marker')) {
            pointer = pointer_icon[$marker.attr('data-marker')];
        } else {
            pointer = pointer_icon['standard'];
        }

        // create marker
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: pointer
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html(),
                maxWidth: 320
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open(map, marker);

            });
        }

    },

        /*
         *  center_map
         *
         *  This function will center the map, showing all markers attached to this map
         *
         *  @type    function
         *  @date    8/11/2013
         *  @since   4.3.0
         *
         *  @param   map (Google Map object)
         *  @return  n/a
         */

        center_map:function (map) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each(map.markers, function(i, marker) {

            var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

            bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
            // set center of map
            map.setCenter(bounds.getCenter());
            map.setZoom(12);
        } else {
            // fit to bounds
            map.fitBounds(bounds);
        }

    },
        /*
         *  document ready
         *
         *  This function will render each map when the document is ready (page has loaded)
         *
         *  @type    function
         *  @date    8/11/2013
         *  @since   5.0.0
         *
         *  @param   n/a
         *  @return  n/a
         */
        init_map: function () {
            var map = null;

                $('.acf-map').each(function() {

                    // create map
                    map = project.map.new_map($(this));

                });
        }

    };
<% } %>

    // init project on DOM Ready
    $(document).ready(project.init);
})(jQuery);
