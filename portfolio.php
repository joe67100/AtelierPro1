<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php')?>
    <title>Mon portfolio</title>
</head>
<body>
    <header>
        <?php include('includes/header.php')?>
        <style type="text/css">
        #a2
        {color: var(--orange); text-decoration:underline;}
        </style>
    </header>
    <main>
        <section>
            <h4>Portfolio</h4>
            <p style="text-align:center;">Cette page à pour but d'expliquer la démarche suivie afin de réaliser le portfolio !</p>
        </section>

        <!-- Séparateur -->
        <span class="sepqsj"></span>

        <h4>Réalisation du portfolio :</h4>
        <section class="real">
            <div class="contenu">
                <div id="coin-tl" class="coin"></div>
                <div id="coin-tr" class="coin"></div>
                <div id="coin-br" class="coin"></div>
                <div id="coin-bl" class="coin"></div>
                <h5>Objectif attendu : </h5>
                <p>Réalisation d'un portfolio en HTML5/CSS3 en natif sans utilisation de bootstrap ou autres collections d'outils.<br> Posséder un environnement de développement, de test, et de production. <br>Création d'un script permettant de mettre à jour l'environnement de production à partir d'une seule commande.</p>
        
                <h5>Démarche : </h5>
                <p>Réalisation d'une charte graphique ainsi que d'une maquette afin de faciliter l'intégration de cette dernière. Consultable en cliquant <a href="files/maquette_chartegraphique.pdf" target="_blank" style="color:var(--orange); text-decoration:underline;">ici</a>.<br> Utilisation de Visual Studio Code afin de coder le portfolio.<br>Renforcement des bases en HTML et CSS3 (+ apprentissage : @media / @keyframes) afin de respecter les attentes vis-à-vis de la maquette.</p>
            
                <h5>Contenu : </h5>
                <p>Une page d'accueil, ainsi que différentes pages contenant diverses informations.</p>
            
                <h5>Informations supplémentaires : </h5>
                <p>Utilisation de PHP afin d'utiliser l'instruction de langage "include" afin d'éviter de réécrire le même code pour plusieurs pages. Instruction utilisée notamment pour le head/header/footer.</p>
            </div>
        </section>
        <h4>Mes projets : </h4>
        <p style="text-align:center;">J'ai eu l'occasion de travailler sur différents projets de développement en plus de celui du portfolio que vous êtes en train de consulter : </p>
        <section class="projets">
            <div class="projet">
                <a href="projet1.php">
                    <div class="picture">
                        <video autoplay muted loop src="images/javascript.mp4" type="video/mp4" alt="Projet1" min-width="400" height="266"></video>
                    </div>
                    <span>Projet > bot javascript</span>
                    <span class="date-projet"><cite>2020 - 2021</cite></span>
                </a>
            </div>
            <div class="projet">
                <a href="projet2.php">
                    <div class="picture">
                        <img src="images/tableauprojet.jpg" alt="Projet2">
                    </div>
                    <span>Projet > tableau</span>
                    <span class="date-projet"><cite>2020 - 2021</cite></span>
                </a>
            </div>
            <div class="projet">
            <a href="projet3.php">
                    <div class="picture">
                        <video autoplay muted loop src="images/update.mp4" type="video/mp4" alt="Projet3" max-width="400" height="266"></video>
                    </div>
                    <span>Projet > mises à jour</span>
                    <span class="date-projet"><cite>2020</cite></span>
                </a>
            </div>
        </section>
    </main>
    <footer>
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>