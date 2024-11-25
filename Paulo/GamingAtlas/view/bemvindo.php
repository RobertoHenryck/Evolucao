<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Mundo dos Jogos!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            width: 90%;
        }
        h1 {
            font-size: 3rem;
            color: #f9d342;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #ddd;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #f9d342;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Configuração do nome do usuário (pode ser dinâmico, por exemplo, $_SESSION['username'])
        $nome = "Jogador";

        // Exibir mensagem de boas-vindas
        echo "<h1>Bem-vindo, $nome!</h1>";
        ?>
        <p>Prepare-se para embarcar em aventuras épicas e competir nos melhores jogos!</p>
        <div>
            <a href="jogos.php" class="btn">Explorar Jogos</a>
            <a href="rankings.php" class="btn">Ver Rankings</a>
            <a href="eventos.php" class="btn">Participar de Eventos</a>
        </div>
    </div>
</body>
</html>
