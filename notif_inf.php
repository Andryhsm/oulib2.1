<?php

        include_once "./lib-php/cnx.php";
        $email = ($_POST['email']);


        $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '".$email."' AND (status = 'attente' OR status = 'annuler')");
        $num = $req->rowCount();

        if($num>0)
        {
            while ($data = $req->fetch()) 
            {
//                $heures = explode(':', $data['heure_soin']);
//                $heure = $heures[0].":".$heures[1];
                    $nom = $data['nomP'];
                    $prenom = $data['prenomP'];
                if($data['status'] == 'annuler')
                {
                    echo("
                    <tr class='{$data['id']}'>
                        <td width='15%'>
                            <img class='thumbnail img-responsive' style='vertical-align: center;' width='130px' src='./image-person/{$data["photo"]}'>
                        </td>
                        <td width='45%'>
                            <h4><b> {$nom} {$prenom} (Demande annulée par le patient) </b></h4>
                            {$data['telP']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {$data['emailP']}<br>
                            <b>Adresse :</b> {$data['adresseP']}<br>
                            <b>Type de soin:</b> {$data['typeSoinP']}<br>
                            <b>Date de soin:</b> {$data['date_soin']}<br>
                            <b>Heure de soin:</b> {$data['heure_soin']}<br>
                            <b>Fréquence de soin:</b> {$data['frequenceSoin']}
                        </td>
                        <td width='40%'>
                            <br><br>
                                {$data['commentaire']}
                            <br><br><br>
                            <div class='pull-right'>
                                <a class='btn btn-default accepter' onClick='terminer({$data['id']});'>Effacer&nbsp;&nbsp; <span class='glyphicon glyphicon-remove'></span></a>
                            </div>
                        </td>
                    </tr>");
                } else {
                    echo("
                    <tr class='{$data['id']}'>
                        <td width='15%'>
                            <img class='thumbnail img-responsive' style='vertical-align: center;' width='130px' src='./image-person/{$data["photo"]}'>
                        </td>
                        <td width='45%'>
                            <h4><b> {$nom} {$prenom}</b></h4>
                            {$data['telP']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {$data['emailP']}<br>
                            <b>Adresse :</b> {$data['adresseP']}<br>
                            <b>Type de soin:</b> {$data['typeSoinP']}<br>
                            <b>Date de soin:</b> {$data['date_soin']}<br>
                            <b>Heure de soin:</b> {$data['heure_soin']}<br>
                            <b>Fréquence de soin:</b> {$data['frequenceSoin']}
                        </td>
                        <td width='40%'>
                            <br><br>
                                {$data['commentaire']}
                            <br><br><br>
                            <div class='pull-right'>
                                <div class=\"btn-group\">
                                      <button type=\"button\" class=\"btn btn-info\">Voir itinéraire</button>
                                      <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                      </button>
                                      <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"#\" onClick='itineraire(\"{$data['latLng']}\", \"DRIVING\");'>Voiture</a></li>
                                        <li><a href=\"#\" onClick='itineraire(\"{$data['latLng']}\", \"WALKING\");'>Marche</a></li>
                                      </ul>
                                    </div>
                                &nbsp;&nbsp
                                <a class='btn btn-success accepter' onClick='accepter({$data['id']});'>Accepter</a>&nbsp;&nbsp
                                <a class='btn btn-danger refuser' onClick='refuser({$data['id']});'>Réfuser</a>
                            </div>
                        </td>
                    </tr>");
                }
            }
        } else {
            echo("<center><h3>Vous n'avez pas encore de demande</h3></center>");
        }
?>