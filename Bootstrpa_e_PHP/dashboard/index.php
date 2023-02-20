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
        <nav class="navbar navbar-expand-md navbar-primary  bg-primary">
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
                        <i class="bi bi-clock-fill"></i> seu ultimo login foi em <br /> 12/06/20023
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section class="bread">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                </ol>
            </nav>
        </div>
    </section>


    <section class="principal">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><i class="bi bi-house-door-fill"></i>
                            Home </li>
                        <li class="list-group-item"><i class="bi bi-pen"></i> Sobre</li>
                        <li class="list-group-item"><i class="bi bi-pen"></i> Equipe <span
                                class="badge text-bg-secondary">4</span></li>
                    </ul>
                </div>
                <div class="col-md-9">

                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Sobre
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="email">Código HTML</label>
                                    <textarea style="height: 140px;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary  mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-header bg-primary text-white ">
                            Cadstrar Equipe
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="email">Nome do Memebro</label>
                                    <br />
                                    <input type="text" name="membro_nome" class="form-control">
                                </div>
                                <br />
                                <div class="form-group">
                                    <label for="email">Descrição do Memebro</label>
                                    <textarea style="height: 140px;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                        </div>
                    </div>

                    <br />
                    <div class="card">
                        <div class="card-header bg-primary text-white ">
                            Membros da Equipe
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>