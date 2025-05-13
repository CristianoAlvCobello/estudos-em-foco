<?php 
    function paginaAtiva($paginaAtiva){
        $pagina = end(explode('/', $_SERVER['REQUEST_URI']));
        if($paginaAtiva == $pagina){
            echo 'active';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos em foco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="p-2 mb-5 bg-primary bg-opacity-50">
        <div class="container">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                    <img src="images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end mt-3 mt-lg-0" id="navbarNavDropdown">
                    <ul class="navbar-nav gap-3 fs-5">
                        <li class="nav-item"><a class="nav-link <?php paginaAtiva('index.php') ?>" href="index.php">Página Inicial</a></li>
                        <li class="nav-item"><a class="nav-link <?php paginaAtiva('fundamental.php') ?>" href="fundamental.php">Fundamental</a></li>
                        <li class="nav-item"><a class="nav-link <?php paginaAtiva('medio.php') ?>" href="medio.php">Médio</a></li>
                        <li class="nav-item"><a class="nav-link <?php paginaAtiva('vestibular.php') ?>" href="vestibular.php">Vestibular</a></li>
                        <li class="nav-item"><a class="nav-link <?php paginaAtiva('quemsomos.php') ?>" href="quemsomos.php">Quem Somos?</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>