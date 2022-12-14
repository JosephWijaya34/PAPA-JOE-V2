import './bootstrap';
import 'flowbite';



import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// slider
// let defaultTransform = 0;
// function goNext() {
//     defaultTransform = defaultTransform - 398;
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// next.addEventListener("click", goNext);
// function goPrev() {
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//     else defaultTransform = defaultTransform + 398;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// prev.addEventListener("click", goPrev);

// active
var selector = '.nav li a';
// var selector = document.querySelectorAll('nav ul li a');

$(selector).on('click', function(){
    $(selector).removeClass('md:text-gray-700');
    $(selector).removeClass('md:text-papa-merah-200 ');
    $(this).addClass('md:text-papa-merah-200');
});
