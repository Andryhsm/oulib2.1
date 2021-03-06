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
                                            <form method="POST" id="form-filter" class="form-horizontal" >
                                                <fieldset>
                                                    <div class="col-lg-7 col-md-7">

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

                                                            <!-- INPUT POUR TYPE DE SOIN FREQUENCE DE SOIN ET PAR -->
                                                            <div class="col-sm-3 hidden">
                                                                <input type="text" name="TypeDeSoin" id="TypeDeSoin" value="">
                                                                <input type="text" name="FrequenceDeSoin" id="FrequenceDeSoin" value="">
                                                                <input type="text" name="Par" id="Par" value="">
                                                            </div>


                                                        </div><br><br>


                                                        <div class="panel panel-info" id="listeSoins">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">Vos informations de soins :</h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="">
                                                                
                                                                    <?php
                                                                    $TypeDeSoin = explode('|', utf8_encode($data['TypeDeSoin']));
                                                                    $FrequenceDeSoin = explode('|', $data['FrequenceDeSoin']);
                                                                    $Par = explode('|', $data['Par']);
                                                                    
                                                                    $lesTypesoins = array();
                                                                    $lesFrequencesoins = array();
                                                                    $lesPar = array();

                                                                            echo '<table class="table table-bordered table-hover">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Type </th>
                                                                                            <th>Frequence</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                   
                                                                                    <tbody>';

                                                                                            for($i = 0; $i <= 8; $i++){
                                                                                                    
                                                                                                if($TypeDeSoin[$i] != ""){
                                                                                                    echo "<tr>";
                                                                                                        echo "<td> -".$TypeDeSoin[$i]."</td>";
                                                                                                        echo "<td> ".$FrequenceDeSoin[$i]." fois par ".$Par[$i]."</td>";
                                                                                                    echo "</tr>";
                                                                                                    $lesTypesoins[] = $TypeDeSoin[$i];
                                                                                                    $lesFrequencesoins[] = $FrequenceDeSoin[$i];
                                                                                                    $lesPar[] = $Par[$i];
                                                                                                }
                                                                                            }
                                                                         echo     '</tbody>
                                                                                </table>';

                                                                        ?>
                                                                    
                                                                </div>
                                                                <div class="btn btn-warning" id="changesoins" onClick="changeSoins();"> Changer mes informations de soins</div>
                                                            </div>
                                                        </div>

                                                        <div class="hidden" id="infosSoins">
                                                            <h4>Changer vos informations de soins :</h4><br>
                                                            
                                                <div class="form-group col-sm-6">
                                               
                                                <label for="tel" class="col-sm-5 control-label">Type de soin:</label>
                                                <div class="col-sm-7">
                                                        <input value="Soins de stomie" type="checkbox" />
                                                        <input value="Soins des plaies" type="checkbox" />
                                                        <input value="Soins d’oncologie et traitement de chimiothérapie" type="checkbox"/>
                                                        <input value="Perfusion" type="checkbox"/>
                                                        <input value="Prise de sang" type="checkbox"/>
                                                        <input value="Injection sous cutané, intramusculaire, intraveineuse" type="checkbox"/>
                                                        <input value="Prise en charge des patients diabétiques" type="checkbox"/>
                                                        <input value="Aide à la toilette" type="checkbox"/>
                                                        <input value="Préparation et distribution des traitements" type="checkbox"/>      
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                <div class="col-sm-4">
                                                    <select id="frequence-soin0" name="frequence-soin0" required="" class="form-control">
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
                                                <div class="col-sm-4">
                                                    <select id="par0" name="par0" required="" class="form-control">
                                                        <option value="">-----choisir-----</option>
                                                        <option value="jour"> / jour</option>
                                                        <option value="semaine"> / semaine</option>
                                                    </select>                    
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
                                                        /*var element = document.getElementById("stomie0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("stomie8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    } else if (selection === "Soins des plaies")
                                                    {
                                                        /*var element = document.getElementById("plaies0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("plaies8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                    {
                                                        /*var element = document.getElementById("oncologie0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("oncologie8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    } else if (selection === "Perfusion")
                                                    {
                                                        /*var element = document.getElementById("perfusion0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("perfusion8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */

                                                    }
                                                    else if (selection === "Prise de sang")
                                                    {
                                                        /*var element = document.getElementById("sang0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("sang8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    }
                                                    else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                    {
                                                        /*var element = document.getElementById("injection0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("injection8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    }
                                                    else if (selection === "Prise en charge des patients diabétiques")
                                                    {
                                                        /*var element = document.getElementById("diabetique0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("diabetique8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    }
                                                    else if (selection === "Aide à la toilette")
                                                    {
                                                        /*var element = document.getElementById("toilette0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("toilette8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */
                                                    }
                                                    else if (selection === "Préparation et distribution des traitements")
                                                    {
                                                        /*var element = document.getElementById("prepa0");
                                                        element.parentNode.removeChild(element);*/
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

                                                    /* Code vao nampiana STIAN */
                                                        var element = document.getElementById("prepa8");
                                                        element.parentNode.removeChild(element);
                                                    /* Code vao nampiana STIAN */

                                                    

                                                    }
                                                     document.querySelector("#type1").style.display = (window.getComputedStyle(document.querySelector('#type1')).display == 'none') ? "block" : "hide";
                                                } 

                                            </script>
                                        
                                            <?php 
                                                for($i = 0; $i < 9; $i++){
                                                    $j = $i + 1;
                                                    echo '
                                            <div id="type'.$i.'" style="display: none;">
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                    <div class="col-sm-7">
                                                    <select name="type-soin" onchange="type'.$j.'()" class="form-control" id="select'.$j.'">
                                                        <option value="">-----choisir-----</assert_options(what)>
                                                        <option id="stomie'.$i.'" value="Soins de stomie">Soins de stomie</option>
                                                        <option id="plaies'.$i.'" value="Soins des plaies">Soins des plaies </option>
                                                        <option id="oncologie'.$i.'" value="Soins d’oncologie et traitement de chimiothérapie">Soins d’oncologie et traitement de chimiothérapie</option>
                                                        <option id="perfusion'.$i.'" value="Perfusion">Perfusion </option>
                                                        <option id="sang'.$i.'" value="Prise de sang">Prise de sang</option>
                                                        <option id="injection'.$i.'" value="Injection sous cutané, intramusculaire, intraveineuse">Injection sous cutané, intramusculaire, intraveineuse</option>
                                                        <option class="diabetique'.$i.'" value="Prise en charge des patients diabétiques">Prise en charge des patients diabétiques </option>
                                                        <option id="toilette'.$i.'" value="Aide à la toilette">Aide à la toilette</option>
                                                        <option id="prepa'.$i.'" value="Préparation et distribution des traitements">Préparation et distribution des traitements </option>
                                                    </select>                    
                                                </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-4 control-label">Fréquence des soins:</label>
                                                    <div class="col-sm-4">
                                                        <select id="frequence-soin'.$j.'" name="frequence-soin'.$j.'" class="form-control">
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
                                                    <div class="col-sm-4">
                                                        <select id="par'.$j.'" name="par'.$j.'" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
                                                </div>
                                            </div>


                                                    ';
                                                }
                                            ?>
                                           
                                            <script>
                                            


                                            <?php
                                               
                                              

                                            
                                            for($i = 1; $i < 9; $i++){

                                              echo 'function type'.$i.'() {
                                                    var selection = document.getElementById("select'.$i.'").value;
                                                    if (selection === "Soins de stomie")
                                                    { ';

                                                    for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("stomie'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                     }

                                                    echo '
                                                    } else if (selection === "Soins des plaies")
                                                    { ';

                                                       for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("plaies'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }

                                                    echo '
                                                    } else if (selection === "Soins d’oncologie et traitement de chimiothérapie")
                                                    {';
                                                        for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("oncologie'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    echo '
                                                    } else if (selection === "Perfusion")
                                                    {';
                                                         for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("perfusion'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    
                                                    echo '}
                                                    else if (selection === "Prise de sang")
                                                    {';
                                                        for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("sang'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    
                                                    echo '
                                                   } else if (selection === "Injection sous cutané, intramusculaire, intraveineuse")
                                                    {   ';
                                                         for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("injection'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    
                                                    echo '
                                                    }else if (selection === "Prise en charge des patients diabétiques")
                                                    {   ';
                                                         for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("diabetique'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    
                                                    echo '
                                                    } else if (selection === "Aide à la toilette")
                                                    {';
                                                        for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("toilette'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                    
                                                    echo'
                                                    } else if (selection === "Préparation et distribution des traitements")
                                                    {';
                                                        for($j = $i; $j <= 8; $j++ ){ 
                                                            echo '
                                                                var element = document.getElementById("prepa'.$j.'");
                                                                element.parentNode.removeChild(element);';
                                                        }
                                                     
                                                    echo '
                                                    }
                                                    document.querySelector("#type'.$i.'").style.display = (window.getComputedStyle(document.querySelector(\'#type'.$i.'\')).display == \'none\') ? "block" : "hide";
                                                }';
                           
                                            }
                                                
                                            ?>

                                            </script>
                                          
                                                                    
                                                                   
                                                        </div> 
                                                    </div>

                                        

                                                        <br>
                                                        <div class="form-group">
                                                            <label for="ajout" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-8">
                                                                <button id="valider" class="btn-primary" type="submit">Valider les changements&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-edit"></i> </button>
                                                            </div>
                                                        </div>
                                        

                                                    <div class="col-lg-5 col-md-5">
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
                                                                          <?php
                                                                           
                                                                            for($i = 0; $i < sizeof($lesTypesoins); $i++){
                                                                                echo '$("#select'.$i.'").val("'.$lesTypesoins[$i].'");';
                                                                                echo '$("#type'.$i.'").css("display", "block");';
                                                                                echo '$("#frequence-soin'.$i.'").val("'.$lesFrequencesoins[$i].'");';
                                                                                echo '$("#par'.$i.'").val("'.$lesPar[$i].'");';
                                                                            } 


                                                                           ?>

                                                                          

                                                                        }

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

                                                                        $('#valider').click(function (e)
                                                                        {

                                                                            console.log("kfdjfkdjkfdf");
                                                                            alert("On doit alerter le focus");
                
                                                                            var typeSoin = [];
                                                                            var frequence = [];
                                                                            var par = [];

                                                                            for (var i = 1 ; i <= 9; i++) {
                                                                                var valeur = $("#select"+i).val();
                                                                                typeSoin.push(valeur);
                                                                           }

                                                                           for (var i = 1 ; i <= 9; i++) {
                                                                                var valeur = $("#frequence-soin"+i).val();
                                                                                frequence.push(valeur);

                                                                           }

                                                                           for (var i = 1 ; i <= 9; i++) {
                                                                                var valeur = $("#par"+i).val();
                                                                                par.push(valeur);
                                                                           }

                                                                            var TypeDeSoin = typeSoin.join("|");
                                                                            var FrequenceDeSoin = frequence.join("|");
                                                                            var Par = par.join("|");

                                                                            $("#TypeDeSoin").val(TypeDeSoin);
                                                                            $("#FrequenceDeSoin").val(FrequenceDeSoin);
                                                                            $("#Par").val(Par);

                                                                            console.log(TypeDeSoin);
                                                                            console.log(FrequenceDeSoin);
                                                                            console.log(Par);

                                                                            
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
                                                                            location.reload();
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
