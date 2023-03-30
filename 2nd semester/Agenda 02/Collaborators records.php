<?php
$name = $_POST['txtName'] . "<br>";
$surname = $_POST['txtSurname'] . "<br>";
$email = $_POST['txtEmail'] . "<br>";
$degree = $_POST['txtDegree'] . "<br>";
$job = $_POST['txtJob'] . "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Cadastro Realizado!</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <center><h2>Cadastro Confirmado com Sucesso</h2></center><br>
        <?php
        echo "<b>Nome: </b>".$name;
        echo "<b>Sobremome: </b>".$surname;
        echo "<b>E-mail: </b>".$email;
        echo "<b>Formação: </b>".$degree;
        echo "<b>Descrição do Último Emprego: </b>".$job;
        ?>
    </div>
</body>
</html>