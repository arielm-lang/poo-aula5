<?php

require_once 'produto.php';

$nome = $_POST['nome'] ?? null;
$tipoBike = $_POST['opcao'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;

// Validação simples dos dados
if (!$nome || !$tipoBike || !$quantidade) {
    exit('Dados incorretos!');
}

$produto1 = new LocacaoBicicleta(
    $nome,
    (string) $tipoBike,
    (int) $quantidade
);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículo cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>🚲Exibir Bikes🚲</h1>
    </header>
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Cliente:</td>
                    <td><?= htmlspecialchars($produto1->getNome()) ?></td>
                </tr>

                <tr>
                    <td>Tipo de Veículo:</td>
                    <td><?= htmlspecialchars($produto1->getTipoBike()) ?></td>
                </tr>

                <tr>
                    <td>Horas:</td>
                    <td><?= $produto1->getQuantidade() ?>h</td>
                </tr>

                <tr>
                    <td>Valor Bruto:</td>
                    <td>R$ <?= number_format($produto1->calcularValorBruto(), 2, ',', '.') ?></td>
                </tr>

                <tr>
                    <td>Desconto (10% a partir de 5h):</td>
                    <td>R$ <?= number_format($produto1->calcularDesconto(), 2, ',', '.') ?></td>
                </tr>
                
                <tr>
                    <td><strong>Valor Total a Pagar:</strong></td>
                    <td>
                        <!-- Corrigido: Chamando calcularValorFinal() -->
                        <strong>R$ <?= number_format($produto1->calcularValorFinal(), 2, ',', '.') ?></strong>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="index.php">Voltar para o cadastro</a>
    </main>
</body>
</html>
