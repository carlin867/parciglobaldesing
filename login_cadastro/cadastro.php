
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
                    
                    <a class="cadastro_button" href="login.php">Cadastro</a>
            
                </div>
            </div>

            <div class="campo_resposta">

                <div class="cadastro">
                    <label for="iusuarioc">
                        
                        <input type="text" name="usuario" id="iusuarioc" placeholder="Usuário">
                    </label>
                    <label for="iemail">
                        
                        <input type="text" name="email" id="iemail" placeholder="Email">
                    </label>
                    <label for="isenhac">
                      
                        <input type="password" name="senha" id="isenhac" placeholder="Senha">
                        
                    </label>
                    <img src="eye.svg" alt="" class="mostrarSenha msC">
                    <button type="submit" class="btn_forms btn_cadastro" name="cadastrar">
                        Cadastrar
                    </button>
                </div>

                
                
            </div>

        </div>

    </form>




  
</body>
</html>