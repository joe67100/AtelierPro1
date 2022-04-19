<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include du head afin d'éviter de réécrire le code -->
    <?php include('includes/head.php')?>
    <title>Le BTS SIO</title>
</head>
<body>
    <header>
        <!-- Include du header afin d'éviter de réécrire le code -->
        <?php include('includes/header.php')?>
        <style type="text/css">
          #a3
          {color: var(--orange); text-decoration:underline;}
        </style>
    </header>
    <main>
        <section>
            <article class="btssiodef">
                <h4>BTS SIO :</h4>
                <p style="text-align:center;"><u>Définition du BTS SIO :</u><br><br>Le BTS Services informatique aux Organisations est un diplôme reconnu par l’état de niveau Bac+2.<br>Le BTS propose deux spécialités bien distinctes : le BTS SIO SISR et le BTS SIO SLAM. <br>Il associe aux enseignements théoriques et professionnels (en contrôle continu et final). <br>En plus des matières en lien avec l’ingénierie informatique, la formation propose également des enseignements de culture générale, d’anglais, de mathématiques appliquées à l’informatique, ainsi que sur les outils d’analyse économique, managériale et juridique des services informatiques.</p>
                <cite>Source : <a href="https://diplomeo.com/trouver-bts-sio" target="_blank" style="color:var(--orange);">Diplomeo</a></cite>
            </article>
        </section>

        <!-- Séparateur :-->

        <span class="sepqsj"></span>

        <h4>Le BTS en détail : </h4>

        <section class="sisrslam">
            <article class="contentsisrslam">
                <fieldset>
                    <legend><i class="fas fa-code"> SLAM</i></legend>
                    <p>L'élève participera à la conception, au développement, ainsi qu'au déploiement et à la maintenance des composants logiciels d'une solution applicative. Il acquiert ainsi des compétences en conception et développement d'une solution applicative, en maintenance de celle-ci, mais aussi en bases de données et en gestion des données numériques.</p>
                    <cite>Source : <a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers" target="_blank" style="color:var(--orange);">Onisep</a></cite>
            </article>
            <article class="contentsisrslam">
                <fieldset>
                    <legend><i class="fas fa-server"> SISR</i></legend>
                    <p>L'élève participera à l'administration des systèmes et du réseau, il sera capable de modifier ou d'adapter les solutions d'infrastructure ainsi que la qualité de service des équipements du réseaux. Il acquiert ainsi les compétences pour concevoir une solution d'infrastructure réseau, l'installer, la tester et la déployer. L'élève apprend à administrer et superviser celui-ci.</p>
                    <cite>Source : <a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/bts-services-informatiques-aux-organisations-option-a-solutions-d-infrastructure-systemes-et-reseaux" target="_blank" style="color:var(--orange);">Onisep</a></cite>
            </article>
        </section>

        <section class="pqbts">
            <article class="cercle cer1">
                <img src="images/interrogation1" alt="Pourquoi?">
            </article>
            <article class="cercle cer2">
                <img src="images/interrogation2" alt="Pourquoi?">
            </article>
            <article>
                <h4>Pourquoi le choix de cette formation ?</h4>
                <p>Étant intéressé par l'informatique depuis quelques années, j'ai choisi cette formation car je souhaitais élaborer un projet professionnel en m'orientant vers des métiers en lien avec ce domaine. Le choix de l'alternance résulte de l'envie d'acquérir à la fois des compétences théoriques en cours et pouvoir les mettre en pratique en entreprise. La possibilité d'avoir une première expérience professionnelle dans l'informatique et ainsi renforcer son employabilité sont des éléments qui m'ont fait choisir cette méthode de formation plutôt qu'une formation plus classique en initiale.</p>
            </article>
        </section>

         <!-- Séparateur :-->

        <span class="sepqsj"></span>

        <h4>Mes projets réalisés en formation : </h4>
        <p style="text-align:center;">J'ai eu l'occasion de travailler sur différents projets & sujets tout le long de ma formation. Jetez-y un œil  ! </p>
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
        </section>
    </main>
    <footer>
        <!-- Include du footer afin d'éviter de réécrire le code -->
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>