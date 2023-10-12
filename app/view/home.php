<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro de Visitas</title>
</head>
<body>
    <h2>Cadastro de Visitantes</h2>
    <form action="salvar" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="rating">Nota do Evento:</label>
        <input type="number" id="rating" name="rating" min="0" max="5" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
