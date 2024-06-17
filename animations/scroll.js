

// This is a functions that scrolls to #{blah}link
function goToByScroll(id) {
  // Remove "link" from the ID
  id = id.replace("link", "");
  // Scroll
  $('html,body').animate({
      scrollTop: $("#" + id).offset().top
  }, 'slow');

    console.log("scroll arrow");
}

$("#scrolldown1").click(function() {
  // Prevent a page reload when a link is pressed
  // Call the scroll function
  console.log("scroll1");
  goToByScroll("aboutme");
});

$("#scrolldown2").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll("services");
});



$("#scrolldown3").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll("customers");
});



$("#scrolldown4").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll("contactme");
});






$("#part1").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll($( "#part1" ).data( "id" ));
});



$("#part2").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll($( "#part2" ).data( "id" ));
});



$("#part3").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll($( "#part3" ).data( "id" ));
});


$("#part4").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll($( "#part4" ).data( "id" ));
});


$("#totop").click(function(e) {
  // Prevent a page reload when a link is pressed
  e.preventDefault();
  // Call the scroll function
  goToByScroll($( "#totop" ).data( "id" ));
});










  


  
  