
// Czekamy na załadowanie całej strony
window.addEventListener('load', function () {
    // Pobieramy div o klasie "napisynaglowka"
    const divNaglowka = document.querySelector('.napisynaglowka');
    
    // Sprawdzamy, czy div został znaleziony
    if (divNaglowka) {
        // Jeśli tak, to zmieniamy jego styl, aby stał się widoczny
        divNaglowka.style.opacity = '1';
        divNaglowka.style.transform = 'translateY(0)';
    }
});


let karnetykarnet = document.querySelectorAll('.hidden');
console.log(karnetykarnet)

let pokaz = () =>{
    karnetykarnet.forEach(karnet => {
        const triggerBottom = window.innerHeight * 1;
        console.log(triggerBottom)
        const boxTop = karnet.getBoundingClientRect().top;
        console.log(boxTop);
        if(boxTop < triggerBottom){
            karnet.classList.add('show');
        }
        else{
            karnet.classList.remove('show');
        }


    })

   
}


window.addEventListener('load', pokaz);
window.addEventListener('scroll',pokaz);



console.log(karnetykarnet);

