var buttonColor = document.querySelector('.buttonColor')
var buttonLogin = document.querySelector('.login_button')
var buttonCadastro = document.querySelector('.cadastro_button')
var form_cadastro = document.querySelector('.cadastro')
var form_login = document.querySelector('.login')


buttonLogin.addEventListener('click',
    ()=>{

        buttonColor.style.left = '193px'
        
        form_login.style.left = '0px'
        form_cadastro.style.right = '410px'
        
    }
)
buttonCadastro.addEventListener('click',
    ()=>{
        buttonColor.style.left = '87px'
        
        form_login.style.left = '410px'
        form_cadastro.style.right = '0px'
    }
)