var buttonColor = document.querySelector('.buttonColor')
var buttonLogin = document.querySelector('.login_button')
var buttonCadastro = document.querySelector('.cadastro_button')
var form_cadastro = document.querySelector('.cadastro')
var form_login = document.querySelector('.login')

var msL = document.querySelector('.msL')
var msC = document.querySelector('.msC')

var btn_login = document.querySelector('.btn_login')
var btn_cadastro = document.querySelector('.btn_cadastro')
var textoC = form_cadastro.querySelector('#iusuarioc')
var senhaC = form_cadastro.querySelector('#isenhac')
var emailC = form_cadastro.querySelector('#iemail')
var textoL = form_login.querySelector('#iusuariol')
var senhaL = form_login.querySelector('#isenhal')





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

btn_cadastro.addEventListener('click',
    ()=>{
        if(textoC.value.length == 0 || senhaC.value.length == 0 || emailC.value.length == 0){
            alert('Preencha Todos os Campos de Resposta!')
        }
    }
)
btn_login.addEventListener('click',
    ()=>{
        if(textoL.value.length == 0 || senhaL.value.length == 0){
            alert('Preencha Todos os Campos de Resposta!')
        }
    }
)

msC.addEventListener('click',
    ()=> {
        if(msC.src.includes('eye.svg')) {
            msC.src = 'eye-slash.svg';
            senhaC.setAttribute('type','text')
        } else if(msC.src.includes('eye-slash.svg')) {
            msC.src = 'eye.svg';
            senhaC.setAttribute('type','password')
        }
    }
);
msL.addEventListener('click',
    ()=> {
        if(msL.src.includes('eye.svg')) {
            msL.src = 'eye-slash.svg';
            senhaL.setAttribute('type','text')
        } else if(msL.src.includes('eye-slash.svg')) {
            msL.src = 'eye.svg';
            senhaL.setAttribute('type','password')
        }
    }
);

