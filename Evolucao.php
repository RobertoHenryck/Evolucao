<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolução</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap');

        body {
            background-color: #e9ecef;
            padding: 0;
            margin: 0;
            font-family: "Parkinsans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;

        }

        .titulo {
            display: flex;
            justify-content: center;
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            color: black;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease-in-out;

        }
        a:hover{
            transform: scale(1.1);
        }

        .trabalhos {
            display: flex;
            gap: 40px;
            justify-content: space-evenly;
        }

        img {
            width: 300px;
            height: 200px;
            border-radius: 10px;

        }


        .trabalho1,
        .trabalho2,
        .trabalho3,
        .trabalho4,
        .trabalho5,
        .trabalho6,
        .trabalho7,
        .trabalho8 {
            text-align: center;
            display: flex;
            background-color: #f8f9fa;
            flex-direction: column;
            width: 300px;
            align-items: center;
            height: 200px;
            margin-top: 60px;
            border-radius: 10px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);

        }

        .link {
            gap: 20px;
        }

        .trabalhos2 {
            display: flex;
            gap: 50px;
            justify-content: space-evenly;
        }
    </style>
</head>

<div class="titulo">
    <h1>Trabalhos</h1>
</div>

<body>
    <div class="trabalhos">

        <div class="trabalho1">
            <a href="Roberto/evolução.php"><img src="img/trabalho roberto.png" alt=""></a>
            <div class="link">
                <a href="Roberto/evolução.php">Trabalho Roberto</a>
            </div>
        </div>
        <div class="trabalho2">
            <a href="Sara/evolucao.php"><img src="img/trabalho sara.png" alt=""></a>

            <div class="link">
                <a href="Sara/evolucao.php">Trabalho Sara</a>
            </div>
        </div>
        <div class="trabalho3">
            <a href="Paulo/GamingAtlas/view/index.php"><img src="img/trabalho paulo.png" alt=""></a>
            <div class="link">
                <a href="Paulo/GamingAtlas/view/index.php">Trabalho Paulo</a>
            </div>
        </div>

        <div class="trabalho4">
            <a href="andre/evolucao.php"><img src="img/Trabalho andre.png" alt=""></a>
            <div class="link">
                <a href="andre/evolucao.php">Trabalho André</a>
            </div>
        </div>
    </div>

    <div class="trabalhos">

        <div class="trabalho5">
            <a href="octavio/index.html">
                <img src="img/trabalho Octavio.png" alt=""></a>
            <div class="link">
                <a href="octavio/index.html">Trabalho Octavio</a>
            </div>
        </div>
        <div class="trabalho6">
            <a href="Kauany/index.php">
                <img src="img/Site kauany.png" alt="">
            </a>
            <div class="link">
                <a href="Kauany/index.php">Trabalho Kauany</a>
            </div>
        </div>
        <div class="trabalho7">
            <a href="Gui/index.php">
                <img src="img/Trabalho Guilherme.png" alt=""></a>
            <div class="link">
                <a href="Gui/index.php">Trabalho Guilherme</a>
            </div>
        </div>
        <div class="trabalho8">
            <a href="angelo/index.php">
            <img src="img/Trabalho Angelo.png" alt=""></a>
            <div class="link">
                <a href="angelo/index.php">Trabalho Angelo</a>
            </div>
        </div>

    </div>

</body>

</html>