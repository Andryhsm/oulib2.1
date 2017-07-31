<div class="row">
                                                                <div class="form-group col-sm-5">
                                                                    <label for="tel" class="col-sm-5 control-label">Type de soin:</label>
                                                                    <div class="col-sm-7">
                                                                        <select name="type-soinP1" required="" onchange="autre()" class="form-control" id="select1">
                                                                            <option value="">-----choisir-----</option>
                                                                            <option value="Cicatrisation">Cicatrisation</option>
                                                                            <option value="Stomarhérapie">Stomathérapie</option>
                                                                            <option value="Perfusion">Perfusion</option>
                                                                            <option value="Sondage">Sondage</option>
                                                                        </select>                    
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-7">
                                                                    <label for="tel" class="col-sm-3 control-label">Fréquence:</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="frequence-soin1" required="" class="form-control">
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
                                                            <script>
                                                                //$(document).ready(function () ITO LE TSY FANTATRA
                                                                //{
                                                                //    $('[name="TypeDeSoin"]').val("<?php echo($data['TypeDeSoin']) ?>");
                                                                //});
                                                                function autre() {
                                                                    var selection = document.getElementById("select1").value;
                                                                    if (selection === "Cicatrisation")
                                                                    {
                                                                        var element = document.getElementById("cica1");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("cica2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("cica3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    else if (selection === "Stomarhérapie")
                                                                    {
                                                                        var element = document.getElementById("stoma1");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("stoma2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("stoma3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    else if (selection === "Perfusion")
                                                                    {
                                                                        var element = document.getElementById("perf1");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("perf2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("perf3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    else if (selection === "Sondage")
                                                                    {
                                                                        var element = document.getElementById("sondage1");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("sondage2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("sondage3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    document.querySelector("#autre").style.display = (window.getComputedStyle(document.querySelector('#autre')).display == 'none') ? "block" : "hide";
                                                                }

                                                            </script>
                                                            <div id="autre" style="display: none;">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-5">
                                                                        <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                        <div class="col-sm-7">
                                                                            <select name="type-soinP2" onchange="autre1()" class="form-control" id="select2">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="Cicatrisation" id="cica1">Cicatrisation</option>
                                                                                <option value="Stomarhérapie" id="stoma1">Stomathérapie</option>
                                                                                <option value="Perfusion" id="perf1">Perfusion</option>
                                                                                <option value="Sondage" id="sondage1">Sondage</option>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-7">
                                                                        <label for="tel" class="col-sm-3 control-label">Fréquence:</label>
                                                                        <div class="col-sm-3">
                                                                            <select name="frequence-soin2" required="" class="form-control">
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
                                                                <!--                                                                <div class="form-group">
                                                                                                                                    <label for="par" class="col-sm-2 control-label">Heure des soins:</label>
                                                                                                                                    <div class="col-sm-9">
                                                                                                                                        <input type="text" placeholder="par par fréquence de soin" class="form-control" name="par2" id="par2">
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                            </div>
                                                            <script>

                                                                function autre1() {
                                                                    var selection = document.getElementById("select2").value;
                                                                    if (selection === "Cicatrisation")
                                                                    {
                                                                        var element = document.getElementById("cica2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("cica3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Stomarhérapie")
                                                                    {
                                                                        var element = document.getElementById("stoma2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("stoma3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Perfusion")
                                                                    {
                                                                        var element = document.getElementById("perf2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("perf3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Sondage")
                                                                    {
                                                                        var element = document.getElementById("sondage2");
                                                                        element.parentNode.removeChild(element);
                                                                        var element = document.getElementById("sondage3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    document.querySelector("#autre1").style.display = (window.getComputedStyle(document.querySelector('#autre1')).display == 'none') ? "block" : "hide";
                                                                }

                                                            </script>
                                                            <div id="autre1" style="display: none;">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-5">
                                                                        <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                        <div class="col-sm-7">
                                                                            <select name="type-soinP3" onchange="autre2()" class="form-control" id="select3">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="Cicatrisation" id="cica2">Cicatrisation</option>
                                                                                <option value="Stomarhérapie" id="stoma2">Stomathérapie</option>
                                                                                <option value="Perfusion" id="perf2">Perfusion</option>
                                                                                <option value="Sondage" id="sondage2">Sondage</option>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-7">

                                                                        <label for="tel" class="col-sm-3 control-label">Fréquence:</label>
                                                                        <div class="col-sm-3">
                                                                            <select name="frequence-soin3" required="" class="form-control">
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
                                                                <!--                                                                <div class="form-group">
                                                                                                                                    <label for="par" class="col-sm-2 control-label">Heure des soins:</label>
                                                                                                                                    <div class="col-sm-9">
                                                                                                                                        <input type="text" placeholder="par par fréquence de soin" class="form-control" name="par3" id="par3">
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                            </div>
                                                            <script>

                                                                function autre2() {
                                                                    var selection = document.getElementById("select3").value;
                                                                    if (selection === "Cicatrisation")
                                                                    {
                                                                        var element = document.getElementById("cica3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Stomarhérapie")
                                                                    {
                                                                        var element = document.getElementById("stoma3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Perfusion")
                                                                    {
                                                                        var element = document.getElementById("perf3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    if (selection === "Sondage")
                                                                    {
                                                                        var element = document.getElementById("sondage3");
                                                                        element.parentNode.removeChild(element);
                                                                    }
                                                                    document.querySelector("#autre2").style.display = (window.getComputedStyle(document.querySelector('#autre2')).display == 'none') ? "block" : "hide";
                                                                }

                                                            </script>

                                                            <div id="autre2" style="display: none;">
                                                                <div class="row">
                                                                    <div class="form-group col-sm-5">
                                                                        <label for="tel" class="col-sm-5 control-label">Autre type de soin:</label>
                                                                        <div class="col-sm-7">
                                                                            <select name="type-soinP4" class="form-control">
                                                                                <option value="">-----choisir-----</option>
                                                                                <option value="Cicatrisation" id="cica3">Cicatrisation</option>
                                                                                <option value="Stomarhérapie" id="stoma3">Stomathérapie</option>
                                                                                <option value="Perfusion" id="perf3">Perfusion</option>
                                                                                <option value="Sondage" id="sondage3">Sondage</option>
                                                                            </select>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-7">
                                                                        <label for="tel" class="col-sm-3 control-label">Fréquence:</label>
                                                                        <div class="col-sm-3">
                                                                            <select name="frequence-soin4" required="" class="form-control">
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