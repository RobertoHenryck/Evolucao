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
        <h1>Projeto atual</h1>
    </header>

    <main class="content">
        <section id="sobre" class="section">
            <h2>Como comecei?</h2>
            <p>O projeto atual foi um grande salto em relação ao meu primeiro trabalho. Dessa vez, trabalhei em dupla, o que trouxe novas
            experiências e desafios. Usamos PHP, MySQL, HTML e CSS para desenvolver o site, aplicando uma estrutura bem mais complexa e 
            profissional. Foi incrível colocar em prática o que aprendemos sobre back-end e banco de dados, conectando diferentes partes 
            do site para funcionar de maneira integrada e dinâmica.</p>
        </section>

        <section class="section">
            <h2>Quais foram as maiores dificudades?</h2>
            <p>Minha maior dificuldade foi com o PHP, especialmente ao usar os controllers e models para organizar o código e 
            fazer a conexão com o banco de dados no MySQL. Foi desafiador entender como essas partes interagem e como fazer as 
            consultas e exibições de forma eficiente. No início, parecia um quebra-cabeça impossível, mas com persistência e ajuda 
            dos professores, consegui superar essas barreiras.</p>
        </section>

        <section class="section">
            <h2>Como eu me organizei?</h2>
            <p>O trabalho em dupla exigiu organização e divisão de tarefas. Começamos pela estrutura básica do site, como as páginas 
            principais e o design visual com HTML e CSS. Depois, avançamos para a integração do PHP com o MySQL, focando em uma etapa 
            de cada vez. Criamos o planejamento baseado nas quatro aulas que tínhamos, revisando e ajustando o código ao longo do processo.
            Essa abordagem garantiu que o projeto fosse finalizado no prazo.</p>
        </section>

        <section class="section">
            <h2>Quanto tempo eu levei para terminar?</h2>
            <p>Levamos quatro aulas para concluir o projeto, e foi um tempo bem utilizado. Cada etapa foi finalizada com cuidado, mas 
            também tivemos momentos de recomeçar quando algo não funcionava como o esperado. No final, entregamos um site funcional e bem 
            estruturado, e aproveitamos as revisões para melhorar os detalhes.</p>
        </section>

        <section id="contato" class="section">
            <h2>Oque eu achei do meu primeiro projeto e como eu acho que me saí?</h2>
            <p>Este projeto mostrou o quanto evoluí. Apesar das dificuldades com PHP e banco de dados, consegui superar os obstáculos e 
            criar algo mais avançado. Trabalhar em dupla foi enriquecedor, pois trocamos ideias e aprendemos juntos. Hoje, mesmo com algumas
            dificuldades, sinto que consigo desenvolver sites sozinha, contando com a orientação dos professores para dúvidas mais complexas.
            Estou muito orgulhosa do progresso que fiz e animada para os próximos desafios!
            </p>
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
