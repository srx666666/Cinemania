<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> <?php header('Content-type: text/html; charset=utf-8'); session_start();?>
<?php 

if (!isset($_SESSION['user'])) {
    
    header("Location: index.php");
die();
    
}
       $con = mysqli_connect("localhost", "root", "", "cinemania");
        
        $con->set_charset('utf8');
        $username=$_SESSION['user']['KorisnickoIme'];
        $vip = mysqli_query($con, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'"); 
        $result=$vip->fetch_assoc();
        
        if($result['VIPKorisnik']!=2){ 
            
            header("Location: index.php");
            die();
        }

?>
<html >
    <head>
    <!-- Material Design Lite -->

<meta charset="UTF-8">
    <!-- Material Design icon font -->
	<link rel="stylesheet" type="text/css" href="p.css">
   <!-- <link rel="stylesheet" type="text/css" href="material.min.css">-->
	
  </head>
	<body>

	 
<img src="slike/logo.png" width='250px'>
		
	
		        <!-- Uses a transparent header that draws on top of the layout's background -->



  
  

  	<div class="mdl-layout">
       	<form name="greska" method="post" action="greska.php">
  <table  height="80%" border="0" align="center" bgcolor='white' >
				<tr  > <td align="center" colspan='2'><font size='5'><b>PRIJAVA UOCENE GRESKE</b></font><hr></td></tr>
				<tr> 
					
				
					<td colspan="2" width="100%"><!-- Simple Textfield -->

  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" name="naziv" placeholder="Naziv filma kod koga je uocena greska" required oninvalid="this.setCustomValidity('Ovo polje je obavezno, molimo Vas da ga popunite!')"
 oninput="setCustomValidity('')">
 

  </div>

				</td>
				</tr>	
				<tr> 
					
					
				    <td colspan="2" width="100%"> 
					<div class="mdl-textfield mdl-js-textfield" >
   <textarea class="mdl-textfield__input" type="text" rows= "10"  id="sample5" name="opis" placeholder="Opis greske" required oninvalid="this.setCustomValidity('Ovo polje je obavezno, molimo Vas da ga popunite!')"
 oninput="setCustomValidity('')"></textarea>
   
  </div></td>
					
 
				</tr>
			
				
   
				<tr><td  align="center"><button type='submit' class="mdl-button  mdl-button--raised  mdl-button--accent">
  Potvrdi
</button></td>
<td align="center">
<button class="mdl-button  mdl-button--raised mdl-button--accent" onclick="window.close()">
  Odustani
</button></td> </tr> 
						</table>
				    
				
		</form>

			
		<!-- Accent-colored raised button with ripple -->
</div>
	</body>
</html>
