<!DOCTYPE html>
<html lang="fr">

<head>
    <title>IPTV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style_css/style.css">
    <script src="../script_js/script_video_yt.js"></script>
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

                    <?php echo "yo antoine" ?>

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
    <div class="container" id="fond">
        <h1>IPTV</h1>
    </div>
    <!-- copyright-->
    <footer class="copyright fixed-bottom container">Copyright © 2022 Antoine et William . Tous droits réservés</footer>
</body>

</html>