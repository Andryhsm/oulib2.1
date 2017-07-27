<?php
        
    require "../cnx.php";

    header("Content-Type: text/html; charset: utf-8");
    $post = json_decode(file_get_contents("php://input"));
  

    $code_aleatoire = rand(10000, 99999);

    $nom = addslashes(utf8_decode($post->nom));
    $prenom = addslashes(utf8_decode($post->prenom));
    $motdepasse = addslashes(utf8_decode($post->motdepasse));
    $motdepasse2 = addslashes(utf8_decode($post->motdepasse2));

    $telephone= addslashes(utf8_decode($post->telephone));
    $adressecabinet= addslashes(utf8_decode($post->adressecabinet));
    $codepostal= addslashes(utf8_decode($post->codepostal));
    $ville= addslashes(utf8_decode($post->ville));
    $finess= addslashes(utf8_decode($post->finess));
    $typesoin= $post->typesoin;
    $intervention= addslashes(utf8_decode($post->intervention));
    
    $data = $post->image;
    $longueur = sizeof($typesoin);

    $email = addslashes(utf8_decode($post->email));
    $latLong = $post->latLong;

    $date = Date("Y-m-d");
    $date = explode("-", $date);

    $heure = Date("H:i:s");
    $heure = explode(":", $heure);

    $dateJ = $date[0]."".$date[1]."".$date[2]."_".$heure[0]."".$heure[1]."".$heure[2];

    if(in_array("Tout", $typesoin))
    {
        $typesoin1 = utf8_decode("Cicatrisation");
        $typesoin2 = utf8_decode("Perfusion");
        $typesoin3 = utf8_decode("Stomathérapie");
        $typesoin4 = utf8_decode("Sondage");
    } else 
    {    
        if($longueur == 1)
        {
                $typesoin1 = utf8_decode($soins[0]);
                $typesoin2 = "";
                $typesoin3 = "";
                $typesoin4 = "";
        }
        if($longueur == 2)
        {
            $typesoin1 = utf8_decode($soins[0]);
            $typesoin2 = utf8_decode($soins[1]);
            $typesoin3 = "";
            $typesoin4 = "";
        }
        if($longueur == 3)
        {
            $typesoin1 = utf8_decode($soins[0]);
            $typesoin2 = utf8_decode($soins[1]);
            $typesoin3 = utf8_decode($soins[2]);
            $typesoin4 = "";
        }
        if($longueur == 4)
        {
            $typesoin1 = utf8_decode($soins[0]);
            $typesoin2 = utf8_decode($soins[1]);
            $typesoin3 = utf8_decode($soins[2]);
            $typesoin4 = utf8_decode($soins[3]);
        }
    }

    $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

    $isa = $reponse->rowCount();
    $rep = $val->rowCount();
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "CODE D'INSCRIPTION DE L'APPLICATION OULIB";

    $message = "<html><head><title></title></head><body><p>Voici votre code d'inscription pour l'application oulib : </p><br><p><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";

    if (($isa == "0") && ($rep == "0")) {
        if ($motdepasse == $motdepasse2) 
        {
            if(!empty($data))
            {    
                $base_to_php = explode(',', $data);
                $nomPhoto = "profil_".$post->nom."_".$post->prenom."_".$dateJ.".jpg";
                
                $data_val = base64_decode($base_to_php[1]);
                $filepath = "../../image-person/".$nomPhoto."";
                
                if(file_put_contents($filepath,$data_val))
                {
                    $bdd->exec("INSERT INTO `oulib_infirmiere` (`photo`,`nomI`,`prenomI`,`emailI`,`mdpI`,`telI`,`code-postalI`,`villeI`,`finess`, `type-soinI1`,`type-soinI2`,`type-soinI3`,`type-soinI4`,`lieu-intervention`,`cabinet`,`latLng`,`code`) VALUES ('$nomPhoto','$nom','$prenom','$email','$motdepasse','$telephone','$codepostal','$ville','$finess','$typesoin1','$typesoin2','$typesoin3','$typesoin4','$intervention','$adressecabinet', '$latLong', '$code_aleatoire')");
                    if(mail($destinataire, $sujet, $message, $headers))
                    {
                        echo("Vous êtes bien inscrit. Merci de votre confiance!");
                    }
                    
                }
            } else {
                $nomPhoto = "avatar_inf.jpg";
                    $bdd->exec("INSERT INTO `oulib_infirmiere` (`photo`,`nomI`,`prenomI`,`emailI`,`mdpI`,`telI`,`code-postalI`,`villeI`,`finess`, `type-soinI1`,`type-soinI2`,`type-soinI3`,`type-soinI4`,`lieu-intervention`,`cabinet`,`latLng`,`code`) VALUES ('$nomPhoto','$nom','$prenom','$email','$motdepasse','$telephone','$codepostal','$ville','$finess','$typesoin1','$typesoin2','$typesoin3','$typesoin4','$intervention','$adressecabinet', '$latLong', '$code_aleatoire')");
                    if(mail($destinataire, $sujet, $message, $headers))
                    {
                        echo("Vous êtes bien inscrit. Merci de votre confiance!"); 
                    }
            }
        } else {
            echo "Votre mot de passe n'est pas identique !";
        }
    } else {
        echo 'Email déjà employée !';
    }

?>