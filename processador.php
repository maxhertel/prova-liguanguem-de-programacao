<?php
//?
include_once './pessoa.php';

//?
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$cor = $_POST['cor'];

//?
$p = new Pessoa($nome, $idade, $altura, $cor);
$p->salvar();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXIBIR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" >
                    <div class="card-header">
                        Dados da pessoas
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>nome</th>
                                <th scope='col'>idade</th>
                                <th scope='col'>altura</th>
                                <th scope='col'>cor</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 

                          //?
                          Pessoa::gerarLinhasTabela();
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>