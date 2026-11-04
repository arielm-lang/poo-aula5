<?php

require_once 'produto.php';

$nome = $_POST['nome'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$dias = $_POST['dias'] ?? null;

if (!$nome || !$titulo || !is_numeric($dias)) {
    exit('Dados incorretos ou não preenchidos!');
}

$emprestimo = new EmprestimoLivro(
    $nome,
    $titulo,
    (int) $dias
);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Devolução</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Resumo da Devolução</h1>
    </header>

    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Usuário:</td>
                    <td><?= htmlspecialchars($emprestimo->getNomeUsuario()) ?></td>
                </tr>
                <tr>
                    <td>Título do Livro:</td>
                    <td><?= htmlspecialchars($emprestimo->getTituloLivro()) ?></td>
                </tr>
                <tr>
                    <td>Dias de Atraso:</td>
                    <td><?= $emprestimo->getDiasAtraso() ?> dia(s)</td>
                </tr>
                <tr>
                    <td>Situação:</td>
                    <td><?= $emprestimo->verificarSituacao() ?></td>
                </tr>
                <tr>
                    <td><strong>Valor da Multa:</strong></td>
                    <td>
                        <strong>R$ <?= number_format($emprestimo->calcularMulta(), 2, ',', '.') ?></strong>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="index.php">Nova consulta</a>
    </main>
</body>
</html>