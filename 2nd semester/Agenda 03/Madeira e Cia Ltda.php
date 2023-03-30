<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Madeira e Cia Ltda.</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <center><h2>Forma de Pagamento</h2></center>
    </div>
    <form class="w3-container" action="Just Web Ltda.php" method="post">
        <br><label class="w3-text-teal"><b>Nome do Cliente</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtName" type="text">
        <label class="w3-text-teal"><b>Valor da Compra</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtValue" type="text">
        <label class="w3-text-teal"><b>Escolha a forma de pagamento:</b></label>
        <select class="w3-input w3-border w3-light-grey" name="cmbPage" type="text">
            <option value="cartaoCredito">Cartão de Crédito</option>
            <option value="boleto">Boleto</option>
            <option value="deposito">Depósito</option>
        </select>
        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>
</html>