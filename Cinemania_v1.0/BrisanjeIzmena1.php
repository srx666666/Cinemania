<?php session_start();if (isset($_SESSION['isAdmin'])==false)
{
	header('Location: index.php');
}?>
<html>
<title>Cinemania</title>
  <head>
	<link rel="stylesheet" type="text/css" href="p1.css">
  </head>
  <body>
  
    <div class="demo-layout-transparent mdl-layout ">
	<div class="mdl-layout  mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
     
	 
        <div class="mdl-layout__header-row">
			<a href="Pregled.html">
		  <img class="logo" src="logo.png">
		  </a>
          <span class="mdl-layout-title"><font size='5'>&nbspBrisanje i izmena filma</font></span>
          <div class="mdl-layout-spacer">
		  
		  </div><nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="prijava.html" >LogOut</a>
           
          </nav>
        </div>
      </header>
	 
<table height=100%, width=100%>
<tr >
              <td bgcolor="white" valign='top' width='200px'>

 
      <div class="vertical-menu">
  <p><font size='6'>Administrator</font></p>
	<a class="stavka" href="NoviFilm.html" ><font size='5'>Dodavanje novih filmova</font></a>
		
         <a  class="stavka" href="BrisanjeIzmena.html" ><font 	size='5'>Izmena filma</font></a>
      
   	
         <a  class="stavka" href="Vip.html" ><font size='5'>Promovisanje clanova u VIP clanove</font></a>
      
   

</div>
           
     
	  </td>
	  <td>
      <main class="mdl-layout__content">
	 <table width='60%' align='center'> 
<form name="izmene" action="brisanjeIzmena.php" method="post">
 <fieldset>
 <legend> Izmena filma </legend>
	<br><b>Ime filma</b>: <input type="text" name="ime" required><br><br>
	<b>Opis filma</b>: <input type="text" name="opis" ><br><br>
	<b>Fotografija filma</b>: <input type="file" name="slika" ><br><br>
	<b>Trailer filma</b>: <input type="file" name="trailer" ><br><br>
	<b>Duzina trajanja filma</b>: <input type="number" name="trajanje" > <br><br>
	<b>Sinhronizacija</b>: <input type="text" name="sinhronizacija" > <br><br>
	<b>Scenarista</b>: <input type="text" name="scenarista" > <br><br>
	<b>Zanrovi</b>:<input type="text" name="zanr" ><br><br>
	<b>Glumci</b>:<input type="text" name="glumci" ><br><br>
	<b>Reziseri</b>:<input type="text" name="reziser"><br><br>
	 <input type="radio" name="funkcija" 	value="Brisanje"required>Brisanje
	 <input type="radio" name="funkcija" 	value="Dodaj termine"required>Dodaj termine
    	 <input type="radio" name="funkcija" value="Izmena"required> 	Izmena<br>
	<input type="submit" value="submit">
 </fieldset>
</form>
  </body>
</html>