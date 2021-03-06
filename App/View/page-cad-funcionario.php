<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Funcionário</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-funcionario.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Cadastrar Funcionário</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <form autocomplete="off">
                    <input type="text" class="form-campo" placeholder="Nome">
                    <input type="email" class="form-campo" placeholder="E-mail">
                </form>
                <div class="row">
                    <div class="col-sm col-6 align-right">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="CPF">
                            <input type="text" class="form-campo" placeholder="Data de Nascimento">
                            <input type="text" class="form-campo" placeholder="Logradouro">
                        </form>
                    </div>
                    <div class="col-sm col-6 align-left">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="Bairro">
                            <input type="text" class="form-campo" placeholder="Número">
                            <input type="text" class="form-campo" placeholder="Complemento">
                        </form>
                    </div>
                </div>
                <form>
                    <a href="page-clientes.php" class="btn-bg" role="button">Confirmar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>