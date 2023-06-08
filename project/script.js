// menü düğmesine tıklama veya sayfa kaydırma olayları gerçekleştiğinde menü düğmesi ve gezinme çubuğunun görünümünü değiştirme işlemi
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
//Swiper kütüphanesini kullanarak kaydırma slaytı oluşturduk.
var swiper = new Swiper(".home-slider", {
  //Slaytın sonsuz döngü içinde dönmesini sağlarız. 
    loop:true,
    //slaytlar arası gezinme sağlar
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
});

/*Daha Fazla Yükle düğmesine tıklanıldığımızda paket kutularını aşamalı olarak yükler ve 
daha fazla kutu kalmadığında düğmenin gizlenmesini sağlar.*/
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem =3;

loadMoreBtn.onclick =() =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')]
    for (var i = currentItem; i < currentItem +3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem+= 3;
    if(currentItem>= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
  // btn1 düğmesini seçme
  var btn1 = document.querySelector('.btn1');

  // btn1 düğmesine tıklandığında yönlendirme işlemi
  btn1.addEventListener('click', function() {
    window.location.href = 'oturum.html';
  });
});

