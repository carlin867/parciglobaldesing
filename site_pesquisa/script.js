const searchWrapper = document.querySelector(".search");
const inputBox = searchWrapper.querySelector("input");
const sugestBox = searchWrapper.querySelector(".list");
const icon = searchWrapper.querySelector(".icon");

// Função para remover acentos
function removerAcentos(texto) {
  return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

if (inputBox && icon) {
  icon.addEventListener("click", function () {
    if (inputBox.value.trim() == 0) {
      alert("Caixa de Pesquisa está Vazia!");
    } else {
      let searchTerm = inputBox.value.trim().toLowerCase();
      searchTerm = removerAcentos(searchTerm); // Remove os acentos antes de gerar a URL
      const url = `${searchTerm}.html`;
      console.log(`Redirecionando para: ${url}`);
      window.location.href = url;
    }
  });
} else {
  console.error("Caixa de Texto está vazia!");
}

searchWrapper.addEventListener('click', (event) => {
  let suggestions = [
    'Sócrates',
    'Platão',
    'Aristóteles',
    'Parménides',
    'Diógenes',
    'Benicio e Werik são LGBTS!',
    'Deivison é igual o sol!'
  ];

  searchWrapper.classList.add('active');
  
  // Limpa a lista de sugestões anterior
  sugestBox.innerHTML = ''; 
  
  // Adiciona cada sugestão como um item de lista <li>
  suggestions.forEach((suggestionText) => {
    let li = document.createElement('li'); // Cria um novo elemento <li>
    li.textContent = suggestionText; // Define o texto do <li>
    sugestBox.appendChild(li); // Adiciona o <li> ao sugestBox
    
    // Evento de clique no <li>
    li.addEventListener('click', (e) => {
      e.stopPropagation(); // Impede que o clique no <li> ative o clique do searchWrapper
      inputBox.value = li.textContent; // Atualiza o valor da caixa de pesquisa com o texto do <li>
      searchWrapper.classList.remove('active'); // Fecha a lista de sugestões
    });
  });
});

// Fechar a lista de sugestões ao clicar fora dela
document.addEventListener('click', (e) => {
  if (!searchWrapper.contains(e.target)) {
    searchWrapper.classList.remove('active');
  }
});
