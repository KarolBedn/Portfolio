const div1 = document.querySelector('.pasekmenu');
const div2 = document.querySelector('.topbar');
const naglowek = document.querySelector('.naglowek');

function adjustDiv2Height() {
    const height = div1.clientHeight + div2.clientHeight;
    naglowek.style.height = window.innerHeight - height
}

  // Wywołaj funkcję na początku i podczas zmiany rozmiaru okna przeglądarki
  adjustDiv2Height();
  window.addEventListener('resize', adjustDiv2Height);



const images = [
            'img/naglowek1.jpg',
            'img/naglowek2.jpg',
            'img/naglowek3.jpg',
            'img/naglowek4.jpg',
            'img/naglowek5.jpg'
        ];

let currentIndex = 0;
const imageContainer = document.querySelector('.naglowek');

    function changeImage() {
        imageContainer.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length;
    }

        // Uruchamiamy funkcję zmiany obrazka co 3 sekundy
        setInterval(changeImage, 3000);

        // Wywołujemy funkcję zmiany obrazka po załadowaniu strony
        changeImage();

