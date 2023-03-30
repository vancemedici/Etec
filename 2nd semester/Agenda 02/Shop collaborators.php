<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Lojas Brincos e Companhia - Colaboradores</title>
</head>

<body>
    <div class="w3-container w3-teal">
        <center><h2>Cadastro</h2></center>
    </div>
    <form class="w3-container" action="Collaborators records.php" method="post">
        <br><label class="w3-text-teal"><b>Nome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtName" type="text">

        <label class="w3-text-teal"><b>Sobrenome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtSurname" type="text">

        <label class="w3-text-teal"><b>E-mail</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtEmail" type="text">

        <label class="w3-text-teal"><b>Formação</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtDegree" type="text">

        <label class="w3-text-teal"><b>Descrição do Último Emprego</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtJob" type="text">

        <br>

        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>

</html>