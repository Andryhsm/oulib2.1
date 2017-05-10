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

    // get the HTML
    ob_start();
        echo "Bonjour je suis le contenue en pdf ";
    $content = ob_get_clean();

    // convert in PDF
    require_once('html2pdf-4.4.0/html2pdf.class.php');
    require_once('pjmail.class.php'); 
    try
    {
        echo "On doit envoyer notre email";
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $content_pdf = $html2pdf->Output('', true);

         $mail = new PJmail(); 
         $mail->setAllFrom('oulib.fr', "Mon site perso"); 
         $mail->addrecipient('fenoheriniainat@gmail.com');
         $mail->addrecipient('feno.tolojanahary@imedsoft.fr'); 
         $mail->addsubject("Test PDF"); 
         $mail->text = "Mbola exemple na pdf iany ito, ainga anie ka mba hiety !"; 
         $mail->addbinattachement("mon_document.pdf", $content_pdf); 
         $res = $mail->sendmail(); 
         if($res){
            echo "email envoyer ! ";
         }else{
            echo "non envoyer ! ";
         }
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>