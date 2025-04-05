<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
        <div class="bg-warning">
            <nav class="navbar">
                <div class="container-fluid navbar-brand">
                    <div class="nav justify-content-center">
                        <a class="navbar-brand" href="Principal.php">EPI</a>
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

                
        <form class="container" method="post" action="index.php">
            <br>
            </div class="mb-3 col">
                <label for="exampleInputPassword1" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nomeCliente" required>
            </div>
            <br>

            <div class="mb-3 col">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailCliente" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            </div class="mb-3 col">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senhaCliente" required>
            </div>
            <br>
            
            </div class="mb-3 col">
                <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="dtnCliente" required>
            </div>
                        
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
                <button type="submit" class="btn btn-dark" name="inserir_cliente">Submit</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>