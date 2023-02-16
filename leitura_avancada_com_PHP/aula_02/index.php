<?php
echo "Lendo e escrevendo JSON 🔥";
echo '<br /> <br />';

// $json = '{"a":1, "b":2, "c":3, "d":4, "e":5}';

// // var_dump(json_decode($json, true));

// $obj = json_decode($json);
// $orr = json_decode($json, true);

// echo $obj->a;

// $arr = ['nome' => 'Waliston', 'cidade' => 'Santa Maria'];
// $jons = json_encode($arr);
// echo $jons;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script src=" https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(() => {
            $.ajax({
                url: "./reques.php",
                dataType: 'json'
            }).done((data) => {
                console.log(data.nome);
            })
        })
    </script>
</body>

</html>