<?php 
$page_title='Page modèle';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>

<main>
<% if (hasBannerImage) { %>
    <section class="banner banner-img-wrapper">
        <div class="banner-img banner01 " style="background-image:url('http://placehold.it/1920x550')"></div>
        <div class="banner__text">
            <h2><span class="banner__text__title">Modèles</span></h2>
        </div>
        <div class="overlay-dark"></div>
    </section>
<% } %>
    <section class="content container">
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
                    <h1 class="titre-page"><?= $page_title ?></h1>

                </div>
                <!-- /.titre-page-wrapper -->
            </header>
            <div class="row">
                <div class="col-md-6">
                    <p class="texte-en-avant">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sequi quibusdam voluptatum temporibus fugit iusto facilis dolor quidem eos nemo, laudantium, cupiditate accusantium atque aliquam maiores, est commodi. Nisi, aspernatur.</p>
                    <div class="bloc-image">
                        <img src="http://placehold.it/460x280" alt="Concours éloquence" />
                    </div>
                    <div class="bloc-image">
                        <!--<div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="350" height="197" src="https://www.youtube.com/embed/ijTN2qHj6F4" allowfullscreen></iframe>
                        </div>-->
                        <iframe width="460" height="269" src="https://www.youtube.com/embed/vOGhAV-84iI" title="Vidéo du Concours Régional d'&Eacute;loquence 2015" allowfullscreen></iframe>
                    </div>
                    <!-- /.bloc-image -->
                    <!-- /.bloc-image -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <p class="texte-chapeau">Vitae tempora reiciendis ex excepturi odit nemo, necessitatibus non optio consequuntur sapiente provident libero tenetur, delectus nihil consequatur culpa eius?</p>
                    <p class="p-bigger exergue">Le Concours Régional d’Éloquence s’organise en plusieurs temps :</p>
                    <ul class="liste liste-puce liste-item-espace">
                        <li>Quod magni molestiae obcaecati in incidunt excepturi, dolore tempora, hic facilis aliquid!</li>
                        <li>Numquam eum voluptate expedita officiis, animi tempore, maiores esse obcaecati alias inventore.</li>
                        <li>Velit iste, doloremque sequi amet non, ullam quibusdam totam aut quod commodi.</li>
                        <li>Culpa nulla animi odit earum praesentium molestiae? Quam saepe, voluptas temporibus. Debitis.</li>

                    </ul>
                    <p>Nisi incidunt at vel reprehenderit aliquid ipsam consectetur dolorem, maxime mollitia. Iure dolores similique sequi placeat. Adipisci totam, asperiores! Itaque animi iure dolorem fugit, odio nostrum quo. Eum cumque odio aliquid officiis nesciunt vero ullam impedit placeat recusandae deleniti. Tenetur repudiandae quia, sed laboriosam cumque inventore sint dolor fugiat odit quidem at odio omnis alias. Natus veritatis quis inventore obcaecati, corporis sit iusto.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias dolorem laboriosam beatae eum voluptatem facere quasi repellendus adipisci minus, sequi consequatur blanditiis excepturi totam recusandae repudiandae expedita, hic explicabo dicta quo accusantium sunt ipsum architecto exercitationem sapiente deserunt? Asperiores ducimus tempora, quae inventore odit velit ipsa accusamus excepturi animi nemo.</p>
                    <!--BOUTONS-->
                    <div class="btn-group mbl">
                        <a href="#" class="btn btn--invert btn-cp">Voir les photos</a>
                        <a href="#" class="btn btn--invert btn-cp">Voir les vidéos</a>
                    </div>
                    <!-- /.btn-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- CARTES -->
            <div class="row row--same-height">
                <div class="col-md-4 col-12">
                    <div class="bloc-card bloc-card--bordered">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="350" height="197" src="https://www.youtube.com/embed/vOGhAV-84iI" allowfullscreen></iframe>
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-info-bloc-card">Categorie</h3>
                            <p class="titre-bloc2">Bloc Carte par défaut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="bloc-card bloc-card--bordered">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="350" height="197" src="https://www.youtube.com/embed/vOGhAV-84iI" allowfullscreen></iframe>
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-info-bloc-card">Categorie</h3>
                            <p class="titre-bloc2">Bloc Carte par défaut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="bloc-card bloc-card--bordered">
                        <div class="bloc-card__content">
                            <h2 class="titre-paragraphe">Bloc carte liste, voluptates, enim! Lorem ipsum dolor sit.</h2>
                            <!-- Trait Rouge -->
                            <ul class="liste">
                                <li class="red"><a href="#"><span class="base-color">Voluptates, enim! Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Neque, incidunt! Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Quis, assumenda? Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Est, totam! Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Esse, aspernatur? Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Eos, similique. Lorem ipsum </span></a></li>
                                <li class="red"><a href="#"><span class="base-color">Error, accusantium. Lorem ipsum </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="ve-content">

                    <div class="">
                        <p class="titre-paragraphe">Description</p>
                        <p class="bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos beatae ullam nam dignissimos perspiciatis, quisquam minus libero dolorem harum neque repudiandae autem, fugit corrupti illo quas quam accusamus sequi sapiente?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit et veniam velit eveniet quasi dolore nostrum laudantium quis magni nihil quos, enim, sunt nisi reiciendis! Cumque aspernatur voluptas blanditiis expedita?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit et veniam velit eveniet quasi dolore nostrum laudantium quis magni nihil quos, enim, sunt nisi reiciendis! Cumque aspernatur voluptas blanditiis expedita?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit et veniam velit eveniet quasi dolore nostrum laudantium quis magni nihil quos, enim, sunt nisi reiciendis! Cumque aspernatur voluptas blanditiis expedita?</p>
                    </div>

                <div class="row">
                    <!-- .col-md-6 col-12 -->
                    <div class="col-md-6 col-12">
                        <!-- .bloc-card__content -->
                        <div class="item-autre-metier-secteur bloc-card bloc-card--bordered">
                            <div class="bloc-card__content">
                                <p class="titre-paragraphe">Culpa et recusandae repellat</p>
                                <ul>
                                    <li>Delectus consequuntur</li>
                                    <li>Delectus consequuntur</li>
                                    <li>Delectus consequuntur</li>
                                </ul>
                            </div>
                        </div>
                        <!-- ./bloc-card__content -->
                    </div>

                    <!-- ./col-md-6 col-12 -->
                    <div class="col-md-6 col-12">
                        <div class="item-autre-metier-secteur bloc-card bloc-card--bordered">
                            <div class="bloc-card__content">
                                <p class="titre-paragraphe">Voluptates soluta</p>
                                <ul>
                                    <li>Delectus consequuntur</li>
                                    <li>Delectus consequuntur</li>
                                    <li>Delectus consequuntur</li>
                                </ul>
                            </div>
                            <!-- ./bloc-card__content -->
                        </div>
                    </div>
                    <!-- ./col-md-6 col-12 -->
                </div>

            </div>
            <!-- /.ve-content -->

            <!-- .row -->

                <div class="bloc bloc-bg-colored bg-dominant-color">
                    <p class="titre-paragraphe bold">Harum numquam</p>
                    <p class="mtm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis iure tempore repellendus inventore reprehenderit commodi deserunt voluptatem distinctio, corporis facilis sed recusandae explicabo dolores ipsa quaerat, facere obcaecati quam.</p>
                </div>
                <!-- ./bloc-entry bloc-bg-colored bloc-dominant-color -->

            <h2 class="titre-paragraphe mts">Voluptates soluta</h2>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="bloc bloc-adresse">
                        <h3 class="titre-bloc">Accusantium fugit iste tenetur atque.</h3>

                        <span class="bloc-adresse-nom">Laboriosam, placeat eaque</span>
                        <p>Ratione quidem culpa aliquam in eius repellendus 
                            <br /> 31095 perferendis
                        </p>
                    </div>
                </div>
                <!-- /.col- -->

                <div class="col-12 col-md-6">
                    <div class="bloc bloc-adresse">
                        <h3 class="titre-bloc">Placeat eaque</h3>

                        <span class="bloc-adresse-nom">Quasi vel modi quia</span>
                        <p>Ratione quidem culpa aliquam in eius repellendus 
                            <br /> 31095 perferendis
                            <br /> Endi blanditiis quo corrup
                            <br />
                        </p>
                    </div>
                    <div class="img-decoration pBoursesActivitesCandidatures-enveloppe"></div>
                </div>
                <!-- /.col- -->
            </div>
            <!-- /.row -->

            <hr class="mtl" />

            <div class="row pts">
                <div class="col-sm-12 col-md-6">
                    <p class="texte-en-avant normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, provident.</p>
                </div>
                <!-- /.col- -->

                <div class="col-sm-12 col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic architecto dignissimos ipsum, libero ut nihil. Voluptatem ipsa voluptatum sequi!</p>
                    <a href="" class="btn">En savoir plus</a>
                </div>
                <!-- /.col- -->
            </div>
            <!-- /.row -->

        </article>
    </section>
    <!-- /.content -->
</main>

<?php include 'footer.php'; ?>
