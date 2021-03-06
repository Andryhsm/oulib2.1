<?php
session_start();
if ((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
    header("Location: ./login.html");
}

include_once "./lib-php/cnx.php";

$req = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $_SESSION['email'] . "'");
$data = $req->fetch();
?>

<!DOCTYPE html>
<html lang="fr-FR" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>contact</title>

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
                      <li><a href="liste.php"><span id="badges">Liste</span></a></li>
                      <li><a href="lib-php/renouvellement.php">Passer une commande</a></li>
                      <li><a href="lib-php/modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="contact2.php">Contact</a></li>
                      <li><a href="./commentmarche_inf.php">Comment ça marche</a></li>
                      <li><a href="lib-php/deconnexion.php">Déconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="clear"></div>
            <div id="alchem-home-sections">

                <section class="section magee-section alchem-home-section-1 alchem-home-style-0" id="section-2">
                    <div class="section-content">
                        <div class="container">
                            <div class="alchem-animated animated fadeInRight" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" style="visibility: visible; animation-duration: 0.9s;">
                                <h2 style="text-align: center" class="section-title alchem_section_4_title"><strong>Contact</strong></h2>
                                <div class=" divider divider-border">
                                </div>
                                <div class="section-subtitle alchem_section_4_sub_title"><center>Merci de nous laisser vos coordonnées et nous vous contacterons dans les plus brefs délais.</center></div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5">
                    <div class="section-content">
                        <div class="container alchem_section_4_model">
                            <div class="row">
                                <div class=" col-md-2_5">
                                    <div class=" divider divider-border">
                                    </div>
                                    <div class="alchem-animated alchem_section_4_image animated fadeInDown" data-animationduration="1.2" data-animationtype="fadeInDown" data-imageanimation="no" style="visibility: visible; animation-duration: 1.2s;">
                                        <img src="./img/send-mail.png" alt="" style="visibility: visible;"><br>
                                    </div>
                                </div>

                                <div class="col-md-3_5">
                                    <div class="alchem-animated alchem_section_4_feature_image_2 animated fadeInRight" data-animationduration="1.2" data-animationtype="fadeInRight" data-imageanimation="no" style="visibility: visible; animation-duration: 1.2s;">
                                        <div class="magee-feature-box style2" data-os-animation="fadeOut" style="padding-left: 65px;">
                                            <form method="POST" action="lib-php/contact.php" id="form-filter" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="nom" class="col-sm-3 control-label">Nom:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" placeholder="Nom" class="form-control" name="nom" id="nom">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                     <label for="email" class="col-sm-3 control-label">Email:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" placeholder="Email" class="form-control" name="email" id="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sujet" class="col-sm-3 control-label">Sujet:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" placeholder="Sujet" class="form-control" name="sujet" id="sujet">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="message" class="col-sm-3 control-label">Message:</label>
                                                    <div class="col-sm-9">
                                                        <textarea placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-8">
                                                        <button type="submit" id="envoyer" class="btn btn-success" style="margin-left: auto;"> Envoyer </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>

                                </div>
                            </div>
                            </section>

                        </div>
                        
                    <div class="btn_up">
                      <img src="img/retour-en-haut.png" class="img-responsive" id="returnOnTop">
                    </div>



                        <button class="btn btn-primary hidden btn-lg" id="triggerwarning" data-toggle="modal" data-target="#loginerror"></button>
                        <div class="modal" id="loginerror">
                              <div class="modal-dialog">
                                <div class="modal-content alert alert-dismissible alert-info col-lg-12" style="background-color: rgba(1,127,175,0.81);">
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