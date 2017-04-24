<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>carte</title>

        <meta name="robots" content="noindex,follow">
        <link rel="stylesheet" href="./others/index.css" type="text/css" media="all">
        <link rel="stylesheet" id="bootstrap-css" href="./others/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" id="animate-css" href="./others/animate.css" type="text/css">
        <link rel="stylesheet" id="magee-shortcode-css" href="./others/shortcode.css" type="text/css">
        <link rel="stylesheet" id="wds_frontend-css" href="./others/wds_frontend.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_effects-css" href="./others/wds_effects.css" type="text/css" media="all">
        <link rel="stylesheet" id="wds_font-awesome-css" href="./others/font-awesome(1).css" type="text/css" media="all">
        <link rel="stylesheet" id="wonderplugin-slider-css-css" href="./others/wonderpluginsliderengine.css" type="text/css" media="all">
        <link rel="stylesheet" id="parent-style-css" href="./others/style.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootsrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/paper.css">
        <!--<link rel="stylesheet" type="text/css" href="js/datepicker/css/datepicker.css">-->
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-datepicker-1.6.4/css/bootstrap-datetimepicker.min.css">

        <!--<script type="text/javascript" src="./others/jquery.js.téléchargement"></script>-->

        <script src="js/jssor.slider-22.2.10.min.js" type="text/javascript"></script>


        <!--/end meta tags by Kiwi Social Sharing Plugin --><style id="cw_css">#about {
                margin-top:14rem!important
            }
            .col-sm-12,div.col-sm-8.col-sm-offset-2 {
                margin-top:-70rem!important
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

            .logo
            {
                position: absolute;
                width: 10%;
                z-index: 9;
                left: 5%;
            }

            #returnOnTop
            {
                display: none;
                cursor: pointer;
            }

            #map {
                margin: 0% 0% 0% 0%;
                width: 100%;
                height: 80vh;
                background: white;
            }

            .controls {
                margin-top: 10px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }
            #pac-input {
                position: absolute;
                z-index: 1;
                margin: 1% 0% 0% 10%;
                background-color: #fff;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                margin-left: 12px;
                padding: 0 11px 0 13px;
                text-overflow: ellipsis;
                width: 300px;
            }

            #pac-input:focus {
                border-color: #4d90fe;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }

            #chercher{
                margin: -4% 0% 0% -16%;
            }

            .main-header {
                background-color: rgb(77, 144, 254);
                color: white;
                width: 100%;
                border-bottom: 1px solid transparent;
            }

            #img-infirmier {
                width: 60%;
                margin-left: 60%;

            }
            .modal-header-infirmier {
                text-align: center;
                padding: 15px;
                border-bottom: 1px solid transparent;
                background-color: rgb(142, 68, 173);
                border: 1px solid white;
                color: white;
                border-radius: 10px 10px 0 0;
            }
            .modal-title-infirmier {
                color: white;
            }
            .info {
                background: #f3f8f7;
            }
            #nomInfirmier {
                font-size: 2.2em;
                color: #6b624d;
            }
            footer .footer-info-area {
                background-color: rgba(84, 46, 90, 0.66);
            }
            .navbar
            {
                background-color: rgba(84, 46, 90, 0.66);
            }

            #alchem-home-sections
            {
                padding-top: 60px;
            }

            #dmd_deja_envoyer {
                background: #e95e5e;
                font-size: 1.2em;
                color: white;
                width: 100%;
                height: 19%;
            }

            .alert 
            {
                position: absolute;
                top: 25%;
                left: 5%;
                z-index: 0;
                background-color: rgba(84, 46, 90, 0.66);
                border-radius: 10px;
                border-color: rgb(84, 46, 90);
                font-size: 1.2em;
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
                            <a href="#"><img src="img/logo.png"></a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="./carte.php">Carte</a></li>
                            <li><a href="./notification.php"><span id="badges">Notification</span></a></li>
                            <li><a href="lib-php/modifierprofil.php">Modifier mon profil</a></li>
                            <li><a href="./contact1.php">Contact</a></li>
                            <li><a href="lib-php/deconnexion.php">Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>     



            <div id="alchem-home-sections">
                <!-- modal dialogue pour les infirmiers libre -->
                <a class="btn btn-primary hidden" data-toggle="modal" id="triggerwarningI" href='#modal-id'>Trigger modal</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog" style="margin:0%; height: 100vh;">
                        <div class="modal-content">
                            <form method="POST" action="" id="form-filter" class="form-horizontal" enctype="multipart/form-data">
                                <div class="modal-header-infirmier">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title modal-title-infirmier">INFIRMIERE LIBERALE</h4>
                                </div>
                                <div class="modal-body" >
                                    <div class="warning" id="infoI">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4><label id="nomIprenom"></label></h4>

                                                Téléphone: <label id="telI"></label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Email: <label id="emailI"></label>
                                                <br>
                                                Adresse: <label id="adresseI"></label>
                                                <br>
                                                Type de soin: <label id="typesoinI"></label>
                                                <br>
                                                Lieu d'intervention: <label id="lieuI"></label>
                                                <input class="form-control" type="hidden" id="emailI1" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="" class="img-rounded" id="imageI">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="jumbotron">
                                            <div class="form-group">
                                                <label for="date" class="col-sm-3 control-label">Date du soin *:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" placeholder="Date du soin" required class="form-control date datepicker" name="date_soin" id="date_soin">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="heure" class="col-sm-3 control-label">Heure de soin *:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" placeholder="Heure de soin" required class="form-control date datetimepicker" name="heure_soin" id="heure_soin">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="heure" class="col-sm-3 control-label">Description *:</label>
                                                <div class="col-sm-8">
                                                    <textarea placeholder="Decriver votre demande ici!" rows="4" required class="form-control" name="commentaire" id="commentaire"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>    
                                </div>
                                <div class="modal-footer">
                                    <input type='button' class='btn btn-lg btn-primary col-lg-12' style = "background: rgb(142, 68, 173);" name='rdv' onclick='rendezVous();' value='Prendre rendez-vous' />

                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <a class="btn btn-primary hidden" data-toggle="modal" id="triggerwarningI2" href='#modal-id1'>Trigger modal</a>
                <div class="modal fade" id="modal-id1">
                    <div class="modal-dialog" style="margin:0%; height: 100vh;">
                        <div class="modal-content">
                            <div class="modal-header-infirmier">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title modal-title-infirmier">INFIRMIERE LIBERALE</h4>
                            </div>
                            <div class="modal-body" >
                                <div class="warning1" id="infoI1">

                                    <form method="POST" action="" id="form-filter" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4><label id="nomIprenom1"></label></h4>

                                                Téléphone: <label id="telI1"></label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Email: <label id="emailI1"></label>
                                                <br>
                                                Adresse: <label id="adresseI1"></label>
                                                <br>
                                                Type de soin: <label id="typesoinI1"></label>
                                                <br>
                                                Lieu d'intervention: <label id="lieuI1"></label>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="" class="img-rounded" id="imageI1">
                                            </div>
                                        </div>
                                        <br>

                                    </form>

                                </div>    
                            </div>
                            <div class="modal-footer">
                                <div class="label-warning col-lg-12">

                                    <center> <h4 style="color: white;">Demande déja envoyer!</h4> </center> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <a class="btn btn-primary hidden" id="triggerwarning" data-toggle="modal" href='#warning'>Trigger modal</a>
                <div class="modal fade" id="warning">
                    <div class="modal-dialog">
                        <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Information</h4>
                            </div>
                            <div class="modal-body">
                                <div class="warning" id="info"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="ferme" class="btn btn-default hidden" data-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                </div>



                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5" style="padding:0%;">
                    <input id="pac-input" class="controls" type="text" placeholder="Entrer adresse, lieu, Ville">
                    <div id="type-selector" class="controls">  
                        <label>Ici pour chercher un lieu</label>
                    </div>


                    <div id="map"></div>

                </section>


            </div>

            <div class="btn_up">
                <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
            </div>


            <footer class="">
                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1">
                        <!--<input type="text" class="form-control date datepicker">-->
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                        <input type="hidden" id="emailP" value="<?php echo($_SESSION['email']); ?>">
                    </div>
                </div>          
            </footer>
        </div>  


        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <!--<script type="text/javascript" src="bootstrap/js/jquery-1.8.3.min.js"></script>-->
        <!--<script type="text/javascript" src="js/datepicker/js/bootstrap-datepicker.js"></script>-->
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/js/bootstrap-datetimepicker.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datepicker.fr.min.js"></script>
        <script src="bootstrap-datepicker-1.6.4/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="./others/main.js.téléchargement"></script>

        <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&callback=initMap" async defer></script>

        <script>
                                        $(document).ready(function () {
                                            $('.datepicker').datepicker({
                                                language: 'fr',
//                    showAnim : 'fadeIn',
                                                autoclose: true,
//                    pickerPosition: "bottom-left",
                                                format: "dd-mm-yyyy",
                                                todayHighlight: true,
//                    orientation: "auto",
//                    todayBtn: true
                                            });
                                        });
                                        $('.datetimepicker').datetimepicker({
                                            language: 'fr',
                                            weekStart: 1,
                                            todayBtn: 1,
                                            format: "hh:ii",
                                            autoclose: 1,
                                            todayHighlight: 1,
                                            startView: 1,
                                            minView: 0,
                                            maxView: 1,
                                            forceParse: 0
                                        });
        </script>

        <script type="text/javascript">
            var map;
            var tab_marqueur = [];
         
        /************************************/
            var markeur_lieu ;
            var pos_pat;
        /****************************************/

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 48.862226, lng: 2.340173},
                    zoom: 13
                });

                //Affichage des infirmiers sur la carte
                $.ajax({
                    url: 'lib-php/infirmier_json.php',
                    type: 'GET',
                    success: function (data) {
                        var json = $.parseJSON(data);
                        for (var i = json.length - 1; i >= 0; i--) {
                            var infirmier = $.parseJSON(json[i]);

                            if (typeof infirmier.latLng != "undefined") {
                                latLng = infirmier.latLng.replace('(', '');
                                latLng = latLng.replace(')', '');
                                var latLng = latLng.split(',');
                                var pos = new google.maps.LatLng(latLng[0], latLng[1]);

                                afficher_marqueur(map, infirmier, pos);
                            }
                        }
                    },
                    error: function () {
                        alert("Une erreur de recuperation des données ! ");
                    }
                });

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {

                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        /******************************/
                        pos_pat = pos;                  
                        /******************************/
                        var marker = new google.maps.Marker({
                            map: map,
                            position: pos
                        });

                        var infoW = new google.maps.InfoWindow({
                            content: "Vous êtes içi ! "
                        });

                        infoW.open(map, marker);

//                        google.maps.event.addListener(infoW, 'domready', function () {
//                            $('.datepicker').datepicker();
//                        });

                        marker.setIcon("http://maps.google.com/mapfiles/ms/icons/blue-dot.png");
                        map.setCenter(pos);


                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                //Pour l'autocompletion


                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
                }


                var input = /** @type {!HTMLInputElement} */(
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
               /*
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });*/

                autocomplete.addListener('place_changed', function () {
                    infowindow.close();
                    //marker.setVisible(false);
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        var addr = $("#pac-input").val();
                        geocodeAddress(map, addr);
                    }

                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);  // Why 17? Because it looks good.
                    }

                    //Definir la marqueur bleu du lieu
                    if(markeur_lieu){
                        markeur_lieu.setMap(null);
                    }

                    /*
                            Code avec une variable marqueur a commenter
                    */


                    /****************** 1 nouveau ***************/
                    markeur_lieu = new google.maps.Marker({
                            map: map,
                            position: place.geometry.location
                    });
                        markeur_lieu.setIcon("http://maps.google.com/mapfiles/ms/icons/blue-dot.png");
                    
                    /**************** 1 *****************/
                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                   
                });

                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
                function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function () {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);
            }



            function rendezVous() {
//                alert ($( "#emailI1" ).val());
                var posPat;
                
                if(typeof(pos_pat) !== "undefined"){
                    posPat = pos_pat.lat +"," + pos_pat.lng;
                }else{
                    posPat = "null";
                }

                console.log(pos_pat);
                
                var emailI = $("#emailI1").val();
                var commentaire = $("#commentaire").val();
                var heure_soin = $("#heure_soin").val();
                var date_soin = $("#date_soin").val();

//              alert (emailI +" ---- "+commentaire+" ---- "+heure_soin+" --- "+date_soin);

                var dataString = "emailI=" + emailI + "&commentaire=" + commentaire + "&heure_soin=" + heure_soin + "&date_soin=" + date_soin + "&latLng="+ posPat;

//                alert (dataString);
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'lib-php/rendez-vous.php', // the url where we want to POST
                    data: dataString, // our data object
                    dataType: 'text',
                    success: function (data) {
                        if (data === "reussi") {
                            $('#modal-id').modal('hide');
                            $('#info').html('<p> Votre demande est bien envoyer !</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                        } else if (data === "existe") {
                            var nom = $('#nomInfirmier').html();

                            $('#info').html('<p> Votre demande à <strong>' + nom + '</strong> est dejà envoyer !</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                        } else if (data === "errore") {
                            var nom = $('#nomInfirmier').html();

                            $('#info').html('<p> Les champs marquées * sont obligatoires!</p>');
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                            }, 40000);
                        } else {
                            alert(data);
                        }
                    },
                    error: function () {
                        $('#info').html('<p> Veuillez indiquer un adresse e-mail valide et un mot de passe. </p>');
                        $('#triggerwarning').trigger('click');
                        setTimeout(function () {
                            $('#ferme').trigger('click');
                        }, 40000);
                    }
                });
            }

            //Geocodage des adresses

            function geocodeAddress(resultsMap, address) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        resultsMap.panTo(results[0].geometry.location);
                        if (marker) {
                            marker.setMap(null);
                        }
                        marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location
                        });
                        var latLng = results[0].geometry.location.lat;
                        var position = marker.getPosition();
        

                        // alert(results[0].geometry.location);
                        var infoBull = new google.maps.InfoWindow({
                            content: "Votre lieu d'intervention est ici ?"
                        });
                        infoBull.open(map, marker);
                        $("#latLng").val(position);
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }


            function afficher_marqueur(map, infirmier, pos) {
                var marqueur = new google.maps.Marker({
                    map: map,
                    position: pos,
                    title: infirmier.nomI,
                    id: infirmier.id
                });

//                var p = "<div class='col-lg-12 info'>";
//                p += "<div class='row'>";
//                p += "<div class='col-xs-6 col-lg-6 col-sm-6'><h4 id='nomInfirmier'>" + infirmier.prenomI + " " + infirmier.nomI + "</h4></center></div>";
//                p += "<div id='img-infirmier' class='col-xs-3 col-lg-3 col-sm-3'>";
//                p += "<img src='./image-person/" + infirmier.photo + "' style='width:60%;'/>";
//                p += "</div>";
//                p += "</div>";
//                p += "<div class='col-lg-8'>";
//                p += "<p><strong>Téléphone : </strong>" + infirmier.telI + "</p>";
//                p += "<p><strong>Email : </strong>" + infirmier.emailI + "</p>";
//                p += "<p><strong>Adresse : </strong>" + infirmier.rueI + " - " + infirmier.code_postalI + " - " + infirmier.villeI + "</p>";
//                p += "<p><strong>Type de soin : </strong> " + infirmier.type_soinI1 + " - " + infirmier.type_soinI2 + " - " + infirmier.type_soinI3 + " - " + infirmier.type_soinI4 + "</p>";
//                p += "<p><strong>Lieu d'intervention : " + infirmier.lieu_intervention + "</strong></p>";
//                p += "<div id='input_date'>";
//                p += "</div>";
//                p += "<div>";
//                p += "<p><label for='date_soin'>Date de soin : </label>";
//                p += "<input class='form-control col-lg-2 datepicker' id='date_soin' name='date_soin' type='datep' placeholder='31-12-2017'></input></p>";
//                p += "<p><label for='heure_soin'>Heure de soin : </label>";
//                p += "<div class='input-group'>";
//                p += "  <input class='form-control col-lg-2' id='heure_soin' name='heure_soin' type='time' placeholder='24'></input></p>";
//                p += "  <span class='input-group-addon'>h</span>";
//                p += "</div>";
//                p += "</div>";
//                p += "<div class='col-lg-12'>";
//                p += "<center></br></br><textarea class='form-control' placeholder='Decriver votre demande içi' name='commentaire' id='commentaire' type='text'></textarea><br>";
//                p += "<input type='submit' class='btn btn-primary' name='rdv' onclick='rendezVous(\"" + infirmier.emailI + "\");' value='Prendre rendez-vous' /></center>";
//                p += "</div>";
//                p += "</div>";


//                var p2 = "<div class='col-lg-12 info'>";
//                p2 += "<div class='row'>";
//                p2 += "<div class='col-xs-6 col-lg-6 col-sm-6'><h4 id='nomInfirmier'>" + infirmier.prenomI + " " + infirmier.nomI + "</h4></center></div>";
//                p2 += "<div id='img-infirmier' class='col-xs-3 col-lg-3 col-sm-3'>";
//                p2 += "<img src='./image-person/" + infirmier.photo + "' style='width:60%;'/>";
//                p2 += "</div>";
//                p2 += "</div>";
//                p2 += "<div class='col-lg-8'>";
//                p2 += "<p><strong>Téléphone : </strong>" + infirmier.telI + "</p>";
//                p2 += "<p><strong>Email : </strong>" + infirmier.emailI + "</p>";
//                p2 += "<p><strong>Adresse : </strong>" + infirmier.rueI + " - " + infirmier.code_postalI + " - " + infirmier.villeI + "</p>";
//                p2 += "<p><strong>Type de soin : </strong> " + infirmier.type_soinI1 + " - " + infirmier.type_soinI2 + " - " + infirmier.type_soinI3 + " - " + infirmier.type_soinI4 + "</p>";
//                p2 += "<p><strong>Lieu d'intervention : " + infirmier.lieu_intervention + "</strong></p>";
//                p2 += "</div>";
//                p2 += "<div id='dmd_deja_envoyer' class='col-lg-12'>";
//                p2 += "<center>Demande dejà envoyer. </center>";
//                p2 += "</div>";
//                p2 += "</div>";

                /*
                 var infoWindow = new google.maps.InfoWindow({
                 content: p
                 });*/

                marqueur.addListener('click', function () {
                    // infoWindow.open(Smap, marqueur);

                    var emailP = "<?php echo $_SESSION["email"]; ?>";

                    $.ajax({
                        url: 'lib-php/lib/savoir_demande.php?emailP=' + emailP + '&emailI=' + infirmier.emailI,
                        type: 'GET',
                        success: function (data) {

                            document.getElementById("nomIprenom").innerHTML = infirmier.prenomI + " " + infirmier.nomI;
                            document.getElementById("telI").innerHTML = infirmier.telI;
                            document.getElementById("emailI").innerHTML = infirmier.emailI;
                            document.getElementById("adresseI").innerHTML = infirmier.rueI + ", " + infirmier.code_postalI + ", " + infirmier.villeI;
                            document.getElementById("typesoinI").innerHTML = infirmier.type_soinI1 + ", " + infirmier.type_soinI2 + ", " + infirmier.type_soinI3 + ", " + infirmier.type_soinI4;
                            document.getElementById("lieuI").innerHTML = infirmier.lieu_intervention;
                            $('#emailI1').attr('value', infirmier.emailI);
                            document.images["imageI"].src = "./image-person/" + infirmier.photo + "";


                            document.getElementById("nomIprenom1").innerHTML = infirmier.prenomI + " " + infirmier.nomI;
                            document.getElementById("telI1").innerHTML = infirmier.telI;
                            document.getElementById("emailI1").innerHTML = infirmier.emailI;
                            document.getElementById("adresseI1").innerHTML = infirmier.rueI + ", " + infirmier.code_postalI + ", " + infirmier.villeI;
                            document.images["imageI1"].src = "./image-person/" + infirmier.photo + "";
                            document.getElementById("typesoinI1").innerHTML = infirmier.type_soinI1 + ", " + infirmier.type_soinI2 + ", " + infirmier.type_soinI3 + ", " + infirmier.type_soinI4;
                            document.getElementById("lieuI1").innerHTML = infirmier.lieu_intervention;


                            if (data === "inexiste") {

//                                $('.modal-body-infirmier').html(p);
                                $('#triggerwarningI').trigger('click');

                            } else if (data === "existe") {
//                                $('.modal-body').html("<center><h4>Vous avez déja envoyer une demande à " + infirmier.prenomI + " " + infirmier.nomI +"!</h4></center>");
                                $('#triggerwarningI2').trigger('click');
                            } else {
                                alert("Une erreur php dans savoir_demande.php");
                            }
                        },
                        error: function (data) {
                            alert("Erreur de requete ajax sur savoir_demande.php");
                        }

                    });
                });
            }

            function encode_utf8(s) {
                return unescape(encodeURIComponent(s));
            }

            function decode_utf8(s) {
                return decodeURIComponent(escape(s));
            }

            $("#test").click(function (event) {

            });

            var auto_refresh = setInterval(
                    function ()
                    {
                        var status = "lu";
                        var email = $('#emailP').val();

                        $.ajax({
                            url: "badges.php",
                            type: "POST",
                            data: "email=" + email,
                            success: function (server_response)
                            {
                                $('#badges').html(server_response);
                            },
                            error: function (server_response)
                            {
                                //alert('Erreur :' + server_response);
                            }
                        });
                    }, 1000);


        </script>

    </body>
</html>