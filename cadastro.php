<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $infos = $_POST;
    if (!empty($infos['nome']) && !empty($infos['watts']) && !empty($infos['horas']) && !empty($infos['dias']) && !empty($infos['valor_kw'])) {
        $nome = $_POST['nome'];
        $watts = $_POST['watts'];
        $horas = $_POST['horas'];
        $dias = $_POST['dias'];
        $valor_kw = $_POST['valor_kw'];
        $x = $watts / 1000;

        $consumo_diario = $x * $horas;
    
        $consumo_mensal = $consumo_diario * $dias;
    
        $consumo_real = $consumo_mensal * $valor_kw;
    
        $consumo_maximo = $horas * $dias;
    
        if ($consumo_real <= 5) {
            $nivel = "Baixo";
        } elseif ($consumo_real <= 10) {
            $nivel = "Moderado";
        } else {
            $nivel = "Elevado";
        }
    
        echo "<h1>Dados do Aparelho Cadastrado</h1>";
        echo "<p>Nome do Aparelho: $nome</p>";
        echo "<p>Consumo Máximo/total: $consumo_maximo watts</p>";
        echo "<p>Número de Horas Ligado por Dia: $horas horas</p>";
        echo "<p>Número de Dias Ligado no Mês: $dias dias</p>";
        echo "<p>Valor do Kilowatt-Hora: R$ $valor_kw</p>";
        
        echo "<h2>Resultados:</h2>";
        echo "<p>Consumo Diário: $consumo_diario kWh</p>";
        echo "<p>Consumo Mensal: $consumo_mensal kWh</p>";
        echo "<p>Consumo em R$: $consumo_real</p>";
        echo "<p>Categoria de Consumo: $nivel</p>";
    
        echo '<br><br><a href="index.php">Voltar para a página home</a>';
    }else{
        echo "<h4>Erro: Dados não foram enviados corretamente.</h4>";
        echo '<br><br><a href="index.php">Voltar para a página home</a>';
    }
}else {
    echo "<h4>Erro: Prencha todos os campos do formulario</h4>";
    echo '<br><br><a href="index.php">Voltar para a página home</a>';
}
?>
