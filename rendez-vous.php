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
                background:url(img/fond3.jpg) fixed;
                background-repeat:no-repeat;
                background-size: cover;
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
                      <li><a href="./carte_infirmier.php">Ma carte</a></li>
                      <li><a href="./effectue.php">Terminer</a></li>
                      <li><a href="./liste.php"><span id="badges">Liste</span></a></li>
                      <li><a href="./lib-php/renouvellement.php">Passer une commande</a></li>
                      <li><a href="./lib-php/modifierprofil_inf.php">Modifier mon profil</a></li>
                      <li><a href="./contact2.php">Contact</a></li>
                      <li><a href="./commentmarche_inf.php">Comment ça marche</a></li>
                      <li><a href="./lib-php/deconnexion.php">Déconnexion</a></li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="clear"></div>

            <div id="alchem-home-sections">
                <input class="hidden" name="emailP" id="emailP" value="<?php echo($_SESSION['email'] ); ?>" readonly>


                <section class="section magee-section alchem-home-section-4 alchem-home-style-0" id="section-5">
                    <div class="section-content">
                        <div class="container alchem_section_4_model">
                            <!-- rendez-vous de 00h00 à 08h00 -->
                            <div class="liste">
                                 <h1>00h00 - 08h00</h1>
                                <?php
                                $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'accepter' AND heure_soin BETWEEN '00:00' AND '08:00'");

                                $b = FALSE;

                                while ($data = $req->fetch()) {
//                                    $heures = explode(':', $data['heure_soin']);
//                                    $heure = $heures[0] . ":" . $heures[1];
                                    ?>

                                    <table class="table table-hover">
                                        <tbody id="content" style="background-color:rgba(255, 255, 255, 0.66);">
                                            <tr class="<?php
                                            $b = TRUE;
                                            echo(utf8_encode($data['id']));
                                            ?>">
                                                <td width='15%'>
                                                    <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo(utf8_encode($data['photo'])); ?>">
                                                </td>
                                                <td width='45%'>
                                                    <?php echo "<h4><b>" . utf8_encode($data['nomP']) . " " . utf8_encode($data['prenomP']) . "</b></h4>"; ?>
    <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo(utf8_encode($data['emailP'])); ?><br>
                                                    <b>Adresse :</b> <?php echo(utf8_encode($data['adresseP'])); ?> <br>
                                                    <b>Type de soin:</b> <?php echo(utf8_encode($data['typeSoinP'])); ?> <br>
                                                    <b>Fréquence de soin:</b> <?php echo(utf8_encode($data['frequenceSoin'])); ?> <br>
                                                    <b>Date de soin:</b> <?php echo(utf8_encode($data['date_soin'])); ?> <br>
                                                    <b>Heure de soin:</b> <?php echo(utf8_encode($data['heure_soin'])); ?> 
                                                    
                                                </td>
                                                <td width='40%'>
                                                    <br><br>
    <?php echo(utf8_encode($data['commentaire'])); ?>
                                                    <br><br><br>
                                                    <div class="pull-right">
                                                        <a class="btn btn-primary">Terminer</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                } if ($b == FALSE) {
                                    echo '<center><h4>Aucun rendez-vous</h4></center>';
                                }
                                ?>

                            </div>

                             <!-- rendez-vous de 08h00 à 10h00 -->
                            <div class="liste">
                                 <h1>08h00 - 10h00</h1>
                                <?php
                                $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'accepter' AND heure_soin BETWEEN '08:00' AND '10:00'");

                                $b = FALSE;

                                while ($data = $req->fetch()) {
//                                    $heures = explode(':', $data['heure_soin']);
//                                    $heure = $heures[0] . ":" . $heures[1];
                                    ?>

                                    <table class="table table-hover">
                                        <tbody id="content" style="background-color:rgba(255, 255, 255, 0.66);">
                                            <tr class="<?php
                                            $b = TRUE;
                                            echo(utf8_encode($data['id']));
                                            ?>">
                                                <td width='15%'>
                                                    <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo(utf8_encode($data['photo'])); ?>">
                                                </td>
                                                <td width='45%'>
                                                    <?php echo "<h4><b>" . utf8_encode($data['nomP']) . " " . utf8_encode($data['prenomP']) . "</b></h4>"; ?>
    <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo(utf8_encode($data['emailP'])); ?><br>
                                                    <b>Adresse :</b> <?php echo(utf8_encode($data['adresseP'])); ?> <br>
                                                    <b>Type de soin:</b> <?php echo(utf8_encode($data['typeSoinP'])); ?> <br>
                                                    <b>Fréquence de soin:</b> <?php echo(utf8_encode($data['frequenceSoin'])); ?> <br>
                                                    <b>Date de soin:</b> <?php echo(utf8_encode($data['date_soin'])); ?> <br>
                                                    <b>Heure de soin:</b> <?php echo(utf8_encode($data['heure_soin'])); ?> 
                                                    
                                                </td>
                                                <td width='40%'>
                                                    <br><br>
    <?php echo(utf8_encode($data['commentaire'])); ?>
                                                    <br><br><br>
                                                    <div class="pull-right">
                                                        <a class="btn btn-primary">Terminer</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                } if ($b == FALSE) {
                                    echo '<center><h4>Aucun rendez-vous</h4></center>';
                                }
                                ?>

                            </div>


                             <!-- rendez-vous de 12h00 à 14h00 -->
                            <div class="liste">
                                 <h1>12h00 - 14h00</h1>
                                <?php
                                $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'accepter' AND heure_soin BETWEEN '12:00' AND '14:00'");

                                $b = FALSE;

                                while ($data = $req->fetch()) {
//                                    $heures = explode(':', $data['heure_soin']);
//                                    $heure = $heures[0] . ":" . $heures[1];
                                    ?>

                                    <table class="table table-hover">
                                        <tbody id="content" style="background-color:rgba(255, 255, 255, 0.66);">
                                            <tr class="<?php
                                            $b = TRUE;
                                            echo(utf8_encode($data['id']));
                                            ?>">
                                                <td width='15%'>
                                                    <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo(utf8_encode($data['photo'])); ?>">
                                                </td>
                                                <td width='45%'>
                                                    <?php echo "<h4><b>" . utf8_encode($data['nomP']) . " " . utf8_encode($data['prenomP']) . "</b></h4>"; ?>
    <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo(utf8_encode($data['emailP'])); ?><br>
                                                    <b>Adresse :</b> <?php echo(utf8_encode($data['adresseP'])); ?> <br>
                                                    <b>Type de soin:</b> <?php echo(utf8_encode($data['typeSoinP'])); ?> <br>
                                                    <b>Fréquence de soin:</b> <?php echo(utf8_encode($data['frequenceSoin'])); ?> <br>
                                                    <b>Date de soin:</b> <?php echo(utf8_encode($data['date_soin'])); ?> <br>
                                                    <b>Heure de soin:</b> <?php echo(utf8_encode($data['heure_soin'])); ?> 
                                                    
                                                </td>
                                                <td width='40%'>
                                                    <br><br>
    <?php echo(utf8_encode($data['commentaire'])); ?>
                                                    <br><br><br>
                                                    <div class="pull-right">
                                                        <a class="btn btn-primary">Terminer</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                } if ($b == FALSE) {
                                    echo '<center><h4>Aucun rendez-vous</h4></center>';
                                }
                                ?>

                            </div>

                             <!-- rendez-vous de 14h00 à 17h00 -->
                            <div class="liste">
                                 <h1>14h00 - 17h00</h1>
                                <?php
                                $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'accepter' AND heure_soin BETWEEN '14:00' AND '17:00'");

                                $b = FALSE;

                                while ($data = $req->fetch()) {
//                                    $heures = explode(':', $data['heure_soin']);
//                                    $heure = $heures[0] . ":" . $heures[1];
                                    ?>

                                    <table class="table table-hover">
                                        <tbody id="content" style="background-color:rgba(255, 255, 255, 0.66);">
                                            <tr class="<?php
                                            $b = TRUE;
                                            echo(utf8_encode($data['id']));
                                            ?>">
                                                <td width='15%'>
                                                    <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo(utf8_encode($data['photo'])); ?>">
                                                </td>
                                                <td width='45%'>
                                                    <?php echo "<h4><b>" . utf8_encode($data['nomP']) . " " . utf8_encode($data['prenomP']) . "</b></h4>"; ?>
    <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo(utf8_encode($data['emailP'])); ?><br>
                                                    <b>Adresse :</b> <?php echo(utf8_encode($data['adresseP'])); ?> <br>
                                                    <b>Type de soin:</b> <?php echo(utf8_encode($data['typeSoinP'])); ?> <br>
                                                    <b>Fréquence de soin:</b> <?php echo(utf8_encode($data['frequenceSoin'])); ?> <br>
                                                    <b>Date de soin:</b> <?php echo(utf8_encode($data['date_soin'])); ?> <br>
                                                    <b>Heure de soin:</b> <?php echo(utf8_encode($data['heure_soin'])); ?> 
                                                    
                                                </td>
                                                <td width='40%'>
                                                    <br><br>
    <?php echo(utf8_encode($data['commentaire'])); ?>
                                                    <br><br><br>
                                                    <div class="pull-right">
                                                        <a class="btn btn-primary">Terminer</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                } if ($b == FALSE) {
                                    echo '<center><h4>Aucun rendez-vous</h4></center>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </section>

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
                            <img src="./img/logo2.png" class = "logo_footer">
                            © Copyright <a href="#">OUSOFT SAS 2017</a> - 38 Rue de la convention, 94270 Le Kremlin-Bicêtre
                        </div>
                    </div>
                </div>          
            </footer>
        </div>  
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./others/owl.carousel.min.js.téléchargement"></script>

        <script type="text/javascript" src="./others/main.js.téléchargement"></script>
        <script type="text/javascript">
            $('.table').on('click', '.btn-primary', function (e) {
                e.preventDefault();

                var a = $(this);
                var id = a.parents('tr').attr('class');

                var status = "terminer";
                var dataString = "id=" + id + "&status=" + status;

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
                       // alert(server_response);
                    }
                });
            });
            $(document).ready(function ()
            {
                $('#returnOnTop').hide();
                $('#returnOnTop').click(function () {
                    //e.preventDefault();
                    $('html,body').animate({scrollTop: 0}, 'slow');
                });

                var auto_refresh = setInterval(
                        function ()
                        {
                            var email = $('#emailP').val();

                            $.ajax({
                                url: "badges_inf.php",
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
            });

            $(window).scroll(function ()
            {
                if ($(window).scrollTop() == 0)
                    $('#returnOnTop').fadeOut();
                else
                    $('#returnOnTop').fadeIn();
            });
        </script>
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
    </body>
</html>