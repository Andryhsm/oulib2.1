<?php

session_start();

require_once 'cnx.php';

$mdp = utf8_decode($_POST['mdpP']);
$conf_mdp = utf8_decode($_POST['conf-mdp']);
$nom = utf8_decode($_POST['nomP']);
$prenom = utf8_decode($_POST['prenomP']);
$email = utf8_decode($_POST['emailP']);
$tel = utf8_decode($_POST['telP']);
$rue = utf8_decode($_POST['rueP']);
$code_postal = utf8_decode($_POST['code-postalP']);
$ville = utf8_decode($_POST['villeP']);
$code_acces = utf8_decode($_POST['code-acces']);
$etage = utf8_decode($_POST['etage']);
$info_sup = utf8_decode($_POST['info-sup']);

$type_soin0 = utf8_decode(htmlspecialchars($_POST['type-soin0']));
$type_soin1 = utf8_decode(htmlspecialchars($_POST['type-soin1']));
$type_soin2 = utf8_decode(htmlspecialchars($_POST['type-soin2']));
$type_soin3 = utf8_decode(htmlspecialchars($_POST['type-soin3']));
$type_soin4 = utf8_decode(htmlspecialchars($_POST['type-soin4']));
$type_soin5 = utf8_decode(htmlspecialchars($_POST['type-soin5']));
$type_soin6 = utf8_decode(htmlspecialchars($_POST['type-soin6']));
$type_soin7 = utf8_decode(htmlspecialchars($_POST['type-soin7']));
$type_soin8 = utf8_decode(htmlspecialchars($_POST['type-soin8']));
$TypeDeSoin = ($type_soin0'|'$type_soin1'|'$type_soin2'|'$type_soin3'|'$type_soin4'|'$type_soin5'|'$type_soin6'|'$type_soin7'|'$type_soin8);

$frequence_soin0 = utf8_decode($_POST['frequence-soin0']);
$frequence_soin1 = utf8_decode($_POST['frequence-soin1']);
$frequence_soin2 = utf8_decode($_POST['frequence-soin2']);
$frequence_soin3 = utf8_decode($_POST['frequence-soin3']);
$frequence_soin4 = utf8_decode($_POST['frequence-soin4']);
$frequence_soin5 = utf8_decode($_POST['frequence-soin5']);
$frequence_soin6 = utf8_decode($_POST['frequence-soin6']);
$frequence_soin7 = utf8_decode($_POST['frequence-soin7']);
$frequence_soin8 = utf8_decode($_POST['frequence-soin8']);
$FrequenceDeSoin = ($frequence_soin0'|'$frequence_soin1'|'$frequence_soin2'|'$frequence_soin3'|'$frequence_soin4'|'$frequence_soin5'|'$frequence_soin6'|'$frequence_soin7'|'$frequence_soin8);

$par0 = $_POST['par0'];
$par1 = $_POST['par1'];
$par2 = $_POST['par2'];
$par3 = $_POST['par3'];
$par4 = $_POST['par4'];
$par5 = $_POST['par5'];
$par6 = $_POST['par6'];
$par7 = $_POST['par7'];
$par8 = $_POST['par8'];
$Par = ($par0'|'$par1'|'$par2'|'$par3'|'$par4'|'$par5'|'$par6'|'$par7'|'$par8);


$dossier = '../image-person/';

$fichier = basename($_FILES['photo']['name']);

