
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../plugin/PHPMailer/src/Exception.php';

require '../plugin/PHPMailer/src/PHPMailer.php';
require '../plugin/PHPMailer/src/SMTP.php';


/*----MAIL FOR FREELANCER  ----*/

$signature='<div class="default-style"> </div>
<table id="Tableau_01" style="border-collapse: collapse; height: 96px;" border="0" width="413" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 0px;"><a href="https://aienova.com/"><img style="width: 240px; height: 72px;" src="https://aienova.com/signature.jpg" alt="" width="240" height="72" /></a></td>
<td style="padding: 0px;">
<div class="default-style"><strong>Contact</strong></div>
<div class="default-style"><span style="font-size: 8pt;">Mail de contact</span></div>
<div class="default-style"><span style="font-size: 8pt;"><a>06 66 33 60 80</a></span></div>
<div class="default-style"><span style="font-size: 8pt;"><strong><a href="mailto:contact@aienova.com">contact@aienova.com</a></strong></span></div>
</td>
</tr>
</tbody>
</table>';


$mail = new PHPMailer(true);
$mail ->isSMTP();
$mail->CharSet = 'UTF-8';
$mail ->Host = 'smtp.ionos.fr';
$mail ->SMTPAuth = true;
$mail ->Username = 'contact@aienova.com';
$mail ->Password = '02Something&!';
$mail ->SMTPSecure = 'ssl';
$mail ->Port = 465;

$mail ->setFrom('contact@aienova.com');

$mail ->addAddress('eudes.konda@aienova.com');

$mail ->isHTML(true);

$mail ->Subject = " Aienova : Demande client de ".$_POST["lastname"]." le ".date('d-m-Y-h-i-s');

$mail ->Body = "<p>Vous avez reçu une demande d'un visiteur de votre site web, voici ses inforamtions :<p>

<ul>
<li><strong>Nom :</strong>".$_POST["lastname"]."</li>
<li><strong>Prénom :</strong>".$_POST["firstname"]."</li>
<li><strong>Numéro téléphone :</strong>".$_POST["phone"]."</li>
<li><strong>Email :</strong>".$_POST["email"]."</li>
<li><strong>Profession :</strong>".$_POST["job"]." </li>
<li><strong>Ses besoins :</strong>".$_POST["need"]."/".$_POST["need-crea"]."/".$_POST["need-app"]." </li>
<strong>Son message :</strong></br>".$_POST["message"]." </li>

</ul>

<br><br>Bien cordialement<br><br>




".$signature;

$mail->send();




/*----MAIL FOR Customer ----*/

$mail2 = new PHPMailer(true);
$mail2 ->isSMTP();
$mail2->CharSet = 'UTF-8';
$mail2 ->Host = 'smtp.ionos.fr';
$mail2 ->SMTPAuth = true;
$mail2 ->Username = 'contact@aienova.com';
$mail2 ->Password = '02Something&!';
$mail2 ->SMTPSecure = 'ssl';
$mail2 ->Port = 465;

$mail2 ->setFrom('contact@aienova.com');

$mail2 ->addAddress($_POST["email"]);

$mail2 ->isHTML(true);

$mail2 ->Subject = " Aienova : Votre demande a été prise en compte ";


$mail2 ->Body = "

<h1>Merci de faire confiance à Aienova</h1>


<p>J'ai bien reçu votre demande, je vous recontacterai dans les plus brefs délais pour tout autres informations , n'hésitez pas à consutler mon site web <a href='aienova.com'>aienova.com</a><p>


<br><p>Bien cordialement,</p>



".$signature;

$mail2->send();


echo "Votre demande a bien été envoyé à votre email ".$_POST['email'];


/*


<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../eextensions/PHPMailer/src/Exception.php';
require '../eextensions/PHPMailer/Exception.php';
require '../eextensions/PHPMailer/SMTP.php';



$mail = new PHPMailer(true);
$mail ->isSMTP();
$mail ->Host = 'smtp.ionos.fr';
$mail ->SMTPAuth = true;
$mail ->Username = 'contact@aienova.com';
$mail ->Password = '02Something&!';
$mail ->SMTPSecure = 'ssl';
$mail ->Port = 465;

$mail ->setFrom('contact@aienova.com');

$mail ->addAddress($_POST["email"]);

$mail ->isHTML(true);

$mail ->Subject = " Aienova : Demande client ".date();

$mail ->Body = "<p>Vous avez reçu une demande d'un visiteur de votre site web, voici ses inforamtions :<p>

<ul>
<li><strong>Nom :</strong>".$_POST["lastname"]."</li>
<li><strong>Prénom :</strong>".$_POST["firstname"]."</li>
<li><strong>Numéro téléphone :</strong>".$_POST["phone"]."</li>
<li><strong>Profession :</strong>".$_POST["job"]." </li>
<li><strong>Ses besoins :</strong>".$_POST["need"]." </li>

</ul>


<strong>Son message :</strong></br>".$_POST["message"]." </li>



";

$mail->send();


echo "Votre demande a bien été envoyé à votre email ".$_POST['email'];






?>


*/

?>


