<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EVOLUÇÃO</title>
</head>

<body>
    <header class="cabecalho">
        <h2 class="titulo"><a class="titula" href="evolucao.php">Evolução</a></h2>

        <ul class="menu">
            <li><a class="link" href="primeiroprojeto.php">Primeiro Projeto</a></li>
            <li><a class="link" href="projetoatual.php">Projeto Atual</a></li>
            <li><a class="link" href="dificuldades.php">Dificuldades</a></li>
            <li><a class="link" href="evolucaopessoal.php">Evolução Pessoal</a></li>
            <li><a class="link" href="contatos.php">Contatos</a></li>
        </ul>
    </header>

   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $mensagem = htmlspecialchars($_POST["mensagem"] ?? "");

    $data = array(
        "name" => $name,
        "email" => $email,
        "mensagem" => $mensagem
    );

    $file = 'feedbacks.json';

    if (file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data, true);

        if (!is_array($array_data)) {
            $array_data = [];
        }

        $array_data[] = $data; 
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    } else {
        $array_data = [$data]; 
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    echo '<div class="mensagem-feedback">';
    if (file_put_contents($file, $final_data)) {
        echo "Feedback enviado com sucesso!";
        echo '<br><a href="exibe_feedbacks.php">Ver Feedbacks</a>';
    } else {
        echo "Erro ao salvar o feedback. Tente novamente!";
    }
    echo '</div>';
}
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="rodape2">
        <div>
            <p>Termos e condições de uso | Política de Privacidade <br> © Sara Ajala. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>