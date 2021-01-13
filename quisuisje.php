<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/main.css">
    <link rel="shortcut icon" type="image/png" href="images/ratonlogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <title>Qui suis-je ?</title>
</head>
<body>
    <header>
		<?php include('includes/header.php')?>
    <style type="text/css">
          #a1 
          {color: var(--orange);}
        </style>
    </header>
    <main>
        <section class="qsjhaut">
            <h4>Qui suis-je ?</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure beatae quasi soluta cum repellat consectetur assumenda obcaecati tempore aperiam?</p>
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
                <progress max="100" value="60"> 60% </progress>
            </article>

            <!--Compétence 2  -->
            
            <article class="comp">
                <img src="images/css3.png" alt="CSS3">
                <p>CSS3</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <progress max="100" value="60"> 60% </progress>
            </article>


            <!--Compétence 3  -->

            <article class="comp">
                <img src="images/php.png" alt="PHP">
                <p>PHP</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <progress max="100" value="50"> 50% </progress>
            </article>

            <!--Compétence 4  -->

            <article class="comp">
                <img src="images/sql.png" alt="SQL">
                <p>MySQL</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <progress max="100" value="70"> 70% </progress>
            </article>

            <!--Compétence 5  -->

            <article class="comp">
                <img src="images/photoshop.png" alt="PHOTOSHOP">
                <p>Photoshop</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <progress max="100" value="30"> 30% </progress>
            </article>

            <!--Compétence 6  -->

            <article class="comp">
                <img src="images/audacity.png" alt="AUDACITY">
                <p>Audacity</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <progress max="100" value="60"> 60% </progress>
            </article>
        </section>
        <section>
            <h4>Mes formations</h4>

        </section>
    </main>
    <footer>
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>