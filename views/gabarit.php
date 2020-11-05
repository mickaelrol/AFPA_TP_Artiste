<!doctype html>
<html lang="fr">
    <head>
        <title><?= $this->title ?></title>
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!-- Style.css -->
        <link rel="stylesheet" href="Public/css/style.css">
    </head>
    <body class="container">
        <header class="row">
            <nav class="navbar navbar-expand-md navbar-light rounded col-12">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample10" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?action=index">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Oeuvres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=expositions">Expositions</a>
                        </li> 
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <?= $content ?>
        </main>
        <footer>
            <small>&copy; Copyright 2020, Mickaël Rolgen</small>
        </footer> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Script.js -->
    <script src="public/js/script.js"></script>
  </body>
</html>