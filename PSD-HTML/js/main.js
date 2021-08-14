// Slideshow

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
    var slides = document.getElementsByClassName("testimonial");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}



// Video Popup
window.document.onkeydown = function(e) {
if (!e) {
    e = event;
}
if (e.keyCode == 27) {
    lightbox_close();
}
}

function lightbox_open() {
    var lightBoxVideo = document.getElementById("VisaChipCardVideo");
    // window.scrollTo(0, 0);
    document.getElementById('light').style.display = 'block';
    document.getElementById('fade1').style.display = 'block';
    lightBoxVideo.play();
}

function lightbox_close() {
var lightBoxVideo = document.getElementById("VisaChipCardVideo");
document.getElementById('light').style.display = 'none';
document.getElementById('fade1').style.display = 'none';
lightBoxVideo.pause();
}


// 
var newCarBtn = document.getElementById('new-car');
var usedCarBtn = document.getElementById('used-car');
var partsBtn = document.getElementById('parts');

function changebtn(n){
    if(n===1){
        newCarBtn.classList.add('active');
        usedCarBtn.classList.remove('active');
        partsBtn.classList.remove('active');
    }
    else if(n===2){
        newCarBtn.classList.remove('active');
        usedCarBtn.classList.add('active');
        partsBtn.classList.remove('active');
    }
    else if(n===3){
        newCarBtn.classList.remove('active');
        usedCarBtn.classList.remove('active');
        partsBtn.classList.add('active');
    }
}