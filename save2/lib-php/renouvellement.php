<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: ../login.html");
}

include_once "cnx.php";

$req = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $_SESSION['email'] . "'");
$data = $req->fetch();
?>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Commander matériels</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/paper.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="../others/index.css" type="text/css" media="all">
        <link rel="stylesheet" id="bootstrap-css" href="../others/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" id="animate-css" href="../others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="../others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="../others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="../others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="../others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="../others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="../others/style.css" type="text/css" media="all">
        <link href="../bootstrap/css/paper.css" rel="stylesheet">

        <style type="text/css">
            .content
            {
                margin-top: 20px;
            }
            .btn_up
            {
                position: fixed;
                bottom: 10px;
                right: 15px;
                height: 80px;
                width: 80px;
                padding: 0;
            }

            #alchem-home-sections
            {
                padding-top: 50px;
            }

            .logo
            {
                position: absolute;
                z-index: 9;
                left: 5%;
            }

            .logo_footer
            {
                width: 10%;
                height: 9%;
            }

            li>a:hover
            {
                font-size: 1.1em;
                color:  #fff;
                text-decoration: none;
            }

            li>a
            {
                background-color: transparent;
                font-size: 1.1em;
                color: #fff;
                text-decoration: none;
            }
            .modal{
                margin-top: 5rem;
            }

            #returnOnTop
            {
                display: none;
                cursor: pointer;
            }
            .btn-primary{
                background-color: #007EAF;
                color: #fff;
            }
            .btn-primary:hover,
            .btn-primary:active,
            .btn-primary:focus{
                background-color: #333;
                color: #fdd200;
            }
        </style>
    </head>

    <body>


        <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                      <div class="logo">
                          <a href="#"><img src="../img/log.png"></a>
                      </div>
                  </div>
          
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="../liste.php"><span id="badges">Liste</span></a></li>
                      <li><a href="renouvellement.php">Passer une commande</a></li>
                      <li><a href="modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="../contact2.php">Contact</a></li>
                      <li><a href="deconnexion.php">Deconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="clear"></div>

        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="titre main">
                                <h3 style="color:#fdd200;">Prise de rendez-vous pour une livraison</h3>
                                <div class="separateur"></div>
                            </div>
                        </div>

                        <div class="container">
                            <form action="" method="POST" id="formulaire">
                                <div class="row">
                                    <div id="livreur">
                                        <fieldset class="fieldset">
                                            <legend> &nbsp;&nbsp;Mode de livraison &nbsp;&nbsp;<span class="glyphicon glyphicon-share"></span></legend>
                                            <h5><span class="important">La livraison se fera sous 24 à 48h après le traitement de la commande, 
                                                    sous r&eacute;s&egrave;rve de la disponibilit&eacute; des produits.</span></h5><br>
                                            <p> Cochez le mode de livraison qui vous convient : <br><br>
                                            <!-- <div id="medequipe">
                                                <input type="radio" name="livreur" value="Equipe Medsoft" id="l1"/> 
                                                <label for="l1">&nbsp;Equipe Medsoft </label>
                                            </div> -->
                                            <div>
                                                <input type="radio" name="livreur" value="Transporteur - 24h France express" id="l2" checked /> 
                                                <label for="l2">&nbsp;Transporteur - (24h) France express</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="livreur" value="Transporteur - (24h) Chronopost" id="l3" /> 
                                                <label for="l3">&nbsp;Transporteur - (24h) Chronopost</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="livreur" value="Transporteur - voie postale (48h - Colissimo)" id="l4" /> 
                                                <label for="l4">&nbsp;Transporteur - voie postale (48h - Colissimo)</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="livreur" value="Chrono Relais (Relais colis près de votre domicile)" id="l5" /> 
                                                <label for="l5">&nbsp;Chrono Relais (Relais colis près de votre domicile)</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="livreur" value="Courrier" id="l6" /> 
                                                <label for="l6">&nbsp;Courrier</label>
                                            </div>		
                                        </fieldset>
                                    </div>
                                    <div class="separ"></div>
                                </div>

                                <!-- <div class="row">
                                    <fieldset class="fieldset">
                                        <legend> &nbsp;&nbsp;Choisissez votre d&eacute;partement &nbsp;&nbsp;<span class="glyphicon glyphicon-tags"></span></legend>
                                        
                                        <div id="choixL">
                                            <div class="form-group">
                                                <label class="col-lg-3">Selectionnez ici</label>
                                                <div class="col-lg-5">
                                                    <select id="selectRegion" class="form-control" name="departement">
                                                        <option selected="true" value="">Département</option>
                                                        <option value="Paris 75">Livraison dans Paris (75)</option>
                                                        <option value="Seine-et-Marne 77">Livraison Seine-et-Marne (77)</option>
                                                        <option value="Yvelines 78">Livraison Yvelines (78)</option>
                                                        <option value="Essone 91">Livraison Essone (91)</option>
                                                        <option value="Hauts-de-Seine 92">Livraison Hauts-de-Seine (92)</option>
                                                        <option value="Seine-Saint-Denis 93">Livraison Seine-Saint-Denis (93)</option>
                                                        <option value="Val-de-Marne 94">Livraison Val-de-Marne (94)</option>
                                                        <option value="Val d'Oise 95">Livraison Val d'Oise (95)</option>
                                                        <option value="hors ile de france" id="hors">Livraison Hors ile de France</option>
                                                        <option value="bureaux">Enlevement en nos bureaux</option>
                                                        <option value="13">Livraison dom/tom ou &agrave; l'&eacute;tranger</option>
                                                    </select>	
                                                </div>

                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="separ"></div>
                                </div> -->

                                <div class="row" id="dateL" name="ldate">
                                    <fieldset class="fieldset">

                                        <legend>Date de livraison&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span></legend>
                                        <div class="form-group">
                                            <label class="col-lg-3" id="addon-date">Choisissez votre date de livraison</label>
                                            <div class="col-lg-5" id="datelivraison">
                                                <input type="text" class="form-control" id="datepicker" aria-describedby="addon-date" name="data[Renouvellement][datelivraison]" placeholder="Votre date de livraison" readonly>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="separ"></div>
                                </div>

                                <div class="row" id="heureL">
                                    <fieldset class="fieldset">
                                        <legend>&nbsp;&nbsp;Horaire de livraison&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span></legend>
                                        Choisissez parmi ces tranches horaires: <br><br>
                                        <input type="radio" name="heure" id="matin" value="entre 9h-13h" />
                                        <label for="matin">Entre 9h et 13h </label><br>
                                        <input type="radio" name="heure" id="après-midi" value="entre 14h-18h"/>
                                        <label for="après-midi">Entre 14h et 18h </label><br>
                                        <input type="radio" name="heure" id="toute_la_journée" value="toute_la_journée" checked="checked"/>
                                        <label for="toute_la_journée">Toute la journée</label>
                                    </fieldset>
                                    <div class="separ"></div>
                                </div>



                                <div class="row">
                                    <div id="champsL">
                                        <fieldset class="fieldset">
                                            <legend>&nbsp;&nbsp;Vos coordonn&eacute;es&nbsp;&nbsp;<span class="glyphicon glyphicon-map-marker"></span></legend>
                                            <span class="important">* Informations obligatoire</span><br><br>
                                            <div class="contanier-fluid">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="type_patient" class="col-lg-2 control-label">Type de patient </label>
                                                        <div class="col-lg-5">
                                                            <select id="type_patient" class='form-control' name="type_patient">
                                                                <option>Patient déjà connu </option>
                                                                <option>Nouveau Patient</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="genre" class="col-lg-2 control-label"></label>
                                                        <div class="col-lg-2 ">
                                                            <select id="genre" class='form-control' name="genre">
                                                                <option>Mr </option>
                                                                <option>Mme</option>
                                                                <option>Mlle</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="nomP">
                                                        <label for="nom" class="col-lg-2 control-label">Nom *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required onBlur="champValide($(this).val(), 'nom', $('#nomP'));">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="prenom" class="col-lg-2 control-label">Prénom </label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="adresseP">
                                                        <label for="adresse" class="col-lg-2 control-label">Adresse *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" required onBlur="champValide($(this).val(), 'adresse', $('#adresseP'));">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="adresse2" class="col-lg-2 control-label">Adresse 2</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="adresse2" name="adresse" placeholder="Suite adresse">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="codepostalP">
                                                        <label for="codepostal" class="col-lg-2 control-label">Code postal *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Votre code postal" required onBlur="champValide($(this).val(), 'codepostal', $('#codepostalP'));">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="villeP">
                                                        <label for="ville" class="col-lg-2 control-label">Ville *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville" required onBlur="champValide($(this).val(), 'ville', $('#villeP'));">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="mailP">
                                                        <label for="mail" class="col-lg-2 control-label">E-mail *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="email" class="form-control" id="mail" name="mail" placeholder="mail@nomdomaine.fr" required onBlur="champValide($(this).val(), 'email', $('#mailP'));">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group" id="contactP">
                                                        <label for="mobile" class="col-lg-2 control-label">Téléphone 1 *</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="tel" class="form-control" id="mobile" name="mobile" required onBlur="champValide($(this).val(), 'contact', $('#contactP'));" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="fixe" class="col-lg-2 control-label">Téléphone 2</label>
                                                        <div class="col-lg-5 ">
                                                            <input type="text" class="form-control" id="fixe" name="fixe">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="" class="col-lg-2 control-label"></label>
                                                        <div class="col-lg-5 ">
                                                            <textarea type="text" class="form-control" name="commande" id="detail" rows="3" maxlength="400"
                                                                      placeholder="Saisissez ici les détails de votre commande."  required></textarea>
                                                        </div>
                                                        <!-- <div class="col-lg-3 alert alert-danger hide" role="alert" id="alert"> Erreur !</div> -->
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="fixe" class="col-lg-2 control-label">A renouveler</label>
                                                        <div class="col-lg-5 ">
                                                            <div class="input-group" style = "width:25%;">
                                                                <input type="number" class="form-control" name="nbrenouv" id="nbrenouv">
                                                                <span class="input-group-addon">fois</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="" class="col-lg-2 control-label"></label>
                                                        <div class="col-lg-5 ">
                                                            <div class="checkbox">
                                                              <label>
                                                                <input type="checkbox" id="avoirNumColis" name="avoirNumColis"> J'aimerais avoir le numéro de suivi de mon colis
                                                              </label>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="row">
                                                    <div class="form-group">
                                                        <!--<label for="" class="col-lg-2 control-label"><textarea name="code" rows="1" cols="5" style="border:none;" placeholder="Code" id="code"></textarea>
                                                        </label>-->
                                                        <div class="col-lg-5 ">
                                                            <button class="btn btn-primary" type="submit" id="prendre_rdv">
                                                                Prendre RDV &nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span>
                                                            </button>
                                                            <button class="btn btn-danger hide" type="reset" id="annuler">
                                                                Réinitialiser &nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </fieldset>

                <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>

                <input class="hidden" name="emailI" id="emailI" value="<?php echo($_SESSION['email'] ); ?>" readonly>
                <input class="hidden" name="nomI" id="nomI" value="<?php echo($_SESSION['nomI'] ); ?>" readonly>
                <input class="hidden" name="prenomI" id="prenomI" value="<?php echo($_SESSION['prenomI'] ); ?>" readonly>
                <input class="hidden" name="rueI" id="rueI" value="<?php echo($_SESSION['rueI'] ); ?>" readonly>
                <input class="hidden" name="code-postalI" id="code-postalI" value="<?php echo($_SESSION['code-postalI'] ); ?>" readonly>                                    
                <input class="hidden" name="villeI" id="villeI" value="<?php echo($_SESSION['villeI'] ); ?>" readonly>
                <input class="hidden" name="cabinet" id="cabinet" value="<?php echo($_SESSION['cabinet'] ); ?>" readonly>
                <input class="hidden" name="finess" id="finess" value="<?php echo($_SESSION['finess'] ); ?>" readonly>
                <input class="hidden" name="telI" id="telI" value="<?php echo($_SESSION['telI'] ); ?>" readonly>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_up">
            <img src="../img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
        </div>

        <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
        <div class="modal" id="loginerror">
            <div class="modal-dialog">
                <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                        <h4 class="modal-title" style="text-align: center;">Erreur !</h4>
                    </div>
                    <div class="modal-body">
                        <div class="warning" id="alert"></div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <footer class="">

            <div class="footer-info-area">
                <div class="container text-center alchem_footer_social_icon_1"> 
                    <!-- <ul class="footer-sns"><li><a  rel="" href="http://localhost/wordpress/#" data-placemeynt="top" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="YouTube"><i class="fa fa-youtube"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a></li></ul>                    <div class="clearfix"></div>
                    -->
                    <div class="site-info">
                        <img src="../img/logo2.png" class = "logo_footer">
                        © Copyright <a href="#">OUSOFT SAS</a>- 2017 38 Rue de la convention, 94270 Le Kremlin-Bicêtre
                    </div>
                </div>
            </div>          
        </footer>

        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-ui.min.js"></script>


        <script type="text/javascript" src="../bootstrap/js/datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#prendre_rdv').click(function(e) {
                    e.preventDefault();

                    var laDate = $('#datepicker').val();
                    var annee = laDate.substring(6, 10);
                    var mois = laDate.substring(3, 5);
                    var jour = laDate.substring(0, 2);
                    
                    var datelivraison = annee+"-"+mois+"-"+jour;

                    

                    var det = document.getElementById('detail');
                    //var cod = document.getElementById('code');
                    var livreur = $('input[name=livreur]:checked').val();
                    var depart = document.getElementById('selectRegion');
                    var patient = document.getElementById('type_patient');
                    var sexe = document.getElementById('genre');
                    //var departement = depart.options[depart.selectedIndex].value;
                    var departement = "";

                    var heure = $('input[name=heure]:checked').val();
                    var type_patient = patient.options[patient.selectedIndex].value;
                    var genre = sexe.options[sexe.selectedIndex].value;
                    var nom = $('#nom').val();
                    var prenom = $('#prenom').val();
                    var adresse = $('#adresse').val();
                    var adresse2 = $('#adresse2').val();
                    var codepostal = $('#codepostal').val();
                    var ville = $('#ville').val();
                    var mail = $('#mail').val();
                    var mobile = $('#mobile').val();
                    var fixe = $('#fixe').val();
                    var nomI = $('#nomI').val();
                    var prenomI = $('#prenomI').val();
                    var emailI = $('#emailI').val();
                    var rueI = $('#rueI').val();
                    var villeI = $('#villeI').val();
                    var cpI = $('#code-postalI').val();
                    var finess = $('#finess').val();
                    var cabinet = $('#cabinet').val();
