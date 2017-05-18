

<?php
    class PJmail extends simplemail
    {
        var $old_sendmail_from  = null;
        var $env_name           = '';
        
       
        function PJmail()
        {
            $this->simplemail();
        }
        
       
        function addbinattachement($filename, $source)
        {
            array_push($this->attachement , array('filename'=>$filename, 'source'=>$source));
        }
        
       
        function writeattachement(&$attachement,$B)
        {
            $message = '';
            if ( !empty($attachement) )
            {
                foreach($attachement as $AttmFile)
                {
                    $patharray = explode ("/", $AttmFile['filename']);
                    $FileName = $patharray[count($patharray)-1];
                    
                    $message .= "\n--".$B."\n";
                    
                    if (!empty($AttmFile['cid']))
                    {
                        $message .= "Content-Type: {$AttmFile['contenttype']};\n name=\"".$FileName."\"\n";
                        $message .= "Content-Transfer-Encoding: base64\n";
                        $message .= "Content-ID: <{$AttmFile['cid']}>\n";
                        $message .= "Content-Disposition: inline;\n filename=\"".$FileName."\"\n\n";
                    }
                    else
                    {
                        $message .= "Content-Type: application/octetstream;\n name=\"".$FileName."\"\n";
                        $message .= "Content-Transfer-Encoding: base64\n";
                        $message .= "Content-Disposition: attachment;\n filename=\"".$FileName."\"\n\n";
                    }
                    
                    // ****************************************************
                    // Modification pour récupérer la source dans le tableau si elle est renseigner
                    if (!isset($AttmFile['source']))
                    {
                        $fd=fopen ($AttmFile['filename'], "rb");
                        $FileContent=fread($fd,filesize($AttmFile['filename']));
                        fclose ($fd);
                    }
                    else
                    {
                        $FileContent = $AttmFile['source'];                 
                    }
                    // FIN Modification
                    // ****************************************************
                    
                    $FileContent = chunk_split(base64_encode($FileContent));
                    $message .= $FileContent;
                    $message .= "\n\n";
                }
                $message .= "\n--".$B."--\n";
            }
            return $message;
        }
        
      
        function BodyLineWrap($Value)
        {
            return $Value;
        }
       
        function sendmail() 
        {
            ob_start();
            parent::sendmail();
            $erreur = trim(strip_tags(ob_get_clean()));

            if ($this->old_sendmail_from)
                ini_set('sendmail_from', $this->old_sendmail_from);

            if ($erreur)
            {
                return $erreur;
            }
            return null;
        }
    }
?>

<?php


   
    ob_start();
        echo "Bonjour je suis le contenue en pdf ";
    $content = ob_get_clean();

  
    require_once('html2pdf-4.4.0/html2pdf.class.php');
	include('pjmail/class.mail.php');

	 try
    {
        
        echo "On doit envoyer notre email";
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $content_pdf = $html2pdf->Output('', true);

       $mail = new PJmail(); 
       
       $mail->addFrom('oulib.fr', "OULIB"); 
       $mail->addrecipient('fenoheriniainat@gmail.com');
       $mail->addsubject("Exemple envoie de PDF"); 
       $mail->text = "Ceci est un exemple d'envoie de fichier PDF"; 
       $mail->addbinattachement("mon_document.pdf", $content_pdf); 
       $res = $mail->sendmail(); 
       if($res)
            echo "envoyer ! ";
        else
            echo "NON envoyer";
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

    
?>
