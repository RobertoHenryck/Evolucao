<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro projeto</title>
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
        <h1>Primeiro Projeto</h1>
    </header>

    <main class="content">
        <section id="sobre" class="section">
            <h2>Como comecei?</h2>
            <p>Meu primeiro projeto foi uma experiência desafiadora, mas muito empolgante. Comecei com a base do HTML e CSS, 
            aprendendo a criar containers para organizar os elementos, botões para interatividade e uma estrutura visual simples.
            Apesar de ser meu primeiro contato prático, me dediquei a aplicar o que tinha aprendidonas aulas e me aventurei a explorar 
            novas possibilidades, como usar imagens e links para deixar o site mais completo.</p>
        </section>

        <section class="section">
            <h2>Quais foram as maiores dificudades?</h2>
            <p>Minha maior dificuldade foi entender o CSS. No início, parecia complicado memorizar e aplicar os comandos corretamente, 
            principalmente para posicionar os elementos na página. Ajustar margens, cores e tamanhos foi um grande desafio,mas com 
            paciência e prática, comecei a enxergar como os estilos funcionam juntos para criar algo funcional e bonito.</p>
        </section>

        <section class="section">
            <h2>Como eu me organizei?</h2>
            <p>Para me organizar, dividi o projeto em etapas: primeiro criei a estrutura básica do site (o "corpo"), começando pelo 
            cabeçalho, seguido do conteúdo principal e finalizando com o rodapé. Depois, passei para os estilos, ajustando cores, 
            tamanhos e fontes. Essa abordagem por etapas me ajudou a não me perder no processo e a priorizar cada parte do site.</p>
        </section>

        <section class="section">
            <h2>Quanto tempo eu levei para terminar?</h2>
            <p>Tivemos quatro aulas para desenvolver e entregar o projeto, mas consegui concluir tudo na terceira aula. Isso foi
            possível porque me dediquei bastante e segui uma rotina organizada. Mesmo entregando antes do prazo, aproveitei a aula
            extra para revisar o trabalho e corrigir pequenos detalhes.</p>
        </section>

        <section id="contato" class="section">
            <h2>Oque eu achei do meu primeiro projeto e como eu acho que me saí?</h2>
            <p>Fiquei muito satisfeita com o resultado, considerando que foi meu primeiro site. Mesmo sendo iniciante, consegui aplicar
            boa parte do que aprendi nas aulas teóricas e práticas. Foi gratificante ver o site ganhar forma e funcionalidade. Claro, 
            ainda há muito para melhorar, mas para um primeiro passo, acredito que me saí muito bem! Essa experiência aumentou minha 
            confiança e minha motivação para os próximos desafios.</p>
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
    animation: shine 10.0s infinite linear;
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
