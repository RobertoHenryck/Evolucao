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
                <li><a href="saiba.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="../Evolucao.php">Projetos do grupo</a></li>
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
            <h2>Saiba mais</h2>
            <br>
            <ul>
                <li><a href="inicio.php">CLIQUE AQUI</a></li>
            </ul>
      
        </section>
    
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Evolução - Todos os direitos reservados</p>
        <p>Feito por Kah Gabrielly</p>
    </footer>
</body>
</html>

<style>
/* Estilo Geral */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
    background: linear-gradient(90deg, #8a10c6 2%, #9e00ff 19%, #a825a5 73%, #aa1f99 90%);
}

/* Cabeçalho e Menu */
header {
    background: linear-gradient(90deg, #520078 10%, #6200ea 50%, #6f00a3 90%);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.navbar .logo {
    font-size: 1.8em;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    border: 2px solid #fff;
    border-radius: 5px;
    background-color: transparent;
    transition: all 0.3s ease-in-out;
}

.nav-links a:hover {
    color: #ffd700;
    background-color: #fff;
}

/* Seção Hero */
.hero {
    text-align: center;
    background: url('2.png') no-repeat center center/cover;
    color: white;
    padding: 100px 20px;
    box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
}

.hero h1 {
    font-size: 3em;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.hero p {
    font-size: 1.2em;
    margin-top: 15px;
}

/* Conteúdo */
.content {
    padding: 30px 20px;
    background-color: #f9f9f9;
    margin: 20px auto;
    max-width: 700px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.content h2 {
    color: #6200ea;
    margin-bottom: 15px;
    font-size: 1.8em;
}

.content ul {
    list-style: none;
    padding: 0;
}

.content ul li {
    margin: 15px 0;
}

.content ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    background-color: #6200ea;
    padding: 10px 15px;
    border: 2px solid #6200ea;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
}

.content ul li a:hover {
    background-color: #ffd700;
    color: #6200ea;
    border-color: #ffd700;
}

/* Rodapé */
footer {
    background: linear-gradient(90deg, #520078 10%, #6200ea 50%, #6f00a3 90%);
    color: white;
    text-align: center;
    padding: 20px 10px;
    font-size: 0.9em;
    margin-top: 30px;
}

/* Botões personalizados */
button {
    background-color: #6200ea;
    color: #fff;
    padding: 10px 20px;
    border: 2px solid #6200ea;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

button:hover {
    background-color: #ffd700;
    color: #6200ea;
    border-color: #ffd700;
}

/* Responsividade */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
    }

    .hero h1 {
        font-size: 2em;
    }
}
</style>