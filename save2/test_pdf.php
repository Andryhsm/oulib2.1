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
        echo "Bonjour monsieur, je suis le pdf ! ";
    $content = ob_get_clean();

    //convert in PDF
    
    require_once(dirname(__FILE__).'/html2pdf-4.4.0/html2pdf.class.php');
    require_once('pjmail/pjmail.class.php');

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $pdf = $html2pdf->Output('', true);  

        echo "Voici notre test pdf ! ";

        $mail = new PJmail();
        $mail->setAllFrom('oulibfrsqx@cluster023.hosting.ovh.net', 'OULIB');    // mail en cas d'erreur d'envoie
        $mail->addfrom('oulibfrsqx@cluster023.hosting.ovh.net', 'OULIB');       // mail envoyeur
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