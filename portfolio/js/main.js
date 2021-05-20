const navbar=document.querySelector("nav");
const sidebarbtn = document.querySelector(".bars");
const closebtn = document.querySelector(".close-btn");
const sidebar = document.querySelector("aside");
const sidenavbtn=document.querySelector(".sidebar-links a");

window.addEventListener("scroll", function(){
    if((window.pageYOffset > 70) && !sidebar.classList.contains("show-sidebar")){
        navbar.classList.add("navbar-fixed");
    }
    else{
        navbar.classList.remove("navbar-fixed");
    }
});


sidebarbtn.addEventListener("click", function(e){
    sidebar.classList.add("show-sidebar");
});

closebtn.addEventListener("click", function(e){
    sidebar.classList.remove("show-sidebar");
});

function removesidebar(){
    sidebar.classList.remove("show-sidebar");
}


const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    position: 'relative',
    duration: 2000,
    reset: true
})

sr.reveal('.container-info .seek, .container-info .name, .container-info .work', {})
sr.reveal('.container-info button', {delay: 200})
sr.reveal('.container-info .social-links a', {delay:300, interval:200})
sr.reveal('.container-info .pic', {delay: 400})


sr.reveal('.about .info .name, .about .info .seek, .about .info .details, .form h1', {})

sr.reveal('.project-boxes .box', {interval: 200})

sr.reveal('.skills h1, .projects h1, .skills h2', {})
sr.reveal('.skill', {interval:200})

srbot = ScrollReveal({
    origin: 'bottom',
    distance: '80px',
    position: 'relative',
    duration: 2000,
    reset: true
})

srbot.reveal('.form input, .form textarea, .form button',{interval:100})