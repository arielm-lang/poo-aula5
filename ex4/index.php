<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas de Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Hóspedes</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
            <div class="campo">
                <label for="nome">Nome do hóspede</label>
                <input type="text" required name="nome" id="nome" placeholder="Nome do hóspede">
            </div>

            <div class="campo">
                <label for="opcao">Tipo do quarto</label>
                <select name="opcao" id="opcao" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Standard">Standard</option>
                    <option value="Suíte">Suíte</option>
                </select>
            </div>

            <div class="campo">
                <label for="quantidade">Quantidade de diárias</label>
                <input type="number" required min="1" name="quantidade" id="quantidade" placeholder="Número de diárias">
            </div>
            
            <div class="campo">
                <label>Deseja café da manhã?</label>
                <div class="radio-group">
                    <input type="radio" id="sim" name="cafe" value="Sim" checked>
                    <label for="sim">Sim</label>

                    <input type="radio" id="nao" name="cafe" value="Nao">
                    <label for="nao">Não</label>
                </div>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>