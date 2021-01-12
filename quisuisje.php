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
        <div class="qsjhaut">
            <h4>Qui suis-je ?</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure beatae quasi soluta cum repellat consectetur assumenda obcaecati tempore aperiam?</p>
        </div>
        <!-- Séparateur -->
        <span class="sepqsj"></span>
        <h4>Mes compétences</h4>
        <div class="containercomp">

            <!--Compétence 1  -->
            <div class="comp">
                <img src="images/html5.png" alt="HTML5"> 
                <p>HTML5</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>

            <!--Compétence 2  -->
            
            <div class="comp">
                <img src="images/css3.png" alt="CSS3">
                <p>CSS3</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>


            <!--Compétence 3  -->

            <div class="comp">
                <img src="images/php.png" alt="PHP">
                <p>PHP</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>

            <!--Compétence 4  -->

            <div class="comp">
                <img src="images/sql.png" alt="SQL">
                <p>MySQL</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>

            <!--Compétence 5  -->

            <div class="comp">
                <img src="images/photoshop.png" alt="PHOTOSHOP">
                <p>Photoshop</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>

            <!--Compétence 6  -->

            <div class="comp">
                <img src="images/audacity.png" alt="AUDACITY">
                <p>Audacity</p>
                <span class="sepcomp"><!-- Séparateur--></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo unde facere!</p>
            </div>
        </div>
    </main>
    <footer>
        <?php include('includes/footer.php')?>
    </footer>
</body>
</html>