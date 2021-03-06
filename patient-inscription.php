<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>inscription du patient</title>

        <meta name="robots" content="noindex,follow">
        <link rel="stylesheet" href="./others/index.css" type="text/css" media="all">
        <!-- 
                <link rel="stylesheet" id="bootstrap-css" href="./others/bootstrap.min.css" type="text/css"> -->
        <link rel="stylesheet" id="animate-css" href="./others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="./others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="./others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="./others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="./others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="./others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="./others/style.css" type="text/css" media="all">

        <link href="./bootstrap/css/paper.css" rel="stylesheet">
        <link href="./js/jquery-ui.min.css" rel="stylesheet">

        <script type="text/javascript" src="./others/jquery.js.téléchargement"></script>



        <script src="js/jssor.slider-22.2.10.min.js" type="text/javascript"></script>

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

            #alchem-home-sections
            {
                padding-top: 50px;
            }

            .alert
            {
                position: absolute;
                top: 35%;
                left: 5%;
                z-index: 0;
                background-color: rgba(1,127,175,0.81);
                border-radius: 10px;
                border-color: rgba(1,127,175,0.81);
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

            #returnOnTop
            {
                display: none;
                cursor: pointer;
            }
            .fixed
            {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
            }
            </style><!-- <meta name="vfb" version="2.9.2" /> -->
        <style type="text/css">
        </style></head>
    <body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-40 has-slider">


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
                        <a href="index.html"><img src="img/log.png"></a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.html">Accueil</a></li>
                        <li><a href="./login.html">Trouver une infirmière</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="login.html">Connexion</a></li>
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
                                    <h2 style="text-align: center" class="section-title alchem_section_4_title"><strong>Inscription du patient</strong></h2>


                                    <form method="POST" action="./lib-php/insert-patient.php" id="form-filter" class="form-horizontal" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label col-md-2" id="label-photo">Photo:</label>
                                                <div class="col-md-9">
                                                    <input name="photo" id="photo" type="file">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="row col-lg-offset-2">
                                                <div id="image_preview">
                                                    <img class="thumbnail img-responsive hidden" style="vertical-align: center;" width="300px" heigth="300px">
                                                    <blockqoute id="titre"></blockqoute>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="nom" class="col-sm-2 control-label">Nom:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Nom" required="" class="form-control" name="nomP" id="nomP">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="prenom" class="col-sm-2 control-label">Prénom:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Prénom" required="" class="form-control" name="prenomP" id="prenomP">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                                <div class="col-sm-9">
                                                    <input type="email" required="" placeholder="Email" class="form-control" name="emailP" id="emailP">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mdp" class="col-sm-2 control-label">Mot de passe:</label>
                                                <div class="col-sm-9">
                                                    <input type="password" required="" placeholder="Mot de passe" class="form-control" name="mdpP" id="mdpP">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="conf-mdp" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-9">
                                                    <input type="password" required="" placeholder="Confirmation du mot de passe" class="form-control" name="conf-mdp" id="conf-mdp">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tel" class="col-sm-2 control-label">Téléphone:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" required="" placeholder="Téléphone" class="form-control" name="telP" id="telP">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tel" class="col-sm-2 control-label">Adresse:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" onkeypress="refuserToucheEntree2(event);" required="" placeholder="Numéro et nom de rue" class="form-control" name="rueP" id="rueP">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="number" onkeypress="refuserToucheEntree2(event);" required="" placeholder="Code postal" class="form-control" name="code-postalP" id="code-postalP">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" onkeypress="refuserToucheEntree2(event);" required="" placeholder="Ville" class="form-control" name="villeP" id="villeP">
                                                </div>
                                            </div>
                                           

                                             
                                                             <?php

                                                             $TypeSoin = array("Soins de stomie", "Soins des plaies","Soins d’oncologie et traitement de chimiothérapie", "Perfusion", "Prise de sang",  "Injection sous cutané, intramusculaire, intraveineuse", "Prise en charge des patients diabétiques",  "Aide à la toilette", "Préparation et distribution des traitements");

                                                            echo '<table class="table table-striped table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Type de soin</th>
                                                                            <th>Frequence de soin</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>';

                                                            for($i = 0; $i <= 8; $i++){

                                                             echo ' 
                                                                        <tr>
                                                                            <td>   
                                                                                <input type="checkbox" onChange="changerType('.$i.');" value="'.$TypeSoin[$i].'" id="typeSoin'.$i.'">  <label for="typeSoin'.$i.'">'.$TypeSoin[$i].'</label>                   
                                                                            </td>   
                                                                            <td>
                                                                                    <div id="autre'.$i.'" class="hidden">
                                                                                       
                                                                                        <div class="col-sm-6">
                                                                                            <select id="frequenceSoin'.$i.'" required="" class="form-control">
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
                                                                                            <select id="par'.$i.'" required="" class="form-control">
                                                                                                <option value="" selected>-----choisir-----</option>
                                                                                                <option value="jour"> / jour</option>
                                                                                                <option value="semaine"> / semaine</option>
                                                                                            </select>                    
                                                                                        </div>
                                                                                    </div>
                                                                            </td>
                                                                        </tr>
                                                                    ';
                                                                }
                                                                echo '      
                                                                            </tbody>
                                                                        </table>';

                                                            ?>                           
                                            <div class="form-group">
                                                <label for="tel" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="Code d'accès" class="form-control" name="code-acces" id="code-acces">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="Etage" class="form-control" name="etage" id="etage">
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" placeholder="Info supplémentaire" class="form-control" name="info-sup" id="info-sup">
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="tel" class="col-sm-5 control-label">Type de soin:</label>
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
                                            <div class="form-group col-sm-6">
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
                                                <div class="col-sm-4">
                                                    <select name="par0" required="" class="form-control">
                                                        <option value="">-----choisir-----</option>
                                                        <option value="jour"> / jour</option>
                                                        <option value="semaine"> / semaine</option>
                                                    </select>                    
                                                </div>
                                            </div>
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
                                                <div class="form-group col-sm-6">
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par1" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par2" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par3" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par4" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par5" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par6" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
                                                        <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par7" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
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
                                                <div class="form-group col-sm-6">
                                                    <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-6">
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
                                                    <div class="col-sm-4">
                                                        <select name="par8" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ajout" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-8">
                                                    <button type="submit" id="insert" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Valider </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>

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
                        <h4 class="modal-title" style="text-align: center;">Erreur !</h4>
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
            <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
        </div>
        <!--Footer-->
        <footer class="fixed">

            <div class="footer-info-area">
                <div class="container text-center alchem_footer_social_icon_1"> 
                    <!-- <ul class="footer-sns"><li><a  rel="" href="http://localhost/wordpress/#" data-placemeynt="top" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="YouTube"><i class="fa fa-youtube"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li><li><a  rel="" href="http://localhost/wordpress/#" data-placement="top" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a></li></ul>                    <div class="clearfix"></div>
                    -->
                    <div class="site-info">
                        <img src="./img/logo2.png" class = "logo_footer">
                        © Copyright <a href="#">OUSOFT SAS 2017</a> - 38 Rue de la convention, 94270 Le Kremlin-Bicêtre
                    </div>
                </div>
            </div>          
        </footer>
    </div>  

    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
    <script type="text/javascript" src="./others/main.js.téléchargement"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&libraries=places"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript">

                                                /*
                                                  var address = document.getElementById("rueP");
                                                            
                                                            var autocomplete2 = new google.maps.places.Autocomplete(address, {
                                                                types: ['geocode']
                                                            });

                                                        google.maps.event.addListener(autocomplete2, 'place_changed', function(){
                                                                var adres = $("#rueP").val();
                                                                var adres2 = adres.split(',');
                                                                var adress = adres2[0] + ", " + adres2[1];
                                                            

                                                                place = autocomplete2.getPlace();       //On obtient un objet PlaceResult
                                                                console.log("Le resultat doit être ici ! ");
                                                              
                                                                console.log(place);

                                                                var addressType = {};
                    
                                                                for(var i= 0; i < place.address_components.length; i++){
                                                                    addressType[place.address_components[i].types[0]] = place.address_components[i].long_name;
                                                                }
                                                            
                                                                var adresses_pat = (addressType['street_number']) ? addressType['street_number'] + ", " : '';

                                                                adresses_pat += (addressType['route']) ? addressType['route'] : '';
                                                                
                                                                $("#rueP").val(adresses_pat);

                                                                var codePostal = (addressType['postal_code']) ? addressType['postal_code'] : '';

                                                                $('#code-postalP').val(codePostal);

                                                                var ville;
                                                                if(addressType['locality']){
                                                                    ville = (addressType['locality']) ? addressType['locality'] : '';
                                                                }else{
                                                                    ville = (addressType['administrative_area_level_1']) ? addressType['administrative_area_level_1'] : '';
                                                                }

                                                                $('#villeP').val(ville);



                                                            });


                                                            var cp = document.getElementById("code-postalP");
                                                            
                                                            var autocomplete3 = new google.maps.places.Autocomplete(cp , {
                                                                types: ['geocode']
                                                            });

                                                            google.maps.event.addListener(autocomplete3, 'place_changed', function(){
                                                                var place2 = autocomplete3.getPlace();
                                                                var add = {};
                    
                                                                for(var i= 0; i < place2.address_components.length; i++){
                                                                    add[place2.address_components[i].types[0]] = place2.address_components[i].long_name;
                                                                }

                                                                var ville = (add['locality']) ? add['locality'] : '';
                                                                $('#villeP').val(ville);

                                                                $('#code-postalP').val(add['postal_code']);
                                                                console.log(add);   
                                                            });

                                                            var villeI = document.getElementById("villeP");
                                                            
                                                            var autocomplete4 = new google.maps.places.Autocomplete(villeI , {
                                                                types: ['geocode']
                                                            });

                                                            google.maps.event.addListener(autocomplete4, 'place_changed', function(){
                                                                var place3 = autocomplete4.getPlace();
                                                                var add2 = {};
                                                                
                                                                for(var i= 0; i < place3.address_components.length; i++){
                                                                    add2[place3.address_components[i].types[0]] = place3.address_components[i].long_name;
                                                                }
                                                                console.log(place3);
                                                                var cp = (add2['postal_code']) ? add2['postal_code'] : '';
                                                                $('#code-postalP').val(cp);

                                                                $('#code-postalP').val(add2['postal_code']);
                                                            }); 
                                                        */
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

                                                         function refuserToucheEntree2(event)
                                                                {
                                                                    // Compatibilité IE / Firefox
                                                                    if (!event && window.event) {
                                                                        event = window.event;
                                                                    }
                                                                    // IE
                                                                    if (event.keyCode == 13) {
                                                                        event.returnValue = false;
                                                                        event.cancelBubble = true;
                                                                    }
                                                                    // DOM
                                                                    if (event.which == 13) {
                                                                        event.preventDefault();
                                                                        event.stopPropagation();
                                                                    }
                                                                }

                                                        $('#insert').click(function (e)
                                                        {
                                                            e.preventDefault();

                                                            var form = $('#form-filter').get(0);
                                                            var formData = new FormData(form);// get the form data
                                                            // on envoi formData vers mail.php
                                                            $.ajax({
                                                                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                                                                url: 'lib-php/insert-patient.php', // the url where we want to POST
                                                                data: formData, // our data object
                                                                dataType: 'text', // what type of data do we expect back from the server
                                                                processData: false,
                                                                contentType: false,
                                                                success: function (server_response)
                                                                {
                                                                    if (server_response === "succes  ")
                                                                    {
                                                                        window.location.replace("carte.php");
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
                                                                    alert(server_response.statusText);
                                                                }
                                                            });
                                                        });
    </script>
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#returnOnTop').hide();
            $('#returnOnTop').click(function () {
                //e.preventDefault();
                $('html,body').animate({scrollTop: 0}, 'slow');
            });
             // Pour l'autocompletion
                var ville = [];
                var code_postal  = [];
                var complet = [];
                var complet2 = [];
                $.ajax({
                  url: 'lib/ville_cp.json',
                  type: 'POST',
                  dataType: "json",
                  success: function(data){
                    for(var i = 0; i < data.length; i++){
                      complet.push({ value : data[i].ville_nom_reel, desc: data[i].ville_code_postal});
                      complet2.push({ value : data[i].ville_code_postal, desc: data[i].ville_nom_reel});
                    }
                  },
                  error: function(xhr){
                    alert("Erreur de recuperation");
                  }
                });
                $('#villeP').autocomplete({
                    source : complet,
                    minLength: 3,
                    select : function(event, ui){
                        $("#code-postalP").val(ui.item.desc);
                    }
                });
                $('#code-postalP').autocomplete({
                    source : complet2,
                    minLength: 3,
                    select: function(event, ui){
                        $("#villeP").val(ui.item.desc);
                    }
                });
        });

        $(window).scroll(function ()
        {
            if ($(window).scrollTop() == 0)
                $('#returnOnTop').fadeOut();
            else
                $('#returnOnTop').fadeIn();
        });
    </script>
</body>
</html>