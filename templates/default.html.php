<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>&copy; G-LUXURY</title>
</head>

<body>
    <header>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-uppercase" href="/?controller=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/?controller=home&action=show">Véhicules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/?controller=home&action=rating">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase hidden" href="/?controller=admin">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <main>
        <div class="container">
        <?= $content ?>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>