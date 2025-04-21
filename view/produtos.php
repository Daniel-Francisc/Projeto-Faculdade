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
                <input type="text" name="produto" class=" col-8" id="exampleInputName1" placeholder="Busque por nome...">
                <button class="btn btn-info col-sm-2" name="consultar_produto"><i class="bi bi-search"></i> Consultar</button>
                <button class="btn btn-success col-sm-2" type="button" name="novoproduto" data-bs-toggle="modal" data-bs-target="#novoproduto"><i class="bi bi-plus-lg"></i> Novo</button>
            </div>
        </form>
    </div>
    <table class="table container">
      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Nº Lote</th>
          <th scope="col">Qtd. Em estoque</th>
          <th scope="col">Valor Un.</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($resultado as $key=>$valor){
                print'<tr>';
                print'  <th>'.$valor->nome_produto.'</th>';
                print'  <th>'.$valor->n_lote.'</th>';
                print'  <th>'.$valor->qtd_produto.'</th>';
                print'  <th> R$'.$valor->valor_uni.'</th>';
                print ' <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterar_produto' . $valor->id_produto . '"><i class="bi bi-pencil-square"></i> Alterar</button>
                        <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#excluir_produto' . $valor->id_produto . '"><i class="bi bi-x-square-fill"></i> Excluir</button>
                        </td>';
                print'</th>';
        }
        ?>
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->inserir_produto_modal()?>
<?php
        //criar os Modal de excluir
        foreach ($resultado as $key => $valor) {
            $this->deletar_produto_modal($valor->id_produto, $valor->nome_produto);
            $this->alterar_produto_modal($valor->id_produto, $valor->nome_produto);
        }
    ?>