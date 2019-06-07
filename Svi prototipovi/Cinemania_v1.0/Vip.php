<?php 
session_start();
if (isset($_SESSION['isAdmin'])==false)
{
	header('Location: index.php');
}
?>
<html>
<title>Cinemania</title>
  <head>
	<link rel="stylesheet" type="text/css" href="p.css">
  </head>
  <header class="mdl-layout__header">

            <div class="mdl-layout__header-row">

                <!-- Title -->
                <a href="index.php"><img class="logo" src="logo.png"></a>
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
            </div>
        </header>
 <body>
	 
<table height=100%, width=100%>
<tr >
              <td bgcolor="white" valign='top' width='200px'>

 
      <div class="vertical-menu">
  <p><font size='6'>Administrator</font></p>
	<a class="stavka" href="NoviFilm.php"><font size='5'>Dodavanje novih filmova</font></a>
		
         <a  class="stavka" href="BrisanjeIzmena1.php"><font 	size='5'>Izmena filma</font></a>
      
   	
         <a  class="stavka" href="Vip.php"><font size='5'>Promovisanje clanova u VIP clanove</font></a>
      
   

</div>
           
     
	  </td>
	  <td>
      <main class="mdl-layout__content">
	 <table width='60%' align='center'> 



<?php

	$con = mysqli_connect("localhost","root","","Cinemania");
        $con->set_charset('utf8');
       
        $result = mysqli_query($con, "SELECT * FROM RegistrovanKorisnik where vipkorisnik=1"); 
        while ($row = $result->fetch_assoc()){
?> 
	<div style="background-color:darkgray">
            <form action="odbijVip.php" method="post">
            <input type="submit" value="odbij <?php echo $row["KorisnickoIme"];?>" name="korisnik">
            </form>
    
            <form action="promovisiUVip.php" method="post">
            <input type="submit" value="promovisi <?php echo $row["KorisnickoIme"];?>" name="korisnik">
            </form>
            <p align="left"><?php echo $row["KorisnickoIme"]; ?></p>
        </div>
   <br>
   <br>
   <?php }
mysqli_close($con);
?>



  </body>
</html>