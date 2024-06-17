$(document).ready(function () {
 
    $('form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: './app/sendmail.php',
            type: 'post',
            data:$('form').serialize(),
            success: function(data) {

      
                $('#notification').html(data);
               },
               error: function() {
                $('#notification').text('Erreur au niveau du menu');
               }
        });
    });



});