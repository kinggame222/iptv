<?php require("../script php\script.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>IPTV</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style_css/style.css" />



</head>

<body>
    <!-- la barre de navigation debut-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark container">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">IPTV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CATEGORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="YOUTUBE.php">YOUTUBE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">RANDOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LINKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CREDITS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- la barre de navigation fin-->
    <form action="" method="post">
        <h3>Contact us</h3>
        <label>Enterr un url</label>
        <input type="text" name="url" value="">

        <label>entrer un id de video</label>
        <input type="number" name="Nb_video" value="">

        <label>entrer le nom de la video</label>
        <input type="text" name="nom" value="">

        <input type="submit" name="submit" value="Send message">

    </form>
    <h1>YOUTUBE</h1>
    <from action="" method="post">

        <div class="row" align="center">
            <div class="col-6">
                

            <div align="center">
            <iframe id="vid" width="560" height="315" src="https:www.youtube.com/embed/16y1AkoZkmQ?autoplay=1 " title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <div>
                <!-- boutton effacer vid-->
               
                <input type="button" id="effacer_video" value="effacer la video youtube " onclick="effacer_video()" />
            </div>
        </div>
    <!-- copyright-->
    <footer class="copyright fixed-bottom">
        Copyright © 2022 Antoine et William . Tous droits réservés
    </footer>
</body>

</html>