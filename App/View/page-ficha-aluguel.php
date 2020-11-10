<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container-cabecalho">
        <div class="row">
            <div class="col-6">
                <div class="container-btn-voltar">
                    <a href="page-menu.php">
                        <i class="material-icons btn">arrow_back</i>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="container-titulo" style="text-align: end;">
                    <h1>Ficha Aluguel</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Cliente</label>
        </div>
        <div class="col-9">
            <label>"nome"</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Veículo</label>
        </div>
        <div class="col-9">
            <label>"veiculo"</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Placa</label>
        </div>
        <div class="col-9">
            <label>"numero"</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Saída</label>
        </div>
        <div class="col-9">
            <label>"hora"</label>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Retorno</label>
        </div>
        <div class="col-9">
            <label>"data"</label>
        </div>
    </div>
    <form class="signin-form">
        <a href="page-editar-aluguel.php" class="btn btn-grande" role="button">Editar</a>
        <a href="page-registrar-ocorrencia.php" class="btn btn-grande" role="button">Registrar Ocorrência</a>
        <a href="#" class="btn btn-grande" role="button">Excluir</a>
    </form>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>