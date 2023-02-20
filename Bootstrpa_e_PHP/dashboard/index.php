<?php
$pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto', 'root', '99583100');
$sobre = $pdo->prepare("SELECT * FROM td_sobre");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];
?>

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
        <nav class="navbar navbar-expand-md navbar-primary  bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Danki Code</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                    data-toggle="collapse" data-target="navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 " id="menu-principal">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" ref_sys="sobre">Editar sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" ref_sys="cadastrar_equipe">Cadastrar Equipe</a>
                        </li>
                        <li class="nav-item">
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
    <div class="box" style="position: relative; top: 50px">
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

                            <a ref_sys="sobre" class="list-group-item active" style="cursor: pointer;"><i
                                    class="bi bi-pen"></i> Sobre</a>
                            <a ref_sys="cadastrar_equipe" class="list-group-item" style="cursor: pointer;"><i
                                    class="bi bi-pen"></i> Cadastrar Equipe <span
                                    class="badge text-bg-secondary">4</span></a>
                            <a ref_sys="lista_equipe" class="list-group-item " aria-current="true"
                                style="cursor: pointer;"><i class="bi bi-card-list"></i>Lista Equipe </a>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <?php
                        if (isset($_POST['editar_sobre'])) {

                            $sobre = $_POST['sobre'];
                            $pdo->exec("DELETE FROM td_sobre");
                            $sql = $pdo->prepare("INSERT INTO td_sobre VALUES (null, ?)");
                            $sql->execute([$sobre]);
                            $sobre = $pdo->prepare("SELECT * FROM td_sobre");
                            $sobre->execute();
                            $sobre = $sobre->fetch()['sobre'];

                            echo '<div class="alert alert-success" role="alert">O código HTML <b>sobre</b> foi editado com sucesso </div>';

                        } else if (isset($_POST['cadastrar_equipe'])) {
                            $nome = $_POST['nome_membro'];
                            $descricao = $_POST['descricao'];

                            $sql = $pdo->prepare("INSERT INTO td_equipe VALUES (null, ?,?)");

                            $sql->execute([$nome, $descricao]);


                            echo '<div class="alert alert-success" role="alert">O membro da equipe foi cadastrado com sucesso </div>';

                        }
                        ?>
                        <div class="card" id="sobre_section">
                            <div class="card-header bg-primary text-white">
                                Sobre
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="email">Código HTML</label>
                                        <textarea name="sobre" style="height: 140px;"
                                            class="form-control"><?php echo $sobre; ?></textarea>
                                    </div>
                                    <input type="hidden" name="editar_sobre" value="">
                                    <button name="acao" type="submit" class="btn btn-primary  mt-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <br />
                        <div class="card" id="cadastrar_equipe_section">
                            <div class="card-header bg-primary text-white ">
                                Cadstrar Equipe
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="email">Nome do Memebro</label>
                                        <br />
                                        <input type="text" name="nome_membro" class="form-control">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="email">Descrição do Memebro</label>
                                        <textarea name="descricao" style="height: 140px;"
                                            class="form-control"></textarea>
                                    </div>
                                    <input type="hidden" name="cadastrar_equipe">
                                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                </form>
                            </div>
                        </div>

                        <br />
                        <div class="card" id="lista_equipe_section">
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
                                        $selectMembro = $pdo->prepare("SELECT id, nome FROM td_equipe;");
                                        $selectMembro->execute();
                                        $membros = $selectMembro->fetchAll();

                                        foreach ($membros as $key => $value) {
                                            ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $value['id'] ?>
                                                </th>
                                                <td>
                                                    <?php echo $value['nome'] ?>
                                                </td>
                                                <td>
                                                    <button id_membro="<?php echo $value['id']; ?>"
                                                        class="btn btn-danger deletar_membro"><i
                                                            class="bi bi-trash-fill"></i></button>
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
    </div>
    <script src="./js/bootstrap.min.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(function () {

            cliqueMenu();
            scrollItem();
            function cliqueMenu() {
                $('#menu-principal a, .list-group a').click(function () {
                    $('.list-group a').removeClass('active');

                    $('#menu-principal a').parent().removeClass('active')

                    $('#menu-principal a[ref_sys=' + $(this).attr('ref_sys') + ']').parent().addClass('active');


                    $('.list-group a[ref_sys=' + $(this).attr('ref_sys') + ']').addClass('active');

                    return false;
                })

                $('.navbar-collapse a').click(function () {
                    $(".navbar-collapse").collapse('hide');
                });
            }

            function scrollItem() {
                $('#menu-principal a, .list-group a').click(function () {
                    let ref = '#' + $(this).attr('ref_sys') + '_section';

                    let offSet = $(ref).offset().top;

                    $('html,body').animate({ 'scrollTop': offSet - 60 })

                    return false;
                })

            }

            $('button.deletar_membro').click(function () {
                let id_membro = $(this).attr('id_membro');
                let el = $(this).parent().parent();

                $.ajax({
                    method: 'post',
                    data: {'id_membro': id_membro},
                    url: 'deletar.php'
                }).done(function () {
                    el.fadeOut(function () {
                        el.remove();
                    })
                })


                // $(this).parent().parent().fadeOut();
                // $(this).parent().parent().remove();
            })

        })
    </script>
</body>

</html>