<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Principal - vendas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
    <body>
        <div class="bg-warning">
            <nav class="navbar">
                <div class="container-fluid navbar-brand">
                    <div class="nav justify-content-center">
                        EPI
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-dark" type="submit" name="entrarUsuario" data-bs-toggle="modal" data-bs-target="#entrarUsuario"><i class="bi bi-box-arrow-right"></i> Entrar</button>
                    </div>
                </div>
            </nav>
                <div class="row">
                    <button class="text-bg-dark p-2 col-3">Dark with contrasting color</button>
                    <button class="text-bg-warning p-2 col-3">Warning with contrasting color</button>
                    <button class="text-bg-dark p-2 col-3">Dark with contrasting color</button>
                    <button class="text-bg-warning p-2 col-3">Warning with contrasting color</button>
                </div>
        </div>

        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/img-capacete.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php entrarUsuario(); ?>
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
        print '<form action="index.php" method="post">';
        print '    <div class="container text-center">';
        print '        <label class="form-label">Email</label>';
        print '        <input type="email" class="form-control">';    
        print '        <label class="form-label">Senha</label>';
        print '        <input type="password" class="form-control"><br>';
        print '        <p><a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Não possui login?</a></p>';
        print '        <p><a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Esqueceu a senha?</a></p>';
        print '        <div class="d-grid gap-2 col-6 mx-auto">';
        print '            <button type="submit" name="Entrar" class="btn text-bg-dark" data-bs-dismiss="modal">Close</button>';
        print '        </div><br>';
        print '    </div>';
        print '</form>';
        print '    </div>';
        print '  </div>';
        print '</div>';
    }
?>