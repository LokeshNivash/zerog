// $(document).ready(function () {
//     $(".menu-btn").click(function () {
//         $(".navbar .menu").toggleClass(".active");
//         $(".menu-btn i").toggleClass(".active");
//     });


// })

function classToggle() {
    const navs = document.querySelectorAll('.menu')
    
    navs.forEach(nav => nav.classList.toggle('active'));
  }
  
  document.querySelector('.menu-btn')
    .addEventListener('click', classToggle);





const load = document.querySelector(".loader");
window.addEventListener("load", function () {
  load.style.display = "none";
});





