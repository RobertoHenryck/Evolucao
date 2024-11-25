<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sobre nós</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="IMG/Logo.png" alt="">
        </div>
        <div class="textologo">
            <p>
                Engine Tuner
            </p>
        </div>
        <div class="gallery">
            <div class="gallery-item">
                <a href="index.html"><img src="IMG/header1.jpg" alt=""></a>
                <div class="descripition">
                    <h3>Sobre nós</h3>
                    <p>O que Engine tuner faz em carros.</p>
                </div>
            </div>
            <div class="gallery-item">
                <a href="index12.html"><img src="IMG/Imagemparaheader.jpg" alt=""></a>
                <div class="descripition">
                    <h3>Atuação</h3>
                    <p>Quais empresas contratam para ser um tuner.</p>
                </div>
            </div>
            <div class="gallery-item">
                <a href="index2.html"><img src="IMG/bmwheader.jpg" alt=""></a>
                <div class="descripition">
                    <h3>Formação e Habilidades</h3>
                </div>
            </div>
            <div class="gallery-item">
                <a href="salarioedia.html"><img src="IMG/nologardapor.jpg" alt=""></a>
                <div class="descripition">
                    <h3>Rotina e mercado de trabalho</h3>
                </div>
            </div>
            <div class="gallery-item">
                <a href="recursonesce.html"><img src="IMG/Ferrari.jpg" alt=""></a>
                <div class="descripition">
                    <h3>Recursos necessários</h3>
                </div>
            </div>
        </div>
    </header>
    <h1>Feedbacks Recebidos:</h1>
    <?php
    $file = 'feedbacks.json';
    if (file_exists($file)) {
        $current_data = file_get_contents($file);
        $feedbacks = json_decode($current_data, true);
        if (!empty($feedbacks)) {
            foreach ($feedbacks as $feedback) {
                echo '<center><div class = "card">';
                echo '<h3>' . htmlspecialchars($feedback["nome"]) . '</h3>';
                echo '<h3> Email: ' . htmlspecialchars($feedback["email"]) . '</h3>';
                echo '<h3> Comentário: ' . htmlspecialchars($feedback["relato"]) . '</h3>';
                echo '<h3> Avaliação geral: ' . htmlspecialchars($feedback["star"]) . '</h3>';
                echo '<br>';
                echo '</div></center>';
            }
        } else {
            echo '<p> Erro, nenhum feedback recebido</p>';
        }
    } else {
        echo '<p> Erro, nenhum feedback recebido</p>';
    }
    ?>
</body>

</html>