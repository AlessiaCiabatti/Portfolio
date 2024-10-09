const swiperEl = document.querySelector('swiper-container')
Object.assign(swiperEl, {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    clickable: true,
  },
  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
swiperEl.initialize();

// richiama la classe
const outputWork = document.querySelector('.mySwiper')
// crearre array di oggetti con le info di work section
const workSection = [
  {
    video: 'https://player.vimeo.com/video/1011769556?h=f0faccecfb',
    title: 'Deliveboo - Final Project',
    description: ['/img/icone_img/laravell.png', '/img/icone_img/vue.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011757860?h=3633b7520a',
    title: 'Boolflix',
    description: ['/img/icone_img/vue.png', '/img/icone_img/vite.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011758131?h=4b8b850f7e',
    title: 'FruitVibes',
    description: ['/img/icone_img/figma.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011761737?h=a6da8d0cd3',
    title: 'My Disc',
    description: ['/img/icone_img/php.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011771539?h=417998d270',
    title: 'Interactive Headphones Carousel',
    description: ['/img/icone_img/figma.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772144?h=d9708538c6',
    title: 'AirBnB',
    description: ['/img/icone_img/figma.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772119?h=4f89fcccf5',
    title: 'Rick & Morty',
    description: ['/img/icone_img/vue.png', '/img/icone_img/vite.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772926?h=d5cdac3261',
    title: 'Whatsapp',
    description: ['/img/icone_img/javascript.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772892?h=50dc28194f',
    title: 'Responsive Dashboard',
    description: ['/img/icone_img/html.png', '/img/icone_img/css.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772865?h=5b5bd8ad23',
    title: 'Interactive Pizza Carousel',
    description: ['/img/icone_img/figma.png']
  },
  {
    video: 'https://player.vimeo.com/video/1011772838?h=cb2e88c454',
    title: 'My Vacation Journal',
    description: ['/img/icone_img/php.png']
  },
];


for (let work of workSection) {
  // Genera le immagini di descrizione
  // const descriptionImages = work.description.map(img => `<img src="${img}" alt="Icona" style="width: 30px; margin-right: 5px;">`).join('');

  // Aggiungi la slide al container Swiper
  outputWork.innerHTML += `
  <swiper-slide><iframe title="vimeo-player" src="${work.video}" width="640" height="360" frameborder="0" allowfullscreen></iframe></swiper-slide>
  `;
}