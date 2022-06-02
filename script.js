const img = document.getElementById('carousel');
const rightBtn = document.getElementById('right-btn');
const leftBtn = document.getElementById('left-btn');

var pictures = ["./images/carouselUn.jpg",
  "./images/carouselDeux.jpg",
  "./images/carouselTrois.jpg",
  "./images/carouselQuatre.jpg"];

img.src = pictures[0];
let position = 0;

const moveRight = () => {
  if (position >= pictures.length - 1) {
    position = 0
    img.src = pictures[position];
    return;
  }
  img.src = pictures[position + 1];
  position++;
}

const moveLeft = () => {
  if (position < 1) {
    position = pictures.length - 1;
    img.src = pictures[position];
    return;
  }
  img.src = pictures[position - 1];
  position--;
}

rightBtn.addEventListener("click", moveRight);
leftBtn.addEventListener("click", moveLeft);

function slideUn() {
  var elmnt = document.getElementById("itemUn");
  elmnt.scrollIntoView();
}

function slideDeux() {
  var elmnt = document.getElementById("itemCinq");
  elmnt.scrollIntoView();
}

function slideTrois() {
  var elmnt = document.getElementById("itemQuatre");
  elmnt.scrollIntoView();
}

function slideQuatre() {
  var elmnt = document.getElementById("present");
  elmnt.scrollIntoView();
}