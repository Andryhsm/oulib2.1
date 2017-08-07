    
<?php
   /* Rencoyer le code par email*/

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
   
    $email = $_POST["email"];
    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "CODE D'INSCRIPTION";


    $message = "<html><head><title></title></head><body><p>Voici votre code d'inscription pour l'application oulib : </p><br><p><Mot de passe : </b><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";


    if(mail($destinataire, $sujet, $message, $headers))
    {
        echo json_encode($code_aleatoire);
    }else{
        echo "Impossible de renvoyer le code !";
        }

?>