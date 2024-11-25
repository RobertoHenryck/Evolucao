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
    <div class="verfeed">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $email = htmlspecialchars($_POST["email"]);
            $relato = htmlspecialchars($_POST["relato"]);
            $star = htmlspecialchars($_POST["star"]);

            $data = array(
                "nome" => $nome,
                "email" => $email,
                "relato" => $relato,
                "star" => $star
            );

            $file = 'feedbacks.json';

            if (file_exists($file)) {
                $current_data = file_get_contents($file);
                $array_data = json_decode($current_data, true);
                $array_data[] = $data;
                $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
            } else {
                $array_data = array();
                $array_data[] = $data;
                $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
            }
            if (file_put_contents($file, $final_data)) {
                echo "Feedback salvo com sucesso!";
                echo '<br>';
                echo '<a href="exibe_feedbacks.php">Ver Feedbacks (Clique aqui)</a>';
            } else {
                echo "Erro 404";
            }
        }
        ?>
    </div>
    <footer>
        <p>
            © 2024 Todos os direitos reservados. Engine Tuner. | Desenvolvido por Octávio Gomes da Silva Ferreira. |
            Política de Privacidade | Termos de Uso
        <div class="pe">
            <a href="https://br.linkedin.com/"><img src="IMG/in.png" alt=""></a>

            <a href="https://web.whatsapp.com/"><img src="IMG/wlog.jpg" alt=""></a>

            <a href="https://www.facebook.com/?locale=pt_BR"><img
                    src="IMG/facebook-logo-facebook-icon-transparent-free-png (1).jpg" alt=""></a>
            <div class="g">
                <a href="ajuda.html"><img src="IMG/icons8-ajuda-30.png" alt=""></a>
            </div>
            <a href="ajuda.html">
                <p>Ajuda</p>
            </a>
        </div>
    </footer>
</body>

</html>