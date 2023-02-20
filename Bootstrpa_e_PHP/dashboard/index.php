<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de controle</title>
    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/syle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-md navbar-default  bg-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Danki Code</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastrar equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Gerenciar Equipe</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a href="?sair" class="nav-link"><i class="bi bi-box-arrow-left"></i> Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        <i class="bi bi-gear-fill"></i> Painel de controle
                    </h2>
                </div>
                <div class="col-md-6">
                    <p>
                        <i class="bi bi-clock-fill"></i> seu ultimo login foi em 12/06/20023
                    </p>
                </div>
            </div>
        </div>
    </header>

    <script src="./js/bootstrap.min.js"></script>
</body>

</html>