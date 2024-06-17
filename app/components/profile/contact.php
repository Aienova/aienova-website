
<section id="article">



<div class="content">

<div class="bigtitle">
<h1>Contact</h1><h2>Vous souhaitez prendre rendez-vous ?</h2>
</div>

<div class="content">
<h2>Me Contacter </h2>

<p>Veuillez remplir ce formulaire afin d'enregsitrer votre demande, je vous recontacterai dans les plus bref délais :</p>


<div id="notification"></div>
    <form id="contactform" action="" method="POST" >


   <p class="flexible"> <input type="text" id="lastname" class="left-input" placeholder="Nom" name="lastname" value="" required/>   <input type="text" class="right-input" id="firstname" name="firstname" placeholder="Prénom" value="" required/> </p>


   <p> <input type="text" id="email" name="email" placeholder="Email" value="" required/>    </p>

   <p> <input type="text" id="telephone" name="phone" placeholder="Numéro de téléphone" value="" required/>    </p>

   <p> <strong>Vous êtes :</strong>
   
   <select name="job"> 

   <option>artisant(e)</option> 
   <option>avocat(e)/magistrat(e)</option> 
   <option>indépendant(e)</option> 
    <option>commerçant(e)</option> 
    <option>formateur(euse)/éducateur(trice)</option>
    <option>financier(ère)</option>
    <option>artiste</option>
    <option>cadre</option> 
    <option>fonctionnaire</option>
    <option>ingénieur</option>
    <option>influençeur(se)/blogueur(euse)</option>
    <option>autre</option>

                </select>

   <p> 

   <strong>De quoi avez-vous besoin ?</strong><br>
    
   <label id="need-website"><input type="checkbox"  name="need" value="0" checked/>Site web</label>    

   <label id="need-crea"><input type="checkbox" name="need-crea" value="1"/>Création graphique</label>    

   <label id="need-app"><input type="checkbox" name="need-app" value="2"/>Application Web</label>    


</p>




   <p> 
    
   <strong>Décrivez votre demande</strong><br>
   
   <textarea id="message" name="message"></textarea> </p>

    <input type="submit" id="send" value="Envoyer"/>



        </form>

        
        </div>

            





        </section>
        <script>

$( "header" ).removeClass("vanished");
  $( ".card" ).removeClass("vanished");

  $(document).ready(function () {
 
 $('#contactform').submit(function(e){
     e.preventDefault();
     $.ajax({
         url: './app/sendmail.php',
         type: 'post',
         data:$('form').serialize(),
         success: function(data) {

   
             $('#notification').html(data);
             $('#notification').addClass("popup");
               
             setTimeout(function() {

$('#notification').removeClass('popup');

},2500);



            },
            error: function() {
             $('#notification').text('Erreur au niveau du menu');
            }
     });
 });



});

    </script>

        
<?php  include "../../footer.php"  ?>
