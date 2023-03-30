<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Desconto</title>
</head>

<body>
    <div class="w3-container w3-teal">
        <h3>
            <?php
            $name = $_POST['txtName'];
            $value = $_POST['txtValue'];
            $options = $_POST['cmbPage'];
            $newvalue;
            echo "<b><center>PROMOÇÃO DE MÊS DE ANIVERSÁRIO</center></b><br>";
            echo $name . "! <br>";
            echo "Valor da compra: R$ " . $value . "<br>";
            if ($options == 'deposito') {
                echo "Forma de pagamento escolhida: Depósito <br>";
                echo "Desconto de 10% <br>";
                $newvalue = $value * (1 - 0.1);
                echo "Você economizou R$ " . $value - $newvalue . "<br>";
                echo "Valor total: R$ " . $newvalue;
            } elseif ($options == 'boleto') {
                echo "Forma de pagamento escolhida: Boleto <br>";
                echo "Desconto de 8% <br>";
                $newvalue = $value * (1 - 0.08);
                echo "Você economizou R$ " . $value - $newvalue . "<br>";
                echo "Valor à pagar: R$ " . $newvalue;
            } else {
                echo "Forma de pagamento escolhida: Cartão de Crédito <br>";
            }
            ?>
        </h3>
    </div>
</body>

</html>