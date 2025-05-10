<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validaciones</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
        }

        h2 {
            color: #d63031;
            text-align: center;
            margin-bottom: 20px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            width: 200px;
            height: 140px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.2s;
            text-decoration: none;
            color: #2d3436;
            font-weight: bold;
        }

        .card:hover {
            transform: scale(1.05);
            background-color: #f0f0f0;
        }

        .section {
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <div class="container">

        <h2>Paginas para validar antecedentes y multas</h2>
        <div class="grid">
            <a href="https://www.fcm.org.co/simit/#/home-public" target="_blank" class="card">Valida Multas</a>
            <a href="https://antecedentes.policia.gov.co:7005/WebJudicial/" target="_blank" class="card">Antecedentes</a>
            
        </div>

            
            </div>
            <div class="btn-container">
            <br> <a href="index.php" class="btn">Volver al inicio</a><br>
            
        </div>
        </div>

    </div>

</body>
</html>

