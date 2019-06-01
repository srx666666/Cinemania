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
	  <a href = "Pregled.html">
<img src="logo.png" width='20%'>
</a>

  <div class="description">
                                <h1 style="margin-bottom:0;" align="center">Aladin i leteći ćilim (sinhro.)</h1>
								<table width='60%' align="center"> 
								<tr> <td width='40%'>
								<a href="Rezervacija.html"><b>Rezervisi kartu</b></a>
	<div class="original" style="margin-bottom: 10px;">Hodja fra Pjort </div>                                
								
	<span>Žanr:</span> Crtani<br/>
	<span>Trajanje:</span> 1h 21min<br/>
	<span>Režija:</span> Karsten Kiilerich<br/>
	<span>Scenario:</span> Karsten Kiilerich<br/>
	<span>Uloge:</span> Vibeke Dueholm, Peter Frödin, Erik Holmey ...<br/>
	<span>Sinhronizacija:</span> Peđa Damnjanović, Miomira Dragićević, Marko Dolaš ...<br/>      
<span>Ocena nasih korisnika: 8/10<br/>
                            </div>
                           	</li>
                        </ul>			
                        
										</td>	
                       <br class="clear" />
						<div class="text">
<td>
Aladin živi u Pjortu, malom pustom selu u Bulgislavu, zajedno sa majkom, ocem i kozom Rajkom. Pjort je lepo i zanimljivo mesto, ali vrlo malo, pa Aladin sanja o pustolovinama u velikom svetu koji se nalazi iza planina na horizontu. Aladinov otac uopšte ne podržava svog sina. Insistira da se smiri. Svet nisu pustolovine, nego opasnosti i ljudi iz malog mesta ne treba da se mešaju sa onima iz vanjskg sveta. Od dečaka se očekuje da pođe stopama svog oca i postane krojač. Kada Aladin dobije nepredviđenu šansu, on je zgrabi oberučke. Na fantastičnom letećem tepihu, koga je dobio od El Faze, Aladin sa svojom vernom prijateljicom kozom Rajkom, leti prema suncu sa zadatkom da vrati El Fazi izgubljeno unuče. 
</div>
<br class="clear" />
	
	</td></tr>
<tr>	<td colspan='2'>
<div class="text">
	<div class="text">
<br class="clear"/>
<iframe width="100%" height="300" src="https://www.youtube.com/embed/Or8AZTFlaw8?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br/>
</td>

</tr>
<tr>
	<td colspan="2" align = "right" >
		<br>
		<div valign = "center">
			<b fontsize = 2 > Ocena: </b>
		
		</div>
			
		<img src="stars.png" alt="stars">
	</td>
</tr>
</table>
	</div>
</div>						
</div>
</div>
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