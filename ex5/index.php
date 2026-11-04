<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Multas da Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Devolução de Livros</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
            <div class="campo">
                <label for="nome">Nome do Usuário</label>
                <input type="text" required name="nome" id="nome" placeholder="Nome do usuário">
            </div>

            <div class="campo">
                <label for="titulo">Título do Livro</label>
                <input type="text" required name="titulo" id="titulo" placeholder="Título do livro">
            </div>

            <div class="campo">
                <label for="dias">Dias de Atraso</label>
                <input type="number" required min="0" name="dias" id="dias" placeholder="0 para sem atraso">
            </div>

            <button type="submit">Calcular Multa</button>
        </form>
    </div>
</body>
</html>