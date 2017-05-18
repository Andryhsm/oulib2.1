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
    
    /*
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
    $commande = ($_POST["commande"])htmlentities(addslashes($_POST['commande']),ENT_NOQUOTES,'UTF-8', true);
    $genre = utf8_decode($_POST['genre']);
    $codepostal = utf8_decode($_POST['codepostal']);
    $ville = utf8_decode($_POST['ville']);
    $type_patient = utf8_decode($_POST['type_patient']);
    $code = utf8_decode($_POST['code']);

    $nomComplet = utf8_decode($_POST['nomComplet']);
    $contact = utf8_decode($_POST['contact']);
    $adresseComplet = utf8_decode($_POST['adresseComplet']);


    $date_insertion = date('Y-m-d');

*/
    // déclaration et instanciation des variables a envoyer par mail
  //  $message = utf8_decode(nl2br(($_POST['message'])));
    // get the HTML
    $nomI = (isset($_POST["nomI"])) ? $_POST["nomI"] : "";
    $prenomI = (isset($_POST["prenomI"])) ? $_POST["prenomI"] : "" ;
    $nom = (isset($_POST["nom"])) ? $_POST["nom"] : "";
    $prenom = (isset($_POST["prenom"])) ? $_POST["prenom"] : "" ;
    ob_start();
    
    ?>
<!DOCTYPE html>
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
                color: rgb(0, 107, 159); ;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table>
                <tr>
                    <td style="border-bottom: 1px solid #084FA7;">
                        <p>
                            <strong><span style="font-size: 17px;">Prenom + nom </span></strong><br/><br/>
                            Cabinet<br><br/>
                            Adresse<br/><br/>
                            Téléphone : <br/><br/>
                            N° F.I.N.E.S.S. : <br/><br/><br/>
                        </p> 
                    </td>
                    <td rowspan="2">
                        <p style="margin-left: 250px;"><br/><br/><br/><br/><br/><br/><br/><br/>
                            Date : 00/00/000
                        </p>
                        <p style="margin-left: 250px;">
                            Nom et Prenom du patient
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 250px;" colspan="2" ></td>
                </tr>
                <tr>
                    <td style="padding-top: 500px;" colspan="2" ></td>
                </tr>
            </table>
        </div>
        <page_footer >
                <div style="font-family: Times; margin-left: 300px;">
                    <p  style="margin-left: 250px;" >Signature <br></p><br>
                    <p style="margin-left: 250px;" >Nom + prenom Prescripteur</p>
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
        $html2pdf->Output('content.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

    ?>
