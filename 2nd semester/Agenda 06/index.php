<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Grades on English</title>
</head>

<body style="background-color: #2196F3">
    <div class="w3-container w3-center w3-indigo">
        <h1 class="w3-xlarge w3-margin-top"><b>Alunos Concluintes</b></h1>
    </div>
    <div class="w3-display-topmiddle w3-margin-top w3-half w3-center w3-animate-top w3-padding">
        <?php
        include_once('MySQLi.php');

        $sql = "SELECT * FROM graduate";
        $result = $connection->query($sql);

        echo "<table class=\"w3-table-all w3-hoverable w3-text-black\">
    <tr class=\"w3-light-blue\">
      <th class=\"w3-center\">Código</th>
      <th class=\"w3-center\">Nome</th>
      <th class=\"w3-center\">Nota 1</th>
      <th class=\"w3-center\">Nota 2</th>
      <th class=\"w3-center\">Nota 3</th>
      <th class=\"w3-center\">Nota 4</th>
    </tr>";

        foreach ($result as $row) {
            echo "<tr>
        <td class='w3-center'>{$row['studentID']}</td>
        <td class='w3-center'>{$row['name']}</td>
        <td class='w3-center'>{$row['grade1']}</td>
        <td class='w3-center'>{$row['grade2']}</td>
        <td class='w3-center'>{$row['grade3']}</td>
        <td class='w3-center'>{$row['grade4']}</td>
      </tr>";

        }
        echo '</table>'
            ?>
    </div>
</body>

</html>