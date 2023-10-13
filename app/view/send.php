<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário enviado</title>
</head>

<body>

  <?php
  // Verifica se os dados foram enviados via POST
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      // Recupera os dados do formulário. Se não foram passados dados, atribui valores padrão
      $name = isset($_POST['name']) ? $_POST['name'] : 'Nome não fornecido';
      $rating = isset($_POST['rating']) ? $_POST['rating'] : 'Nota não fornecida';
  ?>
  <h1><?=$msgH1?></h1>

  <p><?=$msgP?></p>
  <?php
  } else {
    echo '<p>O formulário não foi enviado</p>';
  }
?>
</body>

</html>