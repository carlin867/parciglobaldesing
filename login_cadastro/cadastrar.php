<?php
if (isset($_POST['cadastrar'])) {
    include_once('conexao.php');

    $usuario = trim($_POST['usuario']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']); // Criptografar a senha

    if (empty($usuario) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        try {
            $stmt = $conexao->prepare("SELECT * FROM cadastros WHERE usuario = ? OR senha = ?");
            $stmt->bind_param("ss", $usuario,$senha);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Usuário já existe!";
                header('Location: cadastro.html');
            } else {
                $stmt = $conexao->prepare("INSERT INTO cadastros (usuario, email, senha) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $usuario, $email, $senha);
                if ($stmt->execute()) {
                    echo "Cadastro realizado com sucesso!";
                } else {
                    echo "Erro ao cadastrar usuário: " . $stmt->error;
                }
            }
            $stmt->close();
        } catch (mysqli_sql_exception $e) {
            echo "Erro de banco de dados: " . $e->getMessage();
        }
    }
    mysqli_close($conexao);
    header('Location: ../socrates.html'); // Redirecionar para a página inicial após o cadastro
}