<?php
$host = 'localhost';     // Host do banco de dados
$dbname = 'cadastro';    // Nome do banco de dados
$username = 'root';      // Usuário do banco de dados
$password = '';          // Senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>

<?php
// Processa o formulário de cadastro quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verifica se todos os campos estão preenchidos
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error = 'Todos os campos são obrigatórios.';
    } elseif ($password !== $confirm_password) {
        $error = 'As senhas não coincidem.';
    } else {
        // Verifica se o nome de usuário já existe
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);

        if ($stmt->rowCount() > 0) {
            $error = 'Nome de usuário já está em uso.';
        } else {
            // Criptografa a senha e insere o novo usuário
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hashed_password]);

            $success = 'Cadastro realizado com sucesso! Você já pode fazer login.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 400px; margin: auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group input { width: 100%; padding: 8px; }
        .error { color: red; margin-bottom: 15px; }
        .success { color: green; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>

        <!-- Exibe mensagem de erro, se houver -->
        <?php 
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

        <!-- Exibe mensagem de sucesso, se houver -->
        <?php 
        if (isset($success)) {
            echo "<p class='success'>$success</p>";
        }
        ?>

        <!-- Formulário de Cadastro -->
        <form method="post">
            <div class="form-group">
                <label>Nome de Usuário:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Confirmar Senha:</label>
                <input type="password" name="confirm_password" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>
