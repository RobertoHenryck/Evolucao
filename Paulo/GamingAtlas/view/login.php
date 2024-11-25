<?php
$host = 'localhost';     // Host do banco de dados
$dbname = 'cadastro'; // Nome do banco de dados
$username = 'root';     // Usuário do banco de dados
$password = '';       // Senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
<?php


// Inicializa variáveis para mensagens de erro
$error = '';

// Processa o formulário de login quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se todos os campos estão preenchidos
    if (empty($username) || empty($password)) {
        $error = 'Por favor, preencha todos os campos.';
    } else {
        // Consulta o banco de dados para verificar o usuário
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Login bem-sucedido: armazena informações na sessão
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redireciona para o painel do usuário
            exit();
        } else {
            $error = 'Nome de usuário ou senha incorretos.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Site de Jogos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 400px; margin: auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group input { width: 100%; padding: 8px; }
        .error { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- Exibe a mensagem de erro -->
        <?php if ($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <!-- Formulário de Login -->
        <form method="post">
            <div class="form-group">
                <label>Nome de Usuário:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="password" required>
            </div>
          <a href="bemvindo.php">Entrar</a> 
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
</body>
</html>