<<<<<<< HEAD
                    var nbrenouv = $('#nbrenouv').val();
                    var telI = $('#telI').val();

=======
                    var mes = "";
>>>>>>> 91ecced5f193089bf7a3507476ab60b5de805617
                    //var code = cod.value;
                    if($('#avoirNumColis').prop("checked") == true)
                    {
                        var colis = "Le client souhaite avoir le numéro de suivi de son colis ";
                        mes = "<html><head></head><body><p>" + genre + " " + nom + " " + prenom + " ( " + type_patient + " )<br>Nous avons bien reçu votre commande de:<br><b>" + det.value + "</b></p><br><p>Nous livrerons le : <b>" + datelivraison + " " + heure + "</b><br>Mode de livraison choisi : <b>" + livreur + "</b><br>L\'adresse de livraison est : <b>" + adresse + " - " + adresse2 + " " + codepostal + " " + ville + "</b></p><br>"+colis+"<br><p>Merci de votre confiance,<br>Le service client, <br>Medsoft sante <br>01 46 72 10 43 </p><br><p>La livraison se fera sous 24 à 48h après le traitement de la commande,<br> sous résèrve de la disponibilité des produits<br>Medsoft Santé</p>";
                    } else {
                         mes = "<html><head></head><body><p>" + genre + " " + nom + " " + prenom + " ( " + type_patient + " )<br>Nous avons bien reçu votre commande de:<br><b>" + det.value + "</b></p><br><p>Nous livrerons le : <b>" + datelivraison + " " + heure + "</b><br>Mode de livraison choisi : <b>" + livreur + "</b><br>L\'adresse de livraison est : <b>" + adresse + " - " + adresse2 + " " + codepostal + " " + ville + "</b></p><br><p>Merci de votre confiance,<br>Le service client, <br>Medsoft sante <br>01 46 72 10 43 </p><br><p>La livraison se fera sous 24 à 48h après le traitement de la commande,<br> sous résèrve de la disponibilité des produits<br>Medsoft Santé</p>";
                    }

                    console.log(mes);
                    var nomComplet = '';
                    var adresseComplet = '';
                    var contact = '';

                    if (prenom != '')
                    {
                        nomComplet = nom + ' ' + prenom;
                    }
                    else
                    {
                        nomComplet = nom;
                    }

                    if (adresse2 != '')
                    {
                        adresseComplet = adresse + ' ' + adresse2 + ' - ' + codepostal + ' ' + ville;
                    }
                    else
                    {
                        adresseComplet = adresse + ' - ' + codepostal + ' ' + ville;
                    }


                    if (fixe != '')
                    {
                        contact = mobile + ' - ' + fixe;
                    }
                    else
                    {
                        contact = mobile;
                    }

                    var params = 'livreur=' + livreur + '&departement=' + departement + '&datelivraison=' + datelivraison + '&heure=' + heure + '&type_patient=' + type_patient + '&genre=' + genre + '&nom=' + nom + '&prenom=' + prenom + '&adresse=' + adresse + '&adresse2=' + adresse2 + '&codepostal=' + codepostal + '&ville=' + ville + '&mail=' + mail + '&mobile=' + mobile + '&fixe=' + fixe + '&commande=' + det.value + '&message=' + mes + '&nomComplet=' + nomComplet + '&adresseComplet=' + adresseComplet + '&contact=' + contact + "&nomI=" + nomI + "&prenomI=" + prenomI + "&emailI=" + emailI + "&rueI=" + rueI + "&villeI=" + villeI + "&cpI=" + cpI + "&finess=" + finess + "&cabinet=" + cabinet + "&nbrenouv=" + nbrenouv + "&telI=" + telI ;

                    if (livreur != '' && nom != '' && adresse != '' && mail != '' && codepostal != '' && ville != '' && mobile != '' && ($('#nomP').hasClass('has-success') && $('#adresseP').hasClass('has-success') && $('#mailP').hasClass('has-success') && $('#codepostalP').hasClass('has-success') && $('#villeP').hasClass('has-success') && $('#contactP').hasClass('has-success')))
                    {
                       if (confirm(" Voulez-vous confirmer votre commande ? "))
                        {
                            $('#alert').addClass('hide');
                            $.ajax({
                                url: "renouvellements.php",
                                type: "POST",
                                data: params,
                                success: function (server_response) {
                                    alert(server_response);
                                },
                                error: function (server_response) {
                                    alert(server_response);
                                }
                            });
                        };
                        $('#annuler').trigger('click');
                        $('#nomP').removeClass('has-success');
                        $('#adresseP').removeClass('has-success');
                        $('#mailP').removeClass('has-success');
                        $('#codepostalP').removeClass('has-success');
                        $('#villeP').removeClass('has-success');
                        $('#contactP').removeClass('has-success');
                    } else 
                    {
                        $('#alert').html("<p> Vérifiez si vous avez bien rempli les champs obligatoires !</p>");
                        $('#triggerwarning').trigger('click');
                        setTimeout(function () {
                            $('#ferme').trigger('click');
                        }, 4000);
                    }
                    
                });
            });
        </script>
        <script type="text/javascript" src="../bootstrap/js/datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });

                var auto_refresh = setInterval(
                    function() 
                    {
                        var email = $('#emailP').val();

                        $.ajax({
                            url: "../badges_inf.php",
                            type: "POST",
                            data: "email="+email,
                            success: function(server_response) 
                            {  
                                $('#badges').html(server_response);
                            },
                            error: function(server_response) 
                            {  
//                              alert('Erreur :' + server_response);
                            }
                        });
                    }, 1000);
            });

            $(window).scroll(function ()
            {
                if ($(window).scrollTop() > 400)
                    $('#returnOnTop').fadeIn();
                else
                    $('#returnOnTop').fadeOut();
            });


            function champValide(value, type, champ)
            {
                var regex =  /^\d+$/;
                var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

                if(type==="nom" || type==="adresse" || type==="ville")
                {
                    if(value.length < 2)
                    {
                        champ.removeClass('has-success');
                        champ.addClass('has-error');
                    } else {
                        champ.removeClass('has-error');
                        champ.addClass('has-success');
                    }   
                } else if(type==="contact")
                {
                    if(value.length >= 9 && regex.test(value))
                    {
                        champ.removeClass('has-error');
                        champ.addClass('has-success');
                    } else {
                        champ.removeClass('has-success');
                        champ.addClass('has-error');
                    }  
                } else if(type==="codepostal")
                {
                    if(value.length >= 2 && regex.test(value))
                    {
                        champ.removeClass('has-error');
                        champ.addClass('has-success');
                    } else {
                        champ.removeClass('has-success');
                        champ.addClass('has-error');
                    }  
                } else if (type="email") 
                {
                    if(value.length >= 5 || reg.test(value))
                    {
                        champ.removeClass('has-error');
                        champ.addClass('has-success');
                    } else {
                        champ.removeClass('has-success');
                        champ.addClass('has-error');
                    }  
                }
            };
        </script>
    </body>
</html>