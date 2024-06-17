$(document).ready ( function () {
$("#right-arrow").click(function(){

    var scrolling = $( "#carousel-customer" ).data( "position" )+200;

      console.log("Client précédent");
      $("#carousel-customer").animate({scrollLeft: scrolling}, 800);

      console.log("scroll:"+scrolling);

      $( "#carousel-customer" ).data('position',scrolling);


  
    });



    $("#left-arrow").click(function(){

      var scrolling = $( "#carousel-customer" ).data( "position" )-200;

      console.log("Client précédent");
      $("#carousel-customer").animate({scrollLeft: scrolling}, 800);

      
      console.log("scroll:"+scrolling);

      $( "#carousel-customer" ).data('position',scrolling);
  });
});
  
  