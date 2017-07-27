<?php
/*
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: ./login.html");
}

include_once "./lib-php/cnx.php";

$req = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $_SESSION['email'] . "'");
$data = $req->fetch();*/
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Comment ça marche</title>

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

        <script type="text/javascript" src="./others/jquery.js.téléchargement"></script>

        <script type="text/javascript">
            /* <![CDATA[ */
            var object = {"ajaxurl": "http:\/\/localhost\/wordpress\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>

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
            .fixed {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
            }
            h4{
                color:#007EAF;
            }
            .enhaut{
                background-image: url();
                padding-top: 15px;
                padding-bottom: 50px;
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
                      <li><a href="liste.php"><span id="badges">Liste</span></a></li>
                      <li><a href="./rendez-vous.php">Mes rendez-vous</a></li>
                      <li><a href="lib-php/renouvellement.php">Commander du matériel</a></li>
                      <li><a href="lib-php/modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="lib-php/deconnexion.php">Deconnexion</a></li>
              </ul>
            </div>
          </div>
        </nav>



            <div id="alchem-home-sections">

                <section class="section magee-section alchem-home-section-1 alchem-home-style-0" id="section-2">
                    <div class="section-content">
                        <div class="container">
                            <div class="alchem-animated animated fadeInRight" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" style="visibility: visible; animation-duration: 0.9s;">
                                <h2 style="text-align: center" class="section-title alchem_section_4_title"><strong>Comment ça marche</strong></h2>
                                <div class=" divider divider-border">
                                </div>
                                <div class="section-subtitle alchem_section_4_sub_title"><center><h4><b>Développez sereinement vos activités avec Oulib</b></h4></center></div>
                                

                            </div>
                        </div>
                    </div>
                </section>

                <section class="section magee-section enhaut alchem-home-style-0" id="section-5">
                    <div class="section-content">
                        <div class="container alchem_section_4_model">
                            <div class="row">
                                <div class=" col-md-2_5">
                                    <div class=" divider divider-border">
                                    </div>
                                    <div class="alchem-animated alchem_section_4_image animated fadeInDown" data-animationduration="1.2" data-animationtype="fadeInDown" data-imageanimation="no" style="visibility: visible; animation-duration: 1.2s;">
                                        <img src="./img/engrenage.jpg" alt="" style="visibility: visible;"><br>
                                    </div>
                                </div>

                                <div class="col-md-3_5">
                                    <div class="alchem-animated alchem_section_4_feature_image_2 animated fadeInRight" data-animationduration="1.2" data-animationtype="fadeInRight" data-imageanimation="no" style="visibility: visible; animation-duration: 1.2s;">
                                        <div class="magee-feature-box style2" data-os-animation="fadeOut" style="padding-left: 65px;">
                                            <h4>Inscription :</h4>
                                            <ul>    
                                                <li>Renseignez votre disponibilité, type de soins que vous effectuez ainsi que votre secteur d’exercice.</li>
                                                <li>Vous allez apparaitre automatiquement sur la carte, les patients peuvent vous voir et envoyer une demande de RDV en ligne.</li>
                                                <li>Vous recevez en temps réel, la liste des demandes, les informations sur le patient et ses besoins.</li>
                                            </ul>
                                            <h4>Gestion patients :</h4>
                                                <li>Définissez vous-même votre secteur d’exercice</li>
                                                <li>Acceptez ou refusez une prise en charge en fonction de votre agenda</li>
                                                <li>Gérez facilement vos fichiers patients</li>
            
                                            <h4>Oulib vous facilite la vie : </h4>
                                                <li>Trouver facilement une prise en charge à domicile dans votre secteur.</li>
                                                <li>Commandez directement et gratuitement les matériels nécessaires via oulib</li>
                                                <li>Type de soins triés et ciblés par rapport à votre convenance et votre préférence</li>
                                                <li>Données et systèmes d’information de santé (SIS) sécurisées</li>
                                            <h4>Restez connecté avec Oulib :</h4>
                                                <li>Notifications instantanées à chaque mouvement</li>
                                            <br><a href="./contact.html">Pour nous contacter, Cliquez ici</a>
                                            <br>
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
                        </div>
                        <div class="modal-body">
                            <div class="warning" id="erreur"></div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer-->

            <footer class="">

                <div class="footer-info-area" style="margin-top: 4vw;">
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
            <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>
        </div>  
         <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
                        <script src="./bootstrap/js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>
                    <script type="text/javascript">
            
                    </script>
                    <script type="text/javascript" src="./others/main.js.téléchargement"></script>
                        <script type="text/javascript">
                          $(document).ready( function () 
                          {
                            $('#returnOnTop').hide();
                            $('#returnOnTop').click( function() {
                                //e.preventDefault();
                                $('html,body').animate({scrollTop: 0}, 'slow');
                            });

				                var auto_refresh = setInterval(
				                    function() 
				                    {
				                        var email = $('#emailP').val();

				                        $.ajax({
				                            url: "badges_inf.php",
				                            type: "POST",
				                            data: "email="+email,
				                            success: function(server_response) 
				                            {  
				                                $('#badges').html(server_response);
				                            },
				                            error: function(server_response) 
				                            {  
//				                              alert('Erreur :' + server_response);
				                            }
				                        });
				                    }, 1000);
                          });

                          $(window).scroll(function() 
                          {
                              if ( $(window).scrollTop() == 0 )
                                  $('#returnOnTop').fadeOut();
                              else
                                  $('#returnOnTop').fadeIn();
                          });
                        </script>

                        <script type="text/javascript">

                            $(document).ready(function() 
                            {
                                $('#envoyer').click(function(e) 
                                {
                                    e.preventDefault();

                                    var nom = $('#nom').val();
                                    var mail = $('#email').val();
                                    var sujet = $('#sujet').val();
                                    var message = $('#message').val();

                                    var dataString ="nom="+nom+"&email="+mail+"&sujet="+sujet+"&message="+message;

                                    $.ajax({
                                        type: 'POST',
                                        url: 'lib-php/contact.php',
                                        data: dataString,
                                        success: function(server_response) 
                                        { 
                                            $('#erreur').html('<p>'+ server_response +'</p>');
                                            $('#triggerwarning').trigger('click');
                                            setTimeout(function() {
                                                $('#ferme').trigger('click');
                                            }, 40000);
                                        },
                                        error: function(server_response) 
                                        {
                                            $('#erreur').html('<p>'+ server_response +'</p>');
                                            $('#triggerwarning').trigger('click');
                                            setTimeout(function() {
                                                $('#ferme').trigger('click');
                                            }, 40000);
                                        }
                                    });
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
//                                              alert('Erreur :' + server_response);
                            }
                                        });
                                    }, 1000);
                            });
                        </script>      
    </body>
</html>