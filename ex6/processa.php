<?php

require_once 'produto.php';

$nome = $_POST['nome'] ?? null;
$salario = $_POST['salario'] ?? null;
$vendas = $_POST['vendas'] ?? null;

if (!$nome || !is_numeric($salario) || !is_numeric($vendas)) {
    exit('Dados incorretos ou não preenchidos!');
}

$vendedor = new Vendedor(
    $nome,
    (float) $salario,
    (float) $vendas
);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pagamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Resumo do Pagamento</h1>
    </header>

    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Valor / Detalhe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Vendedor:</td>
                    <td><?= htmlspecialchars($vendedor->getNome()) ?></td>
                </tr>
                <tr>
                    <td>Salário-base:</td>
                    <td>R$ <?= number_format($vendedor->getSalarioBase(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Vendas Realizadas:</td>
                    <td>R$ <?= number_format($vendedor->getTotalVendas(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Comissão:</td>
                    <td>R$ <?= number_format($vendedor->calcularComissao(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Bônus:</td>
                    <td>R$ <?= number_format($vendedor->calcularBonus(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td><strong>Salário Final:</strong></td>
                    <td>
                        <strong>R$ <?= number_format($vendedor->calcularSalarioFinal(), 2, ',', '.') ?></strong>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="index.php">Novo cálculo</a>
    </main>
</body>
</html>