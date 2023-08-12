let counts=setInterval(updated);
let upto=0;

function updated(){
    var count= document.getElementById("counter");
    count.innerHTML=++upto;
    if(upto===1000)
    {
        clearInterval(counts);
    }
}

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
document.addEventListener("DOMContentLoaded", function() {
  const form1Btn = document.getElementById("form1Btn");
  const form2Btn = document.getElementById("form2Btn");
  const form3Btn = document.getElementById("form3Btn");

  const form1 = document.getElementById("form1");
  const form2 = document.getElementById("form2");
  const form3 = document.getElementById("form3");

  // Show Form 1 initially
  form1.classList.add("visible");

  form1Btn.addEventListener("click", function() {
      form1.classList.add("visible");
      form2.classList.remove("visible");
      form3.classList.remove("visible");
  });

  form2Btn.addEventListener("click", function() {
      form1.classList.remove("visible");
      form2.classList.add("visible");
      form3.classList.remove("visible");
  });

  form3Btn.addEventListener("click", function() {
      form1.classList.remove("visible");
      form2.classList.remove("visible");
      form3.classList.add("visible");
  });
});




