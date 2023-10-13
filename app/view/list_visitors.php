<?php require VIEW . "/header.php" ?>
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
</table>

<a href="<?=BASEPATH?>"></a>

<?php require VIEW . "/footer.php" ?>