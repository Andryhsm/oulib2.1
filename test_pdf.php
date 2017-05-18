<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    require 'connexion_bdd.php';
// déclarations et instantiation des variables a envoyer recu par AJAX
    $departement = utf8_decode($_POST['departement']);
    $datelivraison = utf8_decode($_POST['datelivraison']);
    $heure = utf8_decode($_POST['heure']);
    $livreur = utf8_decode($_POST['livreur']);
    $mail = utf8_decode($_POST['mail']);
    $nom = utf8_decode($_POST['nom']);
    $prenom = utf8_decode($_POST['prenom']);
    $adresse = utf8_decode($_POST['adresse']);
    $adresse2 = utf8_decode($_POST['adresse2']);
    $mobile = utf8_decode($_POST['mobile']);
    $fixe = utf8_decode($_POST['fixe']);
    $commande = utf8_decode($_POST['commande']);
    $genre = utf8_decode($_POST['genre']);
    $codepostal = utf8_decode($_POST['codepostal']);
    $ville = utf8_decode($_POST['ville']);
    $type_patient = utf8_decode($_POST['type_patient']);
    $code = utf8_decode($_POST['code']);

    $nomComplet = utf8_decode($_POST['nomComplet']);
    $contact = utf8_decode($_POST['contact']);
    $adresseComplet = utf8_decode($_POST['adresseComplet']);


    $date_insertion = date('Y-m-d');


    // déclaration et instanciation des variables a envoyer par mail
    $message = utf8_decode(nl2br(($_POST['message'])));
    // get the HTML
    $nomI = (isset($_POST["nomI"])) ? $_POST["nomI"] : "";
    $prenomI = (isset($_POST["prenomI"])) ? $_POST["prenomI"] : "" ;

    // sujet du mail
    $sujet = 'Demande de renouvellement ( '.$nom.' - '.$codepostal.' '.$ville.')';
    // destinataire du mail
    $destinataire = "fenoheriniainat@gmail.com";
/*
    $destinataire = 'rado.ratrimosoa@medsoft-sante.fr; fanou.ralaivao@medsoft-sante.fr; infos@medsoft-sante.fr; renouvellement@medsoft-sante.fr; thierry.halison@medsoft-sante.fr; anny-laure.benga@medsoft-sante.fr';
*/
    $header ='Content-Type: text/html; charset="ISO-8859-1"'."\n";
    $header .='Content-Transfer-Encoding: 8bit';

    try 
    {
        /*
        $requete = $bdd->prepare(" INSERT INTO renouvellements(departement, datelivraison, heure, livreur, mail, nom, adresse, mobile, commande, genre, type_patient, code, date_insertion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->execute(array($departement, $datelivraison, $heure, $livreur, $mail, $nomComplet, $adresseComplet, $contact, $commande, $genre, $type_patient, $code, $date_insertion)) or die(print_r($requete->errorInfo(), TRUE));
        */
        echo "La commande a bien été ajouté ! Vérifier votre boite mail après confirmation. Merci de votre confiance!";

        mail($destinataire, $sujet, $message, $header);
        //$requete->closeCursor();
    } 
    catch (Exception $e) 
    {
        echo " Erreur lors de l'ajout de la nouvelle commande !";
    }

     ob_start();
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>pdf</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .content{
                margin: 40px 20px 0px 20px; 
            }
            .identification{
                width: 40%;
                border: 1px #006dcc solid;
            }
            .ambony{
                margin-top: -30px;
                 text-align: center;
            }
            .to{
                width: 100px;
            }
            .tt{
                margin-top: 50px;
                font-size: 15px;
                border-bottom: 1px #000 solid;
                border-top: 1px #000 solid;
                 text-align: center;
            }
            .materiel{
                margin-top: 50px;
                font-size: 14px;

            }
            .tot{
                font-size: 14px;
                 text-align: center;
            }
            .bloc{
                margin-top: 50px;
            }
            #colonne1 {
                float: left;
                width: 410px;
                border: 2px #006dcc solid;
            }
            #colonne2 {
                float: right;
                width: 410px;
                border: 2px #006dcc solid;
            }
            #centre {
                margin-left: 420px;
                margin-right: 420px;
                margin-bottom: 195px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table>
                <tr>
                    <td width="250px;" class="identification">
                <p style="color: #777777; font-size: 9px; text-align: center;">IDENTIFICATION DU PRESCRIPTEUR</p>
                <br><br><br>
                <div class="tot">
                    <?php echo $prenom."<br/>".$nom; ?>
                </div>
                <br><br><br><br>
                </td>
                <td width="180px;" class="">
                    <div class="ambony">
                        <img width="100px;" src="./img/cerfa.png">
                            <p><b><h3 style="color: #006dcc; font-family: Arial; font-size: 13px;">N° 60-3937</h3></b></p>
                    </div>    
                </td>
                <td width="250px;" class="identification">
                <p style="color: #777777;  font-size: 9px; text-align: center;">IDENTIFICATION DU PATIENT</p>
                <br><br><br>
                <div class="tot">
                    <?php echo $prenomI."<br/>".$nomI; ?>
                </div>
                <br><br><br><br>
                </td>
                </tr>
            </table>
            <div class="tt">    
                        Prescriptions relatives au traitement de l’affection de longue durée (liste ou hors liste)
                    <br>
                    (AFFECTION EXONERANTE)
            </div>
    <div class="materiel">
        <b><?php echo $commande; ?></b>
    </div>
</div>
</body>
</html>

    <?php
    $content = ob_get_clean();

    //convert in PDF
    
    require_once('../html2pdf-4.4.0/html2pdf.class.php');
    require_once('../pjmail/pjmail.class.php');

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $pdf = $html2pdf->Output('conten.pdf');  

        
        $mail = new PJmail();
        $mail->setAllFrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');    // mail en cas d'erreur d'envoie
        $mail->addfrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');       // mail envoyeur
        $mail->addrecipient('fenoheriniainat@gmail.com');
        $mail->addrecipient('feno.tolojanahary@imedsoft.fr');
        $mail->addsubject("Un email de test"); 
        $mail->text = "Je suis l'email de test ! ";
        $mail->addbinattachement("content.pdf", $pdf);
        $mail->sendmail();          
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>