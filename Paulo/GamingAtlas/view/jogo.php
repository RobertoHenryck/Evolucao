<?php
session_start();

// Verifica se o usuário já está logado
if (isset($_SESSION['username'])) {
    header('Location: bemvindo.php');
    exit;
}

// Configuração do banco de dados
$host = 'localhost';
$dbname = 'jogos';
$username_db = 'root';
$password_db = '';

$error = '';

// Processa o login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Conecta ao banco de dados usando PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Pega os dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepara a consulta SQL
        $stmt = $pdo->prepare("SELECT password FROM usuarios WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Verifica se encontrou o usuário
        if ($stmt->rowCount() > 0) {
            $hashed_password = $stmt->fetchColumn();

            // Compara a senha informada com a senha do banco
            if (hash('sha256', $password) === $hashed_password) {
                $_SESSION['username'] = $username;
                header("Location: bemvindo.php");
                exit;
            } else {
                $error = "Senha incorreta.";
            }
        } else {
            $error = "Usuário não encontrado.";
        }
    } catch (PDOException $e) {
        $error = "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Jogo</title>
    <style>
        .login-container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login do Jogo</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
