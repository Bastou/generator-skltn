<?php 
$page_title='Contact';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 

?>



<main>
    <% if (includeMap) { %>
    <section id="contact-map" class="acf-map banner banner-img-wrapper">
        <div class="marker" data-lat="43.6414439" data-lng="1.4871640999999727">
            <p><?= $titreSite ?></p>
        </div>
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
                <div class="col-12">
                    <h2 class="titre-paragraphe">Coordonnées</h2>   <!-- col-sm-push-5 -->
                    <!-- .col-md-6 col-12 -->
                    <div class="center-block text-center">
                        <h3 class="p-bigger exergue">Nom société</h2>
                            <p>Adresse
                                <br />Adresse
                                <br />
                                <span class="p-bigger exergue">Tél : </span>05 62 11 37 46
                                <br /><span class="p-bigger exergue">Fax : </span>05 81 63 70 65</p>
                            </div>
                            <!-- /.col-md-6 col-12 -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <% if (includeForms) { %>
                    <div class="row">
                        <!-- .col-md-12 -->
                        <div class="col-md-12">
                            <h2 class="titre-paragraphe">Formulaire de contact</h2>
                            <p class="bold">
                                Si vous souhaitez nous contacter directement, vous pouvez remplir le formulaire suivant. 
                                Votre demande sera traitée le plus rapidement possible. 
                            </p>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->    

                    <div class="row">
                        <!-- .col-md-12 -->
                        <div class="col-md-12">
                            <div class="offset-md-1 col-md-10 col-12 center-block">
                                <form class="form">

                                    <div class="form-group">
                                        <label for="nom" class="control-label bold required">Nom</label>
                                        <input type="texte" name="nom"  class="form-control" id="nom"  placeholder="Nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bold control-label required" for="prenom">Prénom</label>
                                        <input type="texte" name="prenom"  class="form-control required" id="prenom"  placeholder="Prénom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="bold control-label required">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sujet" class="bold control-label required">Sujet</label>
                                        <input type="texte" name="sujet" class="form-control" id="sujet"  placeholder="Sujet" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="choix" class="bold control-label required">Choix</label>
                                        <div class="select-wrap form-control">
                                            <select name="choix" id="choix">
                                                <option value="option1">Option 1</option>
                                                <option value="option1">Option 2</option>
                                                <option value="option1">Option 3</option>
                                            </select>
                                        </div><!-- /.select-wrap -->
                                    </div>
                                    <% if (includeDatepicker) { %>
                                    <div class="form-group">
                                        <label class="control-label bold" for="date">Date Picker</label>
                                        <input class="datepicker form-control" type="text" id="dp1487840154912" placeholder="10/09/16">
                                    </div>
                                    <% } %>
                                    <div class="form-group">
                                        <label for="exampleTextarea" class="bold control-label required">Message</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3">Votre message</textarea>
                                    </div>
                                    <p>
                                        <span class="bold dominant-color">*</span> Champ(s) obligatoire(s)
                                        <button type="submit" class="btn btn-cp pull-right">Envoyer</button>
                                    </p> 
                                </form>
                            </div>    
                        </div>
                    </div>
                    <!-- /.row -->
                    <% } %>

                </article>
            </section>
            <!-- /.content -->
        </main>

        <?php include 'footer.php'; ?>
