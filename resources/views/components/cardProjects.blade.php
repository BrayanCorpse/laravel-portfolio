<div class="bg-gray" style="padding-top: 1rem;">
  @include('layouts.partials.header', ['sectionName' => 'projects', 'placeContent' => 'center', 'size' => 'clamp(1rem, 1rem + 7vw, 4rem);'])
</div>

<article class="article">

  <div class="article__image image"></div>

  <span class="article__month">B</span>
  <span class="article__day">MC</span>

  <div class="article__text">
    <h3 class="article__title title">
      Project Name
    </h3>

    <a href="#" class="article__type github" target="_blank" rel="noopener noreferrer">Github</a>

    <a href="#" class="article__button link" target="_blank" rel="noopener noreferrer">
      View
    </a>

  </div>

  <a href="#" class="article__pager article__pager--prev prev">Prev</a>

  <a href="#" class="article__pager article__pager--next next">Next</a>

</article>
@push('js')
<script>
  const cards = [
  {
    title: "Bisturí Noticias",
    image: "https://i.pinimg.com/564x/ac/6b/ab/ac6babefc60ad455677ab24436c235c4.jpg",
    link:  "https://bisturinoticias.com/",
    github:"https://github.com/BrayanCorpse/Bisturi-Noticias"
  },
  {
    title: "ByD Solutions",
    image: "https://i.pinimg.com/564x/11/60/2d/11602d4c1cd06db1fca21d4be9c56ab4.jpg",
    link:  "https://bydsolutions.com/",
    github:"https://github.com/ByDsolutions-com"
  },
  {
    title: "Consorcio Gadus",
    image: "https://i.pinimg.com/564x/5b/48/ed/5b48ed64050752681461abffdf76118b.jpg",
    link:  "https://consorciogadus.com/",
    github:"javascript:void(0);"
  },
  {
    title: "Radio Creep",
    image: "https://i.pinimg.com/564x/8e/ed/67/8eed67a6a4506c5087611f64d54d8c5c.jpg",
    link:  "https://brayancorpse.github.io/Radio-Rock/",
    github:"https://github.com/BrayanCorpse/Radio-Rock"
  },
  {
    title: "P51",
    image: "https://i.pinimg.com/564x/6e/02/dc/6e02dcc6577cf737134123d8f03cafc6.jpg",
    link:  "https://www.p51.mx/index.html",
    github:"javascript:void(0);"
  }
];

let currentCardIndex = 0;

function showCurrentCard() {
  const card = cards[currentCardIndex];
  const titleElement = document.querySelector(".title");
  const imageElement = document.querySelector(".image");
  const linkElement = document.querySelector(".link");
  const githubElement = document.querySelector(".github");
  
  titleElement.textContent = card.title;
  imageElement.style.backgroundImage = `url(${card.image})`;
  linkElement.setAttribute("href", card.link);
  githubElement.setAttribute("href", card.github);
}

function showPrevCard(event) {
  event.preventDefault();
  currentCardIndex--;
  if (currentCardIndex < 0) {
    currentCardIndex = cards.length - 1;
  }
  showCurrentCard();
}

function showNextCard(event) {
  event.preventDefault();
  currentCardIndex++;
  if (currentCardIndex >= cards.length) {
    currentCardIndex = 0;
  }
  showCurrentCard();
}

const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

prevButton.addEventListener("click", showPrevCard);
nextButton.addEventListener("click", showNextCard);

showCurrentCard();

</script>
@endpush
