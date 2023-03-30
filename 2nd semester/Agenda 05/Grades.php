<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Students' Grades</title>
</head>

<body>
    <div class="w3-third w3-center w3-animate-top w3-padding">
        <?php
        $students = [
            ["name" => "Aline", "firstSemester" => 10, "secondSemester" => 9.5],
            ["name" => "Alfredo", "firstSemester" => 8, "secondSemester" => 5],
            ["name" => "Carla", "firstSemester" => 5, "secondSemester" => 6.5],
            ["name" => "César", "firstSemester" => 9, "secondSemester" => 9],
            ["name" => "Daniel", "firstSemester" => 10, "secondSemester" => 7],
            ["name" => "Esnar", "firstSemester" => 8, "secondSemester" => 6],
            ["name" => "Henzo", "firstSemester" => 6, "secondSemester" => 8],
            ["name" => "Pablo", "firstSemester" => 7, "secondSemester" => 5],
            ["name" => "Wallace", "firstSemester" => 8, "secondSemester" => 7],
            ["name" => "Zulmira", "firstSemester" => 10, "secondSemester" => 6]
        ];
        echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal">';
        echo '<th class="w3-center"> Nome</th>';
        echo '<th class="w3-center"> Primeiro Semestre</th>';
        echo '<th class="w3-center"> Segundo Semestre</th>';
        echo '</tr>';
        foreach ($students as $student) {
            echo '<tr>';
            echo '<td class="w3-center">' . $student['name'] . '</td>';
            echo '<td class="w3-center">' . $student['firstSemester'] . '</td>';
            echo '<td class="w3-center">' . $student['secondSemester'] . '</td>';
            echo '</tr>';
        }
        echo '</table>'
            ?>
        <br>
    </div>
</body>

</html>