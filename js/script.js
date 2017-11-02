var modal = document.getElementById('myModal');
var btn = document.getElementById('openModal');
var span = document.getElementsByClassName('close')[0];


$(document).ready(function() {
  $('#openModal').click(function() {
    $('.modal').css("display", "block");
  })

  $('span.close').click(function() {
    $('.modal').css("display", "none");
  })

  $(window).click(function(event) {
    var target = $(event.target);
    if (target.is('.modal')) {
      $('.modal').css("display", "none");
    }
  })

  $(window).on('load', function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(1000).css({'overflow':'visible'});
})
})
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// span.onclick = function() {
//   modal.style.display = "none";
// }
//
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
