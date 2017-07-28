<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: ../login.html");
}

include_once "cnx.php";

$req = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $_SESSION['email'] . "'");
$data = $req->fetch();
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>modification profil</title>

        <meta name="robots" content="noindex,follow">
        <link rel="stylesheet" href="../others/index.css" type="text/css" media="all">
        <!-- 
                <link rel="stylesheet" id="bootstrap-css" href="./others/bootstrap.min.css" type="text/css"> -->
        <link rel="stylesheet" id="animate-css" href="../others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="../others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="../others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="../others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="../others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="../others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="../others/style.css" type="text/css" media="all">

        <link href="../bootstrap/css/paper.css" rel="stylesheet">

        <!-- Meta OG tags by Kiwi Social Sharing Plugin -->
        <meta property="og:type" content="article"> 
        <meta property="og:title" content="Alchem">
        <meta property="og:image" content="http://localhost/wordpress/wp-content/plugins/kiwi-social-share/admin/images/placeholder-image.png">
        <meta property="og:url" content="http://localhost/wordpress/">
        <meta property="og:site_name" content="">
        <meta property="article:published_time" content="2017-02-28T18:11:19+00:00">
        <meta property="article:modified_time" content="2017-02-28T18:11:19+00:00">
        <meta property="og:updated_time" content="2017-02-28T18:11:19+00:00">
        <!--/end meta tags by Kiwi Social Sharing Plugin --><style id="cw_css">#about {
                margin-top:14rem!important
            }
            .col-sm-12,div.col-sm-8.col-sm-offset-2 {
                margin-top:-70rem!important
            }
            .alert
            {
                position: absolute;
                top: 35%;
                left: 5%;
                z-index: 0;
                background-color: rgba(1,127,175,.61);
                border-radius: 10px;
                border-color: rgba(1,127,175,.61);
                font-size: 1.4em;
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
                height: 20%;
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
            .btn-warning, .btn-primary{
                background-color: #007EAF;
                color: #fff;
            }
            .btn-warning:hover,
            .btn-warning:active,
            .btn-warning:focus,
            .btn-primary:hover,
            .btn-primary:active,
            .btn-primary:focus{
                background-color: #333;
                color: #fff;
            }
            </style><!-- <meta name="vfb" version="2.9.2" /> -->
        <style type="text/css">
        </style></head>
    <body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-40 has-slider">
        <div class="wrapper ">
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
                            <a href="../index.html"><img src="../img/log.png"></a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../carte.php">Carte</a></li>
                            <li><a href="../notification.php"><span id="badges">Tableau de bord</span></a></li>
                            <li><a href="modifierprofil.php">Modifier mon profil</a></li>
                            <li><a href="../contact1.php">Contact</a></li>
                            <li><a href="./commentmarche_pat.php">Comment ça marche</a></li>
                            <li><a href="./deconnexion.php">Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>    

            <div id="alchem-home-sections">

                <section class="section magee-section alchem-home-section-1 alchem-home-style-0" id="section-2">
                    <div class="section-content">
                        <div class="container">
                            <div class="alchem-animated animated fadeInRight" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" style="visibility: visible; animation-duration: 0.9s;">
                                <div class="magee-promo-box">
                                    <div class="promo-info">
                                        <h2 style="text-align: center" class="section-title alchem_section_4_title"><strong>Modifier votre profil</strong></h2><br>

                                        <div class="row">
                                            <form method="POST" action="update-profil-patient.php" id="form-filter" class="form-horizontal" enctype="multipart/form-data">
                                                <fieldset>
                                                    <div class="col-lg-7">

                                                        <div class="form-group">
                                                            <h4>Vos informations personnelles :</h4><br>
                                                            <label for="nom" class="col-sm-2 control-label">Nom:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="nom" required="" class="form-control" name="nomP" id="nomP" value="<?php echo($data['nomP']); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group hidden">
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="nom" required="" class="form-control" name="idP" id="idP" value="<?php echo($data['id']); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="prenom" class="col-sm-2 control-label">Prenom:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="prenom" required="" class="form-control" name="prenomP" id="prenomP" value="<?php echo($data['prenomP']); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="email" class="col-sm-2 control-label">Email:</label>
                                                            <div class="col-sm-9">
                                                                <input type="email" required="" placeholder="email" class="form-control" name="emailP" id="emailP" value="<?php echo($data['emailP']); ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mdp" class="col-sm-2 control-label">Mot de passe:</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" placeholder="mot de passe" class="form-control" name="mdpP" id="mdpP">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="conf-mdp" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-9">
                                                                <input type="password" placeholder="confirmation du mot de passe" class="form-control" name="conf-mdp" id="conf-mdp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tel" class="col-sm-2 control-label">Téléphone:</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" required="" placeholder="téléphone" class="form-control" name="telP" id="telP" value="<?php echo($data['telP']); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tel" class="col-sm-2 control-label">Adresse:</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" required="" placeholder="numéro et nom de rue" class="form-control" name="rueP" id="rueP" value="<?php echo($data['rueP']); ?>">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="number" required="" placeholder="code postal" class="form-control" name="code-postalP" id="code-postalP" value="<?php echo($data['code-postalP']); ?>">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="text" required="" placeholder="ville" class="form-control" name="villeP" id="villeP" value="<?php echo($data['villeP']); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tel" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-3">
                                                                <input type="text" placeholder="code d'accès" class="form-control" name="code-acces" id="code-acces" value="<?php echo($data['code-acces']); ?>">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="text" placeholder="etage" class="form-control" name="etage" id="etage" value="<?php echo($data['etage']); ?>">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="text" placeholder="info supplémentaire" class="form-control" name="info-sup" id="info-sup" value="<?php echo($data['info-sup']); ?>">
                                                            </div>
                                                        </div><br><br>


                                                        <div class="panel panel-info" id="listeSoins">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">Vos informations de soins :</h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="">
                                                                    <?php if (!empty($data['TypeDeSoin']) && !empty($data['FrequenceDeSoin']) && !empty($data['Par'])) { ?>
                                                                        <?php
                                                                            $typeSoin = explode("|", utf8_encode($data['TypeDeSoin']));
                                                                            $frequenceSoin = explode("|", $data['FrequenceDeSoin']);
                                                                            $par = explode("|", $data['Par']);
                                                                        
                                                                                foreach ($typeSoin as $typeSoin && $frequenceSoin as $frequenceSoin && $par as $par) 
                                                                                { 
                                                                                    echo "- "?><b><?php.$typeSoin.?></b><?php" : ".$frequenceSoin." fois par ".$par;
                                                                                    
                                                                        ?> <br>
                                                                         <?php; } ?>
                                                                        <p>
                                                                            <b><?php //echo(utf8_encode($data['type-soinP1'])); ?></b> : <?php //echo($data['frequence-soin1']); ?> <?php // fois par echo($data['par1']); ?>
                                                                        </p>
                                                                    <?php } ?>
                                                                    
                                                                </div>
                                                                <div class="btn btn-warning" id="changesoins" onClick="changeSoins();"> Changer mes informations de soins</div>
                                                            </div>
                                                        </div>

                                                        <div class="hidden" id="infosSoins">
                                                            <h4>Changer vos informations de soins :</h4><br>
                                                                <div class="row">
                                                                    <div class="form-group col-sm-5">
                                                                        <label for="type-soin" class="col-sm-5 control-label">Type de soin:</label>
                                                                        <div class="col-sm-7">
                                                                            <select name="type-soin0" required="" onchange="type0()" class="form-control" id="select0">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="Soins de stomie">Soins de stomie</option>
                                                                                <option value="Soins des plaies">Soins des plaies </option>
                                                                                <option value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                <option value="Perfusion">Perfusion </option>
                                                                                <option value="Prise de sang">Prise de sang</option>
                                                                                <option value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                <option value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                <option value="Aide à la toilette">Aide à la toilette</option>
                                                                                <option value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-7">
                                                                        <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                        <div class="col-sm-4">
                                                                            <select name="frequence-soin0" required="" class="form-control">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="1">X 1</option>
                                                                                <option value="2">X 2</option>
                                                                                <option value="3">X 3</option>
                                                                                <option value="4">X 4</option>
                                                                                <option value="5">X 5</option>
                                                                                <option value="6">X 6</option>
                                                                                <option value="7">X 7</option>
                                                                                <option value="8">X 8</option>
                                                                                <option value="9">X 9</option>
                                                                                <option value="10">X 10</option>
                                                                                <option value="11">X 11</option>
                                                                                <option value="12">X 12</option>
                                                                            </select>                    
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <select name="par0" required="" class="form-control">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="jour"> / jour</option>
                                                                                <option value="semaine"> / semaine</option>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <!--<div class="form-group">
                                                                        <label for="heure" class="col-sm-2 control-label">Heure des soins:</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" required="" placeholder="heure par fréquence de soin" class="form-control" name="heure1" id="heure1">
                                                                        </div>
                                                                    </div>-->
                        
                                                                    <script>
                        
                                                                        function type0() {
                                                                            var selection = document.getElementById("select0").value;
                                                                            if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa0");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type0").style.display = (window.getComputedStyle(document.querySelector('#type0')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    
                                                                    <div id="type0" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                            <select name="type-soin1" onchange="type1()" class="form-control" id="select1">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option id="stomie0" value="Soins de stomie">Soins de stomie</option>
                                                                                <option id="plaies0" value="Soins des plaies">Soins des plaies </option>
                                                                                <option id="oncologie0" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                <option id="perfusion0" value="Perfusion">Perfusion </option>
                                                                                <option id="sang0" value="Prise de sang">Prise de sang</option>
                                                                                <option id="injection0" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                <option id="diabetique0" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                <option id="toilette0" value="Aide à la toilette">Aide à la toilette</option>
                                                                                <option id="prepa0" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                            </select>                    
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin1" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par1" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                    </div>	
                                                                        <!--<div class="form-group">
                                                                            <label for="heure" class="col-sm-2 control-label">Heure des soins:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" placeholder="heure par fréquence de soin" class="form-control" name="heure2" id="heure2">
                                                                            </div>
                                                                        </div>-->
                                                                    </div>
                                                                    <script>
                        
                                                                        function type1() {
                                                                            var selection = document.getElementById("select1").value;
                                                                            if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa1");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type1").style.display = (window.getComputedStyle(document.querySelector('#type1')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type1" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                            <select name="type-soin2" onchange="type2()" class="form-control" id="select2">
                                                                                <option id="" value="">-----choisir-----</option>
                                                                                <option id="stomie1" value="Soins de stomie">Soins de stomie</option>
                                                                                <option id="plaies1" value="Soins des plaies">Soins des plaies </option>
                                                                                <option id="oncologie1" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                <option id="perfusion1" value="Perfusion">Perfusion </option>
                                                                                <option id="sang1" value="Prise de sang">Prise de sang</option>
                                                                                <option id="injection1" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                <option id="diabetique1" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                <option id="toilette1" value="Aide à la toilette">Aide à la toilette</option>
                                                                                <option id="prepa1" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                            </select>                    
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin2" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par2" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        <!--<div class="form-group">
                                                                            <label for="heure" class="col-sm-2 control-label">Heure des soins:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" placeholder="heure par fréquence de soin" class="form-control" name="heure3" id="heure3">
                                                                            </div>
                                                                        </div>-->
                                                                    </div>
                                                                    <script>
                        
                                                                        function type2() {
                                                                            var selection = document.getElementById("select2").value;
                                                                            if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa2");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type2").style.display = (window.getComputedStyle(document.querySelector('#type2')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type2" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                            <select name="type-soin3" onchange="type3()" class="form-control" id="select3">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option id="stomie2" value="Soins de stomie">Soins de stomie</option>
                                                                                <option id="plaies2" value="Soins des plaies">Soins des plaies </option>
                                                                                <option id="oncologie2" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                <option id="perfusion2" value="Perfusion">Perfusion </option>
                                                                                <option id="sang2" value="Prise de sang">Prise de sang</option>
                                                                                <option id="injection2" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                <option id="diabetique2" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                <option id="toilette2" value="Aide à la toilette">Aide à la toilette</option>
                                                                                <option id="prepa2" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                            </select>                    
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin3" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par3" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        </div>
                        
                                                                        <!--<div class="form-group">
                                                                            <label for="heure" class="col-sm-2 control-label">Heure des soins:</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" placeholder="heure par fréquence de soin" class="form-control" name="heure4" id="heure4">
                                                                            </div>
                                                                        </div>-->
                                                                    </div>
                        
                                                                    <script>
                                                                    function type3() {
                                                                            var selection = document.getElementById("select3").value;
                                                                             if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa3");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type3").style.display = (window.getComputedStyle(document.querySelector('#type3')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type3" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="type-soin4" class="col-sm-2 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                                <select name="type-soin4" onchange="type4()" class="form-control" id="select4">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option id="stomie3" value="Soins de stomie">Soins de stomie</option>
                                                                                    <option id="plaies3" value="Soins des plaies">Soins des plaies </option>
                                                                                    <option id="oncologie3" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                    <option id="perfusion3" value="Perfusion">Perfusion </option>
                                                                                    <option id="sang3" value="Prise de sang">Prise de sang</option>
                                                                                    <option id="injection3" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                    <option id="diabetique3" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                    <option id="toilette3" value="Aide à la toilette">Aide à la toilette</option>
                                                                                    <option id="prepa3" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin4" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par4" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <script>
                                                                    function type4() {
                                                                            var selection = document.getElementById("select4").value;
                                                                             if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa4");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type4").style.display = (window.getComputedStyle(document.querySelector('#type4')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type4" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="type-soin5" class="col-sm-2 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                                <select name="type-soin5" onchange="type5()" class="form-control" id="select5">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option id="stomie4" value="Soins de stomie">Soins de stomie</option>
                                                                                    <option id="plaies4" value="Soins des plaies">Soins des plaies </option>
                                                                                    <option id="oncologie4" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                    <option id="perfusion4" value="Perfusion">Perfusion </option>
                                                                                    <option id="sang4" value="Prise de sang">Prise de sang</option>
                                                                                    <option id="injection4" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                    <option id="diabetique4" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                    <option id="toilette4" value="Aide à la toilette">Aide à la toilette</option>
                                                                                    <option id="prepa4" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin5" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par5" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                    function type5() {
                                                                            var selection = document.getElementById("select5").value;
                                                                             if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa5");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type5").style.display = (window.getComputedStyle(document.querySelector('#type5')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type5" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                            <label for="type-soin6" class="col-sm-2 control-label">Autre type de soin:</label>
                                                                            <div class="col-sm-7">
                                                                                <select name="type-soin6" onchange="type6()" class="form-control" id="select6">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option id="stomie5" value="Soins de stomie">Soins de stomie</option>
                                                                                    <option id="plaies5" value="Soins des plaies">Soins des plaies </option>
                                                                                    <option id="oncologie5" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                    <option id="perfusion5" value="Perfusion">Perfusion </option>
                                                                                    <option id="sang5" value="Prise de sang">Prise de sang</option>
                                                                                    <option id="injection5" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                    <option id="diabetique5" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                    <option id="toilette5" value="Aide à la toilette">Aide à la toilette</option>
                                                                                    <option id="prepa5" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin6" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par6" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                    </div>    
                                                                    </div>
                                                                    <script>
                                                                    function type6() {
                                                                            var selection = document.getElementById("select6").value;
                                                                             if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa6");
                                                                                element.parentNode.removeChild(element);
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                        
                                                                            document.querySelector("#type6").style.display = (window.getComputedStyle(document.querySelector('#type6')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div id="type6" style="display: none;">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-5">
                                                                                <label for="type-soin7" class="col-sm-2 control-label">Autre type de soin:</label>
                                                                                <div class="col-sm-7">
                                                                                    <select name="type-soin7" onchange="type7()" class="form-control" id="select7">
                                                                                        <option value="">-----choisir-----</option>
                                                                                        <option id="stomie6" value="Soins de stomie">Soins de stomie</option>
                                                                                        <option id="plaies6" value="Soins des plaies">Soins des plaies </option>
                                                                                        <option id="oncologie6" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                                        <option id="perfusion6" value="Perfusion">Perfusion </option>
                                                                                        <option id="sang6" value="Prise de sang">Prise de sang</option>
                                                                                        <option id="injection6" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                                        <option id="diabetique6" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                                        <option id="toilette6" value="Aide à la toilette">Aide à la toilette</option>
                                                                                        <option id="prepa6" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                                    </select>                    
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-7">
                                                                            <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                            <div class="col-sm-4">
                                                                                <select name="frequence-soin7" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="1">X 1</option>
                                                                                    <option value="2">X 2</option>
                                                                                    <option value="3">X 3</option>
                                                                                    <option value="4">X 4</option>
                                                                                    <option value="5">X 5</option>
                                                                                    <option value="6">X 6</option>
                                                                                    <option value="7">X 7</option>
                                                                                    <option value="8">X 8</option>
                                                                                    <option value="9">X 9</option>
                                                                                    <option value="10">X 10</option>
                                                                                    <option value="11">X 11</option>
                                                                                    <option value="12">X 12</option>
                                                                                </select>                    
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <select name="par7" class="form-control">
                                                                                    <option value="">-----choisir-----</option>
                                                                                    <option value="jour"> / jour</option>
                                                                                    <option value="semaine"> / semaine</option>
                                                                                </select>                    
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                    function type7() {
                                                                            var selection = document.getElementById("select7").value;
                                                                             if (selection === "Soins de stomie")
                                                                            {
                                                                                var element = document.getElementById("stomie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins des plaies")
                                                                            {
                                                                                var element = document.getElementById("plaies7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                                            {
                                                                                var element = document.getElementById("oncologie7");
                                                                                element.parentNode.removeChild(element);
                                                                            } else if (selection === "Perfusion")
                                                                            {
                                                                                var element = document.getElementById("perfusion7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise de sang")
                                                                            {
                                                                                var element = document.getElementById("sang7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                                            {
                                                                                var element = document.getElementById("injection7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Prise en charge des patients diabétiques")
                                                                            {
                                                                                var element = document.getElementById("diabetique7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Aide à la toilette")
                                                                            {
                                                                                var element = document.getElementById("toilette7");
                                                                                element.parentNode.removeChild(element);
                                                                            }
                                                                            else if (selection === "Préparation et distribution des traitements")
                                                                            {
                                                                                var element = document.getElementById("prepa7");
                                                                                element.parentNode.removeChild(element);
                                                                            } 
                        
                                                                            document.querySelector("#type7").style.display = (window.getComputedStyle(document.querySelector('#type7')).display == 'none') ? "block" : "hide";
                                                                        }
                        
                                                                    </script>
                                                                    <div class="form-group" id="type7" style="display: none;">
                                                        <div class="row">
                                                            <div class="form-group col-sm-5">
                                                                <label for="type-soin8" class="col-sm-2 control-label">Autre type de soin:</label>
                                                                <div class="col-sm-7">
                                                                    <select name="type-soin8" class="form-control">
                                                                        <option value="">-----choisir-----</option>
                                                                        <option id="stomie7" value="Soins de stomie">Soins de stomie</option>
                                                                        <option id="plaies7" value="Soins des plaies">Soins des plaies </option>
                                                                        <option id="oncologie7" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                                        <option id="perfusion7" value="Perfusion">Perfusion </option>
                                                                        <option id="sang7" value="Prise de sang">Prise de sang</option>
                                                                        <option id="injection7" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                                        <option id="diabetique7" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                                        <option id="toilette7" value="Aide à la toilette">Aide à la toilette</option>
                                                                        <option id="prepa7" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                                    </select>                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-7">
                                                                <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                                <div class="col-sm-4">
                                                                    <select name="frequence-soin8" class="form-control">
                                                                        <option value="">-----choisir-----</option>
                                                                        <option value="1">X 1</option>
                                                                        <option value="2">X 2</option>
                                                                        <option value="3">X 3</option>
                                                                        <option value="4">X 4</option>
                                                                        <option value="5">X 5</option>
                                                                        <option value="6">X 6</option>
                                                                        <option value="7">X 7</option>
                                                                        <option value="8">X 8</option>
                                                                        <option value="9">X 9</option>
                                                                        <option value="10">X 10</option>
                                                                        <option value="11">X 11</option>
                                                                        <option value="12">X 12</option>
                                                                    </select>                    
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <select name="par8" class="form-control">
                                                                        <option value="">-----choisir-----</option>
                                                                        <option value="jour"> / jour</option>
                                                                        <option value="semaine"> / semaine</option>
                                                                    </select>                    
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div> 
                                                        </div>

                                                    </div>

                                                        <br>
                                                        <div class="form-group">
                                                            <label for="ajout" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-8">
                                                                <button type="submit" id="insert" class="btn btn-primary">Valider les changements&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-edit"></i> </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">Photo:</h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="col-md-9">
                                                                    <input name="photo" id="photo" type="file" class="hidden">
                                                                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                                                    <span class="help-block"></span>
                                                                </div><br>
                                                                <div class="row col-lg-offset-2">
                                                                    <div id="image_preview">
                                                                        <img class="thumbnail img-responsive" style="vertical-align: center;" width="300px" heigth="300px" src="../image-person/<?php echo($data['photo']); ?>">
                                                                        <blockqoute id="titre"><?php echo($data['photo']); ?></blockqoute>
                                                                    </div><br>
                                                                    <div class="btn btn-warning" id="changeTof" onClick="change();"> Changer ma photo de profil</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
            <div class="modal" id="loginerror">
                <div class="modal-dialog">
                    <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                            <h4 class="modal-title" style="text-align: center;">Message</h4>
                        </div>
                        <div class="modal-body">
                            <div class="warning" id="erreur_inscription"></div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>


            <div class="btn_up">
                <img src="../img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <!--Footer-->
            <footer class="">

                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1"> 
                        <!-- <ul class="footer-sns"><li><a  rel="" href="http://localhost/wordpress/#" data-placemeynt="top" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="YouTube"><i class="fa fa-youtube"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a></li></ul>                    <div class="clearfix"></div>
                        -->
                        <div class="site-info">
                            <img src="../img/logo2.png" class = "logo_footer">
                            © Copyright <a href="#">OUSOFT SAS 2017</a> - 38 Rue de la convention, 94270 Le Kremlin-Bicêtre
                        </div>
                    </div>
                </div>          
            </footer>
        </div>  

        <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
                                                                        function change()
                                                                        {
                                                                            $('#photo').trigger('click');
                                                                        }
                                                                        ;

                                                                        function changeSoins()
                                                                        {
                                                                            $('#listeSoins').addClass('hidden');
                                                                            $('#infosSoins').removeClass('hidden');
                                                                            $('[name="TypeDeSoin"]').val("");
                                                                            //$('[name="type-soinP2"]').val("");
                                                                            //$('[name="type-soinP3"]').val("");
                                                                            //$('[name="type-soinP4"]').val("");

                                                                            $('[name="FrequenceDeSoin"]').val("");
                                                                            //$('[name="frequence-soin2"]').val("");
                                                                            //$('[name="frequence-soin3"]').val("");
                                                                            //$('[name="frequence-soin4"]').val("");

                                                                            $('[name="Par"]').val("");
                                                                            //$('[name="par2"]').val("");
                                                                            //$('[name="par3"]').val("");
                                                                            //$('[name="par4"]').val("");
                                                                        }
                                                                        ;

                                                                        $(function () {
                                                                            // A chaque sélection de fichier
                                                                            $('#form-filter').find('input[name="photo"]').on('change', function (e)
                                                                            {
                                                                                var files = $(this)[0].files;

                                                                                if (files.length > 0) {
                                                                                    var file = files[0],
                                                                                            $image_preview = $('#image_preview');

                                                                                    // Ici on injecte les informations recoltées sur le fichier pour l'utilisateur
                                                                                    $image_preview.find('.thumbnail').removeClass('hidden');
                                                                                    $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
                                                                                    $image_preview.find('h4').html(file.name);
                                                                                    $image_preview.find('#titre').html(file.name);
                                                                                }
                                                                            });
                                                                        });

                                                                        $('#insert').click(function (e)
                                                                        {
                                                                            e.preventDefault();

                                                                            var form = $('#form-filter').get(0);
                                                                            var formData = new FormData(form);// get the form data
                                                                            // on envoi formData vers mail.php
                                                                            $.ajax({
                                                                                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                                                                url: 'update-profil-patient.php', // the url where we want to POST
                                                                                data: formData, // our data object
                                                                                dataType: 'text', // what type of data do we expect back from the server
                                                                                processData: false,
                                                                                contentType: false,
                                                                                success: function (server_response)
                                                                                {
                                                                                    if (server_response === "succes")
                                                                                    {
                                                                                        window.location.href = "carte.php";
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        $('#erreur_inscription').html('<p>' + server_response + '</p>');
                                                                                        $('#triggerwarning').trigger('click');
                                                                                        setTimeout(function () {
                                                                                            $('#ferme').trigger('click');
                                                                                        }, 4000);
                                                                                    }
                                                                                },
                                                                                error: function (server_response)
                                                                                {
                                                                                    alert(server_response);
                                                                                }
                                                                            });
                                                                        });
        </script>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                $('[name="TypeDeSoin"]').val("<?php echo($data['TypeDeSoin']); ?>");
                $('[name="FrequenceDeSoin"]').val("<?php echo($data['FrequenceDeSoin']); ?>");
                $('[name="Par"]').val("<?php echo($data['Par']); ?>");

                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });

                var auto_refresh = setInterval(
                        function ()
                        {
                            var status = "lu";
                            var email = $('#emailP').val();

                            $.ajax({
                                url: "../badges.php",
                                type: "POST",
                                data: "email=" + email,
                                success: function (server_response)
                                {
                                    $('#badges').html(server_response);
                                },
                                error: function (server_response)
                                {
                                    alert('Erreur :' + server_response);
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
        </script>
    </body>
</html>
