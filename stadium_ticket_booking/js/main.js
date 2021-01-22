const navbar=document.querySelector("nav");
const navbtn=document.querySelector("#nav-btn");
const closebtn=document.querySelector("#close-btn");
const sidemenu=document.querySelector("#sidebar");
const sidenavbtn=document.querySelector(".sidebar-links");

window.addEventListener("scroll", function(){
    if(pageYOffset>70){
        navbar.classList.add("navbar-fixed");
    }
    else{
        navbar.classList.remove("navbar-fixed");
    }
});

navbtn.addEventListener("click", function(){
    sidemenu.classList.add("show-sidebar");
});
closebtn.addEventListener("click", function(){
    sidemenu.classList.remove("show-sidebar");
});
sidenavbtn.addEventListener("click", function(){
    sidemenu.classList.remove("show-sidebar");
});