<?php session_start();if (isset($_SESSION['isAdmin'])==false)
{
	header('Location: index.php');
}?>
<html>
<title>Cinemania</title>
  <head>
	<link rel="stylesheet" type="text/css" href="p.css">
	
  </head>
  <body>
    <div class="demo-layout-transparent mdl-layout ">
	<div class="mdl-layout  mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
     
	 
        <div class="mdl-layout__header-row">
		  <img class="logo" src="logo.png">
          <span class="mdl-layout-title"><font size='5'>&nbspPregled repertoara bioskopa na jednom mestu!</font></span>
          <div class="mdl-layout-spacer">
		  
		  </div><nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="" >LogOut</a>
           
          </nav>
        </div>
      </header>

<?php if(isset($poruka_termin))
        echo "<font color='red'>$poruka_termin</font><br>";
    ?>
	  
<table height=100%, width=100%>
<tr >
              <td bgcolor="white" valign='top' width='200px'>

 
      <div class="vertical-menu">
  <p><font size='6'>Administrator</font></p>
	<a class="stavka" href="NoviFilm.html" target="_blank" 	onClick="window.open	('file:///C:/Users/Korisnik/Desktop/NoviFilm.html', 	'novi film');"><font size='5'>Dodavanje novih filmova</font></a>
		
         <a  class="stavka" href="BrisanjeIzmena.html" 		target="_blank" onClick="window.open		('file:///C:/Users/Korisnik/Desktop/BrisanjeIzmena.html','izmenafilma');"><font 	size='5'>Izmena filma</font></a>
      
   	
         <a  class="stavka" href="Vip.html" 			target="_blank" onClick="window.open		('file:///C:/Users/Korisnik/Desktop/Vip.html','promovisanje');"><font size='5'>Promovisanje clanova u VIP clanove</font></a>
      
   

</div>
           
     
	  </td>
	  <td>
      <main class="mdl-layout__content">
	 <table width='60%' align='center'> 
<form name="izmene" action="terminDodaj.php" method="post">
 <fieldset>
  <legend> Dodavanje novih termina </legend>
	<b>Vreme prikazivanja</b>: <input type="datetime-local" name="vreme" required><br><br>
	<b>Sala</b>: <select name="sala">
	<?php
        $con = mysqli_connect("localhost","root","","Cinemania");
       
        $result = mysqli_query($con, "SELECT IDSale FROM Sala"); 
        while ($row = $result->fetch_assoc()){
     ?>
<option value=<?php echo $row["IDSale"];?> name="sala"> <?php echo $row["IDSale"];?></option>
<?php }
mysqli_close($con);?>

	</select><br><br>
<pre class="tab">           
<input type="submit" value="submit"></pre>
 </fieldset>
</form>
  </body>
</html>