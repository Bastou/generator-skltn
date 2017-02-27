<?php
$page_style='accueil'; 
include 'head.php'; 
include 'header.php';
?>

<main>
<% if (includeSlider) { %>
    <section id="home-slider" class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="cover swiper-slide__image" style="background-image: url('http://placehold.it/1920x650/cccccc');" data-swiper-parallax="50%"></div>
                <!-- /.cover -->
                <div class="title-slider-wrapper bloc-bg-colored" data-swiper-parallax="-500">
                    <div class="title-slider-inner">
                        <h2 class="titre-slider fadeIn" >Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cover swiper-slide__image" style="background-image: url('http://placehold.it/1920x650');" data-swiper-parallax="50%"></div>
                <!-- /.cover -->
                <div class="title-slider-wrapper bloc-bg-colored" data-swiper-parallax="-500">
                    <div class="title-slider-inner">
                        <h2 class="titre-slider fadeIn" >Consectetur adipisicing, dolor sit amet</h2>
                    </div>
                </div>
            </div>

        </div>
        <nav class="pagination home-slider-pagination"></nav>
        <div class="swiper-button swiper-button-prev home-slider-prev icon-angle-left"></div>
        <!-- /.swiper-button-prev -->
        <div class="swiper-button swiper-button-next home-slider-next icon-angle-right"></div>
        <!-- /.swiper-button-next -->
    </section>
<% } %>
    <section class="fadeIn">
        <div class="container mbxl">
            <div class="row">
                <div class="col-sm-6 ">
                    <h2 class="titre-section">Lorem ipsum dolor, <br /> consectetur adipisicing elit</h2>
                    <!-- /.texte-chapeau -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, dignissimos, hic! Sequi temporibus quia perferendis nisi laboriosam quis consequuntur sunt illum quasi adipisci eligendi soluta, autem voluptas blanditiis, earum recusandae, doloribus minus provident! .</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis nobis illo dolore, repudiandae eius sunt quae aut blanditiis repellat molestias voluptas sequi, ad inventore quo cumque. Rem, quae, odit!</p>
                    <!-- /.btn-group -->
                </div>
                <!-- /.col-sm-6 -->
                <div class="col-sm-6">
                    <h2 class="titre-section"> Consectetur adipisicing, <br />eligend elit facilis</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, dignissimos, hic! Sequi temporibus quia perferendis nisi laboriosam quis consequuntur sunt illum quasi adipisci eligendi soluta, autem voluptas blanditiis, earum recusandae, doloribus minus provident! Cumque deserunt hic iure laborum, unde dolore facere deleniti ipsam! Maxime repellendus, modi fugit doloribus maiores, unde.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis nobis illo dolore, repudiandae eius sunt quae aut blanditiis repellat molestias voluptas sequi, ad inventore quo cumque. Rem, quae, odit!</p>
                 </div>
                 <!-- /.col-sm-6 -->
             </div>
         </div>
         <!-- /.container -->
     </section>
     <section class="bg-extended-wrapper">
         <div class="container  ">
             <div class="row">
                 <div class="col-md-5 bloc-bg-colored mbxl">
                     <h2 class="titre-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                     <!-- /.texte-chapeau -->
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus sed dolorum incidunt rem dolorem est suscipit fuga aliquid laborum, nulla, eos fugit, quam perspiciatis commodi vel! Nemo sequi corporis maiores molestias, blanditiis ut, nostrum vitae libero ratione esse nobis.</p>
                     <div class="btn-group ">
                         <a href="/boursesactivites_presentation" class="btn btn--invert">En savoir plus</a>
                         <a href="/boursesactivites_candidatures" class="btn">Je m'inscris</a>
                     </div>
                     <!-- /.btn-group -->
                 </div>
                 <!-- /.col-sm-6 -->
                 <div class="offset-md-2 col-md-5 bloc-bg-colored mbxl">
                     <h2 class="titre-section"> Consectetur adipisicing elit. Facilis, <br />eligend</h2>
                     <!-- /.texte-chapeau -->
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus sed dolorum incidunt rem dolorem est suscipit fuga aliquid laborum, nulla, eos fugit, quam perspiciatis commodi vel! Nemo sequi corporis maiores molestias, blanditiis ut, nostrum vitae libero ratione esse nobis.</p>
                     <a href="/concours-regional-eloquence" class="btn btn--invert ">En savoir plus</a>
                 </div>
                 <!-- /.col-sm-6 -->
             </div>
         </div>
         <div class="container-fluid bg-extended">
             <div class="row">
                 <div class="col-md-6 col-12 bg-grey"></div>
                 <!-- /.col-sm-6 -->
                 <div class="col-md-6 col-12 bg-base-color"></div>
                 <!-- /.col-sm-6 -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container-fluid bg-extended-wrapper -->
         <!-- /.container -->
     </section>
    <% if (includeSlider) { %>
     <section class="home-actus section-lightgrey   slider-section-wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h2 class="titre-section base-color text-center">Slider contenu</h2>
                 </div>
                 <!-- /.col-12 -->
             </div>
             <div id="home-actu-slider" class="swiper-container ">
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
                             <p class="text-date">LE 7 NOVEMBRE 2016</p>
                             <!-- /.home-actu__date -->
                             <h2 class="titre-article titre"> consectetur adipisicing elit. Facilis, eligend</h2>
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
                            <p class="text-date">LE 20 OCTOBRE 2016</p>
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
                <div class="row">
                    <div class="col-sm-6 offset-sm-5 d-f flex-center mbl">
                        <nav class="pagination home-actu-slider-pagination"></nav>
                        <a href="#" class="btn btn--invert btn-text-only"><span class="base-color">Voir tout</span></a>
                    </div>
                    <!-- /.col-sm-6 offset-sm-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /swiper-container -->

        </div>
        <!-- /.container -->
    </section>
<% } %>
    <section>
        <div class="container   ">
            <div class="row">
                <div class="col-md-6 mbxl">
                    <h3 class="titre-section2 ">Newsletter</h3>
                    <!-- /.titre-section -->
                    <p class="p-bigger bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, assumenda.</p>
                    <!-- /.texte-chapeau -->
                    <form action="/" method="post" class="form form--newsletter">
                        <div class="form-group">
                            <input id="mymail-email-1" class="form-control" name="email" type="email" value="" aria-required="true" aria-label="Email" spellcheck="false" placeholder="Votre adresse email">
                            <button class="btn form--newsletter__submit" name="submit" type="submit" aria-label="S'inscrire"><span class="hidden-sm-down">S'inscrire</span></button>
                        </div>
                    </form>
                    <!-- /.btn-group -->
                </div>
                <!-- /.col-sm-6 -->
                <div class="col-md-5">
                 <% if (includeTabs) { %>
                    <div class="tabs">
                        <div id="tabs-1">
                                <p class="titre-section2">Tab 1</p>
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
                                <p class="titre-section2">Tab 2</p>
                                <div class="tab-content-item mbs">
                                    <p class="mbt">Excepturi aperiam dolores laborum voluptatum, non eos ratione! Ex, praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <p class="dominant-color">Dolorum, harum.</p>
                                </div>
                                <div class="tab-content-item mbs">
                                    <p class="mbt">Vitae id quasi tempora vero voluptatibus laboriosam nobis explicabo iste, fugit reiciendis deserunt hic aut similique ex voluptate veniam quo? Delectus ut dignissimos facere sed. Similique quis, consequatur aliquid a ex .</p>
                                    <span class="dominant-color">Dolorum, harum.</span>
                                </div>
                        </div>
                        <ul class="d-f">
                            <li class="prt">
                                <a class="btn-ring btn-ring--invert bold" href="#tabs-1">1</a>
                            </li>
                            <li>
                                <a class="btn-ring btn-ring--invert bold" href="#tabs-2">2</a>
                            </li>
                        </ul>
                    </div>
                <% } else { %>
                        <p class="titre-section2">Distinctio, assumenda</p>
                        <div class=" mbs">
                            <p class="mbt">Vitae id quasi tempora vero voluptatibus laboriosam nobis explicabo iste, fugit reiciendis deserunt hic aut similique ex voluptate veniam quo? Delectus ut dignissimos facere sed. Similique quis, consequatur aliquid a ex .</p>
                            <span class="dominant-color">Dolorum, harum.</span>
                        </div>
                        <div class=" mbs">
                            <p class="mbt">Excepturi aperiam dolores laborum voluptatum, non eos ratione! Ex, praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="dominant-color">Dolorum, harum.</p>
                        </div>
                <% } %>
                    <!-- /.bloc -->
                </div>
                <!-- /.col-sm-6 -->
            </div>
        </div>
        <!-- /.container -->
    </section>
</main>

<?php include 'footer.php'; ?>
