<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Contato</div>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="#formulario">Fale Conosco</a></li>
            </ul>
        </nav>
        <h1>Entre em Contato</h1>
    </header>

    <main class="container">
        <section id="formulario" class="box">
            <h2>Envie sua Mensagem</h2>
            <form action="contato.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem" rows="5" required></textarea>

                <button type="submit" class="btn">Enviar</button>
            </form>
        </section>
    </main>
</body>
</html>

<style>
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    text-align: left;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #6200ea;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 2px solid #6200ea;
    border-radius: 5px;
    font-size: 1em;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #ffd700;
    box-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #6200ea;
    color: white;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ffd700;
    color: #6200ea;
}
</style>