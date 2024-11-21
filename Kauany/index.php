<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolução - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Cabeçalho com Menu -->
    <header>
        <nav class="navbar">
            <div class="logo">Evolução</div>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#integrantes">Integrantes</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção Principal -->
    <main>
        <section class="hero">
            <h1>Bem-vindo ao Site sobre Evoluções</h1>
            <p>Refletindo sobre nossa jornada e os aprendizados adquiridos ao longo do tempo.</p>
        </section>

        <section id="sobre" class="content">
            <h2>Sobre o Projeto</h2>
            <p>Este site é uma demonstração do progresso individual ao longo do curso. Aqui, você encontrará nossas reflexões, desafios e conquistas.</p>
        </section>

        <section id="integrantes" class="content">
            <h2>Saiba mais</h2>
            <ul>
                <li><a href="inicio.php">CLIQUE AQUI</a></li>
            </ul>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Evolução - Todos os direitos reservados</p>
        <p>Feito por [Nome do Grupo]</p>
    </footer>
</body>
</html>
<style>
/* Estilo Geral */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f4f4f9;
}

/* Cabeçalho e Menu */
header {
    background-color: #6200ea;
    color: white;
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar .logo {
    font-size: 1.5em;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 15px;
}

.nav-links li {
    display: inline;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #ffd700;
}

/* Seção Hero */
.hero {
    text-align: center;
    background: url('hero.jpg') no-repeat center center/cover;
    color: white;
    padding: 80px 20px;
    box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
}

.hero h1 {
    font-size: 2.5em;
    margin: 0;
}

.hero p {
    font-size: 1.2em;
    margin-top: 10px;
}

/* Conteúdo */
.content {
    padding: 40px 20px;
    text-align: center;
    background-color: #ffffff;
    margin: 20px auto;
    max-width: 800px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content h2 {
    color: #6200ea;
}

.content ul {
    list-style: none;
    padding: 0;
}

.content ul li {
    margin: 10px 0;
}

.content ul li a {
    color: #6200ea;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.content ul li a:hover {
    color: #ffd700;
}

/* Rodapé */
footer {
    background-color: #6200ea;
    color: white;
    text-align: center;
    padding: 20px 10px;
    margin-top: 20px;
    font-size: 0.9em;
}

/* Responsividade */
@media (max-width: 768px) {
    .nav-links {
        flex-direction: column;
        gap: 10px;
    }
}
</style>