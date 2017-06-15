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
    
    //require 'connexion_bdd.php';
    
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
    $commande = htmlentities(addslashes($_POST['commande']),ENT_NOQUOTES,'UTF-8', true);
    $genre = utf8_decode($_POST['genre']);
    $codepostal = utf8_decode($_POST['codepostal']);
    $ville = utf8_decode($_POST['ville']);
    $type_patient = utf8_decode($_POST['type_patient']);
    $code = utf8_decode($_POST['code']);
    $nbrenouv = utf8_decode($_POST['nbrenouv']); 

    $nomComplet = utf8_decode($_POST['nomComplet']);
    $contact = utf8_decode($_POST['contact']);
    $adresseComplet = utf8_decode($_POST['adresseComplet']);


    $date_insertion = date('Y-m-d');

    $date = date('d/m/Y');

    // déclaration et instanciation des variables a envoyer par mail
    $message = utf8_decode(nl2br(($_POST['message'])));
    // get the HTML
    $nomI = (isset($_POST["nomI"])) ? $_POST["nomI"] : "";
    $prenomI = (isset($_POST["prenomI"])) ? $_POST["prenomI"] : "" ;
    $rueI = (isset($_POST["rueI"])) ? $_POST["rueI"] : "" ;
    $cpI = (isset($_POST["cpI"])) ? $_POST["cpI"] : "" ;
    $villeI = (isset($_POST["villeI"])) ? $_POST["villeI"] : "" ;
    $cabinet = (isset($_POST["cabinet"])) ? $_POST["cabinet"] : "" ;
    $finess = (isset($_POST["finess"])) ? $_POST["finess"] : "" ;
    $telI = (isset($_POST["telI"])) ? $_POST["telI"] : "" ;

    // sujet du mail
    
     $sujet = 'Demande de renouvellement ( '.$nom.' - '.$codepostal.' '.$ville.')';

    // destinataire du mail

    
    /*$destinataire = 'rado.ratrimosoa@medsoft-sante.fr; fanou.ralaivao@medsoft-sante.fr; infos@medsoft-sante.fr; renouvellement@medsoft-sante.fr; thierry.halison@medsoft-sante.fr; anny-laure.benga@medsoft-sante.fr';

    $header ='Content-Type: text/html; charset="ISO-8859-1"'."\n";
    $header .='Content-Transfer-Encoding: 8bit';
    */
        
    try 
    {
        /*$requete = $bdd->prepare(" INSERT INTO renouvellements(departement, datelivraison, heure, livreur, mail, nom, adresse, mobile, commande, genre, type_patient, code, date_insertion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->execute(array($departement, $datelivraison, $heure, $livreur, $mail, $nomComplet, $adresseComplet, $contact, $commande, $genre, $type_patient, $code, $date_insertion)) or die(print_r($requete->errorInfo(), TRUE));
    */
        echo "La commande a bien été ajouté ! Vérifier votre boite mail après confirmation. Merci de votre confiance!";

      //  mail($destinataire, $sujet, $message, $header);
      //  $requete->closeCursor();
    } 
    catch (Exception $e) 
    {
        echo " Erreur lors de l'ajout de la nouvelle commande !";
    }
    
     ob_start();
    ?>
    <page backtop="20mm" backleft="200px" backright="20mm" backbottom="10mm" footer="page;">
    <head>
        <title>pdf</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table{
                width: 50%;
                margin-left: 20px;
                margin-top: 20px;
            }
            td{
                
            }
              p{
                color:rgb(0, 61, 89) ;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table>
                <tr>
                    <td style="border-bottom: 2px solid #006B9F; width: 200px;">
                        <p>
                            <strong><span style="font-size: 17px;"><?php echo $prenomI." ".$nomI; ?> </span></strong><br/><br/>
                            <?php if($cabinet != "") echo $cabinet."<br><br/>"; ?>
                            Adresse : <?php echo $rueI . " ". $cpI . " " .$villeI; ?> <br/><br/>
                            Téléphone : <?php echo $telI; ?> <br/><br/>
                            N° F.I.N.E.S.S. : <?php echo $finess; ?><br/><br/><br/>
                        </p> 
                    </td>
                    <td rowspan="2">
                        <p style="margin-left: 200px;"><br/><br/><br/><br/><br/><br/><br/><br/>
                            Date : <?php echo $date; ?>
                        </p>
                        <p style="margin-left: 200px;">
                            <strong style="font-size: 16px;"><?php echo $nom. " ". $prenom;  ?></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 250px;" colspan="2" ></td>
                </tr>
                <tr>
                    <td style="width: 500px; font-size: 17px; margin-left: 30px;" colspan="2" ><p><strong><?php
                    echo nl2br(nl2br($commande));
                        ?></strong></p></td>
                </tr>
                   
                <tr><br><br>
                    <td style="width: 500px;" colspan="2" ><p>
                    <br><br><br><br><br><br>
                    <?php
                    echo "   A rénouveler ".$nbrenouv." fois";//. $fois;?></p></td>
                </tr>
            </table>
            </div>
            <page_footer >
                <div style="font-family: Times; margin-bottom: 100px; margin-left: 300px;">
                    <p  style="margin-left: 250px; font-size: 14px;" >Signature : <br><br><br><br></p><br>
                    <p style="margin-left: 250px; font-size: 14px;" ><?php echo $nomI ." ".$prenomI; ?></p>
                 </div>      
            </page_footer>
    </body>
</page>



    <?php
    $content = ob_get_clean();

    //convert in PDF
    
    require_once('../html2pdf-4.4.0/html2pdf.class.php');
    require_once('../pjmail/pjmail.class.php');

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Times');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $pdf = $html2pdf->Output('', true);
        
        
        $mail = new PJmail();
        $mail->setAllFrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');    // mail en cas d'erreur d'envoie
        $mail->addfrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');       // mail envoyeur      
		//$mail->addrecipient('fenoheriniainat@gmail.com');
        
       
        $mail->addrecipient('infos@medsoft-sante.fr');
        $mail->addrecipient('renouvellement@medsoft-sante.fr');
        $mail->addrecipient('thierry.halison@medsoft-sante.fr');
        $mail->addrecipient('anny-laure.benga@medsoft-sante.fr');
        $mail->addrecipient('fanou.ralaivao@medsoft-sante.fr');
        $mail->addrecipient('rado.ratrimosoa@medsoft-sante.fr');
        $mail->addrecipient('andry.andrianaivo@imedsoft.fr');
        $mail->addrecipient('andrinirina.stian@imedsoft.fr');
        $mail->addrecipient('sederamihaja@gmail.com');
        $mail->addrecipient('feno.tolojanahary@imedsoft.fr');
        

//        $mail->addrecipient('fenoheriniainat@gmail.com');

        $mail->addsubject($sujet); 
        $mail->html = $message;
        $mail->addbinattachement("ordo_".$prenom."_".$nom.".pdf", $pdf);
        $mail->sendmail();          
        
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
