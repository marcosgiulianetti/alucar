<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="row">
        <div class="col-sm col-6">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-login.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Cadastro</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off">
                <input type="text" class="form-campo" placeholder="Nome">
                <br>
                <input type="email" class="form-campo" placeholder="Email">
                <br>
                <input type="text" class="form-campo" placeholder="Data de Nascimento">
                <br>
                <input type="text" class="form-campo" placeholder="CPF">
                <br>
                <input type="password" class="form-campo" placeholder="Senha">
                <br>
                <a href="#" class="btn-bg" role="button">Cadastrar</a>
            </form>
        </div>
        <div class="d-none col-6">
            <div class="container-car-img">
                <img src="images/placeholder-car1.png" alt="carro">
            </div>
        </div>
    </div>
</body>

</html>