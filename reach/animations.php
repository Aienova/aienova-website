<?php

$fileList = glob('./animations/*');
foreach($fileList as $filename){
    if(is_file($filename)){


        
        if(strpos($filename, '.js') !== false){
        echo '<script src=".'.$filename.'"></script>'; 

        }else{
            echo '<link rel="stylesheet" href=".'.$filename.'">'; 
    
            }





    }   
}
?>