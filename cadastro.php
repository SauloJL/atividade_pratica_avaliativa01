<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
</head>
<body>
    
    <h1>Dados do aparelho cadastrado</h1>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome_aparelho = $_POST['nome_aparelho'];
            $consumo_maximo = $_POST['consumo_maximo'];
            $horas_por_dia = $_POST['horas_por_dia'];
            $dias_por_mes = $_POST['dias_por_mes'];
            $valor_kwh = $_POST['valor_kwh'];

            // Cálculos
            $x = $consumo_maximo / 1000;
            $consumo_diario = $x * $horas_por_dia;
            $consumo_mensal = $consumo_diario * $dias_por_mes;
            $custo_mensal = $consumo_mensal * $valor_kwh;

            // Definir categoria de consumo
            if ($custo_mensal <= 5) {
                $categoria = "Baixa";
            } elseif ($custo_mensal <= 10) {
                $categoria = "Moderada";
            } else {
                $categoria = "Elevada";
            }

            // Exibir resultados
            echo "<p><strong>Nome do Aparelho:</strong> $nome_aparelho</p>";
            echo "<p><strong>Consumo Máximo:</strong> $consumo_maximo W</p>";
            echo "<p><strong>Horas por Dia:</strong> $horas_por_dia h</p>";
            echo "<p><strong>Dias no Mês:</strong> $dias_por_mes dias</p>";
            echo "<p><strong>Valor do kWh:</strong> R$ $valor_kwh</p>";
            echo "<hr>";
            echo "<p><strong>Consumo Diário:</strong> " . number_format($consumo_diario, 2) . " kWh</p>";
            echo "<p><strong>Consumo Mensal:</strong> " . number_format($consumo_mensal, 2) . " kWh</p>";
            echo "<p><strong>Custo Mensal:</strong> R$ " . number_format($custo_mensal, 2) . "</p>";
            echo "<p><strong>Categoria de Consumo:</strong> $categoria</p>";
            echo "<hr>";
            echo '<p><a href="index.php">Voltar para Home</a></p>';
        } else {
            echo "<p>Erro: Nenhum dado foi recebido.</p>";
        }
    ?>

</body>
</html>
