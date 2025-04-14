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
                <h3>Consultar fornecedor</h3><br>
                <input type="text" class=" col-8" id="exampleInputName1" name="fornecedor" placeholder="Busque por nome...">
                <button class="btn btn-info col-sm-2" type="submit" name="consultar_fornecedor"><i class="bi bi-search"></i> Consultar</button>
        </form>
        <button class="btn btn-success col-sm-2" type="button" name="novo_fornecedor" data-bs-toggle="modal" data-bs-target="#novoFornecedor"><i class="bi bi-plus-lg"></i> Novo</button>
        </div>
    </div>
        
    <table class="table container">
      <thead>
        <tr>
          <th scope="col">Fornecedor</th>
          <th scope="col">CNPJ</th>
          <th scope="col">Email</th>
          <th scope="col">contato</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($resultado as $key=>$valor){
                print'<tr>';
                print'  <th>'.$valor->nome_fornecedor.'</th>';
                print'  <th>'.$valor->cnpj.'</th>';
                print'  <th>'.$valor->email.'</th>';
                print'  <th>'.$valor->contato.'</th>';
                print ' <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterar_fornecedor' . $valor->id_fornecedor . '"><i class="bi bi-pencil-square"></i> Alterar</button>
                        <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#excluir_fornecedor' . $valor->id_fornecedor . '"><i class="bi bi-x-square-fill"></i> Excluir</button>
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
<?php $this->inserir_fornecedor_modal()?>
<?php
        //criar os Modal de excluir
        foreach ($resultado as $key => $valor) {
            $this->deletar_fornecedor_modal($valor->id_fornecedor, $valor->nome_fornecedor);
            $this->alterar_fornecedor_modal($valor->id_fornecedor, $valor->nome_fornecedor);
        }
    ?>