<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/design/design.css">
    <title>Mon Premier Blog | <?= $title ?> </title>
</head>
<body class='bg-light'>
    <header class='bg-dark'>

        <div>
            <h1 class='text-primary text-center'> Bienvenu sur mon blog</h1>
            <p class='text-light text-center'> codé en php avec bootstrap</p>
        </div>

        <nav class='navbar-dark navbar-expand'>
            <div class='collapse navbar-collapse'>
                <ul class='navbar-nav mx-auto'>
                    <li class='nav-item'><a href='/?page=home' class='nav-link'>Accueil       </a></li>
                    <li class='nav-item'><a href='/?page=projects' class='nav-link'>Projets       </a></li>
                    <li class='nav-item'><a href='/?page=newarticle' class='nav-link'>Se connecter  </a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <?= $content ?>


    <footer class='bg-dark text-light text-center'>
        <p> <a class='text-light text-decoration-none' href='http://github.com/johanlmnl'>JohanLMNL </a> - Fevrier 2018</p>
    </footer>
</body>
</html>