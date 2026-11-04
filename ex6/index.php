<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagamento de Vendedores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cálculo de Salário de Vendedores</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
            <div class="campo">
                <label for="nome">Nome do Vendedor</label>
                <input type="text" required name="nome" id="nome" placeholder="Nome do vendedor">
            </div>

            <div class="campo">
                <label for="salario">Salário-base (R$)</label>
                <input type="number" step="0.01" min="0" required name="salario" id="salario" placeholder="Ex: 2000.00">
            </div>

            <div class="campo">
                <label for="vendas">Total de Vendas no Mês (R$)</label>
                <input type="number" step="0.01" min="0" required name="vendas" id="vendas" placeholder="Ex: 12000.00">
            </div>

            <button type="submit">Calcular Pagamento</button>
        </form>
    </div>
</body>
</html>