$("document").ready(function() {

    showDiv(slideIndex);

    $(".swipeLeft").click(function() {
        plusDiv(-1);
    });

    $(".swipeRight").click(function() {
        plusDiv(1);
    });
});


// auxilary functions to display div
var slideIndex = 1;
function showDiv(n) {
  var i;
  var x = document.getElementsByClassName("slide");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}


function plusDiv(n) {
  showDiv(slideIndex += n);
}

function currentDiv(n) {
  showDiv(slideIndex = n);
}
