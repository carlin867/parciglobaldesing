<?php
   if (isset($_POST['cadastrar'])) {
    
    include_once('conexao.php');

    $usuario = trim($_POST['usuario']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if (empty($usuario) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Aqui você pode adicionar mais validações, como verificar se o email já está cadastrado, etc.

        $sql = "INSERT INTO cadastros(usuario, email, senha) VALUES('$usuario', '$email', '$senha')";

        if (mysqli_query($conexao, $sql)) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
    }
    header('Location: cadastro_login.php');
}
?>