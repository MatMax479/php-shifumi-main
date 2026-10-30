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

<body class="text-center bg-chalet">
    <?php
    if  (isset($_GET["choix"])) {
        echo $_GET["choix"];
    }

    ?>


    <section>

        <h1 class="henny text-color">Shifumi</h1>
        <article>
           <a href="choix.php?choix=pierre"> <img class ="pierre" src="assets/pierre.png" alt=""></a>
           <a href="choix.php?choix=feuille"> <img class ="feuille" src="assets/feuille.png" alt=""></a>
           <a href="choix.php?choix=ciseaux"> <img class ="ciseaux" src="assets/ciseaux.png" alt=""></a>
            
       </article>

     </section>

</body>


</html>