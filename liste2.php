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
                width: 10%;
                z-index: 9;
                left: 5%;
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

            #modalC{
                width: 95%;
            }

            .liste
            {
                width: 100%;
                height: 550px;
                overflow: auto;
            }

            #carteItineraire {
                position: fixed;
                margin: -43% 0% 0% 38%;
            }

            #map {
                width: 92vw;
                height: 63vh;
                position: relative;
                overflow: hidden;
                margin: 0% 0% 0% 0%;
            }
            
            body {
                background-image:url(img/fond5.jpg);
                background-repeat:no-repeat;
                background-size: 100%;
            }
        </style><!-- <meta name="vfb" version="2.9.2" /> -->
        <style type="text/css">
        </style>
</head>

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
                      <li><a href="./rendez-vous.php">Mes rendez-vous</a></li>
                      <li><a href="./lib-php/renouvellement.php">Commander du matériel</a></li>
                      <li><a href="./lib-php/modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="./contact2.php">Contact</a></li>
                      <li><a href="./lib-php/deconnexion.php">Deconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="clear"></div>
 
            <div id="alchem-home-sections">


                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5">
                    <div class="section-content">
                        <div class="container alchem_section_4_model">
                            <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>

                            <div class="liste">

                                <?php
                                        $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'attente'");
                                        $b = FALSE;
                                        while ($data = $req->fetch()) {
                                            $b = TRUE;
                                            ?>
                                            <table class="table table-hover">
                                                <tbody id="content" style="background-color:white;">
                                                    
                                                </tbody>
                                            </table>
                                            <?php
                                        } if ($b == FALSE) {
                                            echo '<center><h3>Vous n\'avez pas encore de demande</h3></center>';
                                        }
                                ?>
                                

                                  <button class="btn hidden" id="modalCarte" data-toggle="modal" data-target="#carte"></button>
                                    <div class="modal" style="background: none;  -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0); box-shadow: 0 0px 0px rgba(0, 0, 0, 0);" id="carte">
                                        <div id="modalCa"  class="modal-dialog" style="background: none; -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0); box-shadow: 0 0px 0px rgba(0, 0, 0, 0); margin: 0%; width:100%">
                                            <div class="modal-content alert alert-dismissible alert-info col-lg-12" style="background: none;  -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0); box-shadow: 0 0px 0px rgba(0, 0, 0, 0); width: 160%;">
                                                <div class="modal-header" style="margin-top: 0%; width: 61%;">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="fermeCarte">&times;</button>
                                                </div>
                                                <div class="modal-body" style="background: none;">
                                                   <div id="map"></div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                              <a class="btn btn-primary hide" data-toggle="modal" id="modalResult" href='#modal-id' >Trigger modal</a>
                                <div class="modal fade" id="modal-id">
                                    <div class="modal-dialog" style="margin: 0; margin-left: 54%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Information de lieu</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="result">Je suis le text par default, il faut me supprimer !</div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                           </div>
                        </div>
                         <div id="carteItineraire" class="panel panel-info" style="display: none;">
                                    <div class="panel-body">
                                      
                                     </div>
                                    <div class="panel-footer">

                                     </div>
                        </div>

                    </div>
                </section>

            </div>

            
            <div class="modal fade" id="modalCarte">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            Je suis le contenu
                             <!-- div id="map" style="width: 60vw; height: 68vh;"></div-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        
             <div class="modal fade" id="modal-id">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             <h4 class="modal-title">Modal title</h4>
                         </div>
                         <div class="modal-body">
                             
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                     </div>
                 </div>
             </div>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
            <div class="modal" id="loginerror">
                <div class="modal-dialog">
                    <div class="modal-content alert alert-dismissible alert-info col-lg-12">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="ferme">&times;</button>
                            <h4 class="modal-title" style="text-align: center;">Information</h4>
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
                        <div class="clearfix"></div>
                        <div class="site-info">
                            <a href="#" >OUSOFT SAS</a>. 38 Rue de la convention, 94270, Le Kremlin-Bicêtre.</div>
                    </div>
                </div>          
            </footer>
        </div>  
        
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
       
     
        <script type="text/javascript">
            var latPat;
            var lngPat;
            var DSLscript;
            var mode;

            function accepter(id)
            {
                var status = "accepter";
                var dataString = "id="+id+"&status="+status;
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'lib-php/edit.php', // the url where we want to POST
                    data: dataString, // our data object
                    dataType: 'text',
                    success: function (server_response)
                    {
                        if (server_response === "reussi")
                        {
                            $('.' + id).fadeOut('slow', function () {
                                $(this).remove();
                            });
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
            };

            function refuser(id)
            {
                var status = "refuser";
                var dataString = "id="+id+"&status="+status;
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'lib-php/edit.php', // the url where we want to POST
                    data: dataString, // our data object
                    dataType: 'text',
                    success: function (server_response)
                    {
                        if (server_response === "reussi")
                        {
                            $('.' + id).fadeOut('slow', function () {
                                $(this).remove();
                            });
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
            };

            function terminer(id)
            {
                var status = "terminer";
                var dataString = "id="+id+"&status="+status;
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'lib-php/edit.php', // the url where we want to POST
                    data: dataString, // our data object
                    dataType: 'text',
                    success: function (server_response)
                    {
                        if (server_response === "reussi")
                        {
                            $('.' + id).fadeOut('slow', function () {
                                $(this).remove();
                            });
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
            };
            
            $(document).ready(function ()
            {
                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });
                var refresh_auto = setInterval(
                    function() 
                    {
                        var email = $('#emailP').val();

                        $.ajax({
                            url: "notif_inf.php",
                            type: "POST",
                            data: "email="+email,
                            success: function(server_response) 
                            {  
                                $('#content').html(server_response);
                            },
                            error: function(server_response) 
                            {  
                              //alert('Erreur :' + server_response);
                            }
                        });
                    }, 2000);
            });

            function itineraire(latLng, modeI){
                mode = modeI;
                if(latLng == "null"){
                    $('#erreur_inscription').html("<p>Désolé, </p><p>Ce patient n'a pas partager sa localisation !</p>");
                            $('#triggerwarning').trigger('click');
                            setTimeout(function () {
                                $('#ferme').trigger('click');
                    }, 4000);
                }else{
                    var latLng2 = latLng.split(',');
                    
                    latPat = latLng2[0];
                    lngPat = latLng2[1];

                    $("#modalCarte").trigger('click');

                    DSLscript = document.createElement("script");
                    DSLscript.type = "text/javascript";
                    DSLscript.id = "map";
                    DSLscript.src = "http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAFYS6_tY3pkUEhb3cSkRUqiifSbTGOFa4&callback=init";
                    document.body.appendChild(DSLscript);
                }
            }

            $("#fermeCarte").click(function(event) {
                document.removeChild(DSLscript);
            });

            $(window).scroll(function ()
            {
                if ($(window).scrollTop() === 0)
                    $('#returnOnTop').fadeOut();
                else
                    $('#returnOnTop').fadeIn();
            });
        </script>
           <script type="text/javascript">

              var directionsService = new google.maps.DirectionsService();
                  var map, directionsDisplay;
                  
                  function init() {
                    directionsDisplay = new google.maps.DirectionsRenderer();
                        
                        <?php echo "var latLngI1 = \"".$_SESSION["latLng"]."\";";?>
                        var latLngI2 = latLngI1.replace('(', '');
                        var latLngI3 = latLngI2.replace(')', '');
                        var latLngInf = latLngI3.split(',')
                        var latInf = latLngInf[0];
                        var lngInf = latLngInf[1];

                        var posInf = new google.maps.LatLng(latInf, lngInf);
                        var posPat = new google.maps.LatLng(latPat, lngPat);

                       
                        /*
                         var lieu1 = {
                            lat : latInf,
                            lng : lngInf
                          };
                          
                          var lieu2 = {
                            lat: latPat,
                            lng: lngPat
                          };
                        */

                    var maison = new google.maps.LatLng(-19.874104, 47.028093);

                    var myOptions = {
                      zoom:18,
                      mapTypeId: google.maps.MapTypeId.ROADMAP,
                      center: maison
                    }
                    map = new google.maps.Map(document.getElementById("map"), myOptions);

                    directionsDisplay.setMap(map);
                    $("#result").html('');
                    directionsDisplay.setPanel(document.getElementById('result'));
                    trouveRoute(posPat, posInf);

                    setTimeout(function(){
                        $("#modalResult").trigger('click');
                    }, 4000);


                    }
                    
                  
                  function trouveRoute(depart, arrivee) {
                        var directionsService = new google.maps.DirectionsService();
                    if (depart && arrivee)
                    {
                    var choixMode = mode;
                    
                    var request = {
                        origin:depart, 
                        destination:arrivee,
                        travelMode: google.maps.DirectionsTravelMode[choixMode]
                    };
                    
                    directionsService.route(request, function(response, status) {
                      if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                      }
                    });
                    }
                  }
        </script>
    </body>
</html>