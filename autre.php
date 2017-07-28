										<div class="row">
											<div class="form-group col-sm-5">
                                                <label for="type-soin" class="col-sm-5 control-label">Type de soin:</label>
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
                                            <div class="form-group col-sm-7">
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
                                                <div class="col-sm-6">
                                                    <select name="par0" required="" class="form-control">
                                                        <option value="">-----choisir-----</option>
                                                        <option value="jour"> / jour</option>
                                                        <option value="semaine"> / semaine</option>
                                                    </select>                    
                                                </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par1" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par2" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par3" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
                                                    <label for="type-soin4" class="col-sm-2 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par4" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
                                                    <label for="type-soin5" class="col-sm-2 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par5" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
                                                    <label for="type-soin6" class="col-sm-2 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par6" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
                                                        <label for="type-soin7" class="col-sm-2 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par7" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
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
											<div class="row">
                                                <div class="form-group col-sm-5">
                                                    <label for="type-soin8" class="col-sm-2 control-label">Autre type de soin:</label>
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
                                                <div class="form-group col-sm-7">
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
                                                    <div class="col-sm-6">
                                                        <select name="par8" class="form-control">
                                                            <option value="">-----choisir-----</option>
                                                            <option value="jour"> / jour</option>
                                                            <option value="semaine"> / semaine</option>
                                                        </select>                    
                                                    </div>
                                                </div>
												</div>
                                            </div>