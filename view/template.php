<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/design/design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mon Premier Blog | <?= $title ?> </title>
</head>
<body class='bg-light'>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand ms-3" href="/?page=home">
            <img src="/public//assets/logo.svg" alt="" width="100">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/?page=home">Accueuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/?page=projects">Projet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/?page=newarticle">Se Connecter</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <?= $content ?>


    <footer class='bg-primary text-light d-flex justify-content-between p-3'>
      
        <div>
          <p> <a class='text-light text-decoration-none' href='http://github.com/johanlmnl'>JohanLMNL </a> - Fevrier 2018</p>
        </div>  
        <div>
          <i class="fa-brands fa-github"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-solid fa-envelope"></i>
        </div>
     
    </footer>
</body>
</html>