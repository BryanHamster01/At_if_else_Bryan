<?php
$temperatura = isset($_GET['temperatura']) ? floatval($_GET['temperatura']) : null;

if ($temperatura === null) {
    echo "Por favor, informe a temperatura.";
    exit;
}

if ($temperatura < 0) {
    $mensagem = "Congelante";
} elseif ($temperatura >= 0 && $temperatura < 15) {
    $mensagem = "Muito frio";
} elseif ($temperatura >= 15 && $temperatura < 25) {
    $mensagem = "Razoável";
} else {
    $mensagem = "Calor";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Resultado da Temperatura</title>
    <style>
        body {
            margin: 0;
            background-color: #001f3f;
            color: white;
            font-family: Arial, sans-serif;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            margin-bottom: 10px;
            text-align: center;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        a {
            margin-top: 25px;
            color: #a0cfff;
            text-decoration: none;
            font-size: 1em;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Resultado da Temperatura</h1>
    <p>Temperatura: <strong><?php echo $temperatura; ?> °C</strong></p>
    <p>Avaliação: <strong><?php echo $mensagem; ?></strong></p>
    <a href="exercicio_02_form.html">← Voltar para Atividade 2</a>
</body>
</html>