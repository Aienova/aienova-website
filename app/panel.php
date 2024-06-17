

<div id="panel">


</div>


<script>





$.ajax({



  <?php






if (isset($page) ) {

    if(isset($category)){


      $target="./app/components/".$category."/".$page.".php";


    }else{

      $target="./home.php";

    }

} 


else {

  if(isset($category)){


    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
  
    $page=$uri_segments[2];


    $target="./././app/components/".$category."/".$page.".php";


  }else{

    $target="./home.php";

  }





    
  }
  







?>


      url : '.<?php echo $target; ?>',
      type : 'post',
      success: function(data) {

        
       $('#panel').html(data);
      },
      error: function() {
       $('#panel').text('Erreur au niveau du panel');
      }




  });




</script>


