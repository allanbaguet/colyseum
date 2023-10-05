<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title><?= $title ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/controllers/home_controller.php">Projet Colyseum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 1) ? 'active' : '' ?>" href="/controllers/exercice_1_controller.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 2) ? 'active' : '' ?>" href="/controllers/exercice_2_controller.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 3) ? 'active' : '' ?>" href="/controllers/exercice_3_controller.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 4) ? 'active' : '' ?>" href="/controllers/exercice_4_controller.php">Exercice 4</a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 5) ? 'active' : '' ?>" href="/controllers/exercice_5_controller.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 6) ? 'active' : '' ?>" href="/controllers/exercice_6_controller.php">Exercice 6</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($exercice == 7) ? 'active' : '' ?>" href="/controllers/exercice_7_controller.php">Exercice 7</a>
                    </li>         
                </ul>
            </div>
        </div>
    </nav>