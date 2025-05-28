<?php
$peso = isset($_POST['peso']) ? floatval($_POST['peso']) : null;
$altura = isset($_POST['altura']) ? floatval($_POST['altura']) : null;

if ($peso === null || $altura === null || $peso <= 0 || $altura <= 0) {
    echo "Peso ou altura inválidos.";
    exit;
}

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $categoria = "Abaixo do peso";
} elseif ($imc < 25) {
    $categoria = "Peso normal";
} elseif ($imc < 30) {
    $categoria = "Sobrepeso";
} else {
    $categoria = "Obesidade";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Resultado do IMC</title>
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
    <h1>Resultado do IMC</h1>
    <p>IMC: <strong><?php echo number_format($imc, 2); ?></strong></p>
    <p>Categoria: <strong><?php echo $categoria; ?></strong></p>
    <a href="exercicio_03_form.html">← Voltar para Atividade 3</a>
</body>
</html>