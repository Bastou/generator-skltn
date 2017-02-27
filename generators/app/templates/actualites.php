<?php 
$page_title='Les dernières actualités';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>

<main class="">
<% if (hasBannerImage) { %>
    <section class="banner banner-img-wrapper">
        <div class="banner-img banner01 " style="background-image:url('http://placehold.it/1920x550')"></div>
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
                    <span><span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <span class="breadcrumb_last"><?= $page_title ?></span></span>
                    </span>
                </div>
                <h1 class="titre-page"><?= $page_title ?></h1>
            </header>

            <div class="row row--same-height">
                <!-- .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <!-- .cards -->
                    <div class="bloc-card bloc-card--has-button cards">
                        <div class="bloc-card__image">
                            <div class="image-wrapper">
                                <img src="http://placehold.it/600x400" alt="" />
                            </div><!-- /.image-wrapper -->
                        </div>
                        <div class="bloc-card__content">
                            <h3 class="text-date">12 Février 2017</h3>
                            <h4 class="font-stack-trirong p-bigger">Titre Lorem ipsum dolor sit amet.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, explicabo, autem, quasi vel modi quia voluptatem quod repellendus cum perferendis est molestias officia accusamus asperiores ab consectetur aliquam debitis qui.
                            </p>
                            <a href="<?= $siteUrl ?>actualites-detail" class="bloc-card__button btn-ring btn-ring--border"><span class="icon icon-angle-right"></span></a>
                        </div>
                    </div>
                    <!-- /.cards -->
                </div>
                <!-- /.col-md-4 col-12 -->
               
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <nav class="pagination center"><span class="page-numbers current">1</span>
                        <a class="page-numbers" href="2">2</a>
                        <a class="page-numbers" href="3">3</a>
                        <a class="page-numbers" href="4">4</a>
                        <a class="next page-numbers" href="2">→</a></nav>
                </div>
            </div>
            <!-- /.row -->
        </article>
    </section>
    <!-- /.content -->
</main>

<?php include 'footer.php'; ?>
