<?php  



if ($_SERVER['REQUEST_URI']!="/home.php")  {
?>



<script>

$( "header" ).removeClass("vanished");
  $( ".card" ).removeClass("vanished");

    </script>



<?php
 



}



?>







<script>





  
$(document).ready ( function () {


if($(document).width() < 800){

console.log($(document).width());


$( "header" ).removeClass("vanished");
$( ".card" ).removeClass("vanished");

        }

      });

</script>

<script>

		// Animate loader off screen
		$("#loader").fadeOut("slow");;


    </script>



<footer>

<h3>Eudes Konda , UX/UI Designer - Développeur Web</h3>

<p><strong>SIREN :</strong><span>910925791</span>  |  <strong>Téléphone : </strong> <span>06 66 33 60 80</span> |  <strong>Email : </strong> <span>contact@aienova.com</span></p>

 <strong>Me suivre :</strong><br>

 <a target="_blank" href="https://www.behance.net/Eudes_Konda"><img class="social" src="../src/icon/behance.png"/></a> 
 
 <a target="_blank" href="https://www.linkedin.com/in/eudes-konda-2a902565/"><img class="social" src="../src/icon/linkedin.png"/></a>    
 
 <a target="_blank" href="https://github.com/Aienova"><img class="social" src="../src/icon/github.png"/></a>





</footer>