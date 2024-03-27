const images = [
    'img/helikopter.png',
    'img/flower.png',
    'img/Roboramie.png',
    'img/Puller.png',
    'img/smieciarka.png',
    'img/pingwin.png'
];

let currentIndex = 0;
const imageContainer1 = document.querySelector('.karuzela1');
const imageContainer2 = document.querySelector('.karuzela2');

console.log(imageContainer1);
console.log(imageContainer2);

function changeImage() {
imageContainer1.style.backgroundImage = `url(${images[currentIndex]})`;
imageContainer2.style.backgroundImage = `url(${images[(currentIndex+3)]})`;
currentIndex = (currentIndex + 1) % 3;
}

// Uruchamiamy funkcję zmiany obrazka co 3 sekundy
setInterval(changeImage, 3000);

// Wywołujemy funkcję zmiany obrazka po załadowaniu strony
changeImage();

