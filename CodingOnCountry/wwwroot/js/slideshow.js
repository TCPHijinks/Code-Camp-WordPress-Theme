var slideIndex = 1;
var imageClass;

function displayShow(i){
    slideIndex = i;
    showSlide(slideIndex);
    var x = document.getElementById("slideshow");
    x.style.display = 'block';
    
}

function getClass(c){
    imageClass = document.getElementsByClassName(c);
}


function iterate(n){
    showSlide(slideIndex += n);
}

function showSlide(n){
    var i;
    var x = imageClass;
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block"; 

}

function blurInput(item) {
    document.getElementById(item).blur();
  }

function closeShow() {
    var x = document.getElementById("slideshow");
    x.style.display = 'none';
    
}