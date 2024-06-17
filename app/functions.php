


<?php



function Showdata($data){



    if($data==NULL){


        $data="Data unavaible";


    }



    $message="<div class='message'><h1>Showdata function return :<h1><h2>".$data."</h2></div>";

    


    print_r($message) ;
}



function Actions($id,$target){


    $actions="
    

    <td>
  
    <img onclick='navto(\"".$target."\",".$id.")' id='see-".$id."' data-id='".$id."' class='white-image pictos' src='./src/icon/eye.png'/>
    <img type='image' onclick=navto(delete/".$id.") id='delete-'".$id." data-id='".$id."' class='white-image pictos' src='./src/icon/delete.png'/> 
    <img type='image' onclick=navto(print/".$id.") id='print-'".$id." data-id='".$id."' class='white-image pictos' src='./src/icon/print.png'/>
 
    
    </td>

    ";




    echo $actions;
 



}


function Actions_a($id,$target){


    $actions="<td><a href='?cpn=".$target."&id=".$id."'>
    <img id='see-".$id."' class='white-image pictos' src='./src/icon/eye.png'/></a> 
    <a href='delete/".$id."'><img id='delete-'".$id." class='white-image pictos' src='./src/icon/delete.png'/></a>
    <a href='print/".$id."'><img id='print-'".$id." class='white-image pictos' src='./src/icon/print.png'/></a>
    </td>";


    echo $actions;

}


function Update_data($id,$component,$where,$respond){

    
    include 'database.php';
    $query="UPDATE ".$component." SET ".$where." = ".$respond." WHERE id=".$id;
    Showdata($query);
    $request = $database->prepare($query);
    $request->execute();


}



function Respond($id,$component,$validation,$title,$message,$column){




    echo "<h2>".$title."</h2>";

    echo "<p>".$message."</p>";

    echo "
    
    
    <form id='".$column."-".$id."' method='POST' action=''>


    <input type='hidden' name='id' id='identifiant' value='".$id."'></input>

    <input type='hidden' id ='component' name='component' value='".$component."'></input>

    <input id='respond' type='number' name='".$column."' value='0'></input>

    <input id='".$column."-".$id."' type='submit' value='".$validation."'/>
    
    
    </form>

    <div id='sent'></div>




    <script>

    $(document).ready(function() { 
    
    $('#".$column."-".$id."').ajaxForm(function() { 

        var respond = $('#respond').val();
        var component = $('#component').val();
        var id = $('#identifiant').val();


        $.ajax({

            type : 'post',
            url : './app/components/".$component."/submit.php',
            data: { respond : respond, id : id , component : component},
          
            success: function(data) {
      
              
             $('#sent').html(data);
            },
            error: function() {
             $('#panel').text('An error occurred');
            }
        });
          


    }); 
});
    </script>


    
    ";




}






function Estimate_table($dataname,$component,$size){

    include 'database.php';

    $column1="id";
    $column2="nom";
    $column3="service";
    $column4="etat de la demande";
    $column5="montant";
    $column6="vos actions";
    $title="La liste de vos devis";

    $query="SELECT ".$dataname." FROM ".$component;




    $request = $database->prepare($query);

    $request->execute();

    echo "<table>
    <thead>
        <tr>
            <th>".$title."</th>
        </tr>


        <tr id='columns'>

       <td>".$column1."</td>
       <td>".$column2."</td>
       <td>".$column3."</td>
       <td>".$column4."</td>
       <td>".$column5."</td>
       <td>".$column6."</td>


        </tr>




    </thead>
    <tbody>";
        
    while ($data = $request->fetch()){





            echo " <tr class='values' data='".$data['id']."' >";


            for($i=0; $i<$size;$i++){


                echo "<td>".$data[$i]."</td>";
            }
          


            Actions($data["id"],$component);
        
        
           echo "</tr>";
        
        
        





    }

    echo "</tbody></table>";
  

    
}


function Estimate_consult($dataname,$component,$id){


    include 'database.php';

    
    $query="SELECT ".$dataname." FROM ".$component." Where id=".$id;

    $query2="SELECT COUNT(".$dataname.") as total FROM ".$component;


    $request = $database->prepare($query);
    $request->execute();

    $request2 = $database->prepare($query2);
    $request2->execute();


    $title="Devis n°".$id;


    echo "<h2>".$title."</h2>";
 

    echo "<ul>";

    $data=$request->fetch();

    $data2=$request2->fetch();


    for ($i=0;$i<5;$i++){

        
    echo "<li>DATA :".$data[$i]."</li>";

    }

            echo "</ul>";


            Respond($id,$component,"Votre montant","Montant du devis :","Donner un montant à ce devis ","amount");




    


}

  

/*
function selectdatawhere($dataname,$component,$where){

    $query="SELECT ".$dataname." FROM ".$component."WHERE".;

    $request = $database->prepare($query);

    $request->execute();

    while($data = $request->fetch()){


        return $fetch;

        
    }

    
}
*/

?>