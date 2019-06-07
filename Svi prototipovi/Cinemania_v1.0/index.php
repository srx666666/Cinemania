<!-- 
    index.php - Pocetna strana koja se dinamicki ucitava u zavisnosti od korisnika 
    @version 1.0
    @author Mina Racic 0360/2016
    @author Ksenija Jankovic 
-->
<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>

        <?php header('Content-type: text/html; charset=utf-8'); ?>
        <meta charset="UTF-8"> 
        <title></title>
    </head>
    <body>
    <head>

        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="stylesheet" type="text/css" href="p.css">
        
    </head>
    <body>

      
        <header class="mdl-layout__header">

            <div class="mdl-layout__header-row">

                <!-- Title -->
                <img class="logo" src="logo.png">
                <span class="mdl-layout-title"><font size='5'>&nbspPregled repertoara bioskopa na jednom mestu!</font></span>
                
                <div class="mdl-layout-spacer" align = 'right'>
               
                <?php if (isset($_SESSION['user'])) {?>
                    <a class="mdl-navigation__link" href="logOut.php" >Log out</a>
                <?php 
                    
                } 
                    else {
                ?>
                      <a class="mdl-navigation__link" href="logovanje.php" >Log in</a>
                <?php 
                           
                    }
                ?>
                </div>
            </div>
        </header>

    
    <table height=100%, width=100%>
        <?php if(isset($_SESSION['user'])) { ?>
        <tr>
            <td bgcolor="white" valign='top' width='200px'>
                <?php if (isset($_SESSION['isAdmin'])) { ?>
                    <div class="vertical-menu">
                        <div class="vertical-menu">
                               <p>
                                   <font size = '5'>Administrator<br></font>
                                    <b>Korisnicko ime:</b> <?php echo $_SESSION['user']['KorisnickoIme']; ?><br>
                                    <b>Ime:</b> <?php echo $_SESSION['user']['Ime']; ?><br>
                                    <b>Prezime:</b> <?php echo $_SESSION['user']['Prezime']; ?><br>
                                    <b>Datum rodjenja:</b> <?php echo $_SESSION['user']['DatumRodjenja']; ?>
                                </p>
                                <a class="stavka" href="NoviFilm.php"><font size='5'>Dodavanje novih filmova</font></a>
                                <a  class="stavka" href="BrisanjeIzmena1.php"><font size='5'>Izmena filma</font></a>
                                <a  class="stavka" href="Vip.php"><font size='5'>Promovisanje clanova u VIP clanove</font></a>
                            </div>
                    </div>
                
                <?php } 
                else{
                    if (isset($_SESSION['user'])){ 
                        if($_SESSION['user']['VIPKorisnik'] == 2){
                    ?>
                    <div class="vertical-menu">
                        <div class="vertical-menu">
                            <p>
                                <font size = '5'>Vip korisnik<br></font>
                                <b>Korisnicko ime:</b> <?php echo $_SESSION['user']['KorisnickoIme']; ?><br>
                                <b>Ime:</b> <?php echo $_SESSION['user']['Ime']; ?><br>
                                <b>Prezime:</b> <?php echo $_SESSION['user']['Prezime']; ?><br>
                                <b>Datum rodjenja:</b> <?php echo $_SESSION['user']['DatumRodjenja']; ?>
                            </p>
                            <a class="stavka" href="PredlogFilma.php"><font size='5'>Preporuci&nbspmi&nbspfilm</font></a>
                            <a  class="stavka" target="_blank" onClick="window.open('PrijaviGresku.php', 'prijavigresku', 'resizable,height=600,width=800'); return false;">
                            <font size='5'>Prijavi gresku</font></a>
                        </div>
                    </div>
                <?php
                        } 
                        else{
                ?>
                        <div class="vertical-menu">
                            <div class="vertical-menu">
                                <p>
                                    <font size = '5'>Korisnik<br></font>
                                    <b>Korisnicko ime:</b> <?php echo $_SESSION['user']['KorisnickoIme']; ?><br>
                                    <b>Ime:</b> <?php echo $_SESSION['user']['Ime']; ?><br>
                                    <b>Prezime:</b> <?php echo $_SESSION['user']['Prezime']; ?><br>
                                    <b>Datum rodjenja:</b> <?php echo $_SESSION['user']['DatumRodjenja']; ?>
                                </p>
                                <a class="stavka" href="PredlogFilma.php"><font size='5'>Preporuci&nbspmi&nbspfilm</font></a>
                            </div>
                        </div>
                <?php   
                        }
                    }
                }
                ?>
            <?php
        }
            ?>
            </td>
            <td>
                <main class="mdl-layout__content">
                    <table width='60%' align='center'> 
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "cinemania");
                        $con->set_charset('utf8');

                        $result = mysqli_query($con, "SELECT * FROM Film");

                        while ($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td bgcolor='white'>

                                    <h2><a href="pregledFilma.php?nazivFilma=<?php echo $row['Naziv'] ?>" target="blank"><?php echo $row['Naziv']; ?></a></h2>
                                    <hr>
                                    <table> 
                                        <tr>
                                            <td width='25%'>
                                                <img src='<?php echo $row['ImgSrc']; ?>' width='100%' align='center'>
                                            </td>
                                            
                                            <td width='25%'>
                                                <p><?php echo $row['Zanr']; ?>| <?php echo $row['DuzinaTrajanja']; ?></p>
                                                <p><span class="gray-font italic">Početak prikazivanja filma:</span>  
                                                    <?php echo $row['DatumPrikazivanja']; ?></p>                                        
                                                    <a href="#" class="like-link" data-main-id="159845" style="display: none">
                                                        <span class="reminder-label">Zapamti film</span>
                                                        <span class="remove-label">Izbrišite iz podsetnika</span>
                                                    </a>
                                            </td>

                                            <td>
                                                <div class="span6">

                                                    <p>
                                                        <span class="italic gray-font"></span>
                                                        <?php echo $row['Opis']; ?> 
                                                    </p>
                                                    <p>
                                                        <span class="italic gray-font">Glumci:</span>
                                                        <?php echo $row['Glumci']; ?> 
                                                    </p>       
                                                    
                                                </div>
                                            </td>
                                        </tr>  

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><br><br><br></td>
                            </tr>
                        <?php 
                        } 
                        ?>
                    </table>
                </main>
                
            </td>
        </tr>
    </table>
    
    </body>
</html>

