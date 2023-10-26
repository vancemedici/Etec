<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Dados Pessoais</title>
</head>
<body>
<div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
<h2 class="w3-text-cyan">Dados Pessoais</h2>

<form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
<input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">
<div class="w3-row w3-section">
<div class="w3-col" style="width:11%;">
<i class="w3-xxlarge fa fa-user"></i>
</div>
<div class="w3-rest">
<input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="">
</div>
</div>

<div class="w3-row w3-section">
<div class="w3-col" style="width:11%;">
<i class="w3-xxlarge fa fa-address-card"></i>
</div>
<div class="w3-rest">
<input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF" value="">
</div>
</div>

<div class="w3-row w3-section">
<div class="w3-col" style="width:11%;">
<i class="w3-xxlarge fa fa-calendar"></i>
</div>
<div class="w3-rest">
<input class="w3-input w3-border w3-round-large" name="txtData" type="date" value="">
</div>
</div>

<div class="w3-row w3-section">
<div class="w3-col" style="width:11%;">
<i class="w3-xxlarge fa fa-envelope-o"></i>
</div>
<div class="w3-rest">
<input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="">
</div>
</div>

<div class="w3-row w3-section">
<div class="w3-half" style="">
<button name="btnAtualizar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Atualizar</button>
</div>
</div>
</form>
</body>
</html>
