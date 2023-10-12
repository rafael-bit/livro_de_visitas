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
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $nota = $_POST['nota'];
?>
  <h1>Formulário enviado!</h1>
  <p>Seu nome é: <?=$nome?></p>
<?php
} else {
  echo '<p>O formulário não voi enviado</p>';;
}
?>
</body>
</html>