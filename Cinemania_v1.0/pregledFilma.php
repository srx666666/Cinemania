<?php
    session_start();

    if(isset($_GET['nazivFilma'])){
        
        $nazivFilma = $_GET['nazivFilma'];
        $con = mysqli_connect("localhost", "root", "", "cinemania");
        $con->set_charset('utf8');

        $result = mysqli_query($con, "SELECT * FROM Film WHERE Naziv = '$nazivFilma'");
        $_SESSION['film'] = mysqli_fetch_assoc($result);
        $idFilma = $_SESSION['film']['IDFilma'];
        
        mysqli_close($con);
        
    }
    
    $film = $_SESSION['film'];
    $idFilma = $_SESSION['film']['IDFilma'];
    
    $con = mysqli_connect("localhost", "root", "", "cinemania");
    $selectOcenaFilma = "SELECT avg(o.Vrednost) AS prosek  FROM Ocena o WHERE IDFilma = '$idFilma'";
    $ocenaFilmaRezultat = mysqli_query($con, $selectOcenaFilma);
    $ocenaFilma = mysqli_fetch_assoc($ocenaFilmaRezultat);
    $projekcijeFilma = mysqli_query($con, "SELECT * FROM Projekcija WHERE IDFilma = '$idFilma'"); 
        
     mysqli_close($con);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-cyan.min.css" />
        <link rel="stylesheet" type="text/css" href="p.css">
       <script>
           
        </script>
    </head>

    <body onload="checkMessages()">
        <!--<div class="bg">-->
            <img src="logo.png" width='20%'>

            <!--<div class="description">-->

                <table width='60%' align="center"> 
                    <tr> 
                        <td width='40%'>
                       
                            <form action="Rezervacija.php" method="post">
                                <select>
                                <?php while($row = mysqli_fetch_assoc($projekcijeFilma)){?>
                                
                                    <option value=
                                        <?php echo $row["IDProjekcije"];?> name="idProjekcije"> 
                                            <?php 
                                                echo $row["Termin"];
                                                echo $row["IDSale"];
                                            ?>
                                    </option>
                                
                                <?php } ?>
                                </select>
                                <input type="submit" value="Rezervisi kartu">
                                 
                            </form>
                            
                            
                            <div class="original" style="margin-bottom: 10px;">Hodja fra Pjort </div>                                

                            <span>Žanr:</span> <?php 
                                echo $film['Zanr'];
                            ?><br/>
                            <span>Trajanje:</span> <?php 
                                echo $film['DuzinaTrajanja'] . " min"; 
                            ?><br/>
                            <span>Režija:</span> <?php 
                                echo $film['Reziser'];
                            ?><br/>
                            <span>Scenario:</span> <?php 
                                echo $film['Scenarista'];
                            ?><br/>
                            <span>Uloge:</span> <?php 
                                echo $film['Glumci'];
                            ?><br/>
                            <?php 
                                if($film['Sinhronizacija'] != null){
                            ?>
                            <span>Sinhronizacija:</span> <?php 
                                echo $film['Sinhronizacija'];
                            ?><br/>      
                                <?php } ?>
                            <span>Ocena nasih korisnika: <?php 
                                echo $ocenaFilma['prosek'];
                            ?><br/>

                        </td>	
                    <br class="clear"/>

                    <div class="text">
                        <td>
                          <?php 
                                echo $film['Opis'];
                            ?><br/>  
                        <br class="clear" />
                        </td>
                    </tr>
                    <tr>	
                        <td colspan='2'>
                            <div class="text">
                                <div class="text">
                                    <br class="clear"/>
                                    <iframe width="100%" height="300" src="<?php echo $film['TrailerSrc'];?>"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align = "right" >
                            <br>
                            <div valign = "center">
                                <!--<b fontsize = 2 > Ocena: </b>-->
                            </div>
                            <fieldset 
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    echo 'disabled';
                                }
                                ?> >
                                <form method ='post' action ='ocenjivanjeFilmaSkripta.php'>
                                
                                    <div class="cc-selector" align = 'center'>
                                     
                                        <input id="star1" type="radio" name="star" value=1>
                                        <label class="drinkcard-cc star" for="star1">1</label>
                                        <input id="star2" type="radio" name="star" value=2>
                                        <label class="drinkcard-cc star" for="star2">2</label>
                                        <input id="star3" type="radio" name="star" value=3>
                                        <label class="drinkcard-cc star" for="star3">3</label>
                                        <input id="star4" type="radio" name="star" value=4>
                                        <label class="drinkcard-cc star" for="star4">4</label>
                                        <input id="star5" type="radio" name="star" value=5>
                                        <label class="drinkcard-cc star" for="star5">5</label>
                                        <input id="star6" type="radio" name="star" value=6>
                                        <label class="drinkcard-cc star" for="star6">6</label>
                                        <input id="star7" type="radio" name="star" value=7>
                                        <label class="drinkcard-cc star" for="star7">7</label>
                                        <input id="star8" type="radio" name="star" value=8>
                                        <label class="drinkcard-cc star" for="star8">8</label>
                                        <input id="star9" type="radio" name="star" value=9>
                                        <label class="drinkcard-cc star" for="star9">9</label>
                                        <input id="star10" type="radio" name="star" value=10>
                                        <label class="drinkcard-cc star" for="star10">10</label>&nbsp
                                    
                                    </div><br>                                  
                                    <p align = 'center'><button class = 'mdl-button' type = "submit" >Posalji ocenu</button></p>

                                </form>
                            </fieldset>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>						
        <hr>

        <fieldset 
            <?php
            if (!isset($_SESSION['user'])) {
                echo 'disabled';
            }
            ?> >
            <table width= '60%'  border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="white">
                <tr> 
                    <td align="center" colspan='2'><font size='5'><b>Komentari</b></font></td>
                </tr>
                
                <tr> 
                    <form name ='formaNazivFilma' method ='post' action = 'ostavljanjeKomentaraSkripta.php'>
                        <div class="mdl-textfield">
                        <td align = "center"> 
                            <div class="mdl-textfield" >
                                <textarea class="mdl-textfield__input" type="text" rows= "10" id="sample5" name = 'opisKomentara' ></textarea>
                            </div>
                        </td> 
                </tr>
                <tr>
                    <td><p align = "center"><button class = "mdl-button" type = "submit">Posalji komentar</button></p></td>
                </tr>
                    </form>
                
            </table>
        </fieldset>

    </body>
</html>