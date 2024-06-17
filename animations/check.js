$(document).ready(function(){

    var win = $(window);
        


    win.on('scroll',function (){
     var a=$("#aboutme").position();
     var b=$("#services").position();
     var c=$("#customers").position();
     var d=$("#contactme").position();

            


    if(win.scrollTop()>=a.top-50 && win.scrollTop()<b.top-50){

    $( "#part1" ).addClass("navigate");
    $( "#part2" ).removeClass("navigate");
    $( "#part3" ).removeClass("navigate");
    $( "#part4" ).removeClass("navigate");

    }

    
    if(win.scrollTop()>=b.top-50 && win.scrollTop()<c.top-50){

        $( "#part1" ).removeClass("navigate");
        $( "#part2" ).addClass("navigate");
        $( "#part3" ).removeClass("navigate");
        $( "#part4" ).removeClass("navigate");
        }


        if(win.scrollTop()>=c.top-50 && win.scrollTop()<d.top-50){

            $( "#part1" ).removeClass("navigate");
            $( "#part2" ).removeClass("navigate");
            $( "#part3" ).addClass("navigate");
            $( "#part4" ).removeClass("navigate");
            }

            if(win.scrollTop()>=d.top-50){

                $( "#part1" ).removeClass("navigate");
                $( "#part2" ).removeClass("navigate");
                $( "#part3" ).removeClass("navigate");
                $( "#part4" ).addClass("navigate");
                }



});


    });
