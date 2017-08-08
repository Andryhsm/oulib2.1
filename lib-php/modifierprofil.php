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

            .section-content{
                margin-bottom: 5%;
                background-color: white;
            }

            section{
                font-size: 1.1em;
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
                            <li><a href="./deconnexion.php">Déconnexion</a></li>
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
                                                <fieldset class="col-lg-12 col-md-12">
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
                                                                <input type="password" placeholder="Mot de passe" class="form-control" name="mdpP" id="mdpP">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="conf-mdp" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-9">
                                                                <input type="password" placeholder="Confirmation du mot de passe" class="form-control" name="conf-mdp" id="conf-mdp">
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
                                                                    if($TypeDeSoin[2] != ""){
                                                                                $TypeDeSoin[2] = "Soins d'oncologie et traitement de chimiothérapie";
                                                                            } 
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
                                                            

                                                             
                                                            
                                                             <?php

                                                             $TypeSoin = array("Soins de stomie", "Soins des plaies","Soins d’oncologie et traitement de chimiothérapie", "Perfusion", "Prise de sang",  "Injection sous cutané, intramusculaire, intraveineuse", "Prise en charge des patients diabétiques",  "Aide à la toilette", "Préparation et distribution des traitements");

                                                            echo '<table class="table table-hover">
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
                                                                   
                                                        </div> 


                                                        <br>
                                                        <div class="form-group">
                                                            <label for="ajout" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-8">
                                                                <button id="valider" class="btn-primary" type="submit">Valider les changements&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-edit"></i> </button>
                                                            </div>
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

                                                                        function changerType(id){
                                                                            if($("#autre"+id).hasClass('hidden') )
                                                                                $("#autre"+id).removeClass('hidden');
                                                                            else{ 
                                                                                $("#autre"+id).addClass('hidden');
                                                                                $("#typeSoin"+id).val("");
                                                                                $("#frequenceSoin"+id).val("");
                                                                                $("#par"+id).val("");
                                                                            }
                                                                        }

                                                                        function change()
                                                                        {
                                                                            $('#photo').trigger('click');
                                                                        }
/*
                                                                        changer(id){
                                                                            alert(id);
                                                                        }*/

                                                                        function changeSoins()
                                                                        {
                                                                            $('#listeSoins').addClass('hidden');
                                                                            $('#infosSoins').removeClass('hidden');
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

                
                                                                            var typeSoin = ["", "", "", "", "", "", "", "", ""];
                                                                            var frequence = ["", "", "", "", "", "", "", "", ""];
                                                                            var par = ["", "", "", "", "", "", "", "", ""];

                                                                            for(var i = 0; i < typeSoin.length; i++){
                                                                                if($("#typeSoin"+i).is(":checked")){  
                                                                                    typeSoin[i] = $("#typeSoin"+i).val();
                                                                                    frequence[i] = $("#frequenceSoin"+i).val();
                                                                                    par[i] = $("#par"+i).val();
                                                                                }
                                                                            }
                                                                            
                                                                            var TypeDeSoin = typeSoin.join("|");
                                                                            var FrequenceDeSoin = frequence.join("|");
                                                                            var Par = par.join("|");

                                                                            $("#TypeDeSoin").val(TypeDeSoin);
                                                                            $("#FrequenceDeSoin").val(FrequenceDeSoin);
                                                                            $("#Par").val(Par);
                                                                            
                                                                            console.log($("#TypeDeSoin").val());
                                                                            console.log($("#FrequenceDeSoin").val());
                                                                            console.log($("#Par").val());
                                                                            
                                                        
                                                                            e.preventDefault();



                                                                            var form = $('#form-filter').get(0);
                                                                            var formData = new FormData(form);
                                                                            $.ajax({
                                                                                type: 'POST',
                                                                                url: 'update-profil-patient.php', 
                                                                                data: formData, 
                                                                                dataType: 'text', // what type of data do we expect back from the server
                                                                                processData: false,
                                                                                contentType: false,
                                                                                success: function (server_response)
                                                                                {
                                                                                    window.location.href = "modifierprofil.php";
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
                                                                            
                                                                           /* location.reload();*/
                                                                        });
        </script>
        <script type="text/javascript">
            $(document).ready(function ()
            {

                <?php
                    $typeSoin = explode('|', utf8_encode($data['TypeDeSoin']));
                    $frequenceSoin = explode('|', utf8_encode($data["FrequenceDeSoin"]));
                    $par = explode('|', utf8_encode($data['Par']));

                    for($i = 0; $i <= 8; $i++){
                        if($typeSoin[$i] != ""){
                            echo '$("#autre'.$i.'").removeClass("hidden");';
                            echo '$("#frequenceSoin'.$i.'").val("'.$frequenceSoin[$i].'");';
                            echo '$("#typeSoin'.$i.'").prop("checked", true);';
                            echo '$("#frequenceSoin'.$i.'").val("'.$FrequenceDeSoin[$i].'");';
                            echo '$("#par'.$i.'").val("'.$par[$i].'");';
                        }
                    } 
                ?>

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
