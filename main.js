const logo = document.querySelector('.containerburger');
const menu = document.querySelector('.menuburger-wrapper');
const closeBtn = document.querySelector(".close-button");




logo.addEventListener('click', function(){
  
    menu.classList.add('showmenuburger');
} );


closeBtn.addEventListener("click", ()=>{
    menu.classList.remove('showmenuburger');
});
