let screenWidth = window.screen.width;
console.log(screenWidth);
let hamburgerIcon = document.querySelector('.hamburgerIcon');
let nav = document.querySelector('nav');
let closeButton = document.getElementById('krzyzyk');
let zajeciaLink = document.getElementById('zajecia');
let submenu = document.querySelector('.submenu');
let divBlur = document.querySelector('.blur');

if (screenWidth < 1000){
  hamburgerIcon.addEventListener('click', function () {
    nav.classList.add('active');
    hamburgerIcon.style.display=('none');
    submenu.style.display=('none');
    divBlur.classList.remove('hide');
    
  });

  closeButton.addEventListener('click', function () {
    nav.classList.remove('active');
    hamburgerIcon.style.display=('block');
    divBlur.classList.add('hide');
  });

  // Obsługa rozwinięcia submenu
  zajeciaLink.addEventListener('click', function (event) {
    event.preventDefault();
    if (submenu.style.display== 'none'){
      submenu.style.display=('block');
    }else{
      submenu.style.display=('none');
    }
  });

}
    


    