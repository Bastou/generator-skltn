<?php 
$page_title='Modèle de plan du site';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 
?>

<main>
<% if (hasBannerImage) { %>
    <section class="banner banner-img-wrapper">
        <div class="banner-img banner01" style="background-image:url('http://placehold.it/1920x550')"></div>
    </section>
<% } %>
    <section class="content container fadeIn">
        <article class="content-article col-sm-10 col-sm-offset-1">
            <header>
                <div class="breadcrumb ">
                    <span><span ><a href="<?= $siteUrl ?>" >Accueil</a> <span class="separator">></span> <span class="breadcrumb_last"><?= $page_title ?></span></span>
                    </span>
                </div>
                <h1 class="titre-page"><?= $page_title ?></h1>
            </header>
            <div class="sitemap">
                <ul>
                    <li><a href="#">Deserunt ex</a></li>
                    <li><a href="#">Deserunt ex</a>
                    <ul>
                        <li><a href="#">Deserunt ex</a></li>
                        <li><a href="#">Deserunt ex</a></li>
                        <li><a href="#">Deserunt ex</a></li>
                        <li><a href="#">Deserunt ex</a></li>
                        <li><a href="#">Deserunt ex</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Deserunt ex</a></li>
                </ul>
            </div>
        </article>
    </section>
    <!-- /.content -->
</main>

<?php include 'footer.php'; ?>
