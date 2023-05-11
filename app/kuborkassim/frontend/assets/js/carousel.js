
let slideIndex = [0,0];
showSlides(1,0);
showSlides(1,1);

function plusSlide(n, no) { //n is current slideIndex, no refers to which carousel
    showSlides(slideIndex[no], no); 
}

function currentSlide(n, no) {
    showSlides(slideIndex[no] = n, no);
}

function showSlides(n, no) { //n is current slide index, no refers to carousel
    let i;
    let slides = document.getElementsByClassName("mySlides" + (no+1)); //get carousel
    let dots = document.getElementsByClassName("dot" + (no+1));
    if (n == slides.length) {slideIndex[no] = 0}    
    if (n < 0) {slideIndex[no] = slides.length} 
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex[no]++;
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex[no]-1].style.display = "flex";
    dots[slideIndex[no]-1].className += " active";
}


