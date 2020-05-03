<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homeAnimal">Animaux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homeProduit">Produits</a>
                </li>
                <?php if (!isset($_SESSION["user"])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=signup">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Connexion</a>
                </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=homeCommande">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=logout">Déconnexion</a>
                    </li>
                    <?php if ($_SESSION["user"]->role=='admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=newAnimal">Ajouter Animaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=newProduit">Ajouter Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=reservationAnimal">Réservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=adminCommande">Commandes</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>

                </ul>
            </div>
        </nav>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>

    </footer>

</body>
</html>