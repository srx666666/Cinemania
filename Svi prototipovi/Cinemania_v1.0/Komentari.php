<?php session_start();if (isset($_SESSION['isAdmin'])==false)
{
	header('Location: index.php');
}?>
  <html >
<title>Cinemania</title>
      <head>
	<link rel="stylesheet" type="text/css" href="p.css">
  </head>
	<body>
	  <div class="bg">
	  <a href="index.php"><img class="logo" src="logo.png"></a>

  

<hr>
<form name="komentari" method="post" action="">
</form>
  <table width= '60%'  border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="white">
				<p><font size='6'><b>Komentari:</b></font></p>
				<tr>
<?php
		$film=2;
        $con = mysqli_connect("localhost","root","","Cinemania");
       
        $result = mysqli_query($con, "SELECT * FROM komentar where IDFilma=$film"); 
        while ($row = $result->fetch_assoc()){
     ?>				
<div style="background-color:darkgray">
<p align="top"><b>Korisnik 1</b></p>
<p><?php echo $row["Opis"];?></p>
</div>
 <form action="http://localhost/projekat/obrisiKomentar.php" method="post">
 <input type="submit" value="obrisi <?php echo $row["IDKomentar"];?>" name="id">
 </form><br>
 <?php }
mysqli_close($con);?>
</tr>
</table>

	</body>
</html>