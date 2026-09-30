<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicios de clase</h1>
    <h2>Ejercicio 1</h2>
    <table>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>resultado</th>
        </tr>
        <?php
        $number = 7;
        for ($i = 0; $i <= 10; $i++) :
        ?>
        <tr>
            <td><?= $number ?></td>
            <td><?= $i ?></td>
            <td><?= $i * $number ?></td>
        </tr>
        <?php
        endfor;
        ?>
    </table>

</body>

</html>