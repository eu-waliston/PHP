<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <?php
    // if (isset($_GET['acao'])) {
    //     $nome = $_GET['name'];
    //     $email = $_GET['email'];

    //     echo $nome;
    //     echo "<br />";
    //     echo $email;
    // }

    // if (isset($_POST['acao'])) {
    //     $nome = $_POST['name'];
    //     $email = $_POST['email'];

    //     echo $nome;
    //     echo "<br />";
    //     echo $email;
    // }

    if (isset($_POST['acao'])) {
        foreach ($_POST['valor'] as $key => $value) {
            echo $value;
        }
    }
    ?>
    <form method="post">
        <!-- <label for="">Nome: </label>
        <input type="text" name="name"> -->
        <!-- <br />
        <br />
        <label for="">Email: </label>
        <input type="text" name="email"> -->
        <!-- <br /> -->
        <input type="checkbox" name="valor[]" value="10">10
        <br />
        <input type="checkbox" name="valor[]" value="20">20
        <br />
        <input type="checkbox" name="valor[]" value="30">30
        <br />
        <input type="checkbox" name="valor[]" value="40">40
        <br />
        <input type="checkbox" name="valor[]" value="50">50
        <br />
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>

</html>