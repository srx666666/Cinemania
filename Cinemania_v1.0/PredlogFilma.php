<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
      <head>
        
<?php header('Content-type: text/html; charset=utf-8'); session_start();?>
<?php 

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
die();
    
} ?>
        <meta charset="UTF-8"> 
        <title></title>
 
    <!-- Material Design Lite -->

<meta http-equiv="content-type" content="text/html;charset=utf-8">

    <!-- Material Design icon font -->
  <!--<link rel="stylesheet" type="text/css" href="material.min.css">-->
	<link rel="stylesheet" type="text/css" href="p.css">
  </head>
  <header class="mdl-layout__header">

            <div class="mdl-layout__header-row">

                <!-- Title -->
                <img class="logo" src="logo.png">
                <span class="mdl-layout-title"><font size='5'>&nbspPregled repertoara bioskopa na jednom mestu!</font></span>
                
                <div class="mdl-layout-spacer">
               
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
        </header>
    <body>
        <?php    
        $con = mysqli_connect("localhost", "root", "", "cinemania");
        
        $con->set_charset('utf8');
        $username=$_SESSION['user']['KorisnickoIme'];
    
        $movies_i_liked = mysqli_query($con, "SELECT * FROM Ocena o, Film f WHERE o.KorisnickoIme='$username' AND (o.Vrednost='10' OR o.Vrednost='9') AND (o.IDFilma=f.IDFilma) ORDER BY o.Vrednost DESC");

        if ($movies_i_liked->num_rows === 0) {

            $counter = 0;
            $best_movies = mysqli_query($con, "SELECT *, avg(o.Vrednost) AS prosek  FROM Ocena o, Film f WHERE f.IDFilma=o.IDFilma GROUP BY f.IDFilma ORDER BY prosek DESC");
            while (($row = $best_movies->fetch_assoc()) && ($counter < 3)) {
                ?> 

                <main class="mdl-layout__content">

                    <table width='60%' align='center'> 
                        <tr><td bgcolor='	white' >

                                <h2><a href="pregledFilma.php?nazivFilma=<?php echo $row['Naziv'] ?>" target="blank"><?php echo $row['Naziv']; ?></a></h2>
                                <hr>   
                                <table> 
                                    <tr>
                                        <td width='25%'>
                                            <img src='<?php echo $row['ImgSrc']; ?>' width='100%' align='center'>
                                        </td>
                                        <td width='25%'>

                                            <p><?php echo $row['Zanr']; ?>| <?php echo $row['DuzinaTrajanja']; echo" min"; ?></p>
                                            <p><span class="gray-font italic">Početak prikazivanja filma:</span>  <?php echo $row['DatumPrikazivanja']; ?></p>                                        <a href="#" class="like-link" data-main-id="159845" style="display: none">

                                            </a></td>

                                        <td >

                                            <div class="span6">

                                                <p><span class="italic gray-font"><?php echo $row['Opis']; ?> </p><p><span class="italic gray-font">Glumci:</span> <?php echo $row['Glumci']; ?> </p>        </div>
                                        </td>
                                    </tr>  

                                </table>
                            </td></tr>
                        <tr><td><br><br><br></td></tr>

                    </table>
                </main>
                <?php
                $counter += 1;
            }
        } else {
            $counter = 0;
            $found = false;
            while (($row = $movies_i_liked->fetch_assoc()) && $counter < 3) {

                $zanr = $row['Zanr'];
                $reziser = $row['Reziser'];
                $IDFilma = $row['IDFilma'];

                $similar_movies = mysqli_query($con, "SELECT * FROM Film f, Ocena o WHERE (f.Zanr='$zanr' OR f.Reziser='$reziser') AND (f.IDFilma=o.IDFilma) AND (f.IDFilma!='$IDFilma') GROUP BY f.IDFilma ORDER BY o.Vrednost DESC");


                if ($similar_movies->num_rows === 0) {
                    continue;
                } else {
                    $found = true;
                    while (($row1 = $similar_movies->fetch_assoc()) && $counter < 3) {
                        ?>

                        <main class="mdl-layout__content">

                            <table width='60%' align='center'> 
                                <tr><td bgcolor='	white' >

                                        <h2><a href="pregledFilma.php?nazivFilma=<?php echo $row['Naziv'] ?>" target="blank"><?php echo $row1['Naziv']; ?></a></h2>
                                        <hr >




                                        <table> 
                                            <tr>
                                                <td width='25%'>
                                                    <img src='<?php echo $row1['ImgSrc']; ?>' width='100%' align='center'>
                                                </td>
                                                <td width='25%'>

                                                    <p><?php echo $row1['Zanr']; ?>| <?php echo $row1['DuzinaTrajanja']; ?></p>
                                                    <p><span class="gray-font italic">Početak prikazivanja filma:</span>  <?php echo $row1['DatumPrikazivanja']; ?></p>                                        <a href="#" class="like-link" data-main-id="159845" style="display: none">

                                                    </a></td>

                                                <td >

                                                    <div class="span6">

                                                        <p><span class="italic gray-font"><?php echo $row1['Opis']; ?> </p><p><span class="italic gray-font">Glumci:</span> <?php echo $row1['Glumci']; ?> </p>        </div>
                                                </td>
                                            </tr>  

                                        </table>
                                    </td></tr>
                                <tr><td><br><br><br></td></tr>

                            </table>
                        </main>
                        <?php
                        $counter += 1;
                    }
                }
            }
        
        if (!$found) {
            $counter = 0;
            $best_movies = mysqli_query($con, "SELECT *, avg(o.Vrednost) AS prosek  FROM Ocena o, Film f WHERE f.IDFilma=o.IDFilma GROUP BY f.IDFilma ORDER BY prosek DESC");
            while (($row = $best_movies->fetch_assoc()) && ($counter < 3)) {
                ?> 

                <main class="mdl-layout__content">

                    <table width='60%' align='center'> 
                        <tr><td bgcolor='	white' >

                                <h2><a href="pregledFilma.php?nazivFilma=<?php echo $row['Naziv'] ?>" target="blank"><?php echo $row['Naziv']; ?></a></h2>
                                <hr >
                                <table> 
                                    <tr>
                                        <td width='25%'>
                                            <img src='<?php echo $row['ImgSrc']; ?>' width='100%' align='center'>
                                        </td>
                                        <td width='25%'>

                                            <p><?php echo $row['Zanr']; ?>| <?php echo $row['DuzinaTrajanja']; ?></p>
                                            <p><span class="gray-font italic">Početak prikazivanja filma:</span>  <?php echo $row['DatumPrikazivanja']; ?></p>                                        <a href="#" class="like-link" data-main-id="159845" style="display: none">

                                            </a></td>

                                        <td >

                                            <div class="span6">

                                                <p><span class="italic gray-font"><?php echo $row['Opis']; ?> </p><p><span class="italic gray-font">Glumci:</span> <?php echo $row['Glumci']; ?> </p>        </div>
                                        </td>
                                    </tr>  

                                </table>
                            </td></tr>
                        <tr><td><br><br><br></td></tr>

                    </table>
                </main>
                <?php
                $counter += 1;
        }}
        }
        ?>


    </body>
</html>
