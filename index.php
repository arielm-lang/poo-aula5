<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>
    <div class="formulario">
        <form action="processa.php" method="post">
            <!-- Campos para preencher o objeto produto -->
             <label for="nome">Nome</label>
             <input type="text" required 
             name="nome" id="nome" placeholder="Insira seu nome">
             <!-- campo preço -->
             <label for="preco">Preço</label>
             <input type="number" required
             name="preco" id="preco" placeholder="Preço do produto">
             <!-- campo quantidade -->
             <label for="quantidade">Quantidade</label>
             <input type="number" required
             name="quantidade" id="quantidade" placeholder="Quantidade de produtos">
             <!-- botao -->
              <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>