//Verification fichier
if ($fichier == "") {
    $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

    $isa = $reponse->rowCount();
    $rep = $val->rowCount();

    if (($isa == "0") && ($rep == "0")) {
        if ($mdp == $conf_mdp) {

            $patient = $val->fetch();
            $bdd->exec("INSERT INTO `oulib_patient` (`photo`,`nomP`,`prenomP`,`emailP`,`mdpP`,`telP`,`rueP`,`code-postalP`,`villeP`,`code-acces`,`etage`,`info-sup`,`TypeDeSoin`,`FrequenceDeSoin`,`Par`) VALUES ('avatar_patient.png','$nom','$prenom','$email','$mdp','$tel','$rue','$code_postal','$ville','$code_acces','$etage','$info_sup','$TypeDeSoin','$FrequenceDeSoin','$Par')") or die(print_r($bdd->ErrorInfo()));
            $_SESSION['email'] = $email;
            $_SESSION['nomP'] = $nom;
            $_SESSION['prenomP'] = $prenom;
            $_SESSION['telP'] = $tel;
            $_SESSION['rueP'] = $rue;
            $_SESSION['code-postalP'] = $code_postal;
            $_SESSION['villeP'] = $ville;
            $_SESSION['code-acces'] = $code_acces;
            $_SESSION['etage'] = $etage;
            $_SESSION['info-sup'] = $info_sup;
            $_SESSION['TypeDeSoin'] = $TypeDeSoin;
            $_SESSION['FrequenceDeSoin'] = $FrequenceDeSoin;
            $_SESSION['photo'] = 'avatar_patient.png';
            $_SESSION['Par'] = $Par;
            echo 'succes';
        } else
            echo "Mot de passe non identique";
    } else {
        echo 'Email déjà employée';
    }
} else {

    $taille_maxi = 1000000;
    $taille = filesize($_FILES['photo']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.PNG', '.JPG', '.JPEG', '.GIF');
    $extension = strrchr($_FILES['photo']['name'], '.');

    if (!in_array($extension, $extensions)) {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros!';
    }

    if (!isset($erreur)) {
        $fichier = strtr($fichier, 'Ã€Ã�Ã‚ÃƒÃ„Ã…Ã‡ÃˆÃ‰ÃŠÃ‹ÃŒÃ�ÃŽÃ�Ã’Ã“Ã”Ã•Ã–Ã™ÃšÃ›ÃœÃ�Ã Ã¡Ã¢Ã£Ã¤Ã¥Ã§Ã¨Ã©ÃªÃ«Ã¬Ã­Ã®Ã¯Ã°Ã²Ã³Ã´ÃµÃ¶Ã¹ÃºÃ»Ã¼Ã½Ã¿', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);


        if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) {
            $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
            $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

            $isa = $reponse->rowCount();
            $rep = $val->rowCount();

            if (($isa == "0") && ($rep == "0")) {
                if ($mdp == $conf_mdp) {
                    $patient = $val->fetch();
                    $bdd->exec("INSERT INTO `oulib_patient` (`photo`,`nomP`,`prenomP`,`emailP`,`mdpP`,`telP`,`rueP`,`code-postalP`,`villeP`,`code-acces`,`etage`,`info-sup`,`type-soinP1`,`type-soinP2`,`type-soinP3`,`type-soinP4`,`frequence-soin1`,`frequence-soin2`,`frequence-soin3`,`frequence-soin4`,`par1`,`par2`,`par3`,`par4`) VALUES ('$fichier','$nom','$prenom','$email','$mdp','$tel','$rue','$code_postal','$ville','$code_acces','$etage','$info_sup','$TypeDeSoin','$FrequenceDeSoin','$Par')") or die(print_r($bdd->ErrorInfo()));
                    $_SESSION['email'] = $email;
                    $_SESSION['nomP'] = $nom;
                    $_SESSION['prenomP'] = $prenom;
                    $_SESSION['telP'] = $tel;
                    $_SESSION['rueP'] = $rue;
                    $_SESSION['code-postalP'] = $code_postal;
                    $_SESSION['villeP'] = $ville;
                    $_SESSION['code-acces'] = $code_acces;
                    $_SESSION['etage'] = $etage;
                    $_SESSION['info-sup'] = $info_sup;
                    $_SESSION['TypeDeSoin'] = $TypeDeSoin;
                    $_SESSION['FrequenceDeSoin'] = $FrequenceDeSoin;
                    $_SESSION['photo'] = $fichier;
                    $_SESSION['Par'] = $Par;

                    echo 'succes';
                } else
                    echo "Mot de passe non identique";
            } else {
                echo 'Email déjà employée';
            }
        } else {
            echo 'Echec de l\'upload de l\'image. Veuillez choisir une image dont la taille est moins de 1Mo, ou dont le type est (png, gif, jpg, jpeg) !';
        }
    } else {
        echo $erreur;
    }
}
?>  