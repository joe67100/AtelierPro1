<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php')?>
    <title>Qui suis-je ?</title>
</head>
<body>
    <header>
		<?php include('includes/header.php')?>
    <style type="text/css">
          #a1 
          {color: var(--orange); text-decoration:underline;}
        </style>
    </header>
    <main>
        <section class="qsjhaut">
            <h4>Qui suis-je ?</h4>
            <p>Je m'appelle Joé, j'ai 20 ans et je suis actuellement étudiant en première année au sein du BTS SIO du CCI CFA de Strasbourg, option SISR. Interéssé par l'informatique depuis plusieurs années, j'ai décidé de me tourner vers une formation dans ce domaine afin d'acquérir de nouvelles compétences.</p>
        </section>

        <!-- Séparateur -->
        <span class="sepqsj"></span>

        <h4>Mes compétences</h4>
        <section class="containercomp">

            <!--Compétence 1  -->
            <article class="comp">
                <img src="images/html5.png" alt="HTML5"> 
                <p>HTML5</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="htmlcsssql"></span></span>
                <p>Langage de balisage essentiel au développement web, j'ai pu acquérir les bases de celui-ci à travers des formations et notamment grâce à l'élaboration de ce portfolio.</p>
            </article>

            <!--Compétence 2  -->
            
            <article class="comp">
                <img src="images/css3.png" alt="CSS3">
                <p>CSS3</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="htmlcsssql"></span></span>
                <p>Permettant d'ajouter du style à une page web, j'ai pu acquérir les bases en CSS de la même manière que l'HTML.</p>
            </article>


            <!--Compétence 3  -->

            <article class="comp">
                <img src="images/php.png" alt="PHP">
                <p>PHP</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="php"></span></span>
                <p>Langage de programmation par excellence, j'ai eu l'occasion d'apprendre les bases à travers différents projets professionels.</p>
            </article>

            <!--Compétence 4  -->

            <article class="comp">
                <img src="images/sql.png" alt="SQL">
                <p>MySQL</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="htmlcsssql"></span></span>
                <p>Système de gestion de base de données avec lequel j'ai eu l'occasion de travailler de concert avec PHP.</p>
            </article>

            <!--Compétence 5  -->

            <article class="comp">
                <img src="images/photoshop.png" alt="PHOTOSHOP">
                <p>PHOTOSHOP</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="photoshop"></span></span>
                <p>Je possède les bases dans ce logiciel permettant d'effectuer des montages photos.</p>
            </article>

            <!--Compétence 6  -->

            <article class="comp">
                <img src="images/audacity.png" alt="AUDACITY">
                <p>AUDACITY</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <span class="compprogress"><span class="audacity"></span></span>
                <p>Logiciel d'enregistrement audio, j'ai, par le passé utilisé ce dernier afin de réaliser des montages audios.</p>
            </article>
        </section>
        <section class="formations">
            <h4>Mes formations</h4>

            <!-- Formation 1 -->
            <section class="subformations">
                <article class="formation">
                    <p class="date">2020 - aujourd'hui</p>
                    <p>CFA CCI Alsace, CCI Campus Strasbourg</p>
                    <p class="diplome">BTS SIO / Solutions d'infrastructures, systèmes et réseaux (SISR)</p>
                </article>
                <img src="images/computer.jpg" alt="SIO" class="formation">
                <span class="sepform"><!-- Séparateur--></span>

                <!-- Formation 2 -->
                <img src="images/droit.jpg" alt="DROIT" class="formation2">
                <article class="formation2">
                    <p class="date">2018 - 2019</p>
                    <p>Faculté de droit, Université de Strasbourg</p>
                    <p class="diplome">Licence Administration Économique et Sociale (AES)</p>
                </article>
                <span class="sepform"><!-- Séparateur--></span>

                <!-- Formation 3 -->
                <article class="formation">
                    <p class="date">2017 - 2018</p>
                    <p>Lycée général et technologique docteur Koeberlé, Sélestat</p>
                    <p class="diplome">Baccalauréat économique et social, spécialité sciences politiques et sociales<br>(Mention assez bien)</p>
                </article>
                <img src="images/school.jpg" alt="LYCEE" class="formation">
            </section>
        </section>

            <!-- Séparateur -->
            <span class="sepqsj"></span>

            <h4>Mes qualités</h4>
            <section class="containerqualites">
                <article class="qualites">
                    <p>DYNAMIQUE</p>
                    <i class="fas fa-fighter-jet" style="font-size: 50px; color:var(--orange); margin-top:20px; transform: rotate(325deg);"></i>
                </article>
                <article class="qualites">
                    <p>CURIEUX</p>
                    <i class="fas fa-atom fa-spin" style="font-size: 50px; color:var(--orange); margin-top:20px"></i>
                </article>
                <article class="qualites">
                    <p>RIGOUREUX</p>
                    <i class="fas fa-pen-fancy" style="font-size: 50px; color:var(--orange); margin-top:20px"></i>
                </article>
            </section>
            <section class="cv">
                <a href="files/cv2021.pdf" class="btncv" target="_blank"><i class="far fa-eye">  Mon curriculum vitæ</i></a>
            </section>
    </main>
    <footer>
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>