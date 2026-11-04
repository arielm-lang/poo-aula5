<?php
    require_once 'produto.php';

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    //validacao de dados
    if(!$nome || !$preco || !$quantidade){
        exit('Dados incorretos!');
    }

    //objeto da classe produto
    $produto1 = new Produto(
        $nome,
        (float) $preco,
        (int) $quantidade
    );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Exibindo produtos</h1>
    </header>
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <!-- nome -->
                <tr>
                    <td>Nome:</td>
                    <td><?=$produto1 ->getNome()?></td>
                </tr>
                <!-- preço -->
                <tr>
                    <td>Preço:</td>
                    <td>R$ <?= number_format ($produto1 ->getPreco(), 2, ',','.')?></td>
                </tr>
                <!-- quantidade -->
                <tr>
                    <td>Quantidade:</td>
                    <td><?=$produto1 ->getQuantidade()?></td>
                </tr>
                <!-- valor -->
                <tr>
                    <td>Valor:</td>
                    <td>
                        R$ <?= number_format ($produto1 ->valorTotal(), 2, ',','.')?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="index.php">Voltar para o cadastro</a>
    </main>
</body>
</html>