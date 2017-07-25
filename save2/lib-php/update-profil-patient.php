<?php

require_once 'cnx.php';

$id = $_POST['idP'];
$mdp = $_POST['mdpP'];
$conf_mdp = $_POST['conf-mdp'];
$nom = $_POST['nomP'];
$prenom = $_POST['prenomP'];
$email = $_POST['emailP'];
$tel = $_POST['telP'];
$rue = utf8_decode($_POST['rueP']);
$code_postal = $_POST['code-postalP'];
$ville = utf8_decode($_POST['villeP']);
$code_acces = utf8_decode($_POST['code-acces']);
$etage = utf8_decode($_POST['etage']);
$info_sup = utf8_decode($_POST['info-sup']);
$type_soin1 = ($_POST['type-soinP1']);
$type_soin2 = ($_POST['type-soinP2']);
$type_soin3 = ($_POST['type-soinP3']);
$type_soin4 = ($_POST['type-soinP4']);
$frequence_soin1 = htmlspecialchars($_POST['frequence-soin1']);
$frequence_soin2 = htmlspecialchars($_POST['frequence-soin2']);
$frequence_soin3 = htmlspecialchars($_POST['frequence-soin3']);
$frequence_soin4 = htmlspecialchars($_POST['frequence-soin4']);
$par1 = htmlspecialchars($_POST['par1']);
$par2 = htmlspecialchars($_POST['par2']);
$par3 = htmlspecialchars($_POST['par3']);
$par4 = htmlspecialchars($_POST['par4']);

$dossier = '../image-person/';

$fichier = basename($_FILES['photo']['name']);

if ($fichier == "") {
    if (($mdp == "") && ($conf_mdp == "")) {

        if (($type_soin1 == "") && ($type_soin2 == "") && ($type_soin3 == "") && ($type_soin4 == "") && ($frequence_soin1 == "") && ($frequence_soin2 == "") && ($frequence_soin3 == "") && ($frequence_soin4 == "")&& ($par1 == "") && ($par2 == "") && ($par3 == "") && ($par4 == "")) {

            $bdd->exec("UPDATE `oulib_patient` SET `nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

            echo 'Profil mise à jour';
        } else {

            $bdd->exec("UPDATE `oulib_patient` SET `nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "',`type-soinP1` ='" . $type_soin1 . "',`type-soinP2` = '" . $type_soin2 . "',`type-soinP3` = '" . $type_soin3 . "',`type-soinP4` = '" . $type_soin4 . "',`frequence-soin1` = '" . $frequence_soin1 . "',`frequence-soin2` = '" . $frequence_soin2 . "',`frequence-soin3` = '" . $frequence_soin3 . "',`frequence-soin4` = '" . $frequence_soin4 . "',`par1` = '" . $par1 . "',`par2` = '" . $par2 . "',`par3` = '" . $par3 . "',`par4` = '" . $par4 . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

            echo 'Profil mise à jour';
        }
    } else {

        if ($mdp == $conf_mdp) {

            if (($type_soin1 == "") && ($type_soin2 == "") && ($type_soin3 == "") && ($type_soin4 == "") && ($frequence_soin1 == "") && ($frequence_soin2 == "") && ($frequence_soin3 == "") && ($frequence_soin4 == "")) {
                $bdd->exec("UPDATE `oulib_patient` SET `nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`mdpP` = '" . $mdp . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                echo 'Profil mise à jour';
            } else {
                $bdd->exec("UPDATE `oulib_patient` SET `nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`mdpP` = '" . $mdp . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "',`type-soinP1` ='" . $type_soin1 . "',`type-soinP2` = '" . $type_soin2 . "',`type-soinP3` = '" . $type_soin3 . "',`type-soinP4` = '" . $type_soin4 . "',`frequence-soin1` = '" . $frequence_soin1 . "',`frequence-soin2` = '" . $frequence_soin2 . "',`frequence-soin3` = '" . $frequence_soin3 . "',`frequence-soin4` = '" . $frequence_soin4 . "',`par1` = '" . $par1 . "',`par2` = '" . $par2 . "',`par3` = '" . $par3 . "',`par4` = '" . $par4 . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                echo 'Profil mise à jour';
            }
        } else {
            echo "Mot de passe non identique";
        }
    }
} else {

    $taille_maxi = 10000000;
    $taille = filesize($_FILES['photo']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.PNG', '.GIF', '.JPG', '.JPEG');
    $extension = strrchr($_FILES['photo']['name'], '.');

    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros!';
    }

    if (!isset($erreur)) {
        $fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) {
            if (($mdp == "") && ($conf_mdp == "")) {

                if (($type_soin1 == "") && ($type_soin2 == "") && ($type_soin3 == "") && ($type_soin4 == "") && ($frequence_soin1 == "") && ($frequence_soin2 == "") && ($frequence_soin3 == "") && ($frequence_soin4 == "")) {

                    $bdd->exec("UPDATE `oulib_patient` SET `photo` = '" . $fichier . "',`nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                    echo 'Profil mise à jour';
                } else {

                    $bdd->exec("UPDATE `oulib_patient` SET `photo` = '" . $fichier . "',`nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "',`type-soinP1` ='" . $type_soin1 . "',`type-soinP2` = '" . $type_soin2 . "',`type-soinP3` = '" . $type_soin3 . "',`type-soinP4` = '" . $type_soin4 . "',`frequence-soin1` = '" . $frequence_soin1 . "',`frequence-soin2` = '" . $frequence_soin2 . "',`frequence-soin3` = '" . $frequence_soin3 . "',`frequence-soin4` = '" . $frequence_soin4 . "',`par1` = '" . $par1 . "',`par2` = '" . $par2 . "',`par3` = '" . $par3 . "',`par4` = '" . $par4 . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                    echo 'Profil mise à jour';
                }
            } else {

                if ($mdp == $conf_mdp) {

                    if (($type_soin1 == "") && ($type_soin2 == "") && ($type_soin3 == "") && ($type_soin4 == "") && ($frequence_soin1 == "") && ($frequence_soin2 == "") && ($frequence_soin3 == "") && ($frequence_soin4 == "")) {
                        $bdd->exec("UPDATE `oulib_patient` SET `photo` = '" . $fichier . "',`nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`mdpP` = '" . $mdp . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                        echo 'Profil mise à jour';
                    } else {
                        $bdd->exec("UPDATE `oulib_patient` SET `photo` = '" . $fichier . "',`nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`emailP` = '" . $email . "',`mdpP` = '" . $mdp . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "',`type-soinP1` ='" . $type_soin1 . "',`type-soinP2` = '" . $type_soin2 . "',`type-soinP3` = '" . $type_soin3 . "',`type-soinP4` = '" . $type_soin4 . "',`frequence-soin1` = '" . $frequence_soin1 . "',`frequence-soin2` = '" . $frequence_soin2 . "',`frequence-soin3` = '" . $frequence_soin3 . "',`frequence-soin4` = '" . $frequence_soin4 . "',`par1` = '" . $par1 . "',`par2` = '" . $par2 . "',`par3` = '" . $par3 . "',`par4` = '" . $par4 . "' WHERE `id`= '" . $id . "'") or die(print_r($bdd->ErrorInfo()));

                        echo 'Profil mise à jour';
                    }
                } else {
                    echo "Mot de passe non identique";
                }
            }
        } else {
            echo "Echec de l\'upload de l\'image. Veuillez choisir une image dont la taille est moins de 5Mo, ou dont le type est (png, gif, jpg, jpeg) !";
        }
    } else {
        echo $erreur;
    }
}
?>  