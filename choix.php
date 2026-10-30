<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
</head>

<body class="bg-prairie">
    <?php
    session_start();
        $shifumi = array("./assets/pierre.png", "./assets/feuille.png", "./assets/ciseaux.png");
        $aléatoire = array_rand($shifumi);
        $imagesrand = $shifumi[$aléatoire];
    ?>
    <section class="text-center">

        <h1 class="henny text-color">Shifumi</h1>
        <article class= "text-center"> 

            <img class= <?php echo $_GET["choix"]; ?> src="./assets/<?php echo $_GET['choix']; ?>.png" alt="">
            <img class= random src="<?php echo $imagesrand; ?>" alt="">
            <a href="index.php" class="bouton-retour"> <img class ="chalet" src="assets/Chalet en bois réaliste isolé.png" alt="">
               </a>
        </article>

    </section>

</body>


</html>