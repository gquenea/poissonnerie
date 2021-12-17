<?php require_once "authentification.php" ?>
<?php require_once "tabPoisson.php" ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/materia/bootstrap.min.css">
    <title>Poissonnerie</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Poisson 2000</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hb/poissonnerie/">Nos poissons</a>
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?= $contenuDeLaPage ?>
    <?= $messageErreur ?>
    <form><button type="submit" value="mer" name="type">Eau de mer</button></form>
    <form><button type="submit" value="douce" name="type">Eau douce</button></form>
    <form><button type="submit" value="tous" name="type"> Tous les poissons</button></form>
    
    <div class="container row mx-auto">
        <?php 
        $contenuPage ='';
        foreach ($poissons as $poisson) {
            
                
            
      $cartePoisson = "<div class='card text-white bg-success mb-3 col-3' style='max-width: 20rem; text-align: center;'>
            <div class='card-header'>{$poisson['nom']}</div>
            <div class='card-body'>
                <img src='{$poisson['image']}' alt='' width='200px'>
                <p class='card-text'>{$poisson['description']}</p>
                <p class='card-text'>eau {$poisson['eau']}</p>
                <p class='card-text'>espèce {$poisson['protege']}</p>
                <button type='button' class='btn btn-secondary'>{$poisson['prix']} euros</button>
            </div>
        </div>";
        
        if (
            (!$typeDePoisson || $typeDePoisson == $poisson['eau'])
            &&
            (!$poisson['protege'] || $estConnecte == true)
            ) {
            $contenuPage.=$cartePoisson;
        }
        

        ;} 
        
        echo $contenuPage;

        ?>
        
        </div>
</body>

</html>


