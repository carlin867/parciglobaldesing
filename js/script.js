var btn_menu = document.querySelector('.btn-menu')
var menu = document.querySelector('.menu')
btn_menu.addEventListener('click',
    ()=>{
        btn_menu.classList.toggle('ativar')
        menu.classList.toggle('show')
    }
)