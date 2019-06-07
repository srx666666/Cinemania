<?php session_start();
	if ($_POST["funkcija"]=="Brisanje")
	{
		$film=$_POST["ime"];
		$link = mysqli_connect("localhost", "root", "","cinemania");
		$sql="delete from film where naziv='$film'";
		$result = mysqli_query($link,$sql);
		mysqli_close($link);
		header('Location: BrisanjeIzmena1.php');
	}
	else
	{	
		if ($_POST["funkcija"]=="Dodaj termine")
		{
			$ime=$_POST["ime"];
			$link = mysqli_connect("localhost", "root", "","cinemania");
			$sql="SELECT * FROM FILM WHERE naziv='$ime'";
			$result=mysqli_query($link,$sql);
			if (mysqli_num_rows($result)>0)
			{
				$sql="select idfilma from film where naziv='$ime'";
				$result=mysqli_query($link,$sql);
				$row=$result->fetch_assoc();
				$_SESSION["film"]=$row["idfilma"];
				mysqli_close($link);
				header('Location: termin.php');
			}
			else
			{
				mysqli_close($link);
				header('Location: BrisanjeIzmena1.php');
			}
		}
		else
		{
			$link = mysqli_connect("localhost", "root", "","cinemania");
			$ime=$_POST["ime"];
			if (isset($_POST["opis"])==true and $_POST["opis"]!="")
			{
				$opis=$_POST["opis"];
				$sql="UPDATE FILM SET opis='$opis' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["trajanje"])==true)
			{
				$trajanje=$_POST["trajanje"];
				$sql="UPDATE FILM SET DuzinaTrajanja=$trajanje where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["zanr"])==true and $_POST["zanr"]!="")
			{
				$zanr=$_POST["zanr"];
				$sql="UPDATE FILM SET zanr='$zanr' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["glumci"])==true  and $_POST["glumci"]!="")
			{
				$glumci=$_POST["glumci"];
				$sql="UPDATE FILM SET glumci='$glumci' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["reziser"])==true  and $_POST["reziser"]!="")
			{
				$reziser=$_POST["reziser"];
				$sql="UPDATE FILM SET reziser='$reziser' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["scenarista"])==true and $_POST["scenarista"]!="")
			{
				$scenarista=$_POST["scenarista"];
				$sql="UPDATE FILM SET scenarista='$scenarista' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["sinhronizacija"])==true and $_POST["sinhronizacija"]!="")
			{
				$sinhronizacija=$_POST["sinhronizacija"];
				$sql="UPDATE FILM SET sinhronizacija='$sinhronizacija' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			if (isset($_POST["slika"])==true and $_POST["slika"]!="")
			{
				$slika=$_POST["slika"];
				$sql="UPDATE FILM SET ImgSrc='$slika' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			$trailer=$_POST["trailer"];
			if (isset($_POST["trailer"])==true and $_POST["trailer"]!="")
			{
				$trailer=$_POST["trailer"];
				$sql="UPDATE FILM SET TrailerSrc='$trailer' where naziv='$ime'";
				$result = mysqli_query($link,$sql);
			}
			mysqli_close($link);
			header('Location: BrisanjeIzmena1.php');
		}
	}
	
	?>