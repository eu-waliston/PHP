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
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 " id="menu-principal">
                        <li  class="nav-item active" >
                            <a class="nav-link" href="#" ref_sys="sobre">Editar sobre</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="#" ref_sys="cadastrar_equipe">Cadastrar Equipe</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="#" ref_sys="lista_equipe">Lista Equipe</a>
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

                        <li ref_sys="sobre" class="list-group-item active" style="cursor: pointer;"><i class="bi bi-pen"></i> Sobre</li>
                        <li ref_sys="cadastrar_equipe" class="list-group-item" style="cursor: pointer;"><i class="bi bi-pen"></i> Cadastrar Equipe <span
                                class="badge text-bg-secondary">4</span></li>
                        <li ref_sys="lista_equipe" class="list-group-item " aria-current="true" style="cursor: pointer;"><i class="bi bi-card-list"></i></i>
                            Lista Equipe </li>
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
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID:</th>
                                        <th scope="col">Memebro da Equipe</th>
                                        <th scope="col">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Waliston</td>
                                            <td>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/bootstrap.min.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(function () {
            cliqueMenu();
            function cliqueMenu() {
                $('#menu-principal a, .list-group li').click(function () {
                    $('.list-group li').removeClass('active');

                    $('#menu-principal a').parent().removeClass('active')

                    $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');


                    $('.list-group li[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');

                    return false;
                })
            }

        })
    </script>
</body>

</html>