<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Atividades</title>
    <style>
        body {
            margin: 0;
            background-color: #001f3f;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
        h1 {
            margin-bottom: 40px;
            text-align: center;
        }
        .container {
            display: flex;
            gap: 20px;
        }
        .card {
            background: #003366;
            padding: 20px 30px;
            border-radius: 8px;
            width: 200px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            user-select: none;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(255,255,255,0.3);
        }
        .card h2 {
            margin: 0 0 10px 0;
            font-size: 20px;
            color: white;
        }
        .card p {
            color: #cccccc;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Atividades</h1>
    <div class="container">
        <div class="card" onclick="location.href='exercicio_01_form.html'">
            <h2>Exercício 01</h2>
            <p>Média de Notas 📓</p>
        </div>
        <div class="card" onclick="location.href='exercicio_02_form.html'">
            <h2>Exercício 02</h2>
            <p>Temperatura 🌡️</p>
        </div>
        <div class="card" onclick="location.href='exercicio_03_form.html'">
            <h2>Exercício 03</h2>
            <p>IMC 🏋️‍♂️</p>
        </div>
    </div>
</body>
</html>