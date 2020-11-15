<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>
    <div class="row">
        <div class="col-sm col-6">
            <? require("widgets/alucar-logo.php"); ?>
            <div style="height: 2rem;"></div>
            <form autocomplete="off">
                <input type="email" class="form-campo" placeholder="Email">
                <div style="height: 1rem;"></div>
                <input type="password" class="form-campo" placeholder="Password">
                <div style="height: 2rem;"></div>
                <a href="page-aluguel.php" class="btn-bg" role="button">Entrar</a>
                <div style="height: 2rem;"></div>
                <a href="page-cadastro.php" class="btn-sm" role="button">Criar uma Conta</a>
                <div style="height: 1.5rem;"></div>
                <a href="page-recuperar.php" class="btn-sm" role="button">Recuperar Conta</a>
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