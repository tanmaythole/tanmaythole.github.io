// Preloader
var loader = document.querySelector(".preloader")
window.addEventListener("load", vanish);

function vanish() {
    loader.style.display = 'none';
    document.getElementById("begin_body").style.display = "block";
    AOS.init();
  }


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



var onePageClick = function() {


  $(document).on('click', '.nav-link a[href^="#"]', function (event) {
    event.preventDefault();

    var href = $.attr(this, 'href');

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 80
    }, 500, function() {
      // window.location.hash = href;
    });
  });

};

onePageClick();




// =======================
//  Show/Remove SideBar
// =======================
sidebarbtn.addEventListener("click", function(e){
    sidebar.classList.add("show-sidebar");
});

closebtn.addEventListener("click", function(e){
    sidebar.classList.remove("show-sidebar");
});

function removesidebar(){
    sidebar.classList.remove("show-sidebar");
}

// Typed text
var typed = new Typed('.typed',{
    strings: ['Engineer', 'Web Developer', 'Competitive Programmer','Full-Stack Enthusiast', 'Learner', 'Freelancer'],
    typeSpeed: 70,
    backSpeed: 20,
    loop: 1,
    smartBackspace: 1
});







// // =========================
// //     Back To Top Button
// // =========================
var backtotop = document.querySelector('.back-to-top-btn');

window.onscroll = function(){
    if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){
        backtotop.style.display = "block";
    }
    else{
        backtotop.style.display = "none";
    }
}

backtotop.addEventListener('click', function(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});



var modalInfo = {
    1: {
      title: "Online Stadium Ticket Booking System",
      info: "Created Online Stadium Ticket Booking System using CRUD operations. In which user can book live match tickets and admin approves the tickets as well as manages the data. It is Relational Database academics mini-project which completed by 4 members of team including me.",
      link: "https://github.com/tanmaythole/stadium_ticket_booking_system",
      github: "https://github.com/tanmaythole/stadium_ticket_booking_system"
    },
    2: {
      title: "IPL Data Analysis",
      info: "Web Based Machine Learning Project. Created IPL Data analysis, which analyze data from previous records and predict the team had a greater chance to win.",
      link: "https://github.com/tanmaythole/IPL-Data-Analysis",
      github: "https://github.com/tanmaythole/IPL-Data-Analysis"
    },
    3: {
      title: "Image Resolution",
      info: "...",
      link: "#",
      github: "#"
    },
    4: {
      title: "Discussion Forum",
      info: "....",
      link: "#",
      github: "#"
    },
    5: {
      title: "Portfolio",
      info: "...",
      link: "https://tanmaythole.github.io/portfolio",
      github: "#"
    },
    6: {
      title: "Desktop Virtual Assistant",
      info: "...",
      link: "#",
      github: "#"
    },
    7: {
      title: "New Words Detector",
      info: "...",
      link: "#",
      github: "#"
    },
    8: {
      title: "E-commerce Website",
      info: "...",
      link: "#",
      github: "#"
    },
    9:{
      title: "Kal Tak News",
      info: "A News Aggregator Web App in ReactJs with NewsApi.org.",
      link: "https://kal-tak-news.vercel.app",
      github: "https://github.com/tanmaythole/Kal-Tak-News"
    },
    10:{
      title: "Text Utils",
      info: "TextUtils is a word counter and a character counting utility which can be used to manipulate your text in the way you want. You can remove punctuations, convert your text Uppercase.",
      link: "https://text-utils-three.vercel.app",
      github: "https://github.com/tanmaythole/TextUtils"
    }
  };
  
  // Get the modal
  var modal = document.getElementById('preview');
  
  // button that opens the modal
  var btn = document.getElementsByClassName("button1");
  
  // <span> that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // open modal 
  for(let i = 0; i < btn.length; i++){

    btn[i].addEventListener("click", function(e) {
      var project = btn[i].parentElement;
      
      openModal(project);
    })
  };
  
  function openModal(project){
    var id = project.id;
    var img = project.getElementsByTagName("img")[0].src;
    fillOut(id, img);
    modal.style.display = "block";
    document.getElementsByClassName("modal-content")[0].classList.add("scale");
  }
  
  function fillOut(id, img){
    document.getElementById("title").innerHTML = modalInfo[id].title;
    document.getElementById("info").innerHTML = modalInfo[id].info;
    document.getElementById("img").src = img;
    document.getElementById("live").onclick = function(){
      window.open(modalInfo[id].link,'_blank');
    }
    document.getElementById("github").onclick = function(){
      window.open(modalInfo[id].github,'_blank');
    }
  }
  
  // close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }
  
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("myslide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
