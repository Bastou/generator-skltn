<footer id="main-footer">
    <div class="footer-top">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 col-12 address-container">
                    <address>
                        <span class="titre-footer d-b"><?= $titreSite ?></span> Adresse accusantium beatae
                        <br /> 11 Inventore nesciunt eum vel
                        <br />
                        <span class="exergue">Tél</span> : 05 22 51 37 46
                        <br />
                        <span class="exergue">Fax</span> : 05 41 63 72 86
                        <br />
                        <a href="mailto:contact@<%= appslug %>.com">contact@<%= appslug %>.com</a>
                    </address>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 col-12 d-f hidden-sm-down">
                    <ul class="liste-puce footer-site-map">
                        <li><a href="#">Entrée</a></li>
                        <li><a href="#">Entrée</a></li>
                        <li><a href="#">Entrée</a></li>
                        <li><a href="#">Entrée</a></li>
                    </ul>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-6 col-12 hidden-sm-down">
                    <div class="footer-logos-list d-f justify-space-between flex-center">
                        <img src="http://placehold.it/140x100" alt="logo_region" width="180" height="51" />
                        <img src="http://placehold.it/140x100" alt="logo_pierrefabre" width="102" height="33" />
                        <img src="http://placehold.it/140x100" alt="logo_europe" width="80" height="60" />
                        <img src="http://placehold.it/140x100" alt="logo_leclerc" width="101" height="35" />
                    </div>
                    <div class="footer-logos-list d-f justify-space-between flex-center">
                        <img src="http://placehold.it/140x100" alt="logo_harmoniemutuelle" width="56" height="66" />
                        <img src="http://placehold.it/140x100" alt="logo_universite" width="70" height="70" />
                        <img src="http://placehold.it/140x100" alt="logo_ordre_du_merite" width="26" height="68" />
                        <img src="http://placehold.it/140x100" alt="logo_fondation_KPMG" width="120" height="38" />
                    </div>
                    <!-- /.row -->
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.footer-top -->
            </div>
            <!-- /.container -->
        </div>
    </div>
    <div class="footer-bottom col">
        <div class="container">
            <div class="row flex-center">
                <nav class="footer__nav horizontal-simple-nav hidden-sm-down">
                    <ul class="list-inline">
                        <li><a href="<?= $siteUrl ?>sitemap">Plan du site</a></li>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Crédits</a></li>
                    </ul>
                </nav>
                <div class="item-end">
                    <p class="copyright ">© Copyright <?= $titreSite ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer-bottom -->
</footer>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="<?= $jsPath ?>vendor/jquery-2.2.2.min.js"><\/script>')
</script>
<% if (includeProgressBar) { %>
    <script type="text/javascript" src="<?= $jsPath ?>vendor/nanobar.min.js"></script>
<% } %>
<% if (includeDatepicker || includeAccordion || includeTabs) { %>
<script type="text/javascript" src="<?= $jsPath ?>vendor/jquery-ui.min.js"></script>
<% if (isFR) { %>
    <script type="text/javascript" src="<?= $jsPath ?>vendor/datepicker-fr.js"></script>
<% } %>
<% } %>
<% if (includeSlider) { %>
<script type="text/javascript" src="<?= $jsPath ?>vendor/swiper.jquery.min.js"></script>
<% } %>
<% if (includeGallery) { %>
<script type="text/javascript" src="<?= $jsPath ?>vendor/jquery.fancybox.pack.js"></script>
<% } %>
<% if (includeMap) { %>
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyB5a1Eoh5oPPjUBkKDypuYSpurMrLKbVVE"></script>
<% } %>
<% if (includeCookies) { %>
<script type="text/javascript" src="//cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?tracking=1"></script>
<% } %>
<% if (hasVerticalMenu) { %>
    <script type="text/javascript" src="<?= $jsPath ?>vendor/tether.min.js"></script>
    <script type="text/javascript" src="<?= $jsPath ?>vendor/bootstrap.min.js"></script>
    <script src="<?= $jsPath ?>left-vertical-menu.js"></script>
<% } %>
<script src="<?= $jsPath ?>main.js"></script>
</body>

</html>
