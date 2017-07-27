<?php
        
    require "../cnx.php";

    header("Content-Type: text/html; charset: utf-8");
    
    $post = json_decode(file_get_contents("php://input"));

    $nom = addslashes($post->nom);
    $prenom = addslashes($post->prenom);
    $email = addslashes($post->email);
    $status = addslashes($post->status);

    //echo($status." - " .strlen($status));
    
    if($status == "photo")
    {
        $data = $post->image;
        $base_to_php = explode(',', $data);

        $newDate = date("d-m-Y");
        $heure  = date("H:i:s");
        $newDate = explode("-", $newDate);
        $heure = explode(":", $heure);
        $newDate = $newDate[0]."".$newDate[1]."".$newDate[2];
        $heure = $heure[0]."".$heure[1]."".$heure[2];
        $time = $newDate."_".$heure;

        $nomPhoto = "profil_".$nom."_".$prenom."_".$time.".jpg";
        
        $data_val = base64_decode($base_to_php[1]);
        $filepath = "../../image-person/".$nomPhoto."";
        if(file_put_contents($filepath,$data_val))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `photo` = '".$nomPhoto."' WHERE `emailI` = '".$email."'"))
            {
                echo("Votre image de profil a bien été modifié");
            }
        } else {
            echo("Une erreur est survenue lors de l'upload de l'image. Veuillez réessayer dans quelques instants !");
        }
    }

    if ($status == "nomPrenom") 
    {
        if(!empty($nom) && !empty($prenom))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `nomI` = '".$nom."', `prenomI` = '".$prenom."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(empty($nom))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `prenomI` = '".$prenom."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }  
        }
        if(empty($prenom))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `nomI` = '".$nom."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
    }

    if($status == "contact")
    {
        $mail = addslashes($post->mail);
        $phone = addslashes($post->phone);
        if(!empty($mail) && !empty($phone))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `telI` = '".$phone."', `emailI` = '".$mail."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(empty($mail))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `telI` = '".$phone."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(empty($phone))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `emailI` = '".$mail."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
    } 

    if($status == "adresse")
    {
        $ville = addslashes($post->ville);
        $rue = addslashes($post->rue);
        $codePostal = addslashes($post->codePostal);

        if($bdd->exec("UPDATE `oulib_infirmiere` SET `rueI` = '".$rue."', `code-postalI` = '".$codePostal."', `villeI` = '".$ville."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
    }

    if($status == "infosPerso")
    {
        $finess = addslashes($post->finess);
        $intervention = addslashes($post->intervention);
        $cabinet = addslashes($post->cabinet);

        if(!empty($finess) && !empty($intervention) && !empty($cabinet))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `finess` = '".$finess."', `cabinet` = '".$cabinet."', `lieu-intervention` = '".$intervention."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(!empty($finess) && !empty($intervention) && empty($cabinet))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `finess` = '".$finess."', `lieu-intervention` = '".$intervention."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(!empty($finess) && !empty($cabinet) && empty($intervention))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `finess` = '".$finess."', `cabinet` = '".$cabinet."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(!empty($intervention) && !empty($cabinet) && empty($finess))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `cabinet` = '".$cabinet."', `lieu-intervention` = '".$intervention."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(!empty($intervention) && empty($cabinet) && empty($finess))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `lieu-intervention` = '".$intervention."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(empty($intervention) && !empty($cabinet) && empty($finess))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `cabinet` = '".$cabinet."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
        if(empty($intervention) && empty($cabinet) && !empty($finess))
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `finess` = '".$finess."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        }
    }

    if($status == "infosSoins")
    {
        $soins = $post->soins;
        $longueur = sizeof($soins);

        if(in_array("Tout", $soins))
        {
            $typesoin1 = "Cicatrisation";
            $typesoin2 = "Perfusion";
            $typesoin3 = "Stomathérapie";
            $typesoin4 = "Sondage";
        } else {    
            if($longueur == 1)
            {
                    $typesoin1 = $soins[0];
                    $typesoin2 = "";
                    $typesoin3 = "";
                    $typesoin4 = "";
            }
            if($longueur == 2)
            {
                $typesoin1 = $soins[0];
                $typesoin2 = $soins[1];
                $typesoin3 = "";
                $typesoin4 = "";
            }
            if($longueur == 3)
            {
                $typesoin1 = $soins[0];
                $typesoin2 = $soins[1];
                $typesoin3 = $soins[2];
                $typesoin4 = "";
            }
            if($longueur == 4)
            {
                $typesoin1 = $soins[0];
                $typesoin2 = $soins[1];
                $typesoin3 = $soins[2];
                $typesoin4 = $soins[3];
            }
        }
        if($longueur > 0)
        {
            if($bdd->exec("UPDATE `oulib_infirmiere` SET `type-soinI1` = '".utf8_decode($typesoin1)."', `type-soinI2` = '".utf8_decode($typesoin2)."', `type-soinI3` = '".utf8_decode($typesoin3)."', `type-soinI4` = '".utf8_decode($typesoin4)."' WHERE `emailI` = '".$email."'"))
            {
                echo("Vos informations ont bien été modifiés !");
            } else {
                echo("Une erreur est survenue lors de la modification de vos informations. Veuillez réessayer dans quelques instants !");
            }
        } else {
            echo("Vous n'avez choisi aucune options, vos informations sont donc resté les mêmes !");
        }
    }

    if($status == "motdepasse")
    {
        $ancien = $post->ancienMdp;
        $new = $post->newMdp;
        $confirm = $post->confirmNewMdp;

        $req = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '".$email."'");
        $reponse = $req->fetch();

        if($ancien == $reponse['mdpI'])
        {
            if($new == $confirm)
            {
                if($bdd->exec("UPDATE `oulib_infirmiere` SET `mdpI` = '".$new."' WHERE `emailI` = '".$email."'"))
                    {
                        echo("Votre mot de passe a bien été modifié !");
                    } else {
                        echo("Une erreur est survenue lors de la modification de votre mot de passe. Veuillez réessayer dans quelques instants !");
                    }
            } else {
                 echo("La confirmation du nouveau mot de passe n'est pas identique.");
            }
        } else {
            echo("Veuillez indiquez votre mot de passe actuel !");
        }
        //echo("\n".$reponse['mdpI']."\n".$ancien."\n".$new."\n".$confirm);
    }
    
?>