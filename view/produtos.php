<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php print $menu?>
<br>
    <div class="container">
        <form action="index.php" method="post">
            <div class="mb-3 row">
                <h3>Consultar Produtos</h3><br>
                <input type="text" class=" col-8" id="exampleInputName1" placeholder="Busque por nome...">
                <button class="btn btn-info col-sm-2"><i class="bi bi-search"></i> Consultar</button>
                <button class="btn btn-success col-sm-2" type="button" name="novoproduto" data-bs-toggle="modal" data-bs-target="#novoproduto"><i class="bi bi-plus-lg"></i> Novo</button>
            </div>
        </form>
    </div>
    <table class="table container">
      <thead>
        <tr>
          <th scope="col">N° lote</th>
          <th scope="col">Produto</th>
          <th scope="col">Qtd. estoque</th>
          <th scope="col">Valor uni.</th>
          <th scope="col">Valor total</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
            print'<tr>';
            print'  <th scope="row">3</th>';
            print'  <td>John</td>';
            print'  <td>Doe</td>';
            print'  <td>@social</td>';
            print'</tr>';
        ?>
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->inserir_distribuidora_modal()?>