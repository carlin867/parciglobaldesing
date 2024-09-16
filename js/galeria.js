const foto = [...document.querySelectorAll('.foto')];
const imagem = [...document.querySelectorAll('.img_foto')];
const pagina = document.body;
let timeoutId;  // Variável para armazenar o timeout

imagem.forEach((e, i) => {
    e.addEventListener('mouseover', () => {
        clearTimeout(timeoutId);  // Cancelar qualquer timeout anterior
        pagina.style.backgroundImage = `url(${imagem[i].src})`;
    });

    e.addEventListener('mouseout', () => {
        // Iniciar o timeout de 2 segundos
        timeoutId = setTimeout(() => {
            pagina.style.background = '#FEFFDF';
        }, 2000);  // 2000 ms = 2 segundos
    });
});
