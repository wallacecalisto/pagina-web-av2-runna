// MENU
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger?.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// CARRINHO ABRIR/FECHAR
const cartSidebar = document.getElementById('cart-sidebar');
const overlay = document.getElementById('overlay');
const closeCart = document.getElementById('close-cart');
const cartIcons = document.querySelectorAll('.cart-icon');

cartIcons.forEach(icon => {
  icon.addEventListener('click', (e) => {
    e.preventDefault();
    abrirCarrinho();
  });
});

closeCart?.addEventListener('click', fecharCarrinho);
overlay?.addEventListener('click', fecharCarrinho);

function abrirCarrinho() {
  cartSidebar.classList.add('open');
  overlay.classList.add('active');
}

function fecharCarrinho() {
  cartSidebar.classList.remove('open');
  overlay.classList.remove('active');
}

// CARRINHO FUNCIONAL
const botoesAdicionar = document.querySelectorAll('.add-to-cart');
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const notificacao = document.getElementById('notificacao');

let carrinho = [];
let total = 0;

// Carregar carrinho salvo no localStorage
window.addEventListener('load', () => {
  const carrinhoSalvo = localStorage.getItem('carrinho');
  if (carrinhoSalvo) {
    carrinho = JSON.parse(carrinhoSalvo);
    renderizarCarrinho();
  }
});

function salvarCarrinho() {
  localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

function atualizarTotal() {
  total = carrinho.reduce((soma, item) => soma + item.preco, 0);
  cartTotal.textContent = `R$ ${total.toFixed(2)}`;
}

function renderizarCarrinho() {
  cartItems.innerHTML = '';
  carrinho.forEach((item, index) => {
    const itemElemento = document.createElement('div');
    itemElemento.classList.add('cart-item');
    itemElemento.innerHTML = `
      <img src="${item.imagem}" alt="${item.nome}" class="item-icon" style="width:40px; height:40px; border-radius:5px;">
      <span style="flex:1">${item.nome}</span>
      <span> R$ ${item.preco.toFixed(2)}</span>
      <button class="remove-btn" data-index="${index}">X</button>
    `;
    cartItems.appendChild(itemElemento);

    itemElemento.querySelector('.remove-btn').addEventListener('click', () => {
      carrinho.splice(index, 1);
      salvarCarrinho();
      renderizarCarrinho();
    });
  });
  atualizarTotal();
}

//Adicionar ao carrinho
botoesAdicionar.forEach(botao => {
  botao.addEventListener('click', () => {
    const nome = botao.getAttribute('data-nome');
    const preco = parseFloat(botao.getAttribute('data-preco'));
    const imagem = botao.getAttribute('data-img');

    if (!nome || isNaN(preco) || !imagem) return;
    if (carrinho.some(item => item.nome === nome)) return;

    carrinho.push({ nome, preco, imagem });
    salvarCarrinho();
    renderizarCarrinho();
    abrirCarrinho();

    // Notificação
    if (notificacao) {
      notificacao.classList.add('show');
      setTimeout(() => {
        notificacao.classList.remove('show');
      }, 2000);
    }
  });
});

// MODAL
const abrir = document.getElementById('abrirModal');
const fechar = document.getElementById('fecharModal');
const modal = document.getElementById('modal');

abrir.onclick = () => {
  modal.style.display = 'block';
};

fechar.onclick = () => {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
