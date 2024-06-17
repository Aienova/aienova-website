<?php

$fileList = glob('./src/styles/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo '<link rel="stylesheet" href=".'.$filename.'">'; 
    }   
}
?>