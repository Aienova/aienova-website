
<header class="flexible vanished">

<div id="burger-menu">

<div id="top-line" class="line"></div>
<div id="middle-line" class="line"></div>
<div id="low-line" class="line"></div>


</div>


<menu class="mobile-menu" >

<div class="container">
<a href="/"><img class="logo" src="../src/image/aienova.png"/></a>


<div class="flexible">
<ul id="menu-list">

<a href="/apropos"><li >A propos</li></a>
<li id="website" onclick="moveon(this)"  >Site web</li>
<li  id="uxui" onclick="moveon(this)" >Graphisme</li>
<li id="app" onclick="moveon(this)" >Application</li>
<li id="projects" onclick="moveon(this)" >Mes projets</li></a>
<a href="/contact"><li  id="contact" >Contact</li></a>





  </ul>




</div>



</div>

</menu>

<div id="blackout" onclick="moveon(this)"></div>
<div id="the-sub-menu">

</div>

<script>

function moveon(elem) {
    var id = $(elem).attr("id");

    
   


if ($(".open")[0]  ){


  $("#blackout").removeClass("open");
  var route = '../app/components/submenu/empty.php';
  


} else {


var route = '../app/components/submenu/'+id+'.php';
$("#blackout").addClass("open");
}

console.log(route);

$.ajax({
    url : route,
    type : 'post',
    success: function(data) {

      
     $('#the-sub-menu').html(data);
    },
    error: function() {
     $('#the-sub-menu').text('Erreur au niveau du menu');
    }
         });
      
  
}






</script>





</header>
 