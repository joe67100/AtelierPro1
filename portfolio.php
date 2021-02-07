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
        <span class="sepqsj"></span>
        <h4>Réalisation du portfolio :</h4>
        <section class="real">
            <div class="contenu">
                <div id="coin-tl" class="coin"></div>
                <div id="coin-tr" class="coin"></div>
                <div id="coin-br" class="coin"></div>
                <div id="coin-bl" class="coin"></div>
                <h5>Objectif attendu : </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, laudantium.</p>
        
                <h5>Démarche : </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, laudantium.</p>
            
                <h5>Contenu : </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, laudantium.</p>
            
                <h5>Informations supplémentaires : </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, laudantium.</p>
            </div>
        </section>
        <h4>Mes projets : </h4>
        <p style="text-align:center;">J'ai eu l'occasion de travailler sur différents projets de développement en plus de celui du portfolio : </p>
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