<?php

session_start();


require_once 'cnx.php';


$mdp = $_POST['mdpI'];
$conf_mdp = $_POST['conf-mdpI'];
$nom = $_POST['nomI'];
$prenom = $_POST['prenomI'];
$email = $_POST['emailI'];
$tel = $_POST['telI'];
$rue = addcslashes($_POST['rueI'], "'");
$code_postal = $_POST['code-postalI'];
$ville = addcslashes($_POST['villeI'], "'");
$latLng = $_POST['latLng'];
$finess = $_POST['finess'];
/*$type_soin0 = htmlspecialchars($_POST['type-soin0']);
$type_soin1 = htmlspecialchars($_POST['type-soin1']);
$type_soin2 = htmlspecialchars($_POST['type-soin2']);
$type_soin3 = htmlspecialchars($_POST['type-soin3']);
$type_soin4 = htmlspecialchars($_POST['type-soin4']);
$type_soin5 = htmlspecialchars($_POST['type-soin5']);
$type_soin6 = htmlspecialchars($_POST['type-soin6']);
$type_soin7 = htmlspecialchars($_POST['type-soin7']);
$type_soin8 = htmlspecialchars($_POST['type-soin8']);*/


$lieu_intervention = addcslashes($_POST['lieu-intervention'], "'");
$cabinet = htmlspecialchars($_POST['cabinet']);

$lieu_intervention = utf8_decode($lieu_intervention);
$mdp = utf8_decode($mdp);
$conf_mdp = utf8_decode($conf_mdp);
$nom = utf8_decode($nom);
$prenom = utf8_decode($prenom);
$email = utf8_decode($email);
$tel = utf8_decode($tel);
$rue = utf8_decode($rue);
$code_postal = utf8_decode($code_postal);
$ville = utf8_decode($ville);
$latLng = utf8_decode($latLng);/*
$type_soin0 = utf8_decode($type_soin0);
$type_soin1 = utf8_decode($type_soin1);
$type_soin2 = utf8_decode($type_soin2);
$type_soin3 = utf8_decode($type_soin3);
$type_soin4 = utf8_decode($type_soin4);
$type_soin5 = utf8_decode($type_soin5);
$type_soin6 = utf8_decode($type_soin6);
$type_soin7 = utf8_decode($type_soin7);
$type_soin8 = utf8_decode($type_soin8);*/

$TypeDeSoin = utf8_decode($_POST["TypeDeSoin"]);

$lieu_intervention = utf8_decode($lieu_intervention);
$cabinet = utf8_decode($cabinet);

$dossier = '../image-person/';

$fichier = basename($_FILES['photo']['name']);

//Verification fichier
if ($fichier == "") {
    $fichier = "avatar_inf.jpg";
    $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

    $isa = $reponse->rowCount();
    $rep = $val->rowCount();

    if (($isa == "0") && ($rep == "0")) {
        if ($mdp == $conf_mdp) {

            $inf = $reponse->fetch();

            $bdd->exec("INSERT INTO `oulib_infirmiere` (`photo`,`nomI`,`prenomI`,`emailI`,`mdpI`,`telI`,`rueI`,`code-postalI`,`villeI`,`finess`,`TypeDeSoin`,`lieu-intervention`, `cabinet`, `latLng`) VALUES ('$fichier','$nom','$prenom','$email','$mdp','$tel','$rue','$code_postal','$ville','$finess','$TypeDeSoin','$lieu_intervention', '$cabinet','$latLng')") or die(print_r($bdd->ErrorInfo()));

            $_SESSION['email'] = $email;
            $_SESSION['nomI'] = $nom;
            $_SESSION['prenomI'] = $prenom;
            $_SESSION['telI'] = $tel;
            $_SESSION['rueI'] = $rue;
            $_SESSION['code-postalI'] = $code_postal;
            $_SESSION['villeI'] = $ville;
            $_SESSION['finess'] = $finess;
            $_SESSION['TypeDeSoin'] = $TypeDeSoin;
            $_SESSION['lieu-intervention'] = $lieu_intervention;
            $_SESSION['photo'] = $fichier;
            $_SESSION['latLng'] = $latLng;
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
        $erreur = 'Le fichier est trop volumineux!';
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

                    $inf = $reponse->fetch();

                    $bdd->exec("INSERT INTO `oulib_infirmiere` (`photo`,`nomI`,`prenomI`,`emailI`,`mdpI`,`telI`,`rueI`,`code-postalI`,`villeI`,`finess`,`TypeDeSoin`,`lieu-intervention`, `cabinet`, `latLng`) VALUES ('$fichier','$nom','$prenom','$email','$mdp','$tel','$rue','$code_postal','$ville','$finess','$TypeDeSoin','$lieu_intervention', '$cabinet', '$latLng')") or die(print_r($bdd->ErrorInfo()));

                    $_SESSION['email'] = $email;
                    $_SESSION['nomI'] = $nom;
                    $_SESSION['prenomI'] = $prenom;
                    $_SESSION['telI'] = $tel;
                    $_SESSION['rueI'] = $rue;
                    $_SESSION['code-postalI'] = $code_postal;
                    $_SESSION['villeI'] = $ville;
                    $_SESSION['finess'] = $finess;
                    $_SESSION['TypeDeSoin'] = $TypeDeSoin;
                    $_SESSION['lieu-intervention'] = $lieu_intervention;
                    $_SESSION['photo'] = $fichier;
                    $_SESSION['latLng'] = $latLng;
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