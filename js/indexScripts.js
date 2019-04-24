$("document").ready( function() {

  $("#logo").click( function() {
      window.location.href = "index.html";
  });

  $("#main").load("php/homePage.php");


  //return to top icon functionality
  $(window).scroll(function(){
       if ($(this).scrollTop() > 300) {
           $("#returnToTop").fadeIn();
       } else {
           $('#returnToTop').fadeOut();
       }
   });
   $('#returnToTop').click(function(){
       $('html, body').animate({scrollTop : 0}, 400);
       return false;
   });

   $("#menuList li").click(function() {
       var page = this.id;
       $("#main").fadeOut('slow', function(){
           $("#main").load("php/"+page+".php", function(){
               $("#main").fadeIn('slow');
           });
       });
     $(".pressedState").removeClass("pressedState").addClass("idleState");
     $(this).removeClass("idleState");
     $(this).addClass("pressedState");
     toggleMenuView();
   });
});


function toggleMenuView() {
    barsMenu = document.getElementById("barsmenu");
    barsMenu.classList.toggle("change");
    var menuList = document.getElementById("menuList");
    if (menuList.className === "menuDesktopView") {
        menuList.className += " menuBlockView";
    } else {
        menuList.className = "menuDesktopView";
    }
}
