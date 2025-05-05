<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Principal - vendas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand align-items-center" href="Principal.php">EPI's do Abelardo</a>
            <div class="d-flex" role="search">
                <button class="btn btn-dark" type="submit" name="entrarUsuario" data-bs-toggle="modal" data-bs-target="#entrarUsuario"><i class="bi bi-box-arrow-right"></i> Entrar</button>
            </div>
        </div>
    </nav>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 container text-center">
                        <li class="nav-item dropdown col">
                            <a class="nav-link dropdown-toggle text-bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Construção Civil & Elétrica</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Capacetes</a></li>
                                <li><a class="dropdown-item" href="#">Botas de Proteção</a></li>
                                <li><a class="dropdown-item" href="#">Luvas P/ Construção</a></li>
                                <li><a class="dropdown-item" href="#">Óculos de proteção</a></li>                                
                                <li><a class="dropdown-item" href="#">Macacão & Colete P/ Construção</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown col">
                            <a class="nav-link dropdown-toggle text-bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cozinha</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Touca de Cozinha</a></li>
                                <li><a class="dropdown-item" href="#">Avental EPI</a></li>
                                <li><a class="dropdown-item" href="#">Galochas</a></li>
                                <li><a class="dropdown-item" href="#">Luvas P/ Cozinha</a></li>
                                <li><a class="dropdown-item" href="#">Protetores Auriculares</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown col">
                            <a class="nav-link dropdown-toggle text-bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Prot. Contra Fogo</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Macacão Contra Incêndio</a></li>
                                <li><a class="dropdown-item" href="#">Capacete contra Incêndio</a></li>
                                <li><a class="dropdown-item" href="#">Bota contra Incêndio</a></li>
                                <li><a class="dropdown-item" href="#">Magueiras contra Incêndio</a></li>
                                <li><a class="dropdown-item" href="#">Extintor de Incêndio</a></li>
                            </ul>
                        </li><li class="nav-item dropdown col">
                            <a class="nav-link dropdown-toggle text-bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Prot. Contra Quimicos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Máscaras</a></li>
                                <li><a class="dropdown-item" href="#">Luvas Anti quimicos</a></li>
                                <li><a class="dropdown-item" href="#">Macacões Anti quimicos</a></li>
                                <li><a class="dropdown-item" href="#">Botas Anti quimicos</a></li>
                                <li><a class="dropdown-item" href="#">òculos Anti quimicos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/jovem-engenheiro-trabalhando-na-fabrica.jpg" class="d-block w-100" style="width: 400px; height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/pessoas-em-equipamentos-de-seguranca-no-trabalho.jpg" class="d-block w-100" style="width: 400px; height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/retrato-de-mulher-trabalhando-em-uma-oficina-mecanica.jpg" class="d-block w-100" style="width: 400px; height: 400px;" alt="...">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>

    <main>
        <div class="container text-center">
            <h4 class="justify-content-start">Novidades</h4>
        </div>
        <div class="container-sm px-4 row text-center">
            <div class="p-3 col gx-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/img-capacete.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$ 34,99</h5>
                        <p class="card-text">Capacete Amarelo Para Construção Civil.</p>
                        <a href="#" class="btn stretched-link">Comprar Agora</a>
                    </div>
                </div>
            </div>
            <div class="p-3 col gx-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/img-capacete.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$ 34,99</h5>
                        <p class="card-text">Capacete Amarelo Para Construção Civil.</p>
                        <a href="#" class="btn stretched-link">Comprar Agora</a>
                    </div>
                </div>
            </div>
            <div class="p-3 col gx-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/img-capacete.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$ 34,99</h5>
                        <p class="card-text">Capacete Amarelo Para Construção Civil.</p>
                        <a href="#" class="btn stretched-link">Comprar Agora</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php entrarUsuario(); ?>
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>



<?php
    function entrarUsuario(){    
        print '<div class="modal fade" id="entrarUsuario" tabindex="-1" aria-labelledby="entrarUsuario" aria-hidden="true">';
        print '  <div class="modal-dialog">';
        print '    <div class="modal-content">';
        print '      <div class="modal-header">';
        print '        <h1 class="modal-title fs-5" id="entrarUsuario">Login</h1>';
        print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        print '      </div>';
        print '      <div class="modal-body">';
        print '      </div>';
        print '<form  method="post" action="index.php">';
        print '    <div class="container text-center">';
        print '        <label class="form-label">Email</label>';
        print '        <input type="email" class="form-control" name="Email" required>';    
        print '        <label class="form-label">Senha</label>';
        print '        <input type="password" class="form-control" name="Senha" required><br>';
        print '        <p><a href="cadastrarCliente.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Não possui login?</a></p>';
        print '        <p><a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Esqueceu a senha?</a></p>';
        print '        <div class="d-grid gap-2 col-6 mx-auto">';
        print '            <button type="submit" name="Entrar" class="btn text-bg-dark"><i class="bi bi-box-arrow-right"></i> Acessar</button>';
        print '        </div><br>';
        print '    </div>';
        print '</form>';
        print '    </div>';
        print '  </div>';
        print '</div>';
    }
?>