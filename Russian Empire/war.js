const slider = document.getElementById('Slider');
const imagens = document.querySelectorAll('.imagens img');
const descricaoImagem = document.getElementById('descricaoImagem');
const tituloimagem = document.getElementById('tituloImagem');

imagens[0].classList.add('active');

updatedescricaoImagem(1); 
updatetituloimagem(1);

slider.addEventListener('input', () => {
  const value = parseInt(slider.value);
  
  imagens.forEach(imagem => imagem.classList.remove('active'));

  const imagemSelecionada = document.getElementById(`imagem${value}`);
  imagemSelecionada.classList.add('active');

  updatedescricaoImagem(value); 
  updatetituloimagem(value);
});

function changeSlide(direction) {
  /*const slider = document.querySelector('.slider');*/
  const slides = document.querySelector('.slides');
  const slideWidth = document.querySelector('.slide').offsetWidth;
  const currentTranslate = parseFloat(slides.style.transform.replace('translateX(', '').replace('px)', '')) || 0;
  const newTranslate = currentTranslate - direction * slideWidth; 

  slides.style.transform = `translateX(${newTranslate}px)`;
}

function updatedescricaoImagem(value) {
  const descricaoImagemText = getdescricaoImagem(value);
  descricaoImagem.textContent = descricaoImagemText;
}

function updatetituloimagem(value) {
  const tituloimagemText = gettituloimagem(value);
  tituloimagem.textContent = tituloimagemText;
}

function gettituloimagem(value) {
  switch (value) {
    case 1:
      return 'Lorem Ipsum';
    case 2:
      return 'Lorem Ipsum';
    case 3:
      return 'Lorem Ipsum';
    case 4:
      return 'Lorem Ipsum';
    case 5:
      return 'Lorem Ipsum';
    default:
      return '';
  }
}

function getdescricaoImagem(value) {
  switch (value) {
    case 1:
      return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus! Sit voluptates cumque similique assumenda alias modi quos eos, sunt cupiditate ea nulla, iusto aliquid nemo voluptate, ratione vel eum.";
    case 2:
      return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus! Sit voluptates cumque similique assumenda alias modi quos eos, sunt cupiditate ea nulla, iusto aliquid nemo voluptate, ratione vel eum.";
    case 3:
      return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus! Sit voluptates cumque similique assumenda alias modi quos eos, sunt cupiditate ea nulla, iusto aliquid nemo voluptate, ratione vel eum.";
    case 4:
      return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus! Sit voluptates cumque similique assumenda alias modi quos eos, sunt cupiditate ea nulla, iusto aliquid nemo voluptate, ratione vel eum.";
    case 5:
      return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ducimus! Sit voluptates cumque similique assumenda alias modi quos eos, sunt cupiditate ea nulla, iusto aliquid nemo voluptate, ratione vel eum.";
    default:
      return '';
  }
}

