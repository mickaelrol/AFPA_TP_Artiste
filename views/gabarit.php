<!doctype html>
<html lang="fr">
    <head>
        <title><?= $this->title ?></title>
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Style.css -->
        <link rel="stylesheet" href="Public/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div>
                    <a href="?action=index">Accueil</a>
                    <a href="?action=oeuvres">Oeuvres</a>
                    <a href="?action=expositions">Expositions</a>
                </div>
            </nav>
        </header>
        <main>
            <?= $content ?>
        </main>
        <footer>
            <small>&copy; Copyright 2020, Mickaël Rolgen</small>
        </footer>    
            <!-- Script.js -->
    <script src="public/js/script.js"></script>
  </body>
</html>