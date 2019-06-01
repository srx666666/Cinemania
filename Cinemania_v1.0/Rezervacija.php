<?php session_start();$_SESSION["user"]="mnb"; if (isset($_SESSION['user'])==false)
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
		<a href = "pocetna.html">
		  <img class="logo" src="logo.png">
		</a>
          <span class="mdl-layout-title"><font size='5'>&nbspRezervisanje karata</font></span>
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
  <p><font size='6'>Korisnik</font></p>
	<a class="stavka" href=""><font size='5'>Preporuci mi film</font></a>
		
         <a  class="stavka" href="prijava_greske.html"><font 	size='5'>Prijavi gresku</font></a>
      
   	
 
      
   

</div>
           
     
	  </td>
	  <form name="izmene" action="rezervacijaKarte.php" method="post">
	  <td>
      <main class="mdl-layout__content">
	 <table width='60%' align='center'> 
	<div class="theatre">
  <div class="screen-side">
    <div class="screen">Screen</div>
    <h3 class="select-text">Please select a seat</h3>
  </div>
  <div class="exit exit--front">
  </div>
  <ol class="cabin">
  <?php
		$brojevi=array("1","2","3","4","5","6","7","8","9","10");
		foreach ($brojevi as $broj)
		{
  ?>
    <li class="row row--<?php echo $broj?>">
      <ol class="seats" type="A">
	  
		<?php
		$link = mysqli_connect("localhost", "root", "", "cinemania");
		$slova=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N");
		$idp=1;//$_SESSION["IDProjekcije"];
		foreach ($slova as $slovo)
		{
			$sql="SELECT * FROM Karta WHERE IDProjekcije=$idp and BrojSedista='$broj$slovo'";
			$result=mysqli_query($link,$sql);
			$rowcount=mysqli_num_rows($result);
			if ($rowcount==0)
			{
				?>
				<li class="seat">
				  <input type="checkbox" id="<?php echo $broj?><?php echo $slovo?>" name="<?php echo $broj?><?php echo $slovo?>" />
				  <label for="<?php echo $broj?><?php echo $slovo?>"><?php echo $broj?><?php echo $slovo?></label>
				</li>
				<?php
			}
			else
			{
				?>
					<li class="seat">
				  <input type="checkbox" disabled id="<?php echo $broj?><?php echo $slovo?>" name="<?php echo $broj?><?php echo $slovo?>" />
				  <label for="<?php echo $broj?><?php echo $slovo?>"><?php echo $broj?><?php echo $slovo?></label>
				</li>
				<?php
			}
		}
		?>
      </ol>
    </li>
	<?php
	}
	mysqli_close($link);
	?>
  </ol>
</div><input type="checkbox" name="popust" 	value="Popust"> Popust
<input type="submit" value="submit">
</table>
</td>
</form>
  </body>
</html>