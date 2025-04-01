<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade-Prática-Avaliativa-01</title>
</head>
<body>
    <h1>Cadastro de Aparelho Eletrônico</h1>
    <h2>Cadastre aqui:</h2>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome do Aparelho:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="watts">Consumo Máximo em Watts:</label><br>
        <input type="number" id="watts" name="watts"><br><br>
        
        <label for="horas">Número de Horas que o Aparelho é Ligado por Dia:</label><br>
        <input type="number" id="horas" name="horas"><br><br>
        
        <label for="dias">Número de Dias que o Aparelho Fica Ligado no Mês:</label><br>
        <input type="number" id="dias" name="dias"><br><br>
        
        <label for="valor_kw">Valor do Kilowatt-Hora:</label><br>
        <input type="number" id="valor_kw" name="valor_kw" step="0.01" placeholder="Em R$ Pf"><br><br>
        
        <input type="submit" value="Cadastrar Aparelho">
    </form>
    <h3>Tarifas em R$/kWh</h3>
    <ol type="1">
        <li>Belém/PA - Tarifa: 0,879 R$/kWh</li>
        <li>Manaus/AM - Tarifa: 0,835 R$/kWh</li>
        <li>Cuiabá/MT - Tarifa: 0,814 R$/kWh</li>
        <li>Campo Grande/MS - Tarifa: 0,802 R$/kWh</li>
        <li>Palmas/TO - Tarifa: 0,762 R$/kWh</li>
        <li>Rio de Janeiro/RJ - Tarifa: 0,754 R$/kWh</li>
        <li>Maceió/AL - Tarifa: 0,750 R$/kWh</li>
        <li>Salvador/BA - Tarifa: 0,746 R$/kWh</li>
        <li>Teresina/PI - Tarifa: 0,743 R$/kWh</li>
        <li>Rio Branco/AC - Tarifa: 0,733 R$/kWh</li>
        <li>Macapá/AP - Tarifa: 0.722 R$/kWh</li>
        <li>Fortaleza/CE - Tarifa: 0,709 R$/kWh</li>
        <li>Recife/PE - Tarifa: 0,706 R$/kWh</li>
        <li>Vitória/ES - Tarifa: 0,674 R$/kWh</li>
        <li>Goiânia/GO - Tarifa: 0,671 R$/kWh</li>
        <li>Natal/RN - Tarifa: 0,662 R$/kWh</li>
        <li>Boa Vista/RR - Tarifa: 0,657 R$/kWh</li>
        <li>Porto Velho/RO - Tarifa: 0,657 R$/kWh</li>
        <li>Porto Alegre/RS - Tarifa: 0,656 R$/kWh</li>
        <li>São Paulo/SP - Tarifa: 0,656 R$/kWh</li>
        <li>Belo Horizonte/MG - Tarifa: 0,653 R$/kWh</li>
        <li>São Luís/MA - Tarifa: 0,651R$/kWh</li>
        <li>Aracaju/SE - Tarifa: 0,646 R$/kWh</li>
        <li>João Pessoa/PB - Tarifa: 0,599 R$/kWh</li>
        <li>Florianópolis/SC - Tarifa: 0,573 R$/kWh</li>
        <li>Curitiba/PR - Tarifa: 0,570 R$/kWh</li>
    </ol>
    <p><a href="https://www.webarcondicionado.com.br/tarifa-de-energia-eletrica-kwh-valores-e-ranking-cidades"></a>Para uma melhor consulta sobre a Tarifa!!!</p>
</body>
</html>
