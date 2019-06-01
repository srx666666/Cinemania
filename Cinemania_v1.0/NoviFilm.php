<?php session_start();
if (isset($_SESSION['isAdmin'])==false)
{
	header('Location: index.php');
}?>

<html>
<title>Cinemania</title>
  <head>
	<link rel="stylesheet" type="text/css" href="p1.css">
  </head>
  <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">

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
        </div>
    </header>
  <body>
    <div class="demo-layout-transparent mdl-layout ">
	<div class="mdl-layout  mdl-layout--fixed-drawer mdl-layout--fixed-header">
            
        
	 
<table height=100%, width=100%>
<tr >
              <td bgcolor="white" valign='top' width='200px'>

 
      <div class="vertical-menu">
  <p><font size='6'>Administrator</font></p>
	<a class="stavka" href="NoviFilm.html" ><font size='5'>Dodavanje novih filmova</font></a>
		
         <a  class="stavka" href="BrisanjeIzmena.html" ><font 	size='5'>Izmena filma</font></a>
      
   	
         <a  class="stavka" href="Vip.html"><font size='5'>Promovisanje clanova u VIP clanove</font></a>
      
   

</div>
           
     
	  </td>
	  <td>
      <main class="mdl-layout__content">
	 <table width='60%' align='center'> 
	<form action="novi_film.php" method="post">
 <fieldset>
   <legend> Dodavanje novog filma </legend>
	<br><b>Ime filma</b>: <input type="text" name="ime" required><br><br>
	<b>Opis filma</b>: <input type="text" name="opis" required><br><br>
	<b>Fotografija filma</b>: <input type="file" name="slika" required><br><br>
	<b>Trailer filma</b>: <input type="text" name="trailer" required><br><br>
	<b>Duzina trajanja filma</b>: <input type="number" name="trajanje" required> <br><br>	
        <b>Pocetni datum prikazivanja filma</b>: <input type="date" name="datumPrikazivanja" required> <br><br>
	<b>Sinhronizacija</b>: <input type="text" name="sinhronizacija" required> <br><br>
	<b>Scenarista</b>: <input type="text" name="scenarista" required> <br><br>
	<b>Zanrovi</b>:<input type="text" name="zanr" required><br><br>
	<b>Glumci</b>:<input type="text" name="glumci" required><br><br>
	<b>Reziseri</b>:<input type="text" name="reziser" required><br><br>
	<pre class="tab">                                                                            
	<input type="submit" value="submit"></input></pre>
 </fieldset>
 </form>
</form>
  </body>
</html>