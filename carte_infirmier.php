<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: login.html");
}
include_once "./lib-php/cnx.php";
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>liste de demande</title>

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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/paper.css">


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

            .liste
            {
                width: 100%;
                overflow: auto;
            }
            body {
                background-repeat:no-repeat;
                background-size: cover;
            }

            #map{
                width: 100vw;
                height: 100vh;
            }

            #selection{
                position: absolute;
                margin-top: 80px;
                margin-left: 30px;
                z-index: 1200;
                width: 250px;
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
                          <a href="index.html"><img src="img/log.png"></a>
                      </div>
                  </div>
          
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="./rendez-vous.php">Rendez-vous</a></li>
                      <li><a href="./effectue.php">Terminer</a></li>
                      <li><a href="./liste.php"><span id="badges">Liste</span></a></li>
                      <li><a href="./lib-php/renouvellement.php">Passer une commande</a></li>
                      <li><a href="./lib-php/modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="./contact2.php">Contact</a></li>
                      <li><a href="./commentmarche_inf.php">Comment ça marche</a></li>
                      <li><a href="./lib-php/deconnexion.php">Deconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="clear"></div>
                <select name="selection" id="selection" onchange="changerMarqueur()">
                    <?php 

                        $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION["email"] . "' AND status='accepter' ORDER BY date_soin DESC");
                        $date_soin1 = array();
                        $date_soin = array();
                        $num = $req->rowCount();

                        while($data = $req->fetch()){
                            $date_soin1[] = $data["date_soin"];
                        }

                        $date_soin = array_unique($date_soin1);
                        foreach ($date_soin as $key => $value) {
                            echo ("<option>".$value."</option>");
                        }
                    
                      ?>
                </select>
               <div id="map"></div>



            <!--Footer-->
            <footer class="fixed">
                <div class="footer-info-area">
                    <div class="container text-center alchem_footer_social_icon_1"> 
                        <div class="clearfix"></div>
                        <div class="site-info">
                            <img src="./img/logo2.png" class = "logo_footer">
                            © Copyright <a href="#">OUSOFT SAS 2017</a> - 38 Rue de la convention, 94270 Le Kremlin-Bicêtre
                        </div>
                    </div>
                </div>          
            </footer>

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg hidden" data-toggle="modal" id="openModal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                  </div>
                  <div class="modal-body" id="contenu">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>

              </div>
            </div>

        </div>  
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
         <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&callback=initMap" async defer></script>
        <script type="text/javascript">
            
            /*La carte*/
              var map;
              var liste_marker = [];

            function initMap() {
                
                <?php echo  "var latLng = '".$_SESSION["latLng"]."';";?>
                
                var latLng = latLng.replace('(', '');
                latLng = latLng.replace(')', '');
                
                latLng = latLng.split(",");
                var lat = parseFloat(latLng[0]);
                var lng = parseFloat(latLng[1]);


                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: lat, lng: lng},
                    zoom: 18, 
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        position: google.maps.ControlPosition.LEFT_CENTER
                    },
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    },
                    streetViewControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    }

                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lng),
                    map: map
                });

                marker.setIcon("http://maps.google.com/mapfiles/ms/icons/blue-dot.png");

                changerMarqueur();

                
              }


              function changerMarqueur(){

                if(liste_marker != null){
                    for (var i = liste_marker.length - 1; i >= 0; i--) {
                        liste_marker[i].setMap(null);
                    }
                }

                var selection = document.getElementById('selection').value;

                <?php echo  "var data = \"emailI=".$_SESSION['email']."&date_soin=\"+selection+\"\";"; ?>
                $.ajax({
                    url: 'lib-php/liste_patient_par_date.php',
                    type: 'POST',
                    data: data,
                    success: function(data){
                        var donnees = JSON.parse(data);
                        for (var i = donnees.length - 1; i >= 0; i--) {
                            var patient = JSON.parse(donnees[i]);
   

                            var latLng = patient.latLng.replace('(', '');
                            latLng = latLng.replace(')', '');
                            latLng2 = latLng.split(',');
                            var lat = parseFloat(latLng2[0]);
                            var lng = parseFloat(latLng2[1]);

                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(lat, lng),
                                map : map
                            });

                            marker.addListener('click', function(){
                                $("#contenu").html("<p><h3> "+patient.prenomP+" "+patient.nomP+"</h3><br><strong>Adresse: </strong>"+patient.adresseP+"<br><strong>Type de soin : </strong> "+patient.typeSoinP+"<br><strong>Date et heure de soin : </strong>"+patient.date_soin+"  à "+patient.heure_soin+"<br><strong>Tel: </strong>"+patient.telP+"<br><strong>commentaire: </strong>"+patient.commentaire+"</p>");
                                $('#openModal').trigger('click');   
                            });

                            liste_marker.push(marker);
                        }
                    },
                    error: function(){
                        alert("Erreur de renvoie de donnees");
                    } 
                });
              }




            $(document).ready(function ()
            {

                $('#erreur_inscription').html('<p>Ici la date</p>');
                $('#triggerwarning').trigger('click');
                setTimeout(function () {
                        $('#ferme').trigger('click');
                }, 4000);

            });

        </script>
    </body>
</html>