<?php

require_once 'produto.php';

$nome = $_POST['nome'] ?? null;
$tipoQuarto = $_POST['opcao'] ?? null;
$diarias = $_POST['quantidade'] ?? null;
$cafe = $_POST['cafe'] ?? null;

if (!$nome || !$tipoQuarto || !$diarias || !$cafe) {
    exit('Dados incorretos ou formulário incompleto!');
}

$reserva = new Reserva(
    $nome,
    (string) $tipoQuarto,
    (int) $diarias,
    (string) $cafe
);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Reserva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Resumo da Reserva</h1>
    </header>
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor / Detalhe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Hóspede:</td>
                    <td><?= htmlspecialchars($reserva->getNome()) ?></td>
                </tr>

                <tr>
                    <td>Tipo de Quarto:</td>
                    <td><?= htmlspecialchars($reserva->getTipoQuarto()) ?></td>
                </tr>

                <tr>
                    <td>Quantidade de Diárias:</td>
                    <td><?= $reserva->getDiarias() ?> dia(s)</td>
                </tr>

                <tr>
                    <td>Café da Manhã Incluído:</td>
                    <td><?= htmlspecialchars($reserva->getCafe()) ?></td>
                </tr>

                <tr>
                    <td>Valor Base das Diárias:</td>
                    <td>R$ <?= number_format($reserva->calcularDiariaBase(), 2, ',', '.') ?></td>
                </tr>

                <tr>
                    <td>Adicional Café da Manhã:</td>
                    <td>R$ <?= number_format($reserva->calcularValorCafe(), 2, ',', '.') ?></td>
                </tr>

                <tr>
                    <td><strong>Valor Total da Reserva:</strong></td>
                    <td>
                        <strong>R$ <?= number_format($reserva->calcularValorTotal(), 2, ',', '.') ?></strong>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="index.php">Realizar nova reserva</a>
    </main>
</body>
</html>