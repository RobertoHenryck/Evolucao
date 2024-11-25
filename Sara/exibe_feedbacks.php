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
$file = 'feedbacks.json';

if (file_exists($file)) {
    $data = file_get_contents($file); 
    $feedbacks = json_decode($data, true); 

    if (is_array($feedbacks)) {
        echo "<h1>Feedbacks Recebidos</h1>";

        foreach ($feedbacks as $feedback) {
            
            $name = isset($feedback['name']) ? $feedback['name'] : "Não informado";
            $email = isset($feedback['email']) ? $feedback['email'] : "Não informado";
            $mensagem = isset($feedback['mensagem']) ? $feedback['mensagem'] : "Sem mensagem";

            echo "<div style='border: 1px solid #ddd; margin: 10px; padding: 10px;'>";
            echo "<strong>Nome:</strong> " . htmlspecialchars($name) . "<br>";
            echo "<strong>E-mail:</strong> " . htmlspecialchars($email) . "<br>";
            echo "<strong>Mensagem:</strong> " . htmlspecialchars($mensagem) . "<br>";
            echo "</div>";
        }
    } else {
       
        echo "Erro ao interpretar os dados do arquivo de feedbacks.";
    }
} else {
    
    echo "Nenhum feedback recebido ainda.";
}
?>

<br><br><br><br><br>

<footer class="rodape2">
        <div>
            <p>Termos e condições de uso | Política de Privacidade <br> © Sara Ajala. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>