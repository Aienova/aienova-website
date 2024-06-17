

<main>


<?php

/*----------ROUTING SYSTEM-----------*/
/*
$rout=0;

if(isset($_GET['cpn'])){

    $rout=1;

}

*/

?>


<?php  include "./app/functions.php"  ?>
<?php  include "./app/menu.php"  ?>



<div id="fonctionnal">
<?php  include "./app/card.php"  ?>

<?php  include "./app/panel.php"  ?>
</div>




<?php /* if(isset($_GET['cpn'])!=NULL){  ?>

<script>
 
$.ajax({
               url : './app/components/<?php echo $_GET['cpn']; ?>/layout.php',
               type : 'post',
               success: function(data) {
         
                 
                $('#panel').html(data);
               },
               error: function() {
                $('#panel').text('An error occurred');
               }
           });
         

           </script>

    <?php
} */
?>


      

</main>