<?php 
$page_title='Présentation';
$page_style='page'; 
include 'head.php'; 
include 'header.php'; 
?>

<style>

    * {
        line-height: 1.2;
        margin: 0;
    }

    .wrapper {
        display: table-cell;
        vertical-align: middle;
        margin: 2em auto;
        margin-top: 300px;
        margin-bottom: 100px;
    }

    h1 {
        color: #555;
        font-size: 2em;
        font-weight: 400;
    }

    p {
        margin: 0 auto;
        width: 280px;
    }

    @media only screen and (max-width: 280px) {

        body, p {
            width: 95%;
        }

        h1 {
            font-size: 1.5em;
            margin: 0 0 0.3em;
        }

    }

</style>

<main>
    <section class="content d-f text-center container">
        <div class="wrapper">
            <h1>Page non trouvée</h1>
            <p>Désolé, la page que vous recherchez n'a pas été trouvée</p>
        </div><!-- /.wrapper -->
    </section>
    <!-- /.content -->
</main>

<?php include 'footer.php'; ?>
