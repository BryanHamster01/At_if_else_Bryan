<?php
$nota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : null;
$nota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : null;
$nota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : null;

if (
    $nota1 === null || $nota2 === null || $nota3 === null ||
    $nota1 < 0 || $nota1 > 10 ||
    $nota2 < 0 || $nota2 > 10 ||
    $nota3 < 0 || $nota3 > 10
) {
    echo "Notas inválidas. Por favor, insira valores entre 0 e 10.";
    exit;
}

$media = ($nota1 + $nota2 + $nota3) / 3;
$situacao = ($media >= 7) ? "APROVADO" : "REPROVADO";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Resultado da Média</title>
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
    <h1>Resultado da Média</h1>
    <p>Média do aluno: <strong><?php echo number_format($media, 2); ?></strong></p>
    <p>Situação: <strong><?php echo $situacao; ?></strong></p>
    <a href="exercicio_01_form.html">← Voltar para Atividade 1</a>
</body>
</html>