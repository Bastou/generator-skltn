<?php 
$page_title='Titre actu';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>

<main class="">
<% if (hasBannerImage) { %>
    <section class="banner banner-img-wrapper">
        <div class="banner-img banner01" style="background-image:url('images/')"></div>
        <div class="banner__text">
            <h2>
                <span class="banner__text__title">Actualités</span>
            </h2>
        </div>
        <div class="overlay-dark"></div>
    </section>
<% } %>
    <section class="content container fadeIn">
        <article>
            <header>
                <div class="breadcrumb ">
                    <span>
                        <span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <span class="breadcrumb_last"><?= $page_title ?></span></span>
                    </span>
                </div>
                <h1 class="titre-page"><?= $page_title ?></h1>
            </header>
            
            <!-- .row -->
            <div class="row">
                <!-- .col-md-6 col-12 -->
                <div class="col-md-12">
                    <figure class="mbm">
                        <img src="http://placehold.it/1160x480" alt="Salon Infosup" />
                    </figure>
                    <h2 class="texte-en-avant">Du 16 au 19 novembre</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                    </p>
                </div>
                <!-- /.col-md-6 col-12 -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col-md-6 col-12 -->
                <div class="col-md-6 col-12">
                    <div class="bloc-image">
                        <img src="http://placehold.it/460x280" />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="titre-paragraphe">Retour sur l'édition précédente</h2>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                    </p>
                    <a href="#" class="btn btn--invert btn-cp pull-right">En savoir plus</a>   
                </div>
                <!-- /.col-md-6 col-12 -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col-md-12 -->
                <div class="col-md-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro laudantium nihil exercitationem hic error saepe ut. 
                        Doloribus, odio at asperiores illum blanditiis labore quibusdam fuga beatae delectus magni explicabo hic.
                    </p>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col-md-6 -->
                <div class="col-md-12">
                    <ul class="liste liste-puce liste-item-espace">
                        <li class="bold">Site de l'événement</li>
                        <li class="bold">L'Académie de Toulouse <span class="dominant-color"><a class="link-externe" href="http://www.ac-toulouse.fr/">www.ac-toulouse.fr/</a></span></li>
                        <li class="bold">L'Onisep <span class="dominant-color"><a class="link-externe" href="http://www.onisep.fr/Mes-infos-regionales/Midi-Pyrenees">www.onisep.fr/Mes-infos-regionales/Midi-Pyrenees</a></span></li>
                    </ul>
                </div>
                <!-- /.col-md-6 col-12 -->
            </div>
        </article>
    </section>
    <!-- /.content -->
</main>

<?php include 'footer.php'; ?>
