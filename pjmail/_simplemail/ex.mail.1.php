<?php
// inclusion de la source de la classe
include('class.mail.php');
echo "prepare l'envoye";
// creation de l'instance
$mail = new simplemail;
//ajout du destinataire
$mail -> addrecipient('fenoheriniainat@gmail.com','tetsuo');
// ajout de l'expediteur
$mail -> addfrom('fenoheriniainat@gmail.com.com','gwbush');
//ajout du sujet
$mail -> addsubject('Un sujet de test');
// le message plaintext

$mail -> text = 'plain text etc. etc. bla bla ...';
// envoie du message
if ( $mail -> sendmail() ) { echo "envoyé"; } else { echo "erreur"; echo $mail->error_log; }

?>
