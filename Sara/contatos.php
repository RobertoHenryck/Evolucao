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

    <div class="container-contatos">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topico">ENDEREÇO</div>
                    <div class="text-one">Paraguaçu Paulista</div>
                    <div class="text-two">Espírito Santo,478</div>
                </div>

                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topico">TELEFONE</div>
                    <div class="text-one">(18) 99708-9337</div>
                    <div class="text-two"></div>
                </div>

                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topico">E-MAIL</div>
                    <div class="text-one">sara.ajalasiva24@gmail.com</div>
                    <div class="text-two"></div>
                </div>
            </div>

            <div class="right-side">
                <div class="topic-box">ENVIE SUA MENSAGEM</div>
                <p>
                    Ficou com alguma dúvida sobre o conteúdo deste site? <br> Por favor nos contate, será um prazer
                    ajudá-lo!
                </p>
                <form action="processa_feedback.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Digite seu nome">
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="input-box message-box">
                        <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br>

    <footer class="rodape2">
        <div>
            <p>Termos e condições de uso | Política de Privacidade <br> © Sara Ajala. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>