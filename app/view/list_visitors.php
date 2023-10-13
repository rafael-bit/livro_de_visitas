<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$titulo?></title>
</head>

<body>
  <h1><?=$titulo?></h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Data e Hora</th>
      <th>Nota</th>
    </tr>
    <?php
    foreach ($visitors as $visitor) {
        echo "<tr>";
        echo "<td>" . $visitor->getId() . "</td>"; // ID
        echo "<td>" . $visitor->getName() . "</td>"; // Nome
        echo "<td>" . $visitor->getDate("br") . "</td>"; // Data e Hora
        echo "<td>" . $visitor->getRating() . "</td>"; // Nota
        echo "</tr>";
    }
    ?>
    ?>
  </table>
</body>

</html>