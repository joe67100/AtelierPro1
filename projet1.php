<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php')?>
    <title>Projet 1</title>
</head>
<body>
    <header>
        <?php include('includes/header.php')?>
    </header>
    <main>
        <section class="contener">
            <h3><a href="portfolio.php"><i class="fas fa-arrow-circle-up second" style="font-size:30px; transform: rotate(270deg); margin-right:10px;"></i></a>Projet > bot javascript</h3>
            <article>
                <h4>Introduction</h4>
                <p>Ceci est le premier projet au sein de la formation (sans compter le portfolio) que j'ai pu réaliser en matière de développement. Celui-ci consistait en la création d'un bot Discord en Javascript capable d'exécuter plusieurs commandes. Il m'a permis d'appréhender les notions de bases dans ce langage de programmation.<br><br>Ce projet a été realisé en groupe !</p>
            </article>
            <!-- PRODUCTION -->
            <article id="picture-project">
                <h4>Aperçu</h4>

                <img src="images/projetJS.png" alt="mon premier projet" />
                <legend>Début d'une fonction permettant au Bot de jouer un morceau de musique.</legend>
            </article>
        </section>
    </main>
    <footer>
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>