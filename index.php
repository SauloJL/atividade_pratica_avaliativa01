<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aparelhos eletrônicos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o arquivo CSS -->

</head>
<body>
    
    <h1>Cadastro de aparelhos eletrônicos</h1>
    <p><strong>Preencha os dados abaixo para calcular o consumo do seu aparelho.</strong></p>

    <form action="cadastro.php" method="post">
        <p>
            <label for="nome_aparelho">Nome do aparelho:</label><br>
            <input type="text" id="nome_aparelho" name="nome_aparelho" placeholder="Ex: Playstation 5" required>
        </p>
        <p>
            <label for="consumo_maximo">Consumo máximo (W):</label><br>
            <input type="number" id="consumo_maximo" name="consumo_maximo" placeholder="Ex: 120" min="1" required>
        </p>
        <p>
            <label for="horas_por_dia">Horas por dia:</label><br>
            <input type="number" id="horas_por_dia" name="horas_por_dia" placeholder="Ex: 2" min="1" required>
        </p>
        <p>
            <label for="dias_por_mes">Dias no mês:</label><br>
            <input type="number" id="dias_por_mes" name="dias_por_mes" placeholder="Ex: 30" min="1" max="31" required>
        </p>
        <p>
            <label for="valor_kwh">Valor do khw (R$):</label><br>
            <input type="number" id="valor_kwh" name="valor_kwh" placeholder="Ex: 0.80" min="0" step="0.01" required>
        </p>
        <p>
            <button type="submit">Calcular Consumo</button>
        </p>
    </form>

</body>
</html>