<?php
	require '../cnx.php';
	require '../connexion_bdd.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));

	$infos = utf8_decode($post->infos);
	$email = utf8_decode($post->email);
	$modelivraison = utf8_decode($post->modelivraison);
	$datelivraison = utf8_decode($post->datelivraison);
	$horairelivraison = utf8_decode($post->horairelivraison);
	$typepatient = utf8_decode($post->typepatient);
	$genre = utf8_decode($post->genre);
	$nom = utf8_decode($post->nom);
	$prenom = utf8_decode($post->prenom);
	$adresse = utf8_decode($post->adresse);
	$adresse2 = utf8_decode($post->adresse2);
	$codepostal = utf8_decode($post->codepostal);
	$ville = utf8_decode($post->ville);
	$telephone1 = utf8_decode($post->telephone1);
	$telephone2 = utf8_decode($post->telephone2);
	$commande = utf8_decode($post->commande);
	$renouveler = utf8_decode($post->renouveler);
	$numeroSuiviColis = utf8_decode($post->numeroSuiviColis);
    
    $req = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $data = $req->fetch();

    if(!empty($prenom) && !empty($nom))
    {
    	$nomComplet = $nom." ".$prenom;
    } else {
    	$nomComplet = $nom;
    }

    if(!empty($adresse2))
    {
    	$adresseComplet = $adresse.' '.$adresse2.' - '.$codepostal.' '.$ville;
    } else {
    	$adresseComplet = $adresse.' - '.$codepostal.' '.$ville;
    }

    if(!empty($telephone2))
    {
    	$contact = $telephone1." - ".$telephone2;
    } else {
    	$contact = $telephone1;
    }

    $commande = htmlentities(addslashes(utf8_decode($commande)),ENT_NOQUOTES,'UTF-8', true);
    $code = "OulibMobile";

if($numeroSuiviColis == "true")
{
	$message = "<html><head></head><body><p>" .$genre." ".$nom." ".$prenom." ( ".$typepatient." )<br>Nous avons bien reçu votre commande de:<br><b>".$commande."</b></p><br><p>Nous livrerons le : <b>".$datelivraison." ".$horairelivraison."</b><br>Mode de livraison choisi : <b>".$modelivraison."</b><br>L\'adresse de livraison est : <b>".$adresseComplet."</b></p><br><p>PS : Le client souhaite obtenir le numero de suivi de son colis.</p><br><p>Merci de votre confiance,<br>Le service client, <br>Medsoft sante <br>01 46 72 10 43 </p><br><p>La livraison se fera sous 24 à 48h après le traitement de la commande,<br> sous résèrve de la disponibilité des produits<br>Medsoft Santé</p>";
} else {
	$message = "<html><head></head><body><p>" .$genre." ".$nom." ".$prenom." ( ".$typepatient." )<br>Nous avons bien reçu votre commande de:<br><b>".$commande."</b></p><br><p>Nous livrerons le : <b>".$datelivraison." ".$horairelivraison."</b><br>Mode de livraison choisi : <b>".$modelivraison."</b><br>L\'adresse de livraison est : <b>".$adresseComplet."</b></p><br><p>Merci de votre confiance,<br>Le service client, <br>Medsoft sante <br>01 46 72 10 43 </p><br><p>La livraison se fera sous 24 à 48h après le traitement de la commande,<br> sous résèrve de la disponibilité des produits<br>Medsoft Santé</p>";
}

	$message = utf8_decode($message);

    $date_insertion = date('Y-m-d');

    $date = date('d/m/Y');

    $nomI = (isset($data["nomI"])) ? $data["nomI"] : "";
    $prenomI = (isset($data["prenomI"])) ? $data["prenomI"] : "" ;
    $rueI = (isset($data["rueI"])) ? $data["rueI"] : "" ;
    $cpI = (isset($data["cpI"])) ? $data["cpI"] : "" ;
    $villeI = (isset($data["villeI"])) ? $data["villeI"] : "" ;
    $cabinet = (isset($data["cabinet"])) ? $infos["cabinet"] : "" ;
    $finess = (isset($data["finess"])) ? $data["finess"] : "" ;
    $telI = (isset($data["telI"])) ? $data["telI"] : "" ;
    
    $sujet = 'Demande de renouvellement ( '.$nom.' - '.$codepostal.' '.$ville.')';
    $departement = "";

    try 
    {
        $requete = $bdd->prepare(" INSERT INTO renouvellements(departement, datelivraison, heure, livreur, mail, nom, adresse, mobile, commande, genre, type_patient, code, date_insertion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->execute(array($departement, $datelivraison, $horairelivraison, $modelivraison, $email, $nomComplet, $adresseComplet, $contact, $commande, $genre, $typepatient, $code, $date_insertion)) or die(print_r($requete->errorInfo(), TRUE));
    
        echo "La commande a bien été ajouté ! Vérifier votre boite mail après confirmation. Merci de votre confiance!";
        $requete->closeCursor();
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
                
                <?php
                	if(!empty($renouveler) && ($renouveler)>0)
                	{
                ?>
	                <tr><br><br>
	                    <td style="width: 500px;" colspan="2" ><p>
	                    <br><br><br><br><br><br>
	                    <?php
	                    echo "   A rénouveler ".$renouveler." fois";//. $fois;?></p></td>
	                </tr>
                <?php
                	}
                ?>

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
        
        require_once('../../html2pdf-4.4.0/html2pdf.class.php');
        require_once('../../pjmail/pjmail.class.php');

        
        try
        {
            $html2pdf = new HTML2PDF('P', 'A4', 'fr');
            $html2pdf->setDefaultFont('Times');
            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
            $pdf = $html2pdf->Output('', true);
            
            
            $mail = new PJmail();
            $mail->setAllFrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');

            $mail->addfrom('oulibfrsqx@cluster023.hosting.ovh.net', 'oulib.fr');

            $mail->addrecipient('andrinirina.stian@imedsoft.fr');

            $mail->addsubject($sujet); 
            $mail->html = $message;
            $mail->addbinattachement("ordo_".$prenom."_".$nom.".pdf", $pdf);
            $mail->sendmail();          
            
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    ?>