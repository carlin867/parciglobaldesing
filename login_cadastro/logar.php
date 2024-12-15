<?php
if(isset($_POST['logar']) && !empty($_POST['usuariol']) && !empty($_POST['senhal'])){
    include_once('conexao.php');
    $usuario = $_POST['usuariol'];
    $senha = $_POST['senhal'];
    

    // SQL query to select the user based on both username and password
    $stmt = $conexao->prepare("SELECT * FROM cadastros WHERE usuario = ? AND senha = ?");
    $stmt->bind_param('ss', $usuario, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows < 1){
        // User not found
        echo 'Usuário inexistente.';
        header('Location: cadastro.html');
        exit;
    }
    else{
        // User found
        echo 'Usuário existe!';
        header('Location: ../socrates.html');
        exit;
    }
} else {
    // Redirect if the form data is not set or empty
    header('Location: ../login.html');
    exit;
}

