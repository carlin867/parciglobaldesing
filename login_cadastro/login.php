
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Cadastro</title>
    <link rel="stylesheet" href="cadastro-login.css">
</head>
<body>
    <form class="formulario" action="cadastrar.php" method="POST">

        <div class="forms">

            <div class="buttonTransition">
                <div class="btngroup">
                    
                    <a class="login_button" href="cadastro.php">Login</a>
            
                </div>
            </div>

            <div class="campo_resposta">

                <div class="login">
                    <label for="iusuariol">
                        
                        <input type="text" name="usuariol" id="iusuariol" placeholder="Usuário">
                    </label>
                    <label for="isenhal">
                      
                        <input type="password" name="senhal" id="isenhal" placeholder="Senha">
                        
                    </label>
                    <img src="eye.svg" alt="" class="mostrarSenha msC">
                    <button type="submit" class="btn_forms btn_cadastro" name="logar">
                        Logar
                    </button>
                </div>

                
                
            </div>

        </div>

    </form>




  
</body>
</html>