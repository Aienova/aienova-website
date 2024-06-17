





$(document).ready ( function () {
$("#burger-menu").click(function(){


  if ($("#burger-menu").hasClass("burger-menu-open")) {


    console.log("menu mobile fermée");
    $("#top-line").removeClass("rotate-right");
    $("#middle-line").removeClass("transparent");
    $("#low-line").removeClass("rotate-left");
    $("#burger-menu").removeClass("burger-menu-open");
    $(".mobile-menu").removeClass("mobile-menu-open");


  


  }else{


    console.log("menu mobile ouvert");
    $("#top-line").addClass("rotate-right");
    $("#middle-line").addClass("transparent");
    $("#low-line").addClass("rotate-left");
    $("#burger-menu").addClass("burger-menu-open");
    $(".mobile-menu").addClass("mobile-menu-open");
  



  }







});

/*
  $.ajax({
    url : './app/components/'+_url+'/layout.php'+parameter,
    type : 'post',
    success: function(data) {

      
     $('#panel').html(data);
    },
    error: function() {
     $('#panel').text('An error occurred');
    }
});



*/

              


              
        

          










  
});

