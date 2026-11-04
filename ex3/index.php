<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Locação de Bicicletas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>🚲Cadastro de Bikes🚲</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="post">
             <label for="nome">Nome do cliente</label>
             <input type="text" required 
             name="nome" id="nome" placeholder="Nome do cliente">

              <label for="opcao">Tipo da Bike</label>
              <select name="opcao" id="opcao">
                <option value="" disabled selected>Selecione...</option>
                <option value="Eletrica">Elétrica</option>
                <option value="Comum">Comum</option>
              </select>

             <label for="quantidade">Quantidade de horas</label>
             <input type="number" required
             name="quantidade" id="quantidade" placeholder="Horas de lococmoção">
              
             <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>