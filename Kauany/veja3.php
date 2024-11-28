<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Evolução no Curso de Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Evolução</div>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="inicio.php">Projetos</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
        <h1>Minha Evolução no Curso de Programação</h1>
    </header>

    <main class="content">
        <section id="sobre" class="section">
            <h2>Primeiros Desafios</h2>
            <p>Quando comecei o curso de programação, minha primeira impressão foi de que seria muito difícil. Eu não sabia nem por onde começar, e montar sites usando apenas HTML parecia algo quase impossível para mim.</p>
        </section>

        <section class="section">
            <h2>Desenvolvimento Inicial com HTML</h2>
            <p>Nos primeiros momentos, aprendemos a trabalhar com espaçamentos, containers e elementos de bloco como <code>&lt;div&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, que ajudam a estruturar o layout da página de maneira mais organizada.</p>
            <p>Com o tempo, entendi como usar tags de formatação, como <code>&lt;p&gt;</code>, <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, e até mesmo links e imagens, o que tornou tudo mais interativo e interessante.</p>
        </section>

        <section class="section">
            <h2>A Inclusão do CSS</h2>
            <p>Logo após o básico do HTML, começamos a trabalhar com CSS, e a verdadeira magia começou a acontecer. Aprendemos como usar classes e IDs para aplicar estilos de maneira mais precisa.</p>
            <p>Comecei a entender o conceito de <strong>box model</strong>, <strong>margens</strong> e <strong>bordas</strong>, o que me ajudou a posicionar os elementos de forma mais eficiente e esteticamente agradável.</p>
            <p>As transformações e transições no CSS também foram um grande destaque, deixando os sites mais dinâmicos e com um toque profissional.</p>
        </section>

        <section class="section">
            <h2>Explorando o PHP e MySQL</h2>
            <p>No estágio atual do curso, estamos aprendendo PHP e como integrar com MySQL para trabalhar com bancos de dados. Parece até um outro universo, mas, como tudo, é apenas questão de prática.</p>
            <p>O PHP me permitiu criar sites dinâmicos, onde podemos interagir com o usuário, processar dados e gerar conteúdo em tempo real. E o MySQL? Agora posso guardar informações de usuários, fazer consultas e organizar tudo de forma mais eficiente.</p>
        </section>

        <section id="contato" class="section">
            <h2>Reflexão Final</h2>
            <p>Minha evolução foi uma mistura de descobertas e desafios. Eu achava que seria muito difícil, e realmente, é um pouco desafiador, mas nada que a gente não possa entender com o tempo. Às vezes, parecia que estava tentando montar um quebra-cabeça de 1.000 peças, mas agora percebo que cada pedaço faz sentido.</p>
            <p>No final das contas, a programação é uma habilidade que exige paciência, e, como qualquer aprendizado, tem altos e baixos. Porém, quando você começa a ver o resultado do seu esforço, a sensação de conquistas é inestimável.</p>
        </section>
    </main>
</body>
</html>

/* Estilo Geral */
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('fundo.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #333;
}

/* Cabeçalho e Menu */
header {
    text-align: center;
    background: rgba(98, 0, 234, 0.9);
    color: white;
    padding: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-bottom: 4px solid #6200ea;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.navbar .logo {
    font-size: 1.8em;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    padding: 0;
    margin: 0;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-size: 1em;
    font-weight: bold;
    padding: 10px 15px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    border-radius: 5px;
}

.nav-links a:hover {
    background-color: #ffd700;
    color: #6200ea;
    border-color: #6200ea;
}

/* Seções de Conteúdo */
.section {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    max-width: 1000px;
    margin: 20px auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 1.8em;
    color: #6200ea;
    text-align: center;
    margin-bottom: 10px;
    position: relative;
}

h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 2px;
    background: linear-gradient(90deg, #ff00ff, #6200ea, #ff00ff);
    animation: shine 2.5s infinite linear;
}

@keyframes shine {
    0% { transform: scaleX(0); }
    100% { transform: scaleX(1); }
}

/* Responsividade */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        gap: 15px;
    }

    .nav-links {
        flex-direction: column;
        align-items: center;
    }

    .section {
        padding: 15px;
    }
}
</style>
